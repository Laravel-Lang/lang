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

    'accepted'             => ':Attribute pitää hyväksyä.',
    'active_url'           => ':Attribute pitää olla validi URL-osoite.',
    'after'                => ':Attribute pitää olla päiväys :date päiväyksen jälkeen.',
    'alpha'                => ':Attribute voi vain sisältää kirjaimia.',
    'alpha_dash'           => ':Attribute voi vain sisältää kirjaimia, numeroita ja viivoja.',
    'alpha_num'            => ':Attribute voi vain sisältää kirjaimia ja numeroita.',
    'array'                => 'The :attribute must be an array.',
    'before'               => ':Attribute pitää olla päiväys ennen :date.',
    'between'              => [
        'numeric' => ':Attribute numeron pitää olla välillä :min - :max.',
        'file'    => ':Attribute tiedoston pitää olla välillä :min - :max kilobittiä.',
        'string'  => ':Attribute elementin pitää olla välillä :min - :max kirjainta.',
        'array'   => 'The :attribute must have between :min - :max items.',
    ],
    'boolean'              => 'The :attribute field must be true or false',
    'confirmed'            => ':Attribute vahvistus ei täsmää.',
    'date'                 => ':Attribute ei ole kelvollinen päivämäärä.',
    'date_format'          => ':Attribute ei vastaa muotoa :format.',
    'different'            => ':Attribute ja :other tulee olla eri arvoisia.',
    'digits'               => ':Attribute on oltava :digits numeroin.',
    'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => ':Attribute muoto on virheellinen.',
    'exists'               => 'valittu :attribute on virheellinen.',
    'filled'               => ':Attribute kenttä on pakollinen.',
    'image'                => ':Attribute pitää olla kuva.',
    'in'                   => 'valittu :attribute on virheellinen.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => ':Attribute pitää olla numero.',
    'ip'                   => ':Attribute pitää olla validi IP-osoite.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => ':Attribute pitää olla pienempi kuin :max.',
        'file'    => ':Attribute pitää olla pienempi :max kilobittiä.',
        'string'  => ':Attribute pitää olla pienempi :max kirjainta.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => ':Attribute pitää olla tiedostotyyppi: :values.',
    'min'                  => [
        'numeric' => ':Attribute pitää olla vähintään :min.',
        'file'    => ':Attribute pitää olla vähintään :min kilobittiä.',
        'string'  => ':Attribute pitää olla vähintään :min kirjainta.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'valittu :attribute on virheellinen.',
    'numeric'              => ':Attribute pitää olla numero.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => ':Attribute kenttä on pakollinen.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => ':Attribute ja :other on oltava samat.',
    'size'                 => [
        'numeric' => ':Attribute pitää olla kokoa: :size.',
        'file'    => ':Attribute pitää olla kokoa: :size kilobittiä.',
        'string'  => ':Attribute pitää olla kokoa: :size kirjainta.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => ':Attribute on jo valittu.',
    'url'                  => ':Attribute URL-osoite on virheellinen.',

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
