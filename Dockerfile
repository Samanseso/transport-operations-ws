FROM node:20

# Install PHP, common extensions, git, unzip and supervisor
RUN apt-get update && apt-get install -y --no-install-recommends \
    php-cli php-mbstring php-xml php-zip php-curl php-intl php-sqlite3 php-mysql \
    git unzip curl supervisor ca-certificates \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app

ENV COMPOSER_ALLOW_SUPERUSER=1
ENV COMPOSER_MEMORY_LIMIT=-1

# Copy composer files and minimal app files required by composer scripts
COPY composer.json composer.lock ./
COPY artisan ./artisan
COPY bootstrap ./bootstrap

# Install PHP dependencies (composer scripts can run because artisan exists)
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-progress

# Node deps
COPY package*.json ./
RUN npm ci --silent

# Copy rest of app
COPY . .

# If you used --no-scripts earlier, run discovery now:
# RUN composer run-script post-autoload-dump --no-interaction || true

# Build frontend assets
RUN npm run build

# Supervisord and entrypoint (optional)
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

EXPOSE 8000

ENTRYPOINT ["/usr/local/bin/docker-entrypoint.sh"]
CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
