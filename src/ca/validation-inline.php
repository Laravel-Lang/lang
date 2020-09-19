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

    'accepted'             => 'This field must be accepted.',
    'active_url'           => 'This is not a valid URL.',
    'after'                => 'This must be a date after :date.',
    'after_or_equal'       => 'This must be a date after or equal to :date.',
    'alpha'                => 'This field may only contain letters.',
    'alpha_dash'           => 'This field may only contain letters, numbers, dashes and underscores.',
    'alpha_num'            => 'This field may only contain letters and numbers.',
    'array'                => 'This field must be an array.',
    'before'               => 'This must be a date before :date.',
    'before_or_equal'      => 'This must be a date before or equal to :date.',
    'between'              => [
        'numeric' => 'This value must be between :min and :max.',
        'file'    => 'This file must be between :min and :max kilobytes.',
        'string'  => 'This string must be between :min and :max characters.',
        'array'   => 'This content must have between :min and :max items.',
    ],
    'boolean'              => 'This field must be true or false.',
    'confirmed'            => 'The confirmation does not match.',
    'date'                 => 'This is not a valid date.',
    'date_equals'          => 'This must be a date equal to :date.',
    'date_format'          => 'This does not match the format :format.',
    'different'            => 'This value must be different from :other.',
    'digits'               => 'This must be :digits digits.',
    'digits_between'       => 'This must be between :min and :max digits.',
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
