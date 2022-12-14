# Contributing

Contributions are **welcome** and will be fully **credited**.

We accept contributions via Pull Requests on [Github](https://github.com/Laravel-Lang/lang).

## How can I add a language in this project ?

* Fork this repository;
* Make sure you have [PHP 8.1](https://www.php.net) or higher installed on your computer;
* Install dependencies by running console command:
  ```bash:no-line-numbers
  composer update
  ```
* Call the console command, passing in the argument the name of the localization to be added. Localization code must comply
  with [ISO-15897](https://laravel.com/docs/8.x/localization) and [ISO-639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) (ex: `fr` for French):
  ```bash:no-line-numbers
  vendor/bin/lang create fr
  ```
* This command will create all the necessary files and fill them with initial data. The files will be located in the `locales/{locale}` directory;
* Keep in mind that the `*-inline.json` files does not come with Laravel and the idea of this file is not to put a specific name to each attribute (as in `validation.php`)
  but a generic name for the validation attributes. Therefore in the translations of this file the placeholder `:attribute` **should not** appear.
* Add a pull request with the name of the language
  > ex: [fr]: Added new localization

## How can I fix a file ?

* Fork this repository;
* Update the files;
  > Note that in inline files (`json-inline.json` and `php-inline.json`), keys are the "non-inline" option.
  >
  > For example:
  > ```json
  > {
  >   "The :attribute must be at least :length characters.": "This field must be at least :length characters."
  > }
  > ```
* Add a pull request with the name of the language
  > ex: [fr]: Updated translations

## What should I do if there is a tag whose translation is the same as in English?

In some languages there are some strings whose translation is the same as in English. In this case, the script that generates the [status](status.md) adds them by default to the
list of pending translations. This affects the *completion status* for this language which would never be marked in *status list* with (
✔) but with (❗) even if all other strings were translated.

We can avoid this situation in the following way:

* Fork this repository if you haven't already;
* Create a `_excludes.json` file in the localization folder if it doesn't already exist;
* This file contains an array of values for each exception.
  > For example, we need to exclude Micronesia from the status check for Italian:
  >
  > _locales/it/json.json_:
  > ```json
  > {
  >     "Micronesia, Federated States Of": "Micronesia"
  > }
  > ```
  >
  > _locales/it/\_excludes.json_:
  > ```json
  > [
  >     "Micronesia"
  > ]
  > ```

* Add these changes to the pull request you will send.
