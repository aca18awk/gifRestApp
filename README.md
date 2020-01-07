# gifRestApp
Application that fetches an animated gif for a given search term.
To create that application I followed the tutorial:
https://www.toptal.com/laravel/restful-laravel-api-tutorial

Running the API
First, create the database and add them to the .env file.

DB_DATABASE=your_db_name

DB_USERNAME=your_db_user

DB_PASSWORD=your_password

Then install, migrate, seed:

composer install

php artisan migrate

php artisan db:seed

php artisan serve

The API will be running on localhost:8000.
Titles of the gifs are random names of countries.

API routes:

localhost:8000/api/gifs/id/{id} - to search for gif using its ID

localhost:8000/api/gifs/all - to get all gifs in the database

localhost:8000/api/gifs/search/{title} - to search for gif using its title

localhost:8000/api/gifs/random - to get url and title of the random gif

