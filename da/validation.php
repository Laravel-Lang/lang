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

    'accepted'             => ':Attribute skal accepteres.',
    'active_url'           => ':Attribute er ikke en gyldig URL.',
    'after'                => ':Attribute skal være en dato efter :date.',
    'alpha'                => ':Attribute må kun bestå af bogstaver.',
    'alpha_dash'           => ':Attribute må kun bestå af bogstaver, tal og bindestreger.',
    'alpha_num'            => ':Attribute må kun bestå af bogstaver og tal.',
    'array'                => ':Attribute skal være et array.',
    'before'               => ':Attribute skal være en dato før :date.',
    'between'              => [
        'numeric' => ':Attribute skal være mellem :min - :max.',
        'file'    => ':Attribute skal være mellem :min - :max kilobytes.',
        'string'  => ':Attribute skal være mellem :min - :max tegn.',
        'array'   => ':Attribute skal indeholde mellem :min - :max elementer.',
    ],
    'boolean'              => ':Attribute skal være sandt eller falsk',
    'confirmed'            => ':Attribute er ikke det samme som bekræftelsesfeltet.',
    'date'                 => ':Attribute er ikke en gyldig dato.',
    'date_format'          => ':Attribute matcher ikke formatet :format.',
    'different'            => ':Attribute og :other skal være forskellige.',
    'digits'               => ':Attribute skal have :digits cifre.',
    'digits_between'       => ':Attribute skal have mellem :min og :max cifre.',
    'distinct'             => ':Attribute har en duplikatværdi.',
    'email'                => ':Attribute skal være en gyldig e-mailadresse.',
    'exists'               => 'Det valgte :attribute er ugyldig.',
    'filled'               => ':Attribute skal udfyldes.',
    'image'                => ':Attribute skal være et billede.',
    'in'                   => 'Det valgte :attribute er ugyldig.',
    'in_array'             => ':Attribute eksisterer ikke i :other.',
    'integer'              => ':Attribute skal være et heltal.',
    'ip'                   => ':Attribute skal være en gyldig IP adresse.',
    'json'                 => ':Attribute skal være en gyldig JSON streng.',
    'max'                  => [
        'numeric' => ':Attribute skal være højest :max.',
        'file'    => ':Attribute skal være højest :max kilobytes.',
        'string'  => ':Attribute skal være højest :max tegn.',
        'array'   => ':Attribute må ikke indeholde mere end :max elementer.',
    ],
    'mimes'                => ':Attribute skal være en fil af typen: :values.',
    'min'                  => [
        'numeric' => ':Attribute skal være mindst :min.',
        'file'    => ':Attribute skal være mindst :min kilobytes.',
        'string'  => ':Attribute skal være mindst :min tegn.',
        'array'   => ':Attribute skal indeholde mindst :min elementer.',
    ],
    'not_in'               => 'Den valgte :attribute er ugyldig.',
    'numeric'              => ':Attribute skal være et tal.',
    'present'              => ':Attribute skal være tilstede.',
    'regex'                => ':Attribute formatet er ugyldigt.',
    'required'             => ':Attribute skal udfyldes.',
    'required_if'          => ':Attribute skal udfyldes når :other er :value.',
    'required_unless'      => ':Attribute er påkrævet med mindre :other findes i :values.',
    'required_with'        => ':Attribute skal udfyldes når :values er udfyldt.',
    'required_with_all'    => ':Attribute skal udfyldes når :values er udfyldt.',
    'required_without'     => ':Attribute skal udfyldes når :values ikke er udfyldt.',
    'required_without_all' => ':Attribute skal udfyldes når ingen af :values er udfyldt.',
    'same'                 => ':Attribute og :other skal være ens.',
    'size'                 => [
        'numeric' => ':Attribute skal være :size.',
        'file'    => ':Attribute skal være :size kilobytes.',
        'string'  => ':Attribute skal være :size tegn lang.',
        'array'   => ':Attribute skal indeholde :size elementer.',
    ],
    'string'               => ':Attribute skal være en streng.',
    'timezone'             => ':Attribute skal være en gyldig tidszone.',
    'unique'               => ':Attribute er allerede taget.',
    'url'                  => ':Attribute formatet er ugyldigt.',

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
