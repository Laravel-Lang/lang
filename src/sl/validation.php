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

    'accepted'        => ':attribute mora biti sprejet.',
    'active_url'      => ':attribute ni pravilen.',
    'after'           => ':attribute mora biti za datumom :date.',
    'after_or_equal'  => ':attribute mora biti za ali enak :date.',
    'alpha'           => ':attribute lahko vsebuje samo črke.',
    'alpha_dash'      => ':attribute lahko vsebuje samo črke, številke in črtice.',
    'alpha_num'       => ':attribute lahko vsebuje samo črke in številke.',
    'array'           => ':attribute mora biti polje.',
    'before'          => ':attribute mora biti pred datumom :date.',
    'before_or_equal' => ':attribute mora biti pred ali enak :date.',
    'between'         => [
        'numeric' => ':attribute mora biti med :min in :max.',
        'file'    => ':attribute mora biti med :min in :max kilobajti.',
        'string'  => ':attribute mora biti med :min in :max znaki.',
        'array'   => ':attribute mora imeti med :min in :max elementov.',
    ],
    'boolean'        => ':attribute polje mora biti 1 ali 0',
    'confirmed'      => ':attribute potrditev se ne ujema.',
    'date'           => ':attribute ni veljaven datum.',
    'date_equals'    => ':attribute mora biti enak :date.',
    'date_format'    => ':attribute se ne ujema z obliko :format.',
    'different'      => ':attribute in :other mora biti drugačen.',
    'digits'         => ':attribute mora imeti :digits cifer.',
    'digits_between' => ':attribute mora biti med :min in :max ciframi.',
    'dimensions'     => ':attribute ima napačne dimenzije slike.',
    'distinct'       => ':attribute je duplikat.',
    'email'          => ':attribute mora biti veljaven e-poštni naslov.',
    'ends_with'      => 'The :attribute must end with one of the following: :values.',
    'exists'         => 'izbran :attribute je neveljaven.',
    'file'           => ':attribute mora biti datoteka.',
    'filled'         => ':attribute mora biti izpolnjen.',
    'gt'             => [
        'numeric' => ':attribute mora biti večji od :value.',
        'file'    => ':attribute mora biti večji od :value kilobajtov.',
        'string'  => ':attribute mora imeti več kot :value znakov.',
        'array'   => ':attribute mora imeti več kot :value elementov.',
    ],
    'gte' => [
        'numeric' => ':attribute mora biti večji ali enak :value.',
        'file'    => ':attribute mora biti večji ali enak :value kilobajtov.',
        'string'  => ':attribute mora imeti število znakov večje ali enako :value.',
        'array'   => ':attribute mora imeti število elementov enako ali večje od :value.',
    ],
    'image'    => ':attribute mora biti slika.',
    'in'       => 'izbran :attribute je neveljaven.',
    'in_array' => ':attribute ne obstaja v :other.',
    'integer'  => ':attribute mora biti število.',
    'ip'       => ':attribute mora biti veljaven IP naslov.',
    'ipv4'     => ':attribute mora biti veljaven IPv4 naslov.',
    'ipv6'     => ':attribute mora biti veljaven IPv6 naslov.',
    'json'     => ':attribute mora biti veljaven JSON tekst.',
    'lt'       => [
        'numeric' => ':attribute mora biti manjši od :value.',
        'file'    => ':attribute mora biti manjši od :value kilobajtov.',
        'string'  => ':attribute mora imeti manj kot :value znakov.',
        'array'   => ':attribute mora imeti manj kot :value elementov.',
    ],
    'lte' => [
        'numeric' => ':attribute mora biti manjši ali enak :value.',
        'file'    => ':attribute mora biti manjši ali enak od :value kilobajtov.',
        'string'  => ':attribute mora imeti število znakov manjše ali enako :value.',
        'array'   => ':attribute mora imeti število elementov manjše ali enako :value.',
    ],
    'max' => [
        'numeric' => ':attribute ne sme biti večje od :max.',
        'file'    => ':attribute ne sme biti večje :max kilobajtov.',
        'string'  => ':attribute ne sme biti večje :max znakov.',
        'array'   => ':attribute ne smejo imeti več kot :max elementov.',
    ],
    'mimes'     => ':attribute mora biti datoteka tipa: :values.',
    'mimetypes' => ':attribute mora biti datoteka tipa: :values.',
    'min'       => [
        'numeric' => ':attribute mora biti vsaj dolžine :min.',
        'file'    => ':attribute mora imeti vsaj :min kilobajtov.',
        'string'  => ':attribute mora imeti vsaj :min znakov.',
        'array'   => ':attribute mora imeti vsaj :min elementov.',
    ],
    'not_in'               => 'Izbran :attribute je neveljaven.',
    'not_regex'            => 'Format :attribute je neveljaven.',
    'numeric'              => ':attribute mora biti število.',
    'present'              => 'Polje :attribute mora biti prisotno.',
    'regex'                => 'Format polja :attribute je neveljaven.',
    'required'             => 'Polje :attribute je obvezno.',
    'required_if'          => 'Polje :attribute je obvezno, če je :other enak :value.',
    'required_unless'      => 'Polje :attribute je obvezno, razen če je :other v :values.',
    'required_with'        => 'Polje :attribute je obvezno, če je :values prisoten.',
    'required_with_all'    => 'Polje :attribute je obvezno, če so :values prisoten.',
    'required_without'     => 'Polje :attribute je obvezno, če :values ni prisoten.',
    'required_without_all' => 'Polje :attribute je obvezno, če :values niso prisotni.',
    'same'                 => 'Polje :attribute in :other se morata ujemati.',
    'size'                 => [
        'numeric' => ':attribute mora biti :size.',
        'file'    => ':attribute mora biti :size kilobajtov.',
        'string'  => ':attribute mora biti :size znakov.',
        'array'   => ':attribute mora vsebovati :size elementov.',
    ],
    'starts_with' => ':attribute se mora začeti z eno od naslednjih vrednosti: :values',
    'string'      => ':attribute mora biti tekst.',
    'timezone'    => ':attribute mora biti časovna cona.',
    'unique'      => ':attribute je že zaseden.',
    'uploaded'    => 'Nalaganje :attribute ni uspelo.',
    'url'         => ':attribute format je neveljaven.',
    'uuid'        => ':attribute mora biti veljaven UUID.',

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
            'rule-name' => 'Prilagojeno sporočilo',
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
