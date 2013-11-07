<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | following language lines contain default error messages used by
    | validator class. Some of these rules have multiple versions such
    | such as size rules. Feel free to tweak each of these messages.
    |
    */

    "accepted"         => ":attribute trebuie să fie acceptat.",
    "active_url"       => ":attribute nu este o adresă URL validă.",
    "after"            => ":attribute trebuie să fie o dată după :date.",
    "alpha"            => ":attribute poate conține doar litere.",
    "alpha_dash"       => ":attribute poate conține doar litere, numere și cratime.",
    "alpha_num"        => ":attribute poate conține doar litere și numere.",
    "before"           => ":attribute trebuie să fie o dată înainte de :date.",
    "between"          => array(
        "numeric" => ":attribute trebuie să fie între :min - :max.",
        "file"    => ":attribute trebuie să fie între :min - :max kilobiți.",
        "string"  => ":attribute trebuie să fie între :min - :max caractere.",
    ),
    "confirmed"        => ":attribute confirmarea nu se potrivește.",
    "date"             => ":attribute nu este o dată validă.",
    "date_format"      => ":attribute nu se potrivește cu formatul :format.",
    "different"        => ":attribute și :other trebuie să fie diferite.",
    "digits"           => ":attribute trebuie să fie de :digits cifre.",
    "digits_between"   => ":attribute trebuie să fie between :min și :max cifre.",
    "email"            => ":attribute formatul nu este valid.",
    "exists"           => ":attribute există deja.",
    "image"            => ":attribute trebuie să fie an image.",
    "in"               => ":attribute nu este valid.",
    "integer"          => ":attribute trebuie să fie un număr întreg.",
    "ip"               => ":attribute trebuie să fie o adresă IP validă.",
    "max"              => array(
        "numeric" => ":attribute nu poate fi mai mare decât :max.",
        "file"    => ":attribute nu poate fi mai mare decât :max kilobiți.",
        "string"  => ":attribute nu poate fi mai mare decât :max caractere.",
    ),
    "mimes"            => ":attribute trebuie să fie un fișier de tip: :values.",
    "min"              => array(
        "numeric" => ":attribute trebuie să fie de cel puțin :min.",
        "file"    => ":attribute trebuie să fie de cel puțin :min kilobiți.",
        "string"  => ":attribute trebuie să fie de cel puțin :min caractere.",
    ),
    "not_in"           => ":attribute selectat nu este valid.",
    "numeric"          => ":attribute trebuie să fie un număr.",
    "regex"            => ":attribute formatul nu este valid.",
    "required"         => ":attribute câmpul este necesar.",
    "required_if"      => ":attribute câmpul este necesar atunci când :other e :value.",
    "required_with"    => ":attribute câmpul este necesar atunci când :values e prezent.",
    "required_without" => ":attribute câmpul este necesar atunci când :values nu e prezent.",
    "same"             => ":attribute și :other trebuie să se potrivească.",
    "size"             => array(
        "numeric" => ":attribute trebuie să fie :size.",
        "file"    => ":attribute trebuie să fie :size kilobiți.",
        "string"  => ":attribute trebuie să fie :size caractere.",
    ),
    "unique"           => ":attribute a fost deja luat.",
    "url"              => ":attribute formatul nu este valid.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => array(),

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => array(),

);