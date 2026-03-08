#!/usr/bin/env bash
set -e

# Use Render/host provided PORT or default to 8000
PORT=${PORT:-8000}

# Replace placeholder in supervisord.conf if present
if grep -q "%(ENV_PORT)s" /etc/supervisor/conf.d/supervisord.conf 2>/dev/null; then
  sed -i "s/%(ENV_PORT)s/${PORT}/g" /etc/supervisor/conf.d/supervisord.conf
fi

# Ensure storage and cache directories are writable
chown -R www-data:www-data storage bootstrap/cache || true
chmod -R 775 storage bootstrap/cache || true

exec "$@"
