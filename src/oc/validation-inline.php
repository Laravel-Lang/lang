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
    'array'                => 'Lo camp :attribute deu èsser una cadena de tèxte.',
    'before'               => 'Lo camp :attribute deu èsser una data anteriora a :date.',
    'before_or_equal'      => 'Lo camp :attribute deu èsser una data anteriora o egala a :date.',
    'between'              => [
        'numeric' => 'Lo camp :attribute deu èsser entre :min e :max.',
        'file'    => 'Lo camp :attribute deu èsser entre :min e :max kiloctets.',
        'string'  => 'Lo camp :attribute deu èsser entre :min e :max caractèrs.',
        'array'   => 'Lo camp :attribute deu aver entre :min e :max elements.',
    ],
    'boolean'              => 'Lo camp :attribute deu èsser true o false.',
    'confirmed'            => 'La confirmacion :attribute correspond pas.',
    'date'                 => 'La data :attribute es pas valida.',
    'date_format'          => ':attribute correspond pas al format :format.',
    'different'            => 'Los camps :attribute e :other devon èsser diferents.',
    'digits'               => ':attribute deu èsser un nombre de :digits chifras.',
    'digits_between'       => ':attribute deu èsser entre :min e :max chifras.',
    'dimensions'           => ':attribute a de dimensions d’imatge invalidas.',
    'distinct'             => 'Lo camp :attribute a un doblon.',
    'email'                => ':attribute deu èsser una adreça de corrièl valida.',
    'exists'               => 'Lo :attribute seleccionat es invalid.',
    'file'                 => ':attribute deu èsser un fichièr.',
    'filled'               => 'Lo camp:attribute deu aver una valor.',
    'image'                => ':attribute deu èsser un imatge.',
    'in'                   => 'Lo :attribute selecionnat es invalid.',
    'in_array'             => 'Lo camp :attribute existís pas dins :other.',
    'integer'              => ':attribute deu èsser un nombre entièr.',
    'ip'                   => ':attribute deu èsser una adreça IP valida.',
    'ipv4'                 => ':attribute deu èsser una adreça IPv4 valida.',
    'ipv6'                 => ':attribute deu èsser una adreça IPv6 valida.',
    'json'                 => ':attribute deu èsser una cadena JSON valida.',
    'max'                  => [
        'numeric' => ':attribute deu pas èsser superior a :max.',
        'file'    => ':attribute deu pas èsser superior a :max kiloctets.',
        'string'  => ':attribute deu èsser superior a :max caractèrs.',
        'array'   => ':attribute deu pas conténer mai de :max elements.',
    ],
    'mimes'                => ':attribute deu èsser un fichièr del tipe : :values.',
    'mimetypes'            => ':attribute deu èsser un fichièr del tipe : :values.',
    'min'                  => [
        'numeric' => ':attribute deu fa almens :min.',
        'file'    => ':attribute deu fa almens :min kiloctets.',
        'string'  => ':attribute deu fa almens :min caractèrs.',
        'array'   => ':attribute deu conténer almens :min elements.',
    ],
    'not_in'               => 'Lo :attribute seleccionat es invalid.',
    'not_regex'            => 'Lo format :attribute es invalid.',
    'numeric'              => ':attribute deu èsser un nombre.',
    'present'              => 'Lo camp :attribute deu èsser present.',
    'regex'                => 'Lo format :attribute es invalid.',
    'required'             => 'Lo camp :attribute es obligatòri.',
    'required_if'          => 'Lo camp :attribute es obligatòri quand :other es :value.',
    'required_unless'      => 'Lo camp :attribute es obligatòri levat se :other es dins :values.',
    'required_with'        => 'Lo camp :attribute es obligatòri quand :values es present.',
    'required_with_all'    => 'Lo camp :attribute es obligatòri quand :values es present.',
    'required_without'     => 'Lo camp :attribute es obligatòri quand :values es pas present.',
    'required_without_all' => 'Lo camp :attribute es obligatòri quand cap de :values son presents.',
    'same'                 => ':attribute e :other devon correspondre.',
    'size'                 => [
        'numeric' => ':attribute deu fa :size.',
        'file'    => ':attribute deu fa :size kiloctets.',
        'string'  => ':attribute deu fa :size caractèrs.',
        'array'   => ':attribute deu conténer :size elements.',
    ],
    'string'               => ':attribute deu èsser una cadena de tèxte.',
    'timezone'             => ':attribute deu èsser una zòna valida.',
    'unique'               => ':attribute es ja pres.',
    'uploaded'             => ':attribute a pas pogut s’enviar.',
    'url'                  => 'Lo format de :attribute es invalid.',

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

    'attributes' => [],
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
        'username'              => "nom d'utilisateur",
        'email'                 => 'adresse email',
        'first_name'            => 'prénom',
        'last_name'             => 'nom',
        'password'              => 'mot de passe',
        'password_confirmation' => 'confirmation du mot de passe',
        'city'                  => 'ville',
        'country'               => 'pays',
        'address'               => 'adresse',
        'phone'                 => 'téléphone',
        'mobile'                => 'portable',
        'age'                   => 'âge',
        'sex'                   => 'sexe',
        'gender'                => 'genre',
        'day'                   => 'jour',
        'month'                 => 'mois',
        'year'                  => 'année',
        'hour'                  => 'heure',
        'minute'                => 'minute',
        'second'                => 'seconde',
        'title'                 => 'titre',
        'content'               => 'contenu',
        'description'           => 'description',
        'excerpt'               => 'extrait',
        'date'                  => 'date',
        'time'                  => 'heure',
        'available'             => 'disponible',
        'size'                  => 'taille',
    ],
];
