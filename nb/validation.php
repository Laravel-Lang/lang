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

    "accepted"         => ":attribute må aksepteres.",
    "active_url"       => ":attribute er ikke en gyldig URL.",
    "after"            => ":attribute må være en dato etter :date.",
    "alpha"            => ":attribute må kun bestå av bokstaver.",
    "alpha_dash"       => ":attribute må kun bestå av bokstaver, tall og bindestreker.",
    "alpha_num"        => ":attribute må kun bestå av bokstaver og tall.",
    "array"            => ":attribute må være en matrise.",
    "before"           => ":attribute må være en dato før :date.",
    "between"          => [
        "numeric" => ":attribute skal være mellom :min - :max.",
        "file"    => ":attribute skal være mellom :min - :max kilobytes.",
        "string"  => ":attribute skal være mellom :min - :max tegn.",
        "array"   => ":attribute må ha mellom :min - :max elementer.",
    ],
    "boolean"          => "The :attribute field must be true or false",
    "confirmed"        => ":attribute er ikke likt bekreftelsesfeltet.",
    "date"             => ":attribute er ikke en gyldig dato.",
    "date_format"      => ":attribute matcher ikke formatet :format.",
    "different"        => ":attribute og :other skal være forskellige.",
    "digits"           => ":attribute skal ha :digits siffer.",
    "digits_between"   => ":attribute skal være mellom :min og :max siffer.",
    "email"            => ":attribute format er ugyldig.",
    "exists"           => "Det valgte :attribute er ugyldig.",
    "filled"           => ":attribute må fylles ut.",
    "image"            => ":attribute skal være et bilde.",
    "in"               => "Det valgte :attribute er ugyldig.",
    "integer"          => ":attribute skal være et heltall.",
    "ip"               => ":attribute skal være en gyldig IP adresse.",
    "max"              => [
        "numeric" => ":attribute skal være mindre enn :max.",
        "file"    => ":attribute skal være mindre enn :max kilobytes.",
        "string"  => ":attribute skal være kortere enn :max tegn.",
        "array"   => ":attribute skal ikke ha fler enn :max elementer.",
    ],
    "mimes"            => ":attribute skal være en fil av typen: :values.",
    "min"              => [
        "numeric" => ":attribute skal være større enn :min.",
        "file"    => ":attribute skal være større enn :min kilobytes.",
        "string"  => ":attribute skal være lengre enn :min tegn.",
        "array"   => ":attribute må være minst :min elementer.",
    ],
    "not_in"           => "Den valgte :attribute er ugyldig.",
    "numeric"          => ":attribute skal være et tall.",
    "regex"            => ":attribute formatet er ugyldig.",
    "required"         => ":attribute må fylles ut.",
    "required_if"      => ":attribute må fylles ut når :other er :value.",
    "required_with"    => ":attribute må fylles ut når :values er utfyllt.",
    "required_with_all" => "The :attribute field is required when :values is present.",
    "required_without" => ":attribute må fylles ut når :values ikke er utfyllt.",
    "required_without_all" => "The :attribute field is required when none of :values are present.",
    "same"             => ":attribute og :other må være like.",
    "size"             => [
        "numeric" => ":attribute må være :size.",
        "file"    => ":attribute må være :size kilobytes.",
        "string"  => ":attribute må være :size tegn lang.",
        "array"   => ":attribute må inneholde :size elementer.",
    ],
    "string"           => "The :attribute must be a string.",
    "timezone"         => "The :attribute must be a valid zone.",
    "unique"           => ":attribute er allerede brukt.",
    "url"              => ":attribute formatet er ugyldig.",

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
