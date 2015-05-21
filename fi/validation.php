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

    "accepted"         => ":attribute pitää hyväksyä.",
    "active_url"       => ":attribute pitää olla validi URL-osoite.",
    "after"            => ":attribute pitää olla päiväys :date päiväyksen jälkeen.",
    "alpha"            => ":attribute voi vain sisältää kirjaimia.",
    "alpha_dash"       => ":attribute voi vain sisältää kirjaimia, numeroita ja viivoja.",
    "alpha_num"        => ":attribute voi vain sisältää kirjaimia ja numeroita.",
    "array"            => "The :attribute must be an array.",
    "before"           => ":attribute pitää olla päiväys ennen :date.",
    "between"          => [
        "numeric" => ":attribute numeron pitää olla välillä :min - :max.",
        "file"    => ":attribute tiedoston pitää olla välillä :min - :max kilobittiä.",
        "string"  => ":attribute elementin pitää olla välillä :min - :max kirjainta.",
        "array"   => "The :attribute must have between :min - :max items.",
    ],
    "boolean"          => "The :attribute field must be true or false",
    "confirmed"        => ":attribute vahvistus ei täsmää.",
    "date"             => ":attribute ei ole kelvollinen päivämäärä.",
    "date_format"      => ":attribute ei vastaa muotoa :format.",
    "different"        => ":attribute ja :other tulee olla eri arvoisia.",
    "digits"           => ":attribute on oltava :digits numeroin.",
    "digits_between"   => "The :attribute must be between :min and :max digits.",
    "email"            => ":attribute muoto on virheellinen.",
    "exists"           => "valittu :attribute on virheellinen.",
    "filled"           => ":attribute kenttä on pakollinen.",
    "image"            => ":attribute pitää olla kuva.",
    "in"               => "valittu :attribute on virheellinen.",
    "integer"          => ":attribute pitää olla numero.",
    "ip"               => ":attribute pitää olla validi IP-osoite.",
    "max"              => [
        "numeric" => ":attribute pitää olla pienempi kuin :max.",
        "file"    => ":attribute pitää olla pienempi :max kilobittiä.",
        "string"  => ":attribute pitää olla pienempi :max kirjainta.",
        "array"   => "The :attribute may not have more than :max items.",
    ],
    "mimes"            => ":attribute pitää olla tiedostotyyppi: :values.",
    "min"              => [
        "numeric" => ":attribute pitää olla vähintään :min.",
        "file"    => ":attribute pitää olla vähintään :min kilobittiä.",
        "string"  => ":attribute pitää olla vähintään :min kirjainta.",
        "array"   => "The :attribute must have at least :min items.",
    ],
    "not_in"           => "valittu :attribute on virheellinen.",
    "numeric"          => ":attribute pitää olla numero.",
    "regex"            => "The :attribute format is invalid.",
    "required"         => ":attribute kenttä on pakollinen.",
    "required_if"      => "The :attribute field is required when :other is :value.",
    "required_with"    => "The :attribute field is required when :values is present.",
    "required_with_all" => "The :attribute field is required when :values is present.",
    "required_without" => "The :attribute field is required when :values is not present.",
    "required_without_all" => "The :attribute field is required when none of :values are present.",
    "same"             => ":attribute ja :other on oltava samat.",
    "size"             => [
        "numeric" => ":attribute pitää olla kokoa: :size.",
        "file"    => ":attribute pitää olla kokoa: :size kilobittiä.",
        "string"  => ":attribute pitää olla kokoa: :size kirjainta.",
        "array"   => "The :attribute must contain :size items.",
    ],
    "string"           => "The :attribute must be a string.",
    "timezone"         => "The :attribute must be a valid zone.",
    "unique"           => ":attribute on jo valittu.",
    "url"              => ":attribute URL-osoite on virheellinen.",

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
