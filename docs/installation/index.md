# Installation

> Note
> 
> If you want to automate the process, then use one of the [publishers](managers.md).

## Install the package

All you need to do to get started is add Laravel Lang to your composer dependencies:

```bash:no-line-numbers
composer require laravel-lang/lang --dev
```

When installing the package this way, you will need to manually copy the files from the `vendor/laravel-lang/lang` folder into your application.

But you won’t be able to just put the files, because. [Laravel](https://laravel.com/docs/localization#defining-translation-strings) structure is different. Therefore, you will need to either manually update your PHP and JSON files, replacing the keys in them, or use a [publisher](https://publisher.laravel-lang.com/installation/).
