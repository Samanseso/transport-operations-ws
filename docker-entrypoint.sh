#!/usr/bin/env bash
set -e

# Use Render/host provided PORT or default to 8000
PORT=${PORT:-8000}
export PORT

# Ensure Reverb listens on the Render web service port
export REVERB_SERVER_HOST=${REVERB_SERVER_HOST:-0.0.0.0}
export REVERB_SERVER_PORT=${REVERB_SERVER_PORT:-$PORT}

# Ensure storage and cache directories are writable
chown -R www-data:www-data storage bootstrap/cache || true
chmod -R 775 storage bootstrap/cache || true

# Clear cached config (important when using Render env variables)
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear


# Run database migrations (fail fast if this does not succeed)
php artisan migrate --seed --force

# Start supervisor
exec "$@"
