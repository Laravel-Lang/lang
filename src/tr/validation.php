<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Doğrulama Dil Satırları
    |--------------------------------------------------------------------------
    |
    | Aşağıdaki dil satırları doğrulama sınıfıları tarafından kullanılan varsayılan
    | hata mesajlarını içermektedir. "size" gibi bazı kuralların birden çok çeşidi
    | bulunmaktadır. Bu mesajların, her birini, burada değiştirmekten çekinmeyin.
    |
    */

    'accepted'             => ':attribute mutlaka kabul edilmelidir.',
    'active_url'           => ':attribute mutlaka geçerli bir URL olmalıdır.',
    'after'                => ':attribute mutlaka :date tarihinden sonra olmalıdır.',
    'after_or_equal'       => ':attribute mutlaka :date tarihinden sonra veya aynı tarihte olmalıdır.',
    'alpha'                => ':attribute sadece harflerden oluşmalıdır.',
    'alpha_dash'           => ':attribute sadece harflerden, rakamlardan ve tirelerden oluşmalıdır.',
    'alpha_num'            => ':attribute sadece harflerden ve rakamlardan oluşmalıdır.',
    'array'                => ':attribute mutlaka bir dizi olmalıdır.',
    'before'               => ':attribute mutlaka :date tarihinden önce olmalıdır.',
    'before_or_equal'      => ':attribute mutlaka :date tarihinden önce veya aynı tarihte olmalıdır.',
    'between'              => [
        'numeric' => ':attribute mutlaka :min - :max arasında olmalıdır.',
        'file'    => ':attribute mutlaka :min - :max kilobayt arasında olmalıdır.',
        'string'  => ':attribute mutlaka :min - :max harf arasında olmalıdır.',
        'array'   => ':attribute mutlaka :min - :max arasında öğe içermelidir.',
    ],
    'boolean'              => ':attribute sadece doğru veya yanlış olmalıdır.',
    'confirmed'            => ':attribute tekrarı eşleşmiyor.',
    'date'                 => ':attribute geçerli bir tarih değil.',
    'date_equals'          => ':attribute mutlaka :date ile aynı tarihte olmalıdır.',
    'date_format'          => ':attribute mutlaka :format biçiminde olmalıdır.',
    'different'            => ':attribute ile :other mutlaka birbirinden farklı olmalıdır.',
    'digits'               => ':attribute mutlaka :digits basamaklı olmalıdır.',
    'digits_between'       => ':attribute mutlaka en az :min, en fazla :max basamaklı olmalıdır.',
    'dimensions'           => ':attribute geçersiz resim boyutlarına sahip.',
    'distinct'             => ':attribute alanı yinelenen bir değere sahip.',
    'email'                => ':attribute mutlaka geçerli bir eposta adresi olmalıdır.',
    'ends_with'            => ':attribute sadece şu değerlerden biriyle bitebilir: :values.',
    'exists'               => 'Seçili :attribute geçersiz.',
    'file'                 => ':attribute mutlaka bir dosya olmalıdır.',
    'filled'               => ':attribute mutlaka doldurulmalıdır.',
    'gt'                   => [
        'numeric' => ':attribute mutlaka :value sayısından büyük olmalıdır.',
        'file'    => ':attribute mutlaka :value kilobayttan büyük olmalıdır.',
        'string'  => ':attribute mutlaka :value harften uzun olmalıdır.',
        'array'   => ':attribute mutlaka :value sayısından daha fazla öğe içermelidir.',
    ],
    'gte'                  => [
        'numeric' => ':attribute mutlaka :value sayısından büyük veya eşit olmalıdır.',
        'file'    => ':attribute mutlaka :value kilobayttan büyük veya eşit olmalıdır.',
        'string'  => ':attribute mutlaka :value harften uzun veya eşit olmalıdır.',
        'array'   => ':attribute mutlaka :value veya daha fazla öğe içermelidir.',
    ],
    'image'                => ':attribute mutlaka bir resim olmalıdır.',
    'in'                   => 'Seçili :attribute geçersiz.',
    'in_array'             => ':attribute :other içinde mevcut değil.',
    'integer'              => ':attribute mutlaka bir tamsayı olmalıdır.',
    'ip'                   => ':attribute mutlaka geçerli bir IP adresi olmalıdır.',
    'ipv4'                 => ':attribute mutlaka geçerli bir IPv4 adresi olmalıdır.',
    'ipv6'                 => ':attribute mutlaka geçerli bir IPv6 adresi olmalıdır.',
    'json'                 => ':attribute mutlaka geçerli bir JSON içeriği olmalıdır.',
    'lt'                   => [
        'numeric' => ':attribute mutlaka :value sayısından küçük olmalıdır.',
        'file'    => ':attribute mutlaka :value kilobayttan küçük olmalıdır.',
        'string'  => ':attribute mutlaka :value harften kısa olmalıdır.',
        'array'   => ':attribute mutlaka :value sayısından daha az öğe içermelidir.',
    ],
    'lte'                  => [
        'numeric' => ':attribute mutlaka :value sayısından küçük veya eşit olmalıdır.',
        'file'    => ':attribute mutlaka :value kilobayttan küçük veya eşit olmalıdır.',
        'string'  => ':attribute mutlaka :value harften kısa veya eşit olmalıdır.',
        'array'   => ':attribute mutlaka :value veya daha az öğe içermelidir.',
    ],
    'max'                  => [
        'numeric' => ':attribute en fazla :max olabilir.',
        'file'    => ':attribute en fazla :max kilobayt olabilir.',
        'string'  => ':attribute en fazla :max harf olabilir.',
        'array'   => ':attribute en fazla :max öğe içerebilir.',
    ],
    'mimes'                => ':attribute mutlaka :values biçiminde bir dosya olmalıdır.',
    'mimetypes'            => ':attribute mutlaka :values biçiminde bir dosya olmalıdır.',
    'min'                  => [
        'numeric' => ':attribute en az :min olabilir.',
        'file'    => ':attribute en az :min kilobayt olabilir.',
        'string'  => ':attribute en az :min harf olabilir.',
        'array'   => ':attribute en az :min öğe içerebilir.',
    ],
    'not_in'               => 'Seçili :attribute geçersiz.',
    'not_regex'            => ':attribute biçimi geçersiz.',
    'numeric'              => ':attribute mutlaka bir sayı olmalıdır.',
    'password'             => 'Parola geçersiz.',
    'present'              => ':attribute mutlaka mevcut olmalıdır.',
    'regex'                => ':attribute biçimi geçersiz.',
    'required'             => ':attribute mutlaka gereklidir.',
    'required_if'          => ':attribute :other :value değerine sahip olduğunda mutlaka gereklidir.',
    'required_unless'      => ':attribute :other :value değerlerinden birine sahip olmadığında mutlaka gereklidir.',
    'required_with'        => ':attribute :values varken mutlaka gereklidir.',
    'required_with_all'    => ':attribute herhangi bir :values değeri varken mutlaka gereklidir.',
    'required_without'     => ':attribute :values yokken mutlaka gereklidir.',
    'required_without_all' => ':attribute :values değerlerinden herhangi biri yokken mutlaka gereklidir.',
    'same'                 => ':attribute ile :other eşleşmelidir.',
    'size'                 => [
        'numeric' => ':attribute mutlaka :size olmalıdır.',
        'file'    => ':attribute mutlaka :size kilobayt olmalıdır.',
        'string'  => ':attribute mutlaka :size harfli olmalıdır.',
        'array'   => ':attribute mutlaka :size öğeye sahip olmalıdır.',
    ],
    'starts_with'          => ':attribute sadece şu değerlerden biriyle başlayabilir: :values.',
    'string'               => ':attribute mutlaka bir metin olmalıdır.',
    'timezone'             => ':attribute mutlaka geçerli bir saat dilimi olmalıdır.',
    'unique'               => ':attribute zaten alınmış.',
    'uploaded'             => ':attribute yüklemesi başarısız.',
    'url'                  => ':attribute biçimi geçersiz.',
    'uuid'                 => ':attribute mutlaka geçerli bir UUID olmalıdır.',

    /*
    |--------------------------------------------------------------------------
    | Özelleştirilmiş Doğrulama Dil Satırları
    |--------------------------------------------------------------------------
    |
    | Burada satırları adlandırmak için "attribute.rule" kuralını kullanarak
    | öznitelikler için özel doğrulama mesajları belirtebilirsiniz. Böylece
    | basit ve hızlıca özelleştirilmiş bir dil satırı tanımlayabilirsiniz.
    |
    | Örneğin:
    |
    | 'tckn.required': 'Kimlik no mutlaka gereklidir.'
    |
    */

    'custom' => [
        'niteleyici-adi' => [
            'kural-adi' => 'Özel doğrulama mesajı',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Özelleştirilmiş Doğrulama Öznitelikleri
    |--------------------------------------------------------------------------
    |
    | Aşağıdaki dil satırları örneğin öznitelik yertutucumuzu "email" yerine
    | "E-posta Adresi" gibi daha anlaşılabilir bir metinle değiştirmek için
    | kullanılır. Bu basitçe mesajlarımızı daha anlaşılabilir hale getirir.
    |
    | Örneğin:
    |
    | 'email'       => 'E-posta Adresi',
    | 'password'    => 'Parola',
    | 'username'    => 'Kullanıcı Adı',
    |
    */

    'attributes' => [],

];
