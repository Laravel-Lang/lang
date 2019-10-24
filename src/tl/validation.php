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

    'accepted'             => 'Ang :attribute ay dapat tanggapin.',
    'active_url'           => 'Ang :attribute ay hindi balidong URL.',
    'after'                => 'Ang :attribute ay dapat petsa pagkatapos ng :date.',
    'after_or_equal'       => 'The :attribute must be a date after or equal to :date.',
    'alpha'                => 'Ang :attribute ay maaaring magtaglay ng mga letra lang.',
    'alpha_dash'           => 'Ang :attribute ay maaaring magtaglay ng mga letra, numero at gitling lang.',
    'alpha_num'            => 'Ang :attribute ay maaaring magtaglay ng mga letra at numero lang.',
    'array'                => 'Ang :attribute ay dapat magkakasunod.',
    'before'               => 'Ang :attribute ay dapat petsa bago ang :date.',
    'before_or_equal'      => 'The :attribute must be a date before or equal to :date.',
    'between'              => [
        'numeric' => 'Ang :attribute ay dapat nasa pagitan ng :min at :max.',
        'file'    => 'Ang :attribute ay dapat nasa pagitan ng :min at :max kilobytes.',
        'string'  => 'Ang :attribute ay dapat nasa pagitan ng :min at :max characters.',
        'array'   => 'Ang :attribute ay dapat nasa pagitan ng :min at :max items.',
    ],
    'boolean'              => 'Ang :attribute ng attribute ay dapat tama o mali.',
    'confirmed'            => 'Ang :attribute ng attribute ay hindi magkatugma.',
    'date'                 => 'Ang :attribute ay hindi balidong petsa.',
    'date_equals'          => 'The :attribute must be a date equal to :date.',
    'date_format'          => 'Ang :attribute ay hindi katugma ng format :format.',
    'different'            => 'Ang :attribute at :other pa ay dapat magkaiba.',
    'digits'               => 'Ang :attribute ay dapat :digits digits.',
    'digits_between'       => 'Ang :attribute ay dapat nasa pagitan ng :min at :max digits.',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'Ang :attribute ng attribute ay may katulad na balyu.',
    'email'                => 'Ang :attribute ay dapat balidong email address.',
    'ends_with'            => 'The :attribute must end with one of the following: :values',
    'exists'               => 'Ang piniling :attribute ay imbalido.',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => 'Ang :attribute ng attribute ay kailangan.',
    'gt'                   => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file'    => 'The :attribute must be greater than :value kilobytes.',
        'string'  => 'The :attribute must be greater than :value characters.',
        'array'   => 'The :attribute must have more than :value items.',
    ],
    'gte'                  => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file'    => 'The :attribute must be greater than or equal :value kilobytes.',
        'string'  => 'The :attribute must be greater than or equal :value characters.',
        'array'   => 'The :attribute must have :value items or more.',
    ],
    'image'                => 'Ang :attribute ay dapat isang imahe.',
    'in'                   => 'Ang piniling :attribute ay imbalido.',
    'in_array'             => 'Ang :attribute ng attribute ay wala sa :other.',
    'integer'              => 'Ang :attribute ay dapat isang integer.',
    'ip'                   => 'Ang :attribute ay dapat isang balidong IP address.',
    'ipv4'                 => 'The :attribute must be a valid IPv4 address.',
    'ipv6'                 => 'The :attribute must be a valid IPv6 address.',
    'json'                 => 'Ang :attribute ay dapat isang balidong JSON string.',
    'lt'                   => [
        'numeric' => 'The :attribute must be less than :value.',
        'file'    => 'The :attribute must be less than :value kilobytes.',
        'string'  => 'The :attribute must be less than :value characters.',
        'array'   => 'The :attribute must have less than :value items.',
    ],
    'lte'                  => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file'    => 'The :attribute must be less than or equal :value kilobytes.',
        'string'  => 'The :attribute must be less than or equal :value characters.',
        'array'   => 'The :attribute must not have more than :value items.',
    ],
    'max'                  => [
        'numeric' => 'Ang :attribute ay hindi maaaring higit sa  :max.',
        'file'    => 'Ang :attribute ay hindi maaaring higit sa  :max kilobytes.',
        'string'  => 'Ang :attribute ay hindi maaaring higit sa :max characters.',
        'array'   => 'Ang :attribute ay hindi maaaring higit sa :max items.',
    ],
    'mimes'                => 'Ang :attribute ay dapat file ng uri na: :values.',
    'mimetypes'            => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'Ang :attribute ay dapat di-kukulangin sa :min.',
        'file'    => 'Ang :attribute ay dapat di-kukulangin sa :min kilobytes.',
        'string'  => 'Ang :attribute ay dapat di-kukulangin sa :min characters.',
        'array'   => 'Ang :attribute ay dapat di-kukulangin sa :min items.',
    ],
    'not_in'               => 'Ang piniling :attribute ay imbalido.',
    'not_regex'            => 'The :attribute format is invalid.',
    'numeric'              => 'Ang :attribute ay dapat isang numero.',
    'present'              => 'Ang :attribute ng attribute ay dapat naroon.',
    'regex'                => 'Ang :attribute ng attribute ay imbalido.',
    'required'             => 'Ang :attribute ng attribute ay kailangan.',
    'required_if'          => 'Ang :attribute ng attribute ay kailangan kapag :other iba ay :value.',
    'required_unless'      => 'Ang :attribute ng attribute ay kailangan maliban kung :other iba ay nasa :values.',
    'required_with'        => 'Ang :attribute ng attribute ay kailangan kapag :values balyu ang naroon.',
    'required_with_all'    => 'Ang :attribute ng attribute ay kailangan kapag :values balyu ang naroon.',
    'required_without'     => 'Ang :attribute ng attribute ay kailangan kapag :values balyu ang naroon.',
    'required_without_all' => 'Ang :attribute ng attribute ay kailangan kapag wala sa :values balyu ang naroon.',
    'same'                 => 'Ang :attribute at :other pa ay dapat magtugma.',
    'size'                 => [
        'numeric' => 'Ang :attribute ay dapat :size sukat.',
        'file'    => 'Ang :attribute ay dapat :size sukat sa kilobytes.',
        'string'  => 'Ang :attribute ay dapat :size sukat sa characters.',
        'array'   => 'Ang :attribute ay dapat magtaglay ng :size sa items.',
    ],
    'starts_with'          => 'The :attribute must start with one of the following: :values',
    'string'               => 'Ang  :attribute ay dapat isang string.',
    'timezone'             => 'Ang :attribute ay dapat isang balidong sona.',
    'unique'               => 'Ang :attribute ay nakuha na.',
    'uploaded'             => 'The :attribute failed to upload.',
    'url'                  => 'Ang :attribute ng attribute ay imbalido.',
    'uuid'                 => 'The :attribute must be a valid UUID.',

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
            'rule-name' => 'pasadyang-mensahe',
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
        'test_name'               => 'Subok na pangalan',
        'test_description'        => 'Subok na paglalarawan',
        'test_locale'             => 'Wika',
        'image'                   => 'Imahe',
        'result_text_under_image' => 'Resultang teksto sa ilalim ng imahe',
        'short_text'              => 'Maikling teksto',
    ],
];
