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

    'accepted'        => 'Ви повинні прийняти :attribute.',
    'active_url'      => 'Поле :attribute не є дійсною URL-адресою.',
    'after'           => 'У полі :attribute повинна бути дата після :date.',
    'after_or_equal'  => 'У полі :attribute повинна бути дата після (або рівна) :date.',
    'alpha'           => 'Поле :attribute може містити лише літери.',
    'alpha_dash'      => 'Поле :attribute може містити лише літери, цифри, дефіс і нижнє підкреслення.',
    'alpha_num'       => 'Поле :attribute може містити лише літери і цифри.',
    'array'           => 'Поле :attribute повинно бути масивом.',
    'before'          => 'У полі :attribute повинна бути дата до :date.',
    'before_or_equal' => 'У полі :attribute повинна бути дата до (або рівна) :date.',
    'between'         => [
        'numeric' => 'Поле :attribute повинно бути між :min і :max.',
        'file'    => 'Розмір файла у полі :attribute повинен бути між :min і :max Кілобайт(а).',
        'string'  => 'Кількість символів у полі :attribute повинно бути між :min і :max.',
        'array'   => 'Кількість елементів у полі :attribute повинно бути між :min і :max.',
    ],
    'boolean'        => 'Поле :attribute повинно мати значення логічного типу.',
    'confirmed'      => 'Поле :attribute не співпадає з підтвердженням.',
    'date'           => 'Поле :attribute не є датою.',
    'date_equals'    => 'Поле :attribute повинно бути датою рівною :date.',
    'date_format'    => 'Поле :attribute не відповідає формату :format.',
    'different'      => 'Поля :attribute і :other повинні відрізнятись.',
    'digits'         => 'Довжина цифрового поля :attribute повинна бути :digits цифр.',
    'digits_between' => 'Довжина цифрового поля :attribute повинна бути між :min і :max цифр.',
    'dimensions'     => 'Поле :attribute містить недопустимі розміри зображення.',
    'distinct'       => 'Поле :attribute містить повторювані значення.',
    'email'          => 'Поле :attribute повинно бути справжньою адресою електронної пошти.',
    'ends_with'      => 'Поле :attribute повинно завершуватись одним з наступних значень: :values',
    'exists'         => 'Вибране значення для :attribute некоректне.',
    'file'           => 'Поле :attribute повинно бути файлом.',
    'filled'         => 'Поле :attribute обов\'язково повинно мати значення.',
    'gt'             => [
        'numeric' => 'Поле :attribute повинно бути більше, ніж :value.',
        'file'    => 'Розмір файла у полі :attribute повинен бути більше :value Кілобайт(а).',
        'string'  => 'Кількість символів у полі :attribute повинна бути більше :value.',
        'array'   => 'Кількість елементів у полі :attribute повинна бути більше :value.',
    ],
    'gte' => [
        'numeric' => 'Значення в полі :attribute повинно бути більше або рівне :value.',
        'file'    => 'Розмір файла у полі :attribute повинен бути більше або рівним :value Кілобайт(а).',
        'string'  => 'Кількість символів у полі :attribute повинна бути більше або рівною :value.',
        'array'   => 'Кількість елементів у полі :attribute повинна бути більше або рівною :value.',
    ],
    'image'    => 'Поле :attribute повинно бути зображенням.',
    'in'       => 'Вибране значення для :attribute містить помилки.',
    'in_array' => 'Поле :attribute не існує в :other.',
    'integer'  => 'Поле :attribute повинно бути цілим числом.',
    'ip'       => 'Поле :attribute повинно бути правильним IP-адресом.',
    'ipv4'     => 'Поле :attribute повинно бути правильним IPv4-адресом.',
    'ipv6'     => 'Поле :attribute повинно бути правильним IPv6-адресом.',
    'json'     => 'Поле :attribute повинно бути правильним JSON рядком.',
    'lt'       => [
        'numeric' => 'Поле :attribute повинно бути менше, ніж :value.',
        'file'    => 'Розмір файла у полі :attribute повинен бути менше :value Кілобайт(а).',
        'string'  => 'Кількість символів у полі :attribute повинна бути менше :value.',
        'array'   => 'Кількість елементів у полі :attribute повинна бути менше :value.',
    ],
    'lte' => [
        'numeric' => 'Поле :attribute повинно бути менше або рівне :value.',
        'file'    => 'Розмір файла у полі :attribute повинен бути менше або рівним :value Кілобайт(а).',
        'string'  => 'Кількість символів у полі :attribute повинна бути менше або рівною :value.',
        'array'   => 'Кількість елементів у полі :attribute повинна бути менше або рівною :value.',
    ],
    'max' => [
        'numeric' => 'Поле :attribute не може бути більше, ніж :max.',
        'file'    => 'Розмір файла у полі :attribute не може бути більше, ніж :max Кілобайт(а).',
        'string'  => 'Кількість символів у полі :attribute не може перевищувати :max.',
        'array'   => 'Кількість елементів у полі :attribute не може перевищувати :max.',
    ],
    'mimes'     => 'Поле :attribute повинно бути файлом одного з наступних типів: :values.',
    'mimetypes' => 'Поле :attribute повинно бути файлом одного з наступних типів: :values.',
    'min'       => [
        'numeric' => 'Поле :attribute повинно бути не менше :min.',
        'file'    => 'Розмір файла у полі :attribute повинен бути не менше, ніж :min Кілобайт(а).',
        'string'  => 'Кількість символів у полі :attribute повинна бути не менше, ніж :min.',
        'array'   => 'Кількість елементів у полі :attribute повинна бути не менше, ніж :min.',
    ],
    'not_in'               => 'Вибране значення для :attribute містить помилки.',
    'not_regex'            => 'Поле :attribute не задовільняє вимогам формату.',
    'numeric'              => 'Поле :attribute повинно бути числом.',
    'password'             => 'Неправильний пароль.',
    'present'              => 'Поле :attribute має бути присутнім.',
    'regex'                => 'Поле :attribute не задовільняє вимогам формату.',
    'required'             => 'Поле :attribute обов\'язково має бути заповненим.',
    'required_if'          => 'Поле :attribute обов\'язково має бути заповненим, коли :other = :value.',
    'required_unless'      => 'Поле :attribute обов\'язково має бути заповненим, коли :other не рівне :values.',
    'required_with'        => 'Поле :attribute обов\'язково має бути заповненим, коли є :values.',
    'required_with_all'    => 'Поле :attribute обов\'язково має бути заповненим, коли є :values.',
    'required_without'     => 'Поле :attribute обов\'язково має бути заповненим, коли немає :values.',
    'required_without_all' => 'Поле :attribute обов\'язково має бути заповненим, коли немає ні одного з :values.',
    'same'                 => 'Значення полів :attribute і :other повинні співпадати.',
    'size'                 => [
        'numeric' => 'Поле :attribute повинно бути рівним :size.',
        'file'    => 'Розмір файла у полі :attribute повинен бути рівним :size Кілобайт(а).',
        'string'  => 'Кількість символів у полі :attribute повинна бути рівною :size.',
        'array'   => 'Кількість елементів у полі :attribute повинна бути рівною :size.',
    ],
    'starts_with' => 'Поле :attribute повинно починатись одним з наступних значень: :values',
    'string'      => 'Поле :attribute повинно бути рядком.',
    'timezone'    => 'Значення поля :attribute повинно бути правильним часовим поясом.',
    'unique'      => 'Таке значення поля :attribute вже зайнято.',
    'uploaded'    => 'Загрузка поля :attribute не вдалась.',
    'url'         => 'Поле :attribute містить помилковий формат.',
    'uuid'        => 'Поле :attribute повинно бути коректним UUID.',

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

    'attributes' => [
        'name'                  => 'Ім\'я',
        'username'              => 'Логін',
        'email'                 => 'E-Mail адрес',
        'first_name'            => 'Ім\'я',
        'last_name'             => 'Фамілія',
        'password'              => 'Пароль',
        'password_confirmation' => 'Підтвердження пароля',
        'city'                  => 'Місто',
        'country'               => 'Країна',
        'address'               => 'Адреса',
        'phone'                 => 'Телефон',
        'mobile'                => 'Моб. номер',
        'age'                   => 'Вік',
        'sex'                   => 'Стать',
        'gender'                => 'Стать',
        'day'                   => 'День',
        'month'                 => 'Місяць',
        'year'                  => 'Рік',
        'hour'                  => 'Година',
        'minute'                => 'Хвилина',
        'second'                => 'Секунда',
        'title'                 => 'Заголовок',
        'content'               => 'Контент',
        'description'           => 'Опис',
        'excerpt'               => 'Витяг',
        'date'                  => 'Дата',
        'time'                  => 'Час',
        'available'             => 'Доступно',
        'size'                  => 'Розмір',
    ],
];
