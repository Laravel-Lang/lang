# Laravel-lang

[![Join the chat at https://gitter.im/caouecs/Laravel-lang](https://badges.gitter.im/caouecs/Laravel-lang.svg)](https://gitter.im/caouecs/Laravel-lang?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

In this repository, you can find the lang files for the framework PHP, [Laravel 4&5](http://www.laravel.com).

## Install

#### Via Composer
* For Laravel 5.* : run `composer require caouecs/laravel-lang:~3.0` in your project folder
* For Laravel 5 : run `composer require caouecs/laravel4-lang:~2.0` in your project folder
* For Laravel 4 : run `composer require caouecs/laravel4-lang:~1.0` in your project folder
* Files of languages are in "vendor/caouecs/laravel-lang" directory
* Copy the folders of languages that you want, in the *resources/lang* folder of your Laravel application (*app/lang* in Laravel 4).

#### Via GitHub

* Clone the [GitHub repository](https://github.com/caouecs/laravel-lang/) : *git clone https://github.com/caouecs/Laravel-lang.git*
* Or download the [zip file](https://github.com/caouecs/laravel-lang/archive/master.zip)
* Choose the branch:
    * `laravel4` for Laravel4 project
    * `master` for Laravel5 project
* Copy the folders of languages that you want, in *resources/lang* folder of your Laravel application (*app/lang* in Laravel 4).

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

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Status of files

* Check the [todo.md](todo.md) file to see the missing translations.

## Projects based on this package

* [LaravelLang by ARCANEDEV](https://github.com/ARCANEDEV/LaravelLang)
* [Laravel-lang by overtrue](https://github.com/overtrue/laravel-lang)
* [laravel-lang-installer by ablunier](https://github.com/ablunier/laravel-lang-installer)

## Credits

- [caouecs](https://github.com/caouecs)
- [All Contributors](https://github.com/caouecs/Laravel-lang/graphs/contributors)
