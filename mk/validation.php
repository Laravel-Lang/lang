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

    "accepted"         => "Полето :attribute мора да биде прифатено.",
    "active_url"       => "Полето :attribute не е валиден URL.",
    "after"            => "Полето :attribute мора да биде датум после :date.",
    "alpha"            => "Полето :attribute може да содржи само букви.",
    "alpha_dash"       => "Полето :attribute може да содржи само букви, цифри, долна црта и тире.",
    "alpha_num"        => "Полето :attribute може да содржи само букви и цифри.",
    "array"            => "Полето :attribute мора да биде низа.",
    "before"           => "Полето :attribute мора да биде датум пред :date.",
    "between"          => array(
        "numeric" => "Полето :attribute мора да биде помеѓу :min и :max.",
        "file"    => "Полето :attribute мора да биде помеѓу :min и :max килобајти.",
        "string"  => "Полето :attribute мора да биде помеѓу :min и :max карактери.",
        "array"   => "Полето :attribute мора да има помеѓу :min - :max карактери."
    ),
    "confirmed"        => "Полето :attribute не е потврдено.",
    "date"             => "Полето :attribute не е валиден датум.",
    "date_format"      => "Полето :attribute не е во формат :format.",
    "different"        => "Полињата :attribute и :other треба да се различни.",
    "digits"           => "Полето :attribute треба да има :digits цифри.",
    "digits_between"   => "Полето :attribute треба да има помеѓу :min и :max цифри.",
    "email"            => "Полето :attribute не е во валиден формат.",
    "exists"           => "Избранато поле :attribute веќе постои.",
    "image"            => "Полето :attribute мора да биде слика.",
    "in"               => "Избраното поле :attribute е невалидно.",
    "integer"          => "Полето :attribute мора да биде цел број.",
    "ip"               => "Полето :attribute мора да биде IP адреса.",
    "max"              => array(
        "numeric" => "Полето :attribute мора да биде помало од :max.",
        "file"    => "Полето :attribute мора да биде помало од :max килобајти.",
        "string"  => "Полето :attribute мора да има помалку од :max карактери.",
        "array"   => "Полето :attribute не може да има повеќе од :max карактери."
    ),
    "mimes"            => "Полето :attribute мора да биде фајл од типот: :values.",
    "min"              => array(
        "numeric" => "Полето :attribute мора да биде минимум :min.",
        "file"    => "Полето :attribute мора да биде минимум :min килобајти.",
        "string"  => "Полето :attribute мора да има минимум :min карактери.",
        "array"   => "Полето :attribute мора да има минимум :min карактери."
    ),
    "not_in"           => "Избраното поле :attribute е невалидно.",
    "numeric"          => "Полето :attribute мора да биде број.",
    "regex"            => "Полето :attribute е во невалиден формат.",
    "required"         => "Полето :attribute е задолжително.",
    "required_if"      => "Полето :attribute е задолжително, кога :other е :value.",
    "required_with"    => "Полето :attribute е задолжително, кога е внесено :values.",
    "required_without" => "Полето :attribute е задолжително, кога не е внесено :values.",
    "same"             => "Полињата :attribute и :other треба да совпаѓаат.",
    "size"             => array(
        "numeric" => "Полето :attribute мора да биде :size.",
        "file"    => "Полето :attribute мора да биде :size килобајти.",
        "string"  => "Полето :attribute мора да има :size карактери.",
        "array"   => "Полето :attribute мора да има :size карактери."
    ),
    "unique"           => "Полето :attribute веќе постои.",
    "url"              => "Полето :attribute не е во валиден формат.",

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
