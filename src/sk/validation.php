<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted'             => ':Attribute musí byť akceptovaný.',
    'active_url'           => ':Attribute má neplatnú URL adresu.',
    'after'                => ':Attribute musí byť dátum po :date.',
    'alpha'                => ':Attribute môže obsahovať len písmená.',
    'alpha_dash'           => ':Attribute môže obsahovať len písmená, čísla a pomlčky.',
    'alpha_num'            => ':Attribute môže obsahovať len písmená, čísla.',
    'array'                => ':Attribute musí byť pole.',
    'before'               => ':Attribute musí byť dátum pred :date.',
    'between'              => [
        'numeric' => ':Attribute musí mať rozsah :min - :max.',
        'file'    => ':Attribute musí mať rozsah :min - :max kilobajtov.',
        'string'  => ':Attribute musí mať rozsah :min - :max znakov.',
        'array'   => ':Attribute musí mať rozsah :min - :max prvkov.',
    ],
    'boolean'              => ':Attribute musí byť pravda alebo nepravda.',
    'confirmed'            => ':Attribute konfirmácia sa nezhoduje.',
    'date'                 => ':Attribute má neplatný dátum.',
    'date_format'          => ':Attribute sa nezhoduje s formátom :format.',
    'different'            => ':Attribute a :other musia byť odlišné.',
    'digits'               => ':Attribute musí mať :digits číslic.',
    'digits_between'       => ':Attribute musí mať rozsah :min až :max číslic.',
    'distinct'             => ':Attribute je duplicitný.',
    'email'                => ':Attribute má neplatný formát.',
    'exists'               => 'označený :attribute je neplatný.',
    'filled'               => ':Attribute je požadované.',
    'image'                => ':Attribute musí byť obrázok.',
    'in'                   => 'označený :attribute je neplatný.',
    'in_array'             => ':Attribute sa nenachádza v :other.',
    'integer'              => ':Attribute musí byť celé číslo.',
    'ip'                   => ':Attribute musí byť platná IP adresa.',
    'json'                 => ':Attribute musí byť platný JSON reťazec.',
    'max'                  => [
        'numeric' => ':Attribute nemôže byť väčší ako :max.',
        'file'    => ':Attribute nemôže byť väčší ako :max kilobajtov.',
        'string'  => ':Attribute nemôže byť väčší ako :max znakov.',
        'array'   => ':Attribute nemôže mať viac ako :max prvkov.',
    ],
    'mimes'                => ':Attribute musí byť súbor s koncovkou: :values.',
    'min'                  => [
        'numeric' => ':Attribute musí mať aspoň :min.',
        'file'    => ':Attribute musí mať aspoň :min kilobajtov.',
        'string'  => ':Attribute musí mať aspoň :min znakov.',
        'array'   => ':Attribute musí mať aspoň :min prvkov.',
    ],
    'not_in'               => 'označený :attribute je neplatný.',
    'numeric'              => ':Attribute musí byť číslo.',
    'present'              => ':Attribute musí byť odoslaný.',
    'regex'                => ':Attribute má neplatný formát.',
    'required'             => ':Attribute je požadované.',
    'required_if'          => ':Attribute je požadované keď :other je :value.',
    'required_unless'      => ':Attribute je požadované, okrem prípadu keď :other je v :values.',
    'required_with'        => ':Attribute je požadované keď :values je prítomné.',
    'required_with_all'    => ':Attribute je požadované ak :values je nastavené.',
    'required_without'     => ':Attribute je požadované keď :values nie je prítomné.',
    'required_without_all' => ':Attribute je požadované ak žiadne z :values nie je nastavené.',
    'same'                 => ':Attribute a :other sa musia zhodovať.',
    'size'                 => [
        'numeric' => ':Attribute musí byť :size.',
        'file'    => ':Attribute musí mať :size kilobajtov.',
        'string'  => ':Attribute musí mať :size znakov.',
        'array'   => ':Attribute musí obsahovať :size prvkov.',
    ],
    'string'               => ':Attribute musí byť reťazec znakov.',
    'timezone'             => ':Attribute musí byť platné časové pásmo.',
    'unique'               => ':Attribute už existuje.',
    'url'                  => ':Attribute musí mať formát URL.',

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

    'custom'               => [
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

    'attributes'           => [
        //
    ],

];
