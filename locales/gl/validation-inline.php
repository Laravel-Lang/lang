<?php

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

    'accepted' => 'O :attribute debe ser aceptado.',
    'accepted_if' => 'O :attribute debe ser aceptado cando :other é :value.',
    'active_url' => 'O :attribute non é unha URL válida.',
    'after' => 'O :attribute debe ser unha data despois de :date.',
    'after_or_equal' => 'O :attribute debe ser unha data posterior ou igual a :date.',
    'alpha' => 'O :attribute só debe conter letras.',
    'alpha_dash' => 'O :attribute só debe conter letras, números, guións e guións baixos.',
    'alpha_num' => 'O :attribute só debe conter letras e números.',
    'array' => 'O :attribute debe ser un array.',
    'before' => 'O :attribute debe ser unha data anterior a :date.',
    'before_or_equal' => 'O :attribute debe ser unha data anterior ou igual a :date.',
    'between' => [
        'numeric' => 'O :attribute debe estar entre :min e :max.',
        'file' => 'O :attribute debe estar entre :min e :max kilobytes.',
        'string' => 'O :attribute debe estar entre :min e :max caracteres.',
        'array' => 'O :attribute debe estar entre :min e :max items.',
    ],
    'boolean' => 'O :attribute campo debe ser verdadeiro ou falso.',
    'confirmed' => 'A :attribute a confirmación non coincide.',
    'current_password' => 'O contrasinal é incorrecto.',
    'date' => 'O :attribute non é unha data válida.',
    'date_equals' => 'O :attribute debe ser unha data igual a :date.',
    'date_format' => 'O :attribute non coincide co formato :format.',
    'declined' => 'O :attribute debe ser rexeitado.',
    'declined_if' => 'O :attribute debe ser rexeitado cando :other é :value.',
    'different' => 'O :attribute e :other debe ser diferente.',
    'digits' => 'O :attribute debe ser :digits díxitos.',
    'digits_between' => 'O :attribute debe estar entre :min e :max díxitos.',
    'dimensions' => 'O :attribute ten dimensións de imaxe non válidas.',
    'distinct' => 'O eido :attribute ten un valor duplicado.',
    'email' => 'O :attribute debe ser un enderezo de correo-e válido.',
    'ends_with' => 'O :attribute debe rematar cun dos seguintes: :values.',
    'enum' => 'O :attribute seleccionado non é válido.',
    'exists' => 'O :attribute seleccionado non é válido.',
    'file' => 'O :attribute debe ser un arquivo.',
    'filled' => 'O eido :attribute debe ter un valor.',
    'gt' => [
        'numeric' => 'O :attribute debe ser maior que :value.',
        'file' => 'O :attribute debe ser maior que :value kilobytes.',
        'string' => 'O :attribute debe ser maior que :value caracteres.',
        'array' => 'O :attribute debe ter máis de :value items.',
    ],
    'gte' => [
        'numeric' => 'O :attribute debe ser maior ou igual a :value.',
        'file' => 'O :attribute debe ser maior ou igual a :value kilobytes.',
        'string' => 'O :attribute debe ser maior ou igual a :value caracteres.',
        'array' => 'O :attribute debe ter :value items ou máis.',
    ],
    'image' => 'O :attribute debe ser unha imaxe.',
    'in' => 'O :attribute seleccionado non é válido.',
    'in_array' => 'O eido :attribute non existe en :other.',
    'integer' => 'O :attribute debe ser un integro.',
    'ip' => 'O :attribute debe ser unha dirección IP válida.',
    'ipv4' => 'O :attribute debe ser unha dirección IPv4 válida.',
    'ipv6' => 'O :attribute debe ser unha dirección IPv6 válida.',
    'json' => 'O :attribute debe ser unha cadea JSON válida.',
    'lt' => [
        'numeric' => 'O :attribute debe ser menos que :value.',
        'file' => 'O :attribute debe ser inferior a :value kilobytes.',
        'string' => 'O :attribute debe ser inferior a :value caracteres.',
        'array' => 'O :attribute debe ter menos de :value items.',
    ],
    'lte' => [
        'numeric' => 'O :attribute debe ser inferior ou igual a :value.',
        'file' => 'O :attribute debe ser inferior ou igual a :value kilobytes.',
        'string' => 'O :attribute debe ser inferior ou igual a :value caracteres.',
        'array' => 'O :attribute non debe ter máis de :value items.',
    ],
    'mac_address' => 'O :attribute debe ser unha dirección MAC válida.',
    'max' => [
        'numeric' => 'O :attribute non debe ser maior que :max.',
        'file' => 'O :attribute non debe ser maior que :max kilobytes.',
        'string' => 'O :attribute non debe ser maior que :max caracteres.',
        'array' => 'O :attribute non debe ter máis de :max items.',
    ],
    'mimes' => 'O :attribute debe ser un arquivo de tipo: :values.',
    'mimetypes' => 'O :attribute debe ser un arquivo de tipo: :values.',
    'min' => [
        'numeric' => 'O :attribute debe ser polo menos :min.',
        'file' => 'O :attribute debe ser polo menos :min kilobytes.',
        'string' => 'O :attribute deben ser polo menos :min caracteres.',
        'array' => 'O :attribute debe ter polo menos :min items.',
    ],
    'multiple_of' => 'O :attribute debe ser un múltiplo de :value.',
    'not_in' => 'O :attribute seleccionado non é válido.',
    'not_regex' => 'O formato de :attribute non é válido.',
    'numeric' => 'O :attribute debe ser un número.',
    'password' => 'O contrasinal é incorrecto.',
    'present' => 'O eido :attribute debe estar presente.',
    'prohibited' => 'O eido :attribute está prohibido.',
    'prohibited_if' => 'O eido :attribute está prohibido cando :other é :value.',
    'prohibited_unless' => 'O eido :attribute está prohibido a non ser que :other sexa :values.',
    'prohibits' => 'O eido :attribute prohibe que estea presente :other.',
    'regex' => 'O formato :attribute non é válido.',
    'required' => 'O eido :attribute é obrigatorio.',
    'required_array_keys' => 'O eido :attribute debe conter entradas para: :values.',
    'required_if' => 'O eido :attribute é requirido cando :other é :value.',
    'required_unless' => 'O eido :attribute é requirido a non ser que :other sexa :values.',
    'required_with' => 'O eido :attribute é requirido cando :values está presente.',
    'required_with_all' => 'O eido :attribute é requirido cando :values están presentes.',
    'required_without' => 'O eido :attribute é requirido cando :values non está presente.',
    'required_without_all' => 'O eido :attribute é requirido cando ningún dos :values están presentes.',
    'same' => 'O :attribute e o :other deben coincidir.',
    'size' => [
        'numeric' => 'O :attribute debe ser :size.',
        'file' => 'O :attribute debe ser :size kilobytes.',
        'string' => 'O :attribute debe ser :size caracteres.',
        'array' => 'O :attribute debe conter :size items.',
    ],
    'starts_with' => 'O :attribute debe comezar por un dos seguintes: :values.',
    'string' => 'O :attribute debe ser unha cadea - string.',
    'timezone' => 'O :attribute debe ser un fuso horario válido.',
    'unique' => 'O :attribute xa está collido.',
    'uploaded' => 'O :attribute fallou ao cargar.',
    'url' => 'O :attribute debe ser unha URL válida.',
    'uuid' => 'O :attribute debe ser un UUID válido.',

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
];
