# gifRestApp
Application that fetches an animated gif for a given search term.
To create that application I followed the tutorial:
https://www.toptal.com/laravel/restful-laravel-api-tutorial

Running the API
First, create the database and add them to the .env file.

DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_password
Then install, migrate, seed, all that jazz:

composer install
php artisan migrate
php artisan db:seed
php artisan serve
The API will be running on localhost:8000.
