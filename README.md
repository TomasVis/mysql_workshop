copy .env.example to .env
composer install
php artisan migrate:fresh --seed
