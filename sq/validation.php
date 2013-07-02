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
    "accepted"         => ":attribute duhet të pranohet.",
    "active_url"       => ":attribute nuk është URL valide.",
    "after"            => ":attribute duhet të jetë datë pas :date.",
    "alpha"            => ":attribute mund të përmbajë vetëm shkronja.",
    "alpha_dash"       => ":attribute mund të përmbajë vetëm shkronja, numra dhe viza.",
    "alpha_num"        => ":attribute mund të përmbajë vetëm shkronja dhe numra.",
    "before"           => ":attribute duhet të jetë datë para :date.",
    "between"          => array(
        "numeric" => ":attribute duhet të jetë në mes :min - :max.",
        "file"    => ":attribute duhet të jetë në mes :min - :max kilobajtëve.",
        "string"  => ":attribute duhet të jetë në mes :min - :max karaktereve.",
    ),
    "confirmed"        => ":attribute konfirmimi nuk përputhet.",
    "date"             => "The :attribute is not a valid date.",
    "date_format"      => "The :attribute does not match the format :format.",
    "different"        => ":attribute dhe :other duhet të jenë të ndryshme.",
    "digits"           => "The :attribute must be :digits digits.",
    "digits_between"   => "The :attribute must be between :min and :max digits.",
    "email"            => ":attribute formati është jo valid.",
    "exists"           => ":attribute e përzgjedhur është jo valid.",
    "image"            => ":attribute duhet të jetë imazh.",
    "in"               => ":attribute e përzgjedhur është jo valid.",
    "integer"          => ":attribute duhet të jete numër i plotë.",
    "ip"               => ":attribute duhet të jetë një IP adresë e vlefshme.",
    "max"              => array(
        "numeric" => ":attribute duhet të jetë më e vogël se :max.",
        "file"    => ":attribute duhet të jetë më e vogël se :max kilobytes.",
        "string"  => ":attribute duhet të jetë më e vogël se :max characters.",
    ),
    "mimes"            => ":attribute duhet të jetë një fajll i tipit: :values.",
    "min"              => array(
        "numeric" => ":attribute duhet të jetë së paku :min.",
        "file"    => ":attribute duhet të jetë së paku :min kilobajt.",
        "string"  => ":attribute duhet të jetë së paku :min karaktere.",
    ),
    "not_in"           => ":attribute e përzgjedhur është jo valid.",
    "numeric"          => ":attribute duhet të jetë numër.",
    "regex"            => "The :attribute format is invalid.",
    "required"         => ":attribute fusha është e nevojshme.",
    "required_if"      => "The :attribute field is required when :other is :value.",
    "required_with"    => "The :attribute field is required when :values is present.",
    "required_without" => "The :attribute field is required when :values is not present.",
    "same"             => ":attribute dhe :other duhet të përputhen.",
    "size"             => array(
        "numeric" => ":attribute duhet të jetë :size.",
        "file"    => ":attribute duhet të jetë :size kilobajt.",
        "string"  => ":attribute duhet të jetë :size karaktere.",
    ),
    "unique"           => ":attribute tashmë është marrë.",
    "url"              => ":attribute formati është i pavlefshëm.",

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