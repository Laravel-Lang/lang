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

    "accepted"         => "ข้อมูล :attribute ต้องผ่านการยอมรับก่อน",
    "active_url"       => "ข้อมูล :attribute ต้องเป็น URL เท่านั้น",
    "after"            => "ข้อมูล :attribute ต้องเป็นวันที่หลังจาก :date.",
    "alpha"            => "ข้อมูล :attribute ต้องเป็นตัวอักษรภาษาอังกฤษเท่านั้น",
    "alpha_dash"       => "ข้อมูล :attribute ต้องเป็นตัวอักษรภาษาอังกฤษ ตัวเลข และ _ เท่านั้น",
    "alpha_num"        => "ข้อมูล :attribute ต้องเป็นตัวอักษรภาษาอังกฤษ ตัวเลข เท่านั้น",
    "array"            => "ข้อมูล :attribute ต้องเป็น array เท่านั้น",
    "before"           => "ข้อมูล :attribute ต้องเป็นวันที่ก่อน :date.",
    "between"          => array(
        "numeric" => "ข้อมูล :attribute ต้องอยู่ในช่วงระหว่าง :min - :max.",
        "file"    => "ข้อมูล :attribute ต้องอยู่ในช่วงระหว่าง :min - :max กิโลไบร์ท",
        "string"  => "ข้อมูล :attribute ต้องอยู่ในช่วงระหว่าง :min - :max ตัวอักษร",
        "array"   => "ข้อมูล :attribute ต้องอยู่ในช่วงระหว่าง :min - :max ค่า"
    ),
    "boolean"          => "The :attribute field must be true or false",
    "confirmed"        => "ข้อมูล :attribute ไม่ตรงกัน",
    "date"             => "ข้อมูล :attribute ต้องเป็นวันที่",
    "date_format"      => "ข้อมูล :attribute ไม่ตรงกับข้อมูลกำหนด :format.",
    "different"        => "ข้อมูล :attribute และ :other ต้องไม่เท่ากัน",
    "digits"           => "ข้อมูล :attribute ต้องเป็น :digits",
    "digits_between"   => "ข้อมูล :attribute ต้องอยู่ในช่วง :min and :max",
    "email"            => "ข้อมูล :attribute ต้องเป็นอีเมล์",
    "exists"           => "ข้อมูล ที่ถูกเลือกจาก :attribute ไม่ถูกต้อง",
    "image"            => "ข้อมูล :attribute ต้อง้ป็นรูปภาพ",
    "in"               => "ข้อมูล ที่ถูกเลือกใน :attribute ไม่ถูกต้อง",
    "integer"          => "ข้อมูล :attribute ต้องเป็นตัวเลข",
    "ip"               => "ข้อมูล :attribute ต้องเป็น IP",
    "max"              => array(
        "numeric" => "ข้อมูล :attribute ต้องมีจำนวนไม่เกิน :max.",
        "file"    => "ข้อมูล :attribute ต้องมีจำนวนไม่เกิน :max กิโลไบร์ท",
        "string"  => "ข้อมูล :attribute ต้องมีจำนวนไม่เกิน :max ตัวอักษร",
        "array"   => "ข้อมูล :attribute ต้องมีจำนวนไม่เกิน :max ค่า"
    ),
    "mimes"            => "ข้อมูล :attribute ต้องเป็นชนิดไฟล์: :values.",
    "min"              => array(
        "numeric" => "ข้อมูล :attribute ต้องมีจำนวนอย่างน้อย :min.",
        "file"    => "ข้อมูล :attribute ต้องมีจำนวนอย่างน้อย :min กิโลไบร์ท",
        "string"  => "ข้อมูล :attribute ต้องมีจำนวนอย่างน้อย :min ตัวอักษร",
        "array"   => "ข้อมูล :attribute ต้องมีจำนวนอย่างน้อย :min ค่า"
    ),
    "not_in"           => "ข้อมูล ที่เลือกจาก :attribute ไม่ถูกต้อง",
    "numeric"          => "ข้อมูล :attribute ต้องเป็นตัวเลข",
    "regex"            => "ข้อมูล :attribute มีรูปแบบไม่ถูกต้อง",
    "required"         => "ข้อมูล :attribute จำเป็นต้องกรอก",
    "required_if"      => "ข้อมูล :attribute จำเป็นต้องกรอกเมื่อ :other เป็น :value.",
    "required_with"    => "ข้อมูล :attribute จำเป็นต้องกรอกเมื่อ :values มีค่า",
    "required_with_all" => "The :attribute field is required when :values is present.",
    "required_without" => "ข้อมูล :attribute จำเป็นต้องกรอกเมื่อ :values ไม่มีค่า",
    "required_without_all" => "The :attribute field is required when none of :values are present.",
    "same"             => "ข้อมูล :attribute และ :other ต้องถูกต้อง",
    "size"             => array(
        "numeric" => "ข้อมูล :attribute ต้องเท่ากับ :size.",
        "file"    => "ข้อมูล :attribute ต้องเท่ากับ :size กิโลไบร์ท",
        "string"  => "ข้อมูล :attribute ต้องเท่ากับ :size ตัวอักษร",
        "array"   => "ข้อมูล :attribute ต้องเท่ากับ :size ค่า"
    ),
    "unique"           => "ข้อมูล :attribute ไม่สามารถใช้ได้",
    "url"              => "ข้อมูล :attribute ไม่ถูกต้อง",

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

    'custom' => array(
        'attribute-name' => array(
            'rule-name' => 'custom-message',
        ),
    ),

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
