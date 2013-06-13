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

	"accepted"         => ":attribute deve ser aceite.",
	"active_url"       => ":attribute não é um URL válido.",
	"after"            => ":attribute deverá ser uma data posterior a :date.",
	"alpha"            => ":attribute deverá apenas conter letras.",
    "alpha_dash"       => ":attribute deverá apenas conter letras, números e traços.",
	"alpha_num"        => ":attribute deverá conter apenas letras e números .",
	"before"           => ":attributedeverá ser uma data anterior a :date.",
	"between"          => array(
		"numeric" => ":attribute deverá ter um valor entre :min - :max.",
		"file"    => ":attribute deverá ter um tamanho entre :min - :max kilobytes.",
		"string"  => ":attribute deverá conter entre :min - :max carateres.",
	),	
	"confirmed"        => "A confirmação de :attribute não coincide.",
	"date"             => ":attribute não é uma data válida.",
	"date_format"      => ":attribute não respeita o formato :format.",
	"different"        => ":attribute e :other deverão ser diferentes.",
	"digits"           => ":attribute deverá conter :digits dígitos.",
	"digits_between"   => ":attribute deverá conter entre :min a :max dígitos.",
	"email"            => ":attribute não é um endereço de correio eletrónico válido.",
	"exists"           => ":attribute é inválido.",
	"image"            => ":attribute deverá ser uma imagem.",
	"in"               => ":attribute é inválido.",
	"integer"          => ":attribute deverá ser um número inteiro.",
	"ip"               => ":attribute deverá ser um IP válido.",
	"max"              => array(
		"numeric" => ":attribute não deverá ser superior a :max.",
		"file"    => ":attribute não deverá ter tamanho superior a :max kilobytes.",
		"string"  => ":attribute não deverá conter mais de :max carateres.",
	),
	"mimes"            => ":attribute deverá ser um ficheiro do tipo: :values.",
	"min"              => array(
		"numeric" => ":attribute deverá ter um valor superior ou igual a :min.",
		"file"    => ":attribute deverá ter no mínimo :min kilobytes.",
		"string"  => ":attribute deverá conter no mínio :min carateres.",
	),
	"not_in"           => ":attribute é inválido.",
	"numeric"          => ":attribute deverá conter um valor numérico.",
	"regex"            => "O formato de :attribute é inválido.",
	"required"         => "O campo :attribute é obrigatório.",
	"required_if"      => "O campo :attribute é obrigatório quando :other é igual a :value.",
	"required_with"    => "O campo :attribute é obrigatório quando :values está presente.",	
	"required_without" => "O campo :attribute é obrigatório quanto :values não está presente.",
	"same"             => ":attribute e :other deverão ser iguais.",
	"size"             => array(
		"numeric" => ":attribute deverá conter o valor :size.",
		"file"    => ":attribute deverá ter o tamanho de :size kilobytes.",
		"string"  => ":attribute deverá conter :size carateres.",
	),
	"unique"           => ":attribute já se encontra registado.",
	"url"              => "O formato :attribute é inválido.",

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
