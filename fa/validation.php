<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"accepted"         => ":attribute باید پذیرفته شود.",
	"active_url"       => ":attribute یک URL معتبر نیست.",
	"after"            => ":attribute باید بعد از تاریخ :date باشد.",
	"alpha"            => ":attribute باید تنها شامل حروف باشد.",
	"alpha_dash"       => ":attribute باید تنها شامل حروف، اعداد و خط تیره باشد.",
	"alpha_num"        => ":attribute باید تنها شامل حروف و اعداد باشد.",
	"array"            => ":attribute باید یکآرایه باشد.",
	"before"           => ":attribute باید قبل از تاریخ :date باشد.",
	"between"          => array(
		"numeric" => ":attribute باید بین :min و :max باشد.",
		"file"    => ":attribute باید بین :min و :max کیلوبایت باشد.",
		"string"  => ":attribute باید بین :min و :max کاراکتر باشد.",
		"array"   => ":attribute باید بین گزینه های :min و :max باشد.",
	),
	"confirmed"        => ":attribute با تائیده یکسان نمی باشد.",
	"date"             => ":attribute یک تاریخ معتبر نمی باشد.",
	"date_format"      => ":attribute با قالب :format مطابقت ندارد.",
	"different"        => ":attribute و :other نباید متفاوت باشند.",
	"digits"           => ":attribute باید :digits رقم باشد.",
	"digits_between"   => ":attribute باید بین :min تا :max رقم باشد.",
	"email"            => "قالب :attribute نامعتبر است.",
	"exists"           => ":attribute انتخاب شده نامعتبر است.",
	"image"            => ":attribute باید یک تصویر باشد.",
	"in"               => ":attribute انتخاب شده نامعتبر است.",
	"integer"          => ":attribute باید یک عدد صحیح باشد.",
	"ip"               => ":attribute باید یک IP معتبر باشد.",
	"max"              => array(
		"numeric" => ":attribute نباید بزرگتر از :max لاشد.",
		"file"    => ":attribute نباید بزرگتر از :max کیلوبایت باشد.",
		"string"  => ":attribute نباید بیش از :max کاراکتر باشد.",
		"array"   => ":attribute نباید بیش از :max گزینه باشد.",
	),
	"mimes"            => ":attribute باید یک فال از نوع: :values باشد.",
	"min"              => array(
		"numeric" => ":attribute باید کوچکتر از :min باشد.",
		"file"    => ":attribute باید کمتر از :min کیلوبایت باشد.",
		"string"  => ":attribute باید کمتر از :min کاراکتر باشد.",
		"array"   => ":attribute باید کمتر از :min گزینه باشد.",
	),
	"not_in"           => ":attribute انتخاب شده معتبر نیست.",
	"numeric"          => ":attribute باید یک عدد باشد.",
	"regex"            => "قالب :attribute نامعتبر است.",
	"required"         => "پر کردن :attribute الزامی است.",

	"required_if"      => ":attribute الزامی است زمانی که :other برابر است با :value.",
	"required_with"    => ":attribute الزامی است زمانی که :values موجود است.",
	"required_with_all"=> ":attribute الزامی است زمانی که :values موجود است.",
	"required_without" => ":attribute الزامی است زمانی که :values موجود نیست.",
	"required_without_all" => ":attribute الزامی است زمانی که :values موجود نیست.",
	"required_if"      => ":attribute الزامی است زمانی که :other برابر است با :value.",
	"required_with"    => ":attribute الزامی است زمانی که :values موجود است.",
	"required_without" => ":attribute الزامی است زمانی که :values موجود نیست.",
	"same"             => ":attribute و :other باید یکسان باشند.",
	"size"             => array(
		"numeric" => ":attribute باید :size باشد.",
		"file"    => ":attribute باید :size کیلوبایت باشد.",
		"string"  => ":attribute باید :size کاراکتر باشد.",
		"array"   => ":attribute باید شامل :size گزینه باشد.",
	),
	"unique"           => ":attribute موجوداست.",
	"url"              => ":attribute نامعتبر است.",

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
