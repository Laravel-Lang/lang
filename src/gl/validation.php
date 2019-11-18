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

    'accepted'        => ':attribute debe ser aceptado.',
    'active_url'      => ':attribute non é unha URL válida.',
    'after'           => ':attribute debe ser unha data posterior a :date.',
    'after_or_equal'  => ':attribute debe ser unha data posterior ou igual a :date.',
    'alpha'           => ':attribute só debe conter letras.',
    'alpha_dash'      => ':attribute só debe conter letras, números, guións e guións baixos.',
    'alpha_num'       => ':attribute só debe conter letras e números.',
    'array'           => ':attribute debe ser un conxunto.',
    'before'          => ':attribute debe ser unha data previa a :date.',
    'before_or_equal' => ':attribute debe ser unha data previa ou igual a :date.',
    'between'         => [
        'numeric' => ':attribute debe estar entre :min e :max.',
        'file'    => ':attribute debe ter entre :min e :max quilobites.',
        'string'  => ':attribute debe ter entre :min e :max caracteres.',
        'array'   => ':attribute debe conter entre :min e :max elementos.',
    ],
    'boolean'        => 'O campo :attribute debe ser verdadeiro ou falso.',
    'confirmed'      => 'A confirmación de :attribute non coincide.',
    'date'           => ':attribute non é unha data válida.',
    'date_equals'    => ':attribute debe ser unha data igual a :date.',
    'date_format'    => ':attribute non coincide co formato :format.',
    'different'      => ':attribute e :other deben ser diferentes.',
    'digits'         => ':attribute debe ter :digits díxitos.',
    'digits_between' => ':attribute debe ter entre :min e :max díxitos.',
    'dimensions'     => 'As dimensións da imaxe :attribute no son válidas.',
    'distinct'       => 'O campo :attribute contén un valor duplicado.',
    'email'          => ':attribute debe ser unha dirección de correo electrónico válida.',
    'ends_with'      => ':attribute debe finalizar cun dos seguintes valores: :values',
    'exists'         => ':attribute seleccionado non é válido.',
    'file'           => ':attribute debe ser un arquivo.',
    'filled'         => 'O campo :attribute debe ter un valor.',
    'gt'             => [
        'numeric' => ':attribute debe ser maior que :value.',
        'file'    => ':attribute debe ter máis de :value quilobytes.',
        'string'  => ':attribute debe ter máis de :value caracteres.',
        'array'   => ':attribute debe ter máis de :value elementos.',
    ],
    'gte' => [
        'numeric' => ':attribute debe ser polo menos :value.',
        'file'    => ':attribute debe ter polo menos :value quilobytes.',
        'string'  => ':attribute debe ter polo menos :value caracteres.',
        'array'   => ':attribute debe ter polo menos :value elementos.',
    ],
    'image'    => ':attribute debe ser unha imaxe.',
    'in'       => ':attribute seleccionado non é válido.',
    'in_array' => 'O campo :attribute non existe en :other.',
    'integer'  => ':attribute debe ser un número enteiro.',
    'ip'       => ':attribute debe ser unha dirección IP válida.',
    'ipv4'     => ':attribute debe ser unha dirección IPv4 válida.',
    'ipv6'     => ':attribute debe ser unha dirección IPv6 válida.',
    'json'     => ':attribute debe ser unha cadea JSON válida.',
    'lt'       => [
        'numeric' => ':attribute debe ser menor que :value.',
        'file'    => ':attribute debe ter menos de :value quilobytes.',
        'string'  => ':attribute debe ter menos de :value caracteres.',
        'array'   => ':attribute debe ter menos de :value elementos.',
    ],
    'lte' => [
        'numeric' => ':attribute debe ser como máximo :value.',
        'file'    => ':attribute debe ter como máximo :value quilobytes.',
        'string'  => ':attribute debe ter como máximo :value caracteres.',
        'array'   => ':attribute non debe ter máis de :value elementos.',
    ],
    'max' => [
        'numeric' => ':attribute non debe ser maior de :max.',
        'file'    => ':attribute non debe ser maior de :max quilobites.',
        'string'  => ':attribute non debe ser maior de :max caracteres.',
        'array'   => ':attribute non debe ter máis de :max elementos.',
    ],
    'mimes'     => ':attribute debe ser un arquivo de tipo: :values.',
    'mimetypes' => ':attribute debe ser un arquivo de tipo: :values.',
    'min'       => [
        'numeric' => ':attribute debe ser polo menos :min.',
        'file'    => ':attribute debe ser polo menos de :min quilobites.',
        'string'  => ':attribute debe ser polo menos de :min caracteres.',
        'array'   => ':attribute debe ter polo menos :min elementos.',
    ],
    'not_in'               => ':attribute seleccionado non é válido.',
    'not_regex'            => 'O formato de :attribute non é válido.',
    'numeric'              => ':attribute debe ser un número.',
    'present'              => 'O campo :attribute debe estar presente.',
    'regex'                => 'O formato de :attribute non é válido.',
    'required'             => 'O campo :attribute é obrigatorio.',
    'required_if'          => 'O campo :attribute é obrigatorio cando :other é :value.',
    'required_unless'      => 'O campo :attribute é obrigatorio excepto que :other estea en :values.',
    'required_with'        => 'O campo :attribute é obrigatorio cando :values está presente.',
    'required_with_all'    => 'O campo :attribute é obrigatorio cando :values están presentes.',
    'required_without'     => 'O campo :attribute é obrigatorio cando :values non está presente.',
    'required_without_all' => 'O campo :attribute é obrigatorio cando ningún de :values están presentes.',
    'same'                 => ':attribute e :other deben coincidir.',
    'size'                 => [
        'numeric' => ':attribute debe ser :size.',
        'file'    => ':attribute debe ter :size quilobites.',
        'string'  => ':attribute debe ter :size caracteres.',
        'array'   => ':attribute debe conter :size elementos.',
    ],
    'starts_with' => ':attribute debe comezar cun dos seguintes valores: :values',
    'string'      => ':attribute debe ser unha cadea de caracteres.',
    'timezone'    => ':attribute debe ser unha zona válida.',
    'unique'      => ':attribute xa foi empregado.',
    'uploaded'    => ':attribute fallou na subida.',
    'url'         => 'O formato de :attribute non é válido.',
    'uuid'        => ':attribute debe ser un UUID válido.',

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
