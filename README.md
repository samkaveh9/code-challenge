## Project setup


#### setup composer
```
composer install
```

### copy .env.example file to .env

#### generate application key
```
php artisan key:generate
```


#### create database and then migrate the tables
```
php artisan migrate
```
#### link storage directory in public folder
```
php artisan storage:link
```
