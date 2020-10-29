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

    'accepted'        => 'Trường này phải được chấp nhận.',
    'active_url'      => 'Trường này không phải là một URL hợp lệ.',
    'after'           => 'Trường này phải là một ngày sau ngày :date.',
    'after_or_equal'  => 'Trường này phải là thời gian bắt đầu sau hoặc đúng bằng :date.',
    'alpha'           => 'Trường này chỉ có thể chứa các chữ cái.',
    'alpha_dash'      => 'Trường này chỉ có thể chứa chữ cái, số và dấu gạch ngang.',
    'alpha_num'       => 'Trường này chỉ có thể chứa chữ cái và số.',
    'array'           => 'Trường này phải là dạng mảng.',
    'before'          => 'Trường này phải là một ngày trước ngày :date.',
    'before_or_equal' => 'Trường này phải là thời gian bắt đầu trước hoặc đúng bằng :date.',
    'between'         => [
        'numeric' => 'Trường này phải nằm trong khoảng :min - :max.',
        'file'    => 'Dung lượng tập tin trong trường này phải từ :min - :max kB.',
        'string'  => 'Trường này phải từ :min - :max ký tự.',
        'array'   => 'Trường này phải có từ :min - :max phần tử.',
    ],
    'boolean'        => 'Trường này phải là true hoặc false.',
    'confirmed'      => 'Giá trị xác nhận trong trường này không khớp.',
    'date'           => 'Trường này không phải là định dạng của ngày-tháng.',
    'date_equals'    => 'Trường này phải là một ngày bằng với :date.',
    'date_format'    => 'Trường này không giống với định dạng :format.',
    'different'      => 'Trường này và :other phải khác nhau.',
    'digits'         => 'Độ dài của trường này phải gồm :digits chữ số.',
    'digits_between' => 'Độ dài của trường này phải nằm trong khoảng :min và :max chữ số.',
    'dimensions'     => 'Trường này có kích thước không hợp lệ.',
    'distinct'       => 'Trường này có giá trị trùng lặp.',
    'email'          => 'Trường này phải là một địa chỉ email hợp lệ.',
    'ends_with'      => 'Trường này phải kết thúc bằng một trong những giá trị sau: :values',
    'exists'         => 'Giá trị đã chọn trong trường này không hợp lệ.',
    'file'           => 'Trường này phải là một tệp tin.',
    'filled'         => 'Trường này không được bỏ trống.',
    'gt'             => [
        'numeric' => 'Giá trị trường này phải lớn hơn :value.',
        'file'    => 'Dung lượng trường này phải lớn hơn :value kilobytes.',
        'string'  => 'Độ dài trường này phải nhiều hơn :value kí tự.',
        'array'   => 'Mảng này phải có nhiều hơn :value phần tử.',
    ],
    'gte' => [
        'numeric' => 'Giá trị trường này phải lớn hơn hoặc bằng :value.',
        'file'    => 'Dung lượng trường này phải lớn hơn hoặc bằng :value kilobytes.',
        'string'  => 'Độ dài trường này phải lớn hơn hoặc bằng :value kí tự.',
        'array'   => 'Mảng này phải có ít nhất :value phần tử.',
    ],
    'image'    => 'Trường này phải là định dạng hình ảnh.',
    'in'       => 'Giá trị đã chọn trong trường này không hợp lệ.',
    'in_array' => 'Trường này phải thuộc tập cho phép: :other.',
    'integer'  => 'Trường này phải là một số nguyên.',
    'ip'       => 'Trường này phải là một địa chỉ IP.',
    'ipv4'     => 'Trường này phải là một địa chỉ IPv4.',
    'ipv6'     => 'Trường này phải là một địa chỉ IPv6.',
    'json'     => 'Trường này phải là một chuỗi JSON.',
    'lt'       => [
        'numeric' => 'Giá trị trường này phải nhỏ hơn :value.',
        'file'    => 'Dung lượng trường này phải nhỏ hơn :value kilobytes.',
        'string'  => 'Độ dài trường này phải nhỏ hơn :value kí tự.',
        'array'   => 'Mảng này phải có ít hơn :value phần tử.',
    ],
    'lte' => [
        'numeric' => 'Giá trị trường này phải nhỏ hơn hoặc bằng :value.',
        'file'    => 'Dung lượng trường này phải nhỏ hơn hoặc bằng :value kilobytes.',
        'string'  => 'Độ dài trường này phải nhỏ hơn hoặc bằng :value kí tự.',
        'array'   => 'Mảng này không được có nhiều hơn :value phần tử.',
    ],
    'max' => [
        'numeric' => 'Trường này không được lớn hơn :max.',
        'file'    => 'Dung lượng tập tin trong trường này không được lớn hơn :max kB.',
        'string'  => 'Trường này không được lớn hơn :max ký tự.',
        'array'   => 'Trường này không được lớn hơn :max phần tử.',
    ],
    'mimes'     => 'Trường này phải là một tập tin có định dạng: :values.',
    'mimetypes' => 'Trường này phải là một tập tin có định dạng: :values.',
    'min'       => [
        'numeric' => 'Trường này phải tối thiểu là :min.',
        'file'    => 'Dung lượng tập tin trong trường này phải tối thiểu :min kB.',
        'string'  => 'Trường này phải có tối thiểu :min ký tự.',
        'array'   => 'Trường này phải có tối thiểu :min phần tử.',
    ],
    'multiple_of'          => 'Trường này phải là bội số của :value',
    'not_in'               => 'Giá trị đã chọn trong trường này không hợp lệ.',
    'not_regex'            => 'Trường này có định dạng không hợp lệ.',
    'numeric'              => 'Trường này phải là một số.',
    'password'             => 'Mật khẩu không đúng.',
    'present'              => 'Trường này phải được cung cấp.',
    'regex'                => 'Trường này có định dạng không hợp lệ.',
    'required'             => 'Trường này không được bỏ trống.',
    'required_if'          => 'Trường này không được bỏ trống khi trường :other là :value.',
    'required_unless'      => 'Trường này không được bỏ trống trừ khi :other là :values.',
    'required_with'        => 'Trường này không được bỏ trống khi một trong :values có giá trị.',
    'required_with_all'    => 'Trường này không được bỏ trống khi tất cả :values có giá trị.',
    'required_without'     => 'Trường này không được bỏ trống khi một trong :values không có giá trị.',
    'required_without_all' => 'Trường này không được bỏ trống khi tất cả :values không có giá trị.',
    'same'                 => 'Trường này và :other phải giống nhau.',
    'size'                 => [
        'numeric' => 'Trường này phải bằng :size.',
        'file'    => 'Dung lượng tập tin trong trường này phải bằng :size kB.',
        'string'  => 'Trường này phải chứa :size ký tự.',
        'array'   => 'Trường này phải chứa :size phần tử.',
    ],
    'starts_with' => 'Trường này phải được bắt đầu bằng một trong những giá trị sau: :values',
    'string'      => 'Trường này phải là một chuỗi ký tự.',
    'timezone'    => 'Trường này phải là một múi giờ hợp lệ.',
    'unique'      => 'Trường này đã có trong cơ sở dữ liệu.',
    'uploaded'    => 'Trường này tải lên thất bại.',
    'url'         => 'Trường này không giống với định dạng một URL.',
    'uuid'        => 'Trường này phải là một chuỗi UUID hợp lệ.',

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
