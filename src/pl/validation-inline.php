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

    'accepted'        => 'Pole musi zostać zaakceptowane.',
    'active_url'      => 'Pole jest nieprawidłowym adresem URL.',
    'after'           => 'Pole musi być datą późniejszą od :date.',
    'after_or_equal'  => 'Pole musi być datą nie wcześniejszą niż :date.',
    'alpha'           => 'Pole może zawierać jedynie litery.',
    'alpha_dash'      => 'Pole może zawierać jedynie litery, cyfry i myślniki.',
    'alpha_num'       => 'Pole może zawierać jedynie litery i cyfry.',
    'array'           => 'Pole musi być tablicą.',
    'before'          => 'Pole musi być datą wcześniejszą od :date.',
    'before_or_equal' => 'Pole musi być datą nie późniejszą niż :date.',
    'between'         => [
        'numeric' => 'Pole musi zawierać się w granicach :min - :max.',
        'file'    => 'Pole musi zawierać się w granicach :min - :max kilobajtów.',
        'string'  => 'Pole musi zawierać się w granicach :min - :max znaków.',
        'array'   => 'Pole musi składać się z :min - :max elementów.',
    ],
    'boolean'        => 'Pole musi mieć wartość logiczną prawda albo fałsz.',
    'confirmed'      => 'Potwierdzenie pola nie zgadza się.',
    'date'           => 'Pole nie jest prawidłową datą.',
    'date_equals'    => 'Pole musi być datą równą :date.',
    'date_format'    => 'Pole nie jest w formacie :format.',
    'different'      => 'Pole oraz :other muszą się różnić.',
    'digits'         => 'Pole musi składać się z :digits cyfr.',
    'digits_between' => 'Pole musi mieć od :min do :max cyfr.',
    'dimensions'     => 'Pole ma niepoprawne wymiary.',
    'distinct'       => 'Pole ma zduplikowane wartości.',
    'email'          => 'Pole nie jest poprawnym adresem e-mail.',
    'ends_with'      => 'Pole musi kończyć się jedną z następujących wartości: :values.',
    'exists'         => 'Zaznaczona wartość jest nieprawidłowa.',
    'file'           => 'Pole musi być plikiem.',
    'filled'         => 'Pole nie może być puste.',
    'gt'             => [
        'numeric' => 'Pole musi być większe niż :value.',
        'file'    => 'Pole musi być większe niż :value kilobajtów.',
        'string'  => 'Pole musi być dłuższe niż :value znaków.',
        'array'   => 'Pole musi mieć więcej niż :value elementów.',
    ],
    'gte' => [
        'numeric' => 'Pole musi być większe lub równe :value.',
        'file'    => 'Pole musi być większe lub równe :value kilobajtów.',
        'string'  => 'Pole musi być dłuższe lub równe :value znaków.',
        'array'   => 'Pole musi mieć :value lub więcej elementów.',
    ],
    'image'    => 'Pole musi być obrazkiem.',
    'in'       => 'Zaznaczony element jest nieprawidłowy.',
    'in_array' => 'Pole nie znajduje się w :other.',
    'integer'  => 'Pole musi być liczbą całkowitą.',
    'ip'       => 'Pole musi być prawidłowym adresem IP.',
    'ipv4'     => 'Pole musi być prawidłowym adresem IPv4.',
    'ipv6'     => 'Pole musi być prawidłowym adresem IPv6.',
    'json'     => 'Pole musi być poprawnym ciągiem znaków JSON.',
    'lt'       => [
        'numeric' => 'Pole musi być mniejsze niż :value.',
        'file'    => 'Pole musi być mniejsze niż :value kilobajtów.',
        'string'  => 'Pole musi być krótsze niż :value znaków.',
        'array'   => 'Pole musi mieć mniej niż :value elementów.',
    ],
    'lte' => [
        'numeric' => 'Pole musi być mniejsze lub równe :value.',
        'file'    => 'Pole musi być mniejsze lub równe :value kilobajtów.',
        'string'  => 'Pole musi być krótsze lub równe :value znaków.',
        'array'   => 'Pole musi mieć :value lub mniej elementów.',
    ],
    'max' => [
        'numeric' => 'Pole nie może być większe niż :max.',
        'file'    => 'Pole nie może być większe niż :max kilobajtów.',
        'string'  => 'Pole nie może być dłuższe niż :max znaków.',
        'array'   => 'Pole nie może mieć więcej niż :max elementów.',
    ],
    'mimes'     => 'Pole musi być plikiem typu :values.',
    'mimetypes' => 'Pole musi być plikiem typu :values.',
    'min'       => [
        'numeric' => 'Pole musi być nie mniejsze od :min.',
        'file'    => 'Pole musi mieć przynajmniej :min kilobajtów.',
        'string'  => 'Pole musi mieć przynajmniej :min znaków.',
        'array'   => 'Pole musi mieć przynajmniej :min elementów.',
    ],
    'not_in'               => 'Zaznaczona wartość jest nieprawidłowa.',
    'not_regex'            => 'Format pola jest nieprawidłowy.',
    'numeric'              => 'Pole musi być liczbą.',
    'password'             => 'Hasło jest nieprawidłowe.',
    'present'              => 'Pole musi być obecne.',
    'regex'                => 'Format pola jest nieprawidłowy.',
    'required'             => 'Pole jest wymagane.',
    'required_if'          => 'Pole jest wymagane gdy :other ma wartość :value.',
    'required_unless'      => 'Pole jest wymagane jeżeli :other nie znajduje się w :values.',
    'required_with'        => 'Pole jest wymagane gdy :values jest obecny.',
    'required_with_all'    => 'Pole jest wymagane gdy wszystkie :values są obecne.',
    'required_without'     => 'Pole jest wymagane gdy :values nie jest obecny.',
    'required_without_all' => 'Pole jest wymagane gdy żadne z :values nie są obecne.',
    'same'                 => 'Pole i :other muszą być takie same.',
    'size'                 => [
        'numeric' => 'Pole musi mieć :size.',
        'file'    => 'Pole musi mieć :size kilobajtów.',
        'string'  => 'Pole musi mieć :size znaków.',
        'array'   => 'Pole musi zawierać :size elementów.',
    ],
    'starts_with' => 'Pole musi zaczynać się jedną z następujących wartości: :values.',
    'string'      => 'Pole musi być ciągiem znaków.',
    'timezone'    => 'Pole musi być prawidłową strefą czasową.',
    'unique'      => 'Taka wartość już występuje.',
    'uploaded'    => 'Nie udało się wgrać pliku.',
    'url'         => 'Format pola jest nieprawidłowy.',
    'uuid'        => 'Pole musi być poprawnym identyfikatorem UUID.',

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
