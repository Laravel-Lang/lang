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

	"accepted"         => "حقل :attribute يجب أن يتم قبوله.",
	"active_url"       => "حقل :attribute ليس عنوان إنترنت صالح.",
	"after"            => "حقل :attribute يجب أن يكون تاريخ بعد :date.",
	"alpha"            => "حقل :attribute من الممكن أن يحوي أحرفاً فقط.",
	"alpha_dash"       => "حقل :attribute من الممكن أن يحوي أحرف, أرقام, وإشارة ناقص.",
	"alpha_num"        => "حقل :attribute من الممكن أن يحوي أحرف وأرقام.",
	"before"           => "حقل :attribute يجب أن يكون تاريخ قبل :date.",
	"between"          => array(
		"numeric" => "حقل :attribute يجب أن يكون بين :min - :max.",
		"file"    => "حقل :attribute يجب أن يكون بين :min - :max كيلو بايت.",
		"string"  => "حقل :attribute يجب أن يكون بين :min - :max محرف.",
	),
	"confirmed"        => "حقل :attribute التأكيد لا يتطابق.",
	"date"             => "حقل :attribute ليس تاريخ صحيح.",
	"date_format"      => "حقل :attribute لا يطابق الصيغة :format.",
	"different"        => "حقل :attribute و :other يجب أن يكونا مختلفين.",
	"digits"           => "حقل :attribute يجب أن يكون :digits أرقام.",
	"digits_between"   => "حقل :attribute يجب أن يكون بين :min و :max رقم.",
	"email"            => "حقل :attribute بصيغة خاطئة.",
	"exists"           => "حقل :attribute المختار غير صالح.",
	"image"            => "حقل :attribute يجب أن يكون صورة",
	"in"               => "حقل :attribute المختار غير صالح.",
	"integer"          => "حقل :attribute يجب أن يكون رقماً صحيحاً.",
	"ip"               => "حقل :attribute يجب أن يكون عنوان أنترنت (IP) صحيحاً.",
	"max"              => array(
		"numeric" => "حقل :attribute يجب ألا يكون أكبر من :max.",
		"file"    => "حقل :attribute يجب ألا يكون أكبر من :max كيلو بايت.",
		"string"  => "حقل :attribute يجب ألا يكون أكبر من :max محرف.",
	),
	"mimes"            => "حقل :attribute يجب أن يكون ملف من نوع: :values.",
	"min"              => array(
		"numeric" => "حقل :attribute يجب أن يكون على الأقل :min.",
		"file"    => "حقل :attribute يجب أن يكون على الأقل :min كيول بايت.",
		"string"  => "حقل :attribute يجب أن يكون على الأقل :min محرف.",
	),
	"not_in"           => "حقل :attribute المختار غير صالح.",
	"numeric"          => "حقل :attribute يجب أن يكون رقم.",
	"regex"            => "حقل :attribute صيغته غير صالحة.",
	"required"         => "حقل :attribute مطلوب.",
	"required_if"      => "حقل :attribute مطلوب عندما :other يساوي :value.",
	"required_with"    => "حقل :attribute مطلوب عندما يكون :values موجوداً.",
	"required_without" => "حقل :attribute مطلوب عندما لا يكون :values موجوداً.",
	"same"             => "حقل :attribute و :other يجب أن يتطابقا.",
	"size"             => array(
		"numeric" => "حقل :attribute يجب أن يكون :size.",
		"file"    => "حقل :attribute يجب أن يكون :size كيلو بايت.",
		"string"  => "حقل :attribute يجب أن يكون :size محرف.",
	),
	"unique"           => "حقل :attribute تم استخدامه مسبقاً.",
	"url"              => "حقل :attribute صيغته غير صحيحة.",

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

	'attributes' => array(
		"name" => "الاسم",
		"username" => "اسم المستخدم",
		"email" => "الإيميل",
		"first_name" => "الاسم",
		"last_name" => "الكنية",
		"password" => "كلمة السر",
		"city" => "المدينة",
		"country" => "البلد",
		"address" => "العنوان",
		"phone" => "الهاتف",
		"mobile" => "الجوال",
		"age" => "العمر",
		"sex" => "الجنس",
		"gender" => "الجنس",
		"day" => "اليوم",
		"month" => "الشهر",
		"year" => "السنة",
		"hour" => "ساعة",
		"minute" => "دقيقة",
		"second" => "ثانية",
		"title" => "العنوان",
		"content" => "المحتوى",
		"description" => "الوصف",
		"excerpt" => "المختصر",
		"date" => "التاريخ",
		"time" => "الوقت",
		"available" => "متاح",
		"size" => "الحجم"
	),

);
