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

    'accepted'             => ':Attribute kabul edilmelidir.',
    'active_url'           => ':Attribute geçerli bir URL olmalıdır.',
    'after'                => ':Attribute şundan daha eski bir tarih olmalıdır :date.',
    'alpha'                => ':Attribute sadece harflerden oluşmalıdır.',
    'alpha_dash'           => ':Attribute sadece harfler, rakamlar ve tirelerden oluşmalıdır.',
    'alpha_num'            => ':Attribute sadece harfler ve rakamlar içermelidir.',
    'array'                => ':Attribute dizi olmalıdır.',
    'before'               => ':Attribute şundan daha önceki bir tarih olmalıdır :date.',
    'between'              => [
        'numeric' => ':Attribute :min - :max arasında olmalıdır.',
        'file'    => ':Attribute :min - :max arasındaki kilobayt değeri olmalıdır.',
        'string'  => ':Attribute :min - :max arasında karakterden oluşmalıdır.',
        'array'   => ':Attribute :min - :max arasında nesneye sahip olmalıdır.',
    ],
    'boolean'              => ':Attribute sadece doğru veya yanlış olmalıdır.',
    'confirmed'            => ':Attribute tekrarı eşleşmiyor.',
    'date'                 => ':Attribute geçerli bir tarih olmalıdır.',
    'date_format'          => ':Attribute :format biçimi ile eşleşmiyor.',
    'different'            => ':Attribute ile :other birbirinden farklı olmalıdır.',
    'digits'               => ':Attribute :digits rakam olmalıdır.',
    'digits_between'       => ':Attribute :min ile :max arasında rakam olmalıdır.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => ':Attribute biçimi geçersiz.',
    'exists'               => 'Seçili :attribute geçersiz.',
    'filled'               => ':Attribute alanı gereklidir.',
    'image'                => ':Attribute alanı resim dosyası olmalıdır.',
    'in'                   => ':Attribute değeri geçersiz.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => ':Attribute tamsayı olmalıdır.',
    'ip'                   => ':Attribute geçerli bir IP adresi olmalıdır.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => ':Attribute değeri :max değerinden küçük olmalıdır.',
        'file'    => ':Attribute değeri :max kilobayt değerinden küçük olmalıdır.',
        'string'  => ':Attribute değeri :max karakter değerinden küçük olmalıdır.',
        'array'   => ':Attribute değeri :max adedinden az nesneye sahip olmalıdır.',
    ],
    'mimes'                => ':Attribute dosya biçimi :values olmalıdır.',
    'min'                  => [
        'numeric' => ':Attribute değeri :min değerinden büyük olmalıdır.',
        'file'    => ':Attribute değeri :min kilobayt değerinden büyük olmalıdır.',
        'string'  => ':Attribute değeri :min karakter değerinden büyük olmalıdır.',
        'array'   => ':Attribute en az :min nesneye sahip olmalıdır.',
    ],
    'not_in'               => 'Seçili :attribute geçersiz.',
    'numeric'              => ':Attribute sayı olmalıdır.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => ':Attribute biçimi geçersiz.',
    'required'             => ':Attribute alanı gereklidir.',
    'required_if'          => ':Attribute alanı, :other :value değerine sahip olduğunda zorunludur.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => ':Attribute alanı :values varken zorunludur.',
    'required_with_all'    => ':Attribute alanı herhangi bir :values değeri varken zorunludur.',
    'required_without'     => ':Attribute alanı :values yokken zorunludur.',
    'required_without_all' => ':Attribute alanı :values değerlerinden herhangi biri yokken zorunludur.',
    'same'                 => ':Attribute ile :other eşleşmelidir.',
    'size'                 => [
        'numeric' => ':Attribute :size olmalıdır.',
        'file'    => ':Attribute :size kilobyte olmalıdır.',
        'string'  => ':Attribute :size karakter olmalıdır.',
        'array'   => ':Attribute :size nesneye sahip olmalıdır.',
    ],
    'string'               => ':Attribute dizge olmalıdır.',
    'timezone'             => ':Attribute geçerli bir saat dilimi olmalıdır.',
    'unique'               => ':Attribute daha önceden kayıt edilmiş.',
    'url'                  => ':Attribute biçimi geçersiz.',

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
        //
    ],

];
