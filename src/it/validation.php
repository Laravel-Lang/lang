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

    'accepted'             => ':Attribute deve essere accettato.',
    'active_url'           => ':Attribute non è un URL valido.',
    'after'                => ':Attribute deve essere una data successiva al :date.',
    'after_or_equal'       => ':Attribute deve essere una data successiva o uguale al :date.',
    'alpha'                => ':Attribute può contenere solo lettere.',
    'alpha_dash'           => ':Attribute può contenere solo lettere, numeri e trattini.',
    'alpha_num'            => ':Attribute può contenere solo lettere e numeri.',
    'array'                => ':Attribute deve essere un array.',
    'before'               => ':Attribute deve essere una data precedente al :date.',
    'before_or_equal'      => ':Attribute deve essere una data precedente o uguale al :date.',
    'between'              => [
        'numeric' => ':Attribute deve trovarsi tra :min - :max.',
        'file'    => ':Attribute deve trovarsi tra :min - :max kilobytes.',
        'string'  => ':Attribute deve trovarsi tra :min - :max caratteri.',
        'array'   => ':Attribute deve avere tra :min - :max elementi.',
    ],
    'boolean'              => 'Il campo :attribute deve essere vero o falso.',
    'confirmed'            => 'Il campo di conferma per :attribute non coincide.',
    'date'                 => ':Attribute non è una data valida.',
    'date_format'          => ':Attribute non coincide con il formato :format.',
    'different'            => ':Attribute e :other devono essere differenti.',
    'digits'               => ':Attribute deve essere di :digits cifre.',
    'digits_between'       => ':Attribute deve essere tra :min e :max cifre.',
    'dimensions'           => "Le dimensioni dell'immagine di :attribute non sono valide.",
    'distinct'             => ':Attribute contiene un valore duplicato.',
    'email'                => ':Attribute non è valido.',
    'exists'               => ':Attribute selezionato non è valido.',
    'file'                 => ':Attribute deve essere un file.',
    'filled'               => 'Il campo :attribute è richiesto.',
    'image'                => ":attribute deve essere un'immagine.",
    'in'                   => ':Attribute selezionato non è valido.',
    'in_array'             => 'Il valore del campo :attribute non esiste in :other.',
    'integer'              => ':Attribute deve essere un numero intero.',
    'ip'                   => ':Attribute deve essere un indirizzo IP valido.',
    'ipv4'                 => ':Attribute deve essere un indirizzo IPv4 valido.',
    'ipv6'                 => ':Attribute deve essere un indirizzo IPv6 valido.',
    'json'                 => ':Attribute deve essere una stringa JSON valida.',
    'max'                  => [
        'numeric' => ':Attribute non può essere superiore a :max.',
        'file'    => ':Attribute non può essere superiore a :max kilobytes.',
        'string'  => ':Attribute non può contenere più di :max caratteri.',
        'array'   => ':Attribute non può avere più di :max elementi.',
    ],
    'mimes'                => ':Attribute deve essere del tipo: :values.',
    'mimetypes'            => ':Attribute deve essere del tipo: :values.',
    'min'                  => [
        'numeric' => ':Attribute deve essere almeno :min.',
        'file'    => ':Attribute deve essere almeno di :min kilobytes.',
        'string'  => ':Attribute deve contenere almeno :min caratteri.',
        'array'   => ':Attribute deve avere almeno :min elementi.',
    ],
    'not_in'               => 'Il valore selezionato per :attribute non è valido.',
    'numeric'              => ':Attribute deve essere un numero.',
    'present'              => 'Il campo :attribute deve essere presente.',
    'regex'                => 'Il formato del campo :attribute non è valido.',
    'required'             => 'Il campo :attribute è richiesto.',
    'required_if'          => 'Il campo :attribute è richiesto quando :other è :value.',
    'required_unless'      => 'Il campo :attribute è richiesto a meno che :other sia in :values.',
    'required_with'        => 'Il campo :attribute è richiesto quando :values è presente.',
    'required_with_all'    => 'Il campo :attribute è richiesto quando :values è presente.',
    'required_without'     => 'Il campo :attribute è richiesto quando :values non è presente.',
    'required_without_all' => 'Il campo :attribute è richiesto quando nessuno di :values è presente.',
    'same'                 => ':Attribute e :other devono coincidere.',
    'size'                 => [
        'numeric' => ':Attribute deve essere :size.',
        'file'    => ':Attribute deve essere :size kilobytes.',
        'string'  => ':Attribute deve contenere :size caratteri.',
        'array'   => ':Attribute deve contenere :size elementi.',
    ],
    'string'               => ':Attribute deve essere una stringa.',
    'timezone'             => ':Attribute deve essere una zona valida.',
    'unique'               => ':Attribute è stato già utilizzato.',
    'uploaded'             => ':Attribute non è stato caricato.',
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
