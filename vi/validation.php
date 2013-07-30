<?php

/*
|--------------------------------------------------------------------------
| Vietnamese Language for Laravel 4
|--------------------------------------------------------------------------
|
| Translate by anhsk.ohbo@gmail.com
|
*/

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
	
	"accepted"         => "Trường :attribute phải đuợc chấp nhận.",
	"active_url"       => "Trường :attribute không phải là một URL hợp lệ.",
	"after"            => "Trường :attribute phải là một ngày sau ngày :date.",
	"alpha"            => "Trường :attribute chỉ có thể chứa các chữ cái",
	"alpha_dash"       => "Trường :attribute chỉ có thể chứa chữ cái, số và dấu gạch ngang.",
	"alpha_num"        => "Trường :attribute chỉ có thể chứa chữ cái và số.",
	"before"           => "Trường :attribute phải là một ngày trước ngày :date.",
	"between"          => array(
		"numeric" => "Trường :attribute phải nằm trong khoảng :min - :max.",
		"file"    => "Dung lượng tập tin trong trường :attribute phải từ :min - :max kB.",
		"string"  => "Trường :attribute phải từ :min - :max ký tự.",
	),
	"confirmed"        => "Giá trị xác nhận trong trường :attribute không khớp.",
	"date"             => "Trường :attribute không phải là định dạng của ngày-tháng.",
	"date_format"      => "Trường :attribute không giống với định dạng :format.",
	"different"        => "Trường :attribute và :other phải khác nhau.",
	"digits"           => "Độ dài của trường :attribute phải gồm :digits chữ số.",
	"digits_between"   => "Độ dài của trường :attribute phải nằm trong khoảng :min and :max chữ số.",
	"email"            => "Trường :attribute không giống với định dạng của email.",
	"exists"           => "Giá trị đã chọn trong trường :attribute không hợp lệ.",
	"image"            => "Các tập tin trong trường :attribute phải là định dạng hình ảnh.",
	"in"               => "Giá trị đã chọn trong trường :attribute không hợp lệ.",
	"integer"          => "Trường :attribute phải là một số nguyên.",
	"ip"               => "Trường :attribute phải là một địa chỉa IP.",
	"max"              => array(
		"numeric" => "Trường :attribute không đuợc lớn hơn :max.",
		"file"    => "Dung lượng tập tin trong trường :attribute không được lớn hơn :max kB.",
		"string"  => "Trường :attribute không được lớn hơn :max ký tự.",
	),
	"mimes"            => "Trường :attribute phải là một tập tin có định dạng: :values.",
	"min"              => array(
		"numeric" => "Trường :attribute phải tối thiểu là :min.",
		"file"    => "Dung lượng tập tin trong trường :attribute phải tối thiểu :min kB.",
		"string"  => "Trường :attribute phải tối thiểu :min ký tự.",
	),
	"not_in"           => "Giá trị đã chọn trong trường :attribute không hợp lệ.",
	"numeric"          => "Trường :attribute phải là một số.",
	"regex"            => "Định dạng trường :attribute không hợp lệ.",
	"required"         => "Trường :attribute không đuợc bỏ trống.",
	"required_if"      => "Trường :attribute không đuợc bỏ trống khi trường :other là :value.",
	"required_with"    => "Trường :attribute không đuợc bỏ trống khi trường :values có giá trị.",
	"required_without" => "Trường :attribute không đuợc bỏ trống khi trường :values không có giá trị.",
	"same"             => "Trường :attribute và :other phải giống nhau.",
	"size"             => array(
		"numeric" => "Trường :attribute phải bằng :size.",
		"file"    => "Dung lượng tập tin trong trường :attribute phải bằng :size kB.",
		"string"  => "Trường :attribute phải có :size ký tự.",
	),
	"unique"           => "Trường :attribute đã có trong CSDL.",
	"url"              => "Trường :attribute không giống với định dạng một URL.",

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
