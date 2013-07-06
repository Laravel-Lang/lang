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

    "accepted"         => "必須接受 :attribute。",
    "active_url"       => ":attribute 並非一個有效的網址。",
    "after"            => ":attribute 必須要在 :date 之後。",
    "alpha"            => ":attribute 只能以字母組成。",
    "alpha_dash"       => ":attribute 只能以字母、數字及斜線組成。",
    "alpha_num"        => ":attribute 只能以字母及數字組成。",
    "before"           => ":attribute 必須要在 :date 之前。",
    "between"          => array(
        "numeric" => ":attribute 必須介乎 :min 至 :max 之間。",
        "file"    => ":attribute 必須介乎 :min 至 :max kb 之間。 ",
        "string"  => ":attribute 必須介乎 :min 至 :max 個字符之間。",
    ),
    "confirmed"        => ":attribute 確認欄位的輸入並不相符。",
    "date"             => ":attribute 並非一個有效的日期。",
    "date_format"      => ":attribute 與 :format 格式不相符。",
    "different"        => ":attribute 與 :other 必須不同。",
    "digits"           => ":attribute 必須是 :digits 位數字。",
    "digits_between"   => ":attribute 必須界乎 :min 至 :max 位數字。",
    "email"            => ":attribute 的格式無效。",
    "exists"           => "所揀選的 :attribute 選項無效。",
    "image"            => ":attribute 必須是一張圖片。",
    "in"               => "所揀選的 :attribute 選項無效。",
    "integer"          => ":attribute 必須是一個整數。",
    "ip"               => ":attribute 必須是一個有效的 IP 地址。",
    "max"              => array(
        "numeric" => ":attribute 不能大於 :max。",
        "file"    => ":attribute 不能大於 :max kb。",
        "string"  => ":attribute 不能多於 :max 個字符。",
    ),
    "mimes"            => ":attribute 必須為 :values 的檔案。",
    "min"              => array(
        "numeric" => ":attribute 不能小於 :min。",
        "file"    => ":attribute 不能小於 :min kb。",
        "string"  => ":attribute 不能小於 :min 個字符。",
    ),
    "not_in"           => "所揀選的 :attribute 選項無效。",
    "numeric"          => ":attribute 必須為一個數字。",
    "regex"            => ":attribute 的格式錯誤。",
    "required"         => ":attribute 不能留空。",
    "required_if"      => "當 :other 是 :value 時 :attribute 不能留空。",
    "required_with"    => "當 :values 出現時 :attribute 不能留空。",
    "required_without" => "當 :values 留空時 :attribute field 不能留空。",
    "same"             => ":attribute 與 :other 必須相同。",
    "size"             => array(
        "numeric" => ":attribute 的大小必須是 :size。",
        "file"    => ":attribute 的大小必須是 :size kb。",
        "string"  => ":attribute 必須是 :size 個字符。",
    ),
    "unique"           => ":attribute 已經用了。",
    "url"              => ":attribute 的格式錯鋘。",

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

    'custom' => array(),

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
