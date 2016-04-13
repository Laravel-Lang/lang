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

    'accepted'             => ':Attribute स्वीकार गरिएको हुनुपर्छ।',
    'active_url'           => ':Attribute URL अमान्य छ।',
    'after'                => ':Attribute को मिति :date भन्दा पछि हुनुपर्छ।',
    'alpha'                => ':Attribute मा अक्षरहरु मात्र हुनसक्छ।',
    'alpha_dash'           => ':Attribute मा अक्षर, संख्या र ड्यासहरू मात्र हुनसक्छ।',
    'alpha_num'            => ':Attribute मा अक्षर र संख्याहरू मात्र हुनसक्छ।',
    'array'                => ':Attribute array हुनुपर्छ।',
    'before'               => ':Attribute को मिति :date भन्दा अघि हुनुपर्छ।',
    'between'              => [
        'numeric' => ':Attribute :min र :max को बिचमा हुनुपर्छ।',
        'file'    => ':Attribute :min र :max kilobytes को बिचमा हुनुपर्छ।',
        'string'  => ':Attribute :min र :max वर्णको बिचमा हुनुपर्छ।',
        'array'   => ':Attribute मा आइटमको संख्या :min र :max को बिचमा हुनुपर्छ।',
    ],
    'boolean'              => ':Attribute ठिक अथवा बेठिक हुनुपर्छ।',
    'confirmed'            => ':Attribute दाेहाेर्याइएकाे मिलेन।',
    'date'                 => ':Attribute को मिति मिलेन।',
    'date_format'          => ':Attribute को ढाँचा :format जस्तो हुनुपर्छ।',
    'different'            => ':Attribute र :other फरक हुनुपर्छ।',
    'digits'               => ':Attribute :digits अंकको हुनुपर्छ।',
    'digits_between'       => ':Attribute :min देखि :max अंकको हुनुपर्छ।',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => ':Attribute को इमेल ठेगाना मिलेन।',
    'exists'               => 'छानिएको :attribute अमान्य छ।',
    'filled'               => ':Attribute दिइएको हुनुपर्छ।',
    'image'                => ':Attribute मा फोटो हुनुपर्छ।',
    'in'                   => 'छानिएको :attribute अमान्य छ।',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => ':Attribute पूर्ण संख्या हुनुपर्छ।',
    'ip'                   => ':Attribute मा दिइएको मान्य IP ठेगाना हुनुपर्छ।',
    'json'                 => ':Attribute मा दिइएको मान्य JSON string हुनुपर्छ।',
    'max'                  => [
        'numeric' => ':Attribute :max भन्दा बढी हुनुहुदैन।',
        'file'    => ':Attribute :max kilobytes भन्दा बढी हुनुहुदैन।',
        'string'  => ':Attribute :max वर्ण भन्दा बढी हुनुहुदैन।',
        'array'   => ':Attribute मा :max भन्दा बढी आइटम हुनुहुदैन।',
    ],
    'mimes'                => ':Attribute :values प्रकारको फाइल हुनुपर्छ।',
    'min'                  => [
        'numeric' => ':Attribute कम्तिमा :min हुनुपर्छ।',
        'file'    => ':Attribute कम्तिमा :min kilobytesको हुनुपर्छ।',
        'string'  => ':Attribute कम्तिमा :min वर्णको हुनुपर्छ।',
        'array'   => ':Attribute मा कम्तिमा :min आइटम हुनुपर्छ।',
    ],
    'not_in'               => 'छानिएको :attribute अमान्य छ।',
    'numeric'              => ':Attribute संख्या हुनुपर्छ।',
    'present'              => 'The :attribute field must be present.',
    'regex'                => ':Attribute को ढाँचा मिलेन।',
    'required'             => ':Attribute दिइएको हुनुपर्छ।',
    'required_if'          => ':Attribute चाहिन्छ जब :other :value हुन्छ।',
    'required_unless'      => ':other :values मा नभएसम्म :attribute चाहिन्छ।',
    'required_with'        => ':values भएसम्म :attribute चाहिन्छ।',
    'required_with_all'    => ':values भएसम्म :attribute चाहिन्छ।',
    'required_without'     => ':values नभएको बेला :attribute चाहिन्छ।',
    'required_without_all' => 'कुनैपनि :values नभएको बेला :attribute चाहिन्छ।',
    'same'                 => ':Attribute र :other मिल्नुपर्छ।',
    'size'                 => [
        'numeric' => ':Attribute :size हुनुपर्छ।',
        'file'    => ':Attribute :size kilobytesको हुनुपर्छ।',
        'string'  => ':Attribute :size वर्णको हुनुपर्छ।.',
        'array'   => ':Attribute मा :size आइटम हुनुपर्छ।',
    ],
    'string'               => ':Attribute string हुनुपर्छ।',
    'timezone'             => ':Attribute मान्य समय क्षेत्र हुनुपर्छ।',
    'unique'               => 'यो :attribute पहिले नै लिई सकेको छ।',
    'url'                  => ':Attribute को ढांचा मिलेन।',

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

    'attributes' => [],

];
