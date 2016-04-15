# Laravel-lang

In this repository, you can find the lang files for the framework PHP, [Laravel 4&5](http://www.laravel.com).

## How add languages in my app ?

### Installation by GitHub

 * Clone the [GitHub repository](https://github.com/caouecs/laravel-lang/) : *git clone https://github.com/caouecs/Laravel-lang.git*
 * Or download the [zip file](https://github.com/caouecs/laravel-lang/archive/master.zip)
 * Choose the branch:
    * `laravel4` for Laravel4 project
    * `master` for Laravel5 project
 * Copy the folders of languages that you want, in *app/lang* folder of your application Laravel


### Installation by Composer

 * For Laravel 5.2 : add `"caouecs/laravel-lang": "~3.0"` in your `composer.json` in "require"
 * For Laravel 5/5.1 : add `"caouecs/laravel4-lang": "~2.0"` in your `composer.json` in "require"
 * For Laravel 4 : add `"caouecs/laravel4-lang": "~1.0"` in your `composer.json` in "require"
 * Do "composer update"
 * Files of languages are in "vendor/caouecs/laravel-lang" directory
 * Copy the folders of languages that you want, in *app/lang* (*resources/lang* in laravel 5) folder of your application Laravel

### Installation by Command

If you have a Laravel5 project, you can use `laravel-lang` project of overtrue : *composer require "overtrue/laravel-lang:dev-master"*

### Language by default in your app

In the file *app/config/app.php*, change the value of *locale* by the short name of your language.

## Contributing

Please see [Contributing.md](Contributing.md) for details.