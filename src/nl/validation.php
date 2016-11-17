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

    'accepted'             => ':Attribute moet geaccepteerd zijn.',
    'active_url'           => ':Attribute is geen geldige URL.',
    'after'                => ':Attribute moet een datum na :date zijn.',
    'alpha'                => ':Attribute mag alleen letters bevatten.',
    'alpha_dash'           => ':Attribute mag alleen letters, nummers, onderstreep(_) en strepen(-) bevatten.',
    'alpha_num'            => ':Attribute mag alleen letters en nummers bevatten.',
    'array'                => ':Attribute moet geselecteerde elementen bevatten.',
    'before'               => ':Attribute moet een datum voor :date zijn.',
    'between'              => [
        'numeric' => ':Attribute moet tussen :min en :max zijn.',
        'file'    => ':Attribute moet tussen :min en :max kilobytes zijn.',
        'string'  => ':Attribute moet tussen :min en :max karakters zijn.',
        'array'   => ':Attribute moet tussen :min en :max items bevatten.',
    ],
    'boolean'              => ':Attribute moet true of false zijn.',
    'confirmed'            => ':Attribute bevestiging komt niet overeen.',
    'date'                 => ':Attribute moet een datum bevatten.',
    'date_format'          => ':Attribute moet een geldig datum formaat bevatten.',
    'different'            => ':Attribute en :other moeten verschillend zijn.',
    'digits'               => ':Attribute moet bestaan uit :digits cijfers.',
    'digits_between'       => ':Attribute moet bestaan uit minimaal :min en maximaal :max cijfers.',
    'dimensions'           => ':Attribute heeft geen geldige afmetingen voor afbeeldingen.',
    'distinct'             => ':Attribute heeft een dubbele waarde.',
    'email'                => ':Attribute is geen geldig e-mailadres.',
    'exists'               => ':Attribute bestaat niet.',
    'file'                 => ':Attribute moet een bestand zijn.',
    'filled'               => ':Attribute is verplicht.',
    'image'                => ':Attribute moet een afbeelding zijn.',
    'in'                   => ':Attribute is ongeldig.',
    'in_array'             => ':Attribute bestaat niet in :other.',
    'integer'              => ':Attribute moet een getal zijn.',
    'ip'                   => ':Attribute moet een geldig IP-adres zijn.',
    'json'                 => ':Attribute moet een geldige JSON-string zijn.',
    'max'                  => [
        'numeric' => ':Attribute mag niet hoger dan :max zijn.',
        'file'    => ':Attribute mag niet meer dan :max kilobytes zijn.',
        'string'  => ':Attribute mag niet uit meer dan :max karakters bestaan.',
        'array'   => ':Attribute mag niet meer dan :max items bevatten.',
    ],
    'mimes'                => ':Attribute moet een bestand zijn van het bestandstype :values.',
    'mimetypes'            => ':Attribute moet een bestand zijn van het bestandstype :values.',
    'min'                  => [
        'numeric' => ':Attribute moet minimaal :min zijn.',
        'file'    => ':Attribute moet minimaal :min kilobytes zijn.',
        'string'  => ':Attribute moet minimaal :min karakters zijn.',
        'array'   => ':Attribute moet minimaal :min items bevatten.',
    ],
    'not_in'               => 'Het formaat van :attribute is ongeldig.',
    'numeric'              => ':Attribute moet een nummer zijn.',
    'present'              => ':Attribute moet bestaan.',
    'regex'                => ':Attribute formaat is ongeldig.',
    'required'             => ':Attribute is verplicht.',
    'required_if'          => ':Attribute is verplicht indien :other gelijk is aan :value.',
    'required_unless'      => ':Attribute is verplicht tenzij :other gelijk is aan :values.',
    'required_with'        => ':Attribute is verplicht i.c.m. :values',
    'required_with_all'    => ':Attribute is verplicht i.c.m. :values',
    'required_without'     => ':Attribute is verplicht als :values niet ingevuld is.',
    'required_without_all' => ':Attribute is verplicht als :values niet ingevuld zijn.',
    'same'                 => ':Attribute en :other moeten overeenkomen.',
    'size'                 => [
        'numeric' => ':Attribute moet :size zijn.',
        'file'    => ':Attribute moet :size kilobyte zijn.',
        'string'  => ':Attribute moet :size karakters zijn.',
        'array'   => ':Attribute moet :size items bevatten.',
    ],
    'string'               => ':Attribute moet een tekenreeks zijn.',
    'timezone'             => ':Attribute moet een geldige tijdzone zijn.',
    'unique'               => ':Attribute is al in gebruik.',
    'uploaded'             => 'Het uploaden van :attribute is mislukt.',
    'url'                  => ':Attribute is geen geldige URL.',

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
