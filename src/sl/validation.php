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

    'accepted'             => ':Attribute mora biti sprejet.',
    'active_url'           => ':Attribute ni pravilen.',
    'after'                => ':Attribute mora biti za datumom :date.',
    'alpha'                => ':Attribute lahko vsebuje samo črke.',
    'alpha_dash'           => ':Attribute lahko vsebuje samo črke, številke in črtice.',
    'alpha_num'            => ':Attribute lahko vsebuje samo črke in številke.',
    'array'                => ':Attribute mora biti polje.',
    'before'               => ':Attribute mora biti pred datumom :date.',
    'between'              => [
        'numeric' => ':Attribute mora biti med :min in :max.',
        'file'    => ':Attribute mora biti med :min in :max kilobajti.',
        'string'  => ':Attribute mora biti med :min in :max znaki.',
        'array'   => ':Attribute mora imeti med :min in :max elementov.',
    ],
    'boolean'              => ':Attribute polje mora biti 1 ali 0',
    'confirmed'            => ':Attribute potrditev se ne ujema.',
    'date'                 => ':Attribute ni veljaven datum.',
    'date_format'          => ':Attribute se ne ujema z obliko :format.',
    'different'            => ':Attribute in :other mora biti drugačen.',
    'digits'               => ':Attribute mora imeti :digits cifer.',
    'digits_between'       => ':Attribute mora biti med :min in :max ciframi.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => ':Attribute mora biti veljaven e-poštni naslov.',
    'exists'               => 'izbran :attribute je neveljaven.',
    'filled'               => 'The :attribute field is required.',
    'image'                => ':Attribute mora biti slika.',
    'in'                   => 'izbran :attribute je neveljaven.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => ':Attribute mora biti število.',
    'ip'                   => ':Attribute mora biti veljaven IP naslov.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => ':Attribute ne sme biti večje od :max.',
        'file'    => ':Attribute ne sme biti večje :max kilobajtov.',
        'string'  => ':Attribute ne sme biti večje :max znakov.',
        'array'   => ':Attribute ne smejo imeti več kot :max elementov.',
    ],
    'mimes'                => ':Attribute mora biti datoteka tipa: :values.',
    'min'                  => [
        'numeric' => ':Attribute mora biti vsaj dolžine :min.',
        'file'    => ':Attribute mora imeti vsaj :min kilobajtov.',
        'string'  => ':Attribute mora imeti vsaj :min znakov.',
        'array'   => ':Attribute mora imeti vsaj :min elementov.',
    ],
    'not_in'               => 'izbran :attribute je neveljaven.',
    'numeric'              => ':Attribute mora biti število.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'Format polja :attribute je neveljaven.',
    'required'             => 'Polje :attribute je zahtevano.',
    'required_if'          => 'Polje :attribute je zahtevano, ko :other je :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'Polje :attribute je zahtevano, ko je :values prisoten.',
    'required_with_all'    => 'Polje :attribute je zahtevano, ko je :values prisoten.',
    'required_without'     => 'Polje :attribute je zahtevano, ko :values ni prisoten.',
    'required_without_all' => 'Polje :attribute je zahtevano, ko nobenih od :values niso prisotni.',
    'same'                 => 'Polje :attribute in :other se morata ujemati.',
    'size'                 => [
        'numeric' => ':Attribute mora biti :size.',
        'file'    => ':Attribute mora biti :size kilobajtov.',
        'string'  => ':Attribute mora biti :size znakov.',
        'array'   => ':Attribute mora vsebovati :size elementov.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => ':Attribute je že zaseden.',
    'url'                  => ':Attribute format je neveljaven.',

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
