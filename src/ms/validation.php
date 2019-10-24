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

    'accepted'             => ':attribute mesti diterima pakai.',
    'active_url'           => ':attribute bukan URL yang sah.',
    'after'                => ':attribute mesti tarikh selepas :date.',
    'after_or_equal'       => ':attribute mesti tarikh selepas atau sama dengan :date.',
    'alpha'                => ':attribute hanya boleh mengandungi huruf.',
    'alpha_dash'           => ':attribute boleh mengandungi huruf, nombor, dan sengkang.',
    'alpha_num'            => ':attribute boleh mengandungi huruf dan nombor.',
    'array'                => ':attribute mesti jujukan.',
    'before'               => ':attribute mesti tarikh sebelum :date.',
    'before_or_equal'      => ':attribute mesti tarikh sebelum atau sama dengan :date.',
    'between'              => [
        'numeric' => ':attribute mesti mengandungi antara :min dan :max.',
        'file'    => ':attribute mesti mengandungi antara :min dan :max kilobait.',
        'string'  => ':attribute mesti mengandungi antara :min dan :max aksara.',
        'array'   => ':attribute mesti mengandungi antara :min dan :max perkara.',
    ],
    'boolean'              => ':attribute mesti benar atau salah.',
    'confirmed'            => ':attribute pengesahan yang tidak sepadan.',
    'date'                 => ':attribute bukan tarikh yang sah.',
    'date_equals'          => ':attribute mesti tarikh sama dengan :date.',
    'date_format'          => ':attribute tidak mengikut format :format.',
    'different'            => ':attribute dan :other mesti berlainan.',
    'dimensions'           => ':attribute tidak sah',
    'digits'               => ':attribute mesti :digits.',
    'digits_between'       => ':attribute mesti mengandungi antara :min dan :max digits.',
    'distinct'             => ':attribute adalah nilai yang berulang',
    'email'                => ':attribute tidak sah.',
    'ends_with'            => 'The :attribute must end with one of the following: :values',
    'exists'               => ':attribute tidak sah.',
    'file'                 => ':attribute mesti fail yang sah.',
    'filled'               => ':attribute diperlukan.',
    'gt'                   => [
        'numeric' => ':attribute mesti melebihi :value.',
        'file'    => ':attribute mesti melebihi :value kilobait.',
        'string'  => ':attribute mesti melebihi :value aksara.',
        'array'   => ':attribute mesti mengandungi lebih daripada :value perkara.',
    ],
    'gte'                  => [
        'numeric' => ':attribute mesti melebihi atau bersamaan :value.',
        'file'    => ':attribute mesti melebihi atau bersamaan :value kilobait.',
        'string'  => ':attribute mesti melebihi atau bersamaan :value aksara.',
        'array'   => ':attribute mesti mengandungi :value perkara atau lebih.',
    ],
    'image'                => ':attribute mesti imej.',
    'in'                   => ':attribute tidak sah.',
    'in_array'             => ':attribute tidak wujud dalam :other.',
    'integer'              => ':attribute mesti integer.',
    'ip'                   => ':attribute mesti alamat IP yang sah.',
    'ipv4'                 => ':attribute mesti alamat IPv4 yang sah.',
    'ipv6'                 => ':attribute mesti alamat IPv6 yang sah',
    'json'                 => ':attribute mesti JSON yang sah.',
    'lt'                   => [
        'numeric' => ':attribute mesti kurang daripada :value.',
        'file'    => ':attribute mesti kurang daripada :value kilobait.',
        'string'  => ':attribute mesti kurang daripada :value aksara.',
        'array'   => ':attribute mesti mengandungi kurang daripada :value perkara.',
    ],
    'lte'                  => [
        'numeric' => ':attribute mesti kurang daripada atau bersamaan dengan :value.',
        'file'    => ':attribute mesti kurang daripada atau bersamaan dengan :value kilobait.',
        'string'  => ':attribute mesti kurang daripada atau bersamaan dengan :value aksara.',
        'array'   => ':attribute mesti mengandungi kurang daripada atau bersamaan dengan :value perkara.',
    ],
    'max'                  => [
        'numeric' => 'Jumlah :attribute mesti tidak melebihi :max.',
        'file'    => 'Jumlah :attribute mesti tidak melebihi :max kilobait.',
        'string'  => 'Jumlah :attribute mesti tidak melebihi :max aksara.',
        'array'   => 'Jumlah :attribute mesti tidak melebihi :max perkara.',
    ],
    'mimes'                => ':attribute mesti fail type: :values.',
    'mimetypes'            => ':attribute mesti fail type: :values.',
    'min'                  => [
        'numeric' => 'Jumlah :attribute mesti sekurang-kurangnya :min.',
        'file'    => 'Jumlah :attribute mesti sekurang-kurangnya :min kilobait.',
        'string'  => 'Jumlah :attribute mesti sekurang-kurangnya :min aksara.',
        'array'   => 'Jumlah :attribute mesti sekurang-kurangnya :min perkara.',
    ],
    'not_in'               => ':attribute tidak sah.',
    'not_regex'            => 'Format :attribute adalah tidak sah.',
    'numeric'              => ':attribute mesti nombor.',
    'present'              => ':attribute mesti wujud.',
    'regex'                => 'Format :attribute tidak sah.',
    'required'             => 'Ruangan :attribute diperlukan.',
    'required_if'          => 'Ruangan :attribute diperlukan bila :other sama dengan :value.',
    'required_unless'      => 'Ruangan :attribute diperlukan sekiranya :other ada dalam :values.',
    'required_with'        => 'Ruangan :attribute diperlukan bila :values wujud.',
    'required_with_all'    => 'Ruangan :attribute diperlukan bila :values wujud.',
    'required_without'     => 'Ruangan :attribute diperlukan bila :values tidak wujud.',
    'required_without_all' => 'Ruangan :attribute diperlukan bila kesemua :values wujud.',
    'same'                 => 'Ruangan :attribute dan :other mesti sepadan.',
    'size'                 => [
        'numeric' => 'Saiz :attribute mesti :size.',
        'file'    => 'Saiz :attribute mesti :size kilobait.',
        'string'  => 'Saiz :attribute mesti :size aksara.',
        'array'   => 'Saiz :attribute mesti mengandungi :size perkara.',
    ],
    'starts_with'          => ':attribute mesti bermula dengan salah satu dari: :values',
    'string'               => ':attribute mesti aksara.',
    'timezone'             => ':attribute mesti zon masa yang sah.',
    'unique'               => ':attribute telah wujud.',
    'uploaded'             => ':attribute gagal dimuat naik.',
    'url'                  => ':attribute format tidak sah.',
    'uuid'                 => ':attribute mesti UUID yang sah.',

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

    'attributes' => [],
];
