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

    "accepted"         => ":attribute ha de ser acceptat.",
    "active_url"       => ":attribute no és un URL vàlid.",
    "after"            => ":attribute ha de ser una data posterior a :date.",
    "alpha"            => ":attribute només pot contenir lletres.",
    "alpha_dash"       => ":attribute només por contenir lletres, números i guions.",
    "alpha_num"        => ":attribute només pot contenir lletres i números.",
    "array"            => ":attribute ha de ser un conjunt.",
    "before"           => ":attribute ha de ser una data anterior a :date.",
    "between"          => array(
        "numeric" => ":attribute ha d'estar entre :min - :max.",
        "file"    => ":attribute ha de pesar entre :min - :max kilobytes.",
        "string"  => ":attribute ha de tenir entre :min - :max caràcters.",
        "array"   => ":attribute ha de tenir entre :min - :max ítems.",
    ),
    "confirmed"        => "La confirmació de :attribute no coincideix.",
    "date"             => ":attribute no és una data vàlida.",
    "date_format"      => ":attribute no correspon al format :format.",
    "different"        => ":attribute i :other han de ser diferents.",
    "digits"           => ":attribute ha de tenir :digits digits.",
    "digits_between"   => ":attribute ha de tenir entre :min y :max digits.",
    "email"            => ":attribute no és un e-mail vàlid",
    "exists"           => ":attribute és invàlid.",
    "image"            => ":attribute ha de ser una imatge.",
    "in"               => ":attribute és invàlid",
    "integer"          => ":attribute ha de ser un nombre enter.",
    "ip"               => ":attribute ha de ser una adreça IP vàlida.",
    "max"              => array(
        "numeric" => ":attribute no ha de ser major a :max.",
        "file"    => ":attribute no ha de ser més gran que :max kilobytes.",
        "string"  => ":attribute no ha de ser més gran que :max characters.",
        "array"   => ":attribute no ha de tenir més de :max ítems.",
    ),
    "mimes"            => ":attribute ha de ser un arxiu amb format: :values.",
    "min"              => array(
        "numeric" => "El tamany de :attribute ha de ser d'almenys :min.",
        "file"    => "El tamany de :attribute ha de ser d'almenys :min kilobytes.",
        "string"  => ":attribute ha de contenir almenys :min caracteres.",
        "array"   => ":attribute ha de tenir almenys :min ítems.",
    ),
    "not_in"           => ":attribute és invàlid.",
    "numeric"          => ":attribute ha de ser numèric.",
    "regex"            => "El format de :attribute és invàlid.",
    "required"         => "El camp :attribute és obligatori.",
    "required_if"      => "El camp :attribute és obligatori quan :other és :value.",
    "required_with"    => "El camp :attribute és obligatori quan :values és present.",
    "required_without" => "El camp :attribute és obligatori quan :values no és present.",
    "same"             => ":attribute i :other han de coincidir.",
    "size"             => array(
        "numeric" => "El tamany de :attribute ha de ser :size.",
        "file"    => "El tamany de :attribute ha de ser :size kilobytes.",
        "string"  => ":attribute ha de contenir :size caràcters.",
        "array"   => ":attribute ha de contenir :size ítems.",
    ),
    "unique"           => ":attribute ja ha estat registrat.",
    "url"              => "El format :attribute és invàlid.",

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
