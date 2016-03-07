Laravel-lang
=============

In this repository, you can find the lang files for the framework PHP, [Laravel 4&5](http://www.laravel.com).

---

News of 7 March 2016:

* validation: add *in_array*

News of 2 March 2016:

* validation: add *distinct*

News of 27 February 2016:

* validation: add *present*

---

How add languages in my app ?
---

### Installation by GitHub

 * Clone the [GitHub repository](https://github.com/caouecs/laravel-lang/) : *git clone https://github.com/caouecs/Laravel-lang.git*
 * Or download the [zip file](https://github.com/caouecs/laravel-lang/archive/master.zip)
 * Choose the branch:
    * `laravel4` for Laravel4 project
    * `master` for Laravel5 project
 * Copy the folders of languages that you want, in *app/lang* folder of your application Laravel


### Installation by Composer

 * For Laravel 4 : add `"caouecs/laravel4-lang": "~1.0"` in your `composer.json` in "require" or run *composer require caouecs/laravel4-lang*
 * For Laravel 5 : add `"caouecs/laravel4-lang": "~2.0"` in your `composer.json` in "require"
 * Do "composer update"
 * Files of languages are in "vendor/caouecs/laravel4-lang" directory
 * Copy the folders of languages that you want, in *app/lang* (*resources/lang* in laravel 5) folder of your application Laravel

### Installation by Command

If you have a Laravel5 project, you can use `laravel-lang` project of overtrue : *composer require "overtrue/laravel-lang:dev-master"*

### Language by default in your app

In the file *app/config/app.php*, change the value of *locale* by the short name of your language.

---

How can I add a language in this project ?
---

* fork this repository
* create a directory with the short name of the language (ex: fr for French) from ISO-639-1 ( see [Wikipedia](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) )
* copy these four files of the English version with your translation
    * for [Laravel](https://github.com/laravel/laravel/tree/master/resources/lang/en)
* run [PHP-cs-fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer)
    * if installed to global, run `php-cs-fixer fix`.
    * if installed to project local, run `vendor/bin/php-cs-fixer fix`.
* add a pull request with the name of the language


How can I fix a file ?
---

* fork this repository
* update the file
* run [PHP-cs-fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer)
    * if installed to global, run `php-cs-fixer fix`.
    * if installed to project local, run `vendor/bin/php-cs-fixer fix`.
* add a pull request with the name of the language

The files for Laravel 4 are in `laravel4` branch, and for Laravel 5, are in `master` branch.
