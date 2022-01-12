copy .env.example to .env
composer install
php artisan key:generate
php artisan migrate:fresh --seed
