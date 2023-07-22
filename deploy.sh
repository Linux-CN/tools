#!/bin/bash
git pull
chown -R www.www /data/wwwroot/alpha.linux.cn
find /data/wwwroot/alpha.linux.cn -type d -exec chmod 755 {} \;
find /data/wwwroot/alpha.linux.cn -type f -exec chmod 644 {} \;
sudo -u www yarn install
sudo -u www yarn run build
sudo -u www /usr/local/php/bin/php artisan route:clear
sudo -u www /usr/local/php/bin/php artisan config:clear
sudo -u www /usr/local/php/bin/php artisan view:clear
sudo -u www /usr/local/php/bin/php /usr/local/bin/composer install  --prefer-dist --no-dev -o
sudo -u www /usr/local/php/bin/php artisan migrate --force
sudo -u www /usr/local/php/bin/php artisan route:cache
sudo -u www /usr/local/php/bin/php artisan config:cache
sudo -u www /usr/local/php/bin/php artisan view:cache
sudo -u www /usr/local/php/bin/php artisan lang:update
curl https://oapi.dingtalk.com/robot/send?access_token=1a6e92b7273b75fb93803ec9133a30f18f135d644faaf6339fdbf155897d2278  \
 -H 'Content-Type: application/json' \
 -d '{"msgtype": "text","text": {"content":"服务部署成功"}}'
