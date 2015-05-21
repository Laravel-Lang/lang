<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */
    "accepted"         => "Câmpul :attribute trebuie să fie acceptat.",
    "active_url"       => "Câmpul :attribute nu este un URL valid.",
    "after"            => "Câmpul :attribute trebuie să fie o dată după :date.",
    "alpha"            => "Câmpul :attribute poate conține numai litere.",
    "alpha_dash"       => "Câmpul :attribute poate conține numai litere, numere și liniuțe.",
    "alpha_num"        => "Câmpul :attribute poate conține numai litere și numere.",
    "array"            => "Câmpul :attribute trebuie să fie un array.",
    "before"           => "Câmpul :attribute trebuie să fie o dată înainte de :date.",
    "between"          => [
        "numeric" => "Câmpul :attribute trebuie să fie între :min și :max.",
        "file"    => "Câmpul :attribute trebuie să fie între :min și :max kilobiți.",
        "string"  => "Câmpul :attribute trebuie să fie între :min și :max caractere.",
        "array"   => "Câmpul :attribute trebuie să aibă :min - :max elemente.",
    ],
    "boolean"          => "The :attribute field must be true or false",
    "confirmed"        => "Confirmarea :attribute nu se potrivește.",
    "date"             => "Câmpul :attribute nu este o dată validă.",
    "date_format"      => "Câmpul :attribute trebuie să fie intr-un format valid.",
    "different"        => "Campurile :attribute și :other trebuie să fie diferite.",
    "digits"           => "Câmpul :attribute trebuie să fie de :digits cifre.",
    "digits_between"   => "Câmpul :attribute trebuie să fie între :min și :max cifre.",
    "email"            => "Formatul câmpului :attribute este invalid.",
    "exists"           => "Câmpul :attribute selectat este invalid.",
    "filled"           => "Câmpul :attribute este obligatoriu.",
    "image"            => "Câmpul :attribute trebuie să fie o imagine.",
    "in"               => "Câmpul :attribute selectat este invalid.",
    "integer"          => "Câmpul :attribute trebuie să fie un număr întreg.",
    "ip"               => "Câmpul :attribute trebuie să fie o adresă IP validă.",
    "max"              => [
        "numeric" => "Câmpul :attribute trebuie să fie mai mic de :max.",
        "file"    => "Câmpul :attribute trebuie să fie mai mic de :max kilobiți.",
        "string"  => "Câmpul :attribute trebuie să fie mai mic de :max caractere.",
        "array"   => "Câmpul :attribute nu poate avea mai mult de :max elemente.",
    ],
    "mimes"            => "Câmpul :attribute trebuie să fie un fișier de tipul: :values.",
    "min"              => [
        "numeric" => "Câmpul :attribute trebuie să fie cel puțin :min.",
        "file"    => "Câmpul :attribute trebuie să aibă cel puțin :min kilobiți.",
        "string"  => "Câmpul :attribute trebuie să aibă cel puțin :min caractere.",
        "array"   => "Câmpul :attribute trebuie să aibă cel puțin :min elemente.",
    ],
    "not_in"           => "Câmpul :attribute selectat este invalid.",
    "numeric"          => "Câmpul :attribute trebuie să fie un număr.",
    "regex"            => "Formatul câmpului :attribute este invalid.",
    "required"         => "Câmpul :attribute este obligatoriu.",
    "required_if"      => "Câmpul :attribute este necesar atunci când :other e :value.",
    "required_with"    => "Câmpul :attribute este necesar atunci când :values este prezent.",
    "required_with_all" => "The :attribute field is required when :values is present.",
    "required_without" => "Câmpul :attribute este necesar atunci când :values nu este prezent.",
    "required_without_all" => "Câmpul :attribute este necesar atunci când nici una din valorile :values ne este prezentă.",
    "same"             => "Câmpul :attribute și :other trebuie să fie identice.",
    "size"             => [
        "numeric" => "Câmpul :attribute trebuie să fie :size.",
        "file"    => "Câmpul :attribute trebuie să aibă :size kilobyte.",
        "string"  => "Câmpul :attribute trebuie să aibă :size caractere.",
        "array"   => "Câmpul :attribute trebuie sa conțină :size elemente.",
    ],
    "string"           => "The :attribute must be a string.",
    "timezone"         => "The :attribute must be a valid zone.",
    "unique"           => "Câmpul :attribute a fost deja folosit.",
    "url"              => "Câmpul :attribute nu este într-un format valid.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
