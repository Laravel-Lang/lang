---
layout: doc
title: Installation
---

Manual installation
---

* Clone the [GitHub repository](https://github.com/caouecs/Laravel4-lang/) or take the [zip file](https://github.com/caouecs/Laravel4-lang/archive/master.zip)
* Copy the folders of languages that you want, in *app/lang* folder of your application Laravel


Installation by Composer
---

* Add *"caouecs/laravel4-lang": "dev-master"* in your composer.conf in "require" or run *composer require caouecs/laravel4-lang*
* Do "composer update"
* Files of languages are in "vendor/caouecs/laravel4-lang" directory
* Copy the folders of languages that you want, in *app/lang* folder of your application Laravel


Language by default in your app
---

In the file *app/config/app.php*, change the value of *language* by the short name of your language.