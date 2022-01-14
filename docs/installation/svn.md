[Laravel Lang](https://github.com/Laravel-Lang/lang) / [Main Page](../index.md) / [Installation](../index.md#installation) / Via SVN

# Via SVN

> When installing the package this way, you will need to manually copy the files from the `vendor/laravel-lang/lang` folder into your application.
>
> If you want to automate the process, then use one of the [`publishers`](managers.md).

Run this in your project directory:

```sh
# Laravel 5:
svn export https://github.com/Laravel-Lang/lang/trunk/src/[language-code] resources/lang/[language-code]

# Laravel 4:
svn export https://github.com/Laravel-Lang/lang/branches/laravel4/[language-code] app/lang/[language-code]
```

Replace `[language-code]` by any of the languages listed.
