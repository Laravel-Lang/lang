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

    'accepted'             => 'Morate prihvatiti :attribute polje.',
    'active_url'           => 'Polje :attribute nije link.',
    'after'                => 'Polje :attribute mora da bude poslije :date.',
    'after_or_equal'       => 'Polje :attribute mora da bude :date ili kasniji datum.',
    'alpha'                => 'Polje :attribute mora da sadrži samo slova.',
    'alpha_dash'           => 'Polje :attribute može da sadrži samo slova, brojeve i povlake.',
    'alpha_num'            => 'Polje :attribute može da sadrži samo slova i brojeve.',
    'array'                => 'Polje :attribute mora da bude niz.',
    'before'               => 'Polje :attribute mora da bude datum prije :date.',
    'before_or_equal'      => 'Polje :attribute mora da bude :date ili raniji datum.',
    'between'              => [
        'numeric' => 'Vrijednost :attribute mora da bude između :min - :max.',
        'file'    => 'Veličina dokumenta :attribute mora da bude između :min i :max kb.',
        'string'  => 'Rečenica polja :attribute mora da ima najmanje :min a najviše :max znakova.',
        'array'   => 'Niz :attribute mora da ima najmanje :min, a najviše :max stavki.',
    ],
    'boolean'              => 'Polje :attribute mora da bude tačno ili netačno.',
    'confirmed'            => 'Potvrda za polje :attribute se ne poklapa.',
    'date'                 => 'Polje :attribute ne sadrži datum.',
    'date_equals'          => 'Polje :attribute mora da bude :date.',
    'date_format'          => 'Polje :attribute ne sadrži odgovarajući format: :format.',
    'different'            => 'Polje :attribute mora da ima različitu vrijednost od :other.',
    'digits'               => 'Polje :attribute mora da sadrži :digits cifara.',
    'digits_between'       => 'Polje :attribute mora da se sastoji između :min i :max cifara.',
    'dimensions'           => 'Ilustracija :attribute mora biti odgovarajućih dimenzija.',
    'distinct'             => 'Polje :attribute nema jedinstvenu vrijednost.',
    'email'                => 'Polje :attribute mora biti ispravna E-mail adresa.',
    'ends_with'            => 'Polje :attribute mora da se završi sa: :values.',
    'exists'               => 'Odabrana vrijednost za :attribute nije ispravna.',
    'file'                 => 'Polje :attribute mora da bude dokument.',
    'filled'               => 'Polje :attribute mora da sadrži podatak.',
    'gt'                   => [
        'numeric' => 'Polje :attribute mora da bude veće od :value.',
        'file'    => 'Veličina dokumenta :attribute mora da bude veća od :value kb.',
        'string'  => 'Polje :attribute mora da sadrži više od :value znakova.',
        'array'   => 'Niz :attribute mora da sadrži više od :value stavki.',
    ],
    'gte'                  => [
        'numeric' => 'Polje :attribute može da bude najmanje :value.',
        'file'    => 'Veličina dokumenta :attribute mora da bude :value kb ili veća.',
        'string'  => 'Polje :attribute mora da sadrži najmanje :value znakova.',
        'array'   => 'Niz :attribute mora da sadrži najmanje :value stavki.',
    ],
    'image'                => 'Polje :attribute mora da bude ilustracija.',
    'in'                   => 'Polje :attribute ne sadrži neku od predloženih vrijednosti.',
    'in_array'             => 'Vrijednost u polju :attribute nije sadržana u :other.',
    'integer'              => 'Vrijednost polja :attribute mora da bude broj.',
    'ip'                   => 'Polje :attribute mora da bude ispravna IP adresa.',
    'ipv4'                 => 'Polje :attribute mora da bude ispravna IPv4 adresa.',
    'ipv6'                 => 'Polje :attribute mora da bude ispravna IPv6 adresa.',
    'json'                 => 'Polje :attribute mora da bude u JSON formatu.',
    'lt'                   => [
        'numeric' => 'Polje :attribute mora da bude manje od :value.',
        'file'    => 'Veličina dokumenta :attribute mora da bude manja od :value kb.',
        'string'  => 'Polje :attribute mora da sadrži manje od :value znakova.',
        'array'   => 'Niz :attribute mora da sadrži manje od :value stavki.',
    ],
    'lte'                  => [
        'numeric' => 'Polje :attribute može da bude najviše :value.',
        'file'    => 'Veličina dokumenta :attribute mora da bude :value kb ili manja.',
        'string'  => 'Polje :attribute mora da sadrži najviše :value znakova.',
        'array'   => 'Niz :attribute mora da sadrži najviše :value stavki.',
    ],
    'max'                  => [
        'numeric' => 'Polje :attribute može da bude najviše :max.',
        'file'    => 'Veličina dokumenta :attribute mora da bude :max kb ili manja.',
        'string'  => 'Polje :attribute mora da sadrži najviše :max znakova.',
        'array'   => 'Niz :attribute mora da sadrži najviše :max stavki.',
    ],
    'mimes'                => 'Vrsta dokumenta za polje :attribute mora da bude: :values.',
    'mimetypes'            => 'Vrsta dokumenta za polje :attribute mora da bude: :values.',
    'min'                  => [
        'numeric' => 'Polje :attribute može da bude najmanje :min.',
        'file' => 'Veličina dokumenta :attribute mora da bude :min kb ili veća.',
        'string' => 'Polje :attribute mora da sadrži najmanje :min znakova.',
        'array' => 'Niz :attribute mora da sadrži najmanje :min stavki.',
    ],
    'multiple_of'          => 'Polje :attribute biti djeljivo sa :value',
    'not_in'               => 'Polje :attribute sadrži neku od nedozvoljenih vrijednosti.',
    'not_regex'            => 'Format polja :attribute nije ispravan.',
    'numeric'              => 'Polje :attribute mora da bude broj.',
    'password'             => 'Pogrešna lozinka.',
    'present'              => 'Polje :attribute nije označeno.',
    'regex'                => 'Format polja :attribute nije ispravan.',
    'required'             => 'Morate da popunite polje :attribute.',
    'required_if'          => 'Morate da popunite polje :attribute jer polje :other sadrži :value.',
    'required_unless'      => 'Morate da popunite polje :attribute, osim ako je :other sadržan u :values.',
    'required_with'        => 'Morate da popunite polje :attribute sa poljima :values.',
    'required_with_all'    => 'Morate da popunite polje :attribute sa poljima :values.',
    'required_without'     => 'Morate da popunite polje :attribute jer nisu popunjena polja :values.',
    'required_without_all' => 'Morate da popunite polje :attribute jer nisu popunjena polja :values.',
    'same'                 => 'Polje :attribute ovog polja se mora poklopiti sa jednim od sledećeg: :other.',
    'size'                 => [
        'numeric' => 'Polje :attribute mora da bude tačno :value.',
        'file'    => 'Veličina dokumenta :attribute mora da bude tačno :value k.',
        'string'  => 'Polje :attribute mora da sadrži tačno :value znakova.',
        'array'   => 'Niz :attribute mora da sadrži tačno :value stavki.',
    ],
    'starts_with'          => 'Polje :attribute mora da počne sa: :values.',
    'string'               => 'Polje :attribute mora da bude rečenica.',
    'timezone'             => 'Polje :attribute mora da bude ispravna vremenska zona.',
    'unique'               => 'Unijeta vrijednost za :attribute već postoji.',
    'uploaded'             => 'Greška pri postavljanju dokumenata.',
    'url'                  => 'Polje :attribute nije link.',
    'uuid'                 => 'Polje :attribute nije pretstavljen kao jedinstveni identifikator.',

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
        'name'                  => 'ime',
        'username'              => 'korisničko ime',
        'email'                 => 'email',
        'first_name'            => 'ime',
        'last_name'             => 'prezime',
        'password'              => 'lozinka',
        'password_confirmation' => 'provjera lozinke',
        'city'                  => 'grad',
        'country'               => 'država',
        'address'               => 'adresa',
        'phone'                 => 'telefon',
        'mobile'                => 'mobilni',
        'age'                   => 'godine',
        'sex'                   => 'pol',
        'gender'                => 'pol',
        'year'                  => 'godina',
        'month'                 => 'mjesec',
        'day'                   => 'dan',
        'hour'                  => 'sat',
        'minute'                => 'minuti',
        'second'                => 'sekunde',
        'title'                 => 'naslov',
        'body'                  => 'sadržaj',
        'description'           => 'opis',
        'excerpt'               => 'siže',
        'date'                  => 'datum',
        'time'                  => 'vrijeme',
        'subject'               => 'naslov',
        'message'               => 'poruka',
    ],

    'values' => [
        'payment_type' => [
            'cc' => 'kreditna kartica',
        ],
    ],
];
