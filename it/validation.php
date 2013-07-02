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
    "accepted"         => ":attribute deve essere accettato.",
    "active_url"       => ":attribute non &egrave; un URL valido.",
    "after"            => ":attribute deve essere una data successiva al :date.",
    "alpha"            => ":attribute pu&ograve; contenere solo lettere.",
    "alpha_dash"       => ":attribute pu&ograve; contenere solo numeri lettere e dashes.",
    "alpha_num"        => ":attribute pu&ograve; contenere solo lettere e numeri.",
    "before"           => ":attribute deve essere una data che precede :date.",
    "between"          => array(
        "numeric" => ":attribute deve trovarsi tra :min - :max.",
        "file"    => ":attribute deve trovarsi tra :min - :max kilobytes.",
        "string"  => ":attribute deve trovarsi tra :min - :max caratteri.",
    ),
    "confirmed"        => "Il campo di conferma per :attribute non coincide.",
    "date"             => "The :attribute is not a valid date.",
    "date_format"      => "The :attribute does not match the format :format.",
    "different"        => ":attribute e :other devono essere differenti.",
    "digits"           => "The :attribute must be :digits digits.",
    "digits_between"   => "The :attribute must be between :min and :max digits.",
    "email"            => ":attribute non &egrave; valido.",
    "exists"           => ":attribute selezionato/a non &egrave; valido.",
    "image"            => ":attribute deve essere un'immagine.",
    "in"               => ":attribute selezionato non &egrave; valido.",
    "integer"          => ":attribute deve essere intero.",
    "ip"               => ":attribute deve essere un indirizzo IP valido.",
    "max"              => array(
        "numeric" => ":attribute deve essere minore di :max.",
        "file"    => ":attribute non deve essere pi&ugrave grande di :max kilobytes.",
        "string"  => ":attribute non pu&ograve; contenere pi&ugrave; di :max caratteri.",
    ),
    "mimes"            => ":attribute deve essere del tipo: :values.",
    "min"              => array(
        "numeric" => ":attribute deve valere almeno :min.",
        "file"    => ":attribute deve essere pi&ugrave; grande di :min kilobytes.",
        "string"  => ":attribute deve contenere almeno :min caratteri.",
    ),
    "not_in"           => "Il valore selezionato per :attribute non &egrave; valido.",
    "numeric"          => ":attribute deve essere un numero.",
    "regex"            => "The :attribute format is invalid.",
    "required"         => ":attribute non pu&ograve; essere omesso.",
    "required_if"      => "The :attribute field is required when :other is :value.",
    "required_with"    => "The :attribute field is required when :values is present.",
    "required_without" => "The :attribute field is required when :values is not present.",
    "same"             => ":attribute e :other devono coincidere.",
    "size"             => array(
        "numeric" => ":attribute deve valere :size.",
        "file"    => ":attribute deve essere grande :size kilobyte.",
        "string"  => ":attribute deve contenere :size caratteri.",
    ),
    "unique"           => ":attribute &egrave; stato gi&agrave; usato.",
    "url"              => ":attribute deve essere un URL.",

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