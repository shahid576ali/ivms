#!/bin/bash

# Download and install Composer
curl -sS https://getcomposer.org/installer | php
php composer.phar install --no-dev --optimize-autoloader

# Run Laravel commands
php artisan config:cache
php artisan route:cache
php artisan view:cache