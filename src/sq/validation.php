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

    'accepted'        => ':attribute duhet të pranohet.',
    'active_url'      => ':attribute nuk është adresë e saktë.',
    'after'           => ':attribute duhet të jetë datë pas :date.',
    'after_or_equal'  => ':attribute duhet të jetë datë e barabartë ose pas :date.',
    'alpha'           => ':attribute mund të përmbajë vetëm shkronja.',
    'alpha_dash'      => ':attribute mund të përmbajë vetëm shkronja, numra, dhe viza.',
    'alpha_num'       => ':attribute mund të përmbajë vetëm shkronja dhe numra.',
    'array'           => ':attribute duhet të jetë një bashkësi (array).',
    'before'          => ':attribute duhet të jetë datë para :date.',
    'before_or_equal' => ':attribute duhet të jetë datë e barabartë ose para :date.',
    'between'         => [
        'numeric' => ':attribute duhet të jetë ndërmjet :min - :max.',
        'file'    => ':attribute duhet të jetë ndërmjet :min - :max kilobajtëve.',
        'string'  => ':attribute duhet të ketë ndërmjet :min - :max karaktereve.',
        'array'   => ':attribute duhet të ketë ndërmjet :min - :max elementëve.',
    ],
    'boolean'        => 'Fusha :attribute duhet të jetë e vërtetë ose e gabuar',
    'confirmed'      => ':attribute konfirmimi nuk përputhet.',
    'date'           => ':attribute nuk është një datë e saktë.',
    'date_equals'    => ':attribute duhet të jetë datë e barabartë me :date.',
    'date_format'    => ':attribute nuk i përshtatet formatit :format.',
    'different'      => ':attribute dhe :other duhet të jenë të ndryshme.',
    'digits'         => ':attribute duhet të ketë :digits shifra.',
    'digits_between' => ':attribute duhet të ketë midis :min dhe :max shifra.',
    'dimensions'     => ':attribute ka dimensione të gabuara.',
    'distinct'       => ':attribute ka një vlerë të përsëritur.',
    'email'          => ':attribute formati është i pasaktë.',
    'ends_with'      => ':attribute duhet të përfundojë me një nga vlerat: :values.',
    'exists'         => ':attribute përzgjedhur është i/e pasaktë.',
    'file'           => ':attribute duhet të jetë një fajll.',
    'filled'         => 'Fusha :attribute është e kërkuar.',
    'gt'             => [
        'numeric' => ':attribute duhet të jetë më i/e madh/e se :value.',
        'file'    => ':attribute duhet të jetë më i/e madh/e se :value kilobajtë.',
        'string'  => ':attribute duhet të ketë më shumë se :value karaktere.',
        'array'   => ':attribute duhet të ketë më shumë se :value elemente.',
    ],
    'gte' => [
        'numeric' => ':attribute duhet të jetë më i/e madh/e ose i/e barabartë me :value.',
        'file'    => ':attribute duhet të jetë më i/e madh/e ose i/e barabartë me :value kilobajtë.',
        'string'  => ':attribute duhet të ketë :value ose më shumë karaktere.',
        'array'   => ':attribute duhet të ketë :value ose më shumë elemente.',
    ],
    'image'    => ':attribute duhet të jetë imazh.',
    'in'       => ':attribute përzgjedhur është i/e pasaktë.',
    'in_array' => ':attribute nuk gjendet në :other.',
    'integer'  => ':attribute duhet të jetë numër i plotë.',
    'ip'       => ':attribute duhet të jetë një IP adresë.',
    'ipv4'     => ':attribute duhet të jetë një IPv4 adresë.',
    'ipv6'     => ':attribute duhet të jetë një IPv6 adresë.',
    'json'     => ':attribute duhet të ketë përmbajtje të vlefshme JSON.',
    'lt'       => [
        'numeric' => ':attribute duhet të jetë më i/e vogël se :value.',
        'file'    => ':attribute duhet të jetë më i/e vogël se :value kilobajtë.',
        'string'  => ':attribute duhet të ketë më pak se :value karaktere.',
        'array'   => ':attribute duhet të ketë më pak se :value elemente.',
    ],
    'lte' => [
        'numeric' => ':attribute duhet të jetë më i/e vogël ose i/e barabartë me :value.',
        'file'    => ':attribute duhet të jetë më i/e vogël ose i/e barabartë me :value kilobajtë.',
        'string'  => ':attribute duhet të ketë :value ose më pak karaktere.',
        'array'   => ':attribute duhet të ketë :value ose më pak karaktere.',
    ],
    'max' => [
        'numeric' => ':attribute nuk mund të jetë më tepër se :max.',
        'file'    => ':attribute nuk mund të jetë më tepër se :max kilobajtë.',
        'string'  => ':attribute nuk mund të ketë më tepër se :max karaktere.',
        'array'   => ':attribute nuk mund të ketë më tepër se :max elemente.',
    ],
    'mimes'     => ':attribute duhet të jetë një dokument i tipit: :values.',
    'mimetypes' => ':attribute duhet të jetë një dokument i tipit: :values.',
    'min'       => [
        'numeric' => ':attribute nuk mund të jetë më pak se :min.',
        'file'    => ':attribute nuk mund të jetë më pak se :min kilobajtë.',
        'string'  => ':attribute nuk mund të ketë më pak se :min karaktere.',
        'array'   => ':attribute nuk mund të ketë më pak se :min elemente.',
    ],
    'not_in'               => ':attribute përzgjedhur është i/e pasaktë.',
    'not_regex'            => 'Formati i :attribute është i pasaktë.',
    'numeric'              => ':attribute duhet të jetë një numër.',
    'password'             => 'Fjalëkalimi është i pasaktë.',
    'present'              => ':attribute duhet të jetë prezent/e.',
    'regex'                => 'Formati i :attribute është i pasaktë.',
    'required'             => 'Fusha :attribute është e kërkuar.',
    'required_if'          => 'Fusha :attribute është e kërkuar kur :other është :value.',
    'required_unless'      => 'Fusha :attribute është e kërkuar përveç kur :other është në :values.',
    'required_with'        => 'Fusha :attribute është e kërkuar kur :values ekziston.',
    'required_with_all'    => 'Fusha :attribute është e kërkuar kur :values ekziston.',
    'required_without'     => 'Fusha :attribute është e kërkuar kur :values nuk ekziston.',
    'required_without_all' => 'Fusha :attribute është e kërkuar kur nuk ekziston asnjë nga :values.',
    'same'                 => ':attribute dhe :other duhet të përputhen.',
    'size'                 => [
        'numeric' => ':attribute duhet të jetë :size.',
        'file'    => ':attribute duhet të jetë :size kilobajtë.',
        'string'  => ':attribute duhet të ketë :size karaktere.',
        'array'   => ':attribute duhet të ketë :size elemente.',
    ],
    'starts_with' => ':attribute duhet të fillojë me njërën nga vlerat: :values.',
    'string'      => ':attribute duhet të jetë varg.',
    'timezone'    => ':attribute duhet të jetë zonë kohore e saktë.',
    'unique'      => ':attribute është marrë tashmë.',
    'uploaded'    => ':attribute dështoi të ngarkohej.',
    'url'         => 'Formati i :attribute është i pasaktë.',
    'uuid'        => ':attribute duhet të jetë UUID i/e saktë.',

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
