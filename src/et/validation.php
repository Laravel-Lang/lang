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

    'accepted'             => ':attribute tuleb aktsepteerida.',
    'active_url'           => ':attribute ei ole kehtiv URL.',
    'after'                => ':attribute peab olema kuupäev pärast :date.',
    'after_or_equal'       => ':attribute peab olema kuupäev pärast või samastuma :date.',
    'alpha'                => ':attribute võib sisaldada vaid tähemärke.',
    'alpha_dash'           => ':attribute võib sisaldada vaid tähti, numbreid ja kriipse.',
    'alpha_num'            => ':attribute võib sisaldada vaid tähti ja numbreid.',
    'array'                => ':attribute peab olema massiiv.',
    'before'               => ':attribute peab olema kuupäev enne :date.',
    'before_or_equal'      => ':attribute peab olema kuupäev enne või samastuma :date.',
    'between'              => [
        'numeric' => ':attribute peab olema :min ja :max vahel.',
        'file'    => ':attribute peab olema :min ja :max kilobaidi vahel.',
        'string'  => ':attribute peab olema :min ja :max tähemärgi vahel.',
        'array'   => ':attribute peab olema :min ja :max kirje vahel.',
    ],
    'boolean'              => ':attribute väli peab olema tõene või väär.',
    'confirmed'            => ':attribute kinnitus ei vasta.',
    'date'                 => ':attribute pole kehtiv kuupäev.',
    'date_equals'          => ':attribute peab olema kuupäev väärtusega :date',
    'date_format'          => ':attribute ei vasta formaadile :format.',
    'different'            => ':attribute ja :other peavad olema erinevad.',
    'digits'               => ':attribute peab olema :digits numbrit.',
    'digits_between'       => ':attribute peab olema :min ja :max numbri vahel.',
    'dimensions'           => ':attribute on valed pildi suurused.',
    'distinct'             => ':attribute väljal on topeltväärtus.',
    'email'                => ':attribute peab olema kehtiv e-posti aadress.',
    'ends_with'            => 'The :attribute must end with one of the following: :values.',
    'exists'               => 'Valitud :attribute on vigane.',
    'file'                 => ':attribute peab olema fail.',
    'filled'               => ':attribute väli on nõutav.',
    'gt'                   => [
        'numeric' => ':attribute peab olema suurem kui :value',
        'file'    => ':attribute peab olema suurem kui :value kilobaiti',
        'string'  => ':attribute peab sisaldama rohkem kui :value tähemärki',
        'array'   => ':attribute peab sisaldama rohkem kui :value üksust',
    ],
    'gte'                  => [
        'numeric' => ':attribute peab olema suurem kui :value või samasugune',
        'file'    => ':attribute peab olema suurem kui :value kilobaiti või sama palju',
        'string'  => ':attribute peab sisaldama rohkem kui :value tähemärki või sama palju',
        'array'   => ':attribute peab sisaldama vähemalt :value üksust',
    ],
    'image'                => ':attribute peab olema pilt.',
    'in'                   => 'Valitud :attribute on vigane.',
    'in_array'             => ':attribute väli ei eksisteeri :other sees.',
    'integer'              => ':attribute peab olema täisarv.',
    'ip'                   => ':attribute peab olema kehtiv IP aadress.',
    'ipv4'                 => ':attribute peab olema kehtiv IPv4 aadress.',
    'ipv6'                 => ':attribute peab olema kehtiv IPv6 aadress.',
    'json'                 => ':attribute peab olema kehtiv JSON string.',
    'lt'                   => [
        'numeric' => ':attribute peab olema väiksem kui :value',
        'file'    => ':attribute peab olema väiksem kui :value kilobaiti',
        'string'  => ':attribute ei tohi ületada :value tähemärki',
        'array'   => ':attribute peab sisaldama vähem kui :value üksust',
    ],
    'lte'                  => [
        'numeric' => ':attribute peab olema väiksem kui :value või samasugune',
        'file'    => ':attribute peab olema väiksem kui :value kilobaiti või sama palju',
        'string'  => ':attribute peab sisaldama vähem või sama palju :value tähemärke',
        'array'   => ':attribute ei tohi sisaldada rohkem kui :value üksust',
    ],
    'max'                  => [
        'numeric' => ':attribute ei tohi olla suurem kui :max.',
        'file'    => ':attribute ei tohi olla suurem kui :max kilobaiti.',
        'string'  => ':attribute ei tohi olla suurem kui :max tähemärki.',
        'array'   => ':attribute ei tohi sisaldada rohkem kui :max kirjet.',
    ],
    'mimes'                => ':attribute peab olema :values tüüpi.',
    'mimetypes'            => ':attribute peab olema :values tüüpi.',
    'min'                  => [
        'numeric' => ':attribute peab olema vähemalt :min.',
        'file'    => ':attribute peab olema vähemalt :min kilobaiti.',
        'string'  => ':attribute peab olema vähemalt :min tähemärki.',
        'array'   => ':attribute peab olema vähemalt :min kirjet.',
    ],
    'multiple_of'          => 'The :attribute must be a multiple of :value',
    'not_in'               => 'Valitud :attribute on vigane.',
    'not_regex'            => ':attribute vorming on vale',
    'numeric'              => ':attribute peab olema number.',
    'password'             => 'The password is incorrect.',
    'present'              => ':attribute väli peab olema esindatud.',
    'regex'                => ':attribute vorming on vigane.',
    'required'             => ':attribute väli on nõutud.',
    'required_if'          => ':attribute väli on nõutud, kui :other on :value.',
    'required_unless'      => ':attribute väli on nõutud, välja arvatud, kui :other on :values.',
    'required_with'        => ':attribute väli on nõutud, kui :values on esindatud.',
    'required_with_all'    => ':attribute väli on nõutud, kui :values on esindatud.',
    'required_without'     => ':attribute väli on nõutud, kui :values ei ole esindatud.',
    'required_without_all' => ':attribute väli on nõutud, kui ükski :values pole esindatud.',
    'same'                 => ':attribute ja :other peavad sobima.',
    'size'                 => [
        'numeric' => ':attribute peab olema :size.',
        'file'    => ':attribute peab olema :size kilobaiti.',
        'string'  => ':attribute peab olema :size tähemärki.',
        'array'   => ':attribute peab sisaldama :size kirjet.',
    ],
    'starts_with'          => ':attribute peab algama ühega järgmistest: :values',
    'string'               => ':attribute peab olema string.',
    'timezone'             => ':attribute peab olema kehtiv tsoon.',
    'unique'               => ':attribute on juba hõivatud.',
    'uploaded'             => ':attribute ei õnnestunud laadida.',
    'url'                  => ':attribute vorming on vigane.',
    'uuid'                 => ':attribute peab olema õige UUID',

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
            'rule-name' => 'kohandatud-teade',
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
        'test_name'               => 'Testi nimi',
        'test_description'        => 'Testi kirjeldus',
        'test_locale'             => 'Keel',
        'image'                   => 'Pilt',
        'result_text_under_image' => 'Tulemuse tekst pildi all',
        'short_text'              => 'Lühitekst',
    ],
];
