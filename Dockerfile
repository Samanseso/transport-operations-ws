FROM node:20

RUN apt-get update && apt-get install -y --no-install-recommends \
    php-cli php-mbstring php-xml php-zip php-curl php-intl php-sqlite3 php-mysql \
    git unzip curl supervisor ca-certificates \
    && rm -rf /var/lib/apt/lists/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app

ENV COMPOSER_ALLOW_SUPERUSER=1
ENV COMPOSER_MEMORY_LIMIT=-1

# Copy composer files
COPY composer.json composer.lock ./

# Install PHP dependencies (skip scripts)
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-progress --no-scripts

# Node deps
COPY package*.json ./
RUN npm ci --silent

# Copy full project
COPY . .

# Run Laravel discovery now that routes exist
RUN php artisan package:discover --ansi

# Build frontend
RUN npm run build

COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

EXPOSE 8000

ENTRYPOINT ["/usr/local/bin/docker-entrypoint.sh"]
CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisor/conf.d/supervisord.conf"]