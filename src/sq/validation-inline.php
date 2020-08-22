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

    'accepted'        => 'Kjo fushë duhet të pranohet.',
    'active_url'      => 'Kjo nuk është adresë e saktë.',
    'after'           => 'Kjo duhet të jetë datë pas :date.',
    'after_or_equal'  => 'Kjo duhet të jetë datë e barabartë ose pas :date.',
    'alpha'           => 'Kjo mund të përmbajë vetëm shkronja.',
    'alpha_dash'      => 'Kjo mund të përmbajë vetëm shkronja, numra, dhe viza.',
    'alpha_num'       => 'Kjo mund të përmbajë vetëm shkronja dhe numra.',
    'array'           => 'Kjo duhet të jetë një bashkësi (array).',
    'before'          => 'Kjo duhet të jetë datë para :date.',
    'before_or_equal' => 'Kjo duhet të jetë datë e barabartë ose para :date.',
    'between'         => [
        'numeric' => 'Kjo duhet të jetë ndërmjet :min - :max.',
        'file'    => 'Kjo duhet të jetë ndërmjet :min - :max kilobajtëve.',
        'string'  => 'Kjo duhet të ketë ndërmjet :min - :max karaktereve.',
        'array'   => 'Kjo duhet të ketë ndërmjet :min - :max elementëve.',
    ],
    'boolean'        => 'Kjo fushë duhet të jetë e vërtetë ose e gabuar',
    'confirmed'      => 'Konfirmimi nuk përputhet.',
    'date'           => 'Kjo nuk është një datë e saktë.',
    'date_equals'    => 'Kjo duhet të jetë datë e barabartë me :date.',
    'date_format'    => 'Kjo nuk i përshtatet formatit :format.',
    'different'      => 'Kjo dhe :other duhet të jenë të ndryshme.',
    'digits'         => 'Kjo duhet të ketë :digits shifra.',
    'digits_between' => 'Kjo duhet të ketë midis :min dhe :max shifra.',
    'dimensions'     => 'Kjo ka dimensione të gabuara.',
    'distinct'       => 'Kjo ka një vlerë të përsëritur.',
    'email'          => 'Kjo duhet të jetë email adresë e saktë.',
    'ends_with'      => 'Kjo duhet të përfundojë me një nga vlerat: :values.',
    'exists'         => 'Vlera e përzgjedhur është e pasaktë.',
    'file'           => 'Kjo duhet të jetë një fajll.',
    'filled'         => 'Kjo fushë është e kërkuar.',
    'gt'             => [
        'numeric' => 'Kjo duhet të jetë më e madhe se :value.',
        'file'    => 'Kjo duhet të jetë më e madhe se :value kilobajtë.',
        'string'  => 'Kjo duhet të ketë më shumë se :value karaktere.',
        'array'   => 'Kjo duhet të ketë më shumë se :value elemente.',
    ],
    'gte' => [
        'numeric' => 'Kjo duhet të jetë më e madhe ose e barabartë me :value.',
        'file'    => 'Kjo duhet të jetë më e madhe ose e barabartë me :value kilobajtë.',
        'string'  => 'Kjo duhet të ketë :value ose më shumë karaktere.',
        'array'   => 'Kjo duhet të ketë :value ose më shumë elemente.',
    ],
    'image'    => 'Kjo duhet të jetë imazh.',
    'in'       => 'Vlera e përzgjedhur është e pasaktë.',
    'in_array' => 'Kjo nuk gjendet në :other.',
    'integer'  => 'Kjo duhet të jetë numër i plotë.',
    'ip'       => 'Kjo duhet të jetë një IP adresë.',
    'ipv4'     => 'Kjo duhet të jetë një IPv4 adresë.',
    'ipv6'     => 'Kjo duhet të jetë një IPv6 adresë.',
    'json'     => 'Kjo duhet të ketë përmbajtje të vlefshme JSON.',
    'lt'       => [
        'numeric' => 'Kjo duhet të jetë më e vogël se :value.',
        'file'    => 'Kjo duhet të jetë më e vogël se :value kilobajtë.',
        'string'  => 'Kjo duhet të ketë më pak se :value karaktere.',
        'array'   => 'Kjo duhet të ketë më pak se :value elemente.',
    ],
    'lte' => [
        'numeric' => 'Kjo duhet të jetë më e vogël ose e barabartë me :value.',
        'file'    => 'Kjo duhet të jetë më e vogël ose e barabartë me :value kilobajtë.',
        'string'  => 'Kjo duhet të ketë :value ose më pak karaktere.',
        'array'   => 'Kjo duhet të ketë :value ose më pak karaktere.',
    ],
    'max' => [
        'numeric' => 'Kjo nuk mund të jetë më tepër se :max.',
        'file'    => 'Kjo nuk mund të jetë më tepër se :max kilobajtë.',
        'string'  => 'Kjo nuk mund të ketë më tepër se :max karaktere.',
        'array'   => 'Kjo nuk mund të ketë më tepër se :max elemente.',
    ],
    'mimes'     => 'Kjo duhet të jetë një dokument i tipit: :values.',
    'mimetypes' => 'Kjo duhet të jetë një dokument i tipit: :values.',
    'min'       => [
        'numeric' => 'Kjo nuk mund të jetë më pak se :min.',
        'file'    => 'Kjo nuk mund të jetë më pak se :min kilobajtë.',
        'string'  => 'Kjo nuk mund të ketë më pak se :min karaktere.',
        'array'   => 'Kjo nuk mund të ketë më pak se :min elemente.',
    ],
    'not_in'               => 'Vlera e përzgjedhur është e pasaktë.',
    'not_regex'            => 'Ky format është i pasaktë.',
    'numeric'              => 'Kjo duhet të jetë një numër.',
    'password'             => 'Fjalëkalimi është i pasaktë.',
    'present'              => 'Kjo duhet të jetë prezente.',
    'regex'                => 'Ky format është i pasaktë.',
    'required'             => 'Kjo fushë është e kërkuar.',
    'required_if'          => 'Kjo fushë është e kërkuar kur :other është :value.',
    'required_unless'      => 'Kjo fushë është e kërkuar përveç kur :other është në :values.',
    'required_with'        => 'Kjo fushë është e kërkuar kur :values ekziston.',
    'required_with_all'    => 'Kjo fushë është e kërkuar kur :values ekziston.',
    'required_without'     => 'Kjo fushë është e kërkuar kur :values nuk ekziston.',
    'required_without_all' => 'Kjo fushë është e kërkuar kur nuk ekziston asnjë nga :values.',
    'same'                 => 'Kjo dhe :other duhet të përputhen.',
    'size'                 => [
        'numeric' => 'Kjo duhet të jetë :size.',
        'file'    => 'Kjo duhet të jetë :size kilobajtë.',
        'string'  => 'Kjo duhet të ketë :size karaktere.',
        'array'   => 'Kjo duhet të ketë :size elemente.',
    ],
    'starts_with' => 'Kjo duhet të fillojë me njërën nga vlerat: :values.',
    'string'      => 'Kjo duhet të jetë varg.',
    'timezone'    => 'Kjo duhet të jetë zonë kohore e saktë.',
    'unique'      => 'Kjo është marrë tashmë.',
    'uploaded'    => 'Kjo dështoi të ngarkohej.',
    'url'         => 'Ky format është i pasaktë.',
    'uuid'        => 'Kjo duhet të jetë UUID i/e saktë.',

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

];
