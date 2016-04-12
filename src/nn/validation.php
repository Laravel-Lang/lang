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

    'accepted'   => ':attribute må aksepterast.',
    'active_url' => ':attribute er ikkje ein gyldig URL.',
    'after'      => ':attribute må vere ein dato etter :date.',
    'alpha'      => ':attribute må berre vere av bokstavar.',
    'alpha_dash' => ':attribute må berre vere av bokstavar, tal og bindestrekar.',
    'alpha_num'  => ':attribute må berre vere av bokstavar og tal.',
    'array'      => ':attribute må vere ei matrise.',
    'before'     => ':attribute må vere ein dato før :date.',
    'between'    => [
        'numeric' => ':attribute skal vere mellom :min - :max.',
        'file'    => ':attribute skal vere mellom :min - :max kilobytes.',
        'string'  => ':attribute skal vere mellom :min - :max teikn.',
        'array'   => ':attribute må ha mellom :min - :max element.',
    ],
    'boolean'        => ':attribute må vere sann eller usann.',
    'confirmed'      => ':attribute er ikkje likt feltet for stadfesting.',
    'date'           => ':attribute er ikkje ein gyldig dato.',
    'date_format'    => ':attribute er ikkje likt formatet :format.',
    'different'      => ':attribute og :other skal vere ulike.',
    'digits'         => ':attribute skal ha :digits siffer.',
    'digits_between' => ':attribute skal vere mellom :min og :max siffer.',
    'distinct'       => ':attribute har ein duplikatverdi.',
    'email'          => ':attribute format er ugyldig.',
    'exists'         => 'Det valde :attribute er ugyldig.',
    'filled'         => ':attribute må fyllast ut.',
    'image'          => ':attribute skal vere eit bilete.',
    'in'             => 'Det valde :attribute er ugyldig.',
    'in_array'       => ':attribute eksisterer ikkje i :other.',
    'integer'        => ':attribute skal vere eit heiltal.',
    'ip'             => ':attribute skal vere ei gyldig IP-adresse.',
    'json'           => ':attribute må vere på JSON-format.',
    'max'            => [
        'numeric' => ':attribute skal vere mindre enn :max.',
        'file'    => ':attribute skal vere mindre enn :max kilobytes.',
        'string'  => ':attribute skal vere kortare enn :max teikn.',
        'array'   => ':attribute skal ikkje ha fleire enn :max element.',
    ],
    'mimes' => ':attribute skal vere ei fil av typen: :values.',
    'min'   => [
        'numeric' => ':attribute skal vere større enn :min.',
        'file'    => ':attribute skal vere større enn :min kilobytes.',
        'string'  => ':attribute skal vere lengre enn :min teikn.',
        'array'   => ':attribute må vere minst :min element.',
    ],
    'not_in'               => 'Den valgte :attribute er ugyldig.',
    'numeric'              => ':attribute skal vere eit tal.',
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
    'string'   => ':attribute må vere ein tekststreng.',
    'timezone' => ':attribute må vere ei gyldig tidssone.',
    'unique'   => ':attribute er allereie i bruk.',
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
