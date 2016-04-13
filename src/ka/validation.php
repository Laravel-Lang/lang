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

    'accepted'             => ':Attribute მონიშნული უნდა იყოს.',
    'active_url'           => ':Attribute URL მისამართი უნდა იყოს.',
    'after'                => ':Attribute :date-ის შემდეგ უნდა იყოს.',
    'alpha'                => ':Attribute მხოლოდ ასოებს უნდა შეიცავდეს.',
    'alpha_dash'           => ':Attribute მხოლოდ ასოებს, რიცხვებს და ტირეებს უნდა შეიცავდეს.',
    'alpha_num'            => ':Attribute მხოლოდ ასოებს და რიცხვებს უნდა შეიცავდეს.',
    'array'                => ':Attribute მასივი უნდა იყოს.',
    'before'               => ':Attribute :date-მდე უნდა იყოს.',
    'between'              => [
        'numeric' => ':Attribute :min-სა და :max-ს შორის უნდა იყოს.',
        'file'    => ':Attribute :min-სა და :max კილობაიტს შორის უნდა იყოს.',
        'string'  => ':Attribute :min-სა და :max სიმბოლოს შორის უნდა იყოს.',
        'array'   => ':Attribute-ის რაოდენობა :min-დან :max-მდე უნდა იყოს.',
    ],
    'boolean'              => ':Attribute-ის მნიშვნელობა true, false, 0 ან 1 უნდა იყოს.',
    'confirmed'            => ':Attribute დადასტურებას არ ემთხვევა.',
    'date'                 => ':Attribute არასწორი თარიღის ფორმატს შეიცავს.',
    'date_format'          => ':Attribute არ ემთხვევა თარიღის ფორმატს: :format.',
    'different'            => ':Attribute და :other ერთმანეთს არ უნდა ემთხვეოდეს.',
    'digits'               => ':Attribute :digits ციფრისგან უნდა შედგებოდეს.',
    'digits_between'       => ':Attribute :min-დან :max ციფრამბდე უნდა შედგებოდეს.',
    'distinct'             => ':Attribute ველი შეიცავს გაორებულ მნიშვნელობას.',
    'email'                => ':Attribute სწორი ელ.ფოსტა უნდა იყოს.',
    'exists'               => 'ასეთი :attribute არ არსებობს.',
    'filled'               => ':Attribute აუცილებელია.',
    'image'                => ':Attribute სურათი უნდა იყოს.',
    'in'                   => 'მითითებული :attribute არასწორია.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => ':Attribute მთელი რიცხვი უნდა იყოს.',
    'ip'                   => ':Attribute IP მისამართი უნდა იყოს.',
    'json'                 => ':Attribute JSON ტიპის უნდა იყოს.',
    'max'                  => [
        'numeric' => ':Attribute :max-ს უნდა აღემატებოდეს.',
        'file'    => ':Attribute :max კილობაიტს არ უნდა აღემატებოდეს.',
        'string'  => ':Attribute :max სიმბოლოს არ უნდა აღემატებოდეს.',
        'array'   => ':Attribute-ის რაოდენობა :max-ს არ უნდა აღემატებოდეს.',
    ],
    'mimes'                => ':Attribute შემდეგი ტიპის უნდა იყოს: :values.',
    'min'                  => [
        'numeric' => ':Attribute მინიმუმ :min უნდა იყოს.',
        'file'    => ':Attribute მინიმუმ :min კილობაიტი უნდა იყოს.',
        'string'  => ':Attribute მინიმუმ :min სიმბოლოს უნდა შეიცავდეს.',
        'array'   => ':Attribute მინიმუმ :min უნდა იყოს.',
    ],
    'not_in'               => 'მითითებული :attribute არასწორია.',
    'numeric'              => ':Attribute რიცხვი უნდა იყოს.',
    'present'              => ':Attribute აუცილებელია.',
    'regex'                => ':Attribute არ ემთხვევა ფორმატს.',
    'required'             => ':Attribute აუცილებელია.',
    'required_if'          => ':Attribute აუცილებელია, თუ :other-ის მნიშვნელობა ემთხვევა :value-ს.',
    'required_unless'      => ':Attribute აუცილებელია, თუ :values არ მოიცავს :other-ს.',
    'required_with'        => ':Attribute აუცილებელია, თუ :values მითითებულია.',
    'required_with_all'    => ':Attribute აუცილებელია, თუ :values მითითებულია.',
    'required_without'     => ':Attribute აუცილებელია, თუ :values არ არის მითითებული.',
    'required_without_all' => ':Attribute აუცილებელია, თუ :values არ არის მითითებული.',
    'same'                 => ':Attribute და :other უნდა ემთხვეოდეს ერთმანეთს.',
    'size'                 => [
        'numeric' => ':Attribute :size-ის ტოლი უნდა იყოს.',
        'file'    => ':Attribute :size კილობაიტი უნდა იყოს.',
        'string'  => ':Attribute :size სიმბოლოსგან უნდა შედგებოდეს.',
        'array'   => ':Attribute :size ელემენტს უნდა შეიცავდეს.',
    ],
    'string'               => ':Attribute ტექსტი უნდა იყოს.',
    'timezone'             => ':Attribute დროის ზონა უნდა იყოს.',
    'unique'               => 'ასეთი :attribute უკვე არსებობს.',
    'url'                  => ':Attribute URL მისამართი უნდა იყოს.',

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
