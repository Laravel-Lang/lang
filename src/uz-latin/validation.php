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

    'accepted'        => ':Attribute maydonini qabul qilishingiz kerak.',
    'active_url'      => ':Attribute maydoniga noto‘g‘ri URL kiritildi.',
    'after'           => ':Attribute maydonida sana :date dan keyingi bo‘lishi kerak.',
    'after_or_equal'  => ':Attribute maydonida sana :date ga teng yoki undan keyingi bo‘lishi kerak.',
    'alpha'           => ':Attribute maydoni faqat harflarni qabul qilishi mumkin.',
    'alpha_dash'      => ':Attribute maydoni faqat harflar, sonlar va chiziqlarni qabul qilishi mumkin.',
    'alpha_num'       => ':Attribute maydoni faqat harflar va sonlarni qabul qilishi mumkin.',
    'array'           => ':Attribute maydoni qator (array) bo‘lishi kerak.',
    'before'          => ':Attribute maydonida sana :date gacham bo‘lishi kerak.',
    'before_or_equal' => ':Attribute maydonida sana :date ga teng yoki undan oldin bo‘lishi kerak.',
    'between'         => [
        'numeric' => ':Attribute maydonining qiymati :min va :max orasida bo‘lishi kerak.',
        'file'    => ':Attribute maydonidagi faylning hajmi :min va :max kilobayt orasida bo‘lishi kerak.',
        'string'  => ':Attribute maydonidagi belgilar soni :min va :max orasida bo‘lishi kerak.',
        'array'   => ':Attribute maydonida elementlar soni :min va :max orasida bo‘lishi kerak.',
    ],
    'boolean'        => ':Attribute maydoni faqat mantiqiy qiymatni qabul qiladi.',
    'confirmed'      => ':Attribute maydoni tasdiqlanmadi.',
    'date'           => ':Attribute sana maydoniga noto‘g‘ri qiymat kiritildi.',
    'date_equals'    => 'The :attribute must be a date equal to :date.',
    'date_format'    => ':Attribute maydoni :format formatga mos kelmadi.',
    'different'      => ':Attribute va :other maydonlari farqli bo‘lishi kerak.',
    'digits'         => ':Attribute raqamli maydon uzunligi :digits bo‘lishi kerak.',
    'digits_between' => ':Attribute raqamli maydon uzunligi :min va :max orasida bo‘lishi kerak.',
    'dimensions'     => ':Attribute maydonidagi tasvir to‘g‘ri kelmaydigan o‘lchamlarga ega.',
    'distinct'       => ':Attribute maydoni takrorlanuvchi qiymatlardan iborat.',
    'email'          => ':Attribute maydoni haqiyqiy elektron pochta manzili bo‘lishi kerak.',
    'ends_with'      => 'The :attribute must end with one of the following: :values',
    'exists'         => ':Attribute maydoni uchun tanlangan qiymat noto‘g‘ri.',
    'file'           => ':Attribute maydoni fayl turida bo‘lishi kerak.',
    'filled'         => ':Attribute maydoni to‘ldirilishi shart.',
    'gt'             => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file'    => 'The :attribute must be greater than :value kilobytes.',
        'string'  => 'The :attribute must be greater than :value characters.',
        'array'   => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file'    => 'The :attribute must be greater than or equal :value kilobytes.',
        'string'  => 'The :attribute must be greater than or equal :value characters.',
        'array'   => 'The :attribute must have :value items or more.',
    ],
    'image'    => ':Attribute maydoni tasvir turida bo‘lishi kerak.',
    'in'       => ':Attribute maydoni uchun tanlangan qiymat xato.',
    'in_array' => ':Attribute maydonining qiymati :other da mavjud emas.',
    'integer'  => ':Attribute maydoni butun son bo‘lishi kerak.',
    'ip'       => ':Attribute maydoni haqiyqiy IP manzil bo‘lishi kerak.',
    'ipv4'     => ':Attribute maydoni haqiyqiy IPv4 manzil bo‘lishi kerak.',
    'ipv6'     => ':Attribute maydoni haqiyqiy IPv6 manzil bo‘lishi kerak.',
    'json'     => ':Attribute maydoni JSON qator (string) bo‘lishi kerak.',
    'lt'       => [
        'numeric' => 'The :attribute must be less than :value.',
        'file'    => 'The :attribute must be less than :value kilobytes.',
        'string'  => 'The :attribute must be less than :value characters.',
        'array'   => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file'    => 'The :attribute must be less than or equal :value kilobytes.',
        'string'  => 'The :attribute must be less than or equal :value characters.',
        'array'   => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => ':Attribute maydoni qiymati :max dan oshmasligi kerak.',
        'file'    => ':Attribute maydonidagi faylning hajmi :max kilobaytdan oshmasligi kerak.',
        'string'  => ':Attribute maydonidagi belgilar soni :max tadan oshmasligi kerak.',
        'array'   => ':Attribute maydonidagi elmentlar soni :max tadan oshmasligi kerak.',
    ],
    'mimes'     => ':Attribute maydonidagi fayl so‘ngida keltirilgan turlardan birida bo‘lishi kerak: :values.',
    'mimetypes' => ':Attribute maydonidagi fayl so‘ngida keltirilgan turlardan birida bo‘lishi kerak: :values.',
    'min'       => [
        'numeric' => ':Attribute maydoni qiymati :min dan kam bo‘lmasligi kerak.',
        'file'    => ':Attribute maydonidagi faylning hajmi :min kilobaytdan kam bo‘lmasligi kerak.',
        'string'  => ':Attribute maydonidagi belgilar soni :min tadan kam bo‘lmasligi kerak.',
        'array'   => ':Attribute maydonidagi elmentlar soni :min tadan kam bo‘lmasligi kerak.',
    ],
    'not_in'               => ':Attribute maydoni uchun tanlangan qiymat xato.',
    'not_regex'            => 'The :attribute format is invalid.',
    'numeric'              => ':Attribute maydoni son bo‘lishi kerak.',
    'present'              => ':Attribute maydoni ko‘rsatilishi kerak.',
    'regex'                => ':Attribute maydoni xato formatda.',
    'required'             => ':Attribute maydoni to‘ldirilishi shart.',
    'required_if'          => ':Attribute maydoni to‘ldirilishi shart, qachonki :other maydoni :value ga teng bo‘lsa.',
    'required_unless'      => ':Attribute maydoni to‘ldirilishi shart, qachonki :other maydoni :values ga teng bo‘lmasa.',
    'required_with'        => ':Attribute maydoni to‘ldirilishi shart, qachonki :values ko‘rsatilgan bo‘lsa.',
    'required_with_all'    => ':Attribute maydoni to‘ldirilishi shart, qachonki :values ko‘rsatilgan bo‘lsa.',
    'required_without'     => ':Attribute maydoni to‘ldirilishi shart, qachonki :values ko‘rsatilmagan bo‘lsa.',
    'required_without_all' => ':Attribute maydoni to‘ldirilishi shart, qachonki :values lardan hech biri ko‘rsatilmagan bo‘lsa.',
    'same'                 => ':Attribute maydonining qiymati :other bilan bir xil bo‘lishi kerak.',
    'size'                 => [
        'numeric' => ':Attribute maydoni qiymati :size ga teng bo‘lishi kerak.',
        'file'    => ':Attribute maydonidagi faylning hajmi :size kilobaytga teng bo‘lishi kerak.',
        'string'  => ':Attribute maydonidagi belgilar soni :size ga teng bo‘lishi kerak.',
        'array'   => ':Attribute maydonidagi elmentlar soni :size ga teng bo‘lishi kerak.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    'string'      => ':Attribute maydoni qator (string) bo‘lishi kerak.',
    'timezone'    => ':Attribute maydonining qiymati mavjud vaqt mintaqasi bo‘lishi kerak.',
    'unique'      => ':Attribute maydonining bunday qiymati mavjud (kiritlgan).',
    'uploaded'    => ':Attribute maydonini yuklash muvaffaqiyatli amalga oshmadi.',
    'url'         => ':Attribute maydoni noto‘g‘ri formatga ega.',
    'uuid'        => 'The :attribute must be a valid UUID.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],
];
