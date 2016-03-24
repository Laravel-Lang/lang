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

    'accepted'             => ':attribute deve essere accettato.',
    'active_url'           => ':attribute non è un URL valido.',
    'after'                => ':attribute deve essere una data successiva al :date.',
    'alpha'                => ':attribute può contenere solo lettere.',
    'alpha_dash'           => ':attribute può contenere solo lettere, numeri e trattini.',
    'alpha_num'            => ':attribute può contenere solo lettere e numeri.',
    'array'                => ':attribute deve essere un array.',
    'before'               => ':attribute deve essere una data precedente al :date.',
    'between'              => [
        'numeric' => ':attribute deve trovarsi tra :min - :max.',
        'file'    => ':attribute deve trovarsi tra :min - :max kilobytes.',
        'string'  => ':attribute deve trovarsi tra :min - :max caratteri.',
        'array'   => ':attribute deve avere tra :min - :max elementi.',
    ],
    'boolean'              => 'Il campo :attribute deve essere vero o falso.',
    'confirmed'            => 'Il campo di conferma per :attribute non coincide.',
    'date'                 => ':attribute non è una data valida.',
    'date_format'          => ':attribute non coincide con il formato :format.',
    'different'            => ':attribute e :other devono essere differenti.',
    'digits'               => ':attribute deve essere di :digits cifre.',
    'digits_between'       => ':attribute deve essere tra :min e :max cifre.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => ':attribute non è valido.',
    'exists'               => ':attribute selezionato/a non è valido.',
    'filled'               => 'Il campo :attribute è richiesto.',
    'image'                => ":attribute deve essere un'immagine.",
    'in'                   => ':attribute selezionato non è valido.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => ':attribute deve essere un numero intero.',
    'ip'                   => ':attribute deve essere un indirizzo IP valido.',
    'json'                 => ':attribute deve essere una stringa JSON valida.',
    'max'                  => [
        'numeric' => ':attribute non può essere superiore a :max.',
        'file'    => ':attribute non può essere superiore a :max kilobytes.',
        'string'  => ':attribute non può contenere più di :max caratteri.',
        'array'   => ':attribute non può avere più di :max elementi.',
    ],
    'mimes'                => ':attribute deve essere del tipo: :values.',
    'min'                  => [
        'numeric' => ':attribute deve essere almeno :min.',
        'file'    => ':attribute deve essere almeno di :min kilobytes.',
        'string'  => ':attribute deve contenere almeno :min caratteri.',
        'array'   => ':attribute deve avere almeno :min elementi.',
    ],
    'not_in'               => 'Il valore selezionato per :attribute non è valido.',
    'numeric'              => ':attribute deve essere un numero.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'Il formato del campo :attribute non è valido.',
    'required'             => 'Il campo :attribute è richiesto.',
    'required_if'          => 'Il campo :attribute è richiesto quando :other è :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'Il campo :attribute è richiesto quando :values è presente.',
    'required_with_all'    => 'Il campo :attribute è richiesto quando :values è presente.',
    'required_without'     => 'Il campo :attribute è richiesto quando :values non è presente.',
    'required_without_all' => 'Il campo :attribute è richiesto quando nessuno di :values è presente.',
    'same'                 => ':attribute e :other devono coincidere.',
    'size'                 => [
        'numeric' => ':attribute deve essere :size.',
        'file'    => ':attribute deve essere :size kilobytes.',
        'string'  => ':attribute deve contenere :size caratteri.',
        'array'   => ':attribute deve contenere :size elementi.',
    ],
    'string'               => ':attribute deve essere una stringa.',
    'timezone'             => ':attribute deve essere una zona valida.',
    'unique'               => ':attribute è stato già utilizzato.',
    'url'                  => 'Il formato del campo :attribute non è valido.',

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

    'custom'               => [
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
