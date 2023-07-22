@servers(['web' => 'do'])

@story('deploy')
update-code
install-dependencies
rebuild-cache
@endstory

@story('update')
update-code
@endstory('update')


@task('update-code')
    cd /data/wwwroot/alpha.linux.cn
    git pull
    chown -R www.www /data/wwwroot/alpha.linux.cn
@endtask

@task('install-dependencies')
cd /data/wwwroot/alpha.linux.cn
sudo -u www /usr/local/php/bin/php /usr/local/bin/composer install  --prefer-dist --no-dev -o
npm install
npm run build
chown -R www.www /data/wwwroot/alpha.linux.cn/public
chown -R www.www /data/wwwroot/alpha.linux.cn/vendor
@endtask


@task('rebuild-cache')
cd /data/wwwroot/alpha.linux.cn
sudo -u www /usr/local/php/bin/php artisan route:clear
sudo -u www /usr/local/php/bin/php artisan config:clear
sudo -u www /usr/local/php/bin/php artisan view:clear
sudo -u www /usr/local/php/bin/php artisan route:cache
sudo -u www /usr/local/php/bin/php artisan config:cache
sudo -u www /usr/local/php/bin/php artisan view:cache
@endtask

@task('migrate')
cd /data/wwwroot/alpha.linux.cn
    sudo -u www /usr/local/php/bin/php artisan migrate --force
@endtask
