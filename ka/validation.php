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

    'accepted'             => ':attribute მონიშნული უნდა იყოს.',
    'active_url'           => ':attribute URL მისამართი უნდა იყოს.',
    'after'                => ':attribute :date-ის შემდეგ უნდა იყოს.',
    'alpha'                => ':attribute მხოლოდ ასოებს უნდა შეიცავდეს.',
    'alpha_dash'           => ':attribute მხოლოდ ასოებს, რიცხვებს და ტირეებს უნდა შეიცავდეს.',
    'alpha_num'            => ':attribute მხოლოდ ასოებს და რიცხვებს უნდა შეიცავდეს.',
    'array'                => ':attribute მასივი უნდა იყოს.',
    'before'               => ':attribute :date-მდე უნდა იყოს.',
    'between'              => [
        'numeric' => ':attribute :min-სა და :max-ს შორის უნდა იყოს.',
        'file'    => ':attribute :min-სა და :max კილობაიტს შორის უნდა იყოს.',
        'string'  => ':attribute :min-სა და :max სიმბოლოს შორის უნდა იყოს.',
        'array'   => ':attribute-ის რაოდენობა :min-დან :max-მდე უნდა იყოს.',
    ],
    'boolean'              => ':attribute-ის მნიშვნელობა true, false, 0 ან 1 უნდა იყოს.',
    'confirmed'            => ':attribute დადასტურებას არ ემთხვევა.',
    'date'                 => ':attribute არასწორი თარიღის ფორმატს შეიცავს.',
    'date_format'          => ':attribute არ ემთხვევა თარიღის ფორმატს: :format.',
    'different'            => ':attribute და :other ერთმანეთს არ უნდა ემთხვეოდეს.',
    'digits'               => ':attribute :digits ციფრისგან უნდა შედგებოდეს.',
    'digits_between'       => ':attribute :min-დან :max ციფრამბდე უნდა შედგებოდეს.',
    'email'                => ':attribute სწორი ელ.ფოსტა უნდა იყოს.',
    'exists'               => 'ასეთი :attribute არ არსებობს.',
    'filled'               => ':attribute აუცილებელია.',
    'image'                => ':attribute სურათი უნდა იყოს.',
    'in'                   => 'მითითებული :attribute არასწორია.',
    'integer'              => ':attribute მთელი რიცხვი უნდა იყოს.',
    'ip'                   => ':attribute IP მისამართი უნდა იყოს.',
    'json'                 => ':attribute JSON ტიპის უნდა იყოს.',
    'max'                  => [
        'numeric' => ':attribute :max-ს უნდა აღემატებოდეს.',
        'file'    => ':attribute :max კილობაიტს არ უნდა აღემატებოდეს.',
        'string'  => ':attribute :max სიმბოლოს არ უნდა აღემატებოდეს.',
        'array'   => ':attribute-ის რაოდენობა :max-ს არ უნდა აღემატებოდეს.',
    ],
    'mimes'                => ':attribute შემდეგი ტიპის უნდა იყოს: :values.',
    'min'                  => [
        'numeric' => ':attribute მინიმუმ :min უნდა იყოს.',
        'file'    => ':attribute მინიმუმ :min კილობაიტი უნდა იყოს.',
        'string'  => ':attribute მინიმუმ :min სიმბოლოს უნდა შეიცავდეს.',
        'array'   => ':attribute მინიმუმ :min უნდა იყოს.',
    ],
    'not_in'               => 'მითითებული :attribute არასწორია.',
    'numeric'              => ':attribute რიცხვი უნდა იყოს.',
    'regex'                => ':attribute არ ემთხვევა ფორმატს.',
    'required'             => ':attribute აუცილებელია.',
    'required_if'          => ':attribute აუცილებელია, თუ :other-ის მნიშვნელობა ემთხვევა :value-ს.',
    'required_with'        => ':attribute აუცილებელია, თუ :values მითითებულია.',
    'required_with_all'    => ':attribute აუცილებელია, თუ :values მითითებულია.',
    'required_without'     => ':attribute აუცილებელია, თუ :values არ არის მითითებული.',
    'required_without_all' => ':attribute აუცილებელია, თუ :values არ არის მითითებული.',
    'same'                 => ':attribute და :other უნდა ემთხვეოდეს ერთმანეთს.',
    'size'                 => [
        'numeric' => ':attribute :size-ის ტოლი უნდა იყოს.',
        'file'    => ':attribute :size კილობაიტი უნდა იყოს.',
        'string'  => ':attribute :size სიმბოლოსგან უნდა შედგებოდეს.',
        'array'   => ':attribute :size ელემენტს უნდა შეიცავდეს.',
    ],
    'string'               => ':attribute ტექსტი უნდა იყოს.',
    'timezone'             => ':attribute დროის ზონა უნდა იყოს.',
    'unique'               => 'ასეთი :attribute უკვე არსებობს.',
    'url'                  => ':attribute URL მისამართი უნდა იყოს.',

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
