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
    "accepted"         => "Polje :attribute mora biti prihvaćeno.",
    "active_url"       => "Polje :attribute nije validan URL.",
    "after"            => "Polje :attribute mora biti datum posle :date.",
    "alpha"            => "Polje :attribute može sadržati samo slova.",
    "alpha_dash"       => "Polje :attribute može sadržati samo slova, brojeve i povlake.",
    "alpha_num"        => "Polje :attribute može sadržati samo slova i brojeve.",
    "array"            => "The :attribute must be an array.",
    "before"           => "Polje :attribute mora biti datum pre :date.",
    "between"          => array(
        "numeric" => "Polje :attribute mora biti izmedju :min - :max.",
        "file"    => "Fajl :attribute mora biti izmedju :min - :max kilobajta.",
        "string"  => "Polje :attribute mora biti izmedju :min - :max karaktera.",
        "array"   => "The :attribute must have between :min - :max items."
    ),
    "confirmed"        => "Potvrda polja :attribute se ne poklapa.",
    "date"             => "The :attribute is not a valid date.",
    "date_format"      => "The :attribute does not match the format :format.",
    "different"        => "Polja :attribute i :other moraju biti različita.",
    "digits"           => "The :attribute must be :digits digits.",
    "digits_between"   => "The :attribute must be between :min and :max digits.",
    "email"            => "Format polja :attribute nije validan.",
    "exists"           => "Odabrano polje :attribute nije validno.",
    "image"            => "Polje :attribute mora biti slika.",
    "in"               => "Odabrano polje :attribute nije validno.",
    "integer"          => "Polje :attribute mora biti broj.",
    "ip"               => "Polje :attribute mora biti validna IP adresa.",
    "max"              => array(
        "numeric" => "Polje :attribute mora biti manje od :max.",
        "file"    => "Polje :attribute mora biti manje od :max kilobajta.",
        "string"  => "Polje :attribute mora sadržati manje od :max karaktera.",
        "array"   => "The :attribute may not have more than :max items."
    ),
    "mimes"            => "Polje :attribute mora biti fajl tipa: :values.",
    "min"              => array(
        "numeric" => "Polje :attribute mora biti najmanje :min.",
        "file"    => "Fajl :attribute mora biti najmanje :min kilobajta.",
        "string"  => "Polje :attribute mora sadržati najmanje :min karaktera.",
        "array"   => "The :attribute must have at least :min items."
    ),
    "not_in"           => "Odabrani element polja :attribute nije validan.",
    "numeric"          => "Polje :attribute mora biti broj.",
    "regex"            => "The :attribute format is invalid.",
    "required"         => "Polje :attribute je obavezno.",
    "required_if"      => "The :attribute field is required when :other is :value.",
    "required_with"    => "The :attribute field is required when :values is present.",
    "required_without" => "The :attribute field is required when :values is not present.",
    "required_without_all" => "The :attribute field is required when none of :values are present.",
    "same"             => "Polja :attribute i :other se moraju poklapati.",
    "size"             => array(
        "numeric" => "Polje :attribute mora biti :size.",
        "file"    => "Fajl :attribute mora biti :size kilobajta.",
        "string"  => "Polje :attribute mora biti :size karaktera.",
        "array"   => "The :attribute must contain :size items."
    ),
    "unique"           => "Polje :attribute već postoji.",
    "url"              => "Format polja :attribute nije validan.",

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