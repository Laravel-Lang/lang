<?php

return array(

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

    "accepted"         => ":attribute musí být akceptován.",
    "active_url"       => ":attribute není platnou URL adresou.",
    "after"            => ":attribute musí být datum po :date.",
    "alpha"            => ":attribute může obsahovat pouze písmena.",
    "alpha_dash"       => ":attribute může obsahovat pouze písmena, číslice, pomlčky a podtržítka. České znaky (á, é, í, ó, ú, ů, ž, š, č, ř, ď, ť, ň) nejsou podporovány.",
    "alpha_num"        => ":attribute může obsahovat pouze písmena a číslice.",
    "array"            => ":attribute musí být pole.",
    "before"           => ":attribute musí být datum před :date.",
    "between"          => array(
        "numeric" => ":attribute musí být hodnota mezi :min a :max.",
        "file"    => ":attribute musí být větší než :min a menší než :max Kilobytů.",
        "string"  => ":attribute musí být delší než :min a kratší než :max znaků.",
        "array"   => ":attribute musí obsahovat nejméně :min a nesmí obsahovat více než :max prvků."
    ),
    "confirmed"        => ":attribute nebylo odsouhlaseno.",
    "date"             => ":attribute musí být platné datum.",
    "date_format"      => ":attribute není platný formát data podle :format.",
    "different"        => ":attribute a :other se musí lišit.",
    "digits"           => ":attribute musí být :digits pozic dlouhé.",
    "digits_between"   => ":attribute musí být dlouhé nejméně :min a nejvíce :max pozic.",
    "email"            => ":attribute není platný formát.",
    "exists"           => "Zvolená hodnota pro :attribute není platná.",
    "image"            => ":attribute musí být obrázek.",
    "in"               => "Zvolená hodnota pro :attribute není platná.",
    "integer"          => ":attribute musí být celé číslo.",
    "ip"               => ":attribute musí být platnou IP adresou.",
    "max"              => array(
        "numeric" => ":attribute musí být nižší než :max.",
        "file"    => ":attribute musí být menší než :max Kilobytů.",
        "string"  => ":attribute musí být kratší než :max znaků.",
        "array"   => ":attribute nesmí obsahovat více než :max prvků."
    ),
    "mimes"            => ":attribute musí být jeden z následujících datových typů :values.",
    "min"              => array(
        "numeric" => ":attribute musí být větší než :min.",
        "file"    => ":attribute musí být větší než :min Kilobytů.",
        "string"  => ":attribute musí být delší než :min znaků.",
        "array"   => ":attribute musí obsahovat více než :min prvků."
    ),
    "not_in"           => "Zvolená hodnota pro :attribute je neplatná.",
    "numeric"          => ":attribute musí být číslo.",
    "regex"            => ":attribute nemá správný formát.",
    "required"         => ":attribute musí být vyplněno.",
    "required_if"      => ":attribute musí být vyplněno pokud :other je :value.",
    "required_with"    => ":attribute musí být vyplněno pokud :values je zvoleno.",
    "required_without" => ":attribute musí být vyplněno pokud :values není vyplněno.",
    "same"             => ":attribute a :other se musí shodovat.",
    "size"             => array(
        "numeric" => ":attribute musí být přesně :size.",
        "file"    => ":attribute musí mít přesně :size Kilobytů.",
        "string"  => ":attribute musí být přesně :size znaků dlouhý.",
        "array"   => ":attribute musí obsahovat právě :size prvků."
    ),
    "unique"           => ":attribute musí být unikátní.",
    "url"              => "Formát :attribute je neplatný.",

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

    'custom' => array(),

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

    'attributes' => array(),

);
