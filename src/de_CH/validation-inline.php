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

    'accepted'        => 'Dieses Feld muss akzeptiert werden.',
    'active_url'      => 'Das ist keine gültige Internet-Adresse.',
    'after'           => 'Das muss ein Datum nach dem :date sein.',
    'after_or_equal'  => 'Das muss ein Datum nach dem :date oder gleich dem :date sein.',
    'alpha'           => 'Der Inhalt darf nur aus Buchstaben bestehen.',
    'alpha_dash'      => 'Der Inhalt darf nur aus Buchstaben, Zahlen, Binde- und Unterstrichen bestehen.',
    'alpha_num'       => 'Der Inhalt darf nur aus Buchstaben und Zahlen bestehen.',
    'array'           => 'Dieses Feld muss ein Array sein.',
    'before'          => 'Das muss ein Datum vor dem :date sein.',
    'before_or_equal' => 'Das muss ein Datum vor dem :date oder gleich dem :date sein.',
    'between'         => [
        'numeric' => 'Dieser Wert muss zwischen :min & :max liegen.',
        'file'    => 'Diese Datei muss zwischen :min & :max Kilobytes gross sein.',
        'string'  => 'Diese Zeichenkette muss zwischen :min & :max Zeichen lang sein.',
        'array'   => 'Dieser Inhalt muss zwischen :min & :max Elemente haben.',
    ],
    'boolean'        => "Dieses Feld muss entweder 'true' oder 'false' sein.",
    'confirmed'      => 'Die Bestätigung stimmt nicht überein.',
    'date'           => 'Das ist kein gültiges Datum.',
    'date_equals'    => 'Das Datum muss identisch zu :date sein.',
    'date_format'    => 'Das Datum entspricht nicht dem gültigen Format für :format.',
    'different'      => 'Das muss sich von :other unterscheiden.',
    'digits'         => 'Das muss :digits Stellen haben.',
    'digits_between' => 'Das muss zwischen :min und :max Stellen haben.',
    'dimensions'     => 'Das Bild hat ungültige Abmessungen.',
    'distinct'       => 'Dieser Wert ist bereits vorhanden.',
    'email'          => 'Das muss eine gültige E-Mail-Adresse sein.',
    'ends_with'      => 'Der Inhalt muss eine der folgenden Endungen aufweisen: :values',
    'exists'         => 'Der gewählte Wert ist ungültig.',
    'file'           => 'Der Inhalt muss eine Datei sein.',
    'filled'         => 'Dieses Feld muss ausgefüllt sein.',
    'gt'             => [
        'numeric' => 'Der Wert muss mindestens :value sein.',
        'file'    => 'Die Datei muss mindestens :value Kilobytes gross sein.',
        'string'  => 'Die Zeichenkette muss mindestens :value Zeichen lang sein.',
        'array'   => 'Der Inhalt muss mindestens :value Elemente haben.',
    ],
    'gte' => [
        'numeric' => 'Der Wert muss grösser oder gleich :value sein.',
        'file'    => 'Die Datei muss grösser oder gleich :value Kilobytes sein.',
        'string'  => 'Die Zeichenkette muss grösser oder gleich :value Zeichen lang sein.',
        'array'   => 'Der Inhalt muss grösser oder gleich :value Elemente haben.',
    ],
    'image'    => 'Das muss ein Bild sein.',
    'in'       => 'Der gewählte Wert ist ungültig.',
    'in_array' => 'Der gewählte Wert kommt nicht in :other vor.',
    'integer'  => 'Das muss eine ganze Zahl sein.',
    'ip'       => 'Das muss eine gültige IP-Adresse sein.',
    'ipv4'     => 'Das muss eine gültige IPv4-Adresse sein.',
    'ipv6'     => 'Das muss eine gültige IPv6-Adresse sein.',
    'json'     => 'Das muss ein gültiger JSON-String sein.',
    'lt'       => [
        'numeric' => 'Der Wert muss kleiner :value sein.',
        'file'    => 'Die Datei muss kleiner :value Kilobytes gross sein.',
        'string'  => 'Die Zeichenkette muss kleiner :value Zeichen lang sein.',
        'array'   => 'Der Inhalt muss kleiner :value Elemente haben.',
    ],
    'lte' => [
        'numeric' => 'Der Wert muss kleiner oder gleich :value sein.',
        'file'    => 'Die Datei muss kleiner oder gleich :value Kilobytes sein.',
        'string'  => 'Die Zeichenkette muss kleiner oder gleich :value Zeichen lang sein.',
        'array'   => 'Der Inhalt muss kleiner oder gleich :value Elemente haben.',
    ],
    'max' => [
        'numeric' => 'Der Wert darf maximal :max sein.',
        'file'    => 'Die Datei darf maximal :max Kilobytes gross sein.',
        'string'  => 'Die Zeichenkette darf maximal :max Zeichen haben.',
        'array'   => 'Der Inhalt darf nicht mehr als :max Elemente haben.',
    ],
    'mimes'     => 'Das muss den Dateityp :values haben.',
    'mimetypes' => 'Das muss den Dateityp :values haben.',
    'min'       => [
        'numeric' => 'Der Wert muss mindestens :min sein.',
        'file'    => 'Die Datei muss mindestens :min Kilobytes gross sein.',
        'string'  => 'Die Zeichenkette muss mindestens :min Zeichen lang sein.',
        'array'   => 'Der Inhalt muss mindestens :min Elemente haben.',
    ],
    'multiple_of'          => 'Der Wert muss ein Vielfaches von :value sein.',
    'not_in'               => 'Der gewählte Wert ist ungültig.',
    'not_regex'            => 'Dieses Format ist ungültig.',
    'numeric'              => 'Das muss eine Zahl sein.',
    'password'             => 'Das Passwort ist falsch.',
    'present'              => 'Dieses Feld muss vorhanden sein.',
    'regex'                => 'Dieses Format ist ungültig.',
    'required'             => 'Dieses Feld muss ausgefüllt sein.',
    'required_if'          => 'Dieses Feld muss ausgefüllt sein, wenn :other :value ist.',
    'required_unless'      => 'Dieses Feld muss ausgefüllt sein, wenn :other nicht :values ist.',
    'required_with'        => 'Dieses Feld muss angegeben werden, wenn :values ausgefüllt wurde.',
    'required_with_all'    => 'Dieses Feld muss angegeben werden, wenn :values ausgefüllt wurde.',
    'required_without'     => 'Dieses Feld muss angegeben werden, wenn :values nicht ausgefüllt wurde.',
    'required_without_all' => 'Dieses Feld muss angegeben werden, wenn keines der Felder :values ausgefüllt wurde.',
    'same'                 => 'Der Wert von diesem Feld und muss mit demjenigen von :other übereinstimmen.',
    'size'                 => [
        'numeric' => 'Der Wert muss gleich :size sein.',
        'file'    => 'Die Datei muss :size Kilobyte gross sein.',
        'string'  => 'Die Zeichenkette muss :size Zeichen lang sein.',
        'array'   => 'Der Inhalt muss genau :size Elemente haben.',
    ],
    'starts_with' => 'Der Inhalt muss einen der folgenden Anfänge aufweisen: :values',
    'string'      => 'Das muss ein String sein.',
    'timezone'    => 'Das muss eine gültige Zeitzone sein.',
    'unique'      => 'Das ist schon vergeben.',
    'uploaded'    => 'Das konnte nicht hochgeladen werden.',
    'url'         => 'Das muss eine URL sein.',
    'uuid'        => 'Das muss eine UUID sein.',

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
