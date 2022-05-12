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
    'accepted'             => 'Toto pole musí být přijato.',
    'accepted_if'          => 'This field must be accepted when :other is :value.',
    'active_url'           => 'Toto není platná adresa URL.',
    'after'                => 'Toto musí být datum po :date.',
    'after_or_equal'       => 'Toto musí být datum po nebo rovno :date.',
    'alpha'                => 'Toto pole může obsahovat pouze písmena.',
    'alpha_dash'           => 'Toto pole může obsahovat pouze písmena, čísla, pomlčky a podtržítka.',
    'alpha_num'            => 'Toto pole může obsahovat pouze písmena a čísla.',
    'array'                => 'Toto pole musí být pole.',
    'before'               => 'Toto musí být Datum před :date.',
    'before_or_equal'      => 'Toto musí být Datum před nebo rovno :date.',
    'between'              => [
        'array'   => 'Toto pole musí mít nejméně :min a nejvíce :max položek.',
        'file'    => 'Tento soubor musí mít nejméně :min a nejvíce :max kilobytů.',
        'numeric' => 'Tato hodnota musí být mezi :min a :max.',
        'string'  => 'Toto pole musí být nejméně :min a nejvíce :max znaků.',
    ],
    'boolean'              => 'Toto pole musí být pravdivé nebo nepravdivé.',
    'confirmed'            => 'Potvrzení neodpovídá.',
    'current_password'     => 'Současné heslo není spravné.',
    'date'                 => 'Toto není platné datum.',
    'date_equals'          => 'Toto musí být Datum rovnající se :date.',
    'date_format'          => 'To neodpovídá formátu :format.',
    'declined'             => 'This value must be declined.',
    'declined_if'          => 'This value must be declined when :other is :value.',
    'different'            => 'Tato hodnota se musí lišit od :other.',
    'digits'               => 'Musí to být :digits číslic.',
    'digits_between'       => 'To musí být mezi :min a :max číslicemi.',
    'dimensions'           => 'Tento obrázek má neplatné rozměry.',
    'distinct'             => 'Toto pole má duplicitní hodnotu.',
    'email'                => 'Musí to být platná e-mailová adresa.',
    'ends_with'            => 'To musí skončit jedním z následujících: :values.',
    'enum'                 => 'The selected value is invalid.',
    'exists'               => 'Vybraná hodnota je neplatná.',
    'file'                 => 'Obsah musí být soubor.',
    'filled'               => 'Toto pole musí mít hodnotu.',
    'gt'                   => [
        'array'   => 'Toto pole musí mít více jak :value položek.',
        'file'    => 'Tento soubor musí být větší než :value kilobytů.',
        'numeric' => 'Tato hodnota musí být větší než :value.',
        'string'  => 'Toto pole musí mít více než :value znaků.',
    ],
    'gte'                  => [
        'array'   => 'Toto pole musí mít alespoň :value nebo více položek.',
        'file'    => 'Tento soubor musí mít alespoň :value nebo více kilobytů.',
        'numeric' => 'Tato hodnota musí být alespoň :value nebo více.',
        'string'  => 'Toto pole musí mít alespoň :value nebo více znaků.',
    ],
    'image'                => 'To musí být obraz.',
    'in'                   => 'Vybraná hodnota je neplatná.',
    'in_array'             => 'Tato hodnota neexistuje v roce :other.',
    'integer'              => 'To musí být celé číslo.',
    'ip'                   => 'Musí to být platná IP adresa.',
    'ipv4'                 => 'Musí to být platná adresa IPv4.',
    'ipv6'                 => 'Musí to být platná adresa IPv6.',
    'json'                 => 'Musí to být platný řetězec JSON.',
    'lt'                   => [
        'array'   => 'Toto pole musí mít méně jak :value položek.',
        'file'    => 'Tento soubor musí být menší než :value kilobytů.',
        'numeric' => 'Tato hodnota musí být menší než :value.',
        'string'  => 'Toto pole musí mít méně než :value znaků.',
    ],
    'lte'                  => [
        'array'   => 'Toto pole musí mít :value nebo méně položek.',
        'file'    => 'Tento soubor musí mít :value nebo méně kilobytů.',
        'numeric' => 'Tato hodnota musí být :value nebo méně.',
        'string'  => 'Toto pole musí mít :value nebo méně znaků.',
    ],
    'mac_address'          => 'The value must be a valid MAC address.',
    'max'                  => [
        'array'   => 'Toto pole musí mít nejvíce :max položek.',
        'file'    => 'Tento soubor nesmí být větší než :max kilobytů.',
        'numeric' => 'Tato hodnota nesmí být větší než :max.',
        'string'  => 'Toto pole nesmí mít více než :max znaků.',
    ],
    'mimes'                => 'Musí to být soubor typu: :values.',
    'mimetypes'            => 'Musí to být soubor typu: :values.',
    'min'                  => [
        'array'   => 'Toto pole musí mít nejméně :min položek.',
        'file'    => 'Tento soubor nesmí být menší než :min kilobytů.',
        'numeric' => 'Tato hodnota nesmí být menší než :min.',
        'string'  => 'Toto pole nesmí mít méně než :min znaků.',
    ],
    'multiple_of'          => 'Hodnota musí být násobkem :value',
    'not_in'               => 'Vybraná hodnota je neplatná.',
    'not_regex'            => 'Tento formát je neplatný.',
    'numeric'              => 'Tohle musí být číslo.',
    'password'             => [
        'letters'       => 'This field must contain at least one letter.',
        'mixed'         => 'This field must contain at least one uppercase and one lowercase letter.',
        'numbers'       => 'This field must contain at least one number.',
        'symbols'       => 'This field must contain at least one symbol.',
        'uncompromised' => 'The given field has appeared in a data leak. Please choose a different one.',
    ],
    'present'              => 'Toto pole musí být přítomno.',
    'prohibited'           => 'Toto pole je zakázáno.',
    'prohibited_if'        => 'Toto pole je zakázáno, když :other je :value.',
    'prohibited_unless'    => 'Toto pole je zakázáno, pokud :other není v :values.',
    'prohibits'            => 'This field prohibits :other from being present.',
    'regex'                => 'Tento formát je neplatný.',
    'required'             => 'Toto pole je nutné.',
    'required_array_keys'  => 'This field must contain entries for: :values.',
    'required_if'          => 'Toto pole je vyžadováno, když je :other :value.',
    'required_unless'      => 'Toto pole je vyžadováno, pokud není :other v :values.',
    'required_with'        => 'Toto pole je vyžadováno, když je přítomen :values.',
    'required_with_all'    => 'Toto pole je vyžadováno, když je přítomno :values.',
    'required_without'     => 'Toto pole je vyžadováno, když :values není přítomen.',
    'required_without_all' => 'Toto pole je vyžadováno, pokud není přítomen žádný z :values.',
    'same'                 => 'Hodnota tohoto pole musí odpovídat hodnotě z :other.',
    'size'                 => [
        'array'   => 'Toto pole musí mít :size položek.',
        'file'    => 'Tento soubor musí mít :size kilobytů.',
        'numeric' => 'Tato hodnota musí být :size.',
        'string'  => 'Toto pole musí mít :size znaků.',
    ],
    'starts_with'          => 'To musí začít s jedním z následujících: :values.',
    'string'               => 'To musí být řetězec.',
    'timezone'             => 'Musí to být platná zóna.',
    'unique'               => 'To již bylo přijato.',
    'uploaded'             => 'To se nepodařilo nahrát.',
    'url'                  => 'Tento formát je neplatný.',
    'uuid'                 => 'To musí být platný UUID.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
