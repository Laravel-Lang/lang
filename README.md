Laravel4-lang
=============

In this repository, you can find the lang files for the framework PHP, [Laravel 4](http://www.laravel.com).


How add languages in my app ?
---

To add languages in your application:

* clone this repository
* or take the [zip file](https://github.com/caouecs/Laravel4-lang/archive/master.zip)
* copy the folders of languages that you want, in *app/lang*



What languages can I find in this project ?
---

For the moment, we have:

* Arabic (ar)
* Bulgarian (bg)
* Chinese (zh-CN)
* Dutch (nl)
* French (fr)
* German (de)
* Polish (pl)
* Russian (ru)
* Spanish (es)
* Turkish (tr)


How can I add a language in this project ?
---

* fork this repository
* create a directory with the short name of the language (ex: fr for French)
* copy this three files of the english version with your translate
* add a pull request in the branch *develop* of this repository, with the name of the language


How can I fix a file ?
---

* fork this repository
* update the file
* add a pull request in the branch *develop* of this repository, with the name of the language


How can I change the language by default in my app ?
---

In the file *app/config/app.php*, change the value of *language* by the short name of your language.

Sources
-------

* Arabic (ar) : [AAlakkad](https://github.com/AAlakkad)
* Bulgarian (bg) : [RoumenDamianoff](https://github.com/RoumenDamianoff)
* Chinese (zh-CN) : https://github.com/laravel/laravel/pull/2035
* Dutch (nl) : https://github.com/laravel/laravel/pull/2039
* French (fr) : [Laravel-France](https://github.com/laravel-france)
* German (de) : [Hettiger](https://github.com/hettiger)
* Polish (pl) : https://github.com/laravel/laravel/pull/2031
* Russian (ru) : https://github.com/laravel/laravel/pull/2036
* Spanish (es) : [Nikoskip](https://github.com/nikoskip)
* Turkish (tr) : [Sineld](https://github.com/sineld)
