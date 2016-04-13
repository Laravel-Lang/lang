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

    'accepted'   => ':Attribute må aksepterast.',
    'active_url' => ':Attribute er ikkje ein gyldig URL.',
    'after'      => ':Attribute må vere ein dato etter :date.',
    'alpha'      => ':Attribute må berre vere av bokstavar.',
    'alpha_dash' => ':Attribute må berre vere av bokstavar, tal og bindestrekar.',
    'alpha_num'  => ':Attribute må berre vere av bokstavar og tal.',
    'array'      => ':Attribute må vere ei matrise.',
    'before'     => ':Attribute må vere ein dato før :date.',
    'between'    => [
        'numeric' => ':Attribute skal vere mellom :min - :max.',
        'file'    => ':Attribute skal vere mellom :min - :max kilobytes.',
        'string'  => ':Attribute skal vere mellom :min - :max teikn.',
        'array'   => ':Attribute må ha mellom :min - :max element.',
    ],
    'boolean'        => ':Attribute må vere sann eller usann.',
    'confirmed'      => ':Attribute er ikkje likt feltet for stadfesting.',
    'date'           => ':Attribute er ikkje ein gyldig dato.',
    'date_format'    => ':Attribute er ikkje likt formatet :format.',
    'different'      => ':Attribute og :other skal vere ulike.',
    'digits'         => ':Attribute skal ha :digits siffer.',
    'digits_between' => ':Attribute skal vere mellom :min og :max siffer.',
    'distinct'       => ':Attribute har ein duplikatverdi.',
    'email'          => ':Attribute format er ugyldig.',
    'exists'         => 'Det valde :attribute er ugyldig.',
    'filled'         => ':Attribute må fyllast ut.',
    'image'          => ':Attribute skal vere eit bilete.',
    'in'             => 'Det valde :attribute er ugyldig.',
    'in_array'       => ':Attribute eksisterer ikkje i :other.',
    'integer'        => ':Attribute skal vere eit heiltal.',
    'ip'             => ':Attribute skal vere ei gyldig IP-adresse.',
    'json'           => ':Attribute må vere på JSON-format.',
    'max'            => [
        'numeric' => ':Attribute skal vere mindre enn :max.',
        'file'    => ':Attribute skal vere mindre enn :max kilobytes.',
        'string'  => ':Attribute skal vere kortare enn :max teikn.',
        'array'   => ':Attribute skal ikkje ha fleire enn :max element.',
    ],
    'mimes' => ':Attribute skal vere ei fil av typen: :values.',
    'min'   => [
        'numeric' => ':Attribute skal vere større enn :min.',
        'file'    => ':Attribute skal vere større enn :min kilobytes.',
        'string'  => ':Attribute skal vere lengre enn :min teikn.',
        'array'   => ':Attribute må vere minst :min element.',
    ],
    'not_in'               => 'Den valgte :attribute er ugyldig.',
    'numeric'              => ':Attribute skal vere eit tal.',
    'present'              => ':Attribute må vere til stades.',
    'regex'                => 'Formatet på :attribute er ugyldig.',
    'required'             => ':Attribute må fyllast ut.',
    'required_if'          => ':Attribute må fyllast ut når :other er :value.',
    'required_unless'      => ':Attribute må vere til stades viss ikkje :other finnas hjå verdiene :values.',
    'required_with'        => ':Attribute må fyllast ut når :values er fylt ut.',
    'required_with_all'    => ':Attribute må vere til stades når :values er oppgjeve.',
    'required_without'     => ':Attribute må fyllast ut når :values ikkje er fylt ut.',
    'required_without_all' => ':Attribute må vere til stades når inga av :values er oppgjeve.',
    'same'                 => ':Attribute og :other må vere like.',
    'size'                 => [
        'numeric' => ':Attribute må vere :size.',
        'file'    => ':Attribute må vere :size kilobytes.',
        'string'  => ':Attribute må vere :size teikn lang.',
        'array'   => ':Attribute må innehalde :size element.',
    ],
    'string'   => ':Attribute må vere ein tekststreng.',
    'timezone' => ':Attribute må vere ei gyldig tidssone.',
    'unique'   => ':Attribute er allereie i bruk.',
    'url'      => 'Formatet på :attribute er ugyldig.',

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
        //
    ],

];
