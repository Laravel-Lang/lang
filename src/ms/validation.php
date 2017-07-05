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

    'accepted'             => ':Attribute mesti diterima pakai.',
    'active_url'           => ':Attribute bukan URL yang sah.',
    'after'                => ':Attribute mesti tarikh selepas :date.',
    'after_or_equal'       => ':Attribute mesti tarikh selepas atau sama dengan :date.',
    'alpha'                => ':Attribute hanya boleh mengandungi huruf.',
    'alpha_dash'           => ':Attribute boleh mengandungi huruf, nombor, dan sengkang.',
    'alpha_num'            => ':Attribute boleh mengandungi huruf dan nombor.',
    'array'                => ':Attribute mesti jujukan.',
    'before'               => ':Attribute mesti tarikh sebelum :date.',
    'before_or_equal'      => ':Attribute mesti tarikh sebelum atau sama dengan :date.',
    'between'              => [
        'numeric' => ':Attribute mesti mengandungi antara :min dan :max.',
        'file'    => ':Attribute mesti mengandungi antara :min dan :max kilobait.',
        'string'  => ':Attribute mesti mengandungi antara :min dan :max aksara.',
        'array'   => ':Attribute mesti mengandungi antara :min dan :max perkara.',
    ],
    'boolean'              => ':Attribute mesti benar atau palsu.',
    'confirmed'            => ':Attribute pengesahan yang tidak sepadan.',
    'date'                 => ':Attribute bukan tarikh yang sah.',
    'date_format'          => ':Attribute tidak mengikut format :format.',
    'different'            => ':Attribute dan :other mesti berlainan.',
    'dimensions'           => ':Attribute tidak sah',
    'digits'               => ':Attribute mesti :digits.',
    'digits_between'       => ':Attribute mesti mengandungi antara :min dan :max digits.',
    'distinct'             => ':Attribute adalah nilai yang berulang',
    'email'                => ':Attribute tidak sah.',
    'exists'               => ':Attribute tidak sah.',
    'file'                 => ':Attribute mesti fail yang sah.',
    'filled'               => ':Attribute diperlukan.',
    'image'                => ':Attribute mesti imej.',
    'in'                   => ':Attribute tidak sah.',
    'in_array'             => ':Attribute tidak wujud dalam :other.',
    'integer'              => ':Attribute mesti integer.',
    'ip'                   => ':Attribute mesti alamat IP yang sah.',
    'ipv4'                 => ':Attribute mesti alamat IPv4 yang sah.',
    'ipv6'                 => ':Attribute mesti alamat IPv6 yang sah',
    'json'                 => ':Attribute mesti JSON yang sah.',
    'max'                  => [
        'numeric' => 'Jumlah :Attribute mesti tidak melebihi :max.',
        'file'    => 'Jumlah :Attribute mesti tidak melebihi :max kilobait.',
        'string'  => 'Jumlah :Attribute mesti tidak melebihi :max aksara.',
        'array'   => 'Jumlah :Attribute mesti tidak melebihi :max perkara.',
    ],
    'mimes'                => ':Attribute mesti fail type: :values.',
    'mimetypes'            => ':Attribute mesti fail type: :values.',
    'min'                  => [
        'numeric' => 'Jumlah :Attribute mesti sekurang-kurangnya :min.',
        'file'    => 'Jumlah :Attribute mesti sekurang-kurangnya :min kilobait.',
        'string'  => 'Jumlah :Attribute mesti sekurang-kurangnya :min aksara.',
        'array'   => 'Jumlah :Attribute mesti sekurang-kurangnya :min perkara.',
    ],
    'not_in'               => ':Attribute tidak sah.',
    'numeric'              => ':Attribute mesti nombor.',
    'present'              => ':Attribute mesti wujud.',
    'regex'                => ':Attribute format tidak sah.',
    'required'             => 'Ruangan :Attribute diperlukan.',
    'required_if'          => 'Ruangan :Attribute diperlukan bila :other sama dengan :value.',
    'required_unless'      => 'Ruangan :Attribute diperlukan sekiranya :other ada dalam :values.',
    'required_with'        => 'Ruangan :Attribute diperlukan bila :values wujud.',
    'required_with_all'    => 'Ruangan :Attribute diperlukan bila :values wujud.',
    'required_without'     => 'Ruangan :Attribute diperlukan bila :values tidak wujud.',
    'required_without_all' => 'Ruangan :Attribute diperlukan bila kesemua :values wujud.',
    'same'                 => 'Ruangan :Attribute dan :other mesti sepadan.',
    'size'                 => [
        'numeric' => 'Saiz :Attribute mesti :size.',
        'file'    => 'Saiz :Attribute mesti :size kilobait.',
        'string'  => 'Saiz :Attribute mesti :size aksara.',
        'array'   => 'Saiz :Attribute mesti mengandungi :size perkara.',
    ],
    'string'               => ':Attribute mesti aksara.',
    'timezone'             => ':Attribute mesti zon masa yang sah.',
    'unique'               => ':Attribute telah wujud.',
    'uploaded'             => ':Attribute gagal dimuat naik.',
    'url'                  => ':Attribute format tidak sah.',

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

    'attributes'           => [],
];
