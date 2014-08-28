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

    "accepted"         => ":attribute debe ser aceptado.",
    "active_url"       => ":attribute no es un URL v&aacute;lido.",
    "after"            => ":attribute debe ser una fecha posterior a :date.",
    "alpha"            => ":attribute solo debe contener letras.",
    "alpha_dash"       => ":attribute solo debe contener letras, n&uacute;meros y guiones.",
    "alpha_num"        => ":attribute solo debe contener letras y n&uacute;meros.",
    "array"            => ":attribute debe ser un conjunto.",
    "before"           => ":attribute debe ser una fecha anterior a :date.",
    "between"          => array(
        "numeric" => ":attribute tiene que estar entre :min - :max.",
        "file"    => ":attribute debe pesar entre :min - :max kilobytes.",
        "string"  => ":attribute tiene que tener entre :min - :max caracteres.",
        "array"   => ":attribute tiene que tener entre :min - :max &iacute;tems.",
    ),
    "boolean"          => "El campo :attribute debe tener un valor verdadero o falso.",
    "confirmed"        => "La confirmaci&oacute;n de :attribute no coincide.",
    "date"             => ":attribute no es una fecha v&aacute;lida.",
    "date_format"      => ":attribute no corresponde al formato :format.",
    "different"        => ":attribute y :other deben ser diferentes.",
    "digits"           => ":attribute debe tener :digits d&iacute;gitos.",
    "digits_between"   => ":attribute debe tener entre :min y :max d&iacute;gitos.",
    "email"            => ":attribute no es un correo v&aacute;lido",
    "exists"           => ":attribute es inv&aacute;lido.",
    "image"            => ":attribute debe ser una imagen.",
    "in"               => ":attribute es inv&aacute;lido.",
    "integer"          => ":attribute debe ser un n&uacute;mero entero.",
    "ip"               => ":attribute debe ser una direcci&oacute;n IP v&aacute;lida.",
    "max"              => array(
        "numeric" => ":attribute no debe ser mayor a :max.",
        "file"    => ":attribute no debe ser mayor que :max kilobytes.",
        "string"  => ":attribute no debe ser mayor que :max caracteres.",
        "array"   => ":attribute no debe tener m&aacute;s de :max elementos.",
    ),
    "mimes"            => ":attribute debe ser un archivo con formato: :values.",
    "min"              => array(
        "numeric" => "El tama&ntilde;o de :attribute debe ser de al menos :min.",
        "file"    => "El tama&ntilde;o de :attribute debe ser de al menos :min kilobytes.",
        "string"  => ":attribute debe contener al menos :min caracteres.",
        "array"   => ":attribute debe tener al menos :min elementos.",
    ),
    "not_in"           => ":attribute es inv&aacute;lido.",
    "numeric"          => ":attribute debe ser num&eacute;rico.",
    "regex"            => "El formato de :attribute es inv&aacute;lido.",
    "required"         => "El campo :attribute es obligatorio.",
    "required_if"      => "El campo :attribute es obligatorio cuando :other es :value.",
    "required_with"    => "El campo :attribute es obligatorio cuando :values est&aacute; presente.",
    "required_with_all" => "El campo :attribute es obligatorio cuando :values est&aacute; presente.",
    "required_without" => "El campo :attribute es obligatorio cuando :values no est&aacute; presente.",
    "required_without_all" => "El campo :attribute es obligatorio cuando ninguno de :values est&eacute;n presentes.",
    "same"             => ":attribute y :other deben coincidir.",
    "size"             => array(
        "numeric" => "El tama&ntilde;o de :attribute debe ser :size.",
        "file"    => "El tama&ntilde;o de :attribute debe ser :size kilobytes.",
        "string"  => ":attribute debe contener :size caracteres.",
        "array"   => ":attribute debe contener :size elementos.",
    ),
    "timezone"         => "La :attribute debe ser una zona v&aacute;lida.",
    "unique"           => ":attribute ya ha sido registrado.",
    "url"              => "El formato :attribute es inv&aacute;lido.",

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

    'custom' => array(
        'attribute-name' => array(
            'rule-name' => 'custom-message',
        ),
    ),

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
