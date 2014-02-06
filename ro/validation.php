<?php

return array(

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
    "after"            => "Câmpul :attribute trebuie să fie o data dupa :date.",
    "alpha"            => "Câmpul :attribute poate conține numai litere.",
    "alpha_dash"       => "Câmpul :attribute poate conține numai litere, numere și liniute.",
    "alpha_num"        => "Câmpul :attribute poate conține numai litere și numere.",
    "array"            => "Câmpul :attribute trebuie să fie un array.",
    "before"           => "Câmpul :attribute trebuie să fie o data inainte de :date.",
    "between"          => array(
        "numeric" => "Câmpul :attribute trebuie să fie intre :min și :max.",
        "file"    => "Câmpul :attribute trebuie să fie intre :min și :max kilobiți.",
        "string"  => "Câmpul :attribute trebuie să fie intre :min și :max caractere.",
        "array"   => "Câmpul :attribute trebuie să aibă :min - :max elemente."
    ),
    "confirmed"        => "Confirmarea :attribute nu se potriveste.",
    "date"             => "Câmpul :attribute nu este o data valida.",
    "date_format"      => "Câmpul :attribute trebuie să fie intr-un format valid.",
    "different"        => "Campurile :attribute și :other trebuie să fie diferite.",
    "digits"           => "Câmpul :attribute trebuie să fie de :digits cifre.",
    "digits_between"   => "Câmpul :attribute trebuie să fie intre :min și :max cifre.",
    "email"            => "Formatul câmpului :attribute este invalid.",
    "exists"           => "Câmpul :attribute selectat este invalid.",
    "image"            => "Câmpul :attribute trebuie să fie o imagine.",
    "in"               => "Câmpul :attribute selectat este invalid.",
    "integer"          => "Câmpul :attribute trebuie să fie un număr intreg.",
    "ip"               => "Câmpul :attribute trebuie să fie o adresa IP valida.",
    "max"              => array(
        "numeric" => "Câmpul :attribute trebuie să fie mai mic de :max.",
        "file"    => "Câmpul :attribute trebuie să fie mai mic de :max kilobiți.",
        "string"  => "Câmpul :attribute trebuie să fie mai mic de :max caractere.",
        "array"   => "Câmpul :attribute nu poate avea mai mult de :max elemente."
    ),
    "mimes"            => "Câmpul :attribute trebuie să fie un fișier de tipul: :values.",
    "min"              => array(
        "numeric" => "Câmpul :attribute trebuie să fie cel puțin :min.",
        "file"    => "Câmpul :attribute trebuie să aibă cel puțin :min kilobiți.",
        "string"  => "Câmpul :attribute trebuie să aibă cel puțin :min caractere.",
        "array"   => "Câmpul :attribute trebuie să aibă cel puțin :min elemente."
    ),
    "not_in"           => "Câmpul :attribute selectat este invalid.",
    "numeric"          => "Câmpul :attribute trebuie să fie un număr.",
    "regex"            => "Formatul câmpului :attribute este invalid.",
    "required"         => "Câmpul :attribute este obligatoriu.",
    "required_if"      => "Câmpul :attribute este necesar atunci cand :other e :value.",
    "required_with"    => "Câmpul :attribute este necesar atunci cand :values e prezent.",
    "required_without" => "Câmpul :attribute este necesar atunci cand :values nu este prezent.",
    "required_without_all" => "The :attribute field is required when none of :values are present.",
    "same"             => "Câmpul :attribute și :other trebuie să fie identice.",
    "size"             => array(
        "numeric" => "Câmpul :attribute trebuie să fie :size.",
        "file"    => "Câmpul :attribute trebuie să aibă :size kilobyte.",
        "string"  => "Câmpul :attribute trebuie să aibă :size caractere.",
        "array"   => "Câmpul :attribute trebuie sa conțina :size elemente."
    ),
    "unique"           => "Câmpul :attribute a fost deja foloșit.",
    "url"              => "Câmpul :attribute nu este intr-un format valid.",

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

    'custom' => array(),

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

    'attributes' => array(),

);