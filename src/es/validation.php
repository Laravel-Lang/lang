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

    'accepted'             => ':Attribute debe ser aceptado.',
    'active_url'           => ':Attribute no es una URL válida.',
    'after'                => ':Attribute debe ser una fecha posterior a :date.',
    'alpha'                => ':Attribute solo debe contener letras.',
    'alpha_dash'           => ':Attribute solo debe contener letras, números y guiones.',
    'alpha_num'            => ':Attribute solo debe contener letras y números.',
    'array'                => ':Attribute debe ser un conjunto.',
    'before'               => ':Attribute debe ser una fecha anterior a :date.',
    'between'              => [
        'numeric' => ':Attribute tiene que estar entre :min - :max.',
        'file'    => ':Attribute debe pesar entre :min - :max kilobytes.',
        'string'  => ':Attribute tiene que tener entre :min - :max caracteres.',
        'array'   => ':Attribute tiene que tener entre :min - :max ítems.',
    ],
    'boolean'              => 'El campo :attribute debe tener un valor verdadero o falso.',
    'confirmed'            => 'La confirmación de :attribute no coincide.',
    'date'                 => ':Attribute no es una fecha válida.',
    'date_format'          => ':Attribute no corresponde al formato :format.',
    'different'            => ':Attribute y :other deben ser diferentes.',
    'digits'               => ':Attribute debe tener :digits dígitos.',
    'digits_between'       => ':Attribute debe tener entre :min y :max dígitos.',
    'distinct'             => 'El campo :attribute contiene un valor duplicado.',
    'email'                => ':Attribute no es un correo válido',
    'exists'               => ':Attribute es inválido.',
    'filled'               => 'El campo :attribute es obligatorio.',
    'image'                => ':Attribute debe ser una imagen.',
    'in'                   => ':Attribute es inválido.',
    'in_array'             => 'El campo :attribute no existe en :other.',
    'integer'              => ':Attribute debe ser un número entero.',
    'ip'                   => ':Attribute debe ser una dirección IP válida.',
    'json'                 => 'El campo :attribute debe tener una cadena JSON válida.',
    'max'                  => [
        'numeric' => ':Attribute no debe ser mayor a :max.',
        'file'    => ':Attribute no debe ser mayor que :max kilobytes.',
        'string'  => ':Attribute no debe ser mayor que :max caracteres.',
        'array'   => ':Attribute no debe tener más de :max elementos.',
    ],
    'mimes'                => ':Attribute debe ser un archivo con formato: :values.',
    'min'                  => [
        'numeric' => 'El tamaño de :attribute debe ser de al menos :min.',
        'file'    => 'El tamaño de :attribute debe ser de al menos :min kilobytes.',
        'string'  => ':Attribute debe contener al menos :min caracteres.',
        'array'   => ':Attribute debe tener al menos :min elementos.',
    ],
    'not_in'               => ':Attribute es inválido.',
    'numeric'              => ':Attribute debe ser numérico.',
    'present'              => 'El campo :attribute debe estar presente.',
    'regex'                => 'El formato de :attribute es inválido.',
    'required'             => 'El campo :attribute es obligatorio.',
    'required_if'          => 'El campo :attribute es obligatorio cuando :other es :value.',
    'required_unless'      => 'El campo :attribute es obligatorio a menos que :other esté en :values.',
    'required_with'        => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all'    => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_without'     => 'El campo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de :values estén presentes.',
    'same'                 => ':Attribute y :other deben coincidir.',
    'size'                 => [
        'numeric' => 'El tamaño de :attribute debe ser :size.',
        'file'    => 'El tamaño de :attribute debe ser :size kilobytes.',
        'string'  => ':Attribute debe contener :size caracteres.',
        'array'   => ':Attribute debe contener :size elementos.',
    ],
    'string'               => 'El campo :attribute debe ser una cadena de caracteres.',
    'timezone'             => 'El :attribute debe ser una zona válida.',
    'unique'               => ':Attribute ya ha sido registrado.',
    'url'                  => 'El formato :attribute es inválido.',

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
        'name'                  => 'nombre',
        'username'              => 'usuario',
        'email'                 => 'correo electrónico',
        'first_name'            => 'nombre',
        'last_name'             => 'apellidos',
        'password'              => 'contraseña',
        'password_confirmation' => 'confirmación de la contraseña',
        'city'                  => 'ciudad',
        'country'               => 'país',
        'address'               => 'dirección',
        'phone'                 => 'teléfono',
        'mobile'                => 'móvil',
        'age'                   => 'edad',
        'sex'                   => 'sexo',
        'gender'                => 'género',
        'year'                  => 'año',
        'month'                 => 'mes',
        'day'                   => 'día',
        'hour'                  => 'hora',
        'minute'                => 'minuto',
        'second'                => 'segundo',
        'title'                 => 'título',
        'body'                  => 'contenido',
        'description'           => 'descripción',
        'excerpt'               => 'extracto',
        'date'                  => 'fecha',
        'time'                  => 'hora',
        'subject'               => 'asunto',
        'message'               => 'mensaje',
    ],

];
