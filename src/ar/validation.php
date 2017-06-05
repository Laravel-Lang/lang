<?php

return [
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

    'accepted'             => 'يجب قبول :Attribute',
    'active_url'           => ':Attribute لا يُمثّل رابطًا صحيحًا',
    'after'                => 'يجب على :Attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',
    'after_or_equal'       => ':Attribute يجب أن يكون تاريخاً لاحقاً أو مطابقاً للتاريخ :date.',
    'alpha'                => 'يجب أن لا يحتوي :Attribute سوى على حروف',
    'alpha_dash'           => 'يجب أن لا يحتوي :Attribute على حروف، أرقام ومطّات.',
    'alpha_num'            => 'يجب أن يحتوي :Attribute على حروفٍ وأرقامٍ فقط',
    'array'                => 'يجب أن يكون :Attribute ًمصفوفة',
    'before'               => 'يجب على :Attribute أن يكون تاريخًا سابقًا للتاريخ :date.',
    'before_or_equal'      => ':Attribute يجب أن يكون تاريخا سابقا أو مطابقا للتاريخ :date',
    'between'              => [
        'numeric' => 'يجب أن تكون قيمة :Attribute بين :min و :max.',
        'file'    => 'يجب أن يكون حجم الملف :Attribute بين :min و :max كيلوبايت.',
        'string'  => 'يجب أن يكون عدد حروف النّص :Attribute بين :min و :max',
        'array'   => 'يجب أن يحتوي :Attribute على عدد من العناصر بين :min و :max',
    ],
    'boolean'              => 'يجب أن تكون قيمة :Attribute إما true أو false ',
    'confirmed'            => 'حقل التأكيد غير مُطابق للحقل :Attribute',
    'date'                 => ':Attribute ليس تاريخًا صحيحًا',
    'date_format'          => 'لا يتوافق :Attribute مع الشكل :format.',
    'different'            => 'يجب أن يكون الحقلان :Attribute و :other مُختلفان',
    'digits'               => 'يجب أن يحتوي :Attribute على :digits رقمًا/أرقام',
    'digits_between'       => 'يجب أن يحتوي :Attribute بين :min و :max رقمًا/أرقام ',
    'dimensions'           => 'الـ :Attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct'             => 'للحقل :Attribute قيمة مُكرّرة.',
    'email'                => 'يجب أن يكون :Attribute عنوان بريد إلكتروني صحيح البُنية',
    'exists'               => ':Attribute لاغٍ',
    'file'                 => 'الـ :Attribute يجب أن يكون ملفا.',
    'filled'               => ':Attribute إجباري',
    'image'                => 'يجب أن يكون :Attribute صورةً',
    'in'                   => ':Attribute لاغٍ',
    'in_array'             => ':Attribute غير موجود في :other.',
    'integer'              => 'يجب أن يكون :Attribute عددًا صحيحًا',
    'ip'                   => 'يجب أن يكون :Attribute عنوان IP صحيحًا',
    'ipv4'                 => 'يجب أن يكون :Attribute عنوان IPv4 صحيحًا.',
    'ipv6'                 => 'يجب أن يكون :Attribute عنوان IPv6 صحيحًا.',
    'json'                 => 'يجب أن يكون :Attribute نصآ من نوع JSON.',
    'max'                  => [
        'numeric' => 'يجب أن تكون قيمة :Attribute مساوية أو أصغر لـ :max.',
        'file'    => 'يجب أن لا يتجاوز حجم الملف :Attribute :max كيلوبايت',
        'string'  => 'يجب أن لا يتجاوز طول النّص :Attribute :max حروفٍ/حرفًا',
        'array'   => 'يجب أن لا يحتوي :Attribute على أكثر من :max عناصر/عنصر.',
    ],
    'mimes'                => 'يجب أن يكون ملفًا من نوع : :values.',
    'mimetypes'            => 'يجب أن يكون ملفًا من نوع : :values.',
    'min'                  => [
        'numeric' => 'يجب أن تكون قيمة :Attribute مساوية أو أكبر لـ :min.',
        'file'    => 'يجب أن يكون حجم الملف :Attribute على الأقل :min كيلوبايت',
        'string'  => 'يجب أن يكون طول النص :Attribute على الأقل :min حروفٍ/حرفًا',
        'array'   => 'يجب أن يحتوي :Attribute على الأقل على :min عُنصرًا/عناصر',
    ],
    'not_in'               => ':Attribute لاغٍ',
    'numeric'              => 'يجب على :Attribute أن يكون رقمًا',
    'present'              => 'يجب تقديم :Attribute',
    'regex'                => 'صيغة :Attribute .غير صحيحة',
    'required'             => ':Attribute مطلوب.',
    'required_if'          => ':Attribute مطلوب في حال ما إذا كان :other يساوي :value.',
    'required_unless'      => ':Attribute مطلوب في حال ما لم يكن :other يساوي :values.',
    'required_with'        => ':Attribute مطلوب إذا توفّر :values.',
    'required_with_all'    => ':Attribute مطلوب إذا توفّر :values.',
    'required_without'     => ':Attribute مطلوب إذا لم يتوفّر :values.',
    'required_without_all' => ':Attribute مطلوب إذا لم يتوفّر :values.',
    'same'                 => 'يجب أن يتطابق :Attribute مع :other',
    'size'                 => [
        'numeric' => 'يجب أن تكون قيمة :Attribute مساوية لـ :size',
        'file'    => 'يجب أن يكون حجم الملف :Attribute :size كيلوبايت',
        'string'  => 'يجب أن يحتوي النص :Attribute على :size حروفٍ/حرفًا بالظبط',
        'array'   => 'يجب أن يحتوي :Attribute على :size عنصرٍ/عناصر بالظبط',
    ],
    'string'               => 'يجب أن يكون :Attribute نصآ.',
    'timezone'             => 'يجب أن يكون :Attribute نطاقًا زمنيًا صحيحًا',
    'unique'               => 'قيمة :Attribute مُستخدمة من قبل',
    'uploaded'             => 'فشل في تحميل الـ :Attribute',
    'url'                  => 'صيغة الرابط :Attribute غير صحيحة',

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
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
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
        'name'                  => 'الاسم',
        'username'              => 'اسم المُستخدم',
        'email'                 => 'البريد الالكتروني',
        'first_name'            => 'الاسم',
        'last_name'             => 'اسم العائلة',
        'password'              => 'كلمة السر',
        'password_confirmation' => 'تأكيد كلمة السر',
        'city'                  => 'المدينة',
        'country'               => 'الدولة',
        'address'               => 'العنوان',
        'phone'                 => 'الهاتف',
        'mobile'                => 'الجوال',
        'age'                   => 'العمر',
        'sex'                   => 'الجنس',
        'gender'                => 'النوع',
        'day'                   => 'اليوم',
        'month'                 => 'الشهر',
        'year'                  => 'السنة',
        'hour'                  => 'ساعة',
        'minute'                => 'دقيقة',
        'second'                => 'ثانية',
        'title'                 => 'اللقب',
        'content'               => 'المُحتوى',
        'description'           => 'الوصف',
        'excerpt'               => 'المُلخص',
        'date'                  => 'التاريخ',
        'time'                  => 'الوقت',
        'available'             => 'مُتاح',
        'size'                  => 'الحجم',
    ],
];
