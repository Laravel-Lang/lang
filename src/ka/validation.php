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

    'accepted'             => ':attribute უნდა იყოს მონიშნული.',
    'active_url'           => ':attribute არ არის სწორი URL მისამართი.',
    'after'                => ':attribute უნდა იყოს თარიღი :date-ის შემდეგ.',
    'after_or_equal'       => ':attribute უნდა იყოს თარიღი :date-ის შემდეგ ან მისი ტოლი.',
    'alpha'                => ':attribute უნდა შეიცავდეს მხოლოდ ასოებს.',
    'alpha_dash'           => ':attribute უნდა შეიცავდეს მხოლოდ ასოებს, რიცხვებს, ტირეებს და ქვეტირეებს.',
    'alpha_num'            => ':attribute უნდა შეიცავდეს მხოლოდ ასოებს და რიცხვებს.',
    'array'                => ':attribute უნდა იყოს მასივი.',
    'before'               => ':attribute უნდა იყოს თარიღი :date-მდე.',
    'before_or_equal'      => ':attribute უნდა იყოს თარიღი :date-მდე ან მისი ტოლი.',
    'between'              => [
        'numeric' => ':attribute უნდა იყოს :min-სა და :max-ს შორის.',
        'file'    => ':attribute უნდა იყოს :min-სა და :max კილობაიტს შორის.',
        'string'  => ':attribute უნდა იყოს :min-სა და :max სიმბოლოს შორის.',
        'array'   => ':attribute-ის რაოდენობა უნდა იყოს :min-დან :max-მდე.',
    ],
    'boolean'              => ':attribute ველი უნდა იყოს true ან false.',
    'confirmed'            => ':attribute-ის დადასტურება არ ემთხვევა.',
    'date'                 => ':attribute შეიცავს თარიღის არასწორ ფორმატს.',
    'date_equals'          => ':attribute უნდა იყოს :date-ის ტოლი თარიღი.',
    'date_format'          => ':attribute არ ემთხვევა თარიღის ფორმატს: :format.',
    'different'            => ':attribute და :other არ უნდა ემთხვეოდეს ერთმანეთს.',
    'digits'               => ':attribute უნდა შედგებოდეს :digits ციფრისგან.',
    'digits_between'       => ':attribute უნდა შედგებოდეს :min-დან :max ციფრამბდე.',
    'dimensions'           => ':attribute შეიცავს სურათის არასწორ ზომებს.',
    'distinct'             => ':attribute-ის ველს აქვს დუბლირებული მნიშვნელობა.',
    'email'                => ':attribute უნდა იყოს სწორი ელ.ფოსტა.',
    'ends_with'            => ':attribute უნდა ბოლოვდებოდეს შემდეგიდან ერთ-ერთით: :values.',
    'exists'               => 'არჩეული :attribute არასწორია.',
    'file'                 => ':attribute უნდა იყოს ფაილი.',
    'filled'               => ':attribute აუცილებელია.',
    'gt'                   => [
        'numeric' => ':attribute უნდა იყოს :value-ზე მეტი.',
        'file'    => ':attribute უნდა იყოს :value კილობაიტზე მეტი.',
        'string'  => ':attribute უნდა შეიცავდეს :value სიმბოლოზე მეტს.',
        'array'   => ':attribute უნდა შეიცავდეს :value ელემენტზე მეტს.',
    ],
    'gte'                  => [
        'numeric' => ':attribute უნდა იყოს მინიმუმ :value.',
        'file'    => ':attribute უნდა იყოს მინიმუმ :value კილობაიტი.',
        'string'  => ':attribute უნდა შეიცავდეს მინიმუმ :value სიმბოლოს.',
        'array'   => ':attribute უნდა შეიცავდეს მინიმუმ :value ელემენტს.',
    ],
    'image'                => ':attribute უნდა იყოს სურათი.',
    'in'                   => 'არჩეული :attribute არასწორია.',
    'in_array'             => ':attribute ველი არ არსებობს :other-ში.',
    'integer'              => ':attribute უნდა იყოს მთელი რიცხვი.',
    'ip'                   => ':attribute უნდა იყოს ვალიდური IP მისამართი.',
    'ipv4'                 => ':attribute უნდა იყოს ვალიდური IPv4 მისამართი.',
    'ipv6'                 => ':attribute უნდა იყოს ვალიდური IPv6 მისამართი.',
    'json'                 => ':attribute უნდა იყოს სწორი JSON ტიპის.',
    'lt'                   => [
        'numeric' => ':attribute უნდა იყოს :value-ზე ნაკლები.',
        'file'    => ':attribute უნდა იყოს :value კილობაიტზე ნაკლები.',
        'string'  => ':attribute უნდა შეიცავდეს :value სიმბოლოზე ნაკლებს.',
        'array'   => ':attribute უნდა შეიცავდეს :value ელემენტზე ნაკლებს.',
    ],
    'lte'                  => [
        'numeric' => ':attribute უნდა იყოს მაქსიმუმ :value.',
        'file'    => ':attribute უნდა იყოს მაქსიმუმ :value კილობაიტი.',
        'string'  => ':attribute უნდა შეიცავდეს მაქსიმუმ :value სიმბოლოს.',
        'array'   => ':attribute უნდა შეიცავდეს მაქსიმუმ :value ელემენტს.',
    ],
    'max'                  => [
        'numeric' => ':attribute არ უნდა აღემატებოდეს :max-ს.',
        'file'    => ':attribute არ უნდა აღემატებოდეს :max კილობაიტს.',
        'string'  => ':attribute არ უნდა აღემატებოდეს :max სიმბოლოს.',
        'array'   => ':attribute-ს არ უნდა ჰქონდეს :max ელემენტზე მეტი.',
    ],
    'mimes'                => ':attribute უნდა იყოს შემდეგი ფაილური ტიპის: :values.',
    'mimetypes'            => ':attribute უნდა იყოს შემდეგი ფაილური ტიპის: :values.',
    'min'                  => [
        'numeric' => ':attribute უნდა იყოს მინიმუმ :min.',
        'file'    => ':attribute უნდა იყოს მინიმუმ :min კილობაიტი.',
        'string'  => ':attribute უნდა შეიცავდეს მინიმუმ :min სიმბოლოს.',
        'array'   => ':attribute-ს უნდა ჰქონდეს მინიმუმ :min ელემენტი.',
    ],
    'multiple_of'          => ':attribute უნდა იყოს :value-ს ჯერადი',
    'not_in'               => 'არჩეული :attribute არასწორია.',
    'not_regex'            => ':attribute-ის ფორმატი არასწორია.',
    'numeric'              => ':attribute უნდა იყოს რიცხვი.',
    'password'             => 'პაროლი არასწორია.',
    'present'              => ':attribute-ის ველი უნდა არსებობდეს, თუნდაც ცარიელი.',
    'regex'                => ':attribute-ის ფორმატი არასწორია.',
    'required'             => ':attribute-ის ველი აუცილებელია.',
    'required_if'          => ':attribute-ის ველი აუცილებელია, თუ :other-ის მნიშვნელობა ემთხვევა :value-ს.',
    'required_unless'      => ':attribute-ის ველი აუცილებელია, თუ :values არ შეიცავს :other-ს.',
    'required_with'        => ':attribute-ის ველი აუცილებელია, თუ :values მითითებულია.',
    'required_with_all'    => ':attribute-ის ველი აუცილებელია, თუ :values მითითებულია.',
    'required_without'     => ':attribute-ის ველი აუცილებელია, თუ :values არ არის მითითებული.',
    'required_without_all' => ':attribute-ის ველი აუცილებელია, თუ არცერთი :values არ არის მითითებული.',
    'same'                 => ':attribute და :other უნდა ემთხვეოდეს ერთმანეთს.',
    'size'                 => [
        'numeric' => ':attribute უნდა იყოს :size.',
        'file'    => ':attribute უნდა იყოს :size კილობაიტი.',
        'string'  => ':attribute უნდა შედგებოდეს :size სიმბოლოსგან.',
        'array'   => ':attribute უნდა შეიცავდეს :size ელემენტს.',
    ],
    'starts_with'          => ':attribute უნდა იწყებოდეს შემდეგიდან ერთ-ერთით: :values.',
    'string'               => ':attribute უნდა იყოს ტექსტი.',
    'timezone'             => ':attribute უნდა იყოს სასაათო სარტყელი.',
    'unique'               => 'ასეთი :attribute უკვე არსებობს.',
    'uploaded'             => ':attribute-ის ატვირთვა ვერ მოხერხდა.',
    'url'                  => ':attribute-ის ფორმატი არასწორია.',
    'uuid'                 => ':attribute უნდა იყოს ვალიდური UUID.',

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

    'attributes' => [],

];
