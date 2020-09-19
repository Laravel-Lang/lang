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

    'accepted'             => '이 필드를 동의해야 합니다.',
    'active_url'           => '이 URL은 유효한 URL이 아닙니다.',
    'after'                => ':date 이후 날짜여야 합니다.',
    'after_or_equal'       => ':date 이후 날짜이거나 같은 날짜여야 합니다.',
    'alpha'                => '이 필드는 문자만 포함할 수 있습니다.',
    'alpha_dash'           => '이 필드는 문자, 숫자, 대쉬(-), 밑줄(_)만 포함할 수 있습니다.',
    'alpha_num'            => '이 필드는 문자와 숫자만 포함할 수 있습니다.',
    'array'                => '이 필드는 배열이어야 합니다.',
    'before'               => ':date 이전 날짜여야 합니다.',
    'before_or_equal'      => ':date 이전 날짜이거나 같은 날짜여야 합니다.',
    'between'              => [
        'numeric' => '이 값은 :min에서 :max 사이여야 합니다.',
        'file'    => '이 파일의 용량은 :min에서 :max 킬로바이트 사이여야 합니다.',
        'string'  => '이 문자열의 길이는 :min에서 :max 문자 사이여야 합니다.',
        'array'   => '이 배열의 항목 수는 :min에서 :max 개의 항목이 있어야 합니다.',
    ],
    'boolean'              => '이 필드는 true 또는 false 이어야 합니다.',
    'confirmed'            => '확인 항목이 일치하지 않습니다.',
    'date'                 => '유효한 날짜가 아닙니다.',
    'date_equals'          => ':date과(와) 같은날짜여야합니다.',
    'date_format'          => ':format 형식과 일치하지 않습니다.',
    'different'            => '이 값과 :other은(는) 서로 달라야 합니다.',
    'digits'               => ':digits 자리 숫자여야 합니다.',
    'digits_between'       => ':min에서 :max 자리 사이여야 합니다.',
    'dimensions'           => '올바르지 않는 이미지 크기입니다.',
    'distinct'             => '이 필드에 중복된 값이 있습니다.',
    'email'                => '유효한 이메일 주소여야 합니다.',
    'ends_with'            => '다음 중 하나로 끝나야 합니다: :values.',
    'exists'               => '선택된 값은 올바르지 않습니다.',
    'file'                 => '파일이어야 합니다.',
    'filled'               => '이 필드는 값이 있어야 합니다.',
    'gt'                   => [
        'numeric' => '이 값은 :value보다 커야 합니다.',
        'file'    => '이 파일의 용량은 :value킬로바이트보다 커야 합니다.',
        'string'  => '이 문자열의 길이는 :value보다 길어야 합니다.',
        'array'   => '이 배열의 항목 수는 :value개 보다 많아야 합니다.',
    ],
    'gte'                  => [
        'numeric' => '이 값은 :value보다 같거나 커야 합니다.',
        'file'    => '이 파일의 용량은 :value킬로바이트보다 같거나 커야 합니다.',
        'string'  => '이 문자열의 길이는 :value보다 같거나 길어야 합니다.',
        'array'   => '이 배열의 항목 수는 :value개 보다 같거나 많아야 합니다.',
    ],
    'image'                => '이미지여야 합니다.',
    'in'                   => '선택된 값은 올바르지 않습니다.',
    'in_array'             => '이 값은 :other에 존재하지 않습니다.',
    'integer'              => '정수여야 합니다.',
    'ip'                   => '유효한 IP 주소여야 합니다.',
    'ipv4'                 => '유효한 IPv4 주소여야 합니다.',
    'ipv6'                 => '유효한 IPv6 주소여야 합니다.',
    'json'                 => 'JSON 문자열이어야 합니다.',
    'lt'                   => [
        'numeric' => '이 값은 :value보다 작아야 합니다.',
        'file'    => '이 파일의 용량은 :value킬로바이트보다 작아야 합니다.',
        'string'  => '이 문자열의 길이는 :value보다 짧아야 합니다.',
        'array'   => '이 배열의 항목 수는 :value개 보다 작아야 합니다.',
    ],
    'lte'                  => [
        'numeric' => '이 값은 :value보다 같거나 작아야 합니다.',
        'file'    => '이 파일의 용량은 :value킬로바이트보다 같거나 작아야 합니다.',
        'string'  => '이 문자열의 길이는 :value보다 같거나 짧아야 합니다.',
        'array'   => '이 배열의 항목 수는 :value개 보다 같거나 작아야 합니다.',
    ],
    'max'                  => [
        'numeric' => '이 값은 :max보다 클 수 없습니다.',
        'file'    => '이 파일의 용량은 :max킬로바이트보다 클 수 없습니다.',
        'string'  => '이 문자열의 길이는 :max자보다 클 수 없습니다.',
        'array'   => '이 배열의 항목 수는 :max개보다 많을 수 없습니다.',
    ],
    'mimes'                => '다음의 파일 형식이어야 합니다: :values.',
    'mimetypes'            => '다음의 파일 형식이어야 합니다: :values.',
    'min'                  => [
        'numeric' => '이 값은 최소한 :min이어야 합니다.',
        'file'    => '이 파일의 용량은 최소한 :min킬로바이트이어야 합니다.',
        'string'  => '이 문자열의 길이는 최소한 :min자이어야 합니다.',
        'array'   => '이 배열의 항목 수는 최소한 :min개의 항목이 있어야 합니다.',
    ],
    'not_in'               => '선택된 값은 올바르지 않습니다.',
    'not_regex'            => '형식이 올바르지 않습니다.',
    'numeric'              => '숫자여야 합니다.',
    'password'             => '비밀번호가 잘못되었습니다.',
    'present'              => '이 필드가 있어야 합니다.',
    'regex'                => '형식이 올바르지 않습니다.',
    'required'             => '이 필드는 필수입니다.',
    'required_if'          => ':other이(가) :value 일 때 이 필드는 필수입니다.',
    'required_unless'      => ':other이(가) :values에 없다면 이 필드는 필수입니다.',
    'required_with'        => ':values이(가) 있는 경우이 필드는 필수입니다.',
    'required_with_all'    => ':values이(가) 모두 있는 경우 이 필드는 필수입니다.',
    'required_without'     => ':values이(가) 없는 경우 이 필드는 필수입니다.',
    'required_without_all' => ':values이(가) 모두 없는 경우 이 필드는 필수입니다.',
    'same'                 => '이 필드의 값과 :other은(는) 일치해야 합니다.',
    'size'                 => [
        'numeric' => '이 값은 :size (이)여야 합니다.',
        'file'    => '이 파일의 용량은 :size킬로바이트여야 합니다.',
        'string'  => '이 문자열의 길이는 :size자여야 합니다.',
        'array'   => '이 배열은 :size개의 항목을 포함해야 합니다.',
    ],
    'starts_with'          => ':values 중 하나로 시작해야 합니다.',
    'string'               => '문자열이어야 합니다.',
    'timezone'             => '올바른 시간대 이어야 합니다.',
    'unique'               => '이미 사용 중입니다.',
    'uploaded'             => '업로드하지 못했습니다.',
    'url'                  => '형식이 올바르지 않습니다.',
    'uuid'                 => '유효한UUID여야합니다.',

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

];
