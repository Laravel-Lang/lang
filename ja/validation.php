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
    "accepted"         => ":attributeを承認してください。",
    "active_url"       => ":attributeが有効なURLではありません。",
    "after"            => ":attributeには、:date以降の日付を指定してください。",
    "alpha"            => ":attributeはアルファベッドのみがご利用できます。",
    "alpha_dash"       => ":attributeは英数字とダッシュ(-)及び下線(_)がご利用できます。",
    "alpha_num"        => ":attributeは英数字がご利用できます。",
    "array"            => "The :attribute must be an array.",
    "before"           => ":attributeには、:date以前の日付をご利用ください。",
    "between"          => array(
        "numeric" => ":attributeは、:minから、:maxまでの数字をご指定ください。",
        "file"    => ":attributeには、:min kBから:max kBまでのサイズのファイルをご指定ください。",
        "string"  => ":attributeは、:min文字から:max文字の間でご指定ください。",
        "array"   => "The :attribute must have between :min - :max items."
    ),
    "confirmed"        => ":attributeと、確認フィールドとが、一致していません。",
    "date"             => "The :attribute is not a valid date.",
    "date_format"      => "The :attribute does not match the format :format.",
    "different"        => ":attributeと:otherには、異なった内容を指定してください。",
    "digits"           => "The :attribute must be :digits digits.",
    "digits_between"   => "The :attribute must be between :min and :max digits.",
    "email"            => ":attributeには正しいメールアドレスの形式をご指定ください。",
    "exists"           => "選択された:attributeは正しくありません。",
    "image"            => ":attributeには画像ファイルを指定してください。",
    "in"               => "選択された:attributeは正しくありません。",
    "integer"          => ":attributeは整数でご指定ください。",
    "ip"               => ":attributeには、有効なIPアドレスをご指定ください。",
    "max"              => array(
        "numeric" => ":attributeには、:max以下の数字をご指定ください。",
        "file"    => ":attributeには、:max kB以下のファイルをご指定ください。",
        "string"  => ":attributeは、:max文字以下でご指定ください。",
        "array"   => "The :attribute may not have more than :max items."
    ),
    "mimes"            => ":attributeには:valuesタイプのファイルを指定してください。",
    "min"              => array(
        "numeric" => ":attributeには、:min以上の数字をご指定ください。",
        "file"    => ":attributeには、:min kB以上のファイルをご指定ください。",
        "string"  => ":attributeは、:min文字以上でご指定ください。",
        "array"   => "The :attribute must have at least :min items."
    ),
    "not_in"           => "選択された:attributeは正しくありません。",
    "numeric"          => ":attributeには、数字を指定してください。",
    "regex"            => "The :attribute format is invalid.",
    "required"         => ":attributeは必ず指定してください。",
    "required_if"      => "The :attribute field is required when :other is :value.",
    "required_with"    => "The :attribute field is required when :values is present.",
    "required_without" => "The :attribute field is required when :values is not present.",
    "required_without_all" => "The :attribute field is required when none of :values are present.",
    "same"             => ":attributeと:otherには同じ値を指定してください。",
    "size"             => array(
        "numeric" => ":attributeには:sizeを指定してください。",
        "file"    => ":attributeのファイルは、:sizeキロバイトでなくてはなりません。",
        "string"  => ":attributeは:size文字で指定してください。",
        "array"   => "The :attribute must contain :size items."
    ),
    "unique"           => ":attributeに指定された値は既に存在しています。",
    "url"              => ":attributeのフォーマットが正しくありません。",

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