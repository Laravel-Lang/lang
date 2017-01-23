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
    'after'                => 'Kipengele lazima kiwe tarehe baada ya :tarehe.',
    'alpha'                => 'Kipengele huenda kikawa tu chenye herufi.',
    'alpha_dash'           => 'Kipengele huenda kikawa tu chenye herufi, na vistari.',
    'alpha_num'            => 'Kipengele huenda kikawa tu chenye herufi na nambari.',
    'array'                => 'Kipengele lazima kiwe safu.',
    'before'               => 'Kipengele lazima kiwe tarehe kabla ya :tarehe.',
    'between'              => [
        'numeric' => 'Kipengele lazima kiwe kati ya :kiwango cha chini na :kiwango cha juu.',
        'file'    => 'Kipengele lazima kiwe kati ya :kiwango cha chini na :kiwango cha juu cha kilobaiti.',
        'string'  => 'Kipengele lazima kiwe kati ya :kiwango cha chini na :kiwango cha juu cha herufi.',
        'array'   => 'Kipengele lazima kiwe na kati ya :kiwango cha chini na :kiwango cha juu cha vifungu.',
    ],
    'boolean'              => 'Sehemu ya kipengele lazima iwe kweli au si kweli.',
    'confirmed'            => 'Uthibitisho wa kipengele haulingani.',
    'date'                 => 'Kipengele si tarehe halali.',
    'date_format'          => 'Kipengele hakilingani na muundo :muundo.',
    'different'            => 'Kipengele na :nyingine lazima viwe tofauti.',
    'digits'               => 'Kipengele lazima kiwe :tarakimu tarakimu.',
    'digits_between'       => 'Kipengele lazima kiwe kati ya :kiwango cha chini na :kiwango cha juu cha tarakimu.',
    'distinct'             => 'Sehemu ya kipengele ina thamani rudufu.',
    'email'                => 'Kipengele lazima kiwe anuani halali ya barua pepe.',
    'exists'               => 'Kipengele kilichochaguliwa si halali.',
    'filled'               => 'Sehemu ya kipengele inahitajika.',
    'image'                => 'Kipengele lazima kiwe picha.',
    'in'                   => 'Kipengele kilichochaguliwa si halali.',
    'in_array'             => 'Sehemu ya kipengele haipo katika :nyingine.',
    'integer'              => 'Kipengele lazima kiwe nambari kamili.',
    'ip'                   => 'Kipengele lazima kiwe anuani halali ya Itifaki ya Intaneti.',
    'json'                 => 'Kipengele lazima kiwe kidwe halali cha Nukuu ya Java.',
    'max'                  => [
        'numeric' => 'Kipengele huenda si kikubwa kuliko :kiwango cha juu.',
        'file'    => 'Kipengele huenda si kikubwa kuliko :kiwango cha juu cha kilobaiti.',
        'string'  => 'Kipengele huenda si kikubwa kuliko :kiwango cha juu cha herufi.',
        'array'   => 'Kipengele huenda kisiwe na zaidi ya :kiwango cha juu cha vifungu.',
    ],
    'mimes'                => 'Kipengele lazima kiwe faili ya aina: :viwango.',
    'min'                  => [
        'numeric' => 'Kipengele lazima kiwe angalau :kiwango cha chini.',
        'file'    => 'Kipengele lazima kiwe angalau :kiwango cha chini cha kilobaiti.',
        'string'  => 'Kipengele lazima kiwe angalau :kiwango cha chini cha herufi.',
        'array'   => 'Kipengele lazima kiwe na angalau :kiwango cha chini cha vifungu.',
    ],
    'not_in'               => 'Kipengele kilichochaguliwa si halali.',
    'numeric'              => 'Kipengele lazima kiwe nambari.',
    'present'              => 'Sehemu ya kipengele lazima iwepo.',
    'regex'                => 'Muundo wa kipengele si halali.',
    'required'             => 'Sehemu ya kipengele inahitajika.',
    'required_if'          => 'Sehemu ya kipengele inahitajika wakati :nyingine ni :kiwango.',
    'required_unless'      => 'Sehemu ya kipengele inahitajika isipokuwa :nyingine ni katika :viwango.',
    'required_with'        => 'Sehemu ya kipengele inahitajika wakati :viwango vipo.',
    'required_with_all'    => 'Sehemu ya kipengele inahitajika wakati :viwango vipo.',
    'required_without'     => 'Sehemu ya kipengele inahitajika wakati :viwango havipo.',
    'required_without_all' => 'Sehemu ya kipengele inahitajika wakati hakuna hata moja ya :viwango ipo.',
    'same'                 => 'Kipengele na :nyingine lazima vilingane.',
    'size'                 => [
        'numeric' => 'Kipengele lazima kiwe :kipimo.',
        'file'    => 'Kipengele lazima kiwe :kipimo cha kilobaiti.',
        'string'  => 'Kipengele lazima kiwe :kipimo cha herufi.',
        'array'   => 'Kipengele lazima kiwe chenye :vifungu vya kipimo.',
    ],
    'string'               => 'Kipengele lazima kiwe kidwe.',
    'timezone'             => 'Kipengele lazima kiwe ukanda halali.',
    'unique'               => 'Kipengele tayari kimechukuliwa.',
    'url'                  => 'Muundo wa kipengele si halali.',

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
