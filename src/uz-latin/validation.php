<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Kiritilgan ma'lumotlarni tekshirish uchun til resurslari
    |--------------------------------------------------------------------------
    |
    | Quyidagi qatorlarda kiritilgan ma'lumotlarni tekshiruvchi(validator) sinf uchun standart javoblarni o'z ichiga
    | oladi. Ayrim qoidalarning bir necha xil varianti mavjud, masalan size uchun. Siz ularni o'z ilovangizga mos
    | keladigan tarzda o'zgartirishingiz mumkin.
    |
    */

    'accepted' => ':attribute maydonini qabul qilishingiz shart.',
    'active_url' => ':attribute maydoniga noto‘g‘ri URL kiritildi.',
    'after' => ':attribute maydonida sana :date dan keyin bo‘lishi kerak.',
    'after_or_equal' => ':attribute maydonida sana :date ga teng yoki undan keyin bo‘lishi kerak.',
    'alpha' => ':attribute maydoni faqat harflarni qabul qilishi mumkin.',
    'alpha_dash' => ':attribute maydoni faqat harf, son va chiziqchalarni qabul qilishi mumkin.',
    'alpha_num' => ':attribute maydoni faqat harf va sonlarni qabul qilishi mumkin.',
    'array' => ':attribute maydoni massiv bo‘lishi kerak.',
    'before' => ':attribute maydonida sana :date gacha bo‘lishi kerak.',
    'before_or_equal' => ':attribute maydonida sana :date ga teng yoki undan oldin bo‘lishi kerak.',
    'between' => [
        'numeric' => ':attribute maydonining qiymati :min va :max orasida bo‘lishi kerak.',
        'file' => ':attribute dagi faylning hajmi :min va :max kilobayt orasida bo‘lishi kerak.',
        'string' => ':attribute dagi belgilar soni :min va :max orasida bo‘lishi kerak.',
        'array' => ':attribute dagi elementlar soni :min va :max orasida bo‘lishi kerak.',
    ],
    'boolean' => ':attribute maydoni faqat mantiqiy qiymatni qabul qiladi.',
    'confirmed' => ':attribute maydoni tasdiqlangani bilan mos kelmadi.',
    'date' => ':attribute sana emas.',
    'date_equals' => ':attribute sana :date ga teng bo‘lishi kerak.',
    'date_format' => ':attribute maydoni :format formatga mos kelmadi.',
    'different' => ':attribute va :other maydonlari farqli bo‘lishi kerak.',
    'digits' => ':attribute :digits raqamdan iborat bo‘lishi kerak.',
    'digits_between' => ':attribute maydonida sonlar miqdori :min va :max orasida bo‘lishi kerak.',
    'dimensions' => ':attribute maydonidagi tasvir to‘g‘ri kelmaydigan o‘lchamlarga ega.',
    'distinct' => ':attribute maydoni takrorlanuvchi qiymatlardan iborat.',
    'email' => ':attribute maydoni haqiqiy elektron pochta manzili bo‘lishi kerak.',
    'ends_with' => ':attribute maydoni quyidagi qiymatlarning biri bilan tugashi kerak: :values.',
    'exists' => ':attribute maydoni uchun tanlangan qiymat noto‘g‘ri.',
    'file' => ':attribute maydoni fayl bo‘lishi kerak.',
    'filled' => ':attribute maydoni to‘ldirilishi shart.',
    'gt' => [
        'numeric' => ':attribute maydoni :value dan katta bo‘lishi kerak.',
        'file' => ':attribute fayl hajmi :value kilobaytdan katta bo‘lishi kerak.',
        'string' => ':attribute dagi belgilar soni :value dan katta bo‘lishi kerak.',
        'array' => ':attribute dagi elementlar soni :value dan ko‘p bo‘lishi kerak.',
    ],
    'gte' => [
        'numeric' => ':attribute maydoni :value ga teng yoki undan katta bo‘lishi kerak.',
        'file' => ':attribute fayl hajmi :value kilobayt yoki undan katta bo‘lishi kerak.',
        'string' => ':attribute dagi belgilar soni :value ta yoki undan ko‘p bo‘lishi kerak.',
        'array' => ':attribute dagi elementlar soni :value ta yoki undan ko‘p bo‘lishi kerak.',
    ],
    'image' => ':attribute maydoni rasm bo‘lishi kerak.',
    'in' => ':attribute maydoni uchun tanlangan qiymat xato.',
    'in_array' => ':attribute maydonining qiymati :other da mavjud emas.',
    'integer' => ':attribute maydoni butun son bo‘lishi kerak.',
    'ip' => ':attribute maydoni haqiqiy IP manzil bo‘lishi kerak.',
    'ipv4' => ':attribute maydoni haqiqiy IPv4 manzil bo‘lishi kerak.',
    'ipv6' => ':attribute maydoni haqiqiy IPv6 manzil bo‘lishi kerak.',
    'json' => ':attribute maydoni JSON qatori bo‘lishi kerak.',
    'lt' => [
        'numeric' => ':attribute maydoni :value dan kichik bo‘lishi kerak.',
        'file' => ':attribute dagi fayl hajmi :value kilobaytdan kichik bo‘lishi kerak.',
        'string' => ':attribute dagi belgilar soni :value dan kam bo‘lishi kerak.',
        'array' => ':attribute dagi elementlar soni :value dan kam bo‘lishi kerak.',
    ],
    'lte' => [
        'numeric' => ':attribute maydoni :value dan kichik yoki teng bo‘lishi kerak.',
        'file' => ':attribute fayl hajmi :value kilobayt yoki undan kichik bo‘lishi kerak.',
        'string' => ':attribute dagi belgilar soni :value ta yoki undan kam bo‘lishi kerak.',
        'array' => ':attribute dagi elementlar soni :value ta yoki undan kam bo‘lishi kerak.',
    ],
    'max' => [
        'numeric' => ':attribute ning qiymati :max dan oshmasligi kerak.',
        'file' => ':attribute dagi faylning hajmi :max kilobaytdan oshmasligi kerak.',
        'string' => ':attribute ning belgilar soni :max tadan oshmasligi kerak.',
        'array' => ':attribute ning elmentlar soni :max tadan oshmasligi kerak.',
    ],
    'mimes' => ':attribute dagi fayl quyidagi turlardan biri bo‘lishi kerak: :values.',
    'mimetypes' => ':attribute dagi fayl quyidagi turlardan biri bo‘lishi kerak: :values.',
    'min' => [
        'numeric' => ':attribute ning qiymati :min dan kam bo‘lmasligi kerak.',
        'file' => ':attribute dagi faylning hajmi :min kilobaytdan kam bo‘lmasligi kerak.',
        'string' => ':attribute dagi belgilar soni :min tadan kam bo‘lmasligi kerak.',
        'array' => ':attribute dagi elmentlar soni :min tadan kam bo‘lmasligi kerak.',
    ],
    'not_in' => ':attribute uchun tanlangan qiymat xato.',
    'not_regex' => ':attribute uchun tanlangan format xato.',
    'numeric' => ':attribute maydoni son bo‘lishi kerak.',
    'password' => 'Noto‘g‘ri parol.',
    'present' => ':attribute maydoni ko‘rsatilishi kerak.',
    'regex' => ':attribute maydoni xato formatda.',
    'required' => ':attribute maydoni to‘ldirilishi shart.',
    'required_if' => ':other maydoni :value ga teng bo‘lsa, :attribute maydoni to‘ldirilishi shart.',
    'required_unless' => ':other maydoni :values ga teng bo‘lmasa, :attribute maydoni to‘ldirilishi shart.',
    'required_with' => ':values ko‘rsatilgan bo‘lsa, :attribute maydoni to‘ldirilishi shart.',
    'required_with_all' => ':values ko‘rsatilgan bo‘lsa, :attribute maydoni to‘ldirilishi shart.',
    'required_without' => ':values ko‘rsatilmagan bo‘lsa, :attribute maydoni to‘ldirilishi shart.',
    'required_without_all' => ':values lardan hech biri ko‘rsatilmagan bo‘lsa, :attribute maydoni to‘ldirilishi shart.',
    'same' => ':attribute ning qiymati :other bilan bir xil bo‘lishi kerak.',
    'size' => [
        'numeric' => ':attribute maydoni qiymati :size bo‘lishi kerak.',
        'file' => ':attribute dagi faylning hajmi :size kilobayt bo‘lishi kerak.',
        'string' => ':attribute dagi belgilar soni :size ta bo‘lishi kerak.',
        'array' => ':attribute dagi elmentlar soni :size ta bo‘lishi kerak.',
    ],
    'starts_with' => ':attribute maydoni quyidagi qiymatlardan biri bilan boshlanishi kerak: :values.',
    'string' => ':attribute maydoni qator bo‘lishi kerak.',
    'timezone' => ':attribute ning qiymati mavjud vaqt mintaqasi bo‘lishi kerak.',
    'unique' => ':attribute maydonining bunday qiymati mavjud. Iltimos boshqa qiymat kiriting.',
    'uploaded' => ':attribute maydonini yuklash muvaffaqiyatli amalga oshmadi.',
    'url' => ':attribute maydoni noto‘g‘ri formatga ega.',
    'uuid' => ':attribute maydoni to‘g‘ri UUID qiymatga ega bo‘lishi kerak.',

    /*
    |--------------------------------------------------------------------------
    | Xatoliklarni ko'rsatish uchun shaxsiy til resurslari
    |--------------------------------------------------------------------------
    |
    | Bu yerda siz attributlar uchun shaxsiy habarlarni tanlashingiz mumkin.
    | Bu attribut uchun shaxshiy qoida bo'yicha habarlar ko'rsatishni osonlashtiradi.
    |
    | http://laravel.com/docs/validation#custom-error-messages
    | Misol uchun:
    |
    |   'custom' => [
    |       'email' => [
    |           'required' => 'Siz sizning elektron manzilingizni bilishimiz lozim!',
    |       ],
    |   ],
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Attributlarning moslashtirilgan nomlari
    |--------------------------------------------------------------------------
    |
    | Quyidagi qatorlarda dasturiy nomlarni foydalanuvchi interfeysida qulay nomlar bilan almashtirish imkoninin beradi.
    | Masalan, "email" o'rniga "elektron manzil" ko'rsatiladi
    |
    */

    'attributes' => [
        'name' => 'Ism',
        'username' => 'Nickname',
        'email' => 'Elektron manzil',
        'first_name' => 'Ism',
        'last_name' => 'Familya',
        'password' => 'Parol',
        'password_confirmation' => 'Parolni tasdiqlash',
        'city' => 'Shahar',
        'country' => 'Davlat',
        'address' => 'Manzil',
        'phone' => 'Telefon',
        'mobile' => 'Mobil telefon',
        'age' => 'Yosh',
        'sex' => 'Jins',
        'gender' => 'Jins',
        'day' => 'Kun',
        'month' => 'Oy',
        'year' => 'Yil',
        'hour' => 'Soat',
        'minute' => 'Daqiqa',
        'second' => 'Soniya',
        'title' => 'Nomi',
        'content' => 'Kontent',
        'description' => 'Izoh',
        'excerpt' => 'Parcha',
        'date' => 'Sana',
        'time' => 'Vaqt',
        'available' => 'Mavjud',
        'size' => 'O‘lcham',
    ],
];
