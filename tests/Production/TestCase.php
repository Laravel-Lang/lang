<?php

declare(strict_types=1);

namespace Tests\Production;

use DragonCode\Support\Facades\Helpers\Filesystem\Directory;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use LaravelLang\Publisher\Concerns\Has;
use LaravelLang\Publisher\Concerns\Paths;
use LaravelLang\Publisher\Constants\Config;
use LaravelLang\Publisher\Constants\Locales;
use LaravelLang\Publisher\Constants\Locales as LocalesList;
use LaravelLang\Publisher\ServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;
use Tests\Production\Providers\AppServiceProvider;

abstract class TestCase extends BaseTestCase
{
    use Has;
    use Paths;

    protected $default = Locales::ENGLISH;

    protected $fallback = Locales::GERMAN;

    protected $locale = Locales::ALBANIAN;

    protected $locales = [
        LocalesList::BULGARIAN,
        LocalesList::DANISH,
        LocalesList::GALICIAN,
        LocalesList::ICELANDIC,
    ];

    protected $inline = true;

    protected function setUp(): void
    {
        parent::setUp();

        $this->reinstallLocales();
    }

    protected function getPackageProviders($app): array
    {
        return [
            ServiceProvider::class,
            AppServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        /** @var \Illuminate\Config\Repository $config */
        $config = $app['config'];

        $config->set('app.locale', $this->default);
        $config->set('app.fallback_locale', $this->fallback);

        $config->set(Config::PUBLIC_KEY . '.inline', $this->inline);

        $config->set(Config::PRIVATE_KEY . '.path.base', realpath(__DIR__ . '/../../vendor'));

        $config->set(Config::PUBLIC_KEY . '.excludes', [
            '{locale}' => ['Hello', 'World'],
            'auth'     => ['failed'],
        ]);
    }

    protected function copyFixtures(): void
    {
        $files = [
            'en.json',
            'auth.php',
        ];

        foreach ($files as $filename) {
            $from = realpath(__DIR__ . '/fixtures/' . $filename);

            $this->hasJson($filename)
                ? File::copy($from, $this->resourcesPath($filename))
                : File::copy($from, $this->resourcesPath($this->default . '/' . $filename));
        }
    }

    protected function refreshLocales(): void
    {
        app('translator')->setLoaded([]);
    }

    protected function reinstallLocales(): void
    {
        $this->deleteLocales();
        $this->installLocales();
    }

    protected function deleteLocales(): void
    {
        $path = $this->resourcesPath();

        Directory::ensureDelete($path);
    }

    protected function installLocales(): void
    {
        Artisan::call('lang:add', [
            'locales' => [$this->default, $this->fallback],
        ]);
    }
}
