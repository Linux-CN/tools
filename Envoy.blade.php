@servers(['server' => 'do','local' =>'127.0.0.1'])

{{-- story for run, only run story for server --}}

@story('deploy')
push
update-code
install-dependencies
migrate
rebuild-cache
@endstory

@story('update')
push
update-code
@endstory('update')


{{-- command for server --}}


@task('update-code',[ 'on' => 'server'])
cd /data/wwwroot/alpha.linux.cn
git add .
git checkout -f
git pull
chown -R www.www /data/wwwroot/alpha.linux.cn
@endtask

@task('install-dependencies',[ 'on' => 'server'])
cd /data/wwwroot/alpha.linux.cn
sudo -u www /usr/local/php/bin/php /usr/local/bin/composer install  --prefer-dist --no-dev -o
npm install
npm run build
chown -R www.www /data/wwwroot/alpha.linux.cn/public
chown -R www.www /data/wwwroot/alpha.linux.cn/vendor
@endtask


@task('rebuild-cache',[ 'on' => 'server'])
cd /data/wwwroot/alpha.linux.cn
sudo -u www /usr/local/php/bin/php artisan cache:clear
sudo -u www /usr/local/php/bin/php artisan view:clear

sudo -u www /usr/local/php/bin/php artisan optimize
sudo -u www /usr/local/php/bin/php artisan view:cache
@endtask


@task('migrate',[ 'on' => 'server'])
cd /data/wwwroot/alpha.linux.cn
sudo -u www /usr/local/php/bin/php artisan migrate --force
@endtask

{{-- command for local --}}

@task('push',['on' => 'local' ])
git push
@endtask
