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

    'accepted'             => 'Polje :attribute mora biti prihvaćeno.',
    'active_url'           => 'Polje :attribute nije validan URL.',
    'after'                => 'Polje :attribute mora biti datum nakon :date.',
    'after_or_equal'       => 'Polje :attribute mora biti datum nakon ili jednak :date.',
    'alpha'                => 'Polje :attribute može sadržati samo slova.',
    'alpha_dash'           => 'Polje :attribute može sadržati samo slova, brojeve i povlake.',
    'alpha_num'            => 'Polje :attribute može sadržati samo slova i brojeve.',
    'array'                => 'Polje :attribute mora biti niz.',
    'before'               => 'Polje :attribute mora biti datum prije :date.',
    'before_or_equal'      => 'Polje :attribute mora biti datum prije ili jednak :date.',
    'between'              => [
        'numeric' => 'Polje :attribute mora imati vrijednost između :min i :max.',
        'file'    => 'Polje :attribute mora imati veličinu između :min i :max kilobajta.',
        'string'  => 'Polje :attribute mora sadržati između :min i :max znakova.',
        'array'   => 'Polje :attribute mora sadržati između :min i :max stavki.',
    ],
    'boolean'              => 'Polje :attribute mora biti tačno ili netačno.',
    'confirmed'            => 'Potvrda polja :attribute se ne poklapa.',
    'date'                 => 'Polje :attribute nema ispravan datum.',
    'date_equals'          => 'Polje :attribute mora biti datum jednak :date.',
    'date_format'          => 'Polje :attribute se ne poklapa s formatom :format.',
    'different'            => 'Polja :attribute i :other moraju biti različita.',
    'digits'               => 'Polje :attribute mora sardžati :digits broja.',
    'digits_between'       => 'Polje :attribute mora sardžati između :min i :max broja.',
    'dimensions'           => 'Dimenzije slike polja :attribute nisu validne.',
    'distinct'             => 'Polje :attribute ima dvostruku vrijednost.',
    'email'                => 'Format polja :attribute mora biti validan e-mail.',
    'ends_with'            => 'Polje :attribute se mora završiti s jednom od sljedećih vrijednosti: :values.',
    'exists'               => 'Odabrano polje :attribute nije validno.',
    'file'                 => 'Polje :attribute mora biti fajl.',
    'filled'               => 'Polje :attribute je mora sadržati vrijednost.',
    'gt'                   => [
        'numeric' => 'Polje :attribute mora imati vrijednost veću od :value.',
        'file'    => 'Polje :attribute mora imati veličinu veću od :value kilobajta.',
        'string'  => 'Polje :attribute mora sadržati više od :value znakova.',
        'array'   => 'Polje :attribute mora sadržati više od :value stavki.',
    ],
    'gte'                  => [
        'numeric' => 'Polje :attribute mora imati vrijednost veću ili jednaku :value.',
        'file'    => 'Polje :attribute mora imati veličinu veću ili jednaku :value kilobajta.',
        'string'  => 'Polje :attribute mora sadržati :value znakova ili više.',
        'array'   => 'Polje :attribute mora sadržati :value stavki ili više.',
    ],
    'image'                => 'Polje :attribute mora biti slika.',
    'in'                   => 'Odabrano polje :attribute nije validno.',
    'in_array'             => 'Polje :attribute ne postoji u :other.',
    'integer'              => 'Polje :attribute mora biti broj.',
    'ip'                   => 'Polje :attribute mora biti validna IP adresa.',
    'ipv4'                 => 'Polje :attribute mora biti validna IPv4 adresa.',
    'ipv6'                 => 'Polje :attribute mora biti validna IPv6 adresa.',
    'json'                 => 'Polje :attribute mora biti validan JSON string.',
    'lt'                   => [
        'numeric' => 'Polje :attribute imati vrijednost manju od :value.',
        'file'    => 'Polje :attribute mora imati veličinu manju od :value kilobajta.',
        'string'  => 'Polje :attribute mora sadržati manje od :value znakova.',
        'array'   => 'Polje :attribute mora sadržati manje od :value stavki.',
    ],
    'lte'                  => [
        'numeric' => 'Polje :attribute mora imati vrijednost manju ili jednaku :value.',
        'file'    => 'Polje :attribute mora imati veličinu manju ili jednaku :value kilobajta.',
        'string'  => 'Polje :attribute ne može sadržati više od :value znakova.',
        'array'   => 'Polje :attribute ne može sadržati više od :value stavki.',
    ],
    'max'                  => [
        'numeric' => 'Polje :attribute mora imati vrijednost manju od :max.',
        'file'    => 'Polje :attribute mora imati veličinu manju od :max kilobajta.',
        'string'  => 'Polje :attribute mora sadržati manje od :max znakova.',
        'array'   => 'Polje :attribute mora sadržati manje od :max stavki.',
    ],
    'mimes'                => 'Polje :attribute mora biti fajl tipa: :values.',
    'mimetypes'            => 'Polje :attribute mora biti fajl tipa: :values.',
    'min'                  => [
        'numeric' => 'Polje :attribute mora biti najmanje :min.',
        'file'    => 'Fajl :attribute mora biti najmanje :min kilobajta.',
        'string'  => 'Polje :attribute mora sadržati najmanje :min znakova.',
        'array'   => 'Polje :attribute mora sadržati najmanje :min stavki.',
    ],
    'multiple_of'          => 'Vrijednost polja :attribute mora biti djeljiva sa :value',
    'not_in'               => 'Odabrani element polja :attribute nije validan.',
    'not_regex'            => 'Format polja :attribute nije ispravan.',
    'numeric'              => 'Polje :attribute mora biti broj.',
    'password'             => 'Lozinka nije tačna.',
    'present'              => 'Polje :attribute mora biti prisutno.',
    'regex'                => 'Format polja :attribute nije ispravan.',
    'required'             => 'Polje :attribute je obavezno.',
    'required_if'          => 'Polje :attribute je obavezno kada :other ima vrijednost :value.',
    'required_unless'      => 'Polje :attribute je obavezno osim ako vrijednost polja :other postoji u sljedećem nizu: :values.',
    'required_with'        => 'Polje :attribute je obavezno kada je bar jedno od polja :values prisutno.',
    'required_with_all'    => 'Polje :attribute je obavezno kada su polja :values prisutna.',
    'required_without'     => 'Polje :attribute je obavezno kada je bar jedno od polja :values nije prisutno.',
    'required_without_all' => 'Polje :attribute je obavezno kada polja :values nisu prisutna.',
    'same'                 => 'Polja :attribute i :other se moraju poklapati.',
    'size'                 => [
        'numeric' => 'Polje :attribute mora biti :size.',
        'file'    => 'Fajl :attribute mora biti :size kilobajta.',
        'string'  => 'Polje :attribute mora biti :size znakova.',
        'array'   => 'Polje :attribute mora biti :size znakova.',
    ],
    'starts_with'          => 'Polje :attribute mora početi s jednom od sljedećih vrijednosti: :values.',
    'string'               => 'Polje :attribute mora sadrzavati slova.',
    'timezone'             => 'Polje :attribute mora biti ispravna vremenska zona.',
    'unique'               => 'Polje :attribute već postoji.',
    'uploaded'             => 'Učitavanje polja :attribute nije uspjelo.',
    'url'                  => 'Format polja :attribute nije validan.',
    'uuid'                 => 'Polje :attribute mora biti validan UUID.',

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
