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

    'accepted'             => ':attribute ត្រូវបានទទួលយក។',
    'active_url'           => ':attribute មិនមែនជា URL ត្រឹមត្រូវឡើយ។',
    'after'                => ':attribute ត្រូវតែមានកាលបរិច្ឆេទបន្ទាប់ពី :date។',
    'after_or_equal'       => ':attribute ត្រូវតែជាកាលបរិច្ឆេទ ក្រោយឬស្មើ :date។',
    'alpha'                => ':attribute អាចមានអក្សរតែប៉ុណ្ណោះ។',
    'alpha_dash'           => ':attribute អាចមានតែអក្សរ លេខ និងសហសញ្ញា(-)។',
    'alpha_num'            => ':attribute អាចមានតែអក្សរ និងលេខ។',
    'array'                => ':attribute ត្រូវតែជា សំណុំ។',
    'before'               => ':attribute ត្រូវតែមានកាលបរិច្ឆេទមុន :date។',
    'before_or_equal'      => ':attribute ត្រូវតែជាកាលបរិច្ឆេទ មុនឬស្មើ :date។',
    'between'              => [
        'numeric' => ':attribute ត្រូវតែមានរវាង :min និង :max។',
        'file'    => ':attribute ត្រូវតែមានរវាង :min និង :max គីឡូបៃ។',
        'string'  => ':attribute ត្រូវតែមានរវាង :min និង :max តួអក្សរ។',
        'array'   => ':attribute ត្រូវតែមានចំនួនរវាង :min និង :max។',
    ],
    'boolean'              => ':attribute ត្រូវតែជា true ឬ false',
    'confirmed'            => ':attribute ការបញ្ជាក់មិនផ្គូរផ្គង។',
    'date'                 => ':attribute គឺមិនមែនជាកាលបរិច្ឆេទត្រឹមត្រូវ។',
    'date_equals'          => ':attribute ត្រូវតែជាកាលបរិច្ឆេទស្មើនឹង :date.',
    'date_format'          => ':attribute មិនត្រឹមត្រូវនឹងទម្រង់ :format នេះ។',
    'different'            => ':attribute និង :other ត្រូវតែបញ្ជាក់។',
    'digits'               => ':attribute ត្រូវជាខ្ទង់ :digits។',
    'digits_between'       => ':attribute ត្រូវចាប់ពីខ្ទង់ :min ទៅ :max។',
    'dimensions'           => 'ទំហំរូបភាព​ :attribute មិនត្រឹមត្រូវ។',
    'distinct'             => ':attribute មានតម្លៃស្ទួន។',
    'email'                => ':attribute ទម្រង់នេះមិនត្រឹមត្រូវ។',
    'ends_with'            => ':attribute ត្រូវបញ្ចប់ដោយពាក្យមួយក្នុងចំណោម :values។',
    'exists'               => 'ការជ្រើសរើស :attribute ត្រឹមត្រូវ។',
    'file'                 => ':attribute ត្រូវតែជាប្រភេទឯកសារ។',
    'filled'               => 'ទម្រង់ :attribute នេះគឺទាមទារឲ្យមាន។',
    'gt'                   => [
        'numeric' => ':attribute ត្រូវតែធំជាង :value។',
        'file'    => ':attribute ត្រូវតែធំជាង :value គីឡូបៃ។',
        'string'  => ':attribute ត្រូវតែធំជាង :value តួអក្សរ។',
        'array'   => ':attribute ត្រូវមានច្រើនជាង :value។',
    ],
    'gte'                  => [
        'numeric' => ':attribute ត្រូវតែធំជាងឬស្មើ :value.',
        'file'    => ':attribute ត្រូវតែធំជាងឬស្មើ :value គីឡូបៃ។',
        'string'  => ':attribute ត្រូវតែធំជាងឬស្មើ :value តួអក្សរ។',
        'array'   => ':attribute ត្រូវមានចំនួន :value ឬច្រើនជាង។',
    ],
    'image'                => ':attribute ត្រូវតៃជារូបភាព។',
    'in'                   => 'ការជ្រើសរើស :attribute មិនត្រឹមត្រូវ។',
    'in_array'             => ':attribute ត្រូវតែជាមួយក្នុងចំណោម :other។',
    'integer'              => ':attribute ត្រូវតែជាចំនួនគត់។',
    'ip'                   => ':attribute ត្រូវតែជា IP address ត្រឹមត្រូវ។',
    'ipv4'                 => ':attribute ត្រូវតែជា IPv4 address ត្រឹមត្រូវ។',
    'ipv6'                 => ':attribute ត្រូវតែជា IPv6 address ត្រឹមត្រូវ។',
    'json'                 => ':attribute ត្រូវតែជា JSON string ត្រឹមត្រូវ។',
    'lt'                   => [
        'numeric' => ':attribute ត្រូវតែតិចជាង :value.',
        'file'    => ':attribute ត្រូវតែតិចជាង :value គីឡូបៃ។',
        'string'  => ':attribute ត្រូវតែតិចជាង :value តួអក្សរ។',
        'array'   => ':attribute ត្រូវតែមានចំនួនតិចជាង :value។',
    ],
    'lte'                  => [
        'numeric' => ':attribute ត្រូវតែតិចជាងឬស្មើ :value.',
        'file'    => ':attribute ត្រូវតែតិចជាងឬស្មើ :value គីឡូបៃ។',
        'string'  => ':attribute ត្រូវតែតិចជាងឬស្មើ :value តួអក្សរ។',
        'array'   => ':attribute ត្រូវមានចំនួនតិចជាង :value។',
    ],
    'max'                  => [
        'numeric' => ':attribute មិនត្រូវធំជាង :max។',
        'file'    => ':attribute មិនត្រូវធំជាង :max គីឡូបៃ។',
        'string'  => ':attribute មិនត្រូវធំជាង :max តួអក្សរ។',
        'array'   => ':attribute មិនត្រូវច្រើនជាងធាតុនេះ :max។',
    ],
    'mimes'                => ':attribute ត្រូវតែជាប្រភេទឯកសារ type: :values នេះ។',
    'mimetypes'            => ':attribute ត្រូវតែជាប្រភេទឯកសារ type: :values នេះ។',
    'min'                  => [
        'numeric' => ':attribute ត្រូវតែតូចជាង :min។',
        'file'    => ':attribute ត្រូវតៃតួចជាង :min គីឡូបៃ។',
        'string'  => ':attribute ត្រូវតែតូចជាង :min តួអក្សរ។',
        'array'   => ':attribute ត្រូវតែតិចជាងធាតុនេះ :min។',
    ],
    'multiple_of'          => ':attribute ត្រូវតែជាចំនួនចែកដាច់នឹង :value។',
    'not_in'               => 'ការជ្រើសរើស :attribute គឺមិនត្រឹមត្រូវ។',
    'not_regex'            => ':attribute ទម្រង់ គឺមិនត្រឹមត្រូវ។',
    'numeric'              => ':attribute ត្រូវតែជាលេខ។',
    'password'             => 'ពាក្យសម្ងាត់មិនត្រឺមត្រូវ។',
    'present'              => ':attribute ត្រូវតែមាន។',
    'regex'                => ':attribute ទម្រង់មិនត្រឹមត្រូវ។',
    'required'             => ':attribute នេះគឺទាមទារឲ្យមាន។',
    'required_if'          => ':attribute នេះគឺទាមទារនៅពេល :other គឺ :value។',
    'required_unless'      => ':attribute នេះគឺទាមទារនៅពេល :other មិនមែន :values។',
    'required_with'        => ':attribute នេះគឺទាមទារនៅពេល :values មាន។',
    'required_with_all'    => ':attribute នេះគឺទាមទារនៅពេល :values មាន។',
    'required_without'     => ':attribute នេះគឺទាមទារនៅពេល :values មិនមាន។',
    'required_without_all' => ':attribute នេះគឺត្រូវបានទាមទារពេល :values មិនមាន។',
    'same'                 => ':attribute និង :other ត្រូវតែដូចគ្នា។',
    'size'                 => [
        'numeric' => ':attribute ត្រូវតែ :size។',
        'file'    => ':attribute ត្រូវតែ :size គីឡូបៃ។',
        'string'  => ':attribute ត្រូវតែ :size តួអក្សរ។',
        'array'   => ':attribute ត្រូវតែមានទំហំ :size។',
    ],
    'starts_with'          => ':attribute ត្រូវចាប់ផ្តើមដោយ :values ណាមួយ។',
    'string'               => ':attribute ត្រូវតែជាប្រភេទតួអក្សរ។',
    'timezone'             => ':attribute ត្រូវតែជាតំបន់ដែលត្រឹមត្រូវ។',
    'unique'               => ':attribute ត្រូវបានប្រើរួចហើយ។',
    'uploaded'             => ':attribute បរាជ័យក្នុងការបញ្ចូល។',
    'url'                  => ':attribute ទម្រង់ត្រឹមត្រូវ។',
    'uuid'                 => ':attribute ត្រូវតែជាទម្រង់ UUID។',

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
