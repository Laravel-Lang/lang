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

    'accepted'        => 'Reiturinn :attribute verður að vera samþykktur.',
    'active_url'      => 'Reiturinn :attribute er ekki leyfileg vefslóð.',
    'after'           => 'Reiturinn :attribute verður að vera dagsetning eftir :date.',
    'after_or_equal'  => ':attribute verður að vera dagsetning eftir eða sú sama og :date.',
    'alpha'           => 'Reiturinn :attribute má aðeins innihalda bókstafi.',
    'alpha_dash'      => 'Reiturinn :attribute má aðeins innihalda bókstafi, tölur og undirstikanir.',
    'alpha_num'       => 'Reiturinn :attribute má aðeins innihalda bókstafi og tölur.',
    'array'           => 'Reiturinn :attribute verður að vera fylki.',
    'before'          => 'Reiturinn :attribute verður að vera dagsetning eftir :date.',
    'before_or_equal' => ':attribute verður að vera dagsetning fyrir eða sú samaog :date.',
    'between'         => [
        'numeric' => 'Reiturinn :attribute verður að vera á milli :min - :max.',
        'file'    => 'Reiturinn :attribute verður að vera á milli :min - :max kílóbæta.',
        'string'  => 'Reiturinn :attribute verður að vera á milli :min - :max stafa.',
        'array'   => 'Reiturinn :attribute verður að vera á milli :min - :max staka.',
    ],
    'boolean'        => 'Reiturinn :attribute verður að vera réttur eða rangur.',
    'confirmed'      => 'Staðfesting á reitnum :attribute passar ekki.',
    'date'           => 'Reiturinn :attribute er ekki rétt dagsetning.',
    'date_equals'    => ':attribute verður að vera dagsetning sem er sú sama og :date.',
    'date_format'    => 'Reiturinn :attribute passar ekki við :format.',
    'different'      => 'Reiturinn :attribute og :other verða að vera ólíkir.',
    'digits'         => 'Reiturinn :attribute verður að vera :digits tölustafir.',
    'digits_between' => 'Reiturinn :attribute verður að vera á milli :min og :max tölustafa.',
    'dimensions'     => ':attribute hefur ógilda myndvídd.',
    'distinct'       => ':attribute reiturinn hefur tvítekið gildi.',
    'email'          => 'Reiturinn :attribute snið netfangsins er ekki rétt.',
    'ends_with'      => 'The :attribute must end with one of the following: :values.',
    'exists'         => 'Reiturinn :attribute er nú þegar til.',
    'file'           => ':attribute verður að vera skrá.',
    'filled'         => 'Reiturinn :attribute verður að innihalda eitthvað.',
    'gt'             => [
        'numeric' => ':attribute verður að vera stærra en :value.',
        'file'    => ':attribute verður að vera stærra en :value kílóbæti.',
        'string'  => ':attribute verður að vera lengri en :value stafir.',
        'array'   => ':attribute verður að hafa fleiri en :value atriði.',
    ],
    'gte' => [
        'numeric' => ':attribute verður að vera stærra en eða jafnt :value.',
        'file'    => ':attribute verður að vera stærra en eða jafnt :value kílóbætum.',
        'string'  => ':attribute verður að vera lengri eða jafnlangur og :value stafir.',
        'array'   => ':attribute verður að hafa :value eða fleiri atriði.',
    ],
    'image'    => 'Reiturinn :attribute verður að vera mynd.',
    'in'       => 'Reiturinn :attribute er ekki réttur.',
    'in_array' => ':attribute reiturinn er ekki til í :other.',
    'integer'  => 'Reiturinn :attribute verður að vera tala.',
    'ip'       => 'Reiturinn :attribute verður að vera lögleg IP-tala.',
    'ipv4'     => ':attribute verður að vera gild IPv4-tala.',
    'ipv6'     => ':attribute verður að vera gild IPv6-tala.',
    'json'     => ':attribute verður að vera gildur JSON-strengur.',
    'lt'       => [
        'numeric' => ':attribute verður að vera minni en :value.',
        'file'    => ':attribute verður að vera minni en :value kílóbæti.',
        'string'  => ':attribute verður að vera styttri en :value stafir.',
        'array'   => ':attribute verður að hafa færri en :value atriði.',
    ],
    'lte' => [
        'numeric' => ':attribute verður að vera minna en eða jafnt :value.',
        'file'    => ':attribute verður að vera minni eða jafnstór og :value kílóbæti.',
        'string'  => ':attribute verður að vera styttri eða jafnlangur og :value stafir.',
        'array'   => ':attribute má ekki hafa fleiri en :value atriði.',
    ],
    'max' => [
        'numeric' => 'Reiturinn :attribute verður að innihalda færri stafi en :max.',
        'file'    => 'Reiturinn :attribute verður að vera minni en :max kílóbæt.',
        'string'  => 'Reiturinn :attribute verður að innihalda færri en :max stafi.',
        'array'   => 'Reiturinn :attribute verður að innihalda færri en :max stök.',
    ],
    'mimes'     => 'Reiturinn :attribute verður að vera skrá af gerðinni: :values.',
    'mimetypes' => 'Reiturinn :attribute verður að vera skrá af gerðinni: :values.',
    'min'       => [
        'numeric' => 'Reiturinn :attribute verður að vera að lágmarki :min tölustafir.',
        'file'    => 'Reiturinn :attribute verður að vera að lágmarki :min kílóbæt.',
        'string'  => 'Reiturinn :attribute verður að vera að lágmarki :min stafir.',
        'array'   => 'Reiturinn :attribute verður að vera að lágmarki :min stök.',
    ],
    'not_in'               => 'Reiturinn :attribute er ógildur.',
    'not_regex'            => ':attribute sniðið er ógilt.',
    'numeric'              => 'Reiturinn :attribute verður að vera tala.',
    'present'              => ':attribute reiturinn verður að vera til staðar.',
    'regex'                => 'Reiturinn :attribute er ekki á réttu formi.',
    'required'             => 'Reiturinn :attribute er nauðsynlegur.',
    'required_if'          => 'Reiturinn :attribute er nauðsynlegur þegar :other er :value.',
    'required_unless'      => ':attribute er áskilinn nema :other sé í :values.',
    'required_with'        => ':attribute er áskilinn þegar :values er til staðar.',
    'required_with_all'    => ':attribute er áskilinn þegar :values er til staðar.',
    'required_without'     => ':attribute er áskilinn þegar :values er ekki til staðar.',
    'required_without_all' => ':attribute reiturinn er áskilinn þegar engin af :values eru til staðar.',
    'same'                 => 'Reiturinn :attribute og :other verða að stemma.',
    'size'                 => [
        'numeric' => 'Reiturinn :attribute verður að vera :size.',
        'file'    => 'Reiturinn :attribute verður að vera :size kílóbæt.',
        'string'  => 'Reiturinn :attribute verður að vera :size stafir.',
        'array'   => 'Reiturinn :attribute verður að innihalda :size hluti.',
    ],
    'starts_with' => ':attribute verður að byrja á einu af eftirfarandi: :values',
    'string'      => ':attribute verður að vera strengur.',
    'timezone'    => 'Reiturinn :attribute verður að vera rétt tímabelti.',
    'unique'      => 'Reiturinn :attribute er því miður ekki leyfilegur. Það er annar eins.',
    'uploaded'    => 'Ekki tókst að hlaða :attribute upp.',
    'url'         => 'Reiturinn :attribute verður að vera netslóð.',
    'uuid'        => ':attribute verður að vera gilt UUID.',

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

    'attributes' => [
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
