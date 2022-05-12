<?php

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

return [
    'accepted'             => 'Dieses Feld muss akzeptiert werden.',
    'accepted_if'          => 'This field must be accepted when :other is :value.',
    'active_url'           => 'Das ist keine gültige Internet-Adresse.',
    'after'                => 'Das muss ein Datum nach dem :date sein.',
    'after_or_equal'       => 'Das muss ein Datum nach dem :date oder gleich dem :date sein.',
    'alpha'                => 'Der Inhalt darf nur aus Buchstaben bestehen.',
    'alpha_dash'           => 'Der Inhalt darf nur aus Buchstaben, Zahlen, Binde- und Unterstrichen bestehen.',
    'alpha_num'            => 'Der Inhalt darf nur aus Buchstaben und Zahlen bestehen.',
    'array'                => 'Dieses Feld muss ein Array sein.',
    'before'               => 'Das muss ein Datum vor dem :date sein.',
    'before_or_equal'      => 'Das muss ein Datum vor dem :date oder gleich dem :date sein.',
    'between'              => [
        'array'   => 'Dieser Inhalt muss zwischen :min & :max Elemente haben.',
        'file'    => 'Diese Datei muss zwischen :min & :max Kilobytes gross sein.',
        'numeric' => 'Dieser Wert muss zwischen :min & :max liegen.',
        'string'  => 'Diese Zeichenkette muss zwischen :min & :max Zeichen lang sein.',
    ],
    'boolean'              => 'Dieses Feld muss entweder \'true\' oder \'false\' sein.',
    'confirmed'            => 'Die Bestätigung stimmt nicht überein.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => 'Das ist kein gültiges Datum.',
    'date_equals'          => 'Das Datum muss identisch zu :date sein.',
    'date_format'          => 'Das Datum entspricht nicht dem gültigen Format für :format.',
    'declined'             => 'This value must be declined.',
    'declined_if'          => 'This value must be declined when :other is :value.',
    'different'            => 'Das muss sich von :other unterscheiden.',
    'digits'               => 'Das muss :digits Stellen haben.',
    'digits_between'       => 'Das muss zwischen :min und :max Stellen haben.',
    'dimensions'           => 'Das Bild hat ungültige Abmessungen.',
    'distinct'             => 'Dieser Wert ist bereits vorhanden.',
    'email'                => 'Das muss eine gültige E-Mail-Adresse sein.',
    'ends_with'            => 'Der Inhalt muss eine der folgenden Endungen aufweisen: :values',
    'enum'                 => 'The selected value is invalid.',
    'exists'               => 'Der gewählte Wert ist ungültig.',
    'file'                 => 'Der Inhalt muss eine Datei sein.',
    'filled'               => 'Dieses Feld muss ausgefüllt sein.',
    'gt'                   => [
        'array'   => 'Der Inhalt muss mindestens :value Elemente haben.',
        'file'    => 'Die Datei muss mindestens :value Kilobytes gross sein.',
        'numeric' => 'Der Wert muss mindestens :value sein.',
        'string'  => 'Die Zeichenkette muss mindestens :value Zeichen lang sein.',
    ],
    'gte'                  => [
        'array'   => 'Der Inhalt muss grösser oder gleich :value Elemente haben.',
        'file'    => 'Die Datei muss grösser oder gleich :value Kilobytes sein.',
        'numeric' => 'Der Wert muss grösser oder gleich :value sein.',
        'string'  => 'Die Zeichenkette muss grösser oder gleich :value Zeichen lang sein.',
    ],
    'image'                => 'Das muss ein Bild sein.',
    'in'                   => 'Der gewählte Wert ist ungültig.',
    'in_array'             => 'Der gewählte Wert kommt nicht in :other vor.',
    'integer'              => 'Das muss eine ganze Zahl sein.',
    'ip'                   => 'Das muss eine gültige IP-Adresse sein.',
    'ipv4'                 => 'Das muss eine gültige IPv4-Adresse sein.',
    'ipv6'                 => 'Das muss eine gültige IPv6-Adresse sein.',
    'json'                 => 'Das muss ein gültiger JSON-String sein.',
    'lt'                   => [
        'array'   => 'Der Inhalt muss kleiner :value Elemente haben.',
        'file'    => 'Die Datei muss kleiner :value Kilobytes gross sein.',
        'numeric' => 'Der Wert muss kleiner :value sein.',
        'string'  => 'Die Zeichenkette muss kleiner :value Zeichen lang sein.',
    ],
    'lte'                  => [
        'array'   => 'Der Inhalt muss kleiner oder gleich :value Elemente haben.',
        'file'    => 'Die Datei muss kleiner oder gleich :value Kilobytes sein.',
        'numeric' => 'Der Wert muss kleiner oder gleich :value sein.',
        'string'  => 'Die Zeichenkette muss kleiner oder gleich :value Zeichen lang sein.',
    ],
    'mac_address'          => 'The value must be a valid MAC address.',
    'max'                  => [
        'array'   => 'Der Inhalt darf nicht mehr als :max Elemente haben.',
        'file'    => 'Die Datei darf maximal :max Kilobytes gross sein.',
        'numeric' => 'Der Wert darf maximal :max sein.',
        'string'  => 'Die Zeichenkette darf maximal :max Zeichen haben.',
    ],
    'mimes'                => 'Das muss den Dateityp :values haben.',
    'mimetypes'            => 'Das muss den Dateityp :values haben.',
    'min'                  => [
        'array'   => 'Der Inhalt muss mindestens :min Elemente haben.',
        'file'    => 'Die Datei muss mindestens :min Kilobytes gross sein.',
        'numeric' => 'Der Wert muss mindestens :min sein.',
        'string'  => 'Die Zeichenkette muss mindestens :min Zeichen lang sein.',
    ],
    'multiple_of'          => 'Der Wert muss ein Vielfaches von :value sein.',
    'not_in'               => 'Der gewählte Wert ist ungültig.',
    'not_regex'            => 'Dieses Format ist ungültig.',
    'numeric'              => 'Das muss eine Zahl sein.',
    'password'             => [
        'letters'       => 'This field must contain at least one letter.',
        'mixed'         => 'This field must contain at least one uppercase and one lowercase letter.',
        'numbers'       => 'This field must contain at least one number.',
        'symbols'       => 'This field must contain at least one symbol.',
        'uncompromised' => 'The given field has appeared in a data leak. Please choose a different one.',
    ],
    'present'              => 'Dieses Feld muss vorhanden sein.',
    'prohibited'           => 'Dieses Feld ist gesperrt.',
    'prohibited_if'        => 'Dieses Feld ist gesperrt, wenn :other :value ist.',
    'prohibited_unless'    => 'Dieses Feld ist gesperrt, wenn :other nicht :values ist.',
    'prohibits'            => 'This field prohibits :other from being present.',
    'regex'                => 'Dieses Format ist ungültig.',
    'required'             => 'Dieses Feld muss ausgefüllt sein.',
    'required_array_keys'  => 'This field must contain entries for: :values.',
    'required_if'          => 'Dieses Feld muss ausgefüllt sein, wenn :other :value ist.',
    'required_unless'      => 'Dieses Feld muss ausgefüllt sein, wenn :other nicht :values ist.',
    'required_with'        => 'Dieses Feld muss angegeben werden, wenn :values ausgefüllt wurde.',
    'required_with_all'    => 'Dieses Feld muss angegeben werden, wenn :values ausgefüllt wurde.',
    'required_without'     => 'Dieses Feld muss angegeben werden, wenn :values nicht ausgefüllt wurde.',
    'required_without_all' => 'Dieses Feld muss angegeben werden, wenn keines der Felder :values ausgefüllt wurde.',
    'same'                 => 'Der Wert von diesem Feld und muss mit demjenigen von :other übereinstimmen.',
    'size'                 => [
        'array'   => 'Der Inhalt muss genau :size Elemente haben.',
        'file'    => 'Die Datei muss :size Kilobyte gross sein.',
        'numeric' => 'Der Wert muss gleich :size sein.',
        'string'  => 'Die Zeichenkette muss :size Zeichen lang sein.',
    ],
    'starts_with'          => 'Der Inhalt muss einen der folgenden Anfänge aufweisen: :values',
    'string'               => 'Das muss ein String sein.',
    'timezone'             => 'Das muss eine gültige Zeitzone sein.',
    'unique'               => 'Das ist schon vergeben.',
    'uploaded'             => 'Das konnte nicht hochgeladen werden.',
    'url'                  => 'Das muss eine URL sein.',
    'uuid'                 => 'Das muss eine UUID sein.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
