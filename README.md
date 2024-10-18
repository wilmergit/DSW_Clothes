<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Virtual Clothes

Virtual Clothes is the perfect website to share your hand made clothes for every type of people.

## Getting Started 🚀

See Installation for instructions on how to deploy the project.

### Pre-requisitos 📋

-   **[IDE]** - Integrated Development Environment. In our case, we used Visual Studio Code (https://code.visualstudio.com). It can be downloaded from the official website.

-   **[Node]** - A runtime environment that allows developers to run JavaScript on the server side. We can download it from the official website (https://nodejs.org/en/), it's recommended to use the LTS version.

-   **[MySQL_Server_8.0]** - Database. Download it from the official website (https://dev.mysql.com/downloads/installer/). IMPORTANT: During installation, you will be asked to create an administrator password, which is important to remember for later use.

-   **[Laragon]** - A portable, fast, and powerful local development environment for PHP, Node.js, Python, and more. It provides an easy setup for local servers and databases, including Apache, MySQL, and Nginx. You can download it from the official website (https://laragon.org).

-   **[PHP]** - A popular server-side scripting language designed for web development. It is widely used to create dynamic and interactive websites. You can download it from the official website (https://www.php.net). To work with Laravel 11, PHP 8.2 or higher is required.

### Installation 🔧

-   First clone the repository to your machine from the following url.

```
git clone https://github.com/EchedeyHenr/art_vault.git
```

-   Once you have the clone open Laragon, start it and open a terminal to access the folder.

```
cd art-vault
```

-   For it to work you need to install npm and composer, use the following commands.

```
npm install
composer install
```

-   Now you just have to acces de database and link it with the app.

Make sure you have a file called ".env", it contains the information neccesary to open the database. For that matter it is a very dangerous file so keep it to you.

-   To run the migration for the table in our Database, we will use the following command:

```
php artisan migrate
```

This command will create the necessary tables for our application to function.

-   (OPTIONAL) If we want to have test data in our table, we will execute the following command:

```
php artisan db:seed --class=PaintingsTableSeeder
```

This command will insert some records into our Database.

-   Now we can start the application:

```
php artisan serve
```

## Built With

-   [VisualCodeStudio](https://code.visualstudio.com/) - The web framework used
-   [Laragon](https://laragon.org/) - Used to generate RSS Feeds

-   [JavaScript](https://developer.mozilla.org/es/docs/Web/JavaScript)

-   [PHP](https://www.php.net/manual/es/intro-whatis.php)

-   [CSS](https://developer.mozilla.org/es/docs/Web/CSS)

## Authors

-   **Wilmer Zeas Rodriguez**

## Acknowledgments

-   Classmates
-   Tiburcio
-   Google.com
