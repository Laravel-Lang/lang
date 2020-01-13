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

    'accepted'        => 'Polje :attribute mora biti prihvaćeno.',
    'active_url'      => 'Polje :attribute nije validan URL.',
    'after'           => 'Polje :attribute mora biti datum posle :date.',
    'after_or_equal'  => 'Polje :attribute mora da bude :date ili kasniji datum.',
    'alpha'           => 'Polje :attribute može sadržati samo slova.',
    'alpha_dash'      => 'Polje :attribute može sadržati samo slova, brojeve i povlake.',
    'alpha_num'       => 'Polje :attribute može sadržati samo slova i brojeve.',
    'array'           => 'Polje :attribute mora sadržati nekih niz stavki.',
    'before'          => 'Polje :attribute mora biti datum pre :date.',
    'before_or_equal' => ':attribute mora da bude :date ili raniji datum.',
    'between'         => [
        'numeric' => 'Polje :attribute mora biti između :min - :max.',
        'file'    => 'Fajl :attribute mora biti između :min - :max kilobajta.',
        'string'  => 'Polje :attribute mora biti između :min - :max karaktera.',
        'array'   => 'Polje :attribute mora biti između :min - :max stavki.',
    ],
    'boolean'        => 'Polje :attribute mora biti tačno ili netačno',
    'confirmed'      => 'Potvrda polja :attribute se ne poklapa.',
    'date'           => 'Polje :attribute nije važeći datum.',
    'date_equals'    => 'Polje :attribute mora da bude datum: :date.',
    'date_format'    => 'Polje :attribute ne odgovora prema formatu :format.',
    'different'      => 'Polja :attribute i :other moraju biti različita.',
    'digits'         => 'Polje :attribute mora sadržati :digits šifri.',
    'digits_between' => 'Polje :attribute mora biti izemđu :min i :max šifri.',
    'dimensions'     => 'Polje :attribute ime nedozvoljene dimenzije slike.',
    'distinct'       => 'Polje :attribute ima dupliranu vrednost.',
    'email'          => 'Format polja :attribute nije validan.',
    'ends_with'      => 'The :attribute must end with one of the following: :values.',
    'exists'         => 'Odabrano polje :attribute nije validno.',
    'file'           => ':attribute mora da bude datoteka.',
    'filled'         => 'Polje :attribute je obavezno.',
    'gt'             => [
        'numeric' => 'Polje :attribute mora da bude veći od :value.',
        'file'    => 'Polje :attribute mora da bude veći od :value kilobajta.',
        'string'  => 'Polje :attribute mora da sadrži više od :value znakova.',
        'array'   => 'Polje :attribute mora da sadrži više od :value stavke.',
    ],
    'gte' => [
        'numeric' => 'Polje :attribute mora da bude :value ili veći.',
        'file'    => 'Polje :attribute mora da ima :value ili više kilobajta.',
        'string'  => 'Polje :attribute mora da sadrži :value ili više znakova.',
        'array'   => 'Polje :attribute mora da sadrži :value stavki ili više.',
    ],
    'image'    => 'Polje :attribute mora biti slika.',
    'in'       => 'Polje Odabrano polje :attribute nije validno.',
    'in_array' => 'Polje :attribute ne postoji u :other.',
    'integer'  => 'Polje :attribute mora biti broj.',
    'ip'       => 'Polje :attribute mora biti validna IP adresa.',
    'ipv4'     => 'Polje :attribute mora da bude važeća IPv4 adresa.',
    'ipv6'     => 'Polje :attribute mora da bude važeća IPv6 adresa.',
    'json'     => 'Polje :attribute mora da bude važeća JSON niska.',
    'lt'       => [
        'numeric' => 'Polje :attribute mora da bude manji od :value.',
        'file'    => 'Polje :attribute mora da bude manji od :value kilobajta.',
        'string'  => 'Polje :attribute mora da sadrži manje od :value znakova.',
        'array'   => 'Polje :attribute mora da sadrži manje od :value stavki.',
    ],
    'lte' => [
        'numeric' => 'Polje :attribute mora da bude :value ili manji.',
        'file'    => 'Polje :attribute mora da bude manji od :value kilobajta.',
        'string'  => 'Polje :attribute mora da sadrži :value ili manje znakova.',
        'array'   => 'Polje :attribute ne sme da sadrži više od :value stavki.',
    ],
    'max' => [
        'numeric' => 'Polje :attribute mora biti manje od :max.',
        'file'    => 'Polje :attribute mora biti manje od :max kilobajta.',
        'string'  => 'Polje :attribute mora sadržati manje od :max karaktera.',
        'array'   => 'Polje :attribute ne smije da image više od :max stavki.',
    ],
    'mimes'     => 'Polje :attribute mora biti fajl tipa: :values.',
    'mimetypes' => 'Polje :attribute mora biti fajl tipa: :values.',
    'min'       => [
        'numeric' => 'Polje :attribute mora biti najmanje :min.',
        'file'    => 'Fajl :attribute mora biti najmanje :min kilobajta.',
        'string'  => 'Polje :attribute mora sadržati najmanje :min karaktera.',
        'array'   => 'Polje :attribute mora sadrzati najmanje :min stavku.',
    ],
    'not_in'               => 'Odabrani element polja :attribute nije validan.',
    'not_regex'            => 'Format :attribute je nevažeći.',
    'numeric'              => 'Polje :attribute mora biti broj.',
    'present'              => 'Polje :attribute mora da bude prisutno.',
    'regex'                => 'Format polja :attribute nije validan.',
    'required'             => 'Polje :attribute je obavezno.',
    'required_if'          => 'Polje :attribute je potrebno kada polje :other sadrži :value.',
    'required_unless'      => 'Polje :attribute je obavezno, osim ako je :other u :values.',
    'required_with'        => 'Polje :attribute je potrebno kada polje :values je prisutan.',
    'required_with_all'    => 'Polje :attribute je obavezno kada je :values prikazano.',
    'required_without'     => 'Polje :attribute je potrebno kada polje :values nije prisutan.',
    'required_without_all' => 'Polje :attribute je potrebno kada nijedan od sledeći polja :values nisu prisutni.',
    'same'                 => 'Polja :attribute i :other se moraju poklapati.',
    'size'                 => [
        'numeric' => 'Polje :attribute mora biti :size.',
        'file'    => 'Fajl :attribute mora biti :size kilobajta.',
        'string'  => 'Polje :attribute mora biti :size karaktera.',
        'array'   => 'Polje :attribute mora sadržati :size stavki.',
    ],
    'starts_with' => 'Polje :attribute mora da počne sa: :values',
    'string'      => 'Polje :attribute mora sadržati slova.',
    'timezone'    => 'Polje :attribute mora biti ispravna vremenska zona.',
    'unique'      => 'Polje :attribute već postoji.',
    'uploaded'    => ':attribute nije otpremljen.',
    'url'         => 'Format polja :attribute ne važi.',
    'uuid'        => ':attribute mora da bude važeći UUID.',

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
