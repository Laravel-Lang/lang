<?php

// Get list of languages
$glob = scandir(__DIR__.'/..');

$languages = null;

foreach ($glob as $file) {
    if (is_dir(__DIR__.'/../'.$file) && (!in_array($file, ['.', '..', '.git', '.phpintel', 'en', 'script']))) {
        $languages[] = $file;
    }
}

// Get English version
$english = [
    'auth'       => include(__DIR__.'/../en/auth.php'),
    'pagination' => include(__DIR__.'/../en/pagination.php'),
    'passwords'  => include(__DIR__.'/../en/passwords.php'),
    'validation' => include(__DIR__.'/../en/validation.php'),
];

$text = "# Todo list\n\n";

// Return diff language by language
foreach ($languages as $language) {
    $text .= "\n * ".$language.":\n";

    $current = [
        'auth'       => include(__DIR__.'/../'.$language.'/auth.php'),
        'pagination' => include(__DIR__.'/../'.$language.'/pagination.php'),
        'passwords'  => include(__DIR__.'/../'.$language.'/passwords.php'),
        'validation' => include(__DIR__.'/../'.$language.'/validation.php'),
    ];

    foreach ($english as $key => $values) {
        foreach ($values as $key2 => $value2) {
            if ($key2 != 'custom' && $key2 != 'attributes') {
                if (!isset($current[$key][$key2])) {
                    $text .= '    * '.$key.' : '.$key2." : needed\n";
                } elseif ($current[$key][$key2] == $english[$key][$key2]) {
                    $text .= '    * '.$key.' : '.$key2." : not translated\n";
                }
            }
        }
    }
}

$pathTodoMd = __DIR__.'/../todo.md';

file_put_contents($pathTodoMd, $text);
