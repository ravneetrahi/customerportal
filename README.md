# Suit CRM Customer Portal

# Requirements

PHP >= 5.5
MCrypt PHP Extension
As of PHP 5.5, some OS distributions may require you to manually install the PHP JSON extension. 
When using Ubuntu, this can be done via apt-get install php5-json.

# Steps to install package 

composer install

edit .env_example and save as .env

php artisan key:generate

php artisan migrate

php artisan db:seed

