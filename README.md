# E-Commerce App

## Introduction
To get started with this project, first clone it to your local machine
*Note* Make sure you have composer installed

```bash
git clone https://github.com/arthurkay/e-commerce.git
```

Then copy the .env.example to .env
```bash
cp .env.example .env
```

After that, generate a token key
```bash
php artisan key:generate
```

Create a database and give it a name, e.g ecommerce \
For example in MYSQL:
```bash
CREATE DATABASE ecommerce;
```

Open the [.env](.env) file and set below paramaters
```.env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=matre
DB_USERNAME=arthur
DB_PASSWORD=toot

CHANNEL_ID=5987
SECRET="secret key goes here"
```

After that, open [UsersTableSeeder](database/seeds/UsersTableSeeder.php) file and edit the user details. Replace those with yours and save the file.

For test purposes run the folowing commands to create database entries.

```bash
php artisan migrate:fresh --seed
```

The above command creates a database and populates it with data from the databases directory.


Happy coding.