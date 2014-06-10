<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |
    | اسطر التحقق والتصديق للغة العربية
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class.
    |
    | الاسطر ادناه تحتوي علي رسائل الخطأ الافتراضية المستخدمة في فئة التحقق.
    |
    | Some of these rules have multiple versions such as the size rules.
    |
    | بعض هذه القواعد تحتوي علي عدة نسخ مثل قاعدة الحجم.
    |
    | Feel free to tweak each of these messages.
    |
    | لا تتردد في تعديل اي منها.
    |
    */

    "accepted"         => ":attribute يجب أن يتم قبول.",
    "active_url"       => ":attribute ليس عنوان إنترنت صالحًا.",
    "before"           => ":attribute يجب أن يكون تاريخ قبل :date.",
    "after"            => ":attribute يجب أن يكون تاريخًا بعد :date.",
    "alpha"            => ":attribute يجب أن يحتوي  على أحرفاً فقط.",
    "alpha_dash"       => ":attribute يجب أن يحتوي  على أحرف وأرقام وإشارة ناقص.",
    "alpha_num"        => ":attribute يجب أن يحتوي  على أحرف وأرقام.",
    "array"            => ":attribute يجب ان تكون مصفوفة.",
    "between"          => array(
        "numeric" => ":attribute يجب أن يكون رقم بين :min - :max.",
        "file"    => ":attribute يجب أن يكون بين :min - :max كيلو بايت.",
        "string"  => ":attribute يجب أن يكون طوله بين :min - :max من الأحرف.",
        "array"   => ":attribute يجب ان يحتوي علي :min - :max بنود."
    ),
    "boolean"          => "The :attribute field must be true or false",
    "confirmed"        => "تأكيد :attribute لا يتطابق.",
    "date"             => ":attribute ليس تاريخ صحيح.",
    "date_format"      => ":attribute لا يطابق اليصغة :format.",
    "different"        => ":attribute و :other يجب أن يكونا مختلفين.",
    "digits"           => ":attribute يجب أن يتكون من :digits أرقام.",
    "digits_between"   => ":attribute يجب أن يكون بين :min و :max أرقام.",
    "email"            => ":attribute بصيغة خاطئة.",
    "exists"           => ":attribute المختار غير صالح.",
    "image"            => ":attribute يجب أن يكون صورة",
    "in"               => "قيمة :attribute المختارة غير صالح.",
    "integer"          => ":attribute يجب أن يكون رقماً صحيحاً.",
    "ip"               => ":attribute يجب أن يكون عنوان أنترنت (IP) صحيحاً.",
    "max"              => array(
        "numeric" => ":attribute يجب ألا يكون أكبر من :max.",
        "file"    => ":attribute يجب ألا يكون أكبر من :max كيلو بايت.",
        "string"  => ":attribute يجب ألا يكون أكبر من :max حرف.",
        "array"   => ":attribute يجب ان لا يزيد علي :max بنود."
    ),
    "mimes"            => ":attribute يجب أن يكون ملف من نوع: :values.",
    "min"              => array(
        "numeric" => ":attribute يجب أن يكون على الأقل :min.",
        "file"    => ":attribute يجب أن يكون على الأقل :min كيلو بايت.",
        "string"  => ":attribute يجب أن يكون طوله على الأقل :min أحرف.",
        "array"   => ":attribute يجب ان يحتوي علي الاقل :min بنود."
    ),
    "not_in"           => ":attribute المختار غير صالح.",
    "numeric"          => ":attribute يجب أن يكون رقم.",
    "regex"            => ":attribute صيغته غير صالحة.",
    "required"         => ":attribute مطلوب.",
    "required_if"      => ":attribute مطلوب عندما :other يساوي :value.",
    "required_with"    => ":attribute مطلوب عندما يكون :values موجوداً.",
    "required_with_all" => ":attribute مطلوب عندما يكون :values is موجوداً.",
    "required_without" => ":attribute مطلوب عندما لا يكون :values موجوداً.",
    "required_without_all" => " :attribute مطلوب عندما لا يكون :values موجوداً.",
    "same"             => ":attribute و :other يجب أن يتطابقا",
    "size"             => array(
        "numeric" => ":attribute يجب أن يكون :size.",
        "file"    => ":attribute يجب أن يكون :size كيلو بايت.",
        "string"  => ":attribute يجب أن يتكون من :size أحرف.",
        "array"   => ":attribute يجب ان يحتوي على :size بنود."
    ),
    "unique"           => "قيمة :attribute تم استخدامها مسبقاً.",
    "url"              => ":attribute صيغته غير صحيحة.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |
    | اسطر التحقق المخصصه للغة العربية
    |
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines.
    |
    | من هنا يمكنك تحديد رسائل تحقق مخصصه للسمات باستخدام مجمع "attribute.rule"
    | لتسمية السطر.
    |
    | his makes it quick to specify a specific custom language line for a given
    | attribute rule.
    |
    | يكون التحديد سريعا عند استخدام سمه معينة للغة المخصصة
    |
    */

    'custom' => array(
        'attribute-name' => array(
            'rule-name' => 'custom-message',
        ),
    ),

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |
    | سمات التحقق المخصصه
    |
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    | الاسطر ادناه تستخدم لتبديل السمات بشكل مقروء اكثر مثل "البريد الالكتروني"
    | بدلا عن "الايميل". هذه سيساعد في جعل الرسائل اوضح.
    |
    */

    'attributes' => array(
        "name" => "الاسم",
        "username" => "اسم المستخدم",
        "email" => "البريد الالكتروني",
        "first_name" => "الاسم الأول",
        "last_name" => "اسم العائلة",
        "password" => "كلمة السر",
        "city" => "المدينة",
        "country" => "الدولة",
        "address" => "العنوان",
        "phone" => "الهاتف",
        "mobile" => "الجوال",
        "age" => "العمر",
        "sex" => "الجنس",
        "gender" => "النوع",
        "day" => "اليوم",
        "month" => "الشهر",
        "year" => "السنة",
        "hour" => "ساعة",
        "minute" => "دقيقة",
        "second" => "ثانية",
        "title" => "العنوان",
        "content" => "المحتوى",
        "description" => "الوصف",
        "excerpt" => "الملخص",
        "date" => "التاريخ",
        "time" => "الوقت",
        "available" => "متاح",
        "size" => "الحجم"
    ),

);
