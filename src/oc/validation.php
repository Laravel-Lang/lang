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

    'accepted'             => 'Lo camp :attribute deu èsser acceptat.',
    'active_url'           => 'Lo camp :attribute es pas una URL valida.',
    'after'                => 'Lo camp :attribute deu èsser una data posteriora a :date.',
    'after_or_equal'       => 'Lo camp :attribute deu èsser una data posteriora o egala a :date.',
    'alpha'                => 'Lo camp :attribute a de conténer solament de letras.',
    'alpha_dash'           => 'Lo camp :attribute a de conténer solament de letras, nombres e de tirets.',
    'alpha_num'            => 'Lo camp :attribute a de conténer solament de letras e nombres.',
    'array'                => 'Lo camp :attribute deu èsser un tablèu.',
    'before'               => 'Lo camp :attribute deu èsser una data anteriora a :date.',
    'before_or_equal'      => 'Lo camp :attribute deu èsser una data anteriora o egala a :date.',
    'between'              => [
        'numeric' => 'La valor de :attribute deu èsser entre :min e :max.',
        'file'    => 'La talha de :attribute deu èsser entre :min e :max kiloctets.',
        'string'  => 'Lo tèxt :attribute deu conténer entre :min e :max caractèrs.',
        'array'   => 'Lo tablèu :attribute deu aver entre :min e :max elements.',
    ],
    'boolean'              => 'Lo camp :attribute deu èsser true o false.',
    'confirmed'            => 'Lo camp de confirmacion :attribute correspond pas.',
    'date'                 => 'Lo camp :attribute es pas una data valida.',
    'date_equals'          => 'Lo camp :attribute deu èsser una data egala a :date.',
    'date_format'          => ':attribute correspond pas al format :format.',
    'different'            => 'Los camps :attribute e :other devon èsser diferents.',
    'digits'               => ':attribute deu èsser un nombre de :digits chifras.',
    'digits_between'       => ':attribute deu èsser entre :min e :max chifras.',
    'dimensions'           => 'L’imatge :attribute a de dimensions invalidas.',
    'distinct'             => 'Lo camp :attribute a un doblon.',
    'email'                => ':attribute deu èsser una adreça de corrièl valida.',
    'ends_with'            => 'Lo camp :attribute deu acabar per una de las valors seguentas : :values',
    'exists'               => 'Lo :attribute seleccionat es invalid.',
    'file'                 => 'Lo camp :attribute deu èsser un fichièr.',
    'filled'               => 'Lo camp :attribute deu aver una valor.',
     'gt'                   => [
        'numeric' => 'La valor de :attribute deu èsser superiora a :value.',
        'file'    => 'La talha del fichièr de :attribute deu èsser superiora a :value kilo-octets.',
        'string'  => 'Lo tèxt :attribute deu conténer mai de :value caractèrs.',
        'array'   => 'Lo tablèu :attribute deu conténer mai de :value elements.',
    ],
    'gte'                  => [
        'numeric' => 'La valor de :attribute deu èsser superiora o egala a :value.',
        'file'    => 'La talha del fichièr de :attribute deu èsser superiora o egala a :value kilo-octets.',
        'string'  => 'Lo tèxt :attribute deu conténer almens :value caractèrs.',
        'array'   => 'Lo tablèu :attribute deu conténer almens :value elements.',
    ],   
    'image'                => 'Lo camp :attribute deu èsser un imatge.',
    'in'                   => 'Lo camp :attribute selecionnat es invalid.',
    'in_array'             => 'Lo camp :attribute existís pas dins :other.',
    'integer'              => 'Lo camp :attribute deu èsser un nombre entièr.',
    'ip'                   => 'Lo camp :attribute deu èsser una adreça IP valida.',
    'ipv4'                 => 'Lo camp :attribute deu èsser una adreça IPv4 valida.',
    'ipv6'                 => 'Lo camp :attribute deu èsser una adreça IPv6 valida.',
    'json'                 => 'Lo camp :attribute deu èsser una cadena JSON valida.',
    'lt'                   => [
        'numeric' => 'La valor de :attribute deu èsser inferiora a :value.',
        'file'    => 'La talha del fichièr de :attribute deu èsser inferiora a :value kilo-octets.',
        'string'  => 'Lo tèxt :attribute deu conténer almens :value caractèrs.',
        'array'   => 'Lo tablèu :attribute deu conténer almens :value elements.',
    ],
    'lte'                  => [
        'numeric' => 'La valor de :attribute deu èsser inferiora o egala a :value.',
        'file'    => 'La talha del fichièr de :attribute deu èsser inferiora o egala :value kilo-octets.',
        'string'  => 'Lo tèxt :attribute deu conténer al pus mai :value caractèrs.',
        'array'   => 'Lo tablèu :attribute deu conténer al pus mai :value elements.',
    ],    
    'max'                  => [
        'numeric' => 'La valor de :attribute deu pas èsser superiora a :max.',
        'file'    => 'La talha del fichièr :attribute deu pas èsser superior a :max kiloctets.',
        'string'  => 'Lo tèxt :attribute deu èsser superior a :max caractèrs.',
        'array'   => 'Lo tablèu :attribute deu pas conténer mai de :max elements.',
    ],
    'mimes'                => 'Lo camp :attribute deu èsser un fichièr del tipe : :values.',
    'mimetypes'            => 'Lo camp :attribute deu èsser un fichièr del tipe : :values.',
    'min'                  => [
        'numeric' => 'La valor de :attribute deu fa almens :min o mai.',
        'file'    => 'La talha del fichièr de :attribute deu fa almens :min kiloctets.',
        'string'  => 'Lo tèxt :attribute deu fa almens :min caractèrs.',
        'array'   => 'Lo tablèu :attribute deu conténer almens :min elements.',
    ],
    'multiple_of'          => 'La valor de :attribute deu èsser un multiple de :value',    
    'not_in'               => 'Lo camp :attribute seleccionat es invalid.',
    'not_regex'            => 'Lo format :attribute es invalid.',
    'numeric'              => 'Lo camp :attribute deu èsser un nombre.',
    'password'             => 'Lo senhal es incorrèct',
    'present'              => 'Lo camp :attribute deu èsser present.',
    'regex'                => 'Lo format :attribute es invalid.',
    'required'             => 'Lo camp :attribute es obligatòri.',
    'required_if'          => 'Lo camp :attribute es obligatòri quand :other es :value.',
    'required_unless'      => 'Lo camp :attribute es obligatòri levat se :other es dins :values.',
    'required_with'        => 'Lo camp :attribute es obligatòri quand :values es present.',
    'required_with_all'    => 'Lo camp :attribute es obligatòri quand :values es present.',
    'required_without'     => 'Lo camp :attribute es obligatòri quand :values es pas present.',
    'required_without_all' => 'Lo camp :attribute es obligatòri quand cap de :values son presents.',
    'same'                 => 'Los camps :attribute e :other devon correspondre.',
    'size'                 => [
        'numeric' => 'La valor de :attribute deu fa :size.',
        'file'    => 'La talha del fichièr de :attribute deu fa :size kiloctets.',
        'string'  => 'Lo tèxt :attribute deu fa :size caractèrs.',
        'array'   => 'Lo tablèu :attribute deu conténer :size elements.',
    ],
    'starts_with'          => 'Lo camp :attribute deu començar amb una de las valors seguentas : :values',    
    'string'               => 'Lo camp :attribute deu èsser una cadena de tèxt.',
    'timezone'             => 'Lo camp :attribute deu èsser una zòna orària valida.',
    'unique'               => 'La valor del camp :attribute es ja presa.',
    'uploaded'             => 'Lo fichièr de :attribute a pas pogut s’enviar.',
    'url'                  => 'Lo format de :attribute es invalid.',
    'uuid'                 => 'Lo camp :attribute deu èsser un UUID valid',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],
];
