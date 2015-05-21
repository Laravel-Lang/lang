<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    "accepted"             => "Rhaid derbyn :attribute.",
    "active_url"           => "Nid yw :attribute yn URL dilys.",
    "after"                => "Rhaid i :attribute fod yn ddyddiad sydd ar ôl :date.",
    "alpha"                => "Dim ond llythrennau'n unig gall :attribute gynnwys.",
    "alpha_dash"           => "Dim ond llythrennau, rhifau a dash yn unig gall :attribute gynnwys.",
    "alpha_num"            => "Dim ond llythrennau a rhifau yn unig gall :attribute gynnwys.",
    "array"                => "Rhaid i :attribute fod yn array.",
    "before"               => "Rhaid i :attribute fod yn ddyddiad sydd cyn :date.",
    "between"              => [
        "numeric" => "Rhaid i :attribute fod rhwng :min a :max.",
        "file"    => "Rhaid i :attribute fod rhwng :min a :max kilobytes.",
        "string"  => "Rhaid i :attribute fod rhwng :min a :max nodyn.",
        "array"   => "Rhaid i :attribute fod rhwng :min a :max eitem.",
    ],
    "boolean"              => "Rhaid i'r maes :attribute fod yn wir neu gau.",
    "confirmed"            => "Nid yw'r cadarnhad :attribute yn gyfwerth.",
    "date"                 => "Nid yw :attribute yn ddyddiad dilys.",
    "date_format"          => "Nid yw :attribute yn y fformat :format.",
    "different"            => "Rhaid i :attribute a :other fod yn wahanol.",
    "digits"               => "Rhaid i :attribute fod yn :digits digid.",
    "digits_between"       => "Rhaid i :attribute fod rhwng :min a :max digid.",
    "email"                => "Rhaid i :attribute fod yn gyfeiriad ebost dilys.",
    "filled"               => "Rhaid cynnwys :attribute.",
    "exists"               => "Nid yw :attribute yn ddilys.",
    "image"                => "Rhaid i :attribute fod yn lun.",
    "in"                   => "Nid yw :attribute yn ddilys.",
    "integer"              => "Rhaid i :attribute fod yn integer.",
    "ip"                   => "Rhaid i :attribute fod yn gyfeiriad IP dilys.",
    "max"                  => [
        "numeric" => "Ni chai :attribute fod yn fwy na :max.",
        "file"    => "Ni chai :attribute fod yn fwy na :max kilobytes.",
        "string"  => "Ni chai :attribute fod yn fwy na :max nodyn.",
        "array"   => "Ni chai :attribute fod yn fwy na :max eitem.",
    ],
    "mimes"                => "Rhaid i :attribute fod yn ffeil o'r math: :values.",
    "min"                  => [
        "numeric" => "Rhaid i :attribute fod o leiaf :min.",
        "file"    => "Rhaid i :attribute fod o leiaf :min kilobytes.",
        "string"  => "Rhaid i :attribute fod o leiaf :min nodyn.",
        "array"   => "Rhaid i :attribute fod o leiaf :min eitem.",
    ],
    "not_in"               => "Nid yw :attribute yn ddilys.",
    "numeric"              => "Rhaid i :attribute fod yn rif.",
    "regex"                => "Nid yw fformat :attribute yn ddilys.",
    "required"             => "Rhaid cynnwys :attribute.",
    "required_if"          => "Rhaid cynnwys :attribute pan mae :other yn :value.",
    "required_with"        => "Rhaid cynnwys :attribute pan mae :values yn bresennol.",
    "required_with_all"    => "Rhaid cynnwys :attribute pan mae :values yn bresennol.",
    "required_without"     => "Rhaid cynnwys :attribute pan nad oes :values yn bresennol.",
    "required_without_all" => "Rhaid cynnwys :attribute pan nad oes :values yn bresennol.",
    "same"                 => "Rhaid i :attribute a :other fod yn gyfwerth.",
    "size"                 => [
        "numeric" => "Rhaid i :attribute fod yn :size.",
        "file"    => "Rhaid i :attribute fod yn :size kilobytes.",
        "string"  => "Rhaid i :attribute fod yn :size nodyn.",
        "array"   => "Rhaid i :attribute fod yn :size eitem.",
    ],
    "string"               => "The :attribute must be a string.",
    "timezone"             => "Rhaid i :attribute fod yn timezone dilys.",
    "unique"               => "Mae :attribute eisoes yn bodoli.",
    "url"                  => "Nid yw fformat :attribute yn ddilys.",

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
