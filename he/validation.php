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

    "accepted"         => "יש לקבל את :attribute.",
    "active_url"       => ":attribute לא URL תקני.",
    "after"            => ":attribute חייב להיות תאריך אחרי :date.",
    "alpha"            => ":attribute רשאי להכיל אותיות בלבד.",
    "alpha_dash"       => ":attribute רשאי להכיל אותיות, מספרים ומקפים בלבד.",
    "alpha_num"        => ":attribute רשאי להכיל אותיות ומספרים בלבד.",
    "array"            => "The :attribute must be an array.",
    "before"           => ":attribute חייב להיות תאריך לפני :date.",
    "between"          => [
        "numeric" => ":attribute חייב להיות מספר בין :min ל-:max.",
        "file"    => ":attribute חייב לשקול :min-:max קילובתים.",
        "string"  => ":attribute חייב להיות באורך של :min-:max תווים.",
        "array"   => "The :attribute must have between :min - :max items.",
    ],
    "boolean"          => "The :attribute field must be true or false",
    "confirmed"        => "The :attribute confirmation does not match.",
    "date"             => ":attribute הוא לא תאריך תקני.",
    "date_format"      => ":attribute לא תואם את הפורמט :format.",
    "different"        => ":attribute צריך להיות שונה מ:attribute.",
    "digits"           => "The :attribute must be :digits digits.",
    "digits_between"   => "The :attribute must be between :min and :max digits.",
    "email"            => "The :attribute format is invalid.",
    "exists"           => "The selected :attribute is invalid.",
    "filled"           => "The :attribute field is required.",
    "image"            => "The :attribute must be an image.",
    "in"               => "The selected :attribute is invalid.",
    "integer"          => "The :attribute must be an integer.",
    "ip"               => "The :attribute must be a valid IP address.",
    "max"              => [
        "numeric" => "The :attribute may not be greater than :max.",
        "file"    => "The :attribute may not be greater than :max kilobytes.",
        "string"  => "The :attribute may not be greater than :max characters.",
        "array"   => "The :attribute may not have more than :max items.",
    ],
    "mimes"            => "The :attribute must be a file of type: :values.",
    "min"              => [
        "numeric" => "The :attribute must be at least :min.",
        "file"    => "The :attribute must be at least :min kilobytes.",
        "string"  => "The :attribute must be at least :min characters.",
        "array"   => "The :attribute must have at least :min items.",
    ],
    "not_in"           => "The selected :attribute is invalid.",
    "numeric"          => "The :attribute must be a number.",
    "regex"            => "The :attribute format is invalid.",
    "required"         => "The :attribute field is required.",
    "required_if"      => "The :attribute field is required when :other is :value.",
    "required_with"    => "The :attribute field is required when :values is present.",
    "required_with_all" => "The :attribute field is required when :values is present.",
    "required_without" => "The :attribute field is required when :values is not present.",
    "required_without_all" => "The :attribute field is required when none of :values are present.",
    "same"             => "The :attribute and :other must match.",
    "size"             => [
        "numeric" => "The :attribute must be :size.",
        "file"    => "The :attribute must be :size kilobytes.",
        "string"  => "The :attribute must be :size characters.",
        "array"   => "The :attribute must contain :size items.",
    ],
    "string"           => "The :attribute must be a string.",
    "timezone"         => "The :attribute must be a valid zone.",
    "unique"           => "The :attribute has already been taken.",
    "url"              => "The :attribute format is invalid.",

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
