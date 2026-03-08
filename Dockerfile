FROM node:20

# Install PHP, Composer and supervisor
RUN apt-get update && apt-get install -y \
    php-cli php-mbstring php-xml unzip curl git supervisor \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app

# Cache PHP deps
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-progress

# Cache Node deps
COPY package*.json ./
RUN npm ci --silent

# Copy app
COPY . .

# Build frontend assets (php available for plugin hooks)
RUN npm run build

# Copy supervisord config
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

EXPOSE 8000

# Use Node 20 as base so we have npm/vite available
FROM node:20

# Install PHP, common extensions, git, unzip and supervisor
RUN apt-get update && apt-get install -y --no-install-recommends \
    php-cli php-mbstring php-xml php-zip php-curl php-intl php-sqlite3 php-mysql \
    git unzip curl supervisor ca-certificates \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /app

# Composer environment to avoid memory issues and allow running as root in container
ENV COMPOSER_ALLOW_SUPERUSER=1
ENV COMPOSER_MEMORY_LIMIT=-1
ENV PATH="/root/.composer/vendor/bin:${PATH}"

# Copy composer files first to leverage Docker layer cache
COPY composer.json composer.lock ./

# Install PHP dependencies (fail early if something is missing)
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-progress

# Copy package files and install Node deps (cache layer)
COPY package*.json ./
RUN npm ci --silent

# Copy the rest of the application
COPY . .

# Build frontend assets (php is available for any plugin hooks)
RUN npm run build

# Copy supervisord config and entrypoint
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Expose the port (container will use $PORT at runtime)
EXPOSE 8000

ENTRYPOINT ["/usr/local/bin/docker-entrypoint.sh"]
CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisor/conf.d/supervisord.conf"]


CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
