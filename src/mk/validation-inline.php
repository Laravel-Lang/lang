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
    'dimensions'           => 'Оваа слика има невалидни димензии.',
    'distinct'             => 'Ова поле има дупликат вредност.',
    'email'                => 'Ова мора да биде валидна e-маил адреса.',
    'ends_with'            => 'Ова мора да завршува со една од следните вредности: :values.',
    'exists'               => 'Избраната вредност не е валидна.',
    'file'                 => 'Содржината мора да биде датотека.',
    'filled'               => 'Ова поле мора да има вредност.',
    'gt'                   => [
        'numeric' => 'Овој број мора да биде поголем од :value.',
        'file'    => 'Оваа датотека мора да биде поголема од :value килобајти.',
        'string'  => 'Овој текст мора да има биде со должина поголема од :value карактери.',
        'array'   => 'Ова поле мора да има повеќе од :value елементи.',
    ],
    'gte'                  => [
        'numeric' => 'Овој број мора да биде поголем или еднаков на :value.',
        'file'    => 'Оваа датотека мора да биде поголема или еднаква на :value килобајти.',
        'string'  => 'Овој текст мора да биде со должина поголема или еднаква на :value карактери.',
        'array'   => 'Ова поле мора да има :value елементи или повеќе.',
    ],
    'image'                => 'Ова мора да биде слика.',
    'in'                   => 'Избраната вредност не е валидна.',
    'in_array'             => 'Оваа вредност не постои во :other.',
    'integer'              => 'Ова мора да биде цел број.',
    'ip'                   => 'Ова мора да биде валидна IP адреса.',
    'ipv4'                 => 'Ова мора да биде валидна IPv4 адреса.',
    'ipv6'                 => 'Ова мора да биде валидна IPv6 адреса.',
    'json'                 => 'Ова мора да биде валиден JSON објект.',
    'lt'                   => [
        'numeric' => 'Овој број мора да биде помал од :value.',
        'file'    => 'Оваа датотека мора да биде помала од :value килобајти.',
        'string'  => 'Овој текст мора да биде со должина помала од :value карактери.',
        'array'   => 'Ова поле мора да има помалку од :value елементи.',
    ],
    'lte'                  => [
        'numeric' => 'Овој број мора да биде помал или еднаков на :value.',
        'file'    => 'Оваа датотека мора да биде помала или еднаква на :value килобајти.',
        'string'  => 'Овој текст мора да биде со должина помала или еднаква на :value карактери.',
        'array'   => 'Ова поле мора да има :value елементи или помалку.',
    ],
    'max'                  => [
        'numeric' => 'Овој број не може да биде поголем од :max.',
        'file'    => 'Оваа датотека не може да биде поголема од :max килобајти.',
        'string'  => 'Овој текст не може да биде со должина поголема од :max карактери.',
        'array'   => 'Ова поле не може да има повеќе од :max елементи.',
    ],
    'mimes'                => 'Ова мора да биди датотека од тип: :values.',
    'mimetypes'            => 'Ова мора да биди датотека од тип: :values.',
    'min'                  => [
        'numeric' => 'Овој број мора да биде најмалку :min.',
        'file'    => 'Оваа датотека мора да биде најмалку :min килобајти.',
        'string'  => 'Овој текст мора да биде со должина најмалку од :min карактери.',
        'array'   => 'Ова поле мора да има најмалку :min елементи.',
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
