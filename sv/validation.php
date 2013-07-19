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
    "accepted"         => ":attribute måste accepteras.",
    "active_url"       => ":attribute är inte en giltig webbadress.",
    "after"            => ":attribute måste vara ett datum efter den :date.",
    "alpha"            => ":attribute får endast innehålla bokstäver.",
    "alpha_dash"       => ":attribute får endast innehålla bokstäver, nummer och bindestreck.",
    "alpha_num"        => ":attribute får endast innehålla bokstäver och nummer.",
    "before"           => ":attribute måste vara ett datum innan den :date.",
    "between"          => array(
        "numeric" => ":attribute måste vara ett nummer mellan :min och :max.",
        "file"    => ":attribute måste vara mellan :min till :max kilobytes stor.",
        "string"  => ":attribute måste innehålla :min till :max tecken.",
    ),
    "confirmed"        => ":attribute bekräftelsen matchar inte.",
    "date"             => ":attribute är inte ett giltigt datum.",
    "date_format"      => ":attribute matchar inte formatet :format.",
    "different"        => ":attribute och :other får inte vara lika.",
    "digits"           => ":attribute måste vara minst :digits tecken.",
    "digits_between"   => ":attribute måste vara mellan :min och :max tecken.",
    "email"            => ":attribute formatet är ogiltig.",
    "exists"           => "Det valda :attribute är ogiltigt.",
    "image"            => ":attribute måste vara en bild.",
    "in"               => "Det valda :attribute är ogiltigt.",
    "integer"          => ":attribute måste vara en siffra.",
    "ip"               => ":attribute måste vara en giltig IP-adress.",
    "max"              => array(
        "numeric" => ":attribute får inte vara större än :max.",
        "file"    => ":attribute får max vara :max kilobytes stor.",
        "string"  => ":attribute får max innehålla :max tecken.",
    ),
    "mimes"            => ":attribute måste vara en fil av typen: :values.",
    "min"              => array(
        "numeric" => ":attribute måste vara större än :min.",
        "file"    => ":attribute måste minst vara :min kilobytes stor.",
        "string"  => ":attribute måste minst innehålla :min tecken.",
    ),
    "not_in"           => "Det valda :attribute är ogiltigt.",
    "numeric"          => ":attribute måste vara ett nummer.",
    "regex"            => "Formatet för :attribute är ogiltigt.",
    "required"         => ":attribute fältet är obligatoriskt.",
    "required_if"      => "Fältet :attribute är obligatoriskt då :other är :value.",
    "required_with"    => "Fältet :attribute är obligatoriskt då :values är ifyllt.",
    "required_without" => "Fältet :attribute är obligatoriskt då :values ej är ifyllt.",
    "same"             => ":attribute och :other måste vara lika.",
    "size"             => array(
        "numeric" => ":attribute måste vara :size.",
        "file"    => ":attribute får endast vara :size kilobyte stor.",
        "string"  => ":attribute måste innehålla :size tecken.",
    ),
    "unique"           => ":attribute används redan.",
    "url"              => ":attribute formatet är ogiltig",

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