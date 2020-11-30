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

    'accepted'             => 'Dit veld moet geaccepteerd zijn.',
    'active_url'           => 'Dit is geen geldige URL.',
    'after'                => 'Dit moet een datum na :date zijn.',
    'after_or_equal'       => 'Dit moet een datum na of gelijk aan :date zijn.',
    'alpha'                => 'Dit veld mag alleen letters bevatten.',
    'alpha_dash'           => 'Dit veld mag alleen letters, nummers, underscores (_) en streepjes (-) bevatten.',
    'alpha_num'            => 'Dit veld mag alleen letters en nummers bevatten.',
    'array'                => 'Dit veld moet geselecteerde elementen bevatten.',
    'before'               => 'Dit moet een datum voor :date zijn.',
    'before_or_equal'      => 'Dit moet een datum voor of gelijk aan :date zijn.',
    'between'              => [
        'numeric' => 'Dit moet tussen :min en :max zijn.',
        'file'    => 'Dit moet tussen :min en :max kilobytes zijn.',
        'string'  => 'Dit moet tussen :min en :max karakters zijn.',
        'array'   => 'Dit moet tussen :min en :max items bevatten.',
    ],
    'boolean'              => 'Dit veld moet ja of nee zijn.',
    'confirmed'            => 'De bevestiging komt niet overeen.',
    'date'                 => 'Dit is geen geldige datum',
    'date_equals'          => 'Dit moet een datum gelijk aan :date zijn.',
    'date_format'          => 'Dit voldoet niet aan het formaat :format.',
    'different'            => 'Dit en :other moeten verschillend zijn.',
    'digits'               => 'Dit moet bestaan uit :digits cijfers.',
    'digits_between'       => 'Dit moet bestaan uit minimaal :min en maximaal :max cijfers.',
    'dimensions'           => 'Deze afbeelding heeft geen geldige afmetingen.',
    'distinct'             => 'Dit veld heeft een dubbele waarde.',
    'email'                => 'Dit is geen geldig e-mailadres.',
    'ends_with'            => 'Dit moet met één van de volgende waarden eindigen: :values.',
    'exists'               => 'De geselecteerde waarde bestaat niet.',
    'file'                 => 'Dit moet een bestand zijn.',
    'filled'               => 'Dit veld is verplicht.',
    'gt'                   => [
        'numeric' => 'De waarde moet groter zijn dan :value.',
        'file'    => 'Het bestand moet groter zijn dan :value kilobytes.',
        'string'  => 'De waarde moet meer dan :value tekens bevatten.',
        'array'   => 'De inhoud moet meer dan :value waardes bevatten.',
    ],
    'gte'                  => [
        'numeric' => 'De waarde moet groter of gelijk zijn aan :value.',
        'file'    => 'Het bestand moet groter of gelijk zijn aan :value kilobytes.',
        'string'  => 'De waarde moet minimaal :value tekens bevatten.',
        'array'   => 'De inhoud moet :value waardes of meer bevatten.',
    ],
    'image'                => 'Dit moet een afbeelding zijn.',
    'in'                   => 'De geselecteerde waarde is ongeldig.',
    'in_array'             => 'Deze waarde bestaat niet in :other.',
    'integer'              => 'Dit moet een getal zijn.',
    'ip'                   => 'Dit moet een geldig IP-adres zijn.',
    'ipv4'                 => 'Dit moet een geldig IPv4-adres zijn.',
    'ipv6'                 => 'Dit moet een geldig IPv6-adres zijn.',
    'json'                 => 'Dit moet een geldige JSON-string zijn.',
    'lt'                   => [
        'numeric' => 'De waarde moet kleiner zijn dan :value.',
        'file'    => 'Het bestand moet kleiner zijn dan :value kilobytes.',
        'string'  => 'De waarde moet minder dan :value tekens bevatten.',
        'array'   => 'De inhoud moet minder dan :value waardes bevatten.',
    ],
    'lte'                  => [
        'numeric' => 'De waarde moet kleiner of gelijk zijn aan :value.',
        'file'    => 'Het bestand moet kleiner of gelijk zijn aan :value kilobytes.',
        'string'  => 'De waarde moet maximaal :value tekens bevatten.',
        'array'   => 'De inhoud moet :value waardes of minder bevatten.',
    ],
    'max'                  => [
        'numeric' => 'De waarde mag niet hoger dan :max zijn.',
        'file'    => 'Het bestand mag niet meer dan :max kilobytes zijn.',
        'string'  => 'De waarde mag niet uit meer dan :max tekens bestaan.',
        'array'   => 'De inhoud mag niet meer dan :max items bevatten.',
    ],
    'mimes'                => 'Dit moet een bestand zijn van het bestandstype :values.',
    'mimetypes'            => 'Dit moet een bestand zijn van het bestandstype :values.',
    'min'                  => [
        'numeric' => 'De waarde moet minimaal :min zijn.',
        'file'    => 'Het bestand moet minimaal :min kilobytes zijn.',
        'string'  => 'De waarde moet minimaal :min tekens zijn.',
        'array'   => 'De inhoud moet minimaal :min items bevatten.',
    ],
    'multiple_of'          => 'De waarde moet een veelvoud van :value zijn.',
    'not_in'               => 'De geselecteerde waarde is ongeldig.',
    'not_regex'            => 'Dit formaat is ongeldig.',
    'numeric'              => 'Dit moet een nummer zijn',
    'password'             => 'Het wachtwoord is onjuist.',
    'present'              => 'Dit veld moet bestaan.',
    'regex'                => 'Dit formaat is ongeldig.',
    'required'             => 'Dit veld is verplicht.',
    'required_if'          => 'Dit veld is verplicht indien :other gelijk is aan :value.',
    'required_unless'      => 'Dit veld is verplicht tenzij :other gelijk is aan :values.',
    'required_with'        => 'Dit veld is verplicht i.c.m. :values',
    'required_with_all'    => 'Dit veld is verplicht i.c.m. :values',
    'required_without'     => 'Dit veld is verplicht als :values niet ingevuld is.',
    'required_without_all' => 'Dit veld is verplicht als :values niet ingevuld zijn.',
    'same'                 => 'De waarde van dit veld en :other moeten overeenkomen.',
    'size'                 => [
        'numeric' => ':De waarde moet :size zijn.',
        'file'    => ':Het bestand moet :size kilobyte zijn.',
        'string'  => ':De waarde moet :size tekens zijn.',
        'array'   => ':de inhoud moet :size items bevatten.',
    ],
    'starts_with'          => 'Dit moet starten met een van de volgende: :values.',
    'string'               => 'Dit moet een tekst zijn.',
    'timezone'             => 'Dit moet een geldige tijdzone zijn.',
    'unique'               => 'Deze is al in gebruik',
    'uploaded'             => 'Het uploaden hiervan is mislukt.',
    'url'                  => 'Dit moet een geldige URL zijn.',
    'uuid'                 => 'Dit moet een geldige UUID zijn.',

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
