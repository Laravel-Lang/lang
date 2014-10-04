Laravel4-lang
=============

In this repository, you can find the lang files for the framework PHP, [Laravel 4&5](http://www.laravel.com).

Find more informations on http://caouecs.github.io/Laravel4-lang/

Laravel 5.0
---

The files of languages have been updated for Laravel 5, in `laravel5` branch.

* array for PHP 5.4+
* validation.filled, with same translation than validation.required


Laravel 4.0
---

We need your help to finish to translate `validation.php` file with array elements.

You can follow translations in the issue [#73](https://github.com/caouecs/Laravel4-lang/issues/73).

Laravel 4.1
---

### Password reminder sent

To be ready for the new version of Laravel, we need your help. In `reminders.php` file, a new line has been added :

    "sent" => "Password reminder sent!",

You can follow translations in the issue [#137](https://github.com/caouecs/Laravel4-lang/issues/137).

### Required without all

In `validation.php` file, a new line has been added :

    "required_without_all" => "The :attribute field is required when none of :values are present."

You can follow translations in the issue [#172](https://github.com/caouecs/Laravel4-lang/issues/172).

### Validation email

In `validation.php` file, the text for email has been updated :

    "email" => "The :attribute must be a valid email address."

You can follow translations in the issue [#187](https://github.com/caouecs/Laravel4-lang/issues/187).

### Required with all

In `validation.php` file, a new line has been added :

    "required_with_all" => "The :attribute field is required when :values is present."

You can follow translations in the issue [#193](https://github.com/caouecs/Laravel4-lang/issues/193).

Laravel 4.2
---

### Reset in reminders

In `reminders.php` file, a new line has been added :

    "reset" => "Password has been reset!"

You can follow translations in the issue [#258](https://github.com/caouecs/Laravel4-lang/issues/258).

### Validation.timezone

In `validation.php` file, a new line has been added :

    "timezone" => "The :attribute must be a valid zone."

You can follow translations in the issue [#259](https://github.com/caouecs/Laravel4-lang/issues/259).

---

How add languages in my app ?
---

### Installation by GitHub

 * Clone the [GitHub repository](https://github.com/caouecs/Laravel4-lang/) : *git clone https://github.com/caouecs/Laravel4-lang.git*
 * Or download the [zip file](https://github.com/caouecs/Laravel4-lang/archive/master.zip)
 * Copy the folders of languages that you want, in *app/lang* folder of your application Laravel


### Installation by Composer

 * Add *"caouecs/laravel4-lang": "dev-master"* in your `composer.json` in "require" or run *composer require caouecs/laravel4-lang*
 * Do "composer update"
 * Files of languages are in "vendor/caouecs/laravel4-lang" directory
 * Copy the folders of languages that you want, in *app/lang* folder of your application Laravel


### Language by default in your app

In the file *app/config/app.php*, change the value of *language* by the short name of your language.

---

How can I add a language in this project ?
---

* fork this repository
* create a directory with the short name of the language (ex: fr for French) from ISO-639-1 ( see [Wikipedia](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) )
* copy this three files of the english version with your translate
    * for [Laravel](https://github.com/laravel/laravel/tree/master/app/lang/en)
* add a pull request with the name of the language


How can I fix a file ?
---

* fork this repository
* update the file
* add a pull request with the name of the language
