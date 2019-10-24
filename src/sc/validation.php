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

    'accepted'             => ':attribute depet èssere atzetadu.',
    'active_url'           => ":attribute no est un'URL bàlidu.",
    'after'                => ':attribute depet èssere una data chi benit a pustis de :date.',
    'after_or_equal'       => 'The :attribute must be a date after or equal to :date.',
    'alpha'                => ':attribute podet cuntènnere isceti lìteras.',
    'alpha_dash'           => ':attribute podet cuntènnere isceti lìteras, nùmeros e tratigheddos.',
    'alpha_num'            => ':attribute podet cuntènnere isceti lìteras e nùmeros.',
    'array'                => ":attribute depet èssere un'array.",
    'before'               => ':attribute depet èssere una data chi benit prima de :date.',
    'before_or_equal'      => 'The :attribute must be a date before or equal to :date.',
    'between'              => [
        'numeric' => ':attribute depet èssere intre :min - :max.',
        'file'    => ':attribute depet èssere intre :min - :max kilobytes.',
        'string'  => ':attribute depet èssere intre :min - :max caràteres.',
        'array'   => ':attribute depet èssere intre :min - :max elementos.',
    ],
    'boolean'              => 'The :attribute field must be true or false',
    'confirmed'            => 'Su campu de cunfirma pro :attribute non torrat.',
    'date'                 => ':attribute no est una data bàlida.',
    'date_equals'          => 'The :attribute must be a date equal to :date.',
    'date_format'          => ':attribute non torrat cun su formadu :format.',
    'different'            => ':attribute e :other depent èssere diferentes.',
    'digits'               => ':attribute depet èssere de :digits tzifras.',
    'digits_between'       => ':attribute depet èssere intre :min e :max tzifras.',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => ':attribute no est bàlidu.',
    'ends_with'            => 'The :attribute must end with one of the following: :values',
    'exists'               => ':attribute seberadu/a no est bàlidu.',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => ':attribute est pedidu.',
    'gt'                   => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file'    => 'The :attribute must be greater than :value kilobytes.',
        'string'  => 'The :attribute must be greater than :value characters.',
        'array'   => 'The :attribute must have more than :value items.',
    ],
    'gte'                  => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file'    => 'The :attribute must be greater than or equal :value kilobytes.',
        'string'  => 'The :attribute must be greater than or equal :value characters.',
        'array'   => 'The :attribute must have :value items or more.',
    ],
    'image'                => ":attribute depet èssere un'immàgine.",
    'in'                   => ':attribute seberadu no est bàlidu.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => ':attribute depet èssere intreu.',
    'ip'                   => ":attribute depet èssere un'indiritzu IP bàlidu.",
    'ipv4'                 => 'The :attribute must be a valid IPv4 address.',
    'ipv6'                 => 'The :attribute must be a valid IPv6 address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'lt'                   => [
        'numeric' => 'The :attribute must be less than :value.',
        'file'    => 'The :attribute must be less than :value kilobytes.',
        'string'  => 'The :attribute must be less than :value characters.',
        'array'   => 'The :attribute must have less than :value items.',
    ],
    'lte'                  => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file'    => 'The :attribute must be less than or equal :value kilobytes.',
        'string'  => 'The :attribute must be less than or equal :value characters.',
        'array'   => 'The :attribute must not have more than :value items.',
    ],
    'max'                  => [
        'numeric' => ':attribute depet èssere prus piticu de :max.',
        'file'    => ':attribute non depet èssere prus mannu de :max kilobytes.',
        'string'  => ':attribute non podet cuntènnere prus de :max caràteres.',
        'array'   => ':attribute non podet tènnere prus de :max elementos.',
    ],
    'mimes'                => ':attribute depet èssere de tipu: :values.',
    'mimetypes'            => ':attribute depet èssere de tipu: :values.',
    'min'                  => [
        'numeric' => ':attribute depet bàlere a su mancu :min.',
        'file'    => ':attribute depet èssere prus mannu de :min kilobytes.',
        'string'  => ':attribute depet cuntènnere a su mancu :min caràteres.',
        'array'   => ':attribute depet tènnere a su mancu :min elementos.',
    ],
    'not_in'               => 'Su balore seberadu pro :attribute no est bàlidu.',
    'not_regex'            => 'The :attribute format is invalid.',
    'numeric'              => ':attribute depet èssere unu nùmeru.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'Su formadu de su campu :attribute no est bàlidu.',
    'required'             => ':attribute est pedidu.',
    'required_if'          => 'Su campu :attribute est pedidu cando :other est :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'Su campu :attribute est pedidu cando :values est presente.',
    'required_with_all'    => 'Su campu:attribute est pedidu cando :values est presente.',
    'required_without'     => 'Su campu :attribute est pedidu cando :values no est presente.',
    'required_without_all' => 'Su campu :attribute est pedidu cando perunu de :values sunt presentes.',
    'same'                 => ':attribute e :other depent èssere uguales.',
    'size'                 => [
        'numeric' => ':attribute depet bàlere :size.',
        'file'    => ':attribute depet èssere mannu :size kilobytes.',
        'string'  => ':attribute depet cuntènnere :size caràteres.',
        'array'   => ':attribute depet cuntènnere :size elementos.',
    ],
    'starts_with'          => 'The :attribute must start with one of the following: :values',
    'string'               => 'The :attribute must be a string.',
    'timezone'             => ':attribute depet èssere una zona bàlida.',
    'unique'               => ':attribute est istadu giai impreadu.',
    'uploaded'             => 'The :attribute failed to upload.',
    'url'                  => ":attribute depet èssere un'URL.",
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
