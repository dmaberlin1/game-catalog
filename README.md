# Game Catalog (Laravel 11)

The project is a video game catalogue supporting CRUD (create, edit, delete, view) with filtering, pagination and image uploading.



# Installation
+ To get started, the following steps needs to be taken:
+ Clone the repo. 
 ```bash
git clone https://github.com/dmaberlin1/game-catalog.git cd game-catalog
```
+ `cd application`
+ `cp .env.example .env` to use laravel env config file (configuration needed, be sure about DB_HOST as db container name)
+ `composer install`
+ `cd ..` to back the project directory.
+ `cp .env.example .env` to use docker env config file (configuration needed)
+ Run `docker-compose up -d` to start the containers.
+ Run `docker exec -it app-php-fpm php artisan key:generate`
+ Visit http://localhost to see your Laravel application.
+ Try to connect 127.0.0.1:5432 to access Postgres
+ After starting, note that one directory and one file will be created with name *postgres* and file *data*, this files are Database archives

# Usage
+ `docker-compose up -d` to start all containers
+ `docker-compose down` to stop all containers
+ If you need to restart after modifying *docker-compose.yml* restart with `docker-compose down` and `docker-compose up -d`
+ If you need to run laravel command on running app `docker exec -it app-php-fpm <command>`
+ or some connand in deattach `docker exec -itd app-php-fpm <command>`
+ Start migrations and fill the database:
```bash
docker-compose exec app php artisan migrate --seed
```
+ Open in a browser:
```bash
http://localhost:8000
``` 


## 📌 Functionality
✔️ CRUD (add, edit, delete)  
✔️ Pagination  
✔️ Filtering by title, genre, platform  
✔️ Image Upload  
✔️ Docker for rapid deployment

## 🚀 Development
- Laravel 11
- PHP 8
- MySQL 8
- Docker + Nginx
- TailwindCSS

## 🛠 Running tests
```bash
docker-compose exec app php artisan test
```
