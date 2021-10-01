## Project Laravel 

## About the Project

Only a Sample Project not done yet

## File location
/home - Input and show the result.

## How to Install

How to use my Project you need to install "XAMPP, composer 2.1.18"

#### Windows

#### Linux

> Exporting PATH in bash before installing just ignore the directory not found for now. 

<pre> $ echo "PATH=$PATH:/opt/lampp/bin/php:~/.config/composer/vendor/bin" >> .bashrc </pre>

> Installing XAMPP
<pre>
$ wget https://www.apachefriends.org/xampp-files/8.0.11/xampp-linux-x64-8.0.11-0-installer.run
$ chmod +x xampp-linux-x64-8.0.11-0-installer.run
</pre>

> Installing Composer
<pre>
$ sudo curl -s https://getcomposer.org/installer | /opt/lampp/bin/php
$ sudo ln -s /opt/lampp/bin/php /usr/local/bin/php
$ sudo mv composer.phar /usr/local/bin/composer
</pre>

> Running

<pre>
$ git clone https://github.com/Gem7th/Laravel_login.git
$ cd Laravel_login
$ composer install
$ php artisan migrate
$ php artisan serve
</pre>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


