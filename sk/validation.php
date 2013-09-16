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

    "accepted"         => ":attribute must be accepted.",
    "active_url"       => ":attribute má neplatnú URL adresu.",
    "after"            => ":attribute must be a date after :date.",
    "alpha"            => ":attribute môže obsahovať len písmená.",
    "alpha_dash"       => ":attribute môže obsahovať len písmená, čísla a pomlčky.",
    "alpha_num"        => ":attribute môže obsahovať len písmená, čísla.",
    "array"            => ":attribute musí byť pole.",
    "before"           => ":attribute must be a date before :date.",
    "between"          => array(
        "numeric" => ":attribute must be between :min - :max.",
        "file"    => ":attribute must be between :min - :max kilobytes.",
        "string"  => ":attribute must be between :min - :max characters.",
        "array"   => ":attribute must have between :min - :max items.",
    ),
    "confirmed"        => ":attribute konfirmácia sa nezhoduje.",
    "date"             => ":attribute má neplatný dátum.",
    "date_format"      => ":attribute does not match the format :format.",
    "different"        => ":attribute and :other must be different.",
    "digits"           => ":attribute must be :digits digits.",
    "digits_between"   => ":attribute must be between :min and :max digits.",
    "email"            => ":attribute má neplatný formát.",
    "exists"           => "selected :attribute is invalid.",
    "image"            => ":attribute musí byť obrázok.",
    "in"               => "selected :attribute is invalid.",
    "integer"          => ":attribute must be an integer.",
    "ip"               => ":attribute musí byť platná IP adresa.",
    "max"              => array(
        "numeric" => ":attribute may not be greater than :max.",
        "file"    => ":attribute may not be greater than :max kilobytes.",
        "string"  => ":attribute may not be greater than :max characters.",
        "array"   => ":attribute may not have more than :max items.",
    ),
    "mimes"            => ":attribute must be a file of type: :values.",
    "min"              => array(
        "numeric" => ":attribute must be at least :min.",
        "file"    => ":attribute must be at least :min kilobytes.",
        "string"  => ":attribute must be at least :min characters.",
        "array"   => ":attribute must have at least :min items.",
    ),
    "not_in"           => "selected :attribute is invalid.",
    "numeric"          => ":attribute must be a number.",
    "regex"            => ":attribute má neplatný formát.",
    "required"         => ":attribute field is required.",
    "required_if"      => ":attribute field is required when :other is :value.",
    "required_with"    => ":attribute field is required when :values is present.",
    "required_without" => ":attribute field is required when :values is not present.",
    "same"             => ":attribute and :other must match.",
    "size"             => array(
        "numeric" => ":attribute must be :size.",
        "file"    => ":attribute must be :size kilobytes.",
        "string"  => ":attribute must be :size characters.",
        "array"   => ":attribute must contain :size items.",
    ),
    "unique"           => ":attribute has already been taken.",
    "url"              => ":attribute neplatný formát.",

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
