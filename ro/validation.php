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
    "accepted"         => "Campul :attribute trebuie sa fie acceptat.",
    "active_url"       => "Campul :attribute nu este un URL valid.",
    "after"            => "Campul :attribute trebuie sa fie o data dupa :date.",
    "alpha"            => "Campul :attribute poate contine numai litere.",
    "alpha_dash"       => "Campul :attribute poate contine numai litere, numere si liniute.",
    "alpha_num"        => "Campul :attribute poate contine numai litere si numere.",
    "before"           => "Campul :attribute trebuie sa fie o data inainte de :date.",
    "between"          => array(
        "numeric" => "Campul :attribute trebuie sa fie intre :min si :max.",
        "file"    => "Campul :attribute trebuie sa fie intre :min si :max kilobytes.",
        "string"  => "Campul :attribute trebuie sa fie intre :min si :max caractere.",
    ),
    "confirmed"        => "Confirmarea :attribute nu se potriveste.",
    "date"             => "The :attribute is not a valid date.",
    "date_format"      => "Campul :attribute trebuie sa fie intr-un format valid.",
    "different"        => "Campurile :attribute si :other trebuie sa fie diferite.",
    "digits"           => "The :attribute must be :digits digits.",
    "digits_between"   => "The :attribute must be between :min and :max digits.",
    "email"            => "Formatul campului :attribute este invalid.",
    "exists"           => "Campul :attribute selectat este invalid.",
    "image"            => "Campul :attribute trebuie sa fie o imagine.",
    "in"               => "Campul :attribute selectat este invalid.",
    "integer"          => "Campul :attribute trebuie sa fie un numar intreg.",
    "ip"               => "Campul :attribute trebuie sa fie o adresa IP valida.",
    "max"              => array(
        "numeric" => "Campul :attribute trebuie sa fie mai mic de :max.",
        "file"    => "Campul :attribute trebuie sa fie mai mic de :max kilobytes.",
        "string"  => "Campul :attribute trebuie sa fie mai mic de :max caractere.",
    ),
    "mimes"            => "Campul :attribute trebuie sa fie un fisier de tipul: :values.",
    "min"              => array(
        "numeric" => "Campul :attribute trebuie sa fie cel putin :min.",
        "file"    => "Campul :attribute trebuie sa aiba cel putin :min kilobytes.",
        "string"  => "Campul :attribute trebuie sa aiba cel putin :min caractere.",
    ),
    "not_in"           => "Campul :attribute selectat este invalid.",
    "numeric"          => "Campul :attribute trebuie sa fie un numar.",
    "regex"            => "The :attribute format is invalid.",
    "required"         => "Campul :attribute este obligatoriu.",
    "required_if"      => "The :attribute field is required when :other is :value.",
    "required_with"    => "The :attribute field is required when :values is present.",
    "required_without" => "The :attribute field is required when :values is not present.",
    "same"             => "Campul :attribute si :other trebuie sa fie identice.",
    "size"             => array(
        "numeric" => "Campul :attribute trebuie sa fie :size.",
        "file"    => "Campul :attribute trebuie sa aiba :size kilobyte.",
        "string"  => "Campul :attribute trebuie sa aiba :size caractere.",
    ),
    "unique"           => "Campul :attribute a fost deja folosit.",
    "url"              => "Campul :attribute nu este intr-un format valid.",

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