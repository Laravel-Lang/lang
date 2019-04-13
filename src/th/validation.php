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

    'accepted'             => 'ข้อมูล :attribute ต้องผ่านการยอมรับก่อน',
    'active_url'           => 'ข้อมูล :attribute ต้องเป็น URL',
    'after'                => 'ข้อมูล :attribute ต้องเป็นวันที่หลังจาก :date',
    'after_or_equal'       => 'ข้อมูล :attribute ต้องเป็นวันที่ตั้งแต่วันที่ :date เป็นต้นไป',
    'alpha'                => 'ข้อมูล :attribute ต้องประกอบด้วยตัวอักษรภาษาอังกฤษเท่านั้น',
    'alpha_dash'           => 'ข้อมูล :attribute ต้องประกอบด้วยตัวอักษรภาษาอังกฤษ ตัวเลข ขีด - และ _ เท่านั้น',
    'alpha_num'            => 'ข้อมูล :attribute ต้องประกอบด้วยตัวอักษรภาษาอังกฤษ และตัวเลขเท่านั้น',
    'array'                => 'ข้อมูล :attribute ต้องเป็น array',
    'before'               => 'ข้อมูล :attribute ต้องเป็นวันที่ก่อนวันที่ :date',
    'before_or_equal'      => 'ข้อมูล :attribute ต้องเป็นวันที่ก่อน หรือเท่ากับวันที่ :date',
    'between'              => [
        'numeric' => 'ข้อมูล :attribute ต้องอยู่ในช่วงระหว่าง :min - :max',
        'file'    => 'ข้อมูล :attribute ต้องมีขนาดระหว่าง :min - :max กิโลไบต์',
        'string'  => 'ข้อมูล :attribute ต้องมีความยาวตัวอักษรระหว่าง :min - :max ตัวอักษร',
        'array'   => 'ข้อมูล :attribute ต้องมีค่าระหว่าง :min - :max ค่า',
    ],
    'boolean'              => 'ข้อมูล :attribute ต้องเป็นจริง หรือเท็จ เท่านั้น',
    'confirmed'            => 'ข้อมูล :attribute ไม่ตรงกัน',
    'date'                 => 'ข้อมูล :attribute ต้องเป็นวันที่',
    'date_equals'          => 'ข้อมูล :attribute ต้องตรงกับวันที่ :date',
    'date_format'          => 'ข้อมูล :attribute ไม่ตรงกับข้อมูลกำหนด :format',
    'different'            => 'ข้อมูล :attribute และ :other ต้องไม่เท่ากัน',
    'digits'               => 'ข้อมูล :attribute ต้องเป็นตัวเลข :digits',
    'digits_between'       => 'ข้อมูล :attribute ต้องอยู่ในช่วงระหว่าง :min ถึง :max',
    'dimensions'           => 'ข้อมูล :attribute มีขนาดไม่ถูกต้อง',
    'distinct'             => 'ข้อมูล :attribute มีค่าที่ซ้ำกัน',
    'email'                => 'ข้อมูล :attribute ต้องเป็นอีเมล์',
    'exists'               => 'ข้อมูล :attribute ที่ถูกเลือก ไม่ถูกต้อง',
    'file'                 => 'ข้อมูล :attribute ต้องเป็นไฟล์',
    'filled'               => 'ข้อมูล :attribute จำเป็นต้องกรอก',
    'gt'                   => [
        'numeric' => 'ข้อมูล :attribute ต้องมีค่ามากกว่า :value',
        'file'    => 'ข้อมูล :attribute ต้องมีขนาดมากกว่า :value กิโลไบต์',
        'string'  => 'ข้อมูล :attribute ต้องมีความยาวตัวอักษรมากกว่า :value ตัวอักษร',
        'array'   => 'ข้อมูล :attribute ต้องมีมากกว่า :value ค่า',
    ],
    'gte'                  => [
        'numeric' => 'ข้อมูล :attribute ต้องมีค่ามากกว่าหรือเท่ากับ :value',
        'file'    => 'ข้อมูล :attribute ต้องมีขนาดมากกว่าหรือเท่ากับ :value กิโลไบต์',
        'string'  => 'ข้อมูล :attribute ต้องมีความยาวตัวอักษรมากกว่าหรือเท่ากับ :value ตัวอักษร',
        'array'   => 'ข้อมูล :attribute ต้องมี :value ค่า หรือมากกว่า',
    ],
    'image'                => 'ข้อมูล :attribute ต้องเป็นรูปภาพ',
    'in'                   => 'ข้อมูล :attribute ที่ถูกเลือก ไม่ถูกต้อง',
    'in_array'             => 'ข้อมูล :attribute ไม่มีอยู่ใน :other',
    'integer'              => 'ข้อมูล :attribute ต้องเป็นตัวเลข',
    'ip'                   => 'ข้อมูล :attribute ต้องเป็นที่อยู่ IP',
    'ipv4'                 => 'ข้อมูล :attribute ต้องตรงตามรูปแบบที่อยู่ IPv4',
    'ipv6'                 => 'ข้อมูล :attribute ต้องตรงตามรูปแบบที่อยู่ IPv6',
    'json'                 => 'ข้อมูล :attribute ต้องอยู่ในรูปแบบ JSON',
    'lt'                   => [
        'numeric' => 'ข้อมูล :attribute ต้องมีค่าน้อยกว่า :value',
        'file'    => 'ข้อมูล :attribute ต้องมีขนาดน้อยกว่า :value กิโลไบต์',
        'string'  => 'ข้อมูล :attribute ต้องมีความยาวตัวอักษรน้อยกว่า :value ตัวอักษร',
        'array'   => 'ข้อมูล :attribute ต้องมีน้อยกว่า :value ค่า',
    ],
    'lte'                  => [
        'numeric' => 'ข้อมูล :attribute ต้องมีค่าน้อยกว่าหรือเท่ากับ :value',
        'file'    => 'ข้อมูล :attribute ต้องมีขนาดน้อยกว่าหรือเท่ากับ :value กิโลไบต์',
        'string'  => 'ข้อมูล :attribute ต้องมีความยาวตัวอักษรน้อยกว่าหรือเท่ากับ :value ตัวอักษร',
        'array'   => 'ข้อมูล :attribute ต้องมีไม่เกิน :value ค่า',
    ],
    'max'                  => [
        'numeric' => 'ข้อมูล :attribute ต้องมีค่าไม่เกิน :max',
        'file'    => 'ข้อมูล :attribute ต้องมีขนาดไม่เกิน :max กิโลไบต์',
        'string'  => 'ข้อมูล :attribute ต้องมีความยาวตัวอักษรไม่เกิน :max ตัวอักษร',
        'array'   => 'ข้อมูล :attribute ต้องมีไม่เกิน :max ค่า',
    ],
    'mimes'                => 'ข้อมูล :attribute ต้องเป็นชนิดไฟล์: :values',
    'mimetypes'            => 'ข้อมูล :attribute ต้องเป็นชนิดไฟล์: :values',
    'min'                  => [
        'numeric' => 'ข้อมูล :attribute ต้องมีค่าอย่างน้อย :min',
        'file'    => 'ข้อมูล :attribute ต้องมีขนาดอย่างน้อย :min กิโลไบต์',
        'string'  => 'ข้อมูล :attribute ต้องมีความยาวตัวอักษรอย่างน้อย :min ตัวอักษร',
        'array'   => 'ข้อมูล :attribute ต้องมีอย่างน้อย :min ค่า',
    ],
    'not_in'               => 'ข้อมูล ที่เลือกจาก :attribute ไม่ถูกต้อง',
    'not_regex'            => 'ข้อมูล :attribute มีรูปแบบไม่ถูกต้อง',
    'numeric'              => 'ข้อมูล :attribute ต้องเป็นตัวเลข',
    'present'              => 'ข้อมูล :attribute ต้องเป็นปัจจุบัน',
    'regex'                => 'ข้อมูล :attribute มีรูปแบบไม่ถูกต้อง',
    'required'             => 'ข้อมูล :attribute จำเป็นต้องกรอก',
    'required_if'          => 'ข้อมูล :attribute จำเป็นต้องกรอกเมื่อ :other เป็น :value',
    'required_unless'      => 'ข้อมูล :attribute จำเป็นต้องกรอกเว้นแต่ :other เป็น :values',
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
    'starts_with'          => 'ข้อมูล :attribute ต้องเริ่มต้นด้วยค่าใดค่าหนึ่งจากค่าต่อไปนี้: :values',
    'string'               => 'ข้อมูล :attribute ต้องเป็นอักขระ',
    'timezone'             => 'ข้อมูล :attribute ต้องเป็นข้อมูลเขตเวลา',
    'unique'               => 'ข้อมูล :attribute ถูกใช้แล้ว ไม่สามารถใช้ซ้ำได้',
    'uploaded'             => 'ข้อมูล :attribute ไม่สามารพอัพโหลดได้',
    'url'                  => 'ข้อมูล :attribute มีฟอร์แมตไม่ถูกต้อง',
    'uuid'                 => 'ข้อมูล :attribute ต้องอยู่ในรูปแบบ UUID',

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

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],
];
