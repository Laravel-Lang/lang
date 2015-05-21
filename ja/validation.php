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
    "accepted"         => ":attributeが承認されていません。",
    "active_url"       => ":attributeが有効なURLではありません。",
    "after"            => ":attributeには:date以降の日付を指定してください。",
    "alpha"            => ":attributeにはアルファベッドを指定してください。",
    "alpha_dash"       => ":attributeには英数字とダッシュ(-)及び下線(_)を指定してください。",
    "alpha_num"        => ":attributeには英数字を指定してください。",
    "array"            => ":attributeには配列を指定してください。",
    "before"           => ":attributeには:date以前の日付を指定してください。",
    "between"          => [
        "numeric" => ":attributeには:minから:maxまで数字を指定してください。",
        "file"    => ":attributeのファイルサイズは:min kBから:max kBまでとなります。",
        "string"  => ":attributeは:min文字から:max文字までとなります。",
        "array"   => ":attributeは:min個から:max個までとなります。",
    ],
    "boolean"          => ":attributeは真偽値で指定してください。",
    "confirmed"        => ":attributeは確認用フィールドと一致していません。",
    "date"             => ":attributeは正しい日付ではありません。",
    "date_format"      => ":attributeは日付フォーマット（:format）と一致していません。",
    "different"        => ":attributeには:otherと異なる内容を指定してください。",
    "digits"           => ":attributeは:digits桁で指定してください。",
    "digits_between"   => ":attributeは:min桁から:max桁で指定してください。",
    "email"            => ":attributeにはメールアドレスを指定してください。",
    "exists"           => "選択された:attributeが正しくありません。",
    "filled"           => ":attributeは必須となります。",
    "image"            => ":attributeには画像を指定してください。",
    "in"               => "選択された:attributeが正しくありません。",
    "integer"          => ":attributeには整数を指定してください。",
    "ip"               => ":attributeには有効なIPアドレスを指定してください。",
    "max"              => [
        "numeric" => ":attributeには:max以下の数字を指定してください。",
        "file"    => ":attributeのサイズが:max kB以下のファイルを指定してください。",
        "string"  => ":attributeは:max文字以下となります。",
        "array"   => ":attributeは:max個以下となります。",
    ],
    "mimes"            => ":attributeには:valuesタイプのファイルを指定してください。",
    "min"              => [
        "numeric" => ":attributeには:min以上の数字を指定してください。",
        "file"    => ":attributeのファイルサイズは:min kB以上までとなります。",
        "string"  => ":attributeは:min文字以上となります。",
        "array"   => ":attributeは:max個以上となります。",
    ],
    "not_in"           => "選択された:attributeが正しくありません。",
    "numeric"          => ":attributeには数字を指定してください。",
    "regex"            => ":attributeは指定のフォーマットと一致していません。",
    "required"         => ":attributeは必須となります。",
    "required_if"      => ":attributeは:otherが:valueの場合には必須となります。",
    "required_with"    => ":attributeは:valuesが存在している場合に必須となります。",
    "required_with_all" => ":attributeは:valuesが存在している場合に必須となります。",
    "required_without" => ":attributeは:valuesが存在していない場合に必須となります。",
    "required_without_all" => ":attributeは:valuesが存在していない場合に必須となります。",
    "same"             => ":attributeは:otherと一致していません。",
    "size"             => [
        "numeric" => ":attributeには:sizeを指定してください。",
        "file"    => ":attributeのファイルサイズは:size kBと一致しません。",
        "string"  => ":attributeは:size文字で指定してください。",
        "array"   => ":attributeは:size個で指定してください。",
    ],
    "string"           => "The :attribute must be a string.",
    "timezone"         => ":attributeはタイムゾーンを指定してください。",
    "unique"           => ":attributeが既に存在しています。",
    "url"              => ":attributeにはURLを指定してください。",

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
