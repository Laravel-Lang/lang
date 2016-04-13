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

    'accepted'             => ':Attribute kabul edilmelidir.',
    'active_url'           => ':Attribute dogry URL bolmalydyr.',
    'after'                => ':Attribute şundan has köne sene bolmalydyr :date.',
    'alpha'                => ':Attribute dine harplardan durmalydyr.',
    'alpha_dash'           => ':Attribute dine harplardan, sanlardan we tirelerden durmalydyr.',
    'alpha_num'            => ':Attribute dine harplardan we sanlardan durmalydyr.',
    'array'                => ':Attribute ýygyndy bolmalydyr.',
    'before'               => ':Attribute şundan has irki sene bolmalydyr :date.',
    'between'              => [
        'numeric' => ':Attribute :min - :max arasynda bolmalydyr.',
        'file'    => ':Attribute :min - :max kilobaýt arasynda bolmalydyr.',
        'string'  => ':Attribute :min - :max harplar arasynda bolmalydyr.',
        'array'   => ':Attribute :min - :max arasynda madda eýe bolmalydyr.',
    ],
    'boolean'              => ':Attribute diňe dogry ýada ýalňyş bolmalydyr.',
    'confirmed'            => ':Attribute tassyklamasy deň däl.',
    'date'                 => ':Attribute dogry sene bolmalydyr.',
    'date_format'          => ':Attribute :format formatyna deň däl.',
    'different'            => ':Attribute bilen :other birbirinden tapawutly bolmalydyr.',
    'digits'               => ':Attribute :digits san bolmalydyr.',
    'digits_between'       => ':Attribute :min bilen :max arasynda san bolmalydyr.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => ':Attribute formaty ýalňyş.',
    'exists'               => 'Saýlanan :attribute ýalňyş.',
    'filled'               => ':Attribute meýdany zerur.',
    'image'                => ':Attribute surat bolmalydyr.',
    'in'                   => ':Attribute mukdary ýalňyş.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => ':Attribute san bolmalydyr.',
    'ip'                   => ':Attribute dogry IP adres bolmalydyr.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => ':Attribute :max den kiçi bolmalydyr.',
        'file'    => ':Attribute :max kilobaýtdan kiçi bolmalydyr.',
        'string'  => ':Attribute :max harpdan kiçi bolmalydyr.',
        'array'   => ':Attribute iň az :max maddadan ybarat bolmalydyr.',
    ],
    'mimes'                => ':Attribute faýlň formaty :values bolmalydyr.',
    'min'                  => [
        'numeric' => ':Attribute mukdary :min dan köp bolmalydyr.',
        'file'    => ':Attribute mukdary :min kilobaýtdan köp bolmalydyr.',
        'string'  => ':Attribute mukdary :min harpdan köp bolmalydyr.',
        'array'   => ':Attribute iň az :min harpdan bolmalydyr.',
    ],
    'not_in'               => 'Saýlanan :attribute geçersiz.',
    'numeric'              => ':Attribute san bolmalydyr.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => ':Attribute formaty ýalňyş.',
    'required'             => ':Attribute meýdany zerur.',
    'required_if'          => ':Attribute meýdany, :other :value hümmetine eýe bolanynda zerurdyr.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => ':Attribute meýdany :values bar bolanda zerurdyr.',
    'required_with_all'    => ':Attribute meýdany haýsyda bolsa bir :values bar bolanda zerurdyr.',
    'required_without'     => ':Attribute meýdany :values ýok bolanda zerurdyr.',
    'required_without_all' => ':Attribute meýdany :values dan haýsyda bolsa biri ýok bolanda zerurdyr.',
    'same'                 => ':Attribute bilen :other deň bolmalydyr.',
    'size'                 => [
        'numeric' => ':Attribute :size sandan ybarat bolmalydyr.',
        'file'    => ':Attribute :size kilobaýt bolmalydyr.',
        'string'  => ':Attribute :size harp bolmalydyr.',
        'array'   => ':Attribute :size madda eýe bolmalydyr.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => ':Attribute dogry zolak bolmalydyr.',
    'unique'               => ':Attribute önden hasaba alyndy.',
    'url'                  => ':Attribute formaty ýalňyş.',

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

    'attributes'           => [
        //
    ],

];
