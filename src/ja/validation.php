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

    'accepted'   => ':Attributeを承認してください。',
    'active_url' => ':Attributeは、有効なURLではありません。',
    'after'      => ':Attributeには、:date以降の日付を指定してください。',
    'alpha'      => ':Attributeには、アルファベッドのみ使用できます。',
    'alpha_dash' => ":attributeには、英数字('A-Z','a-z','0-9')とハイフンと下線('-','_')が使用できます。",
    'alpha_num'  => ":attributeには、英数字('A-Z','a-z','0-9')が使用できます。",
    'array'      => ':Attributeには、配列を指定してください。',
    'before'     => ':Attributeには、:date以前の日付を指定してください。',
    'between'    => [
        'numeric' => ':Attributeには、:minから、:maxまでの数字を指定してください。',
        'file'    => ':Attributeには、:min KBから:max KBまでのサイズのファイルを指定してください。',
        'string'  => ':Attributeは、:min文字から:max文字にしてください。',
        'array'   => ':Attributeの項目は、:min個から:max個にしてください。',
    ],
    'boolean'              => ":attributeには、'true'か'false'を指定してください。",
    'confirmed'            => ':Attributeと:attribute確認が一致しません。',
    'date'                 => ':Attributeは、正しい日付ではありません。',
    'date_format'          => ":attributeの形式は、':format'と合いません。",
    'different'            => ':Attributeと:otherには、異なるものを指定してください。',
    'digits'               => ':Attributeは、:digits桁にしてください。',
    'digits_between'       => ':Attributeは、:min桁から:max桁にしてください。',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => ':Attributeは、有効なメールアドレス形式で指定してください。',
    'exists'               => '選択された:attributeは、有効ではありません。',
    'filled'               => ':Attributeは必須です。',
    'image'                => ':Attributeには、画像を指定してください。',
    'in'                   => '選択された:attributeは、有効ではありません。',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => ':Attributeには、整数を指定してください。',
    'ip'                   => ':Attributeには、有効なIPアドレスを指定してください。',
    'json'                 => ':Attributeには、有効なJSON文字列を指定してください。',
    'max'                  => [
        'numeric' => ':Attributeには、:max以下の数字を指定してください。',
        'file'    => ':Attributeには、:max KB以下のファイルを指定してください。',
        'string'  => ':Attributeは、:max文字以下にしてください。',
        'array'   => ':Attributeの項目は、:max個以下にしてください。',
    ],
    'mimes' => ':Attributeには、:valuesタイプのファイルを指定してください。',
    'min'   => [
        'numeric' => ':Attributeには、:min以上の数字を指定してください。',
        'file'    => ':Attributeには、:min KB以上のファイルを指定してください。',
        'string'  => ':Attributeは、:min文字以上にしてください。',
        'array'   => ':Attributeの項目は、:max個以上にしてください。',
    ],
    'not_in'               => '選択された:attributeは、有効ではありません。',
    'numeric'              => ':Attributeには、数字を指定してください。',
    'present'              => 'The :attribute field must be present.',
    'regex'                => ':Attributeには、有効な正規表現を指定してください。',
    'required'             => ':Attributeは、必ず指定してください。',
    'required_if'          => ':otherが:valueの場合、:attributeを指定してください。',
    'required_unless'      => ':otherが:value以外の場合、:attributeを指定してください。',
    'required_with'        => ':valuesが指定されている場合、:attributeも指定してください。',
    'required_with_all'    => ':valuesが全て指定されている場合、:attributeも指定してください。',
    'required_without'     => ':valuesが指定されていない場合、:attributeを指定してください。',
    'required_without_all' => ':valuesが全て指定されていない場合、:attributeを指定してください。',
    'same'                 => ':Attributeと:otherが一致しません。',
    'size'                 => [
        'numeric' => ':Attributeには、:sizeを指定してください。',
        'file'    => ':Attributeには、:size KBのファイルを指定してください。',
        'string'  => ':Attributeは、:size文字にしてください。',
        'array'   => ':Attributeの項目は、:size個にしてください。',
    ],
    'string'   => ':Attributeには、文字を指定してください。',
    'timezone' => ':Attributeには、有効なタイムゾーンを指定してください。',
    'unique'   => '指定の:attributeは既に使用されています。',
    'url'      => ':Attributeは、有効なURL形式で指定してください。',

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
