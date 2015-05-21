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
    "accepted"         => ":attribute duhet të pranohet.",
    "active_url"       => ":attribute nuk është URL valide.",
    "after"            => ":attribute duhet të jetë datë pas :date.",
    "alpha"            => ":attribute mund të përmbajë vetëm shkronja.",
    "alpha_dash"       => ":attribute mund të përmbajë vetëm shkronja, numra dhe viza.",
    "alpha_num"        => ":attribute mund të përmbajë vetëm shkronja dhe numra.",
    "array"            => "The :attribute must be an array.",
    "before"           => ":attribute duhet të jetë datë para :date.",
    "between"          => [
        "numeric" => ":attribute duhet të jetë në mes :min - :max.",
        "file"    => ":attribute duhet të jetë në mes :min - :max kilobajtëve.",
        "string"  => ":attribute duhet të jetë në mes :min - :max karaktereve.",
        "array"   => "The :attribute must have between :min - :max items.",
    ],
    "boolean"          => "The :attribute field must be true or false",
    "confirmed"        => ":attribute konfirmimi nuk përputhet.",
    "date"             => "The :attribute is not a valid date.",
    "date_format"      => "The :attribute does not match the format :format.",
    "different"        => ":attribute dhe :other duhet të jenë të ndryshme.",
    "digits"           => "The :attribute must be :digits digits.",
    "digits_between"   => "The :attribute must be between :min and :max digits.",
    "email"            => ":attribute formati është jo valid.",
    "exists"           => ":attribute e përzgjedhur është jo valid.",
    "filled"           => ":attribute fusha është e nevojshme.",
    "image"            => ":attribute duhet të jetë imazh.",
    "in"               => ":attribute e përzgjedhur është jo valid.",
    "integer"          => ":attribute duhet të jete numër i plotë.",
    "ip"               => ":attribute duhet të jetë një IP adresë e vlefshme.",
    "max"              => [
        "numeric" => ":attribute duhet të jetë më e vogël se :max.",
        "file"    => ":attribute duhet të jetë më e vogël se :max kilobytes.",
        "string"  => ":attribute duhet të jetë më e vogël se :max characters.",
        "array"   => "The :attribute may not have more than :max items.",
    ],
    "mimes"            => ":attribute duhet të jetë një fajll i tipit: :values.",
    "min"              => [
        "numeric" => ":attribute duhet të jetë së paku :min.",
        "file"    => ":attribute duhet të jetë së paku :min kilobajt.",
        "string"  => ":attribute duhet të jetë së paku :min karaktere.",
        "array"   => "The :attribute must have at least :min items.",
    ],
    "not_in"           => ":attribute e përzgjedhur është jo valid.",
    "numeric"          => ":attribute duhet të jetë numër.",
    "regex"            => "The :attribute format is invalid.",
    "required"         => ":attribute fusha është e nevojshme.",
    "required_if"      => "The :attribute field is required when :other is :value.",
    "required_with"    => "The :attribute field is required when :values is present.",
    "required_with_all"    => "The :attribute field is required when :values is present.",
    "required_without" => "The :attribute field is required when :values is not present.",
    "required_without_all" => "The :attribute field is required when none of :values are present.",
    "same"             => ":attribute dhe :other duhet të përputhen.",
    "size"             => [
        "numeric" => ":attribute duhet të jetë :size.",
        "file"    => ":attribute duhet të jetë :size kilobajt.",
        "string"  => ":attribute duhet të jetë :size karaktere.",
        "array"   => "The :attribute must contain :size items.",
    ],
    "string"           => "The :attribute must be a string.",
    "timezone"         => "The :attribute must be a valid zone.",
    "unique"           => ":attribute tashmë është marrë.",
    "url"              => ":attribute formati është i pavlefshëm.",

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
