
# Laravel Framework 5.4 ,Sentinel,Crud Generator

## Starter Site based on on Laravel 5.4 
* [Features](#feature1)
* [Requirements](#feature2)
* [How to install](#feature3)
* [Application Structure](#feature4)
* [Troubleshooting](#feature5)
* [License](#feature6)
* [Additional information](#feature7)
* [How Starter site is look like](#feature8)
* [Advanced Alternatives](#feature9)

<a name="feature1"></a>
## Starter Site Features:
* Laravel 5.4.x
* Twitter Bootstrap 3.x
* Back-end
	* Automatic install and setup website.
	* User management.
	* Role management.
	* Dashboard.
	* Gentelella Dashboard Ready.
* Front-end
	* User login, registration
	* soon will be more...
* Packages included:
	* Datatables Bundle
	* Sentinel
	* Crud generator

-----
<a name="feature2"></a>
##Requirements

	PHP >= 5.6.4
	OpenSSL PHP Extension
	PDO PHP Extension
	Mbstring PHP Extension
	Tokenizer PHP Extension
	XML PHP Extension

-----
<a name="feature3"></a>
##How to install:
* [Step 1: Get the code](#step1)
* [Step 2: Use Composer to install dependencies](#step2)
* [Step 3: Create database](#step3)
* [Step 4: Install](#step4)
* [Step 5: Start Page](#step5)

-----
<a name="step1"></a>
### Step 1: Get the code - Download the repository

    https://github.com/roladn/laravel-sentinel-crud-starter.git

Extract it in www(or htdocs if you using XAMPP or MAMP) folder and put it for example in laravelStartersite folder.

-----
<a name="step2"></a>
### Step 2: Use Composer to install dependencies

Laravel utilizes [Composer](http://getcomposer.org/) to manage its dependencies. First, download a copy of the composer.phar.
Once you have the PHAR archive, you can either keep it in your local project directory or move to
usr/local/bin to use it globally on your system.
On Windows, you can use the Composer [Windows installer](https://getcomposer.org/Composer-Setup.exe).
Open terminal and go to the project foleder
Then run:

    composer dump-autoload
    composer install --no-scripts

-----
<a name="step3"></a>
### Step 3: Create database

If you finished first three steps, now you can create database on your database server(MySQL). You must create database
with utf-8 collation(uft8_general_ci), to install and application work perfectly.
Just go to the phpmyadmin and create the new database
After that, copy .env.example and rename it as .env and put connection and change default database connection name, only database connection, put name database, database username and password.

-----
<a name="step4"></a>
### Step 4: Install

Now that you have the environment configured, you need to create a database configuration for it. For create database tables use this command:

    php artisan migrate

And to initial populate database use this:

    php artisan db:seed

If you install on your localhost in folder laravel5startersite, you can type on web browser:

	http://localhost/laravel5startersite/public
-----
<a name="step5"></a>
### Step 5: Start Page

You can now login to admin part of Laravel Framework 5.4  Site:

    username: admin@admin.com
    password: admin


-----
<a name="feature5"></a>
## Troubleshooting

### RuntimeException : No supported encrypter found. The cipher and / or key length are invalid.

    php artisan key:generate

### Site loading very slow

	composer dump-autoload --optimize
OR

    php artisan dump-autoload

-----
<a name="feature6"></a>
## License

This is free software distributed under the terms of the MIT license

-----
<a name="feature7"></a>
## Additional information

Inspired by and based on [andrew13's Laravel-4-Bootstrap-Starter-Site](https://github.com/andrew13/Laravel-4-Bootstrap-Starter-Site)

----
<a name="feature8"></a>
##How Starter Site is look like

![Index](http://prntscr.com/f258sh)
![Login](http://i58.tinypic.com/r7p4et.jpg)
![Register new user](http://i61.tinypic.com/fvcz5x.jpg)
![Admin dashboard](http://i58.tinypic.com/b9g2g1.jpg)
![Admin users](http://i60.tinypic.com/301hemp.jpg)
![Admin list users](http://i58.tinypic.com/2ujl5dh.jpg)

----
<a name="feature9"></a>
## Advanced alternatives
If you are interested in advanced starter sites where you can get 70+ admin pages, 20+ frontend pages with color schemes and a CRUD generator then visit below links

[Roland Alla](http://rolandalla.com)

[Crud Generator](https://github.com/roladn/laravelcrud)

[Sentinel Authentication](https://cartalyst.com/manual/sentinel/2.0)

[Gentelella Dashboard](https://goo.gl/NI1sGa)