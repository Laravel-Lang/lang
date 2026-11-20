<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

class LettersTest extends TestCase
{
    public function testWordsDoNotMixAlphabets(): void
    {
        $invalid = [];

        foreach ($this->translations() as $locale => $value) {
            // :attribute, :value... are placeholders, not words
            $text = preg_replace('/:[A-Za-z_]+/', '', $value);

            foreach (preg_split('/[^\p{L}]+/u', $text, -1, PREG_SPLIT_NO_EMPTY) as $word) {
                $alphabets = array_filter([
                    preg_match('/\p{sc=Latin}/u', $word),
                    preg_match('/\p{sc=Cyrillic}/u', $word),
                    preg_match('/\p{sc=Greek}/u', $word),
                ]);

                if (count($alphabets) > 1) {
                    $invalid[] = "$locale: $word";
                }
            }
        }

        $this->assertSame([], array_values(array_unique($invalid)));
    }

    public function testLatinLocalesHaveNoCyrillicLetters(): void
    {
        $invalid = [];

        foreach ($this->translations() as $locale => $value) {
            if (str_contains($locale, '_Latn') && preg_match('/\p{sc=Cyrillic}/u', $value)) {
                $invalid[] = "$locale: $value";
            }
        }

        $this->assertSame([], $invalid);
    }

    /** @return iterable<string, string> */
    protected function translations(): iterable
    {
        foreach (glob(__DIR__ . '/../locales/*/*.json') as $file) {
            $locale = basename(dirname($file));

            foreach (json_decode(file_get_contents($file), true) as $value) {
                if (is_string($value)) {
                    yield $locale => $value;
                }
            }
        }
    }
}
