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

    'accepted'             => 'Ова поле мора да биде прифатено.',
    'active_url'           => 'Ова не е валидна URL-адреса.',
    'after'                => 'Ова мора да биде датум после :date.',
    'after_or_equal'       => 'Ова мора да биде датум кој е после или еднаков на :date.',
    'alpha'                => 'Ова поле може да содржи само букви.',
    'alpha_dash'           => 'Ова поле може да содржи само букви, бројки, долна црта и тире.',
    'alpha_num'            => 'Ова поле може да содржи само букви и бројки.',
    'array'                => 'Ова поле мора да биде низа.',
    'before'               => 'Ова поле мора да биде датум пред :date.',
    'before_or_equal'      => 'Ова поле мора да биде датум пред или еднаков на :date.',
    'between'              => [
        'numeric' => 'Овој број мора да биде помеѓу :min и :max.',
        'file'    => 'Оваа датотека мора да биде помеѓу :min и :max килобајти.',
        'string'  => 'Овој текст мора да биде со должина помеѓу :min и :max број на карактери.',
        'array'   => 'Ова поле мора да има помеѓу :min и :max број на елементи.',
    ],
    'boolean'              => 'Ова поле мора да има вредност вистинито (true) или невистинито (false).',
    'confirmed'            => 'Ова поле не е потврдено.',
    'date'                 => 'Ова не е валиден датум.',
    'date_equals'          => 'Ова мора да биде датум еднаков на :date.',
    'date_format'          => 'Oва не одговара на форматот :format.',
    'different'            => 'Оваа вредност мора да биде различна од :other.',
    'digits'               => 'Ова мора да содржи :digits цифри.',
    'digits_between'       => 'Ова мора да има помеѓу :min и :max цифри.',
    'dimensions'           => 'This image has invalid dimensions.',
    'distinct'             => 'This field has a duplicate value.',
    'email'                => 'This must be a valid email address.',
    'ends_with'            => 'This must end with one of the following: :values.',
    'exists'               => 'The selected value is invalid.',
    'file'                 => 'The content must be a file.',
    'filled'               => 'This field must have a value.',
    'gt'                   => [
        'numeric' => 'The value must be greater than :value.',
        'file'    => 'The file size must be greater than :value kilobytes.',
        'string'  => 'The string must be greater than :value characters.',
        'array'   => 'The content must have more than :value items.',
    ],
    'gte'                  => [
        'numeric' => 'The value must be greater than or equal :value.',
        'file'    => 'The file size must be greater than or equal :value kilobytes.',
        'string'  => 'The string must be greater than or equal :value characters.',
        'array'   => 'The content must have :value items or more.',
    ],
    'image'                => 'This must be an image.',
    'in'                   => 'The selected value is invalid.',
    'in_array'             => 'This value does not exist in :other.',
    'integer'              => 'This must be an integer.',
    'ip'                   => 'This must be a valid IP address.',
    'ipv4'                 => 'This must be a valid IPv4 address.',
    'ipv6'                 => 'This must be a valid IPv6 address.',
    'json'                 => 'This must be a valid JSON string.',
    'lt'                   => [
        'numeric' => 'The value must be less than :value.',
        'file'    => 'The file size must be less than :value kilobytes.',
        'string'  => 'The string must be less than :value characters.',
        'array'   => 'The content must have less than :value items.',
    ],
    'lte'                  => [
        'numeric' => 'The value must be less than or equal :value.',
        'file'    => 'The file size must be less than or equal :value kilobytes.',
        'string'  => 'The string must be less than or equal :value characters.',
        'array'   => 'The content must not have more than :value items.',
    ],
    'max'                  => [
        'numeric' => 'The value may not be greater than :max.',
        'file'    => 'The file size may not be greater than :max kilobytes.',
        'string'  => 'The string may not be greater than :max characters.',
        'array'   => 'The content may not have more than :max items.',
    ],
    'mimes'                => 'This must be a file of type: :values.',
    'mimetypes'            => 'This must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'The value must be at least :min.',
        'file'    => 'The file size must be at least :min kilobytes.',
        'string'  => 'The string must be at least :min characters.',
        'array'   => 'The value must have at least :min items.',
    ],
    'multiple_of'          => 'The value must be a multiple of :value',
    'not_in'               => 'The selected value is invalid.',
    'not_regex'            => 'This format is invalid.',
    'numeric'              => 'This must be a number.',
    'password'             => 'The password is incorrect.',
    'present'              => 'This field must be present.',
    'regex'                => 'This format is invalid.',
    'required'             => 'This field is required.',
    'required_if'          => 'This field is required when :other is :value.',
    'required_unless'      => 'This field is required unless :other is in :values.',
    'required_with'        => 'This field is required when :values is present.',
    'required_with_all'    => 'This field is required when :values are present.',
    'required_without'     => 'This field is required when :values is not present.',
    'required_without_all' => 'This field is required when none of :values are present.',
    'same'                 => 'The value of this field must match the one from :other.',
    'size'                 => [
        'numeric' => 'The value must be :size.',
        'file'    => 'The file size must be :size kilobytes.',
        'string'  => 'The string must be :size characters.',
        'array'   => 'The content must contain :size items.',
    ],
    'starts_with'          => 'This must start with one of the following: :values.',
    'string'               => 'This must be a string.',
    'timezone'             => 'This must be a valid zone.',
    'unique'               => 'This has already been taken.',
    'uploaded'             => 'This failed to upload.',
    'url'                  => 'This format is invalid.',
    'uuid'                 => 'This must be a valid UUID.',

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

];
