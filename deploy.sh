#!/bin/bash
sudo -u www git pull
sudo -u www yarn install
sudo -u www yarn run build
sudo -u www /usr/local/php/bin/php artisan route:clear
sudo -u www /usr/local/php/bin/php artisan config:clear
sudo -u www /usr/local/php/bin/php artisan view:clear
sudo -u www /usr/local/php/bin/php /usr/local/bin/composer install  --prefer-dist --no-dev -o
sudo -u www /usr/local/php/bin/php artisan migrate
sudo -u www /usr/local/php/bin/php artisan route:cache
sudo -u www /usr/local/php/bin/php artisan config:cache
sudo -u www /usr/local/php/bin/php artisan view:cache
sudo -u www /usr/local/php/bin/php artisan lang:update
