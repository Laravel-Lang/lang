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

	"accepted"             => "The :attribute ត្រូវបានទទួលយក។",
	"active_url"           => "The :attribute មិនមែនជា URL ត្រឹមត្រូវឡើយ។",
	"after"                => "The :attribute ត្រូវតែមានកាលបរិច្ឆេទបន្ទាប់ពី :date.",
	"alpha"                => "The :attribute អាចមានអក្សរតែប៉ុណ្ណោះ។",
	"alpha_dash"           => "The :attribute អាចមានតែអក្សរ លេខ និងសហសញ្ញា(-)។",
	"alpha_num"            => "The :attribute អាចមានតែអក្សរ និងលេខ។",
	"array"                => "The :attribute ត្រូវតែជា array.",
	"before"               => "The :attribute ត្រូវតែមានកាលបរិច្ឆេទមុន :date.",
	"between"              => array(
		"numeric" => "The :attribute ត្រូវតែមានរវាង :min និង :max",
		"file"    => "The :attribute ត្រូវតែមានរវាង :min និង :max គីឡូបៃ។",
		"string"  => "The :attribute ត្រូវតែមានរវាង :min និង :max តួអក្សរ។",
		"array"   => "The :attribute ត្រូវតែមានរវាង :min និង :max items",
	),
	"confirmed"            => "The :attribute ការបញ្ជាក់មិនផ្គូផ្គង។",
	"date"                 => "The :attribute គឺមិនមែនជាកាលបរិច្ឆេទត្រឹមត្រូវ។",
	"date_format"          => "The :attribute មិនត្រឹមត្រូវនិងទំរង :format​នេះ។",
	"different"            => "The :attribute និង :other ត្រូវតែបញ្ជាក់។",
	"digits"               => "The :attribute ត្រូវជាខ្ទុង :digits ។",
	"digits_between"       => "The :attribute ត្រូវចាប់ពីខ្ទុង :min​ទៅ :max ។",
	"email"                => "The :attribute ទំរង់នេះមិនត្រឹមត្រូវ។",
	"exists"               => "ការជ្រើសរើស :attribute ត្រឹមត្រូវ",
	"image"                => "The :attribute ត្រូវតៃជារូបភាព។",
	"in"                   => "ការជ្រើសរើស :attribute មិនត្រឹមត្រូវ។",
	"integer"              => "The :attribute ត្រូវតែជាចំនួនគត់។",
	"ip"                   => "The :attribute ត្រូវតែជា IP address​ត្រឹមត្រូវ។",
	"max"                  => array(
		"numeric" => "The :attribute មិនត្រូវធំជាង :max​។",
		"file"    => "The :attribute មិនត្រូវធំជាង :max គីឡូបៃ",
		"string"  => "The :attribute មិនត្រូវធំជាង :max តួអក្សរ",
		"array"   => "The :attribute មិនត្រូវច្រើនជាង :max items.",
	),
	"mimes"                => "The :attribute ត្រូវតែជាប្រភេទឯកសារ type: :values នេះ។",
	"min"                  => array(
		"numeric" => "The :attribute ត្រូវតែតូចជាង :min.",
		"file"    => "The :attribute ត្រូវតៃតួចជាង :min គីឡូបៃ។",
		"string"  => "The :attribute ត្រូវតែតូចជាង :min តួអក្សរ",
		"array"   => "The :attribute ត្រូវតែតិចជាង :min items.",
	),
	"not_in"               => "ការជ្រើសរើស :attribute គឺត្រឹមត្រូវ។",
	"numeric"              => "The :attribute ត្រូវតែជាលេខ។",
	"regex"                => "The :attribute ទំរងមិនត្រឹមត្រូវ។",
	"required"             => "The :attribute field នេះគឺទាមទារឲ្យមាន។",
	"required_if"          => "The :attribute field នេះគឺទាមទារនៅពេល :other គឺ :value​។",
	"required_with"        => "The :attribute field នេះគឺទាមទារនៅពេល :values ត្រូវបង្ហាញ។",
	"required_without"     => "The :attribute field នេះគឺទាមទារនៅពេល :values មិនត្រូវបង្ហាញ។",
	"required_without_all" => "The :attribute field នេះគឺត្រូវបានទាមទារពេលគ្មាន :values បានបង្ហាញ។",
	"same"                 => "The :attribute និង :other ត្រូវតែដូចគ្នា។",
	"size"                 => array(
		"numeric" => "The :attribute ត្រូវតែ :size.",
		"file"    => "The :attribute ត្រូវតែ :size គីឡូបៃ",
		"string"  => "The :attribute ត្រូវតែ :size តួអក្សរ",
		"array"   => "The :attribute ត្រូវតែមាន :size items.",
	),
	"unique"               => "The :attribute ត្រូវបានប្រើរួចហើយ។",
	"url"                  => "The :attribute ទំរងត្រឹមត្រូវ។",

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