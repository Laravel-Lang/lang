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

    'accepted'        => '必須接受。',
    'active_url'      => '並非一個有效的網址。',
    'after'           => '必須要晚於 :date。',
    'after_or_equal'  => '必須要等於 :date 或更晚。',
    'alpha'           => '只能以字母組成。',
    'alpha_dash'      => '只能以字母、數字、連接線(-)及底線(_)組成。',
    'alpha_num'       => '只能以字母及數字組成。',
    'array'           => '必須為陣列。',
    'before'          => '必須要早於 :date。',
    'before_or_equal' => '必須要等於 :date 或更早。',
    'between'         => [
        'numeric' => '必須介乎 :min 至 :max 之間。',
        'file'    => '必須介乎 :min 至 :max KB 之間。',
        'string'  => '必須介乎 :min 至 :max 個字符之間。',
        'array'   => '必須有 :min 至 :max 個項目。',
    ],
    'boolean'        => '必須是布爾值。',
    'confirmed'      => '確認欄位的輸入並不相符。',
    'date'           => '並非一個有效的日期。',
    'date_equals'    => '必須等於 :date。',
    'date_format'    => '與 :format 格式不相符。',
    'different'      => '必須與 :other 不同。',
    'digits'         => '必須是 :digits 位數字。',
    'digits_between' => '必須介乎 :min 至 :max 位數字。',
    'dimensions'     => '圖片尺寸不正確。',
    'distinct'       => '已經存在。',
    'email'          => '必須是有效的電郵地址。',
    'ends_with'      => '結尾必須包含下列之一：:values。',
    'exists'         => '不存在。',
    'file'           => '必須是文件。',
    'filled'         => '不能留空。',
    'gt'             => [
        'numeric' => '必須大於 :value。',
        'file'    => '必須大於 :value KB。',
        'string'  => '必須多於 :value 個字符。',
        'array'   => '必須多於 :value 個項目。',
    ],
    'gte' => [
        'numeric' => '必須大於或等於 :value。',
        'file'    => '必須大於或等於 :value KB。',
        'string'  => '必須多於或等於 :value 個字符。',
        'array'   => '必須多於或等於 :value 個項目。',
    ],
    'image'    => '必須是一張圖片。',
    'in'       => '選項無效。',
    'in_array' => '沒有在 :other 中。',
    'integer'  => '必須是一個整數。',
    'ip'       => '必須是一個有效的 IP 地址。',
    'ipv4'     => '必須是一個有效的 IPv4 地址。',
    'ipv6'     => '必須是一個有效的 IPv6 地址。',
    'json'     => '必須是正確的 JSON 格式。',
    'lt'       => [
        'numeric' => '必須小於 :value。',
        'file'    => '必須小於 :value KB。',
        'string'  => '必須少於 :value 個字符。',
        'array'   => '必須少於 :value 個項目。',
    ],
    'lte' => [
        'numeric' => '必須小於或等於 :value。',
        'file'    => '必須小於或等於 :value KB。',
        'string'  => '必須少於或等於 :value 個字符。',
        'array'   => '必須少於或等於 :value 個項目。',
    ],
    'max' => [
        'numeric' => '不能大於 :max。',
        'file'    => '不能大於 :max KB。',
        'string'  => '不能多於 :max 個字符。',
        'array'   => '不能多於 :max 個項目。',
    ],
    'mimes'     => '必須為 :values 的檔案。',
    'mimetypes' => '必須為 :values 的檔案。',
    'min'       => [
        'numeric' => '不能小於 :min。',
        'file'    => '不能小於 :min KB。',
        'string'  => '不能小於 :min 個字符。',
        'array'   => '不能小於 :min 個項目。',
    ],
    'not_in'               => '選項無效。',
    'not_regex'            => '格式錯誤。',
    'numeric'              => '必須為一個數字。',
    'password'             => '密碼錯誤。',
    'present'              => '必須存在。',
    'regex'                => '格式錯誤。',
    'required'             => '不能留空。',
    'required_if'          => '當 :other 是 :value 時 不能留空。',
    'required_unless'      => '當 :other 不是 :values 時 不能留空。',
    'required_with'        => '當 :values 出現時 不能留空。',
    'required_with_all'    => '當 :values 出現時 不能留空。',
    'required_without'     => '當 :values 留空時 field 不能留空。',
    'required_without_all' => '當 :values 都不出現時 不能留空。',
    'same'                 => '必須與 :other 相同。',
    'size'                 => [
        'numeric' => '大小必須是 :size。',
        'file'    => '大小必須是 :size KB。',
        'string'  => '必須是 :size 個字符。',
        'array'   => '必須是 :size 個單元。',
    ],
    'starts_with' => '開頭必須包含下列之一：:values。',
    'string'      => '必須是一個字符串。',
    'timezone'    => '必須是一個正確的時區值。',
    'unique'      => '已經存在。',
    'uploaded'    => '上傳失敗。',
    'url'         => '的格式錯誤。',
    'uuid'        => '必須是有效的 UUID。',

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

    'attributes' => [
        'name'                  => '名稱',
        'username'              => '使用者名',
        'email'                 => '電郵',
        'first_name'            => '名',
        'last_name'             => '姓',
        'password'              => '密碼',
        'password_confirmation' => '確認密碼',
        'city'                  => '城市',
        'country'               => '國家',
        'address'               => '地址',
        'phone'                 => '電話',
        'mobile'                => '手機',
        'age'                   => '年齡',
        'sex'                   => '性別',
        'gender'                => '性別',
        'day'                   => '天',
        'month'                 => '月',
        'year'                  => '年',
        'hour'                  => '時',
        'minute'                => '分',
        'second'                => '秒',
        'title'                 => '標題',
        'content'               => '內容',
        'description'           => '描述',
        'excerpt'               => '摘要',
        'date'                  => '日期',
        'time'                  => '時間',
        'available'             => '可用的',
        'size'                  => '大小',
    ],

];
