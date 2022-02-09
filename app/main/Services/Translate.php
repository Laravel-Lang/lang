<?php

namespace LaravelLang\Development\Services;

use DragonCode\Support\Facades\Helpers\Str;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class Translate
{
    protected string $url = 'https://translate.api.cloud.yandex.net/translate/v2/translate';

    public function translate(string $locale, string $text): string
    {
        $content = $this->request($locale, $text);

        return $content['translations'][0]['text'];
    }

    protected function request(string $locale, string $text): array
    {
        $response = $this->client()->request('POST', $this->url, [
            RequestOptions::HEADERS => $this->headers(),
            RequestOptions::JSON    => $this->body($locale, $text),
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    protected function headers(): array
    {
        return [
            'Authorization' => 'Bearer ' . $this->apiKey(),
        ];
    }

    protected function body(string $locale, string $text): array
    {
        return [
            'targetLanguageCode' => $this->correctLocale($locale),

            'texts' => [$text],

            'folderId' => $this->folderId(),
        ];
    }

    protected function correctLocale(string $locale): string
    {
        return Str::before($locale, '_');
    }

    protected function client(): Client
    {
        return new Client();
    }

    protected function apiKey(): string
    {
        return env('YANDEX_API_KEY');
    }

    protected function folderId(): string
    {
        return env('YANDEX_API_FOLDER_ID');
    }
}
