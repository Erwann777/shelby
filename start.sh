#!/bin/sh
set -e

echo "==> Creating storage directories..."
mkdir -p /var/www/storage/framework/views
mkdir -p /var/www/storage/framework/cache/data
mkdir -p /var/www/storage/framework/sessions
mkdir -p /var/www/storage/logs

echo "==> Running migrations..."
php artisan migrate --force

echo "==> Caching config..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "==> Starting server on port ${PORT:-10000}..."
exec php -S 0.0.0.0:${PORT:-10000} -t public/ server.php