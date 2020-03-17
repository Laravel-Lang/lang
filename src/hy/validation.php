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

    'accepted'        => ':attribute դաշտը պետք է ընդունվի։',
    'active_url'      => ':attribute դաշտը վավեր URL չէ։',
    'after'           => ':attribute դաշտի ամսաթիվը պետք է լինի :date-ից հետո։',
    'after_or_equal'  => ':attribute դաշտի ամսաթիվը պետք է լինի :date կամ դրանից հետո։',
    'alpha'           => ':attribute դաշտը պետք է պարունակի միայն տառեր։',
    'alpha_dash'      => ':attribute դաշտը պետք է պարունակի միայն տառեր, թվեր, գծիկներ և ընդգծումներ։',
    'alpha_num'       => ':attribute դաշտը պետք է պարունակի միայն տառեր և թվեր։',
    'array'           => ':attribute դաշտը պետք է լինի զանգված։',
    'before'          => ':attribute դաշտի ամսաթիվը պետք է լինի :date-ից առաջ։',
    'before_or_equal' => ':attribute դաշտի ամսաթիվը պետք է լինի :date կամ դրանից առաջ։',
    'between'         => [
        'numeric' => ':attribute դաշտը պետք է լինի :min և :max թվերի միջև։',
        'file'    => ':attribute դաշտի ֆայլի չափը պետք է լինի :min և :max կիլոբայթի միջև։',
        'string'  => ':attribute դաշտը պետք է ունենա :min-ից :max նիշ։',
        'array'   => ':attribute դաշտում էլեմենտների քանակը պետք է լինի :min-ի և :max-ի միջև։',
    ],
    'boolean'        => ':attribute դաշտի արժեքը պետք է լինի ճշմարիտ կամ կեղծ։',
    'confirmed'      => ':attribute դաշտը չի համապատասխանում հաստատմանը։',
    'date'           => ':attribute դաշտը վավեր ամսաթիվ չէ։',
    'date_equals'    => ':attribute դաշտի ամսաթիվը պետք է լինի :date։',
    'date_format'    => ':attribute դաշտը չի համապատասխանում :format ձևաչափին։',
    'different'      => ':attribute և :other դաշտերը պետք է լինեն տարբեր։',
    'digits'         => ':attribute դաշտի թվանշանների քանակը պետք է լինի :digits։',
    'digits_between' => ':attribute դաշտի թվանշանների քանակը պետք է լինի :min-ից :max։',
    'dimensions'     => ':attribute դաշտը ունի անվավեր նկարի չափեր։',
    'distinct'       => ':attribute դաշտը ունի կրկնվող արժեք։',
    'email'          => ':attribute դաշտը պետք է լինի վավերական Էլ․ հասցե։',
    'ends_with'      => ':attribute դաշտը պետք է ավարտվի հետևյալ արժեքներից մեկով․ :values։',
    'exists'         => ':attribute դաշտի ընտրված արժեքն անվավեր է։',
    'file'           => ':attribute-ը պետք է լինի ֆայլ։',
    'filled'         => ':attribute դաշտը պետք է անպայման ունենա արժեք։',
    'gt'             => [
        'numeric' => ':attribute դաշտը պետք է լինի :value-ից մեծ։',
        'file'    => ':attribute դաշտի ֆայլի չափը պետք է լինի :value կիլոբայթից մեծ։',
        'string'  => ':attribute դաշտի նիշերի քանակը պետք է գերազանցի :value-ը։',
        'array'   => ':attribute դաշտում էլեմենտների քանակը պետք է լինի :value-ից մեծ։',
    ],
    'gte' => [
        'numeric' => ':attribute դաշտը պետք է մեծ կամ հավասար լինի :value-ից։',
        'file'    => ':attribute դաշտի ֆայլի չափը պետք է մեծ կամ հավասար լինի :value կիլոբայթից։',
        'string'  => ':attribute դաշտի նիշերի քանակը պետք է մեծ կամ հավասար լինի :value-ից։',
        'array'   => ':attribute դաշտում էլեմենտների քանակը պետք է մեծ կամ հավասար լինի :value-ից։',
    ],
    'image'    => ':attribute դաշտը պետք է լինի նկար։',
    'in'       => ':attribute դաշտի ընտրված արժեքն անվավեր է։',
    'in_array' => ':attribute դաշտը գոյություն չունի :other-ում։',
    'integer'  => ':attribute դաշտը պետք է լինի ամբողջ թիվ։',
    'ip'       => ':attribute դաշտը պետք է լինի վավեր IP հասցե.',
    'ipv4'     => ':attribute դաշտը պետք է լինի վավեր IPv4 հասցե։',
    'ipv6'     => ':attribute դաշտը պետք է լինի վավեր IPv6 հասցե։',
    'json'     => ':attribute դաշտը պետք է լինի վավեր JSON տեքստ։',
    'lt'       => [
        'numeric' => ':attribute դաշտը պետք է փոքր լինի :value-ից։',
        'file'    => ':attribute դաշտի ֆայլի չափը պետք է փոքր լինի :value կիլոբայթից։',
        'string'  => ':attribute դաշտը պետք է ունենա :value-ից պակաս նիշեր։',
        'array'   => ':attribute դաշտում էլեմենտների քանակը պետք է փոքր լինի :value-ից։',
    ],
    'lte' => [
        'numeric' => ':attribute դաշտը պետք է փոքր կամ հավասար լինի :value-ից։',
        'file'    => ':attribute դաշտի ֆայլի չափը պետք է փոքր կամ հավասար լինի :value կիլոբայթից։',
        'string'  => ':attribute դաշտի նիշերի քանակը պետք է փոքր կամ հավասար լինի :value-ից։',
        'array'   => ':attribute դաշտում էլեմենտների քանակը պետք է փոքր կամ հավասար լինի :value-ից։',
    ],
    'max' => [
        'numeric' => ':attribute դաշտը չի կարող լինել :max-ից մեծ։',
        'file'    => ':attribute դաշտի ֆայլի չափը չպետք է գերազանցի :max կիլոբայթը։',
        'string'  => ':attribute դաշտի նիշերի քանակը չի կարող լինել :max-ց մեծ։',
        'array'   => ':attribute դաշտում էլեմենտների քանակը չպետք է գերազանցի :max-ը։',
    ],
    'mimes'     => ':attribute դաշտի ֆայլի տեսակը պետք է լինի հետևյալներից մեկը․ :values։',
    'mimetypes' => ':attribute դաշտի ֆայլի տեսակը պետք է լինի հետևյալներից մեկը․ :values։',
    'min'       => [
        'numeric' => ':attribute դաշտը պետք է լինի առնվազն :min։',
        'file'    => ':attribute դաշտի ֆայլի չափը պետք է լինի առնվազն :min կիլոբայթ։',
        'string'  => ':attribute դաշտի նիշերի քանակը պետք է լինի առնվազն :min։',
        'array'   => ':attribute դաշտում էլեմենտների քանակը պետք է լինի առնվազն :min։',
    ],
    'not_in'               => ':attribute դաշտի ընտրված արժեքն անվավեր է։',
    'not_regex'            => ':attribute դաշտի ձևաչափը սխալ է։',
    'numeric'              => ':attribute դաշտը պետք է լինի թիվ։',
    'password'             => 'Գաղտնաբառը սխալ է։',
    'present'              => ':attribute դաշտը պետք է առկա լինի։',
    'regex'                => ':attribute դաշտի ձևաչափը սխալ է։',
    'required'             => ':attribute դաշտը պարտադիր է։',
    'required_if'          => ':attribute դաշտը պարտադիր է երբ :other-ը հավասար է :value։',
    'required_unless'      => ':attribute դաշտը պարտադիր է քանի դեռ :other-ը հավասար չէ :values։',
    'required_with'        => ':attribute դաշտը պարտադիր է երբ :values արժեքն առկա է։',
    'required_with_all'    => ':attribute դաշտը պարտադիր է երբ :values արժեքները առկա են։',
    'required_without'     => ':attribute դաշտը պարտադիր է երբ :values արժեքը նշված չէ։',
    'required_without_all' => ':attribute դաշտը պարտադիր է երբ :values արժեքներից ոչ մեկը նշված չեն։',
    'same'                 => ':attribute և :other դաշտերը պետք է համընկնեն։',
    'size'                 => [
        'numeric' => ':attribute դաշտը պետք է հավասար լինի :size-ի։',
        'file'    => ':attribute դաշտում ֆայլի չափը պետք է լինի :size կիլոբայթ։',
        'string'  => ':attribute դաշտը պետք է ունենա :size նիշ։',
        'array'   => ':attribute դաշտը պետք է պարունակի :size էլեմենտ։',
    ],
    'starts_with' => ':attribute դաշտը պետք է սկսվի հետևյալ արժեքներից մեկով․ :values։',
    'string'      => ':attribute դաշտը պետք է լինի տեքստ։',
    'timezone'    => ':attribute դաշտը պետք է լինի վավեր ժամային գոտի։',
    'unique'      => ':attribute-ի տվյալ արժեքն արդեն գոյություն ունի։',
    'uploaded'    => ':attribute-ի վերբեռնումը ձախողվել է։',
    'url'         => ':attribute դաշտի ձևաչափը սխալ է։',
    'uuid'        => ':attribute դաշտը պետք է լինի վավեր UUID։',

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
        'name'                  => 'Անուն',
        'username'              => 'Օգտանուն',
        'email'                 => 'Էլ-փոստի հասցե',
        'first_name'            => 'Անուն',
        'last_name'             => 'Ազգանուն',
        'password'              => 'Գաղտնաբառ',
        'password_confirmation' => 'Գաղտնաբառի հաստատում',
        'city'                  => 'Քաղաք',
        'country'               => 'Երկիր',
        'address'               => 'Հասցե',
        'phone'                 => 'Հեռախոսահամար',
        'mobile'                => 'Բջջ. հեռ.',
        'age'                   => 'Տարիք',
        'sex'                   => 'Սեռ',
        'gender'                => 'Սեռ',
        'day'                   => 'Օր',
        'month'                 => 'Ամիս',
        'year'                  => 'Տարի',
        'hour'                  => 'Ժամ',
        'minute'                => 'Րոպե',
        'second'                => 'Վայրկյան',
        'title'                 => 'Վերնագիր',
        'content'               => 'Բովանդակություն',
        'description'           => 'Նկարագրություն',
        'excerpt'               => 'Քաղվածք',
        'date'                  => 'Ամսաթիվ',
        'time'                  => 'Ժամանակ',
        'available'             => 'Առկա',
        'size'                  => 'Չափ',
    ],
];
