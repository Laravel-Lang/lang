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

    'accepted'             => ':Attribute muss akzeptiert werden.',
    'active_url'           => ':Attribute ist keine gültige Internet-Adresse.',
    'after'                => ':Attribute muss ein Datum nach dem :date sein.',
    'alpha'                => ':Attribute darf nur aus Buchstaben bestehen.',
    'alpha_dash'           => ':Attribute darf nur aus Buchstaben, Zahlen, Binde- und Unterstrichen bestehen. Umlaute (ä, ö, ü) und Eszett (ß) sind nicht erlaubt.',
    'alpha_num'            => ':Attribute darf nur aus Buchstaben und Zahlen bestehen.',
    'array'                => ':Attribute muss ein Array sein.',
    'before'               => ':Attribute muss ein Datum vor dem :date sein.',
    'between'              => [
        'numeric' => ':Attribute muss zwischen :min & :max liegen.',
        'file'    => ':Attribute muss zwischen :min & :max Kilobytes groß sein.',
        'string'  => ':Attribute muss zwischen :min & :max Zeichen lang sein.',
        'array'   => ':Attribute muss zwischen :min & :max Elemente haben.',
    ],
    'boolean'              => ":attribute muss entweder 'true' oder 'false' sein.",
    'confirmed'            => ':Attribute stimmt nicht mit der Bestätigung überein.',
    'date'                 => ':Attribute muss ein gültiges Datum sein.',
    'date_format'          => ':Attribute entspricht nicht dem gültigen Format für :format.',
    'different'            => ':Attribute und :other müssen sich unterscheiden.',
    'digits'               => ':Attribute muss :digits Stellen haben.',
    'digits_between'       => ':Attribute muss zwischen :min und :max Stellen haben.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => ':Attribute Format ist ungültig.',
    'exists'               => 'Der gewählte Wert für :attribute ist ungültig.',
    'filled'               => ':Attribute muss ausgefüllt sein.',
    'image'                => ':Attribute muss ein Bild sein.',
    'in'                   => 'Der gewählte Wert für :attribute ist ungültig.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => ':Attribute muss eine ganze Zahl sein.',
    'ip'                   => ':Attribute muss eine gültige IP-Adresse sein.',
    'json'                 => ':Attribute muss ein gültiger JSON-String sein.',
    'max'                  => [
        'numeric' => ':Attribute darf maximal :max sein.',
        'file'    => ':Attribute darf maximal :max Kilobytes groß sein.',
        'string'  => ':Attribute darf maximal :max Zeichen haben.',
        'array'   => ':Attribute darf nicht mehr als :max Elemente haben.',
    ],
    'mimes'                => ':Attribute muss den Dateityp :values haben.',
    'min'                  => [
        'numeric' => ':Attribute muss mindestens :min sein.',
        'file'    => ':Attribute muss mindestens :min Kilobytes groß sein.',
        'string'  => ':Attribute muss mindestens :min Zeichen lang sein.',
        'array'   => ':Attribute muss mindestens :min Elemente haben.',
    ],
    'not_in'               => 'Der gewählte Wert für :attribute ist ungültig.',
    'numeric'              => ':Attribute muss eine Zahl sein.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => ':Attribute Format ist ungültig.',
    'required'             => ':Attribute muss ausgefüllt sein.',
    'required_if'          => ':Attribute muss ausgefüllt sein, wenn :other :value ist.',
    'required_unless'      => ':Attribute muss ausgefüllt sein, wenn :other nicht :values ist.',
    'required_with'        => ':Attribute muss angegeben werden, wenn :values ausgefüllt wurde.',
    'required_with_all'    => ':Attribute muss angegeben werden, wenn :values ausgefüllt wurde.',
    'required_without'     => ':Attribute muss angegeben werden, wenn :values nicht ausgefüllt wurde.',
    'required_without_all' => ':Attribute muss angegeben werden, wenn keines der Felder :values ausgefüllt wurde.',
    'same'                 => ':Attribute und :other müssen übereinstimmen.',
    'size'                 => [
        'numeric' => ':Attribute muss gleich :size sein.',
        'file'    => ':Attribute muss :size Kilobyte groß sein.',
        'string'  => ':Attribute muss :size Zeichen lang sein.',
        'array'   => ':Attribute muss genau :size Elemente haben.',
    ],
    'string'               => ':Attribute muss ein String sein.',
    'timezone'             => ':Attribute muss eine gültige Zeitzone sein.',
    'unique'               => ':Attribute ist schon vergeben.',
    'url'                  => 'Das Format von :attribute ist ungültig.',

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

    'custom'               => [
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

    'attributes' => [
        //
    ],

];
