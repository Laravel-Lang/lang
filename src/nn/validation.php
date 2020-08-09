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

    'accepted'        => ':attribute må aksepterast.',
    'active_url'      => ':attribute er ikkje ein gyldig URL.',
    'after'           => ':attribute må vere ein dato etter :date.',
    'after_or_equal'  => ':attribute må vere ein dato etter eller lik :date.',
    'alpha'           => ':attribute må berre vere av bokstavar.',
    'alpha_dash'      => ':attribute må berre vere av bokstavar, tal og bindestrekar.',
    'alpha_num'       => ':attribute må berre vere av bokstavar og tal.',
    'array'           => ':attribute må vere ei matrise.',
    'before'          => ':attribute må vere ein dato før :date.',
    'before_or_equal' => ':attribute må vere ein dato før eller lik :date.',
    'between'         => [
        'numeric' => ':attribute skal vere mellom :min - :max.',
        'file'    => ':attribute skal vere mellom :min - :max kilobytes.',
        'string'  => ':attribute skal vere mellom :min - :max teikn.',
        'array'   => ':attribute må ha mellom :min - :max element.',
    ],
    'boolean'        => ':attribute må vere sann eller usann.',
    'confirmed'      => ':attribute er ikkje likt feltet for stadfesting.',
    'date'           => ':attribute er ikkje ein gyldig dato.',
    'date_equals'    => ':attribute må vere ein dato lik :date.',
    'date_format'    => ':attribute er ikkje likt formatet :format.',
    'different'      => ':attribute og :other skal vere ulike.',
    'digits'         => ':attribute skal ha :digits siffer.',
    'digits_between' => ':attribute skal vere mellom :min og :max siffer.',
    'dimensions'     => ':attribute har ikkje gyldige bildedimensjonar.',
    'distinct'       => ':attribute har ein duplikatverdi.',
    'email'          => ':attribute format er ugyldig.',
    'ends_with'      => ':attribute må slutte på ein av følgande: :values',
    'exists'         => 'Det valde :attribute er ugyldig.',
    'file'           => ':attribute må vere ei fil.',
    'filled'         => ':attribute må fyllast ut.',
    'gt'             => [
        'numeric' => ':attribute må vere større enn :value.',
        'file'    => ':attribute må vere større enn :value kilobyte.',
        'string'  => ':attribute må vere lengre enn :value teikn.',
        'array'   => ':attribute må vere minst :value element.',
    ],
    'gte' => [
        'numeric' => ':attribute må vere større enn eller lik :value.',
        'file'    => ':attribute må vere større enn eller lik :value kilobyte.',
        'string'  => ':attribute må vere lengre enn eller lik :value teikn.',
        'array'   => ':attribute må ha :value element eller meir.',
    ],
    'image'    => ':attribute skal vere eit bilete.',
    'in'       => 'Det valde :attribute er ugyldig.',
    'in_array' => ':attribute eksisterer ikkje i :other.',
    'integer'  => ':attribute skal vere eit heiltal.',
    'ip'       => ':attribute skal vere ei gyldig IP-adresse.',
    'ipv4'     => ':attribute skal vere ei gyldig IPv4-adresse.',
    'ipv6'     => ':attribute skal vere ei gyldig IPv6-adresse.',
    'json'     => ':attribute må vere på JSON-format.',
    'lt'       => [
        'numeric' => ':attribute må vere mindre enn :value.',
        'file'    => ':attribute må vere mindre enn :value kilobyte.',
        'string'  => ':attribute må vere kortare enn :value teikn.',
        'array'   => ':attribute må ha færre enn :value element.',
    ],
    'lte' => [
        'numeric' => ':attribute må vere mindre enn eller lik :value.',
        'file'    => ':attribute må vere mindre enn eller lik :value kilobyte.',
        'string'  => ':attribute må vere kortare enn eller lik :value teikn.',
        'array'   => ':attribute må ikkje ha fleire enn :value element.',
    ],
    'max' => [
        'numeric' => ':attribute skal vere mindre enn :max.',
        'file'    => ':attribute skal vere mindre enn :max kilobytes.',
        'string'  => ':attribute skal vere kortare enn :max teikn.',
        'array'   => ':attribute skal ikkje ha fleire enn :max element.',
    ],
    'mimes'     => ':attribute skal vere ei fil av typen: :values.',
    'mimetypes' => ':attribute skal vere ei fil av typen: :values.',
    'min'       => [
        'numeric' => ':attribute skal vere større enn :min.',
        'file'    => ':attribute skal vere større enn :min kilobyte.',
        'string'  => ':attribute skal vere lengre enn :min teikn.',
        'array'   => ':attribute må vere minst :min element.',
    ],
    'not_in'               => 'Den valgte :attribute er ugyldig.',
    'not_regex'            => 'Formatet på :attribute er ugyldig.',
    'numeric'              => ':attribute skal vere eit tal.',
    'password'             => 'The password is incorrect.',
    'present'              => ':attribute må vere til stades.',
    'regex'                => 'Formatet på :attribute er ugyldig.',
    'required'             => ':attribute må fyllast ut.',
    'required_if'          => ':attribute må fyllast ut når :other er :value.',
    'required_unless'      => ':attribute må vere til stades viss ikkje :other finnas hjå verdiene :values.',
    'required_with'        => ':attribute må fyllast ut når :values er fylt ut.',
    'required_with_all'    => ':attribute må vere til stades når :values er oppgjeve.',
    'required_without'     => ':attribute må fyllast ut når :values ikkje er fylt ut.',
    'required_without_all' => ':attribute må vere til stades når inga av :values er oppgjeve.',
    'same'                 => ':attribute og :other må vere like.',
    'size'                 => [
        'numeric' => ':attribute må vere :size.',
        'file'    => ':attribute må vere :size kilobytes.',
        'string'  => ':attribute må vere :size teikn lang.',
        'array'   => ':attribute må innehalde :size element.',
    ],
    'starts_with' => ':attribute må starte med ein av følgande: :values',
    'string'      => ':attribute må vere ein tekststreng.',
    'timezone'    => ':attribute må vere ei gyldig tidssone.',
    'unique'      => ':attribute er allereie i bruk.',
    'uploaded'    => ':attribute kunne ikkje lastast opp.',
    'url'         => 'Formatet på :attribute er ugyldig.',
    'uuid'        => ':attribute må vere ein gyldig UUID.',

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
