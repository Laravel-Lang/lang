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

    'accepted'             => ':attribute ha de ser acceptat.',
    'active_url'           => ':attribute no és un URL vàlid.',
    'after'                => ':attribute ha de ser una data posterior a :date.',
    'after_or_equal'       => ':attribute ha de ser una data posterior o igual a :date.',
    'alpha'                => ':attribute només pot contenir lletres.',
    'alpha_dash'           => ':attribute només pot contenir lletres, números i guions.',
    'alpha_num'            => ':attribute només pot contenir lletres i números.',
    'array'                => ':attribute ha de ser una matriu.',
    'before'               => ':attribute ha de ser una data anterior a :date.',
    'before_or_equal'      => ':attribute ha de ser una data anterior o igual a :date.',
    'between'              => [
        'numeric' => ":attribute ha d'estar entre :min - :max.",
        'file'    => ':attribute ha de pesar entre :min - :max kilobytes.',
        'string'  => ':attribute ha de tenir entre :min - :max caràcters.',
        'array'   => ':attribute ha de tenir entre :min - :max ítems.',
    ],
    'boolean'              => 'El camp :attribute ha de ser verdader o fals',
    'confirmed'            => 'La confirmació de :attribute no coincideix.',
    'date'                 => ':attribute no és una data vàlida.',
    'date_equals'          => 'El :attribute ha de ser una data igual a :date.',
    'date_format'          => 'El camp :attribute no concorda amb el format :format.',
    'different'            => ':attribute i :other han de ser diferents.',
    'digits'               => ':attribute ha de tenir :digits dígits.',
    'digits_between'       => ':attribute ha de tenir entre :min i :max dígits.',
    'dimensions'           => 'Les dimensions de la imatge :attribute no són vàlides.',
    'distinct'             => 'El camp :attribute té un valor duplicat.',
    'email'                => ':attribute no és un e-mail vàlid',
    'ends_with'            => 'The :attribute must end with one of the following: :values.',
    'exists'               => ':attribute és invàlid.',
    'file'                 => 'El camp :attribute ha de ser un arxiu.',
    'filled'               => 'El camp :attribute és obligatori.',
    'gt'                   => [
        'numeric' => 'El :attribute ha de ser superior a :value.',
        'file'    => 'El :attribute ha de ser superior a :value kilobytes.',
        'string'  => 'El :attribute ha de superar els :value caràcters.',
        'array'   => 'El :attribute ha de tenir més de :value ítems.',
    ],
    'gte'                  => [
        'numeric' => 'El :attribute ha de ser igual o superior a :value.',
        'file'    => 'El :attribute ha de ser igual o superior a :value kilobytes.',
        'string'  => 'El :attribute ha de ser igual o superior a :value caràcters.',
        'array'   => 'El :attribute ha de tenir :value ítems o més.',
    ],
    'image'                => ':attribute ha de ser una imatge.',
    'in'                   => ':attribute és invàlid',
    'in_array'             => 'El camp :attribute no existeix dintre de :other.',
    'integer'              => ':attribute ha de ser un nombre enter.',
    'ip'                   => ':attribute ha de ser una adreça IP vàlida.',
    'ipv4'                 => ':attribute ha de ser una adreça IPv4 vàlida.',
    'ipv6'                 => ':attribute ha de ser una adreça IPv6 vàlida.',
    'json'                 => 'El camp :attribute ha de ser una cadena JSON vàlida.',
    'lt'                   => [
        'numeric' => 'El :attribute ha de ser inferior a :value.',
        'file'    => 'El :attribute ha de ser inferior a :value kilobytes.',
        'string'  => 'El :attribute no ha de superar els :value caràcters.',
        'array'   => 'El :attribute ha de tenir menys de :value ítems.',
    ],
    'lte'                  => [
        'numeric' => 'El :attribute ha de ser igual o inferior a :value.',
        'file'    => 'El :attribute ha de ser igual o inferior a :value kilobytes.',
        'string'  => 'El :attribute ha de ser igual o inferior a :value caràcters.',
        'array'   => 'El :attribute no ha de tenir més de :value ítems.',
    ],
    'max'                  => [
        'numeric' => ':attribute no pot ser més gran que :max.',
        'file'    => ':attribute no pot ser més gran que :max kilobytes.',
        'string'  => ':attribute no pot ser més gran que :max caràcters.',
        'array'   => ':attribute no pot tenir més de :max ítems.',
    ],
    'mimes'                => ':attribute ha de ser un arxiu amb format: :values.',
    'mimetypes'            => ':attribute ha de ser un arxiu amb format: :values.',
    'min'                  => [
        'numeric' => "El tamany de :attribute ha de ser d'almenys :min.",
        'file'    => "El tamany de :attribute ha de ser d'almenys :min kilobytes.",
        'string'  => ':attribute ha de contenir almenys :min caràcters.',
        'array'   => ':attribute ha de tenir almenys :min ítems.',
    ],
    'not_in'               => ':attribute és invàlid.',
    'not_regex'            => 'El format de :attribute no és vàlid.',
    'numeric'              => ':attribute ha de ser numèric.',
    'present'              => 'El camp :attribute ha d\'existir.',
    'password'             => 'La contrasenya és incorrecta.',
    'regex'                => 'El format de :attribute és invàlid.',
    'required'             => 'El camp :attribute és obligatori.',
    'required_if'          => 'El camp :attribute és obligatori quan :other és :value.',
    'required_unless'      => 'El camp :attribute és obligatori a no ser que :other sigui a :values.',
    'required_with'        => 'El camp :attribute és obligatori quan hi ha :values.',
    'required_with_all'    => 'El camp :attribute és obligatori quan hi ha :values.',
    'required_without'     => 'El camp :attribute és obligatori quan no hi ha :values.',
    'required_without_all' => 'El camp :attribute és obligatori quan no hi ha cap valor dels següents: :values.',
    'same'                 => ':attribute i :other han de coincidir.',
    'size'                 => [
        'numeric' => 'El tamany de :attribute ha de ser :size.',
        'file'    => 'El tamany de :attribute ha de ser :size kilobytes.',
        'string'  => ':attribute ha de contenir :size caràcters.',
        'array'   => ':attribute ha de contenir :size ítems.',
    ],
    'starts_with'          => 'El :attribute ha de començar per un dels valors següents: :values',
    'string'               => 'El camp :attribute ha de ser una cadena.',
    'timezone'             => 'El camp :attribute ha de ser una zona vàlida.',
    'unique'               => ':attribute ja està registrat i no es pot repetir.',
    'uploaded'             => ':attribute ha fallat al pujar.',
    'url'                  => ':attribute no és una adreça web vàlida.',
    'uuid'                 => 'El :attribute ha de ser un indentificador únic universal (UUID) vàlid.',

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
        'password' => [
            'min' => 'La :attribute ha de contenir més de :min caràcters',
        ],
        'email'    => [
            'unique' => 'L\':attribute ja ha sigut registrada.',
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
        'address'               => 'adreça',
        'age'                   => 'edat',
        'body'                  => 'cos',
        'city'                  => 'ciutat',
        'content'               => 'contingut',
        'country'               => 'país',
        'date'                  => 'data',
        'day'                   => 'dia',
        'description'           => 'descripció',
        'email'                 => 'adreça electrònica',
        'excerpt'               => 'extracte',
        'first_name'            => 'nom',
        'gender'                => 'gènere',
        'hour'                  => 'hora',
        'last_name'             => 'cognom',
        'message'               => 'missatge',
        'minute'                => 'minut',
        'mobile'                => 'mòbil',
        'month'                 => 'mes',
        'name'                  => 'nom',
        'password'              => 'contrasenya',
        'password_confirmation' => 'confirmació de la contrasenya',
        'phone'                 => 'telèfon',
        'price'                 => 'preu',
        'second'                => 'segon',
        'sex'                   => 'sexe',
        'subject'               => 'assumpte',
        'terms'                 => 'termes',
        'time'                  => 'hora',
        'title'                 => 'títol',
        'username'              => 'usuari',
        'year'                  => 'any',
    ],
];
