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

    'accepted'             => ':Attribute depet èssere atzetadu.',
    'active_url'           => ":attribute no est un'URL bàlidu.",
    'after'                => ':Attribute depet èssere una data chi benit a pustis de :date.',
    'alpha'                => ':Attribute podet cuntènnere isceti lìteras.',
    'alpha_dash'           => ':Attribute podet cuntènnere isceti lìteras, nùmeros e tratigheddos.',
    'alpha_num'            => ':Attribute podet cuntènnere isceti lìteras e nùmeros.',
    'array'                => ":attribute depet èssere un'array.",
    'before'               => ':Attribute depet èssere una data chi benit prima de :date.',
    'between'              => [
        'numeric' => ':Attribute depet èssere intre :min - :max.',
        'file'    => ':Attribute depet èssere intre :min - :max kilobytes.',
        'string'  => ':Attribute depet èssere intre :min - :max caràteres.',
        'array'   => ':Attribute depet èssere intre :min - :max elementos.',
    ],
    'boolean'              => 'The :attribute field must be true or false',
    'confirmed'            => 'Su campu de cunfirma pro :attribute non torrat.',
    'date'                 => ':Attribute no est una data bàlida.',
    'date_format'          => ':Attribute non torrat cun su formadu :format.',
    'different'            => ':Attribute e :other depent èssere diferentes.',
    'digits'               => ':Attribute depet èssere de :digits tzifras.',
    'digits_between'       => ':Attribute depet èssere intre :min e :max tzifras.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => ':Attribute no est bàlidu.',
    'exists'               => ':Attribute seberadu/a no est bàlidu.',
    'filled'               => ':Attribute est pedidu.',
    'image'                => ":attribute depet èssere un'immàgine.",
    'in'                   => ':Attribute seberadu no est bàlidu.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => ':Attribute depet èssere intreu.',
    'ip'                   => ":attribute depet èssere un'indiritzu IP bàlidu.",
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => ':Attribute depet èssere prus piticu de :max.',
        'file'    => ':Attribute non depet èssere prus mannu de :max kilobytes.',
        'string'  => ':Attribute non podet cuntènnere prus de :max caràteres.',
        'array'   => ':Attribute non podet tènnere prus de :max elementos.',
    ],
    'mimes'                => ':Attribute depet èssere de tipu: :values.',
    'min'                  => [
        'numeric' => ':Attribute depet bàlere a su mancu :min.',
        'file'    => ':Attribute depet èssere prus mannu de :min kilobytes.',
        'string'  => ':Attribute depet cuntènnere a su mancu :min caràteres.',
        'array'   => ':Attribute depet tènnere a su mancu :min elementos.',
    ],
    'not_in'               => 'Su balore seberadu pro :attribute no est bàlidu.',
    'numeric'              => ':Attribute depet èssere unu nùmeru.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'Su formadu de su campu :attribute no est bàlidu.',
    'required'             => ':Attribute est pedidu.',
    'required_if'          => 'Su campu :attribute est pedidu cando :other est :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'Su campu :attribute est pedidu cando :values est presente.',
    'required_with_all'    => 'Su campu:attribute est pedidu cando :values est presente.',
    'required_without'     => 'Su campu :attribute est pedidu cando :values no est presente.',
    'required_without_all' => 'Su campu :attribute est pedidu cando perunu de :values sunt presentes.',
    'same'                 => ':Attribute e :other depent èssere uguales.',
    'size'                 => [
        'numeric' => ':Attribute depet bàlere :size.',
        'file'    => ':Attribute depet èssere mannu :size kilobytes.',
        'string'  => ':Attribute depet cuntènnere :size caràteres.',
        'array'   => ':Attribute depet cuntènnere :size elementos.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => ':Attribute depet èssere una zona bàlida.',
    'unique'               => ':Attribute est istadu giai impreadu.',
    'url'                  => ":attribute depet èssere un'URL.",

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
