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

    "accepted"         => "Il campo :attribute deve essere accettato.",
    "active_url"       => "Il campo :attribute non è un URL valido.",
    "after"            => "Il campo :attribute deve essere una data successiva a :date.",
    "alpha"            => "Il campo :attribute può contenere solo lettere.",
    "alpha_dash"       => "Il campo :attribute può contenere solo lettere, numeri e trattini.",
    "alpha_num"        => "Il campo :attribute può contenere solo lettere e numeri.",
    "before"           => "Il campo :attribute deve essere una data precedente a :date.",
    "between"          => array(
        "numeric" => "Il valore di :attribute deve essere compreso tra :min - :max.",
        "file"    => "Il file :attribute deve essere di dimensioni comprese tra :min - :max kilobytes.",
        "string"  => "Il campo :attribute deve essere di lunghezza compresa tra :min e :max caratteri.",
    ),
    "confirmed"        => "Il campo :attribute di conferma non corrisponde.",
    "date"             => "Il campo :attribute non contiene una data valida.",
    "date_format"      => "Il campo :attribute non corrisponde al formato :format.",
    "different"        => "Il campo :attribute e :other non possono essere uguali.",
    "digits"           => "Il campo :attribute deve contenere :digits cifre.",
    "digits_between"   => "Il campo :attribute deve essere tra :min e :max cifre.",
    "email"            => "Il formato del campo :attribute non è valido.",
    "exists"           => "Il :attribute selezionato non è valido.",
    "image"            => "Il campo :attribute deve essere una immagine.",
    "in"               => "Il :attribute selezionato non è valido.",
    "integer"          => "Il campo :attribute deve essere un intero.",
    "ip"               => "Il campo :attribute deve contenere un indirizzo IP valido.",
    "max"              => array(
        "numeric" => "Il valore di :attribute deve essere minore di :max.",
        "file"    => "Il file :attribute deve essere di dimensioni minori di :max kilobytes.",
        "string"  => "Il campo :attribute deve essere lungo massimo :max caratteri.",
    ),
    "mimes"            => "Il campo :attribute deve essere un file di tipo: :values.",
    "min"              => array(
        "numeric" => "Il valore di :attribute deve essere almeno :min.",
        "file"    => "Il file :attribute deve avere una dimensione minima di :min kilobytes.",
        "string"  => "Il campo :attribute deve avere una lunghezza minima di :min caratteri.",
    ),
    "not_in"           => "Il campo :attribute selezionato non è valido.",
    "numeric"          => "Il campo :attribute deve essere un numero.",
    "regex"            => "Il campo :attribute ha un formato non valido.",
    "required"         => "Il campo :attribute è obbligatorio.",
    "required_if"      => "Il campo :attribute è richiesto quando :other è :value.",
    "required_with"    => "Il campo :attribute è richiesto quando :values è presente.",
    "required_without" => "Il campo :attribute è richiesto quando :values non è presente.",
    "same"             => "Il campo :attribute e il campo :other devono corrispondere.",
    "size"             => array(
        "numeric" => "Il campo :attribute deve essere :size.",
        "file"    => "Il campo :attribute deve essere :size kilobytes.",
        "string"  => "Il campo :attribute deve essere :size caratteri.",
    ),
    "unique"         => "Il campo :attribute è già stato utilizzato.",
    "url"            => "Il formato del campo :attribute non è valido.",

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