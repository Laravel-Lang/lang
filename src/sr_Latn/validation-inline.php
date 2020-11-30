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

    'accepted'        => 'Ovo polje mora biti prihvaćeno.',
    'active_url'      => 'Ovo nije validan URL.',
    'after'           => 'Ovo mora biti datum posle :date.',
    'after_or_equal'  => 'Ovo polje mora da bude :date ili kasniji datum.',
    'alpha'           => 'Ovo polje može sadržati samo slova.',
    'alpha_dash'      => 'Ovo polje može sadržati samo slova, brojeve i povlake.',
    'alpha_num'       => 'Ovo polje može sadržati samo slova i brojeve.',
    'array'           => 'Ovo polje mora sadržati nekih niz stavki.',
    'before'          => 'Ovo mora biti datum pre :date.',
    'before_or_equal' => 'Ovo mora biti :date ili raniji datum.',
    'between'         => [
        'numeric' => 'Vrednost mora biti između :min - :max.',
        'file'    => 'Fajl mora da bude između :min - :max kilobajta.',
        'string'  => 'Rečenica mora ima imati najmanje :min a najviše :max slova.',
        'array'   => 'Niz mora imati najmanje :min, a najviše :max stavki.',
    ],
    'boolean'        => 'Ovo polje mora biti tačno ili netačno.',
    'confirmed'      => 'Potvrda se ne poklapa.',
    'date'           => 'Nije odgovarajući datum.',
    'date_equals'    => 'Mora da bude datum: :date.',
    'date_format'    => 'Ovo ne odgovora formatu: :format.',
    'different'      => 'Ova vrednost i :other moraju biti različite.',
    'digits'         => 'Ovo mora sadržati :digits cifri.',
    'digits_between' => 'Broj cifara mora biti između :min i :max.',
    'dimensions'     => 'Slika je izvan dozvoljenih dimenzija.',
    'distinct'       => 'Ovo polje ima dupliranu vrednost.',
    'email'          => 'Email mora da bude validan.',
    'ends_with'      => 'Polje mora da se završi sa nečim od sledećeg: :values.',
    'exists'         => 'Selektovana vrednost nije validna.',
    'file'           => 'Datoteka mora da bude fajl.',
    'filled'         => 'Polje je obavezno.',
    'gt'             => [
        'numeric' => 'Vrednost mora da bude veća od :value.',
        'file'    => 'Veličina fajla mora da bude veća od :value kilobajta.',
        'string'  => 'Rečenica mora sadrati više od :value slova.',
        'array'   => 'Niz mora sadržati više od :value stavki.',
    ],
    'gte' => [
        'numeric' => 'Vrednost mora da bude veća ili jednaka od :value.',
        'file'    => 'Veličina fajla mora da bude veća ili jednaka od :value kilobajta.',
        'string'  => 'Rečenica mora sadrati više ili jednako broju :value slova.',
        'array'   => 'Niz mora sadržati više od :value stavki ili jednako.',
    ],
    'image'    => 'Ovo mora biti slika.',
    'in'       => 'Izabrana vrednost nije validna.',
    'in_array' => 'Ova vrednost ne postoji u :other.',
    'integer'  => 'Ovo mora biti broj.',
    'ip'       => 'Ovo mora biti validna IP adresa.',
    'ipv4'     => 'Ovo mora da bude važeća IPv4 adresa.',
    'ipv6'     => 'Ovo mora da bude važeća IPv6 adresa.',
    'json'     => 'Ovo mora da bude važeća JSON format.',
    'lt'       => [
        'numeric' => 'Vrednost mora biti manja od :value.',
        'file'    => 'Veličina fajla mora da bude manja od :value kilobajta.',
        'string'  => 'Rečenica mora sadrati manje od :value slova.',
        'array'   => 'Niz mora sadržati manje od :value stavki.',
    ],
    'lte' => [
        'numeric' => 'Vrednost mora biti manja ili jednaka od :value.',
        'file'    => 'Veličina fajla mora da bude manja ili jednaka od :value kilobajta.',
        'string'  => 'Rečenica mora sadrati manje od jednak :value slova.',
        'array'   => 'Niz mora sadržati jednako kao :value ili manje stavki.',
    ],
    'max' => [
        'numeric' => 'Vrednost ne sme biti veća od :max.',
        'file'    => 'Veličina fajla ne sme biti veća od :max kilobajta.',
        'string'  => 'Rečenica me sme sadržati više od :max slova.',
        'array'   => 'Niz ne sme imati više od :max stavki.',
    ],
    'mimes'     => 'Ovo mora biti fajl tipa: :values.',
    'mimetypes' => 'Ovo mora biti fajl tipa: :values.',
    'min'       => [
        'numeric' => 'Vrednost mora biti najmanje :min.',
        'file'    => 'Veličina fajla mora da bude najmanje :min kilobajta.',
        'string'  => 'Rečenica mora da sadrži najmanje :min slova.',
        'array'   => 'Niz mora da ima najmanje :min stavki.',
    ],
    'multiple_of'          => 'The value must be a multiple of :value',
    'not_in'               => 'Selektovana vrednost nije validna.',
    'not_regex'            => 'Format nije validan.',
    'numeric'              => 'Ovo mora biti broj.',
    'password'             => 'Pogrešna lozinka.',
    'present'              => 'Ovo polje mora da bude prisutno..',
    'regex'                => 'Format nije validan.',
    'required'             => 'Ovo polje je obavezno.',
    'required_if'          => 'Ovo polje je obavezno kadakada polje :other sadrži :value.',
    'required_unless'      => 'Ovo polje je obavezno, osim ako je :other u :values.',
    'required_with'        => 'Ovo polje je obavezno kada :values postoji.',
    'required_with_all'    => 'Ovo polje je obavezno kada :values postoji.',
    'required_without'     => 'Ovo polje je obavezno kada :values ne postoji.',
    'required_without_all' => 'Ovo polje je obavezno kada nijedno od :values ne postoji.',
    'same'                 => 'Vrednost ovog polja se mora poklopiti sa jednim od sledećeg: :other.',
    'size'                 => [
        'numeric' => 'Vrednost mora biti :size.',
        'file'    => 'Veličina fajla mora biti :size kilobajta.',
        'string'  => 'Rečenica mora da sadrži :size slova.',
        'array'   => 'Niz mora da ima :size stavki.',
    ],
    'starts_with' => 'Ovo polje mora početi sa jednim od ponuđenih: :values.',
    'string'      => 'Mora biti rečenica.',
    'timezone'    => 'Mora biti validna vremenska zona.',
    'unique'      => 'Uneta vrednost već postoji.',
    'uploaded'    => 'Greška pri otpremanju.',
    'url'         => 'Format urla nije validan.',
    'uuid'        => 'Ovo mora biti važeći UUID.',

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

];
