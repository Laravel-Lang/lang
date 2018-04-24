# Contributing

Contributions are **welcome** and will be fully **credited**.

We accept contributions via Pull Requests on [Github](https://github.com/caouecs/Laravel-lang).

## How can I add a language in this project ?

* fork this repository
* create a directory in *src* with the short name of the language (ex: fr for French) from ISO-639-1 ( see [Wikipedia](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) )
* copy these four files of the English version with your translation : from *script/en* directory
* run [PHP-cs-fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer)
    * if installed to global, run `php-cs-fixer fix`.
    * if installed to project local, run `vendor/bin/php-cs-fixer fix`.
* add a pull request with the name of the language
    * ex: [fr] New language

## How can I fix a file ?

* fork this repository
* update the file
* run [PHP-cs-fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer)
    * if installed to global, run `php-cs-fixer fix`.
    * if installed to project local, run `vendor/bin/php-cs-fixer fix`.
* add a pull request with the name of the language
    * ex: [fr] Update validation for number in validation

## Status of files

* todo.md

### Update todo file

```php
php script/todo.php
```