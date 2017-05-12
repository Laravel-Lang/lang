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

    'accepted'             => 'Reiturinn :attribute verður að vera samþykktur.',
    'active_url'           => 'Reiturinn :attribute er ekki leyfileg vefslóð.',
    'after'                => 'Reiturinn :attribute verður að vera dagsetning eftir :date.',
    'after_or_equal'       => 'The :attribute must be a date after or equal to :date.',
    'alpha'                => 'Reiturinn :attribute má aðeins innihalda bókstafi.',
    'alpha_dash'           => 'Reiturinn :attribute má aðeins innihalda bókstafi, tölur og undirstikanir.',
    'alpha_num'            => 'Reiturinn :attribute má aðeins innihalda bókstafi og tölur.',
    'array'                => 'Reiturinn :attribute verður að vera fylki.',
    'before'               => 'Reiturinn :attribute verður að vera dagsetning eftir :date.',
    'before_or_equal'      => 'The :attribute must be a date before or equal to :date.',
    'between'              => [
        'numeric' => 'Reiturinn :attribute verður að vera á milli :min - :max.',
        'file'    => 'Reiturinn :attribute verður að vera á milli :min - :max kílóbæta.',
        'string'  => 'Reiturinn :attribute verður að vera á milli :min - :max stafa.',
        'array'   => 'Reiturinn :attribute verður að vera á milli :min - :max staka.',
    ],
    'boolean'              => 'Reiturinn :attribute verður að vera réttur eða rangur.',
    'confirmed'            => 'Staðfesting á reitnum :attribute passar ekki.',
    'date'                 => 'Reiturinn :attribute er ekki rétt dagsetning.',
    'date_format'          => 'Reiturinn :attribute passar ekki við :format.',
    'different'            => 'Reiturinn :attribute og :other verða að vera ólíkir.',
    'digits'               => 'Reiturinn :attribute verður að vera :digits tölustafir.',
    'digits_between'       => 'Reiturinn :attribute verður að vera á milli :min og :max tölustafa.',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => 'Reiturinn :attribute snið netfangsins er ekki rétt.',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => 'Reiturinn :attribute verður að innihalda eitthvað.',
    'exists'               => 'Reiturinn :attribute er nú þegar til.',
    'image'                => 'Reiturinn :attribute verður að vera mynd.',
    'in'                   => 'Reiturinn :attribute er ekki réttur.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => 'Reiturinn :attribute verður að vera tala.',
    'ip'                   => 'Reiturinn :attribute verður að vera lögleg IP-tala.',
    'ipv4'                 => 'The :attribute must be a valid IPv4 address.',
    'ipv6'                 => 'The :attribute must be a valid IPv6 address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'Reiturinn :attribute verður að innihalda færri stafi en :max.',
        'file'    => 'Reiturinn :attribute verður að vera minni en :max kílóbæt.',
        'string'  => 'Reiturinn :attribute verður að innihalda færri en :max stafi.',
        'array'   => 'Reiturinn :attribute verður að innihalda færri en :max stök.',
    ],
    'mimes'                => 'Reiturinn :attribute verður að vera skrá af gerðinni: :values.',
    'mimetypes'            => 'Reiturinn :attribute verður að vera skrá af gerðinni: :values.',
    'min'                  => [
        'numeric' => 'Reiturinn :attribute verður að vera að lágmarki :min tölustafir.',
        'file'    => 'Reiturinn :attribute verður að vera að lágmarki :min kílóbæt.',
        'string'  => 'Reiturinn :attribute verður að vera að lágmarki :min stafir.',
        'array'   => 'Reiturinn :attribute verður að vera að lágmarki :min stök.',
    ],
    'not_in'               => 'Reiturinn :attribute er ógildur.',
    'numeric'              => 'Reiturinn :attribute verður að vera tala.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'Reiturinn :attribute er ekki á réttu formi.',
    'required'             => 'Reiturinn :attribute er nauðsynlegur.',
    'required_if'          => 'Reiturinn :attribute er nauðsynlegur þegar :other er :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'Reiturinn :attribute og :other verða að stemma.',
    'size'                 => [
        'numeric' => 'Reiturinn :attribute verður að vera :size.',
        'file'    => 'Reiturinn :attribute verður að vera :size kílóbæt.',
        'string'  => 'Reiturinn :attribute verður að vera :size stafir.',
        'array'   => 'Reiturinn :attribute verður að innihalda :size hluti.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'Reiturinn :attribute verður að vera rétt tímabelti.',
    'unique'               => 'Reiturinn :attribute er því miður ekki leyfilegur. Það er annar eins.',
    'uploaded'             => 'The :attribute failed to upload.',
    'url'                  => 'Reiturinn :attribute verður að vera netslóð.',

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
        'name'                  => 'Nafn',
        'username'              => 'Notendanafn',
        'email'                 => 'Netfang',
        'first_name'            => 'Fornafn',
        'last_name'             => 'Eftirnafn',
        'password'              => 'Lykilorð',
        'password_confirmation' => 'Staðfesting á lykilorði',
        'city'                  => 'Borg',
        'country'               => 'Land',
        'address'               => 'Heimilisfang',
        'phone'                 => 'Heimasími',
        'mobile'                => 'Farsími',
        'age'                   => 'Aldur',
        'sex'                   => 'Sex',
        'gender'                => 'Kyn',
        'day'                   => 'Dagur',
        'month'                 => 'Mánuður',
        'year'                  => 'Ár',
        'hour'                  => 'Klukkutími',
        'minute'                => 'Mínúta',
        'second'                => 'Sekúnda',
        'title'                 => 'Titill',
        'content'               => 'Efni',
        'description'           => 'Lýsing',
        'excerpt'               => 'Excerpt',
        'date'                  => 'Dagsetning',
        'time'                  => 'Tími',
        'available'             => 'Í boði',
        'size'                  => 'Stærð',
    ],

];
