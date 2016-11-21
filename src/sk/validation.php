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

    'accepted'             => ':attribute musí byť akceptovaný.',
    'active_url'           => ':attribute má neplatnú URL adresu.',
    'after'                => ':attribute musí byť dátum po :date.',
    'after_or_equal'       => 'The :attribute must be a date after or equal to :date.',
    'alpha'                => ':attribute môže obsahovať len písmená.',
    'alpha_dash'           => ':attribute môže obsahovať len písmená, čísla a pomlčky.',
    'alpha_num'            => ':attribute môže obsahovať len písmená, čísla.',
    'array'                => ':attribute musí byť pole.',
    'before'               => ':attribute musí byť dátum pred :date.',
    'before_or_equal'      => 'The :attribute must be a date before or equal to :date.',
    'between'              => [
        'numeric' => ':attribute musí mať rozsah :min - :max.',
        'file'    => ':attribute musí mať rozsah :min - :max kilobajtov.',
        'string'  => ':attribute musí mať rozsah :min - :max znakov.',
        'array'   => ':attribute musí mať rozsah :min - :max prvkov.',
    ],
    'boolean'              => ':attribute musí byť pravda alebo nepravda.',
    'confirmed'            => ':attribute konfirmácia sa nezhoduje.',
    'date'                 => ':attribute má neplatný dátum.',
    'date_format'          => ':attribute sa nezhoduje s formátom :format.',
    'different'            => ':attribute a :other musia byť odlišné.',
    'digits'               => ':attribute musí mať :digits číslic.',
    'digits_between'       => ':attribute musí mať rozsah :min až :max číslic.',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => ':attribute je duplicitný.',
    'email'                => ':attribute má neplatný formát.',
    'exists'               => 'označený :attribute je neplatný.',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => ':attribute je požadované.',
    'image'                => ':attribute musí byť obrázok.',
    'in'                   => 'označený :attribute je neplatný.',
    'in_array'             => ':attribute sa nenachádza v :other.',
    'integer'              => ':attribute musí byť celé číslo.',
    'ip'                   => ':attribute musí byť platná IP adresa.',
    'json'                 => ':attribute musí byť platný JSON reťazec.',
    'max'                  => [
        'numeric' => ':attribute nemôže byť väčší ako :max.',
        'file'    => ':attribute nemôže byť väčší ako :max kilobajtov.',
        'string'  => ':attribute nemôže byť väčší ako :max znakov.',
        'array'   => ':attribute nemôže mať viac ako :max prvkov.',
    ],
    'mimes'                => ':attribute musí byť súbor s koncovkou: :values.',
    'mimetypes'            => ':attribute musí byť súbor s koncovkou: :values.',
    'min'                  => [
        'numeric' => ':attribute musí mať aspoň :min.',
        'file'    => ':attribute musí mať aspoň :min kilobajtov.',
        'string'  => ':attribute musí mať aspoň :min znakov.',
        'array'   => ':attribute musí mať aspoň :min prvkov.',
    ],
    'not_in'               => 'označený :attribute je neplatný.',
    'numeric'              => ':attribute musí byť číslo.',
    'present'              => ':attribute musí byť odoslaný.',
    'regex'                => ':attribute má neplatný formát.',
    'required'             => ':attribute je požadované.',
    'required_if'          => ':attribute je požadované keď :other je :value.',
    'required_unless'      => ':attribute je požadované, okrem prípadu keď :other je v :values.',
    'required_with'        => ':attribute je požadované keď :values je prítomné.',
    'required_with_all'    => ':attribute je požadované ak :values je nastavené.',
    'required_without'     => ':attribute je požadované keď :values nie je prítomné.',
    'required_without_all' => ':attribute je požadované ak žiadne z :values nie je nastavené.',
    'same'                 => ':attribute a :other sa musia zhodovať.',
    'size'                 => [
        'numeric' => ':attribute musí byť :size.',
        'file'    => ':attribute musí mať :size kilobajtov.',
        'string'  => ':attribute musí mať :size znakov.',
        'array'   => ':attribute musí obsahovať :size prvkov.',
    ],
    'string'               => ':attribute musí byť reťazec znakov.',
    'timezone'             => ':attribute musí byť platné časové pásmo.',
    'unique'               => ':attribute už existuje.',
    'uploaded'             => 'The :attribute failed to upload.',
    'url'                  => ':attribute musí mať formát URL.',

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
