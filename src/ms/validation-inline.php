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

    'accepted'             => 'Ruangan ini mesti diterima pakai.',
    'active_url'           => 'URL ini adalah tidak sah.',
    'after'                => 'Tarikh mesti tarikh selepas :date.',
    'after_or_equal'       => 'Tarikh mesti tarikh selepas atau bersamaan :date.',
    'alpha'                => 'Ruangan ini hanya boleh mengandungi huruf.',
    'alpha_dash'           => 'Ruangan ini boleh mengandungi huruf, nombor, dan sengkang.',
    'alpha_num'            => 'Ruangan ini boleh mengandungi huruf dan nombor.',
    'array'                => 'Ruangan ini mesti jujukan.',
    'before'               => 'Ruangan ini mesti tarikh sebelum :date.',
    'before_or_equal'      => 'Ruangan ini mesti tarikh sebelum atau bersamaan :date.',
    'between'              => [
        'numeric' => 'Ruangan ini mesti mengandungi antara :min dan :max.',
        'file'    => 'Ruangan ini mesti mengandungi antara :min dan :max kilobait.',
        'string'  => 'Ruangan ini mesti mengandungi antara :min dan :max aksara.',
        'array'   => 'Ruangan ini mesti mengandungi antara :min dan :max perkara.',
    ],
    'boolean'              => 'Ruangan ini mesti benar atau salah.',
    'confirmed'            => 'Pengesahan yang tidak sepadan.',
    'date'                 => 'Tarikh ini tidak sah.',
    'date_equals'          => 'Tarikh mesti sama dengan :date.',
    'date_format'          => 'Format tarikh tidak sepadan dengan :format.',
    'different'            => 'Nilai ini dan :other mesti berlainan.',
    'digits'               => 'Ruangan ini mesti :digits.',
    'digits_between'       => 'Ruangan ini mesti mengandungi nilai antara :min dan :max digits.',
    'dimensions'           => 'Dimensi imej tidak sah.',
    'distinct'             => 'Ruangan ini mempunyai nilai yang berulang.',
    'email'                => 'Alamat emel mestilah sah.',
    'ends_with'            => 'Nilai mesti berakhir dengan salah satu dari nilai berikut: :values.',
    'exists'               => 'Pilihan tidak sah.',
    'file'                 => 'Ruangan ini mesti fail yang sah.',
    'filled'               => 'Ruangan ini mesti mempunyai nilai.',
    'gt'                   => [
        'numeric' => 'Nilai mesti melebihi :value.',
        'file'    => 'Saiz fail mesti melebihi :value kilobait.',
        'string'  => 'Rentetan mesti melebihi :value aksara.',
        'array'   => 'Jujukan mesti mengandungi lebih daripada :value perkara.',
    ],
    'gte'                  => [
        'numeric' => 'Nilai mesti melebihi atau bersamaan :value.',
        'file'    => 'Saiz fail mesti melebihi atau bersamaan :value kilobait.',
        'string'  => 'Rentetan mesti melebihi atau bersamaan :value aksara.',
        'array'   => 'Jujukan mesti mengandungi :value perkara atau lebih.',
    ],
    'image'                => 'Nilai mesti imej.',
    'in'                   => 'Pilihan tidak sah.',
    'in_array'             => 'Nilai tidak wujud di :other.',
    'integer'              => 'Nilai mesti integer.',
    'ip'                   => 'Alamat IP tidak sah.',
    'ipv4'                 => 'Nilai mesti alamat IPv4 yang sah.',
    'ipv6'                 => 'Nilai mesti alamat IPv6 yang sah.',
    'json'                 => 'Nilai mesti rentetan JSON yang sah.',
    'lt'                   => [
        'numeric' => 'Nilai mesti kurang daripada :value.',
        'file'    => 'Saiz fail mesti kurang daripada :value kilobait.',
        'string'  => 'Rentetan mesti kurang daripada :value aksara.',
        'array'   => 'Jujukan mesti mengandungi kurang daripada :value perkara.',
    ],
    'lte'                  => [
        'numeric' => 'Nilai mesti kurang daripada atau bersamaan dengan :value.',
        'file'    => 'Saiz fail mesti kurang daripada atau bersamaan dengan :value kilobait.',
        'string'  => 'Rentetan mesti kurang daripada atau bersamaan dengan :value aksara.',
        'array'   => 'Jujukan mesti mengandungi kurang daripada atau bersamaan dengan :value perkara.',
    ],
    'max'                  => [
        'numeric' => 'Nilai mesti tidak melebihi :max.',
        'file'    => 'Saiz fail mesti tidak melebihi :max kilobait.',
        'string'  => 'Rentetan mesti tidak melebihi :max aksara.',
        'array'   => 'Jujukan mesti tidak melebihi :max perkara.',
    ],
    'mimes'                => 'Fail ini mesti berjenis: :values.',
    'mimetypes'            => 'Fail ini mesti berjenis: :values.',
    'min'                  => [
        'numeric' => 'Nilai mesti sekurang-kurangnya :min.',
        'file'    => 'Saiz fail mesti sekurang-kurangnya :min kilobait.',
        'string'  => 'Rentetan mesti sekurang-kurangnya :min aksara.',
        'array'   => 'Jujukan mesti sekurang-kurangnya :min perkara.',
    ],
    'multiple_of'          => 'The value must be a multiple of :value',
    'not_in'               => 'Pilihan tidak sah.',
    'not_regex'            => 'Format tidak sah.',
    'numeric'              => 'Nilai mesti nombor.',
    'password'             => 'Kata laluan tidak sah.',
    'present'              => 'Ruangan ini mesti wujud.',
    'regex'                => 'Format tidak sah.',
    'required'             => 'Ruangan ini diperlukan.',
    'required_if'          => 'Ruangan ini diperlukan bila :other sama dengan :value.',
    'required_unless'      => 'Ruangan ini diperlukan sekiranya :other ada dalam :values.',
    'required_with'        => 'Ruangan ini diperlukan bila :values wujud.',
    'required_with_all'    => 'Ruangan ini diperlukan bila :values wujud.',
    'required_without'     => 'Ruangan ini diperlukan bila :values tidak wujud.',
    'required_without_all' => 'Ruangan ini diperlukan bila kesemua :values wujud.',
    'same'                 => 'Nilai ruangan ini mesti salah satu nilai di :other.',
    'size'                 => [
        'numeric' => 'Saiz nilai mesti :size.',
        'file'    => 'Saiz fail mesti :size kilobait.',
        'string'  => 'Saiz rentetan mesti :size aksara.',
        'array'   => 'Saiz jujukan mesti mengandungi :size perkara.',
    ],
    'starts_with'          => 'Nilai mesti bermula dengan salah satu dari: :values.',
    'string'               => 'Nilai mesti jujukan.',
    'timezone'             => 'Nilai mesti zon masa yang sah.',
    'unique'               => 'Nilai telah wujud.',
    'uploaded'             => 'Muat naik gagal.',
    'url'                  => 'Format ini tidak sah.',
    'uuid'                 => 'UUID tidak sah.',

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
