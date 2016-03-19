<?php

function getLanguages($basePath)
{
    $directories = scandir($basePath);

    $languages = array_map(function ($dir) {
        return in_array($dir, ['.', '..']) ? null : $dir;
    }, $directories);

    return array_filter($languages);
}

function getTranslations($dir)
{
    return [
        'auth'       => include("$dir/auth.php"),
        'pagination' => include("$dir/pagination.php"),
        'passwords'  => include("$dir/passwords.php"),
        'validation' => include("$dir/validation.php"),
    ];
}

function compareTranslations($text, $basePath, $default, $languages)
{
    // Return diff language by language
    foreach ($languages as $language) {
        $text .= "\n * ".$language.":\n";

        $current = getTranslations("{$basePath}/{$language}");

        foreach ($default as $key => $values) {
            foreach ($values as $key2 => $value2) {
                if ($key2 == 'custom' && $key2 == 'attributes') {
                    continue;
                }

                if (!isset($current[$key][$key2])) {
                    $text .= '    * '.$key.' : '.$key2." : not present\n";
                } elseif ($current[$key][$key2] == $default[$key][$key2]) {
                    $text .= '    * '.$key.' : '.$key2."\n";
                }
            }
        }
    }

    return $text;
}

function generate()
{
    // Get list of languages
    $basePath = realpath(__DIR__.'/../src');
    $languages = getLanguages($basePath);

    // Get English version
    $english = getTranslations(__DIR__.'/en');

    $text = "# Todo list\n\n";
    $text = compareTranslations($text, $basePath, $english, $languages);

    file_put_contents(__DIR__.'/../todo.md', $text);
}

generate();
