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

    'accepted'        => 'Este campo deve ser aceite.',
    'active_url'      => 'A Url é inválida.',
    'after'           => 'Esta deve ser uma data após :date.',
    'after_or_equal'  => 'Esta deve ser uma data posterior ou igual a :date.',
    'alpha'           => 'Este campo pode conter apenas letras.',
    'alpha_dash'      => 'Este campo pode conter apenas letras, números, traços e o caractere de sublinhado.',
    'alpha_num'       => 'Este campo pode conter apenas letras e números',
    'array'           => 'Este campo deve ser uma matriz.',
    'before'          => 'Esta deve ser uma data anterior a :date.',
    'before_or_equal' => 'Esta deve ser uma data anterior ou igual a :date.',
    'between'         => [
        'numeric' => 'Este valor deve estar entre :min e :max.',
        'file'    => 'Este ficheiro deve estar entre :min e :max kilobytes.',
        'string'  => 'Esta cadeia de texto deve estar entre :min e :max caracteres.',
        'array'   => 'Este conteúdo deve estar entre :min e :max itens.',
    ],
    'boolean'        => 'Este campo deve ser verdadeiro ou falso.',
    'confirmed'      => 'A confirmação não corresponde.',
    'date'           => 'Esta não é uma data válida.',
    'date_equals'    => 'Esta deve ser uma data igual a :date.',
    'date_format'    => 'Isto não corresponde ao formato :format.',
    'different'      => 'Este valor deve ser diferente de :other.',
    'digits'         => 'Este valor deve ter :digits digitos.',
    'digits_between' => 'Este valor deve estar entre :min e :max digitos.',
    'dimensions'     => 'Esta imagem tem dimensões inválidas.',
    'distinct'       => 'Este campo tem um valor duplicado.',
    'email'          => 'Este deve ser um endereço de e-mail válido.',
    'ends_with'      => 'Isso deve terminar com um dos seguintes valores :values.',
    'exists'         => 'O valor selecionado é inválido.',
    'file'           => 'O conteúdo deve ser um ficheiro.',
    'filled'         => 'Este campo deve ter um valor.',
    'gt'             => [
        'numeric' => 'O valor deve ser maior que :value.',
        'file'    => 'O tamanho do ficheiro deve ser maior que :value kilobytes.',
        'string'  => 'A cadeia de texto deve ser maior que :value caracteres.',
        'array'   => 'O conteúdo deve ter mais de :value itens.',
    ],
    'gte' => [
        'numeric' => 'O valor deve ser maior ou igual :value.',
        'file'    => 'O tamanho do ficheiro deve ser maior ou igual :value kilobytes.',
        'string'  => 'A cadeia de texto deve ser maior ou igual a :value caracteres.',
        'array'   => 'O conteúdo deve ter :value itens ou mais.',
    ],
    'image'    => 'Deve ser uma imagem.',
    'in'       => 'O valor selecionado é inválido.',
    'in_array' => 'Este valor não existe em :other.',
    'integer'  => 'Este deve ser um número inteiro.',
    'ip'       => 'Este deve ser um endereço IP válido.',
    'ipv4'     => 'Este deve ser um endereço IPv4 válido.',
    'ipv6'     => 'Este deve ser um endereço IPv6 válido.',
    'json'     => 'Essa deve ser uma cadeia de texto JSON válida.',
    'lt'       => [
        'numeric' => 'O valor deve ser menor que :value.',
        'file'    => 'O tamanho do ficheiro deve ser menor que :value kilobytes.',
        'string'  => 'A cadeia de texto deve ser menor que :value caracteres.',
        'array'   => 'O conteúdo deve ter menos de :value itens.',
    ],
    'lte' => [
        'numeric' => 'O valor deve ser menor ou igual :value.',
        'file'    => 'O tamanho do ficheiro deve ser menor ou igual :value kilobytes.',
        'string'  => 'A cadeia de texto deve ser menor ou igual :value caracteres.',
        'array'   => 'O conteúdo não deve ter mais do que :value itens.',
    ],
    'max' => [
        'numeric' => 'O valor não pode ser maior que :max.',
        'file'    => 'O tamanho do ficheiro não pode ser maior que :max kilobytes.',
        'string'  => 'A cadeia de texto não pode ser maior que :max caracteres.',
        'array'   => 'O conteúdo pode não ter mais do que :max itens.',
    ],
    'mimes'     => 'Este deve ser um ficheiro do tipo: :values.',
    'mimetypes' => 'Este deve ser um ficheiro do tipo: :values.',
    'min'       => [
        'numeric' => 'O valor deve ser pelo menos :min.',
        'file'    => 'O tamanho do ficheiro deve ser pelo menos :min kilobytes.',
        'string'  => 'A cadeia de texto deve ser pelo menos :min characters.',
        'array'   => 'O valor deve ter pelo menos :min itens.',
    ],
    'not_in'               => 'O valor selecionado é inválido.',
    'not_regex'            => 'Este formato é inválido.',
    'numeric'              => 'Este deve ser um número.',
    'password'             => 'A palavra-passe está incorreta.',
    'present'              => 'Este campo deve estar presente.',
    'regex'                => 'Este formato é inválido.',
    'required'             => 'Este campo é obrigatório.',
    'required_if'          => 'Este campo é obrigatório quando :other é :value.',
    'required_unless'      => 'Este campo é obrigatório, a menos que :other esteja em :values.',
    'required_with'        => 'Este campo é obrigatório quando :values estiverem presentes.',
    'required_with_all'    => 'Este campo é obrigatório quando :values estão presentes.',
    'required_without'     => 'Este campo é obrigatório quando :values não estão presentes.',
    'required_without_all' => 'Este campo é obrigatório quando nenhum dos :values estiver presente.',
    'same'                 => 'O valor desse campo deve corresponder ao valor de :other.',
    'size'                 => [
        'numeric' => 'O valor deve ser: size.',
        'file'    => 'O tamanho do ficheiro deve ser :size kilobytes.',
        'string'  => 'A cadeia de texto deve ser :size  de tamanho.',
        'array'   => 'O conteúdo deve conter :items de tamanho.',
    ],
    'starts_with' => 'Este campo deve começar com um dos seguintes valores: :values.',
    'string'      => 'Este campo deve ser uma cadeia de texto.',
    'timezone'    => 'Esta deve ser uma zona válida.',
    'unique'      => 'Isso já foi utilizado.',
    'uploaded'    => 'Falhou ao carregar.',
    'url'         => 'Este formato é inválido.',
    'uuid'        => 'Este deve ser um UUID válido.',

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
