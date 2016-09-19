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

    'accepted'             => ':attribute debe ser aceptado.',
    'active_url'           => ':attribute non é unha URL válida.',
    'after'                => ':attribute debe ser unha data posterior a :date.',
    'alpha'                => ':attribute só debe conter letras.',
    'alpha_dash'           => ':attribute só debe conter letras, números e guións.',
    'alpha_num'            => ':attribute só debe conter letras e números.',
    'array'                => ':attribute debe ser un conxunto.',
    'before'               => ':attribute debe ser unha data anterior a :date.',
    'between'              => [
        'numeric' => ':attribute debe estar entre :min e :max.',
        'file'    => 'O tamaño de :attribute debe estar entre :min e :max quilobites.',
        'string'  => ':attribute debe ter entre :min e :max caracteres.',
        'array'   => ':attribute debe conter entre :min e :max elementos.',
    ],
    'boolean'              => 'O campo :attribute debe ser verdadeiro ou falso.',
    'confirmed'            => 'A confirmación de :attribute non coincide.',
    'date'                 => ':attribute non é unha data válida.',
    'date_format'          => ':attribute non concorda co formato :format.',
    'different'            => ':attribute e :other deben ser diferentes.',
    'digits'               => ':attribute debe ter :digits díxitos.',
    'digits_between'       => ':attribute debe ter entre :min e :max díxitos.',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => ':attribute debe ser unha dirección de correo electrónico válida.',
    'exists'               => 'O :attribute seleccionado non é válido.',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => 'O campo :attribute é obrigatorio.',
    'image'                => ':attribute debe ser unha imaxe.',
    'in'                   => 'O :attribute seleccionado non é válido.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => ':attribute debe ser un número enteiro.',
    'ip'                   => ':attribute debe ser unha dirección IP válida.',
    'json'                 => ':attribute debe ser unha cadea JSON válida.',
    'max'                  => [
        'numeric' => ':attribute non debe ser maior de :max.',
        'file'    => 'O tamaño de :attribute non debe ser maior de :max quilobites.',
        'string'  => ':attribute non debe ter máis de :max caracteres.',
        'array'   => ':attribute non debe conter máis de :max elementos.',
    ],
    'mimes'                => ':attribute debe ser un arquivo de tipo: :values.',
    'mimetypes'            => ':attribute debe ser un arquivo de tipo: :values.',
    'min'                  => [
        'numeric' => ':attribute debe ser polo menos :min.',
        'file'    => 'O tamaño de :attribute debe ser polo menos de :min quilobites.',
        'string'  => ':attribute debe ter polo menos :min caracteres.',
        'array'   => ':attribute debe conter polo menos :min elementos.',
    ],
    'not_in'               => ':attribute non é válido.',
    'numeric'              => ':attribute debe de ser un número.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'O formato de :attribute non é válido.',
    'required'             => 'O campo :attribute é obrigatorio.',
    'required_if'          => 'O campo :attribute é obrigatorio cando :other é :value.',
    'required_unless'      => 'O campo :attribute é obrigatorio excepto que :other estea en :values.',
    'required_with'        => 'O campo :attribute é obrigatorio cando :values está presente.',
    'required_with_all'    => 'O campo :attribute é obrigatorio cando :values está presente',
    'required_without'     => 'O campo :attribute é obrigatorio cando :values non está presente.',
    'required_without_all' => 'O campo :attribute é obrigatorio cando ningún de :values están presentes.',
    'same'                 => 'O campo :attribute e :other deben coincidir.',
    'size'                 => [
        'numeric' => ':attribute debe ser :size.',
        'file'    => 'O tamaño de :attribute debe ser :size quilobites.',
        'string'  => ':attribute debe ter :size caracteres.',
        'array'   => ':attribute debe conter :size elementos.',
    ],
    'string'               => ':attribute debe ser unha cadea de caracteres.',
    'timezone'             => ':attribute debe ser unha zona válida.',
    'unique'               => ':attribute xa foi empregado.',
    'uploaded'             => 'The :attribute failed to upload.',
    'url'                  => 'O formato de :attribute é inválido.',

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
