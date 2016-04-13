<?php

return [

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

    'accepted'             => ':Attribute باید پذیرفته شده باشد.',
    'active_url'           => 'آدرس :attribute معتبر نیست',
    'after'                => ':Attribute باید تاریخی بعد از :date باشد.',
    'alpha'                => ':Attribute باید شامل حروف الفبا باشد.',
    'alpha_dash'           => ':Attribute باید شامل حروف الفبا و عدد و خظ تیره(-) باشد.',
    'alpha_num'            => ':Attribute باید شامل حروف الفبا و عدد باشد.',
    'array'                => ':Attribute باید شامل آرایه باشد.',
    'before'               => ':Attribute باید تاریخی قبل از :date باشد.',
    'between'              => [
        'numeric' => ':Attribute باید بین :min و :max باشد.',
        'file'    => ':Attribute باید بین :min و :max کیلوبایت باشد.',
        'string'  => ':Attribute باید بین :min و :max کاراکتر باشد.',
        'array'   => ':Attribute باید بین :min و :max آیتم باشد.',
    ],
    'boolean'              => 'فیلد :attribute فقط میتواند صحیح و یا غلط باشد',
    'confirmed'            => ':Attribute با تاییدیه مطابقت ندارد.',
    'date'                 => ':Attribute یک تاریخ معتبر نیست.',
    'date_format'          => ':Attribute با الگوی :format مطاقبت ندارد.',
    'different'            => ':Attribute و :other باید متفاوت باشند.',
    'digits'               => ':Attribute باید :digits رقم باشد.',
    'digits_between'       => ':Attribute باید بین :min و :max رقم باشد.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => 'فرمت :attribute معتبر نیست.',
    'exists'               => ':Attribute انتخاب شده، معتبر نیست.',
    'filled'               => 'فیلد :attribute الزامی است',
    'image'                => ':Attribute باید تصویر باشد.',
    'in'                   => ':Attribute انتخاب شده، معتبر نیست.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => ':Attribute باید نوع داده ای عددی (integer) باشد.',
    'ip'                   => ':Attribute باید IP آدرس معتبر باشد.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => ':Attribute نباید بزرگتر از :max باشد.',
        'file'    => ':Attribute نباید بزرگتر از :max کیلوبایت باشد.',
        'string'  => ':Attribute نباید بیشتر از :max کاراکتر باشد.',
        'array'   => ':Attribute نباید بیشتر از :max آیتم باشد.',
    ],
    'mimes'                => ':Attribute باید یکی از فرمت های :values باشد.',
    'min'                  => [
        'numeric' => ':Attribute نباید کوچکتر از :min باشد.',
        'file'    => ':Attribute نباید کوچکتر از :min کیلوبایت باشد.',
        'string'  => ':Attribute نباید کمتر از :min کاراکتر باشد.',
        'array'   => ':Attribute نباید کمتر از :min آیتم باشد.',
    ],
    'not_in'               => ':Attribute انتخاب شده، معتبر نیست.',
    'numeric'              => ':Attribute باید شامل عدد باشد.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => ':Attribute یک فرمت معتبر نیست',
    'required'             => 'فیلد :attribute الزامی است',
    'required_if'          => 'فیلد :attribute هنگامی که :other برابر با :value است، الزامیست.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => ':Attribute الزامی است زمانی که :values موجود است.',
    'required_with_all'    => ':Attribute الزامی است زمانی که :values موجود است.',
    'required_without'     => ':Attribute الزامی است زمانی که :values موجود نیست.',
    'required_without_all' => ':Attribute الزامی است زمانی که :values موجود نیست.',
    'same'                 => ':Attribute و :other باید مانند هم باشند.',
    'size'                 => [
        'numeric' => ':Attribute باید برابر با :size باشد.',
        'file'    => ':Attribute باید برابر با :size کیلوبایت باشد.',
        'string'  => ':Attribute باید برابر با :size کاراکتر باشد.',
        'array'   => ':Attribute باسد شامل :size آیتم باشد.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'فیلد :attribute باید یک منطقه صحیح باشد.',
    'unique'               => ':Attribute قبلا انتخاب شده است.',
    'url'                  => 'فرمت آدرس :attribute اشتباه است.',

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

    'custom'               => [
        //
    ],

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

    'attributes'           => [
        'name'                  => 'نام',
        'username'              => 'نام کاربری',
        'email'                 => 'پست الکترونیکی',
        'first_name'            => 'نام',
        'last_name'             => 'نام خانوادگی',
        'password'              => 'رمز عبور',
        'password_confirmation' => 'تاییدیه ی رمز عبور',
        'city'                  => 'شهر',
        'country'               => 'کشور',
        'address'               => 'نشانی',
        'phone'                 => 'تلفن',
        'mobile'                => 'تلفن همراه',
        'age'                   => 'سن',
        'sex'                   => 'جنسیت',
        'gender'                => 'جنسیت',
        'day'                   => 'روز',
        'month'                 => 'ماه',
        'year'                  => 'سال',
        'hour'                  => 'ساعت',
        'minute'                => 'دقیقه',
        'second'                => 'ثانیه',
        'title'                 => 'عنوان',
        'text'                  => 'متن',
        'content'               => 'محتوا',
        'description'           => 'توضیحات',
        'excerpt'               => 'گلچین کردن',
        'date'                  => 'تاریخ',
        'time'                  => 'زمان',
        'available'             => 'موجود',
        'size'                  => 'اندازه',
    ],

];
