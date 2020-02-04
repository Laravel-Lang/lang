<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted'        => ':Attribute måste accepteras.',
    'active_url'      => ':Attribute är inte en giltig webbadress.',
    'after'           => ':Attribute måste vara ett datum efter :date.',
    'after_or_equal'  => ':Attribute måste vara ett datum senare eller samma dag som :date.',
    'alpha'           => ':Attribute får endast innehålla bokstäver.',
    'alpha_dash'      => ':Attribute får endast innehålla bokstäver, siffror och bindestreck.',
    'alpha_num'       => ':Attribute får endast innehålla bokstäver och siffror.',
    'array'           => ':Attribute måste vara en array.',
    'before'          => ':Attribute måste vara ett datum innan :date.',
    'before_or_equal' => ':Attribute måste vara ett datum före eller samma dag som :date.',
    'between'         => [
        'numeric' => ':Attribute måste vara en siffra mellan :min och :max.',
        'file'    => ':Attribute måste vara mellan :min till :max kilobyte stor.',
        'string'  => ':Attribute måste innehålla :min till :max tecken.',
        'array'   => ':Attribute måste innehålla mellan :min - :max objekt.',
    ],
    'boolean'        => ':Attribute måste vara sant eller falskt.',
    'confirmed'      => ':Attribute bekräftelsen matchar inte.',
    'date'           => ':Attribute är inte ett giltigt datum.',
    'date_equals'    => ':Attribute måste vara ett datum lika med :date.',
    'date_format'    => ':Attribute matchar inte formatet :format.',
    'different'      => ':Attribute och :other får inte vara lika.',
    'digits'         => ':Attribute måste vara :digits tecken.',
    'digits_between' => ':Attribute måste vara mellan :min och :max tecken.',
    'dimensions'     => ':Attribute har felaktiga bilddimensioner.',
    'distinct'       => ':Attribute innehåller fler än en repetition av samma element.',
    'email'          => ':Attribute måste innehålla en korrekt e-postadress.',
    'ends_with'      => ':Attribute måste sluta med en av följande: :values.',
    'exists'         => ':Attribute är ogiltigt.',
    'file'           => ':Attribute måste vara en fil.',
    'filled'         => ':Attribute är obligatoriskt.',
    'gt'             => [
        'numeric' => ':Attribute måste vara större än :value.',
        'file'    => ':Attribute måste vara större än :value kilobyte stor.',
        'string'  => ':Attribute måste vara längre än :value tecken.',
        'array'   => ':Attribute måste innehålla fler än :value objekt.',
    ],
    'gte' => [
        'numeric' => ':Attribute måste vara lika med eller större än :value.',
        'file'    => ':Attribute måste vara lika med eller större än :value kilobyte stor.',
        'string'  => ':Attribute måste vara lika med eller längre än :value tecken.',
        'array'   => ':Attribute måste innehålla lika många eller fler än :value objekt.',
    ],
    'image'    => ':Attribute måste vara en bild.',
    'in'       => ':Attribute är ogiltigt.',
    'in_array' => ':Attribute finns inte i :other.',
    'integer'  => ':Attribute måste vara en siffra.',
    'ip'       => ':Attribute måste vara en giltig IP-adress.',
    'ipv4'     => ':Attribute måste vara en giltig IPv4-adress.',
    'ipv6'     => ':Attribute måste vara en giltig IPv6-adress.',
    'json'     => ':Attribute måste vara en giltig JSON-sträng.',
    'lt'       => [
        'numeric' => ':Attribute måste vara mindre än :value.',
        'file'    => ':Attribute måste vara mindre än :value kilobyte stor.',
        'string'  => ':Attribute måste vara kortare än :value tecken.',
        'array'   => ':Attribute måste innehålla färre än :value objekt.',
    ],
    'lte' => [
        'numeric' => ':Attribute måste vara lika med eller mindre än :value.',
        'file'    => ':Attribute måste vara lika med eller mindre än :value kilobyte stor.',
        'string'  => ':Attribute måste vara lika med eller kortare än :value tecken.',
        'array'   => ':Attribute måste innehålla lika många eller färre än :value objekt.',
    ],
    'max' => [
        'numeric' => ':Attribute får inte vara större än :max.',
        'file'    => ':Attribute får max vara :max kilobyte stor.',
        'string'  => ':Attribute får max innehålla :max tecken.',
        'array'   => ':Attribute får inte innehålla mer än :max objekt.',
    ],
    'mimes'     => ':Attribute måste vara en fil av typen: :values.',
    'mimetypes' => ':Attribute måste vara en fil av typen: :values.',
    'min'       => [
        'numeric' => ':Attribute måste vara större än :min.',
        'file'    => ':Attribute måste vara minst :min kilobyte stor.',
        'string'  => ':Attribute måste innehålla minst :min tecken.',
        'array'   => ':Attribute måste innehålla minst :min objekt.',
    ],
    'not_in'               => ':Attribute är ogiltigt.',
    'not_regex'            => 'Formatet för :attribute är ogiltigt.',
    'numeric'              => ':Attribute måste vara en siffra.',
    'password'             => 'Lösenordet är fel.',
    'present'              => ':Attribute måste finnas med.',
    'regex'                => ':Attribute har ogiltigt format.',
    'required'             => ':Attribute är obligatoriskt.',
    'required_if'          => ':Attribute är obligatoriskt när :other är :value.',
    'required_unless'      => ':Attribute är obligatoriskt när inte :other finns bland :values.',
    'required_with'        => ':Attribute är obligatoriskt när :values är ifyllt.',
    'required_with_all'    => ':Attribute är obligatoriskt när :values är ifyllt.',
    'required_without'     => ':Attribute är obligatoriskt när :values ej är ifyllt.',
    'required_without_all' => ':Attribute är obligatoriskt när ingen av :values är ifyllt.',
    'same'                 => ':Attribute och :other måste vara lika.',
    'size'                 => [
        'numeric' => ':Attribute måste vara :size.',
        'file'    => ':Attribute får endast vara :size kilobyte stor.',
        'string'  => ':Attribute måste innehålla :size tecken.',
        'array'   => ':Attribute måste innehålla :size objekt.',
    ],
    'starts_with' => ':Attribute måste börja med en av följande: :values',
    'string'      => ':Attribute måste vara en sträng.',
    'timezone'    => ':Attribute måste vara en giltig tidszon.',
    'unique'      => ':Attribute används redan.',
    'uploaded'    => ':Attribute kunde inte laddas upp.',
    'url'         => ':Attribute har ett ogiltigt format.',
    'uuid'        => ':Attribute måste vara ett giltigt UUID.',

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

    'attributes' => [
    ],
];
