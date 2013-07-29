<?php

/**
 * Vietnamese Language for Laravel 4
 * Translate by anhsk.ohbo@gmail.com
 *
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
	
	// "accepted"         => "The :attribute must be accepted.",
	"accepted"         => "Trường :attribute phải đuợc chấp nhận.",
	
	// "active_url"       => "The :attribute is not a valid URL.",
	"active_url"       => "Trường :attribute không phải là một URL hợp lệ.",
	
	// "after"            => "The :attribute must be a date after :date.",
	"after"            => "Trường :attribute phải là một ngày sau ngày :date.",
	
	// "alpha"            => "The :attribute may only contain letters.",
	"alpha"            => "Trường :attribute chỉ có thể chứa các chữ cái",
	
	// "alpha_dash"       => "The :attribute may only contain letters, numbers, and dashes.",
	"alpha_dash"       => "Trường :attribute chỉ có thể chứa chữ cái, số và dấu gạch ngang.",
	
	// "alpha_num"        => "The :attribute may only contain letters and numbers.",
	"alpha_num"        => "Trường :attribute chỉ có thể chứa chữ cái và số.",
	
	// "before"           => "The :attribute must be a date before :date.",
	"before"           => "Trường :attribute phải là một ngày trước ngày :date.",
	
	"between"          => array(
		
		// "numeric" => "The :attribute must be between :min - :max.",
		"numeric" => "Trường :attribute phải nằm trong khoảng :min - :max.",
		
		// "file"    => "The :attribute must be between :min - :max kilobytes.",
		"file"    => "Dung lượng tập tin trong trường :attribute phải từ :min - :max kB.",
		
		// "string"  => "The :attribute must be between :min - :max characters.",
		"string"  => "Trường :attribute phải từ :min - :max ký tự.",
	),
	
	// "confirmed"        => "The :attribute confirmation does not match.",
	"confirmed"        => "Giá trị xác nhận trong trường :attribute không khớp.",
	
	// "date"             => "The :attribute is not a valid date.",
	"date"             => "Trường :attribute không phải là định dạng của ngày-tháng.",
	
	// "date_format"      => "The :attribute does not match the format :format.",
	"date_format"      => "Trường :attribute không giống với định dạng :format.",
	
	// "different"        => "The :attribute and :other must be different.",
	"different"        => "Trường :attribute và :other phải khác nhau.",
	
	// "digits"           => "The :attribute must be :digits digits.",
	"digits"           => "Độ dài của trường :attribute phải gồm :digits chữ số.",
	
	// "digits_between"   => "The :attribute must be between :min and :max digits.",
	"digits_between"   => "Độ dài của trường :attribute phải nằm trong khoảng :min and :max chữ số.",
	
	// "email"            => "The :attribute format is invalid.",
	"email"            => "Trường :attribute không giống với định dạng của email.",
	
	// "exists"           => "The selected :attribute is invalid.",
	"exists"           => "Giá trị đã chọn trong trường :attribute không hợp lệ.",
	
	// "image"            => "The :attribute must be an image.",
	"image"            => "Các tập tin trong trường :attribute phải là định dạng hình ảnh.",
	
	// "in"               => "The selected :attribute is invalid.",
	"in"               => "Giá trị đã chọn trong trường :attribute không hợp lệ.",
	
	// "integer"          => "The :attribute must be an integer.",
	"integer"          => "Trường :attribute phải là một số nguyên.",
	
	// "ip"               => "The :attribute must be a valid IP address.",
	"ip"               => "Trường :attribute phải là một địa chỉa IP.",
	
	// 
	"max"              => array(
		
		// "numeric" => "The :attribute may not be greater than :max.",
		"numeric" => "Trường :attribute không đuợc lớn hơn :max.",
		
		// "file"    => "The :attribute may not be greater than :max kilobytes.",
		"file"    => "Dung lượng tập tin trong trường :attribute không được lớn hơn :max kB.",
		
		// "string"  => "The :attribute may not be greater than :max characters.",
		"string"  => "Trường :attribute không được lớn hơn :max ký tự.",
	),
	
	// "mimes"            => "The :attribute must be a file of type: :values.",
	"mimes"            => "Trường :attribute phải là một tập tin có định dạng: :values.",
	
	"min"              => array(
		
		// "numeric" => "The :attribute must be at least :min.",
		"numeric" => "Trường :attribute phải tối thiểu là :min.",
		
		// "file"    => "The :attribute must be at least :min kilobytes.",
		"file"    => "Dung lượng tập tin trong trường :attribute phải tối thiểu :min kB.",
		
		// "string"  => "The :attribute must be at least :min characters.",
		"string"  => "Trường :attribute phải tối thiểu :min ký tự.",
	),
	
	// "not_in"           => "The selected :attribute is invalid.",
	"not_in"           => "Giá trị đã chọn trong trường :attribute không hợp lệ.",
	
	// "numeric"          => "The :attribute must be a number.",
	"numeric"          => "Trường :attribute phải là một số.",
	
	// "regex"            => "The :attribute format is invalid.",
	"regex"            => "Định dạng trường :attribute không hợp lệ.",
	
	// "required"         => "The :attribute field is required.",
	"required"         => "Trường :attribute không đuợc bỏ trống.",
	
	// "required_if"      => "The :attribute field is required when :other is :value.",
	"required_if"      => "The :attribute field is required when :other is :value.",
	
	// "required_with"    => "The :attribute field is required when :values is present.",
	"required_with"    => "The :attribute field is required when :values is present.",
	
	// "required_without" => "The :attribute field is required when :values is not present.",
	"required_without" => "The :attribute field is required when :values is not present.",
	
	// "same"             => "The :attribute and :other must match.",
	"same"             => "Trường :attribute và :other phải giống nhau.",
	
	"size"             => array(
		
		// "numeric" => "The :attribute must be :size.",
		"numeric" => "Trường :attribute phải bằng :size.",
		
		// "file"    => "The :attribute must be :size kilobytes.",
		"file"    => "Dung lượng tập tin trong trường :attribute phải bằng :size kB.",
		
		// "string"  => "The :attribute must be :size characters.",
		"string"  => "Trường :attribute phải có :size ký tự.",
	),
	
	// "unique"           => "The :attribute has already been taken.",
	"unique"           => "Trường :attribute đã có trong CSDL.",
	
	// "url"              => "The :attribute format is invalid.",
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
