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

    'accepted'             => ':attribute må aksepteres.',
    'active_url'           => ':attribute er ikke en gyldig URL.',
    'after'                => ':attribute må være en dato etter :date.',
    'after_or_equal'       => ':attribute må være en dato etter eller lik :date.',
    'alpha'                => ':attribute må kun bestå av bokstaver.',
    'alpha_dash'           => ':attribute må kun bestå av bokstaver, tall og bindestreker.',
    'alpha_num'            => ':attribute må kun bestå av bokstaver og tall.',
    'array'                => ':attribute må være en matrise.',
    'before'               => ':attribute må være en dato før :date.',
    'before_or_equal'      => ':attribute må være en dato før eller lik :date.',
    'between'              => [
        'numeric' => ':attribute må være mellom :min - :max.',
        'file'    => ':attribute må være mellom :min - :max kilobyte.',
        'string'  => ':attribute må være mellom :min - :max tegn.',
        'array'   => ':attribute må ha mellom :min - :max elementer.',
    ],
    'boolean'              => ':attribute må være sann eller usann',
    'confirmed'            => ':attribute er ikke likt bekreftelsesfeltet.',
    'date'                 => ':attribute er ikke en gyldig dato.',
    'date_format'          => ':attribute samsvarer ikke med formatet :format.',
    'different'            => ':attribute og :other må være forskellige.',
    'digits'               => ':attribute må ha :digits siffer.',
    'digits_between'       => ':attribute må være mellom :min og :max siffer.',
    'dimensions'           => ':attribute har ugyldige bildedimensjoner.',
    'distinct'             => ':attribute har en duplisert verdi.',
    'email'                => ':attribute må være en gyldig e-postadresse.',
    'exists'               => 'Det valgte :attribute er ugyldig.',
    'file'                 => ':attribute må være en fil.',
    'filled'               => ':attribute må fylles ut.',
    'gt'                   => [
        'numeric' => ':attribute må være større enn :value.',
        'file'    => ':attribute må være større enn :value kilobyte.',
        'string'  => ':attribute må være større enn :value tegn.',
        'array'   => ':attribute må ha flere enn :value elementer.',
    ],
    'gte'                  => [
        'numeric' => ':attribute må være større enn eller lik :value.',
        'file'    => ':attribute må være større enn eller lik :value kilobyte.',
        'string'  => ':attribute må være større enn eller lik :value tegn.',
        'array'   => ':attribute må ha :value elementer eller flere.',
    ],
    'image'                => ':attribute må være et bilde.',
    'in'                   => 'Det valgte :attribute er ugyldig.',
    'in_array'             => 'Det valgte :attribute eksisterer ikke i :other.',
    'integer'              => ':attribute må være et heltall.',
    'ip'                   => ':attribute må være en gyldig IP-adresse.',
    'ipv4'                 => ':attribute må være en gyldig IPv4-adresse.',
    'ipv6'                 => ':attribute må være en gyldig IPv6-addresse.',
    'json'                 => ':attribute må være på JSON-format.',
    'lt'                   => [
        'numeric' => ':attribute må være mindre enn :value.',
        'file'    => ':attribute må være mindre enn :value kilobyte.',
        'string'  => ':attribute må være mindre enn :value tegn.',
        'array'   => ':attribute må ha færre enn :value elementer.',
    ],
    'lte'                  => [
        'numeric' => ':attribute må være mindre enn eller lik :value.',
        'file'    => ':attribute må være mindre enn eller lik :value kilobyte.',
        'string'  => ':attribute må være mindre enn eller lik :value tegn.',
        'array'   => ':attribute må ikke ha flere enn :value elementer.',
    ],
    'max'                  => [
        'numeric' => ':attribute må ikke være større enn :max.',
        'file'    => ':attribute må ikke være større enn :max kilobyte.',
        'string'  => ':attribute må ikke være lengre enn :max tegn.',
        'array'   => ':attribute må ikke ha flere enn :max elementer.',
    ],
    'mimes'                => ':attribute må være en fil av typen: :values.',
    'mimetypes'            => ':attribute må være en fil av typen: :values.',
    'min'                  => [
        'numeric' => ':attribute må være minst :min.',
        'file'    => ':attribute må være minst :min kilobyte.',
        'string'  => ':attribute må være minst :min tegn.',
        'array'   => ':attribute må ha minst :min elementer.',
    ],
    'not_in'               => 'Den valgte :attribute er ugyldig.',
    'not_regex'            => 'Formatet på :attribute er ugyldig.',
    'numeric'              => ':attribute må være et tall.',
    'present'              => ':attribute må eksistere.',
    'regex'                => 'Formatet på :attribute er ugyldig.',
    'required'             => ':attribute må fylles ut.',
    'required_if'          => ':attribute må fylles ut når :other er :value.',
    'required_unless'      => ':attribute er påkrevd med mindre :other finnes blant verdiene :values.',
    'required_with'        => ':attribute må fylles ut når :values er utfylt.',
    'required_with_all'    => ':attribute er påkrevd når :values er oppgitt.',
    'required_without'     => ':attribute må fylles ut når :values ikke er utfylt.',
    'required_without_all' => ':attribute er påkrevd når ingen av :values er oppgitt.',
    'same'                 => ':attribute og :other må være like.',
    'size'                 => [
        'numeric' => ':attribute må være :size.',
        'file'    => ':attribute må være :size kilobyte.',
        'string'  => ':attribute må være :size tegn lang.',
        'array'   => ':attribute må inneholde :size elementer.',
    ],
    'string'               => ':attribute må være en tekststreng.',
    'timezone'             => ':attribute må være en gyldig tidssone.',
    'unique'               => ':attribute er allerede i bruk.',
    'uploaded'             => ':attribute kunne ikke lastes opp.',
    'url'                  => 'Formatet på :attribute er ugyldig.',
    'uuid'                 => 'The :attribute must be a valid UUID.',

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

    'attributes' => [
    ],
];
