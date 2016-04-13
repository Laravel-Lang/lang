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

    'accepted'             => ':Attribute must be accepted.',
    'active_url'           => ':Attribute bukan URL yang sah.',
    'after'                => ':Attribute must be a date after :date.',
    'alpha'                => ':Attribute hanya boleh mengandungi huruf.',
    'alpha_dash'           => ':Attribute boleh mengandungi huruf, nombor, dan sengkang.',
    'alpha_num'            => ':Attribute boleh mengandungi huruf dan nombor.',
    'array'                => ':Attribute must be an array.',
    'before'               => ':Attribute must be a date before :date.',
    'between'              => [
        'numeric' => ':Attribute mesti mengandungi antara :min dan :max.',
        'file'    => ':Attribute mesti mengandungi antara :min dan :max kilobait.',
        'string'  => ':Attribute mesti mengandungi antara :min dan :max aksara.',
        'array'   => ':Attribute mesti mengandungi antara :min dan :max perkara.',
    ],
    'boolean'              => ':Attribute field must be true or false.',
    'confirmed'            => ':Attribute confirmation does not match.',
    'date'                 => ':Attribute bukan tarikh yang sah.',
    'date_format'          => ':Attribute does not match the format :format.',
    'different'            => ':Attribute dan :other must be different.',
    'digits'               => ':Attribute must be :digits digits.',
    'digits_between'       => ':Attribute mesti mengandungi antara :min dan :max digits.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => ':Attribute must be a valid email address.',
    'exists'               => 'The selected :attribute is invalid.',
    'filled'               => ':Attribute field is required.',
    'image'                => ':Attribute must be an image.',
    'in'                   => 'The selected :attribute is invalid.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => ':Attribute must be an integer.',
    'ip'                   => ':Attribute must be a valid IP address.',
    'json'                 => ':Attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => ':Attribute may not be greater than :max.',
        'file'    => ':Attribute may not be greater than :max kilobait.',
        'string'  => ':Attribute may not be greater than :max aksara.',
        'array'   => ':Attribute may not have more than :max perkara.',
    ],
    'mimes'                => ':Attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => ':Attribute must be at least :min.',
        'file'    => ':Attribute must be at least :min kilobait.',
        'string'  => ':Attribute must be at least :min aksara.',
        'array'   => ':Attribute must have at least :min perkara.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => ':Attribute must be a number.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => ':Attribute format is invalid.',
    'required'             => ':Attribute field is required.',
    'required_if'          => ':Attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => ':Attribute field is required when :values is present.',
    'required_with_all'    => ':Attribute field is required when :values is present.',
    'required_without'     => ':Attribute field is required when :values is not present.',
    'required_without_all' => ':Attribute field is required when none of :values are present.',
    'same'                 => ':Attribute dan :other must match.',
    'size'                 => [
        'numeric' => ':Attribute must be :size.',
        'file'    => ':Attribute must be :size kilobait.',
        'string'  => ':Attribute must be :size aksara.',
        'array'   => ':Attribute must contain :size perkara.',
    ],
    'string'               => ':Attribute must be a string.',
    'timezone'             => ':Attribute must be a valid zone.',
    'unique'               => ':Attribute has already been taken.',
    'url'                  => ':Attribute format is invalid.',

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
