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

    'accepted'        => 'Поље :attribute мора бити прихваћено.',
    'active_url'      => 'Поље :attribute није валидан УРЛ.',
    'after'           => 'Поље :attribute мора бити датум после :date.',
    'after_or_equal'  => 'Поље :attribute мора да буде :date или каснији датум.',
    'alpha'           => 'Поље :attribute може садржати само слова.',
    'alpha_dash'      => 'Поље :attribute може садржати само слова, бројеве и повлаке.',
    'alpha_num'       => 'Поље :attribute може садржати само слова и бројеве.',
    'array'           => 'Поље :attribute мора садржати неких низ ставки.',
    'before'          => 'Поље :attribute мора бити датум пре :date.',
    'before_or_equal' => ':attribute мора да буде :date или ранији датум.',
    'between'         => [
        'numeric' => 'Поље :attribute мора бити између :min - :max.',
        'file'    => 'Фајл :attribute мора бити између :min - :max килобајта.',
        'string'  => 'Поље :attribute мора бити између :min - :max карактера.',
        'array'   => 'Поље :attribute мора бити између :min - :max ставки.',
    ],
    'boolean'        => 'Поље :attribute мора бити тачно или нетачно',
    'confirmed'      => 'Потврда поља :attribute се не поклапа.',
    'date'           => 'Поље :attribute није важећи датум.',
    'date_equals'    => 'Поље :attribute мора да буде датум: :date.',
    'date_format'    => 'Поље :attribute не одговора према формату :формат.',
    'different'      => 'Поља :attribute и :other морају бити различита.',
    'digits'         => 'Поље :attribute мора садржати :digits шифри.',
    'digits_between' => 'Поље :attribute мора бити иземђу :min и :max шифри.',
    'dimensions'     => 'Поље :attribute име недозвољене димензије слике.',
    'distinct'       => 'Поље :attribute има дуплирану вредност.',
    'email'          => 'Формат поља :attribute није валидан.',
    'ends_with'      => 'Поље :attribute мора да се заврши са нечим од следећег: :values.',
    'exists'         => 'Одабрано поље :attribute није валидно.',
    'file'           => ':attribute мора да буде датотека.',
    'filled'         => 'Поље :attribute је обавезно.',
    'gt'             => [
        'numeric' => 'Поље :attribute мора да буде већи од :value.',
        'file'    => 'Поље :attribute мора да буде већи од :value килобајта.',
        'string'  => 'Поље :attribute мора да садржи више од :value знакова.',
        'array'   => 'Поље :attribute мора да садржи више од :value ставке.',
    ],
    'gte' => [
        'numeric' => 'Поље :attribute мора да буде :value или већи.',
        'file'    => 'Поље :attribute мора да има :value или више килобајта.',
        'string'  => 'Поље :attribute мора да садржи :value или више знакова.',
        'array'   => 'Поље :attribute мора да садржи :value ставки или више.',
    ],
    'image'    => 'Поље :attribute мора бити слика.',
    'in'       => 'Поље Одабрано поље :attribute није валидно.',
    'in_array' => 'Поље :attribute не постоји у :other.',
    'integer'  => 'Поље :attribute мора бити број.',
    'ip'       => 'Поље :attribute мора бити валидна ИП адреса.',
    'ipv4'     => 'Поље :attribute мора да буде важећа ИПв4 адреса.',
    'ipv6'     => 'Поље :attribute мора да буде важећа ИПв6 адреса.',
    'json'     => 'Поље :attribute мора да буде важећа ЈСОН формат.',
    'lt'       => [
        'numeric' => 'Поље :attribute мора да буде мањи од :value.',
        'file'    => 'Поље :attribute мора да буде мањи од :value килобајта.',
        'string'  => 'Поље :attribute мора да садржи мање од :value знакова.',
        'array'   => 'Поље :attribute мора да садржи мање од :value ставки.',
    ],
    'lte' => [
        'numeric' => 'Поље :attribute мора да буде :value или мањи.',
        'file'    => 'Поље :attribute мора да буде :value или мањи.',
        'string'  => 'Поље :attribute мора да садржи :value или мање знакова.',
        'array'   => 'Поље :attribute не сме да садржи више од :value ставки.',
    ],
    'max' => [
        'numeric' => 'Поље :attribute мора бити мање од :max.',
        'file'    => 'Поље :attribute мора бити мање од :max килобајта.',
        'string'  => 'Поље :attribute мора садржати мање од :max карактера.',
        'array'   => 'Поље :attribute не смије да имаге више од :max ставки.',
    ],
    'mimes'     => 'Поље :attribute мора бити фајл типа: :values.',
    'mimetypes' => 'Поље :attribute мора бити фајл типа: :values.',
    'min'       => [
        'numeric' => 'Поље :attribute мора бити најмање :min.',
        'file'    => 'Фајл :attribute мора бити најмање :min килобајта.',
        'string'  => 'Поље :attribute мора садржати најмање :min карактера.',
        'array'   => 'Поље :attribute мора садрзати најмање :min ставку.',
    ],
    'not_in'               => 'Одабрани елемент поља :attribute није валидан.',
    'not_regex'            => 'Формат :attribute је неважећи.',
    'numeric'              => 'Поље :attribute мора бити број.',
    'password'             => 'Погрешна лозинка',
    'present'              => 'Поље :attribute мора да буде присутно.',
    'regex'                => 'Формат поља :attribute није валидан.',
    'required'             => 'Поље :attribute је обавезно.',
    'required_if'          => 'Поље :attribute је потребно када поље :other садржи :value.',
    'required_unless'      => 'Поље :attribute је обавезно, осим ако је :other у :values.',
    'required_with'        => 'Поље :attribute је потребно када поље :values је присутан.',
    'required_with_all'    => 'Поље :attribute је обавезно када је :values приказано.',
    'required_without'     => 'Поље :attribute је потребно када поље :values није присутан.',
    'required_without_all' => 'Поље :attribute је потребно када ниједан од следећи поља :values нису присутни.',
    'same'                 => 'Поља :attribute и :other се морају поклапати.',
    'size'                 => [
        'numeric' => 'Поље :attribute мора бити :size.',
        'file'    => 'Фајл :attribute мора бити :size килобајта.',
        'string'  => 'Поље :attribute мора бити :size карактера.',
        'array'   => 'Поље :attribute мора садржати :size ставки.',
    ],
    'starts_with' => 'Поље :attribute мора да почне са: :values',
    'string'      => 'Поље :attribute мора садржати слова.',
    'timezone'    => 'Поље :attribute мора бити исправна временска зона.',
    'unique'      => 'Поље :attribute већ постоји.',
    'uploaded'    => ':attribute није отпремљен.',
    'url'         => 'Формат поља :attribute не важи.',
    'uuid'        => ':attribute мора да буде важећи УУИД.',

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
        'name'                  => 'име',
        'username'              => 'корисничко име',
        'email'                 => 'емаил',
        'first_name'            => 'име',
        'last_name'             => 'презиме',
        'password'              => 'лозинка',
        'password_confirmation' => 'понови лозинку',
        'city'                  => 'град',
        'country'               => 'држава',
        'address'               => 'адреса',
        'phone'                 => 'телефон',
        'mobile'                => 'мобилни',
        'age'                   => 'године',
        'sex'                   => 'пол',
        'gender'                => 'пол',
        'year'                  => 'година',
        'month'                 => 'месец',
        'day'                   => 'дан',
        'hour'                  => 'сат',
        'minute'                => 'минут',
        'second'                => 'секунда',
        'title'                 => 'наслов',
        'body'                  => 'тело поруке',
        'description'           => 'опис',
        'excerpt'               => 'извод',
        'date'                  => 'датум',
        'time'                  => 'време',
        'subject'               => 'наслов',
        'message'               => 'порука',
    ],
];
