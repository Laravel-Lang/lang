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

    'accepted'             => ':Attribute musí být akceptován.',
    'active_url'           => ':Attribute není platnou URL adresou.',
    'after'                => ':Attribute musí být datum po :date.',
    'alpha'                => ':Attribute může obsahovat pouze písmena.',
    'alpha_dash'           => ':Attribute může obsahovat pouze písmena, číslice, pomlčky a podtržítka. České znaky (á, é, í, ó, ú, ů, ž, š, č, ř, ď, ť, ň) nejsou podporovány.',
    'alpha_num'            => ':Attribute může obsahovat pouze písmena a číslice.',
    'array'                => ':Attribute musí být pole.',
    'before'               => ':Attribute musí být datum před :date.',
    'between'              => [
        'numeric' => ':Attribute musí být hodnota mezi :min a :max.',
        'file'    => ':Attribute musí být větší než :min a menší než :max Kilobytů.',
        'string'  => ':Attribute musí být delší než :min a kratší než :max znaků.',
        'array'   => ':Attribute musí obsahovat nejméně :min a nesmí obsahovat více než :max prvků.',
    ],
    'boolean'              => ':Attribute musí být true nebo false',
    'confirmed'            => ':Attribute nebylo odsouhlaseno.',
    'date'                 => ':Attribute musí být platné datum.',
    'date_format'          => ':Attribute není platný formát data podle :format.',
    'different'            => ':Attribute a :other se musí lišit.',
    'digits'               => ':Attribute musí být :digits pozic dlouhé.',
    'digits_between'       => ':Attribute musí být dlouhé nejméně :min a nejvíce :max pozic.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => ':Attribute není platný formát.',
    'exists'               => 'Zvolená hodnota pro :attribute není platná.',
    'filled'               => ':Attribute musí být vyplněno.',
    'image'                => ':Attribute musí být obrázek.',
    'in'                   => 'Zvolená hodnota pro :attribute není platná.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => ':Attribute musí být celé číslo.',
    'ip'                   => ':Attribute musí být platnou IP adresou.',
    'json'                 => ':Attribute musí být platný JSON řetězec.',
    'max'                  => [
        'numeric' => ':Attribute musí být nižší než :max.',
        'file'    => ':Attribute musí být menší než :max Kilobytů.',
        'string'  => ':Attribute musí být kratší než :max znaků.',
        'array'   => ':Attribute nesmí obsahovat více než :max prvků.',
    ],
    'mimes'                => ':Attribute musí být jeden z následujících datových typů :values.',
    'min'                  => [
        'numeric' => ':Attribute musí být větší než :min.',
        'file'    => ':Attribute musí být větší než :min Kilobytů.',
        'string'  => ':Attribute musí být delší než :min znaků.',
        'array'   => ':Attribute musí obsahovat více než :min prvků.',
    ],
    'not_in'               => 'Zvolená hodnota pro :attribute je neplatná.',
    'numeric'              => ':Attribute musí být číslo.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => ':Attribute nemá správný formát.',
    'required'             => ':Attribute musí být vyplněno.',
    'required_if'          => ':Attribute musí být vyplněno pokud :other je :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => ':Attribute musí být vyplněno pokud :values je vyplněno.',
    'required_with_all'    => ':Attribute musí být vyplněno pokud :values je zvoleno.',
    'required_without'     => ':Attribute musí být vyplněno pokud :values není vyplněno.',
    'required_without_all' => ':Attribute musí být vyplněno pokud není žádné z :values zvoleno.',
    'same'                 => ':Attribute a :other se musí shodovat.',
    'size'                 => [
        'numeric' => ':Attribute musí být přesně :size.',
        'file'    => ':Attribute musí mít přesně :size Kilobytů.',
        'string'  => ':Attribute musí být přesně :size znaků dlouhý.',
        'array'   => ':Attribute musí obsahovat právě :size prvků.',
    ],
    'string'               => ':Attribute musí být řetězec znaků.',
    'timezone'             => ':Attribute musí být platná časová zóna.',
    'unique'               => ':Attribute musí být unikátní.',
    'url'                  => 'Formát :attribute je neplatný.',

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
