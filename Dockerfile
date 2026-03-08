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

CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
