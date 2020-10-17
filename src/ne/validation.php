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

    'accepted'             => ':attribute स्वीकार गरिएको हुनुपर्छ।',
    'active_url'           => ':attribute URL अमान्य छ।',
    'after'                => ':attribute को मिति :date भन्दा पछि हुनुपर्छ।',
    'after_or_equal'       => ':attribute मिति पछाडि वा बराबर मिति हुनुपर्दछ।',
    'alpha'                => ':attribute मा अक्षरहरु मात्र हुनसक्छ।',
    'alpha_dash'           => ':attribute मा अक्षर, संख्या र ड्यासहरू मात्र हुनसक्छ।',
    'alpha_num'            => ':attribute मा अक्षर र संख्याहरू मात्र हुनसक्छ।',
    'array'                => ':attribute एर्रे हुनुपर्छ।',
    'before'               => ':attribute को मिति :date भन्दा अघि हुनुपर्छ।',
    'before_or_equal'      => ':attribute मिति भन्दा अघि वा बराबर :date हुनुपर्दछ। ',
    'between'              => [
        'numeric' => ':attribute :min र :maxको बिचमा हुनुपर्छ।',
        'file'    => ':attribute :min र :max किलोबाइट्स को बिचमा हुनुपर्छ।',
        'string'  => ':attribute :min र :max वर्णको बिचमा हुनुपर्छ।',
        'array'   => ':attribute आइटमको संख्या :min र :max को बिचमा हुनुपर्छ।',
    ],
    'boolean'              => ':attribute ठिक अथवा बेठिक हुनुपर्छ।',
    'confirmed'            => ':attribute दाेहाेर्याइएकाे मिलेन।',
    'date'                 => ':attribute को मिति मिलेन।',
    'date_equals'          => ':attribute मिति बराबर :date हुनुपर्दछ।',
    'date_format'          => ':attribute को ढाँचा :format जस्तो हुनुपर्छ।',
    'different'            => ':attribute र :other फरक हुनुपर्छ।',
    'digits'               => ':attribute :digits अंकको हुनुपर्छ।',
    'digits_between'       => ':attribute :min देखी :max अंकको हुनुपर्छ।',
    'dimensions'           => ':attribute अमान्य छवि आयाम छ।',
    'distinct'             => ':attribute फिल्ड फिल्डको नक्कल मान छ',
    'email'                => ':attribute को इमेल ठेगाना मिलेन।',
    'ends_with'            => ':attribute निम्न मध्ये एकको साथ विशेषता अन्त हुनुपर्दछ :values',
    'exists'               => 'छानिएको :attribute अमान्य छ।',
    'file'                 => ':attribute एक फाईल हुनुपर्दछ।',
    'filled'               => ':attribute दिइएको हुनुपर्छ।',
    'gt'                   => [
        'numeric' => ' :attribute :value भन्दा बढि हुनुपर्दछ।',
        'file'    => ' :attribute :value क्यालोबाइट भन्दा बढि हुनुपर्दछ।',
        'string'  => ' :attribute :value क्यारेक्टर भन्दा बढि हुनुपर्दछ।',
        'array'   => ' :attribute :value आईटमहरू भन्दा बढि हुनुपर्दछ।',
    ],
    'gte'                  => [
        'numeric' => ' :attribute :value भन्दा बढि हुनुपर्दछ।',
        'file'    => ' :attribute :value क्यालोबाइट भन्दा बढि हुनुपर्दछ।',
        'string'  => ' :attribute :value क्यारेक्टर भन्दा बढि हुनुपर्दछ।',
        'array'   => ' :attribute :value आईटमहरू भन्दा बढि हुनुपर्दछ।',
    ],
    'image'                => ':attribute मा फोटो हुनुपर्छ।',
    'in'                   => 'छानिएको :attribute अमान्य छ।',
    'in_array'             => ':attribute क्षेत्र मा अवस्थित छैन :other',
    'integer'              => ':attribute पूर्ण संख्या हुनुपर्छ।',
    'ip'                   => ':attribute मा दिइएको मान्य IP ठेगाना हुनुपर्छ।',
    'ipv4'                 => ':attribute एक मान्य IPv4 ठेगाना हुनुपर्दछ.',
    'ipv6'                 => ':attribute एक मान्य IPv6 ठेगाना हुनुपर्दछ.',
    'json'                 => ':attribute मा दिइएको मान्य JSON स्ट्रिङ्ग हुनुपर्छ।',
    'lt'                   => [
        'numeric' => ' :attribute :value भन्दा बढि हुनुपर्दछ।',
        'file'    => ' :attribute :value क्यालोबाइट भन्दा बढि हुनुपर्दछ।',
        'string'  => ' :attribute :value क्यारेक्टर भन्दा बढि हुनुपर्दछ।',
        'array'   => ' :attribute :value आईटमहरू भन्दा बढि हुनुपर्दछ।',
    ],
    'lte'                  => [
        'numeric' => ' :attribute :value भन्दा बढि हुनुपर्दछ।',
        'file'    => ' :attribute :value क्यालोबाइट भन्दा बढि हुनुपर्दछ।',
        'string'  => ' :attribute :value क्यारेक्टर भन्दा बढि हुनुपर्दछ।',
        'array'   => ' :attribute :value आईटमहरू भन्दा बढि हुनुपर्दछ।',
    ],
    'max'                  => [
        'numeric' => ' :attribute :max भन्दा बढि हुनुपर्दछ।',
        'file'    => ' :attribute :max क्यालोबाइट भन्दा बढि हुनुपर्दछ।',
        'string'  => ' :attribute :max क्यारेक्टर भन्दा बढि हुनुपर्दछ।',
        'array'   => ' :attribute मा :max आईटमहरू भन्दा बढि हुनुपर्दछ।',
    ],
    'mimes'                => ' :attribute :values प्रकारको फाइल हुनुपर्छ।',
    'mimetypes'            => ' :attribute :values प्रकारको फाइल हुनुपर्छ।',
    'min'                  => [
        'numeric' => ':attribute कम्तिमा :min हुनुपर्छ।',
        'file'    => ':attribute कम्तिमा :min क्यालोबाइटोकाे हुनुपर्छ।',
        'string'  => ':attribute कम्तिमा :min वर्णको हुनुपर्छ।',
        'array'   => ':attribute मा कम्तिमा :min आइटम हुनुपर्छ।',
    ],
    'multiple_of'          => 'The :attribute must be a multiple of :value',
    'not_in'               => 'छानिएको :attribute अमान्य छ।',
    'not_regex'            => ':attribute ढाँचा अवैध छ.',
    'numeric'              => ':attribute संख्या हुनुपर्छ।',
    'password'             => 'पासवर्ड गलत छ।',
    'present'              => ':attribute क्षेत्र उपस्थित हुनुपर्दछ.',
    'regex'                => ':attribute को ढाँचा मिलेन।',
    'required'             => ':attribute दिइएको हुनुपर्छ।',
    'required_if'          => ':attribute चाहिन्छ जब :other :value हुन्छ।',
    'required_unless'      => ':other :values मा नभएसम्म :attribute चाहिन्छ।',
    'required_with'        => ':values भएसम्म :attribute चाहिन्छ।',
    'required_with_all'    => ':values भएसम्म :attribute चाहिन्छ।',
    'required_without'     => ':values नभएको बेला :attribute चाहिन्छ।',
    'required_without_all' => 'कुनैपनि :values नभएको बेला :attribute चाहिन्छ।',
    'same'                 => ':attribute र :other मिल्नुपर्छ।',
    'size'                 => [
        'numeric' => ':attribute :size हुनुपर्छ।',
        'file'    => ':attribute :size क्यालोबाइटोकाे हुनुपर्छ।',
        'string'  => ':attribute :size वर्णको हुनुपर्छ।.',
        'array'   => ':attribute :sizeमा आइटम हुनुपर्छ।',
    ],
    'starts_with'          => ':attribute निम्न मध्ये एकसँग सुरू हुनुपर्दछ :values',
    'string'               => ':attribute स्ट्रिङ्ग हुनुपर्छ।',
    'timezone'             => ':attribute मान्य समय क्षेत्र हुनुपर्छ।',
    'unique'               => 'यो :attribute पहिले नै लिई सकेको छ।',
    'uploaded'             => ':attribute अपलोड गर्न असफल भयो।',
    'url'                  => ':attribute को ढांचा मिलेन।',
    'uuid'                 => ':attribute एक मान्य UUID हुनुपर्दछ।',

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
