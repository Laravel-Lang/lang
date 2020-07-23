# Laravel-lang

In this repository, you can find the lang files for the framework PHP, [Laravel 4/5/6/7](https://laravel.com).

## News

* in version 6.1, we propose a new file by language: `validation-inline.php` ( see #1268 )
* in version 7, we propose new directory names to follow ISO-15897 ( see #1269 )

## Install

#### Via Composer
Install the Laravel-lang package to your Laravel project with composer using command from the table below based on the version of Laravel you are using:

| Laravel version                         | Composer command                             |
| --------------------------------------- | -------------------------------------------- |
| Laravel 7.x and new directory names | `composer require caouecs/laravel-lang:~7.0` |
| Laravel 7.x                             | `composer require caouecs/laravel-lang:~6.1` |
| Laravel 6.x                             | `composer require caouecs/laravel-lang:~5.0` |
| Laravel 5.8                             | `composer require caouecs/laravel-lang:~4.0` |
| Laravel 5.1-5.7                         | `composer require caouecs/laravel-lang:~3.0` |
| Laravel 5                               | `composer require caouecs/laravel-lang:~2.0` |
| Laravel 4                               | `composer require caouecs/laravel-lang:~1.0` |


##### Copy files
After adding the dependency using composer (as described above) to your application you can find the language files under the directory `vendor/caouecs/laravel-lang`.

Copy the folders (and JSON files) of languages that you want to use, into the directory `resources/lang` of your Laravel application (or `app/lang` in Laravel 4).


#### Via GitHub

* Clone the [GitHub repository](https://github.com/caouecs/laravel-lang/) : *git clone https://github.com/caouecs/Laravel-lang.git*
* Or download the [zip file](https://github.com/caouecs/laravel-lang/archive/master.zip)
* Choose the branch:
    * `laravel4` for Laravel 4 project
    * `master` for Laravel 5, 6, 7 projects
* Copy the folders of languages that you want, in `resources/lang` folder of your Laravel application (or `app/lang` in Laravel 4).


#### Via SVN

Run this in your project directory:

```sh
# Laravel 5:
svn export https://github.com/caouecs/Laravel-lang/trunk/src/[language-code] resources/lang/[language-code]

# Laravel 4:
svn export https://github.com/caouecs/Laravel-lang/branches/laravel4/[language-code] app/lang/[language-code]
```

Replace `[language-code]` by any of the languages listed [here](src).


## Usage [Laravel only]

In the file *config/app.php*, change the value of *locale* by the short name of your language (*app/config/app.php* in Laravel 4).


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.


## Status of files

* Check the [todo.md](todo.md) file to see the missing translations.


## Projects based on this package

* [LaravelLang by ARCANEDEV](https://github.com/ARCANEDEV/LaravelLang) - Translations manager and checker for Laravel.
* [Laravel-lang by overtrue](https://github.com/overtrue/laravel-lang) - Command to add languages in your project.
* [laravel-lang-publisher by Andrey Helldar](https://github.com/andrey-helldar/laravel-lang-publisher) - Easy installation and update of translation files for your project.

## Credits

- [caouecs](https://github.com/caouecs)
- [All Contributors](https://github.com/caouecs/Laravel-lang/graphs/contributors)
