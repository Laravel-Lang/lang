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

    'accepted'             => ':Attribute майдонини қабул қилишингиз керак.',
    'active_url'           => ':Attribute майдонига нотўғри URL киритилди.',
    'after'                => ':Attribute майдонида сана :date дан кейинги бўлиши керак.',
    'after_or_equal'       => ':Attribute майдонида сана :date га тенг ёки ундан кейинги бўлиши керак.',
    'alpha'                => ':Attribute майдони фақат ҳарфларни қабул қилиши мумкин.',
    'alpha_dash'           => ':Attribute майдони фақат ҳарфлар, сонлар ва чизиқларни қабул қилиши мумкин.',
    'alpha_num'            => ':Attribute майдони фақат ҳарфлар ва сонларни қабул қилиши мумкин.',
    'array'                => ':Attribute майдони қатор (array) бўлиши керак.',
    'before'               => ':Attribute майдонида сана :date гачам бўлиши керак.',
    'before_or_equal'      => ':Attribute майдонида сана :date га тенг ёки ундан олдин бўлиши керак.',
    'between'              => [
        'numeric' => ':Attribute майдонининг қиймати :min ва :max орасида бўлиши керак.',
        'file'    => ':Attribute майдонидаги файлнинг ҳажми :min ва :max килобайт орасида бўлиши керак.',
        'string'  => ':Attribute майдонидаги белгилар сони :min ва :max орасида бўлиши керак.',
        'array'   => ':Attribute майдонида элементлар сони :min ва :max орасида бўлиши керак.',
    ],
    'boolean'              => ':Attribute майдони фақат мантиқий қийматни қабул қилади.',
    'confirmed'            => ':Attribute майдони тасдиқланмади.',
    'date'                 => ':Attribute сана майдонига нотўғри қиймат киритилди.',
    'date_format'          => ':Attribute майдони :format форматга мос келмади.',
    'different'            => ':Attribute ва :other майдонлари фарқли бўлиши керак.',
    'digits'               => ':Attribute рақамли майдон узунлиги :digits бўлиши керак.',
    'digits_between'       => ':Attribute рақамли майдон узунлиги :min ва :max орасида бўлиши керак.',
    'dimensions'           => ':Attribute майдонидаги тасвир тўғри келмайдиган ўлчамларга эга.',
    'distinct'             => ':Attribute майдони такрорланувчи қийматлардан иборат.',
    'email'                => ':Attribute майдони ҳақийқий электрон почта манзили бўлиши керак.',
    'file'                 => ':Attribute майдони файл турида бўлиши керак.',
    'filled'               => ':Attribute майдони тўлдирилиши шарт.',
    'exists'               => ':Attribute майдони учун танланган қиймат нотўғри.',
    'gt'                   => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file'    => 'The :attribute must be greater than :value kilobytes.',
        'string'  => 'The :attribute must be greater than :value characters.',
        'array'   => 'The :attribute must have more than :value items.',
    ],
    'gte'                  => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file'    => 'The :attribute must be greater than or equal :value kilobytes.',
        'string'  => 'The :attribute must be greater than or equal :value characters.',
        'array'   => 'The :attribute must have :value items or more.',
    ],
    'image'                => ':Attribute майдони тасвир турида бўлиши керак.',
    'in'                   => ':Attribute майдони учун танланган қиймат хато.',
    'in_array'             => ':Attribute майдонининг қиймати :other да мавжуд эмас.',
    'integer'              => ':Attribute майдони бутун сон бўлиши керак.',
    'ip'                   => ':Attribute майдони ҳақийқий IP манзил бўлиши керак.',
    'ipv4'                 => ':Attribute майдони ҳақийқий IPv4 манзил бўлиши керак.',
    'ipv6'                 => ':Attribute майдони ҳақийқий IPv6 манзил бўлиши керак.',
    'json'                 => ':Attribute майдони JSON қатор (string) бўлиши керак.',
    'lt'                   => [
        'numeric' => 'The :attribute must be less than :value.',
        'file'    => 'The :attribute must be less than :value kilobytes.',
        'string'  => 'The :attribute must be less than :value characters.',
        'array'   => 'The :attribute must have less than :value items.',
    ],
    'lte'                  => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file'    => 'The :attribute must be less than or equal :value kilobytes.',
        'string'  => 'The :attribute must be less than or equal :value characters.',
        'array'   => 'The :attribute must not have more than :value items.',
    ],
    'max'                  => [
        'numeric' => ':Attribute майдони қиймати :max дан ошмаслиги керак.',
        'file'    => ':Attribute майдонидаги файлнинг ҳажми :max килобайтдан ошмаслиги керак.',
        'string'  => ':Attribute майдонидаги белгилар сони :max тадан ошмаслиги керак.',
        'array'   => ':Attribute майдонидаги элментлар сони :max тадан ошмаслиги керак.',
    ],
    'mimes'                => ':Attribute майдонидаги файл сўнгида келтирилган турлардан бирида бўлиши керак: :values.',
    'mimetypes'            => ':Attribute майдонидаги файл сўнгида келтирилган турлардан бирида бўлиши керак: :values.',
    'min'                  => [
        'numeric' => ':Attribute майдони қиймати :min дан кам бўлмаслиги керак.',
        'file'    => ':Attribute майдонидаги файлнинг ҳажми :min килобайтдан кам бўлмаслиги керак.',
        'string'  => ':Attribute майдонидаги белгилар сони :min тадан кам бўлмаслиги керак.',
        'array'   => ':Attribute майдонидаги элментлар сони :min тадан кам бўлмаслиги керак.',
    ],
    'not_in'               => ':Attribute майдони учун танланган қиймат хато.',
    'not_regex'            => 'The :attribute format is invalid.',
    'numeric'              => ':Attribute майдони сон бўлиши керак.',
    'present'              => ':Attribute майдони кўрсатилиши керак.',
    'regex'                => ':Attribute майдони хато форматда.',
    'required'             => ':Attribute майдони тўлдирилиши шарт.',
    'required_if'          => ':Attribute майдони тўлдирилиши шарт, қачонки :other майдони :values га тенг бўлса.',
    'required_unless'      => ':Attribute майдони тўлдирилиши шарт, қачонки :other майдони :values га тенг бўлмаса.',
    'required_with'        => ':Attribute майдони тўлдирилиши шарт, қачонки :values кўрсатилган бўлса.',
    'required_with_all'    => ':Attribute майдони тўлдирилиши шарт, қачонки :values кўрсатилган бўлса.',
    'required_without'     => ':Attribute майдони тўлдирилиши шарт, қачонки :values кўрсатилмаган бўлса.',
    'required_without_all' => ':Attribute майдони тўлдирилиши шарт, қачонки :values лардан ҳеч бири кўрсатилмаган бўлса.',
    'same'                 => ':Attribute майдонининг қиймати :other билан бир хил бўлиши керак.',
    'size'                 => [
        'numeric' => ':Attribute майдони қиймати :size га тенг бўлиши керак.',
        'file'    => ':Attribute майдонидаги файлнинг ҳажми :size килобайтга тенг бўлиши керак.',
        'string'  => ':Attribute майдонидаги белгилар сони :size га тенг бўлиши керак.',
        'array'   => ':Attribute майдонидаги элментлар сони :size га тенг бўлиши керак.',
    ],
    'string'               => ':Attribute майдони қатор (string) бўлиши керак.',
    'timezone'             => ':Attribute майдонининг қиймати мавжуд вақт минтақаси бўлиши керак.',
    'unique'               => ':Attribute майдонининг бундай қиймати мавжуд (киритлган).',
    'uploaded'             => ':Attribute майдонини юклаш муваффақиятли амалга ошмади.',
    'url'                  => ':Attribute майдони нотўғри форматга эга.',

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
