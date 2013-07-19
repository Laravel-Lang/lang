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
    "accepted"         => ":attribute m&aring;ste accepteras.",
    "active_url"       => ":attribute &auml;r inte en giltig webbadress.",
    "after"            => ":attribute m&aring;ste vara ett datum efter den :date.",
    "alpha"            => ":attribute f&aring;r endast inneh&aring;lla bokst&auml;ver.",
    "alpha_dash"       => ":attribute f&aring;r endast inneh&aring;lla bokst&auml;ver, nummer och bindestreck.",
    "alpha_num"        => ":attribute f&aring;r endast inneh&aring;lla bokst&auml;ver och nummer.",
    "before"           => ":attribute m&aring;ste vara ett datum innan den :date.",
    "between"          => array(
        "numeric" => ":attribute m&aring;ste vara ett nummer mellan :min och :max.",
        "file"    => ":attribute m&aring;ste vara mellan :min till :max kilobytes stor.",
        "string"  => ":attribute m&aring;ste inneh&aring;lla :min till :max tecken.",
    ),
    "confirmed"        => ":attribute bekr&auml;ftelsen matchar inte.",
    "date"             => ":attribute &auml;r inte ett giltigt datum.",
    "date_format"      => ":attribute matchar inte formatet :format.",
    "different"        => ":attribute och :other f&aring;r inte vara lika.",
    "digits"           => ":attribute m&aring;ste vara minst :digits tecken.",
    "digits_between"   => ":attribute m&aring;ste vara mellan :min och :max tecken.",
    "email"            => ":attribute formatet &auml;r ogiltig.",
    "exists"           => "Det valda :attribute &auml;r ogiltigt.",
    "image"            => ":attribute m&aring;ste vara en bild.",
    "in"               => "Det valda :attribute &auml;r ogiltigt.",
    "integer"          => ":attribute m&aring;ste vara en siffra.",
    "ip"               => ":attribute m&aring;ste vara en giltig IP-adress.",
    "max"              => array(
        "numeric" => ":attribute f&aring;r inte vara st&ouml;rre &auml;n :max.",
        "file"    => ":attribute f&aring;r max vara :max kilobytes stor.",
        "string"  => ":attribute f&aring;r max inneh&aring;lla :max tecken.",
    ),
    "mimes"            => ":attribute m&aring;ste vara en fil av typen: :values.",
    "min"              => array(
        "numeric" => ":attribute m&aring;ste vara st&ouml;rre &auml;n :min.",
        "file"    => ":attribute m&aring;ste minst vara :min kilobytes stor.",
        "string"  => ":attribute m&aring;ste minst inneh&aring;lla :min tecken.",
    ),
    "not_in"           => "Det valda :attribute &auml;r ogiltigt.",
    "numeric"          => ":attribute m&aring;ste vara ett nummer.",
    "regex"            => "Formatet för :attribute &auml;r ogiltigt.",
    "required"         => ":attribute f&auml;ltet &auml;r obligatoriskt.",
    "required_if"      => "F&auml;ltet :attribute &auml;r obligatoriskt d&aring; :other &auml;r :value.",
    "required_with"    => "F&auml;ltet :attribute &auml;r obligatoriskt d&aring; :values &auml;r ifyllt.",
    "required_without" => "F&auml;ltet :attribute &auml;r obligatoriskt d&aring; :values ej &auml;r ifyllt.",
    "same"             => ":attribute och :other m&aring;ste vara lika.",
    "size"             => array(
        "numeric" => ":attribute m&aring;ste vara :size.",
        "file"    => ":attribute f&aring;r endast vara :size kilobyte stor.",
        "string"  => ":attribute m&aring;ste inneh&aring;lla :size tecken.",
    ),
    "unique"           => ":attribute anv&auml;nds redan.",
    "url"              => ":attribute formatet &auml;r ogiltig",

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