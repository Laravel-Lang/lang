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

    'accepted'             => 'ข้อมูล :attribute ต้องผ่านการยอมรับก่อน',
    'active_url'           => 'ข้อมูล :attribute ต้องเป็น URL เท่านั้น',
    'after'                => 'ข้อมูล :attribute ต้องเป็นวันที่หลังจาก :date.',
    'after_or_equal'       => 'The :attribute must be a date after or equal to :date.',
    'alpha'                => 'ข้อมูล :attribute ต้องเป็นตัวอักษรภาษาอังกฤษเท่านั้น',
    'alpha_dash'           => 'ข้อมูล :attribute ต้องเป็นตัวอักษรภาษาอังกฤษ ตัวเลข และ _ เท่านั้น',
    'alpha_num'            => 'ข้อมูล :attribute ต้องเป็นตัวอักษรภาษาอังกฤษ ตัวเลข เท่านั้น',
    'array'                => 'ข้อมูล :attribute ต้องเป็น array เท่านั้น',
    'before'               => 'ข้อมูล :attribute ต้องเป็นวันที่ก่อน :date.',
    'before_or_equal'      => 'The :attribute must be a date before or equal to :date.',
    'between'              => [
        'numeric' => 'ข้อมูล :attribute ต้องอยู่ในช่วงระหว่าง :min - :max.',
        'file'    => 'ข้อมูล :attribute ต้องอยู่ในช่วงระหว่าง :min - :max กิโลไบต์',
        'string'  => 'ข้อมูล :attribute ต้องอยู่ในช่วงระหว่าง :min - :max ตัวอักษร',
        'array'   => 'ข้อมูล :attribute ต้องอยู่ในช่วงระหว่าง :min - :max ค่า',
    ],
    'boolean'              => 'ข้อมูล :attribute ต้องเป็นจริง หรือเท็จ เท่านั้น',
    'confirmed'            => 'ข้อมูล :attribute ไม่ตรงกัน',
    'date'                 => 'ข้อมูล :attribute ต้องเป็นวันที่',
    'date_format'          => 'ข้อมูล :attribute ไม่ตรงกับข้อมูลกำหนด :format.',
    'different'            => 'ข้อมูล :attribute และ :other ต้องไม่เท่ากัน',
    'digits'               => 'ข้อมูล :attribute ต้องเป็น :digits',
    'digits_between'       => 'ข้อมูล :attribute ต้องอยู่ในช่วงระหว่าง :min ถึง :max',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'ข้อมูล :attribute มีค่าที่ซ้ำกัน',
    'email'                => 'ข้อมูล :attribute ต้องเป็นอีเมล์',
    'exists'               => 'ข้อมูล ที่ถูกเลือกจาก :attribute ไม่ถูกต้อง',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => 'ข้อมูล :attribute จำเป็นต้องกรอก',
    'image'                => 'ข้อมูล :attribute ต้องเป็นรูปภาพ',
    'in'                   => 'ข้อมูล ที่ถูกเลือกใน :attribute ไม่ถูกต้อง',
    'in_array'             => 'ข้อมูล :attribute ไม่มีอยู่ภายในค่าของ :other',
    'integer'              => 'ข้อมูล :attribute ต้องเป็นตัวเลข',
    'ip'                   => 'ข้อมูล :attribute ต้องเป็น IP',
    'json'                 => 'ข้อมูล :attribute ต้องเป็นอักขระ JSON ที่สมบูรณ์',
    'max'                  => [
        'numeric' => 'ข้อมูล :attribute ต้องมีจำนวนไม่เกิน :max.',
        'file'    => 'ข้อมูล :attribute ต้องมีจำนวนไม่เกิน :max กิโลไบต์',
        'string'  => 'ข้อมูล :attribute ต้องมีจำนวนไม่เกิน :max ตัวอักษร',
        'array'   => 'ข้อมูล :attribute ต้องมีจำนวนไม่เกิน :max ค่า',
    ],
    'mimes'                => 'ข้อมูล :attribute ต้องเป็นชนิดไฟล์: :values.',
    'mimetypes'            => 'ข้อมูล :attribute ต้องเป็นชนิดไฟล์: :values.',
    'min'                  => [
        'numeric' => 'ข้อมูล :attribute ต้องมีจำนวนอย่างน้อย :min.',
        'file'    => 'ข้อมูล :attribute ต้องมีจำนวนอย่างน้อย :min กิโลไบต์',
        'string'  => 'ข้อมูล :attribute ต้องมีจำนวนอย่างน้อย :min ตัวอักษร',
        'array'   => 'ข้อมูล :attribute ต้องมีจำนวนอย่างน้อย :min ค่า',
    ],
    'not_in'               => 'ข้อมูล ที่เลือกจาก :attribute ไม่ถูกต้อง',
    'numeric'              => 'ข้อมูล :attribute ต้องเป็นตัวเลข',
    'present'              => 'ข้อมูล :attribute ต้องเป็นปัจจุบัน',
    'regex'                => 'ข้อมูล :attribute มีรูปแบบไม่ถูกต้อง',
    'required'             => 'ข้อมูล :attribute จำเป็นต้องกรอก',
    'required_if'          => 'ข้อมูล :attribute จำเป็นต้องกรอกเมื่อ :other เป็น :value.',
    'required_unless'      => 'ข้อมูล :attribute จำเป็นต้องกรอกเว้นแต่ :other เป็น :values.',
    'required_with'        => 'ข้อมูล :attribute จำเป็นต้องกรอกเมื่อ :values มีค่า',
    'required_with_all'    => 'ข้อมูล :attribute จำเป็นต้องกรอกเมื่อ :values มีค่าทั้งหมด',
    'required_without'     => 'ข้อมูล :attribute จำเป็นต้องกรอกเมื่อ :values ไม่มีค่า',
    'required_without_all' => 'ข้อมูล :attribute จำเป็นต้องกรอกเมื่อ :values ไม่มีค่าทั้งหมด',
    'same'                 => 'ข้อมูล :attribute และ :other ต้องถูกต้อง',
    'size'                 => [
        'numeric' => 'ข้อมูล :attribute ต้องเท่ากับ :size',
        'file'    => 'ข้อมูล :attribute ต้องเท่ากับ :size กิโลไบต์',
        'string'  => 'ข้อมูล :attribute ต้องเท่ากับ :size ตัวอักษร',
        'array'   => 'ข้อมูล :attribute ต้องเท่ากับ :size ค่า',
    ],
    'string'               => 'ข้อมูล :attribute ต้องเป็นอักขระ',
    'timezone'             => 'ข้อมูล :attribute ต้องเป็นข้อมูลเขตเวลาที่ถูกต้อง',
    'unique'               => 'ข้อมูล :attribute ไม่สามารถใช้ได้',
    'uploaded'             => 'The :attribute failed to upload.',
    'url'                  => 'ข้อมูล :attribute ไม่ถูกต้อง',

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

    'attributes' => [
        //
    ],

];
