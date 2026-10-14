#!/bin/bash
set -e

# Default port to 80 if not provided by Render
export PORT="${PORT:-80}"
echo "=> Starting container on port ${PORT}..."

# Replace PORT in Nginx configuration template
mkdir -p /etc/nginx/http.d
envsubst '${PORT}' < /etc/nginx/templates/default.conf.template > /etc/nginx/http.d/default.conf

# Setup SQLite database if using sqlite
if [ "${DB_CONNECTION:-sqlite}" = "sqlite" ]; then
    echo "=> Ensuring SQLite database file exists..."
    mkdir -p /var/www/html/database
    touch /var/www/html/database/database.sqlite
    chown -R www-data:www-data /var/www/html/database
    chmod -R 775 /var/www/html/database
fi

# Ensure storage and cache directory permissions
echo "=> Setting storage & cache permissions..."
mkdir -p /var/www/html/storage/framework/{sessions,views,cache} /var/www/html/storage/logs /var/www/html/bootstrap/cache
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Create storage symlink if missing
php artisan storage:link --force || true

# Cache configurations if APP_KEY is available
if [ -n "$APP_KEY" ]; then
    echo "=> Optimizing Laravel for production..."
    php artisan config:cache || true
    php artisan route:cache || true
    php artisan view:cache || true
fi

# Run database migrations
if [ "${RUN_MIGRATIONS:-true}" = "true" ]; then
    echo "=> Running database migrations..."
    php artisan migrate --force || true
fi

echo "=> Launching Nginx and PHP-FPM via Supervisord..."
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
