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

    'accepted'        => 'ಈ  :attribute  ಒಪ್ಪಿಕೊಳ್ಳಬೇಕು.',
    'active_url'      => 'ಈ  :attribute ಮಾನ್ಯ URL ಆಗಿಲ್ಲ. ',
    'after'           => 'ಈ  :attribute ದಿನಾಂಕವು   :date ನಂತರದ ದಿನಾಂಕವಾಗಿರಬೇಕು .',
    'after_or_equal'  => 'ಈ  :attribute ದಿನಾಂಕವು   :date ನಂತರದ ಅಥವಾ ಸಮನಾದ ದಿನಾಂಕವಾಗಿರಬೇಕು.',
    'alpha'           => 'ಈ  :attribute ಅಕ್ಷರಗಳನ್ನು ಮಾತ್ರ ಹೊಂದಿರಬಹುದು.',
    'alpha_dash'      => 'ಈ  :attribute ಅಕ್ಷರಗಳು, ಸಂಖ್ಯೆಗಳು, ಡ್ಯಾಶ್ಗಳು ಮತ್ತು ಅಂಡರ್ಸ್ಕೋರ್ಗಳನ್ನು ಮಾತ್ರ ಹೊಂದಿರಬಹುದು.',
    'alpha_num'       => 'ಈ  :attribute ಅಕ್ಷರಗಳು ಮತ್ತು ಸಂಖ್ಯೆಗಳನ್ನು ಮಾತ್ರ ಹೊಂದಿರಬಹುದು.',
    'array'           => 'ಈ  :attribute ಒಂದು ಶ್ರೇಣಿಯಾಗಿರಬೇಕು .',
    'before'          => 'ಈ  :attribute ದಿನಾಂಕವು  :date ಮುಂಚಿನ  ದಿನಾಂಕವಾಗಿರಬೇಕು.',
    'before_or_equal' => 'ಈ  :attribute ದಿನಾಂಕವು  :date ಮುಂಚಿನ  ಅಥವಾ ಸಮನಾದ ದಿನಾಂಕವಾಗಿರಬೇಕು.',
    'between'         => [
        'numeric' => 'ಈ  :attribute ನಲ್ಲಿ  :min ಮತ್ತು :max ನಡುವೆ ಇರಬೇಕು.',
        'file'    => 'ಈ  :attribute ನಲ್ಲಿ  :min ಮತ್ತು :max ಕಿಲೋಬೈಟ್ಗಳ ನಡುವೆ ಇರಬೇಕು.',
        'string'  => 'ಈ  :attribute ನಲ್ಲಿ  :min ಮತ್ತು :max ಅಕ್ಷರಗಳ ನಡುವೆ ಇರಬೇಕು.',
        'array'   => 'ಈ  :attribute ನಲ್ಲಿ   :min ಮತ್ತು :max ಐಟಂಗಳ ನಡುವೆ ಇರಬೇಕು.',
    ],
    'boolean'        => 'ಈ  :attribute ಕ್ಷೇತ್ರವು ನಿಜ ಅಥವಾ ಸುಳ್ಳು ಆಗಿರಬೇಕು.',
    'confirmed'      => 'ಈ  :attribute ದೃಢೀಕರಣವು ಹೊಂದಿಕೆಯಾಗುವುದಿಲ್ಲ.',
    'date'           => 'ಈ  :attribute ಮಾನ್ಯ ದಿನಾಂಕವಲ್ಲ.',
    'date_equals'    => 'ಈ  :attribute ದಿನಾಂಕವು  :date ಸಮನಾದ ದಿನಾಂಕವಾಗಿರಬೇಕು.',
    'date_format'    => 'ಈ  :attribute ನ :format ಸ್ವರೂಪಕ್ಕೆ ಹೊಂದಿಕೆಯಾಗುವುದಿಲ್ಲ.',
    'different'      => 'ಈ  :attribute ಮತ್ತು :other ವಿಭಿನ್ನವಾಗಿರಬೇಕು.',
    'digits'         => 'ಈ  :attribute ನಲ್ಲಿ  :digits ಸಂಖ್ಯೆಗಳು ಇರಬೇಕು.',
    'digits_between' => 'ಈ  :attribute ನಲ್ಲಿ  :min ಮತ್ತು :max ಸಂಖ್ಯೆಗಳ ನಡುವೆ ಇರಬೇಕು .',
    'dimensions'     => 'ಈ  :attribute ಅಮಾನ್ಯವಾದ ಚಿತ್ರ ಆಯಾಮಗಳನ್ನು ಹೊಂದಿದೆ.',
    'distinct'       => 'ಈ  :attribute ಕ್ಷೇತ್ರವು ನಕಲಿ ಮೌಲ್ಯವನ್ನು ಹೊಂದಿದೆ.',
    'email'          => 'ಈ  :attribute ಮಾನ್ಯವಾದ ಇಮೇಲ್ ವಿಳಾಸವಾಗಿರಬೇಕು.',
    'ends_with'      => 'The :attribute must end with one of the following: :values.',
    'exists'         => 'ಈ  ಆಯ್ಕೆಮಾಡಲಾದ :attribute ಅಮಾನ್ಯವಾಗಿದೆ .',
    'file'           => 'ಈ  :attribute ಫೈಲ್ ಆಗಿರಬೇಕು.',
    'filled'         => 'ಈ  :attribute ಕ್ಷೇತ್ರವು ಮೌಲ್ಯವನ್ನು ಹೊಂದಿರಬೇಕು.',
    'gt'             => [
        'numeric' => 'ಈ  :attribute ನಲ್ಲಿ  :value ಗಿಂತ  ಹೆಚ್ಚು ಇರಬೇಕು.',
        'file'    => 'ಈ  :attribute ನಲ್ಲಿ  :value ಕಿಲೋಬೈಟ್ಗಳಿಗಿಂತ   ಹೆಚ್ಚು ಇರಬೇಕು.',
        'string'  => 'ಈ  :attribute ನಲ್ಲಿ  :value ಅಕ್ಷರಗಳಿಗಿಂತ   ಹೆಚ್ಚು ಇರಬೇಕು.',
        'array'   => 'ಈ  :attribute ನಲ್ಲಿ  :value ಐಟಂಗಳಿಗಿಂತ   ಹೆಚ್ಚು ಇರಬೇಕು.',
    ],
    'gte' => [
        'numeric' => 'ಈ  :attribute ನಲ್ಲಿ   :value  ಹೆಚ್ಚು ಅಥವಾ ಸಮನಾಗಿರಬೇಕು.',
        'file'    => 'ಈ  :attribute ನಲ್ಲಿ  :value ಕಿಲೋಬೈಟ್ಗಳಿಗಿಂತ  ಹೆಚ್ಚು ಅಥವಾ ಸಮನಾಗಿರಬೇಕು.',
        'string'  => 'ಈ  :attribute ನಲ್ಲಿ   :value ಅಕ್ಷರಗಳಿಗಿಂತ  ಹೆಚ್ಚು ಅಥವಾ ಸಮನಾಗಿರಬೇಕು.',
        'array'   => 'ಈ  :attribute ನಲ್ಲಿ   :value ಐಟಂಗಳಿಗಿಂತ  ಹೆಚ್ಚು ಅಥವಾ ಸಮನಾಗಿರಬೇಕು  .',
    ],
    'image'    => 'ಈ  :attribute ಒಂದು ಚಿತ್ರವಾಗಿರಬೇಕು.',
    'in'       => 'ಈ  ಆಯ್ಕೆಮಾಡಲಾದ :attribute ಅಮಾನ್ಯವಾಗಿದೆ.',
    'in_array' => 'ಈ  :attribute ಕ್ಷೇತ್ರ ಅಸ್ತಿತ್ವದಲ್ಲಿಲ್ಲ  :other ನಲ್ಲಿ.',
    'integer'  => 'ಈ  :attribute ಒಂದು ಪೂರ್ಣಾಂಕವಾಗಿರಬೇಕು.',
    'ip'       => 'ಈ  :attribute ಮಾನ್ಯವಾದ IP ವಿಳಾಸವಾಗಿರಬೇಕು.',
    'ipv4'     => 'ಈ  :attribute ಮಾನ್ಯವಾದ IPv4 ವಿಳಾಸವಾಗಿರಬೇಕು.',
    'ipv6'     => 'ಈ  :attribute ಮಾನ್ಯವಾದ IPv6 ವಿಳಾಸವಾಗಿರಬೇಕು.',
    'json'     => 'ಈ  :attribute ಮಾನ್ಯವಾದ JSON ಸ್ಟ್ರಿಂಗ್ ಆಗಿರಬೇಕು .',
    'lt'       => [
        'numeric' => 'ಈ  :attribute ನಲ್ಲಿ  :value ಗಿಂತ  ಕಡಿಮೆ ಇರಬೇಕು.',
        'file'    => 'ಈ  :attribute ನಲ್ಲಿ  :value ಕಿಲೋಬೈಟ್ಗಳಿಗಿಂತ ಕಡಿಮೆ ಇರಬೇಕು.',
        'string'  => 'ಈ  :attribute ನಲ್ಲಿ  :value ಅಕ್ಷರಗಳಿಗಿಂತ ಕಡಿಮೆ ಇರಬೇಕು.',
        'array'   => 'ಈ  :attribute ನಲ್ಲಿ  :value ಐಟಂಗಳಿಗಿಂತ ಕಡಿಮೆ ಇರಬೇಕು.',
    ],
    'lte' => [
        'numeric' => 'ಈ  :attribute ನಲ್ಲಿ  :value ಗಿಂತ  ಕಡಿಮೆ ಅಥವಾ ಸಮನಾಗಿರಬೇಕು.',
        'file'    => 'ಈ  :attribute ನಲ್ಲಿ  :value ಕಿಲೋಬೈಟ್ಗಳಿಗಿಂತ  ಕಡಿಮೆ ಅಥವಾ ಸಮನಾಗಿರಬೇಕು.   ',
        'string'  => 'ಈ  :attribute ನಲ್ಲಿ  :value ಅಕ್ಷರಗಳಿಗಿಂತ  ಕಡಿಮೆ ಅಥವಾ ಸಮನಾಗಿರಬೇಕು.',
        'array'   => 'ಈ  :attribute ನಲ್ಲಿ  :value ಐಟಂಗಳಿಗಿಂತ  ಕಡಿಮೆ ಅಥವಾ ಸಮನಾಗಿರಬೇಕು .',
    ],
    'max' => [
        'numeric' => 'ಈ  :attribute ನಲ್ಲಿ  :max ಗಿಂತ ಹೆಚ್ಚು ಇರಬಾರದು .',
        'file'    => 'ಈ  :attribute ನಲ್ಲಿ  :max ಕಿಲೋಬೈಟ್ಗಳಿಗಿಂತ ಹೆಚ್ಚು ಇರಬಾರದು .',
        'string'  => 'ಈ  :attribute ನಲ್ಲಿ  :max ಅಕ್ಷರಗಳಿಗಿಂತ ಹೆಚ್ಚು ಇರಬಾರದು .',
        'array'   => 'ಈ  :attribute ನಲ್ಲಿ  :max ಐಟಂಗಳಿಗಿಂತ  ಹೆಚ್ಚು ಇರಬಾರದು .',
    ],
    'mimes'     => 'ಈ  :attribute ನಲ್ಲಿ  :values ಬಗೆಯ ಫೈಲ್ ಆಗಿರಬೇಕು.',
    'mimetypes' => 'ಈ  :attribute ನಲ್ಲಿ :values ಬಗೆಯ ಫೈಲ್ ಆಗಿರಬೇಕು.',
    'min'       => [
        'numeric' => 'ಈ  :attribute ಕನಿಷ್ಠ  :min  ಇರಬೇಕು.',
        'file'    => 'ಈ  :attribute ಕನಿಷ್ಠ :min ಕಿಲೋಬೈಟ್ಗಳಿರಬೇಕು.  ',
        'string'  => 'ಈ  :attribute ಕನಿಷ್ಠ :min ಅಕ್ಷರಗಳಿರಬೇಕು.',
        'array'   => 'ಈ  :attribute ಕನಿಷ್ಠ :min ಐಟಂಗಳಿರಬೇಕು.  ',
    ],
    'not_in'               => 'ಈ  ಆಯ್ಕೆಮಾಡಲಾದ :attribute ಅಮಾನ್ಯವಾಗಿದೆ.',
    'not_regex'            => 'ಈ  :attribute ಸ್ವರೂಪ ಅಮಾನ್ಯವಾಗಿದೆ.',
    'numeric'              => 'ಈ  :attribute must be a number.',
    'present'              => 'ಈ  :attribute ಕ್ಷೇತ್ರವು ಅಸ್ತಿತ್ವದಲ್ಲಿರಬೇಕು.',
    'regex'                => 'ಈ  :attribute ಸ್ವರೂಪ ಅಮಾನ್ಯವಾಗಿದೆ.',
    'required'             => 'ಈ  :attribute ಕ್ಷೇತ್ರ ಅಗತ್ಯವಿದೆ.',
    'required_if'          => 'ಈ  :attribute ಕ್ಷೇತ್ರ ಅಗತ್ಯವಿದೆ ಯಾವಾಗ :other ನಲ್ಲಿ :value.',
    'required_unless'      => 'ಈ  :attribute ಕ್ಷೇತ್ರ ಅಗತ್ಯವಿದೆ  unless :other ನಲ್ಲಿ  :values ಹೊರತುಪಡಿಸಿ .',
    'required_with'        => 'ಈ  :attribute ಕ್ಷೇತ್ರ ಅಗತ್ಯವಿದೆ ಯಾವಾಗ :values ಇರುತ್ತದೆ.',
    'required_with_all'    => 'ಈ  :attribute ಕ್ಷೇತ್ರ ಅಗತ್ಯವಿದೆ ಯಾವಾಗ :values ಇರುತ್ತವೆ.',
    'required_without'     => 'ಈ  :attribute ಕ್ಷೇತ್ರ ಅಗತ್ಯವಿದೆ ಯಾವಾಗ :values ಇರುವುದಿಲ್ಲ .',
    'required_without_all' => 'ಈ  :attribute ಕ್ಷೇತ್ರ ಅಗತ್ಯವಿದೆ ಯಾವಾಗ    :values ಯಾವುದೂ  ಇರುವುದಿಲ್ಲ .',
    'same'                 => 'ಈ  :attribute ಮತ್ತು :other ಹೊಂದಾಣಿಕೆಯಾಗಲೇಬೇಕು.',
    'size'                 => [
        'numeric' => 'ಈ  :attribute  ನಲ್ಲಿ   :size ಇರಲೇಬೇಕು. ',
        'file'    => 'ಈ  :attribute ನಲ್ಲಿ   :size ಕಿಲೋಬೈಟ್ಗಳಿರಲೇಬೇಕು.',
        'string'  => 'ಈ  :attribute ನಲ್ಲಿ   :size ಅಕ್ಷರಗಳಿರಲೇಬೇಕು.',
        'array'   => 'ಈ  :attribute ನಲ್ಲಿ   :size ಐಟಂಗಳಿರಲೇಬೇಕು.',
    ],
    'starts_with' => 'ಈ  :attribute ಕೆಳಗಿನವುಗಳಲ್ಲಿ ಒಂದರಿಂದ  ಪ್ರಾರಂಭಿಸಬೇಕು :  :values',
    'string'      => 'ಈ  :attribute ಸ್ಟ್ರಿಂಗ್ ಆಗಿರಬೇಕು.',
    'timezone'    => 'ಈ  :attribute ಮಾನ್ಯವಾದ ವಲಯವಾಗಿರಬೇಕು.',
    'unique'      => 'ಈ  :attribute ಈಗಾಗಲೇ ತೆಗೆದುಕೊಂಡಾಗಿದೆ .',
    'uploaded'    => 'ಈ  :attribute ಅಪ್ಲೋಡ್ ಮಾಡಲು ವಿಫಲವಾಗಿದೆ.',
    'url'         => 'ಈ  :attribute ಸ್ವರೂಪವು ಅಮಾನ್ಯವಾಗಿದೆ.',
    'uuid'        => 'ಈ  :attribute ಮಾನ್ಯವಾದ UUID ಆಗಿರಬೇಕು.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'name'                  => 'ಹೆಸರು',
        'username'              => 'ಬಳಕೆದಾರ ಹೆಸರು',
        'email'                 => 'ಇಮೇಲ್',
        'first_name'            => 'ಮೊದಲ ಹೆಸರು',
        'last_name'             => 'ಕೊನೆಯ ಹೆಸರು',
        'password'              => 'ಪಾಸ್ವರ್ಡ್',
        'password_confirmation' => ' ಪಾಸ್ವರ್ಡ್ ದೃಢೀಕರಿಸಿ',
        'city'                  => 'ನಗರ',
        'country'               => 'ದೇಶ',
        'address'               => 'ವಿಳಾಸ',
        'phone'                 => 'ಫೋನ್',
        'mobile'                => 'ಮೊಬೈಲ್',
        'age'                   => 'ವಯಸ್ಸು',
        'sex'                   => 'ಲಿಂಗ',
        'gender'                => 'ಲಿಂಗ',
        'day'                   => 'ದಿನ',
        'month'                 => 'ತಿಂಗಳು',
        'year'                  => 'ವರ್ಷ',
        'hour'                  => 'ಗಂಟೆ',
        'minute'                => 'ನಿಮಿಷ',
        'second'                => 'ಸೆಕೆ೦ಡು',
        'title'                 => 'ಶೀರೋನಾಮ',
        'content'               => 'ವಿಷಯ',
        'description'           => 'ವಿವರಣೆ',
        'excerpt'               => 'ಆಯ್ದ ಭಾಗಗಳು',
        'date'                  => 'ದಿನಾಂಕ',
        'time'                  => 'ಸಮಯ',
        'available'             => 'ಲಭ್ಯವಿದೆ',
        'size'                  => 'ಗಾತ್ರ',
    ],
];
