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

    'accepted'             => ':Attribute måste accepteras.',
    'active_url'           => ':Attribute är inte en giltig webbadress.',
    'after'                => ':Attribute måste vara ett datum efter den :date.',
    'alpha'                => ':Attribute får endast innehålla bokstäver.',
    'alpha_dash'           => ':Attribute får endast innehålla bokstäver, siffror och bindestreck.',
    'alpha_num'            => ':Attribute får endast innehålla bokstäver och siffror.',
    'array'                => ':Attribute måste vara en array.',
    'before'               => ':Attribute måste vara ett datum innan den :date.',
    'between'              => [
        'numeric' => ':Attribute måste vara en siffra mellan :min och :max.',
        'file'    => ':Attribute måste vara mellan :min till :max kilobyte stor.',
        'string'  => ':Attribute måste innehålla :min till :max tecken.',
        'array'   => ':Attribute måste innehålla mellan :min - :max objekt.',
    ],
    'boolean'              => ':Attribute måste vara sant eller falskt',
    'confirmed'            => ':Attribute bekräftelsen matchar inte.',
    'date'                 => ':Attribute är inte ett giltigt datum.',
    'date_format'          => ':Attribute matchar inte formatet :format.',
    'different'            => ':Attribute och :other får inte vara lika.',
    'digits'               => ':Attribute måste vara minst :digits tecken.',
    'digits_between'       => ':Attribute måste vara mellan :min och :max tecken.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => 'Fältet :attribute måste innehålla en korrekt e-postadress.',
    'exists'               => 'Det valda :attribute är ogiltigt.',
    'filled'               => 'Fältet :attribute är obligatoriskt.',
    'image'                => ':Attribute måste vara en bild.',
    'in'                   => 'Det valda :attribute är ogiltigt.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => ':Attribute måste vara en siffra.',
    'ip'                   => ':Attribute måste vara en giltig IP-adress.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => ':Attribute får inte vara större än :max.',
        'file'    => ':Attribute får max vara :max kilobyte stor.',
        'string'  => ':Attribute får max innehålla :max tecken.',
        'array'   => ':Attribute får inte innehålla mer än :max objekt.',
    ],
    'mimes'                => ':Attribute måste vara en fil av typen: :values.',
    'min'                  => [
        'numeric' => ':Attribute måste vara större än :min.',
        'file'    => ':Attribute måste vara minst :min kilobyte stor.',
        'string'  => ':Attribute måste innehålla minst :min tecken.',
        'array'   => ':Attribute måste innehålla minst :min objekt.',
    ],
    'not_in'               => 'Det valda :attribute är ogiltigt.',
    'numeric'              => ':Attribute måste vara en siffra.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'Formatet för :attribute är ogiltigt.',
    'required'             => 'Fältet :attribute är obligatoriskt.',
    'required_if'          => 'Fältet :attribute är obligatoriskt då :other är :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'Fältet :attribute är obligatoriskt då :values är ifyllt.',
    'required_with_all'    => 'Fältet :attribute är obligatoriskt när :values är ifyllt.',
    'required_without'     => 'Fältet :attribute är obligatoriskt då :values ej är ifyllt.',
    'required_without_all' => 'Fältet :attribute är obligatoriskt när ingen av :values är ifyllt.',
    'same'                 => ':Attribute och :other måste vara lika.',
    'size'                 => [
        'numeric' => ':Attribute måste vara :size.',
        'file'    => ':Attribute får endast vara :size kilobyte stor.',
        'string'  => ':Attribute måste innehålla :size tecken.',
        'array'   => ':Attribute måste innehålla :size objekt.',
    ],
    'string'               => ':Attribute måste vara en sträng.',
    'timezone'             => ':Attribute måste vara en giltig tidszon.',
    'unique'               => ':Attribute används redan.',
    'url'                  => 'Formatet :attribute är ogiltigt.',

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

    'attributes'           => [
        //
    ],

];
