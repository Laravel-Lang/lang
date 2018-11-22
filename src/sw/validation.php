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

    'accepted'             => 'Lazima kipengele kikubalike.',
    'active_url'           => 'Kipengele sio Chanzo Cha Anuani halali.',
    'after'                => 'Kipengele lazima kiwe tarehe baada ya :date.',
    'after_or_equal'       => 'The :attribute must be a date after or equal to :date.',
    'alpha'                => 'Kipengele huenda kikawa tu chenye herufi.',
    'alpha_dash'           => 'Kipengele huenda kikawa tu chenye herufi, na vistari.',
    'alpha_num'            => 'Kipengele huenda kikawa tu chenye herufi na nambari.',
    'array'                => 'Kipengele lazima kiwe safu.',
    'before'               => 'Kipengele lazima kiwe tarehe kabla ya :date.',
    'before_or_equal'      => 'The :attribute must be a date before or equal to :date.',
    'between'              => [
        'numeric' => 'Kipengele lazima kiwe kati ya :min na :max.',
        'file'    => 'Kipengele lazima kiwe kati ya :min na :max cha kilobaiti.',
        'string'  => 'Kipengele lazima kiwe kati ya :min na :max cha herufi.',
        'array'   => 'Kipengele lazima kiwe na kati ya :min na :max cha vifungu.',
    ],
    'boolean'              => 'Sehemu ya kipengele lazima iwe kweli au si kweli.',
    'confirmed'            => 'Uthibitisho wa kipengele haulingani.',
    'date'                 => 'Kipengele si tarehe halali.',
    'date_format'          => 'Kipengele hakilingani na muundo :date.',
    'different'            => 'Kipengele na :other lazima viwe tofauti.',
    'digits'               => 'Kipengele lazima kiwe :digits tarakimu.',
    'digits_between'       => 'Kipengele lazima kiwe kati ya :min na :max cha tarakimu.',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'Sehemu ya kipengele ina thamani rudufu.',
    'email'                => 'Kipengele lazima kiwe anuani halali ya barua pepe.',
    'exists'               => 'Kipengele kilichochaguliwa si halali.',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => 'Sehemu ya kipengele inahitajika.',
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
    'image'                => 'Kipengele lazima kiwe picha.',
    'in'                   => 'Kipengele kilichochaguliwa si halali.',
    'in_array'             => 'Sehemu ya kipengele haipo katika :other.',
    'integer'              => 'Kipengele lazima kiwe nambari kamili.',
    'ip'                   => 'Kipengele lazima kiwe anuani halali ya Itifaki ya Intaneti.',
    'ipv4'                 => 'The :attribute must be a valid IPv4 address.',
    'ipv6'                 => 'The :attribute must be a valid IPv6 address.',
    'json'                 => 'Kipengele lazima kiwe kidwe halali cha Nukuu ya Java.',
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
        'numeric' => 'Kipengele huenda si kikubwa kuliko :max.',
        'file'    => 'Kipengele huenda si kikubwa kuliko :max cha kilobaiti.',
        'string'  => 'Kipengele huenda si kikubwa kuliko :max cha herufi.',
        'array'   => 'Kipengele huenda kisiwe na zaidi ya :max cha vifungu.',
    ],
    'mimes'                => 'Kipengele lazima kiwe faili ya aina: :values.',
    'mimetypes'            => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'Kipengele lazima kiwe angalau :min.',
        'file'    => 'Kipengele lazima kiwe angalau :min cha kilobaiti.',
        'string'  => 'Kipengele lazima kiwe angalau :min cha herufi.',
        'array'   => 'Kipengele lazima kiwe na angalau :min cha vifungu.',
    ],
    'not_in'               => 'Kipengele kilichochaguliwa si halali.',
    'not_regex'            => 'The :attribute format is invalid.',
    'numeric'              => 'Kipengele lazima kiwe nambari.',
    'present'              => 'Sehemu ya kipengele lazima iwepo.',
    'regex'                => 'Muundo wa kipengele si halali.',
    'required'             => 'Sehemu ya kipengele inahitajika.',
    'required_if'          => 'Sehemu ya kipengele inahitajika wakati :other ni :value.',
    'required_unless'      => 'Sehemu ya kipengele inahitajika isipokuwa :other ni katika :values.',
    'required_with'        => 'Sehemu ya kipengele inahitajika wakati :values vipo.',
    'required_with_all'    => 'Sehemu ya kipengele inahitajika wakati :values vipo.',
    'required_without'     => 'Sehemu ya kipengele inahitajika wakati :values havipo.',
    'required_without_all' => 'Sehemu ya kipengele inahitajika wakati hakuna hata moja ya :values ipo.',
    'same'                 => 'Kipengele na :other lazima vilingane.',
    'size'                 => [
        'numeric' => 'Kipengele lazima kiwe :size.',
        'file'    => 'Kipengele lazima kiwe :size cha kilobaiti.',
        'string'  => 'Kipengele lazima kiwe :size cha herufi.',
        'array'   => 'Kipengele lazima kiwe chenye :size vya kipimo.',
    ],
    'string'               => 'Kipengele lazima kiwe kidwe.',
    'timezone'             => 'Kipengele lazima kiwe ukanda halali.',
    'unique'               => 'Kipengele tayari kimechukuliwa.',
    'uploaded'             => 'The :attribute failed to upload.',
    'url'                  => 'Muundo wa kipengele si halali.',
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
            'rule-name' => 'ujumbe wa desturi',
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
        'test_name'               => 'Jina la jaribio',
        'test_description'        => 'Maelezo ya jaribio',
        'test_locale'             => 'Lugha',
        'image'                   => 'Picha',
        'result_text_under_image' => 'Maandishi ya matokeo chini ya picha',
        'short_text'              => 'Maandishi mafupi',
    ],
];
