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
DB_DATABASE=ecommerce
DB_USERNAME=username
DB_PASSWORD=password
```
