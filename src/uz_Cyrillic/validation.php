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

    'accepted'        => ':attribute майдонини қабул қилишингиз керак.',
    'active_url'      => ':attribute майдонига нотўғри URL киритилди.',
    'after'           => ':attribute майдонида сана :date дан кейинги бўлиши керак.',
    'after_or_equal'  => ':attribute майдонида сана :date га тенг ёки ундан кейинги бўлиши керак.',
    'alpha'           => ':attribute майдони фақат ҳарфларни қабул қилиши мумкин.',
    'alpha_dash'      => ':attribute майдони фақат ҳарфлар, сонлар ва чизиқларни қабул қилиши мумкин.',
    'alpha_num'       => ':attribute майдони фақат ҳарфлар ва сонларни қабул қилиши мумкин.',
    'array'           => ':attribute майдони қатор (array) бўлиши керак.',
    'before'          => ':attribute майдонида сана :date гачам бўлиши керак.',
    'before_or_equal' => ':attribute майдонида сана :date га тенг ёки ундан олдин бўлиши керак.',
    'between'         => [
        'numeric' => ':attribute майдонининг қиймати :min ва :max орасида бўлиши керак.',
        'file'    => ':attribute майдонидаги файлнинг ҳажми :min ва :max килобайт орасида бўлиши керак.',
        'string'  => ':attribute майдонидаги белгилар сони :min ва :max орасида бўлиши керак.',
        'array'   => ':attribute майдонида элементлар сони :min ва :max орасида бўлиши керак.',
    ],
    'boolean'        => ':attribute майдони фақат мантиқий қийматни қабул қилади.',
    'confirmed'      => ':attribute майдони тасдиқланмади.',
    'date'           => ':attribute сана майдонига нотўғри қиймат киритилди.',
    'date_equals'    => 'The :attribute must be a date equal to :date.',
    'date_format'    => ':attribute майдони :format форматга мос келмади.',
    'different'      => ':attribute ва :other майдонлари фарқли бўлиши керак.',
    'digits'         => ':attribute рақамли майдон узунлиги :digits бўлиши керак.',
    'digits_between' => ':attribute рақамли майдон узунлиги :min ва :max орасида бўлиши керак.',
    'dimensions'     => ':attribute майдонидаги тасвир тўғри келмайдиган ўлчамларга эга.',
    'distinct'       => ':attribute майдони такрорланувчи қийматлардан иборат.',
    'email'          => ':attribute майдони ҳақийқий электрон почта манзили бўлиши керак.',
    'ends_with'      => 'The :attribute must end with one of the following: :values.',
    'exists'         => ':attribute майдони учун танланган қиймат нотўғри.',
    'file'           => ':attribute майдони файл турида бўлиши керак.',
    'filled'         => ':attribute майдони тўлдирилиши шарт.',
    'gt'             => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file'    => 'The :attribute must be greater than :value kilobytes.',
        'string'  => 'The :attribute must be greater than :value characters.',
        'array'   => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file'    => 'The :attribute must be greater than or equal :value kilobytes.',
        'string'  => 'The :attribute must be greater than or equal :value characters.',
        'array'   => 'The :attribute must have :value items or more.',
    ],
    'image'    => ':attribute майдони тасвир турида бўлиши керак.',
    'in'       => ':attribute майдони учун танланган қиймат хато.',
    'in_array' => ':attribute майдонининг қиймати :other да мавжуд эмас.',
    'integer'  => ':attribute майдони бутун сон бўлиши керак.',
    'ip'       => ':attribute майдони ҳақийқий IP манзил бўлиши керак.',
    'ipv4'     => ':attribute майдони ҳақийқий IPv4 манзил бўлиши керак.',
    'ipv6'     => ':attribute майдони ҳақийқий IPv6 манзил бўлиши керак.',
    'json'     => ':attribute майдони JSON қатор (string) бўлиши керак.',
    'lt'       => [
        'numeric' => 'The :attribute must be less than :value.',
        'file'    => 'The :attribute must be less than :value kilobytes.',
        'string'  => 'The :attribute must be less than :value characters.',
        'array'   => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file'    => 'The :attribute must be less than or equal :value kilobytes.',
        'string'  => 'The :attribute must be less than or equal :value characters.',
        'array'   => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => ':attribute майдони қиймати :max дан ошмаслиги керак.',
        'file'    => ':attribute майдонидаги файлнинг ҳажми :max килобайтдан ошмаслиги керак.',
        'string'  => ':attribute майдонидаги белгилар сони :max тадан ошмаслиги керак.',
        'array'   => ':attribute майдонидаги элментлар сони :max тадан ошмаслиги керак.',
    ],
    'mimes'     => ':attribute майдонидаги файл сўнгида келтирилган турлардан бирида бўлиши керак: :values.',
    'mimetypes' => ':attribute майдонидаги файл сўнгида келтирилган турлардан бирида бўлиши керак: :values.',
    'min'       => [
        'numeric' => ':attribute майдони қиймати :min дан кам бўлмаслиги керак.',
        'file'    => ':attribute майдонидаги файлнинг ҳажми :min килобайтдан кам бўлмаслиги керак.',
        'string'  => ':attribute майдонидаги белгилар сони :min тадан кам бўлмаслиги керак.',
        'array'   => ':attribute майдонидаги элментлар сони :min тадан кам бўлмаслиги керак.',
    ],
    'not_in'               => ':attribute майдони учун танланган қиймат хато.',
    'not_regex'            => 'The :attribute format is invalid.',
    'numeric'              => ':attribute майдони сон бўлиши керак.',
    'password'             => 'The password is incorrect.',
    'present'              => ':attribute майдони кўрсатилиши керак.',
    'regex'                => ':attribute майдони хато форматда.',
    'required'             => ':attribute майдони тўлдирилиши шарт.',
    'required_if'          => ':attribute майдони тўлдирилиши шарт, қачонки :other майдони :value га тенг бўлса.',
    'required_unless'      => ':attribute майдони тўлдирилиши шарт, қачонки :other майдони :values га тенг бўлмаса.',
    'required_with'        => ':attribute майдони тўлдирилиши шарт, қачонки :values кўрсатилган бўлса.',
    'required_with_all'    => ':attribute майдони тўлдирилиши шарт, қачонки :values кўрсатилган бўлса.',
    'required_without'     => ':attribute майдони тўлдирилиши шарт, қачонки :values кўрсатилмаган бўлса.',
    'required_without_all' => ':attribute майдони тўлдирилиши шарт, қачонки :values лардан ҳеч бири кўрсатилмаган бўлса.',
    'same'                 => ':attribute майдонининг қиймати :other билан бир хил бўлиши керак.',
    'size'                 => [
        'numeric' => ':attribute майдони қиймати :size га тенг бўлиши керак.',
        'file'    => ':attribute майдонидаги файлнинг ҳажми :size килобайтга тенг бўлиши керак.',
        'string'  => ':attribute майдонидаги белгилар сони :size га тенг бўлиши керак.',
        'array'   => ':attribute майдонидаги элментлар сони :size га тенг бўлиши керак.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string'      => ':attribute майдони қатор (string) бўлиши керак.',
    'timezone'    => ':attribute майдонининг қиймати мавжуд вақт минтақаси бўлиши керак.',
    'unique'      => ':attribute майдонининг бундай қиймати мавжуд (киритлган).',
    'uploaded'    => ':attribute майдонини юклаш муваффақиятли амалга ошмади.',
    'url'         => ':attribute майдони нотўғри форматга эга.',
    'uuid'        => 'The :attribute must be a valid UUID.',

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
