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

    'accepted'             => 'Må aksepteres.',
    'active_url'           => 'Er ikke en gyldig URL.',
    'after'                => 'Må være en dato etter :date.',
    'after_or_equal'       => 'Må være en dato etter eller lik :date.',
    'alpha'                => 'Må kun bestå av bokstaver.',
    'alpha_dash'           => 'Må kun bestå av bokstaver, tall og bindestreker.',
    'alpha_num'            => 'Må kun bestå av bokstaver og tall.',
    'array'                => 'Må være en matrise.',
    'attached'             => 'Er allerede vedlagt.',
    'before'               => 'Må være en dato før :date.',
    'before_or_equal'      => 'Må være en dato før eller lik :date.',
    'between'              => [
        'numeric' => 'Må være mellom :min - :max.',
        'file'    => 'Må være mellom :min - :max kilobytes.',
        'string'  => 'Må være mellom :min - :max tegn.',
        'array'   => 'Må ha mellom :min - :max elementer.',
    ],
    'boolean'              => 'Må være sann eller usann',
    'confirmed'            => 'Er ikke likt bekreftelsesfeltet.',
    'date'                 => 'Er ikke en gyldig dato.',
    'date_equals'          => 'Må være en dato lik :date.',
    'date_format'          => 'Samsvarer ikke med formatet :format.',
    'different'            => 'Denne og :other må være forskellige.',
    'digits'               => 'Må ha :digits siffer.',
    'digits_between'       => 'Må være mellom :min og :max siffer.',
    'dimensions'           => 'Har ugyldige bildedimensjoner.',
    'distinct'             => 'Har en duplisert verdi.',
    'email'                => 'Må være en gyldig e-postadresse.',
    'ends_with'            => 'Må ende med en av følgende: :values.',
    'exists'               => 'Den valgte veriden er ugyldig.',
    'file'                 => 'Må være en fil.',
    'filled'               => 'Må fylles ut.',
    'gt'                   => [
        'numeric' => 'Må være større enn :value.',
        'file'    => 'Må være større enn :value kilobytes.',
        'string'  => 'Må være større enn :value tegn.',
        'array'   => 'Må ha flere enn :value elementer.',
    ],
    'gte'                  => [
        'numeric' => 'Må være større enn eller lik :value.',
        'file'    => 'Må være større enn eller lik :value kilobytes.',
        'string'  => 'Må være større enn eller lik :value tegn.',
        'array'   => 'Må ha :value elementer eller flere.',
    ],
    'image'                => 'Må være et bilde.',
    'in'                   => 'Den valgte veriden er ugyldig.',
    'in_array'             => 'Den valgte veriden eksisterer ikke i :other.',
    'integer'              => 'Må være et heltall.',
    'ip'                   => 'Må være en gyldig IP-adresse.',
    'ipv4'                 => 'Må være en gyldig IPv4-adresse.',
    'ipv6'                 => 'Må være en gyldig IPv6-addresse.',
    'json'                 => 'Må være på JSON-format.',
    'lt'                   => [
        'numeric' => 'Må være mindre enn :value.',
        'file'    => 'Må være mindre enn :value kilobytes.',
        'string'  => 'Må være kortere enn :value tegn.',
        'array'   => 'Må ha færre enn :value elementer.',
    ],
    'lte'                  => [
        'numeric' => 'Må være mindre enn eller lik :value.',
        'file'    => 'Må være mindre enn eller lik :value kilobytes.',
        'string'  => 'Må være kortere enn eller lik :value tegn.',
        'array'   => 'Må ikke ha flere enn :value elementer.',
    ],
    'max'                  => [
        'numeric' => 'Må ikke være større enn :max.',
        'file'    => 'Må ikke være større enn :max kilobytes.',
        'string'  => 'Må ikke være større enn :max tegn.',
        'array'   => 'Må ikke ha flere enn :max elementer.',
    ],
    'mimes'                => 'Må være en fil av typen: :values.',
    'mimetypes'            => 'Må være en fil av typen: :values.',
    'min'                  => [
        'numeric' => 'Må være minst :min.',
        'file'    => 'Må være minst :min kilobytes.',
        'string'  => 'Må være minst :min tegn.',
        'array'   => 'Må ha minst :min elementer.',
    ],
    'multiple_of'          => 'Må være flere av :value',
    'not_in'               => 'Den valgte veriden er ugyldig.',
    'not_regex'            => 'Formatet på veriden er ugyldig.',
    'numeric'              => 'Må være et tall.',
    'password'             => 'Passordet er feil.',
    'present'              => 'Må eksistere.',
    'regex'                => 'Formatet på veriden er ugyldig.',
    'relatable'            => 'Kan ikke være knyttet til denne ressursen.',
    'required'             => 'Må fylles ut.',
    'required_if'          => 'Må fylles ut når :other er :value.',
    'required_unless'      => 'Er påkrevd med mindre :other finnes blant verdiene :values.',
    'required_with'        => 'Må fylles ut når :values er utfylt.',
    'required_with_all'    => 'Er påkrevd når :values er oppgitt.',
    'required_without'     => 'Må fylles ut når :values ikke er utfylt.',
    'required_without_all' => 'Er påkrevd når ingen av :values er oppgitt.',
    'prohibited'           => 'Felt er forbudt.',
    'prohibited_if'        => 'Felt er forbudt når :other er :value.',
    'prohibited_unless'    => 'Felt er forbudt med mindre :other er i :values.',
    'same'                 => 'Denne og :other må være like.',
    'size'                 => [
        'numeric' => 'Må være :size.',
        'file'    => 'Må være :size kilobytes.',
        'string'  => 'Må være :size tegn lang.',
        'array'   => 'Må inneholde :size elementer.',
    ],
    'starts_with'          => 'Må starte med en av følgende: :values.',
    'string'               => 'Må være en tekststreng.',
    'timezone'             => 'Må være en gyldig tidssone.',
    'unique'               => 'Er allerede i bruk.',
    'uploaded'             => 'Kunne ikke lastes opp.',
    'url'                  => 'Formatet på er ugyldig.',
    'uuid'                 => 'Må være en gyldig UUID.',

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
