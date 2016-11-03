# quick-laravel-vuejs-application

Quick Laravel VueJS Application

### Setup application and test

```shell
npm install -g gulp karma-cli
npm install
php artisan migrate:refresh --seed --force
gulp
php artisan serve --port=8000
vendor/bin/phpunit
karma start
```

### Create Laravel 5 project with the following command:

```shell
composer create-project laravel/laravel ~/projects/github/bitclaw/quick-laravel-vuejs-application
php artisan ide-helper:generate
```

## Authentication scaffolding

```shell
php artisan make:auth
```

## Cache and config clearing commands

```shell
php artisan config:cache
php artisan cache:clear
```

### Commands to get database and migrations / seeds setup

```shell
mysql> CREATE DATABASE `quick_laravel_vuejs_application` /*!40100 COLLATE 'utf8_general_ci' */;
php artisan migrate:install
php artisan make:migration create_user_table
php artisan make:seeder UserTableSeeder
php artisan migrate
php artisan db:seed --class=UserTableSeeder
php artisan migrate:refresh --seed
```

## Errors

```shell
[ReflectionException]
Class UserTableSeeder does not exist
```

This is solved with the following commands (run in project root):

```shell
composer update
composer dump-autoload
```

```shell
[ErrorException]                                                                                                                                  
file_put_contents(/var/www/local/quick-laravel-vuejs-application/bootstrap/cache/services.php):
failed to open stream: No such file or directory
```

This is solved with the following commands (run in project root):

```shell
mkdir bootstrap/cache
sudo chmod 777 -R bootstrap/cache
```

```shell
ErrorException in helpers.php line 410:
File css/app.css not defined in asset manifest.
```

This is solved with the following commands (run in project root):

```shell
gulp
```

## Debugging Karma configuration error

Run Karma with the following flags:

```shell
karma start karma.config.js --log-level debug --single-run
```

### Use built-in web server for Laravel App (http://localhost:8000)

```shell
php artisan serve --port=8000
```

### Elixir and Gulp

When making changes to JS files , run gulp in order to get the latest changes in the front-end assets

```shell
gulp
```

### Unit tests

Simply run the following command from the shell in the project root directory:

```shell
phpunit
```

### LICENSE

> The MIT License (MIT)
> 
> Copyright (c) 2016 Daniel Chavez
> 
> Permission is hereby granted, free of charge, to any person obtaining a copy
> of this software and associated documentation files (the "Software"), to deal
> in the Software without restriction, including without limitation the rights
> to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
> copies of the Software, and to permit persons to whom the Software is
> furnished to do so, subject to the following conditions:
> 
> The above copyright notice and this permission notice shall be included in all
> copies or substantial portions of the Software.
> 
> THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
> IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
> FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
> AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
> LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
> OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
> SOFTWARE.
