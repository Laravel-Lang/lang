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

    'accepted'             => 'Deve essere accettato.',
    'active_url'           => 'Non è un URL valido.',
    'after'                => 'Deve essere una data successiva al :date.',
    'after_or_equal'       => 'Deve essere una data successiva o uguale al :date.',
    'alpha'                => 'Può contenere solo lettere.',
    'alpha_dash'           => 'Può contenere solo lettere, numeri e trattini.',
    'alpha_num'            => 'Può contenere solo lettere e numeri.',
    'array'                => 'Deve essere un array.',
    'before'               => 'Deve essere una data precedente al :date.',
    'before_or_equal'      => 'Deve essere una data precedente o uguale al :date.',
    'between'              => [
        'numeric' => 'Deve essere compreso tra :min e :max.',
        'file'    => 'Deve essere compreso tra :min e :max kilobytes.',
        'string'  => 'Deve essere compreso tra :min e :max caratteri.',
        'array'   => 'Deve contenere tra :min e :max elementi.',
    ],
    'boolean'              => 'Deve essere vero o falso.',
    'confirmed'            => 'Il valore di conferma non corrisponde.',
    'date'                 => 'Non è una data valida.',
    'date_equals'          => 'La data deve essere :date.',
    'date_format'          => 'La data non è nel formato :format.',
    'different'            => 'Deve essere diverso da :other.',
    'digits'               => 'Deve essere di :digits cifre.',
    'digits_between'       => 'Deve essere compreso tra :min e :max cifre.',
    'dimensions'           => 'Immagine con dimensioni non valide.',
    'distinct'             => 'Questo valore esiste già.',
    'email'                => 'Deve essere un indirizzo email valido.',
    'ends_with'            => 'Deve terminare con uno dei seguenti valori: :values.',
    'exists'               => 'Il valore non è valido.',
    'file'                 => 'Deve essere un file.',
    'filled'               => 'Deve contenere un valore.',
    'gt'                   => [
        'numeric' => 'Deve essere maggiore di :value.',
        'file'    => 'Deve essere maggiore di :value kilobytes.',
        'string'  => 'Deve contenere più di :value caratteri.',
        'array'   => 'Deve contenere più di :value elementi.',
    ],
    'gte'                  => [
        'numeric' => 'Deve essere uguale o maggiore a :value.',
        'file'    => 'Deve essere maggiore o uguale a :value kilobytes.',
        'string'  => 'Deve contenere almeno :value caratteri.',
        'array'   => 'Deve contenere almeno :value elementi.',
    ],
    'image'                => "Deve essere un'immagine.",
    'in'                   => 'Valore non valido.',
    'in_array'             => 'Non esiste in :other.',
    'integer'              => 'Deve essere un numero intero.',
    'ip'                   => 'Deve essere un indirizzo IP valido.',
    'ipv4'                 => 'Deve essere un indirizzo IPv4 valido.',
    'ipv6'                 => 'Deve essere un indirizzo IPv6 valido.',
    'json'                 => 'Deve essere una stringa JSON valida.',
    'lt'                   => [
        'numeric' => 'Deve essere inferiore a :value.',
        'file'    => 'Deve essere inferiore a :value kilobytes.',
        'string'  => 'Deve contenere meno di :value caratteri.',
        'array'   => 'Deve contenere meno di :value elementi.',
    ],
    'lte'                  => [
        'numeric' => 'Deve essere inferiore o uguale a :value.',
        'file'    => 'Deve essere inferiore o uguale a :value kilobytes.',
        'string'  => 'Deve contenere massimo :value caratteri.',
        'array'   => 'Deve contenere massimo :value elementi.',
    ],
    'max'                  => [
        'numeric' => 'Non può essere superiore a :max.',
        'file'    => 'Non può essere superiore a :max kilobytes.',
        'string'  => 'Non può contenere più di :max caratteri.',
        'array'   => 'Non può contenere più di :max elementi.',
    ],
    'mimes'                => 'Deve essere del tipo: :values.',
    'mimetypes'            => 'Deve essere del tipo: :values.',
    'min'                  => [
        'numeric' => 'Deve essere minimo :min.',
        'file'    => 'Deve essere minimo :min kilobytes.',
        'string'  => 'Deve contenere minimo :min caratteri.',
        'array'   => 'Deve contenere minimo :min elementi.',
    ],
    'multiple_of'          => 'Deve essere un multiplo di :value',
    'not_in'               => 'Valore non valido.',
    'not_regex'            => 'Formato non valido.',
    'numeric'              => 'Deve essere un numero.',
    'password'             => 'Password errata.',
    'present'              => 'Devi specificare un valore.',
    'regex'                => 'Formato non valido.',
    'required'             => 'Obbligatorio.',
    'required_if'          => 'Obbligatorio quando :other è :value.',
    'required_unless'      => 'Obbligatorio a meno che :other sia :values.',
    'required_with'        => 'Obbligatorio quando :values è presente.',
    'required_with_all'    => 'Obbligatorio quando :values sono presenti.',
    'required_without'     => 'Obbligatorio quando :values non è presente.',
    'required_without_all' => 'Obbligatorio quando nessuno di :values è presente.',
    'same'                 => 'Deve coincidere con :other.',
    'size'                 => [
        'numeric' => 'Deve essere :size.',
        'file'    => 'Deve essere :size kilobytes.',
        'string'  => 'Deve essere :size caratteri.',
        'array'   => 'Deve contenere :size elementi.',
    ],
    'starts_with'          => 'Deve iniziare con uno dei seguenti: :values.',
    'string'               => 'Deve essere una stringa.',
    'timezone'             => 'Deve essere una zona valida.',
    'unique'               => "E' già in uso.",
    'uploaded'             => 'Deve essere caricato.',
    'url'                  => 'Formato non valido.',
    'uuid'                 => 'Deve essere un UUID valido.',

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
