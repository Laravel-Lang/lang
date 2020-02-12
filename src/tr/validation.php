<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted'        => ':attribute kabul edilmelidir.',
    'active_url'      => ':attribute geçerli bir URL olmalıdır.',
    'after'           => ':attribute şundan daha eski bir tarih olmalıdır :date.',
    'after_or_equal'  => ':attribute tarihi :date tarihinden sonra veya tarihine eşit olmalıdır.',
    'alpha'           => ':attribute sadece harflerden oluşmalıdır.',
    'alpha_dash'      => ':attribute sadece harfler, rakamlar ve tirelerden oluşmalıdır.',
    'alpha_num'       => ':attribute sadece harfler ve rakamlar içermelidir.',
    'array'           => ':attribute dizi olmalıdır.',
    'before'          => ':attribute şundan daha önceki bir tarih olmalıdır :date.',
    'before_or_equal' => ':attribute tarihi :date tarihinden önce veya tarihine eşit olmalıdır.',
    'between'         => [
        'numeric' => ':attribute :min - :max arasında olmalıdır.',
        'file'    => ':attribute :min - :max arasındaki kilobayt değeri olmalıdır.',
        'string'  => ':attribute :min - :max arasında karakterden oluşmalıdır.',
        'array'   => ':attribute :min - :max arasında nesneye sahip olmalıdır.',
    ],
    'boolean'        => ':attribute sadece doğru veya yanlış olmalıdır.',
    'confirmed'      => ':attribute tekrarı eşleşmiyor.',
    'date'           => ':attribute geçerli bir tarih olmalıdır.',
    'date_equals'    => ':attribute şuna eşit bir tarih olmalıdır: :date.',
    'date_format'    => ':attribute :format biçimi ile eşleşmiyor.',
    'different'      => ':attribute ile :other birbirinden farklı olmalıdır.',
    'digits'         => ':attribute :digits rakam olmalıdır.',
    'digits_between' => ':attribute :min ile :max arasında rakam olmalıdır.',
    'dimensions'     => ':attribute görsel ölçüleri geçersiz.',
    'distinct'       => ':attribute alanı yinelenen bir değere sahip.',
    'email'          => ':attribute biçimi geçersiz.',
    'ends_with'      => ':attribute şunlardan biriyle bitmelidir: :values',
    'exists'         => 'Seçili :attribute geçersiz.',
    'file'           => ':attribute dosya olmalıdır.',
    'filled'         => ':attribute alanının doldurulması zorunludur.',
    'gt'             => [
        'numeric' => ':attribute şu değerden büyük olmalıdır: :value.',
        'file'    => ':attribute, :value kilobayttan fazla olmalıdır.',
        'string'  => ':attribute, :value karakterden fazla olmalıdır.',
        'array'   => ':attribute, :value öğeden fazla öğe içermelidir.',
    ],
    'gte' => [
        'numeric' => ':attribute, :value değerinden büyük veya bu değere eşit olmalıdır.',
        'file'    => ':attribute, :value kilobayttan fazla veya bu değere eşit olmalıdır.',
        'string'  => ':attribute, :value karakter veya daha fazla karakter içermelidir.',
        'array'   => ':attribute, :value veya daha fazla öğe içermelidir.',
    ],
    'image'    => ':attribute alanı resim dosyası olmalıdır.',
    'in'       => ':attribute değeri geçersiz.',
    'in_array' => ':attribute alanı :other içinde mevcut değil.',
    'integer'  => ':attribute tamsayı olmalıdır.',
    'ip'       => ':attribute geçerli bir IP adresi olmalıdır.',
    'ipv4'     => ':attribute geçerli bir IPv4 adresi olmalıdır.',
    'ipv6'     => ':attribute geçerli bir IPv6 adresi olmalıdır.',
    'json'     => ':attribute geçerli bir JSON değişkeni olmalıdır.',
    'lt'       => [
        'numeric' => ':attribute şu değerden küçük olmalıdır: :value.',
        'file'    => ':attribute, :value kilobayttan fazla olmalıdır.',
        'string'  => ':attribute, :value karakterden az olmalıdır.',
        'array'   => ':attribute, :value öğeden az öğe içermelidir.',
    ],
    'lte' => [
        'numeric' => ':attribute, :value değerinden düşük veya bu değere eşit olmalıdır.',
        'file'    => ':attribute, :value kilobayttan az veya bu değere eşit olmalıdır.',
        'string'  => ':attribute, :value karakterden az veya buna eşit olmalıdır.',
        'array'   => ':attribute, :value öğeden fazla öğe içermemelidir.',
    ],
    'max' => [
        'numeric' => ':attribute değeri :max değerinden küçük olmalıdır.',
        'file'    => ':attribute değeri :max kilobayt değerinden küçük olmalıdır.',
        'string'  => ':attribute değeri :max karakter değerinden küçük olmalıdır.',
        'array'   => ':attribute değeri :max adedinden az nesneye sahip olmalıdır.',
    ],
    'mimes'     => ':attribute dosya biçimi :values olmalıdır.',
    'mimetypes' => ':attribute dosya biçimi :values olmalıdır.',
    'min'       => [
        'numeric' => ':attribute değeri :min değerinden büyük olmalıdır.',
        'file'    => ':attribute değeri :min kilobayt değerinden büyük olmalıdır.',
        'string'  => ':attribute değeri :min karakter değerinden büyük olmalıdır.',
        'array'   => ':attribute en az :min nesneye sahip olmalıdır.',
    ],
    'not_in'               => 'Seçili :attribute geçersiz.',
    'not_regex'            => ':attribute biçimi geçersiz.',
    'numeric'              => ':attribute sayı olmalıdır.',
    'present'              => ':attribute alanı mevcut olmalıdır.',
    'regex'                => ':attribute biçimi geçersiz.',
    'required'             => ':attribute alanı gereklidir.',
    'required_if'          => ':attribute alanı, :other :value değerine sahip olduğunda zorunludur.',
    'required_unless'      => ':attribute alanı, :other alanı :values değerlerinden birine sahip olmadığında zorunludur.',
    'required_with'        => ':attribute alanı :values varken zorunludur.',
    'required_with_all'    => ':attribute alanı herhangi bir :values değeri varken zorunludur.',
    'required_without'     => ':attribute alanı :values yokken zorunludur.',
    'required_without_all' => ':attribute alanı :values değerlerinden herhangi biri yokken zorunludur.',
    'same'                 => ':attribute ile :other eşleşmelidir.',
    'size'                 => [
        'numeric' => ':attribute :size olmalıdır.',
        'file'    => ':attribute :size kilobyte olmalıdır.',
        'string'  => ':attribute :size karakter olmalıdır.',
        'array'   => ':attribute :size nesneye sahip olmalıdır.',
    ],
    'starts_with' => ':attribute şunlardan biriyle başlamalıdır: :values',
    'string'      => ':attribute dizge olmalıdır.',
    'timezone'    => ':attribute geçerli bir saat dilimi olmalıdır.',
    'unique'      => ':attribute daha önceden kayıt edilmiş.',
    'uploaded'    => ':attribute yüklemesi başarısız.',
    'url'         => ':attribute biçimi geçersiz.',
    'uuid'        => ':attribute geçerli bir UUID olmalıdır.',

    /*
    |--------------------------------------------------------------------------
    | Özelleştirilmiş doğrulama mesajları
    |--------------------------------------------------------------------------
    |
    | Bu alanda her niteleyici (attribute) ve kural (rule) ikilisine özel hata
    | mesajları tanımlayabilirsiniz. Bu özellik, son kullanıcıya daha gerçekçi
    | metinler göstermeniz için oldukça faydalıdır.
    |
    | Örnek olarak:
    |
    | 'email.email': 'Girdiğiniz e-posta adresi geçerli değil.'
    | 'x.regex': 'x alanı için "a-b.c" formatında veri girmelisiniz.'
    |
    */
    'custom' => [
        'niteleyici-adi' => [
            'kural-adi' => 'ozel-hata-mesaji',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Özelleştirilmiş niteleyici isimleri
    |--------------------------------------------------------------------------
    |
    | Bu alandaki bilgiler "email" gibi niteleyici isimlerini "e-posta adresi"
    | gibi daha okunabilir metinlere çevirmek için kullanılır. Bu bilgiler
    | hata mesajlarının daha temiz olmasını sağlar.
    |
    | Örnek olarak:
    |
    | 'email' => 'e-posta adresi',
    | 'password' => 'parola',
    |
    */
    'attributes' => [],
];
