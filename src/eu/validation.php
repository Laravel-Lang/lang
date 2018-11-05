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

    'accepted'             => ':attribute onartua izan behar da.',
    'active_url'           => ':attribute ez da baliozko URL bat.',
    'after'                => ':attribute :date osteko data izan behar da.',
    'after_or_equal'       => ':attribute :date osteko data edo data berdina izan behar da.',
    'alpha'                => ':attribute hizkiak besterik ezin ditu izan.',
    'alpha_dash'           => ':attribute hizkiak, zenbakiak eta marrak besterik ezin ditu izan.',
    'alpha_num'            => ':attribute hizkiak eta zenbakiak besterik ezin ditu izan.',
    'array'                => ':attribute bilduma izan behar da.',
    'before'               => ':attribute :date aurreko data izan behar da.',
    'before_or_equal'      => ':attribute :date aurreko data edo data berdina izan behar da.',
    'between'              => [
        'numeric' => ':attribute :min eta :max artean egon behar da.',
        'file'    => ':attribute-k :min eta :max kilobyte arteko pisua izan behar du.',
        'string'  => ':attribute :min eta :max karaktere artean egon behar da.',
        'array'   => ':attribute-k :min eta :max arteko ale kantitatea euki behar du.',
    ],
    'boolean'              => ':attribute-ren balioa egia edo gezurra izan behar da.',
    'confirmed'            => ':attribute-ren konfirmazioa ez dator bat.',
    'date'                 => ':attribute ez da baliozko data.',
    'date_format'          => ':attribute datak ez du :format formatua.',
    'different'            => ':attribute eta :other ezberdinak izan behar dira.',
    'digits'               => ':attribute-k :digits digitu euki behar ditu.',
    'digits_between'       => ':attribute-k :min eta :max arteko digitu kantitatea euki behar du.',
    'dimensions'           => ':attribute-k ez ditu irudi neurri aproposak.',
    'distinct'             => ':attribute-k balio bikoiztua dauka.',
    'email'                => ':attribute-k baliozko posta helbidea euki behar du.',
    'exists'               => 'Hautatutako :attribute baliogabea da.',
    'file'                 => ':attribute fitxategi bat izan behar da.',
    'filled'               => ':attribute-k balioren bat euki behar du.',
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
    'image'                => ':attribute irudi bat izan behar da.',
    'in'                   => 'Hautatutako :attribute baliogabea da.',
    'in_array'             => ':attribute ez da :other-en existizen.',
    'integer'              => ':attribute zenbaki osoa izan behar da.',
    'ip'                   => ':attribute baliozko IP helbidea izan behar da.',
    'ipv4'                 => ':attribute baliozko IPv4 helbidea izan behar da.',
    'ipv6'                 => ':attribute baliozko IPv6 helbidea izan behar da.',
    'json'                 => ':attribute-k baliozko JSON karaktere-katea euki behar du.',
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
        'numeric' => ':attribute ezin da :max baino handiagoa izan.',
        'file'    => ':attribute-k ezin du :max kilobyte baino gehiagoko pisua euki.',
        'string'  => ':attribute-k ezin du :max karaktere baino gehiago euki.',
        'array'   => ':attribute-k ezin du :max ale baino gehiago euki.',
    ],
    'mimes'                => ':attribute :values motatako fitxategia izan behar da.',
    'mimetypes'            => ':attribute :values motatako fitxategia izan behar da.',
    'min'                  => [
        'numeric' => ':attribute-k gutxienez :min-eko tamaina izan behar du.',
        'file'    => ':attribute-k gutxienez :min kilobyteko pisua euki behar du.',
        'string'  => ':attribute-k gutxienez :min karaktere euki behar ditu.',
        'array'   => ':attribute-k gutxienez :min ale euki behar ditu.',
    ],
    'not_in'               => 'Hautatutako :attribute baliogabea da.',
    'not_regex'            => 'The :attribute format is invalid.',
    'numeric'              => ':attribute zenbaki bat izan behar da.',
    'present'              => ':attribute bertan egon behar da.',
    'regex'                => ':attribute-k ez dauka formatu egokirik.',
    'required'             => ':attribute derrigorrezkoa da.',
    'required_if'          => ':attribute derrigorrezkoa da :other :value denean.',
    'required_unless'      => ':attribute derrigorrezkoa da :other :values-en egon ezean.',
    'required_with'        => ':attribute derrigorrezkoa da :values bertan dagoenean.',
    'required_with_all'    => ':attribute derrigorrezkoa da :values bertan dagoenean.',
    'required_without'     => ':attribute derrigorrezkoa da :values bertan ez dagoenean.',
    'required_without_all' => ':attribute derrigorrezkoa da :values bertan ez dagoenean.',
    'same'                 => ':attribute eta :other bat etorri behar dira.',
    'size'                 => [
        'numeric' => ':attribute-k :size-eko tamaina izan behar du.',
        'file'    => ':attribute-k :size kilobyteko pisua euki behar du.',
        'string'  => ':attribute-k :size karaktere euki beha ditu.',
        'array'   => ':attribute-k :size ale euki behar ditu.',
    ],
    'string'               => ':attribute karaktere-katea izan behar da.',
    'timezone'             => ':attribute baliozko gunea izan behar da.',
    'unique'               => ':attribute jadanik erregistratua izan da.',
    'uploaded'             => ':attribute igotzerakoan huts egin du.',
    'url'                  => ':attribute-k ez dauka formatu egokirik.',

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
        'name'                  => 'izena',
        'username'              => 'erabiltzailea',
        'email'                 => 'posta elektronikoa',
        'first_name'            => 'izena',
        'last_name'             => 'abizena',
        'password'              => 'pasahitza',
        'password_confirmation' => 'pasahitzaren konfirmazioa',
        'city'                  => 'hiria',
        'country'               => 'herrialde',
        'address'               => 'helbide',
        'phone'                 => 'telefonoa',
        'mobile'                => 'mugikorra',
        'age'                   => 'adin',
        'sex'                   => 'sexu',
        'gender'                => 'genero',
        'year'                  => 'urte',
        'month'                 => 'hilabete',
        'day'                   => 'egun',
        'hour'                  => 'ordu',
        'minute'                => 'minutu',
        'second'                => 'segundo',
        'title'                 => 'izenburu',
        'content'               => 'eduki',
        'body'                  => 'gorputz',
        'description'           => 'deskribapen',
        'excerpt'               => 'pasarte',
        'date'                  => 'data',
        'time'                  => 'denbora',
        'subject'               => 'gaia',
        'message'               => 'mezu',
        'available'             => 'erabilgarri',
        'size'                  => 'neurri',
    ],
];
