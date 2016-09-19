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

    'accepted'             => ':attribute må aksepteres.',
    'active_url'           => ':attribute er ikke en gyldig URL.',
    'after'                => ':attribute må være en dato etter :date.',
    'alpha'                => ':attribute må kun bestå av bokstaver.',
    'alpha_dash'           => ':attribute må kun bestå av bokstaver, tall og bindestreker.',
    'alpha_num'            => ':attribute må kun bestå av bokstaver og tall.',
    'array'                => ':attribute må være en matrise.',
    'before'               => ':attribute må være en dato før :date.',
    'between'              => [
        'numeric' => ':attribute skal være mellom :min - :max.',
        'file'    => ':attribute skal være mellom :min - :max kilobytes.',
        'string'  => ':attribute skal være mellom :min - :max tegn.',
        'array'   => ':attribute må ha mellom :min - :max elementer.',
    ],
    'boolean'              => 'The :attribute field must be true or false',
    'confirmed'            => ':attribute er ikke likt bekreftelsesfeltet.',
    'date'                 => ':attribute er ikke en gyldig dato.',
    'date_format'          => ':attribute matcher ikke formatet :format.',
    'different'            => ':attribute og :other skal være forskellige.',
    'digits'               => ':attribute skal ha :digits siffer.',
    'digits_between'       => ':attribute skal være mellom :min og :max siffer.',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => ':attribute format er ugyldig.',
    'exists'               => 'Det valgte :attribute er ugyldig.',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => ':attribute må fylles ut.',
    'image'                => ':attribute skal være et bilde.',
    'in'                   => 'Det valgte :attribute er ugyldig.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => ':attribute skal være et heltall.',
    'ip'                   => ':attribute skal være en gyldig IP adresse.',
    'json'                 => ':attribute må være på JSON-format.',
    'max'                  => [
        'numeric' => ':attribute skal være mindre enn :max.',
        'file'    => ':attribute skal være mindre enn :max kilobytes.',
        'string'  => ':attribute skal være kortere enn :max tegn.',
        'array'   => ':attribute skal ikke ha fler enn :max elementer.',
    ],
    'mimes'                => ':attribute skal være en fil av typen: :values.',
    'mimetypes'            => ':attribute skal være en fil av typen: :values.',
    'min'                  => [
        'numeric' => ':attribute skal være større enn :min.',
        'file'    => ':attribute skal være større enn :min kilobytes.',
        'string'  => ':attribute skal være lengre enn :min tegn.',
        'array'   => ':attribute må være minst :min elementer.',
    ],
    'not_in'               => 'Den valgte :attribute er ugyldig.',
    'numeric'              => ':attribute skal være et tall.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'Formatet på :attribute er ugyldig.',
    'required'             => ':attribute må fylles ut.',
    'required_if'          => ':attribute må fylles ut når :other er :value.',
    'required_unless'      => ':attribute er påkrevd med mindre :other finnes blant verdiene :values.',
    'required_with'        => ':attribute må fylles ut når :values er utfylt.',
    'required_with_all'    => ':attribute er påkrevd når :values er oppgitt.',
    'required_without'     => ':attribute må fylles ut når :values ikke er utfylt.',
    'required_without_all' => ':attribute er påkrevd når ingen av :values er oppgitt.',
    'same'                 => ':attribute og :other må være like.',
    'size'                 => [
        'numeric' => ':attribute må være :size.',
        'file'    => ':attribute må være :size kilobytes.',
        'string'  => ':attribute må være :size tegn lang.',
        'array'   => ':attribute må inneholde :size elementer.',
    ],
    'string'               => ':attribute må være en tekststreng.',
    'timezone'             => ':attribute må være en gyldig tidssone.',
    'unique'               => ':attribute er allerede i bruk.',
    'uploaded'             => 'The :attribute failed to upload.',
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
