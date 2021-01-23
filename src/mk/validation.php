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

    'accepted'             => 'Полето :attribute мора да биде прифатено.',
    'active_url'           => 'Полето :attribute не е валиден URL.',
    'after'                => 'Полето :attribute мора да биде датум после :date.',
    'after_or_equal'       => 'Полето :attribute мора да биде датум кој е после или еднаков на :date.',
    'alpha'                => 'Полето :attribute може да содржи само букви.',
    'alpha_dash'           => 'Полето :attribute може да содржи само букви, броеви, долна црта и тире.',
    'alpha_num'            => 'Полето :attribute може да содржи само букви и броеви.',
    'array'                => 'Полето :attribute мора да биде низа.',
    'before'               => 'Полето :attribute мора да биде датум пред :date.',
    'before_or_equal'      => 'Полето :attribute мора да биде датум пред или еднаков на :date.',
    'between'              => [
        'numeric' => 'Полето :attribute мора да биде број помеѓу :min и :max.',
        'file'    => 'Полето :attribute мора да биде документ со големина помеѓу :min и :max килобајти.',
        'string'  => 'Полето :attribute мора да биде текст со должина помеѓу :min и :max карактери.',
        'array'   => 'Полето :attribute мора да има помеѓу :min - :max елементи.',
    ],
    'boolean'              => 'Полето :attribute мора да има вредност вистинито (true) или невистинито (false).',
    'confirmed'            => 'Полето :attribute не е потврдено.',
    'date'                 => 'Полето :attribute не е валиден датум.',
    'date_equals'          => 'Полето :attribute мора да биде датум еднаков на :date.',
    'date_format'          => 'Полето :attribute не одговара на форматот :format.',
    'different'            => 'Полињата :attribute и :other треба да се различни.',
    'digits'               => 'Полето :attribute треба да има :digits цифри.',
    'digits_between'       => 'Полето :attribute треба да има помеѓу :min и :max цифри.',
    'dimensions'           => 'Полето :attribute има невалидни димензии.',
    'distinct'             => 'Полето :attribute има вредност која е дупликат.',
    'email'                => 'Полето :attribute не е во валиден формат.',
    'ends_with'            => 'Полето :attribute мора да завршува со една од следните вредности: :values.',
    'exists'               => 'Полето :attribute има вредност која веќе постои.',
    'file'                 => 'Полето :attribute мора да биде датотека.',
    'filled'               => 'Полето :attribute мора да има вредност.',
    'gt'                   => [
        'numeric' => 'Полето :attribute мора да биде број поголем од :value.',
        'file'    => 'Полето :attribute мора да биде документ поголем од :value килобајти.',
        'string'  => 'Полето :attribute мора да биде текст со повеќе од :value карактери.',
        'array'   => 'Полето :attribute мора да има повеке од :value елементи.',
    ],
    'gte'                  => [
        'numeric' => 'Полето :attribute мора да биде број поголем или еднаков на :value.',
        'file'    => 'Полето :attribute мора да биде документ поголем или еднаков на :value килобајти.',
        'string'  => 'Полето :attribute мора да биде текст со повеќе или еднаков на :value број на карактери.',
        'array'   => 'Полето :attribute мора да има :value елементи или повеќе.',
    ],
    'image'                => 'Полето :attribute мора да биде слика.',
    'in'                   => 'Избраното поле :attribute е невалидно.',
    'in_array'             => 'Полето :attribute не содржи вредност која постои во :other.',
    'integer'              => 'Полето :attribute мора да биде цел број.',
    'ip'                   => 'Полето :attribute мора да биде валидна IP адреса.',
    'ipv4'                 => 'Полето :attribute мора да биде валидна IPv4 адреса.',
    'ipv6'                 => 'Полето :attribute мора да биде валидна IPv6 адреса.',
    'json'                 => 'Полето :attribute мора да биде валиден JSON објект.',
    'lt'                   => [
        'numeric' => 'Полето :attribute мора да биде број помал од :value.',
        'file'    => 'Полето :attribute мора да биде документ помал од :value килобајти.',
        'string'  => 'Полето :attribute мора да биде текст помал од :value број на карактери.',
        'array'   => 'Полето :attribute мора да има помалку од :value елементи.',
    ],
    'lte'                  => [
        'numeric' => 'Полето :attribute мора да биде број помал или еднаков на :value.',
        'file'    => 'Полето :attribute мора да биде документ помал или еднаков на :value килобајти.',
        'string'  => 'Полето :attribute мора да биде текст со помалку или еднаков на :value број на карактери.',
        'array'   => 'Полето :attribute мора да има :value елементи или помалку.',
    ],
    'max'                  => [
        'numeric' => 'Полето :attribute мора да биде број не поголем од :max.',
        'file'    => 'Полето :attribute мора да биде документ не поголем од :max килобајти.',
        'string'  => 'Полето :attribute мора да има не повеќе од :max карактери.',
        'array'   => 'Полето :attribute не може да има повеќе од :max елементи.',
    ],
    'mimes'                => 'Полето :attribute мора да биде документ од типот: :values.',
    'mimetypes'            => 'Полето :attribute мора да биде документ од типот: :values.',
    'min'                  => [
        'numeric' => 'Полето :attribute мора да биде број не помал од :min.',
        'file'    => 'Полето :attribute мора да биде документ не помал од :min килобајти.',
        'string'  => 'Полето :attribute мора да има не помалку од :min карактери.',
        'array'   => 'Полето :attribute мора да има минимум :min елементи.',
    ],
    'multiple_of'          => 'The :attribute must be a multiple of :value',
    'not_in'               => 'Избраното поле :attribute е невалидно.',
    'not_regex'            => 'The :attribute format is invalid.',
    'numeric'              => 'Полето :attribute мора да биде број.',
    'password'             => 'The password is incorrect.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'Полето :attribute е во невалиден формат.',
    'required'             => 'Полето :attribute е задолжително.',
    'required_if'          => 'Полето :attribute е задолжително, кога :other е :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'Полето :attribute е задолжително, кога е внесено :values.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'Полето :attribute е задолжително, кога не е внесено :values.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'Полињата :attribute и :other треба да совпаѓаат.',
    'size'                 => [
        'numeric' => 'Полето :attribute мора да биде :size.',
        'file'    => 'Полето :attribute мора да биде :size килобајти.',
        'string'  => 'Полето :attribute мора да има :size карактери.',
        'array'   => 'Полето :attribute мора да има :size карактери.',
    ],
    'starts_with'          => 'The :attribute must start with one of the following: :values.',
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => 'Полето :attribute веќе постои.',
    'uploaded'             => 'The :attribute failed to upload.',
    'url'                  => 'Полето :attribute не е во валиден формат.',
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
