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

    'accepted'        => 'Поле має бути прийнято.',
    'active_url'      => 'Не є дійсною URL-адресою.',
    'after'           => 'Має бути дата після :date.',
    'after_or_equal'  => 'Має бути дата після або дата, що дорівнює :date',
    'alpha'           => 'Поле може містити лише літери.',
    'alpha_dash'      => 'Поле може містити лише літери, цифри, тире та підкреслення.',
    'alpha_num'       => 'Поле може містити лише букви та цифри.',
    'array'           => 'Поле має бути масивом.',
    'before'          => 'Має бути дата раніше :date.',
    'before_or_equal' => 'Має бути дата раніше або дорівнює :date.',
    'between'         => [
        'numeric' => 'Значення повинно бути між :min та :max.',
        'file'    => 'Файл повинен бути від :min до :max кілобайт.',
        'string'  => 'Рядок повинен бути між :min та :max символами.',
        'array'   => 'Вміст повинен містити між :min та :max елементів.',
    ],
    'boolean'        => 'This field must be true or false.',
    'confirmed'      => 'The confirmation does not match.',
    'date'           => 'This is not a valid date.',
    'date_equals'    => 'This must be a date equal to :date.',
    'date_format'    => 'This does not match the format :format.',
    'different'      => 'This value must be different from :other.',
    'digits'         => 'This must be :digits digits.',
    'digits_between' => 'This must be between :min and :max digits.',
    'dimensions'     => 'This image has invalid dimensions.',
    'distinct'       => 'This field has a duplicate value.',
    'email'          => 'This must be a valid email address.',
    'ends_with'      => 'This must end with one of the following: :values.',
    'exists'         => 'The selected value is invalid.',
    'file'           => 'The content must be a file.',
    'filled'         => 'Обовязково для заповнення.',
    'gt'             => [
        'numeric' => 'Значення повинно бути більше, ніж :value.',
        'file'    => 'The file size must be greater than :value kilobytes.',
        'string'  => 'The string must be greater than :value characters.',
        'array'   => 'The content must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The value must be greater than or equal :value.',
        'file'    => 'The file size must be greater than or equal :value kilobytes.',
        'string'  => 'The string must be greater than or equal :value characters.',
        'array'   => 'The content must have :value items or more.',
    ],
    'image'    => 'Має бути зображення.',
    'in'       => 'Вибране значення є недійсним.',
    'in_array' => 'Значення не існує в :other.',
    'integer'  => 'Має бути цілим числом.',
    'ip'       => 'Має бути дійсним IP-адресою.',
    'ipv4'     => 'Має бути дійсним IPv4-адресою.',
    'ipv6'     => 'Має бути дійсним IPv6-адресою.',
    'json'     => 'Має бути дійсним JSON рядок.',
    'lt'       => [
        'numeric' => 'Значення повинно бути менше :value.',
        'file'    => 'Розмір файлу повинен бути менше :value кілобайт.',
        'string'  => 'Рядок повинен бути менше, ніж :value символів.',
        'array'   => 'Вміст повинен містити менше :value елементів.',
    ],
    'lte' => [
        'numeric' => 'The value must be less than or equal :value.',
        'file'    => 'The file size must be less than or equal :value kilobytes.',
        'string'  => 'The string must be less than or equal :value characters.',
        'array'   => 'The content must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The value may not be greater than :max.',
        'file'    => 'The file size may not be greater than :max kilobytes.',
        'string'  => 'The string may not be greater than :max characters.',
        'array'   => 'The content may not have more than :max items.',
    ],
    'mimes'     => 'This must be a file of type: :values.',
    'mimetypes' => 'This must be a file of type: :values.',
    'min'       => [
        'numeric' => 'Значення має бути, щонайменше :min.',
        'file'    => 'Розмір файлу повинен бути не менше :min кілобайт.',
        'string'  => 'The string must be at least :min characters.',
        'array'   => 'The value must have at least :min items.',
    ],
    'not_in'               => 'Вибране значення недійсне.',
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
    'starts_with' => 'This must start with one of the following: :values.',
    'string'      => 'This must be a string.',
    'timezone'    => 'This must be a valid zone.',
    'unique'      => 'This has already been taken.',
    'uploaded'    => 'This failed to upload.',
    'url'         => 'This format is invalid.',
    'uuid'        => 'This must be a valid UUID.',

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
