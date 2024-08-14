# small-shop-1

## Setup Instructions

### Prerequisities

Ensure you have Xampp installed. You can download it from [xampp.org](https://www.apachefriends.org/download.html)

Ensure you have Composer installed. You can download it from [composer.org](https://getcomposer.org/download/)

Ensure you have Visual Studio Code installed. You can download it from [VScode.org](https://code.visualstudio.com/download)

## Install Dependencies

## Go to Terminal

### 1. Project Setup

```
composer create-project larvel/larvel small-shop-1

```
### 2. Server command
    
```
cd small-shop-1
```

```
php artisan serve
```

### 3. Database and Migrations

To store data in Laravel, use the default SQLite or switch to MySQL by updating .env DB_* variables.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE="small-shop-1"
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Application's migrations
If using a database other than SQLite, create the database and run the application's migrations.

```
php artisan migrate
```



 
