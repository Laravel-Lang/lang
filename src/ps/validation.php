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
    'accepted'             => 'باید ومنل شی :attribute.',
    'active_url'           => ':attribute یو باوري لینک نه دی.',
    'after'                => 'باید:attribute تر نن ورځې نیټې پورې :date.',
    'after_or_equal'       => ':attribute باید وروستی نیټه وي یا د نیټې سره سمون ولري :date.',
    'alpha'                => 'دا باید شامل نه وي :attribute یوازې په حرفو کې.',
    'alpha_dash'           => 'دا باید شامل نه وي :attribute یوازې په حرفو کې، شمیرې او متره.',
    'alpha_num'            => 'شمیرې او متره :attribute یوازې خطونه او شمیرې.',
    'array'                => 'دا باید وي :attribute ًمیټرکس.',
    'before'               => 'باید:attribute د تاریخ پخوا تاریخ وټاکئ :date.',
    'before_or_equal'      => ':attribute دا باید وي د تیر نیټې یا نیټې سره سمون خوري :date.',
    'between'              => [
        'numeric' => 'دا باید ارزښت وي :attribute ما بين:min او :max.',
        'file'    => 'د دوتنې اندازه باید وي:attribute ما بين:min او :max كيلوبايت.',
        'string'  => 'د متن حروف باید باید وي :attribute ما بين:min او :max.',
        'array'   => 'شمیرې او متره :attribute د عناصرو په منځ کې :min او :max.',
    ],
    'boolean'              => 'دا باید ارزښت وي :attribute او یا هم true یا false .',
    'confirmed'            => 'د تایید ساحه د ساحې سره سمون نه لري:attribute.',
    'date'                 => ':attribute نېټه اعتبار نلري .',
    'date_equals'          => 'دا باید وي :attribute د نیټې سره سم:date.',
    'date_format'          => 'مطابقت نلري :attribute د شکل سره:format.',
    'different'            => 'ساحې باید وي :attribute و :other مختلف.',
    'digits'               => 'شمیرې او متره :attribute په :digits شمېر / شمېرې.',
    'digits_between'       => 'شمیرې او متره :attribute ما بين:min و :max شمېر / شمېرې .',
    'dimensions'           => 'د :attribute د ناباوره انځور اړخونه لري.',
    'distinct'             => 'د ساحې څخه :attribute د نقل ارزښت .',
    'email'                => 'دا باید وي :attribute یو باوري بریښلیک پته جوړښت.',
    'ends_with'            => 'The :attribute must end with one of the following: :values',
    'exists'               => 'مشخص ارزښت :attribute شتون نلري.',
    'file'                 => 'د :attribute دا باید یوه فایل وي.',
    'filled'               => ':attribute لازمه ده.',
    'gt'                   => [
        'numeric' => 'دا باید ارزښت وي :attribute په پرتله ډیر :value.',
        'file'    => 'د دوتنې اندازه باید وي:attribute په پرتله ډیر :value كيلوبايت.',
        'string'  => 'د متن اوږدوالی باید وي :attribute څخه زیات :value توري/توري.',
        'array'   => 'شمیرې او متره :attribute له زیاتو څخه :value عناصر/عنصر.',
    ],
    'gte'                  => [
        'numeric' => 'دا باید ارزښت وي :attribute مساوی یا زیات :value.',
        'file'    => 'د دوتنې اندازه باید وي:attribute لږترلږه :value كيلوبايت.',
        'string'  => 'د متن اوږدوالی باید وي :attribute لږترلږه :value توري/توري.',
        'array'   => 'شمیرې او متره :attribute لږ تر لږه :value عنصر / عناصر.',
    ],
    'image'                => 'دا باید وي :attribute انځور.',
    'in'                   => ':attribute غير موجود.',
    'in_array'             => ':attribute غير موجود في :other.',
    'integer'              => 'دا باید وي:attribute هو عدد صحيح.',
    'ip'                   => 'دا باید وي:attribute عنوان IP ریښتیا.',
    'ipv4'                 => 'دا باید وي:attribute عنوان IPv4 ریښتیا.',
    'ipv6'                 => 'دا باید وي:attribute عنوان IPv6 ریښتیا.',
    'json'                 => 'دا باید وي:attribute د اوریدلو ډول JSON.',
    'lt'                   => [
        'numeric' => 'دا باید ارزښت وي :attribute لږ :value.',
        'file'    => 'د دوتنې اندازه باید وي:attribute لږ :value كيلوبايت.',
        'string'  => 'د متن اوږدوالی باید وي :attribute له کم څخه :value توري/توري.',
        'array'   => 'شمیرې او متره :attribute له کم څخه :value عناصر/عنصر.',
    ],
    'lte'                  => [
        'numeric' => 'دا باید ارزښت وي :attribute نسبت برابر یا کوچنی :value.',
        'file'    => 'د دوتنې اندازه باید له حد نه زیاته نه وي :attribute :value كيلوبايت.',
        'string'  => 'د متن اوږدوالی باید له زیاتوالی نه وي:attribute :value توري/توري.',
        'array'   => 'دا باید شامل نه وي :attribute له زیاتو څخه :value عناصر/عنصر.',
    ],
    'max'                  => [
        'numeric' => 'دا باید ارزښت وي :attribute نسبت برابر یا کوچنی :max.',
        'file'    => 'د دوتنې اندازه باید له حد نه زیاته وي :attribute :max كيلوبايت.',
        'string'  => 'د متن اوږدوالی باید له زیاتوالی نه وي:attribute :max توري/توري.',
        'array'   => 'دا باید شامل نه وي :attribute له زیاتو څخه :max عناصر/عنصر.',
    ],
    'mimes'                => 'دا باید د ډول دوسیه وي : :values.',
    'mimetypes'            => 'دا باید یوه فایل وي: :values.',
    'min'                  => [
        'numeric' => 'دا باید ارزښت وي :attribute مساوی یا زیات :min.',
        'file'    => 'د دوتنې اندازه باید وي:attribute لږترلږه :min كيلوبايت.',
        'string'  => 'د متن اوږدوالی باید وي :attribute لږترلږه :min توري/توري.',
        'array'   => 'شمیرې او متره :attribute لږ تر لږه :min عنصر / عناصر.',
    ],
    'not_in'               => ':attribute موجود.',
    'not_regex'            => 'فورمول :attribute غلط.',
    'numeric'              => 'باید:attribute یو شمېره.',
    'present'              => 'باید چمتو شی :attribute.',
    'regex'                => 'فورمول :attribute .غير صحيح.',
    'required'             => ':attribute اړینه ده.',
    'required_if'          => ':attribute که چیرې د اړتیا په صورت کې اړتیا وي:other مساو :value.',
    'required_unless'      => ':attribute که نه :other مساو :values.',
    'required_with'        => ':attribute که اړتیا وي شتون لري :values.',
    'required_with_all'    => ':attribute که اړتیا وي شتون لري :values.',
    'required_without'     => ':attribute د اړتیا پرته :values.',
    'required_without_all' => ':attribute که اړتیا شتون نلري :values.',
    'same'                 => 'اړینه ده :attribute سره :other.',
    'size'                 => [
        'numeric' => 'دا باید ارزښت وي :attribute سره برابر :size.',
        'file'    => 'د دوتنې اندازه باید وي:attribute :size كيلوبايت.',
        'string'  => 'شمیرې او متره متن :attribute په :size توري/توري په سمه توګه.',
        'array'   => 'شمیرې او متره :attribute په :size عنصر/عناصر په سمه توګه.',
    ],
    'starts_with'          => 'دا باید پیل شي :attribute د لاندې ارزښتونو څخه یو: :values',
    'string'               => 'دا باید وي:attribute متن.',
    'timezone'             => 'دا باید وي:attribute یو باوري نیټه.',
    'unique'               => 'ارزښتونه :attribute کارول شوی.',
    'uploaded'             => 'د پورته کولو توان نلري :attribute.',
    'url'                  => 'د لینک بڼه :attribute غلط.',
    'uuid'                 => ':attribute دا باید غیر رسمي وي UUID غږ.',
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
    'attributes' => [
        'name'                  => 'نوم',
        'username'              => 'د کارن نوم',
        'email'                 => 'برېښلیک',
        'first_name'            => 'لومړی نوم',
        'last_name'             => 'وروستۍ نوم',
        'password'              => 'پاسورډ',
        'password_confirmation' => 'پاسورډ تایید کړه',
        'city'                  => 'ښار',
        'country'               => 'هېواد',
        'address'               => 'د استوګنې پته',
        'phone'                 => 'تلیفون',
        'mobile'                => 'ګرځنده',
        'age'                   => 'عمر',
        'sex'                   => 'جنس',
        'gender'                => 'جنس',
        'day'                   => 'ورځ',
        'month'                 => 'میاشت',
        'year'                  => 'کال',
        'hour'                  => 'ساعت',
        'minute'                => 'دقیقې',
        'second'                => 'ثانوي',
        'title'                 => 'سرلیک',
        'content'               => 'منځپانګې',
        'description'           => 'تشریح',
        'excerpt'               => 'لنډیز',
        'date'                  => 'نېټه',
        'time'                  => 'وخت',
        'available'             => 'شته',
        'size'                  => 'اندازه',
    ],
];
