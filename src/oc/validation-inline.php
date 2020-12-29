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

    'accepted'             => 'Aqueste camp deu èsser acceptat.',
    'active_url'           => 'Aquò es pas una URL valida.',
    'after'                => 'La data deu èsser posteriora a :date.',
    'after_or_equal'       => 'La data deu èsser posteriora o egala a :date.',
    'alpha'                => 'Lo camp a de conténer pas que de letras.',
    'alpha_dash'           => 'Lo camp a de conténer pas que de letras, nombres e de tirets.',
    'alpha_num'            => 'Lo camp a de conténer pas que de letras e nombres.',
    'array'                => 'Lo camp deu èsser un tablèu.',
    'before'               => 'La deu èsser data anteriora a :date.',
    'before_or_equal'      => 'La deu èsser anteriora o egala a :date.',
    'between'              => [
        'numeric' => 'La valor de :attribute deu èsser entre :min e :max.',
        'file'    => 'La talha del fichièr deu èsser entre :min e :max kiloctets.',
        'string'  => 'Lo tèxt deu conténer entre :min e :max caractèrs.',
        'array'   => 'Lo tablèu deu aver entre :min e :max elements.',
    ],
    'boolean'              => 'Aqueste camp deu èsser verai o fals.',
    'confirmed'            => 'Lo camp de confirmacion correspond pas.',
    'date'                 => 'Aquò es pas una data valida.',
    'date_equals'          => 'La data deu èsser una data egala a :date.',
    'date_format'          => 'Aqueste camp correspond pas al format :format.',
    'different'            => 'Aqueste camp deu èsser diferent de :other.',
    'digits'               => 'Aqueste camp deu conténer :digits chifras.',
    'digits_between'       => 'Aqueste camp deu conténer  entre :min e :max chifras.',
    'dimensions'           => 'La talha de l’imatge es pas confòrma.',
    'distinct'             => 'Aqueste camp a un doblon.',
    'email'                => 'Aqueste camp deu èsser una adreça de corrièl valida.',
    'ends_with'            => 'Aqueste camp deu acabar per una de las valors seguentas : :values',
    'exists'               => 'Aqueste camp seleccionat es invalid.',
    'file'                 => 'Aqueste camp deu èsser un fichièr.',
    'filled'               => 'Aqueste camp deu aver una valor.',
     'gt'                   => [
        'numeric' => 'La valor de deu èsser superiora a :value.',
        'file'    => 'La talha del fichièr deu èsser superiora a :value kilo-octets.',
        'string'  => 'Lo tèxt deu conténer mai de :value caractèrs.',
        'array'   => 'Lo tablèu deu conténer mai de :value elements.',
    ],
    'gte'                  => [
        'numeric' => 'La valor deu èsser superiora o egala a :value.',
        'file'    => 'La talha del fichièr deu èsser superiora o egala a :value kilo-octets.',
        'string'  => 'Lo tèxt deu conténer almens :value caractèrs.',
        'array'   => 'Lo tablèu deu conténer almens :value elements.',
    ],
    'image'                => 'Aqueste camp deu èsser un imatge.',
    'in'                   => 'Aqueste camp es invalid.',
    'in_array'             => 'Aqueste camp existís pas dins :other.',
    'integer'              => 'Aqueste camp deu èsser un nombre entièr.',
    'ip'                   => 'Aqueste camp deu èsser una adreça IP valida.',
    'ipv4'                 => 'Aqueste camp deu èsser una adreça IPv4 valida.',
    'ipv6'                 => 'Aqueste camp deu èsser una adreça IPv6 valida.',
    'json'                 => 'Aqueste camp deu èsser una cadena JSON valida.',
    'lt'                   => [
        'numeric' => 'La valor deu èsser inferiora a :value.',
        'file'    => 'La talha del fichièr deu èsser inferiora a :value kilo-octets.',
        'string'  => 'Lo tèxt deu conténer almens :value caractèrs.',
        'array'   => 'Lo tablèu deu conténer almens :value elements.',
    ],
    'lte'                  => [
        'numeric' => 'La valor deu èsser inferiora o egala a :value.',
        'file'    => 'La talha del fichièr deu èsser inferiora o egala :value kilo-octets.',
        'string'  => 'Lo tèxt deu conténer al pus mai :value caractèrs.',
        'array'   => 'Lo tablèu deu conténer al pus mai :value elements.',
    ],
    'max'                  => [
        'numeric' => 'La valor deu pas èsser superiora a :max.',
        'file'    => 'La talha del fichièr deu pas èsser superior a :max kiloctets.',
        'string'  => 'Lo tèxt deu èsser superior a :max caractèrs.',
        'array'   => 'Lo tablèu deu pas conténer mai de :max elements.',
    ],
    'mimes'                => 'Lo fichièr deu èsser del tipe : :values.',
    'mimetypes'            => 'Lo fichièr deu èsser del tipe :values.',
    'min'                  => [
        'numeric' => 'La valor deu fa almens :min o mai.',
        'file'    => 'La talha del fichièr deu fa almens :min kiloctets.',
        'string'  => 'Lo tèxt deu fa almens :min caractèrs.',
        'array'   => 'Lo tablèu deu conténer almens :min elements.',
    ],
    'multiple_of'          => 'La valor deu èsser un multiple de :value',
    'not_in'               => 'Lo camp seleccionat es invalid.',
    'not_regex'            => 'Lo format del camp es invalid.',
    'numeric'              => 'Lo camp deu èsser un nombre.',
    'password'             => 'Lo senhal es incorrèct',
    'present'              => 'Aqueste camp deu èsser present.',
    'regex'                => 'Lo format del camp es invalid.',
    'required'             => 'Aqueste camp es obligatòri.',
    'required_if'          => 'Aqueste camp es obligatòri quand :other es :value.',
    'required_unless'      => 'Aqueste camp es obligatòri levat se :other es dins :values.',
    'required_with'        => 'Aqueste camp es obligatòri quand :values es present.',
    'required_with_all'    => 'Aqueste camp es obligatòri quand :values es present.',
    'required_without'     => 'Aqueste camp es obligatòri quand :values es pas present.',
    'required_without_all' => 'Aqueste camp es obligatòri quand cap de :values son presents.',
    'same'                 => 'Aqueste camp es identic a :other.',
    'size'                 => [
        'numeric' => 'La valor deu èsser :size.',
        'file'    => 'La talha del fichièr deu èsser :size kiloctets.',
        'string'  => 'Lo tèxt deu conténer :size caractèrs.',
        'array'   => 'Lo tablèu deu conténer :size elements.',
    ],
    'starts_with'          => 'Aqueste camp deu començar amb una de las valors seguentas : :values',
    'string'               => 'Aqueste camp deu èsser una cadena de tèxt.',
    'timezone'             => 'Aqueste camp deu èsser una zòna orària valida.',
    'unique'               => 'La valor es ja presa.',
    'uploaded'             => 'Lo fichièr a pas pogut s’enviar.',
    'url'                  => 'Lo format de l’URL es invalid.',
    'uuid'                 => 'Aqueste camp deu èsser un UUID valid',

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
            'rule-name' => 'messatge-personalizat',
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
        'name'                  => 'nom',
        'username'              => "nom d'utilizaire",
        'email'                 => 'adreça electronica',
        'first_name'            => 'prenom',
        'last_name'             => 'nom',
        'password'              => 'senhal',
        'password_confirmation' => 'confirmacion del senhal',
        'city'                  => 'vila',
        'country'               => 'país',
        'address'               => 'adreça',
        'phone'                 => 'telefòn',
        'mobile'                => 'mobil',
        'age'                   => 'atge',
        'sex'                   => 'sèxe',
        'gender'                => 'genre',
        'day'                   => 'jorn',
        'month'                 => 'mes',
        'year'                  => 'annada',
        'hour'                  => 'ora',
        'minute'                => 'minuta',
        'second'                => 'segonda',
        'title'                 => 'títol',
        'content'               => 'contengut',
        'description'           => 'descripcion',
        'excerpt'               => 'extrach',
        'date'                  => 'data',
        'time'                  => 'ora',
        'available'             => 'disponible',
        'size'                  => 'talha',
    ],
];
