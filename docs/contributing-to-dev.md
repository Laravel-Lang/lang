# Contributing

Contributions are **welcome** and will be fully **credited**.

We accept contributions via Pull Requests on [Github](https://github.com/Laravel-Lang/lang).

## How can I add a language in this project ?

* Fork this repository;
* Make sure you have [PHP 8.0](https://www.php.net) or higher installed on your computer;
* Install dependencies by running console command:
  ```bash
  composer update
  ```
* Call the console command, passing in the argument the name of the localization to be added. Localization code must comply
  with [ISO-15897](https://laravel.com/docs/8.x/localization) and [ISO-639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) (ex: `fr` for French):
  ```bash
  php app/add.php fr
  ```
* This command will create all the necessary files and fill them with initial data. The files will be located in the `locales/{locale}` directory;
* Keep in mind that the `*-inline.php` files does not come with Laravel and the idea of this file is not to put a specific name to each attribute (as in `validation.php`)
  but a generic name for the validation attributes. Therefore in the translations of this file the placeholder `:attribute` **should not** appear.
* Add a pull request with the name of the language
  > ex: [fr] New language

## How can I fix a file ?

* Fork this repository;
* Update the files;
* Add a pull request with the name of the language
  > ex: [fr] Update validation for number in validation

## What should I do if there is a tag whose translation is the same as in English?

In some languages there are some strings whose translation is the same as in English. In this case, the script that generates the [status](status.md) adds them by default to the
list of pending translations. This affects the *completion status* for this language which would never be marked in *status list* with (
✔) but with (❗) even if all other strings were translated.

We can avoid this situation in the following way:

* Fork this repository if you haven't already;
* Add a PHP file named with the short name of the language (ex: `es.php` for Spanish) inside the directory `excludes`;
* This php file must return an array of strings with each of the tags that we must exclude.
  > For example suppose that the strings `'Email'` and `'API Token'` in `es.json` (ex: for Spanish) do not need translation in this language and therefore want to exclude them. The PHP file `es.php` (for example) in `excludes` should have this structure which you can copy for other languages.

```php
<?php

/*
|--------------------------------------------------------------------------
| Exclusion list
|--------------------------------------------------------------------------
|
| This is a list of exclusions for words or phrases where the original
| form of the word has the same spelling in a given language.
|
*/

return [
    'API Token',
    'Email',
];
```

* Add these changes to the pull request you will send.
