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

    'accepted'             => ':Attribute ha de ser acceptat.',
    'active_url'           => ':Attribute no és un URL vàlid.',
    'after'                => ':Attribute ha de ser una data posterior a :date.',
    'alpha'                => ':Attribute només pot contenir lletres.',
    'alpha_dash'           => ':Attribute només por contenir lletres, números i guions.',
    'alpha_num'            => ':Attribute només pot contenir lletres i números.',
    'array'                => ':Attribute ha de ser un conjunt.',
    'before'               => ':Attribute ha de ser una data anterior a :date.',
    'between'              => [
        'numeric' => ":attribute ha d'estar entre :min - :max.",
        'file'    => ':Attribute ha de pesar entre :min - :max kilobytes.',
        'string'  => ':Attribute ha de tenir entre :min - :max caràcters.',
        'array'   => ':Attribute ha de tenir entre :min - :max ítems.',
    ],
    'boolean'              => 'El camp :attribute ha de ser veritat o fals',
    'confirmed'            => 'La confirmació de :attribute no coincideix.',
    'date'                 => ':Attribute no és una data vàlida.',
    'date_format'          => ':Attribute no correspon al format :format.',
    'different'            => ':Attribute i :other han de ser diferents.',
    'digits'               => ':Attribute ha de tenir :digits digits.',
    'digits_between'       => ':Attribute ha de tenir entre :min i :max digits.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => ':Attribute no és un e-mail vàlid',
    'exists'               => ':Attribute és invàlid.',
    'filled'               => 'El camp :attribute és obligatori.',
    'image'                => ':Attribute ha de ser una imatge.',
    'in'                   => ':Attribute és invàlid',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => ':Attribute ha de ser un nombre enter.',
    'ip'                   => ':Attribute ha de ser una adreça IP vàlida.',
    'json'                 => 'El camp :attribute ha de contenir una cadena JSON vàlida.',
    'max'                  => [
        'numeric' => ':Attribute no ha de ser major a :max.',
        'file'    => ':Attribute no ha de ser més gran que :max kilobytes.',
        'string'  => ':Attribute no ha de ser més gran que :max characters.',
        'array'   => ':Attribute no ha de tenir més de :max ítems.',
    ],
    'mimes'                => ':Attribute ha de ser un arxiu amb format: :values.',
    'min'                  => [
        'numeric' => "El tamany de :attribute ha de ser d'almenys :min.",
        'file'    => "El tamany de :attribute ha de ser d'almenys :min kilobytes.",
        'string'  => ':Attribute ha de contenir almenys :min caràcters.',
        'array'   => ':Attribute ha de tenir almenys :min ítems.',
    ],
    'not_in'               => ':Attribute és invàlid.',
    'numeric'              => ':Attribute ha de ser numèric.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'El format de :attribute és invàlid.',
    'required'             => 'El camp :attribute és obligatori.',
    'required_if'          => 'El camp :attribute és obligatori quan :other és :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'El camp :attribute és obligatori quan :values és present.',
    'required_with_all'    => 'El camp :attribute és obligatori quan :values és present.',
    'required_without'     => 'El camp :attribute és obligatori quan :values no és present.',
    'required_without_all' => 'El camp :attribute és obligatori quan cap dels :values estan presents.',
    'same'                 => ':Attribute i :other han de coincidir.',
    'size'                 => [
        'numeric' => 'El tamany de :attribute ha de ser :size.',
        'file'    => 'El tamany de :attribute ha de ser :size kilobytes.',
        'string'  => ':Attribute ha de contenir :size caràcters.',
        'array'   => ':Attribute ha de contenir :size ítems.',
    ],
    'string'               => 'El camp :attribute ha de ser una cadena de caràcters.',
    'timezone'             => 'El camp :attribute ha de ser una zona vàlida.',
    'unique'               => ':Attribute ja ha estat registrat.',
    'url'                  => 'El format :attribute és invàlid.',

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
