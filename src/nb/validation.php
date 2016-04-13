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

    'accepted'             => ':Attribute må aksepteres.',
    'active_url'           => ':Attribute er ikke en gyldig URL.',
    'after'                => ':Attribute må være en dato etter :date.',
    'alpha'                => ':Attribute må kun bestå av bokstaver.',
    'alpha_dash'           => ':Attribute må kun bestå av bokstaver, tall og bindestreker.',
    'alpha_num'            => ':Attribute må kun bestå av bokstaver og tall.',
    'array'                => ':Attribute må være en matrise.',
    'before'               => ':Attribute må være en dato før :date.',
    'between'              => [
        'numeric' => ':Attribute skal være mellom :min - :max.',
        'file'    => ':Attribute skal være mellom :min - :max kilobytes.',
        'string'  => ':Attribute skal være mellom :min - :max tegn.',
        'array'   => ':Attribute må ha mellom :min - :max elementer.',
    ],
    'boolean'              => 'The :attribute field must be true or false',
    'confirmed'            => ':Attribute er ikke likt bekreftelsesfeltet.',
    'date'                 => ':Attribute er ikke en gyldig dato.',
    'date_format'          => ':Attribute matcher ikke formatet :format.',
    'different'            => ':Attribute og :other skal være forskellige.',
    'digits'               => ':Attribute skal ha :digits siffer.',
    'digits_between'       => ':Attribute skal være mellom :min og :max siffer.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => ':Attribute format er ugyldig.',
    'exists'               => 'Det valgte :attribute er ugyldig.',
    'filled'               => ':Attribute må fylles ut.',
    'image'                => ':Attribute skal være et bilde.',
    'in'                   => 'Det valgte :attribute er ugyldig.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => ':Attribute skal være et heltall.',
    'ip'                   => ':Attribute skal være en gyldig IP adresse.',
    'json'                 => ':Attribute må være på JSON-format.',
    'max'                  => [
        'numeric' => ':Attribute skal være mindre enn :max.',
        'file'    => ':Attribute skal være mindre enn :max kilobytes.',
        'string'  => ':Attribute skal være kortere enn :max tegn.',
        'array'   => ':Attribute skal ikke ha fler enn :max elementer.',
    ],
    'mimes'                => ':Attribute skal være en fil av typen: :values.',
    'min'                  => [
        'numeric' => ':Attribute skal være større enn :min.',
        'file'    => ':Attribute skal være større enn :min kilobytes.',
        'string'  => ':Attribute skal være lengre enn :min tegn.',
        'array'   => ':Attribute må være minst :min elementer.',
    ],
    'not_in'               => 'Den valgte :attribute er ugyldig.',
    'numeric'              => ':Attribute skal være et tall.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'Formatet på :attribute er ugyldig.',
    'required'             => ':Attribute må fylles ut.',
    'required_if'          => ':Attribute må fylles ut når :other er :value.',
    'required_unless'      => ':Attribute er påkrevd med mindre :other finnes blant verdiene :values.',
    'required_with'        => ':Attribute må fylles ut når :values er utfylt.',
    'required_with_all'    => ':Attribute er påkrevd når :values er oppgitt.',
    'required_without'     => ':Attribute må fylles ut når :values ikke er utfylt.',
    'required_without_all' => ':Attribute er påkrevd når ingen av :values er oppgitt.',
    'same'                 => ':Attribute og :other må være like.',
    'size'                 => [
        'numeric' => ':Attribute må være :size.',
        'file'    => ':Attribute må være :size kilobytes.',
        'string'  => ':Attribute må være :size tegn lang.',
        'array'   => ':Attribute må inneholde :size elementer.',
    ],
    'string'               => ':Attribute må være en tekststreng.',
    'timezone'             => ':Attribute må være en gyldig tidssone.',
    'unique'               => ':Attribute er allerede i bruk.',
    'url'                  => 'Formatet på :attribute er ugyldig.',

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
