---
layout: default
root: ".."
title: Documentation
---

How add languages in my app ?
---

To add languages in your application:

* clone this [repository](https://github.com/caouecs/Laravel4-lang/)
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
* Greek (el)
* Hebrew (he) *partial*
* Polish (pl)
* Russian (ru)
* Spanish (es)
* Traditional Chinese (Hong Kong) (zh-HK)
* Turkish (tr)


How can I add a language in this project ?
---

* fork this [repository](https://github.com/caouecs/Laravel4-lang/)
* create a directory with the short name of the language (ex: fr for French)
* copy the three files of the english version with your translate
* add a pull request in the branch *develop* of this repository, with the name of the language


How can I fix a file ?
---

* fork this [repository](https://github.com/caouecs/Laravel4-lang/)
* update the file
* add a pull request in the branch *develop* of this repository, with the name of the language


How can I change the language by default in my app ?
---

In the file *app/config/app.php*, change the value of *language* by the short name of your language.