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

    'accepted'             => ':Attribute duhet të pranohet.',
    'active_url'           => ':Attribute nuk është adresë e saktë.',
    'after'                => ':Attribute duhet të jetë datë pas :date.',
    'alpha'                => ':Attribute mund të përmbajë vetëm shkronja.',
    'alpha_dash'           => ':Attribute mund të përmbajë vetëm shkronja, numra, dhe viza.',
    'alpha_num'            => ':Attribute mund të përmbajë vetëm shkronja dhe numra.',
    'array'                => ':Attribute duhet të jetë një bashkësi (array).',
    'before'               => ':Attribute duhet të jetë datë para :date.',
    'between'              => [
        'numeric' => ':Attribute duhet të jetë midis :min - :max.',
        'file'    => ':Attribute duhet të jetë midis :min - :max kilobajtëve.',
        'string'  => ':Attribute duhet të jetë midis :min - :max karaktereve.',
        'array'   => ':Attribute duhet të jetë midis :min - :max elementëve.',
    ],
    'boolean'              => 'Fusha :attribute duhet të jetë e vërtetë ose e gabuar',
    'confirmed'            => ':Attribute konfirmimi nuk përputhet.',
    'date'                 => ':Attribute nuk është një datë e saktë.',
    'date_format'          => ':Attribute nuk i përshtatet formatit :format.',
    'different'            => ':Attribute dhe :other duhet të jenë të ndryshme.',
    'digits'               => ':Attribute duhet të jetë :digits shifra.',
    'digits_between'       => ':Attribute duhet të jetë midis :min dhe :max shifra.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => ':Attribute formati është i pasaktë.',
    'exists'               => ':Attribute përzgjedhur është i/e pasaktë.',
    'filled'               => 'Fusha :attribute është e kërkuar.',
    'image'                => ':Attribute duhet të jetë imazh.',
    'in'                   => ':Attribute përzgjedhur është i/e pasaktë.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => ':Attribute duhet të jetë numër i plotë.',
    'ip'                   => ':Attribute duhet të jetë një IP adresë e saktë.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => ':Attribute nuk mund të jetë më tepër se :max.',
        'file'    => ':Attribute nuk mund të jetë më tepër se :max kilobajtë.',
        'string'  => ':Attribute nuk mund të jetë më tepër se :max karaktere.',
        'array'   => ':Attribute nuk mund të ketë më tepër se :max elemente.',
    ],
    'mimes'                => ':Attribute duhet të jetë një dokument i tipit: :values.',
    'min'                  => [
        'numeric' => ':Attribute nuk mund të jetë më pak se :min.',
        'file'    => ':Attribute nuk mund të jetë më pak se :min kilobajtë.',
        'string'  => ':Attribute nuk mund të jetë më pak se :min karaktere.',
        'array'   => ':Attribute nuk mund të ketë më pak se :min elemente.',
    ],
    'not_in'               => ':Attribute përzgjedhur është i/e pasaktë.',
    'numeric'              => ':Attribute duhet të jetë një numër.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'Formati i :attribute është i pasaktë.',
    'required'             => 'Fusha :attribute është e kërkuar.',
    'required_if'          => 'Fusha :attribute është e kërkuar kur :other është :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'Fusha :attribute është e kërkuar kur :values ekziston.',
    'required_with_all'    => 'Fusha :attribute është e kërkuar kur :values ekziston.',
    'required_without'     => 'Fusha :attribute është e kërkuar kur :values nuk ekziston.',
    'required_without_all' => 'Fusha :attribute është e kërkuar kur nuk ekziston asnjë nga :values.',
    'same'                 => ':Attribute dhe :other duhet të përputhen.',
    'size'                 => [
        'numeric' => ':Attribute duhet të jetë :size.',
        'file'    => ':Attribute duhet të jetë :size kilobajtë.',
        'string'  => ':Attribute duhet të jetë :size karaktere.',
        'array'   => ':Attribute duhet të ketë :size elemente.',
    ],
    'string'               => ':Attribute duhet të jetë varg.',
    'timezone'             => ':Attribute duhet të jetë zonë e saktë.',
    'unique'               => ':Attribute është marrë tashmë.',
    'url'                  => 'Formati i :attribute është i pasaktë.',

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
