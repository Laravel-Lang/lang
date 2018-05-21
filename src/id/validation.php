<?php

return [
    /*
    |---------------------------------------------------------------------------------------
    | Baris Bahasa untuk Validasi
    |---------------------------------------------------------------------------------------
    |
    | Baris bahasa berikut ini berisi standar pesan kesalahan yang digunakan oleh
    | kelas validasi. Beberapa aturan mempunyai multi versi seperti aturan 'size'.
    | Jangan ragu untuk mengoptimalkan setiap pesan yang ada di sini.
    |
    */

    'accepted' => 'Bidang :attribute harus diterima.',
    'active_url' => 'Bidang :attribute bukan URL yang valid.',
    'after' => 'Bidang :attribute harus tanggal setelah :date.',
    'after_or_equal' => 'Bidang :attribute harus berupa tanggal setelah atau sama dengan tanggal :date.',
    'alpha' => 'Bidang :attribute hanya boleh berisi huruf.',
    'alpha_dash' => 'Bidang :attribute hanya boleh berisi huruf, angka, dan strip.',
    'alpha_num' => 'Bidang :attribute hanya boleh berisi huruf dan angka.',
    'array' => 'Bidang :attribute harus berupa sebuah array.',
    'before' => 'Bidang :attribute harus tanggal sebelum :date.',
    'before_or_equal' => 'Bidang :attribute harus berupa tanggal sebelum atau sama dengan tanggal :date.',
    'between' => [
        'numeric' => 'Bidang :attribute harus antara :min dan :max.',
        'file' => 'Bidang :attribute harus antara :min dan :max kilobytes.',
        'string' => 'Bidang :attribute harus antara :min dan :max karakter.',
        'array' => 'Bidang :attribute harus antara :min dan :max item.',
    ],
    'boolean' => 'Bidang :attribute harus berupa true atau false',
    'confirmed' => 'Konfirmasi :attribute tidak cocok.',
    'date' => 'Bidang :attribute bukan tanggal yang valid.',
    'date_format' => 'Bidang :attribute tidak cocok dengan format :format.',
    'different' => 'Bidang :attribute dan :other harus berbeda.',
    'digits' => 'Bidang :attribute harus berupa angka :digits.',
    'digits_between' => 'Bidang :attribute harus antara angka :min dan :max.',
    'dimensions' => 'Bidang :attribute tidak memiliki dimensi gambar yang valid.',
    'distinct' => 'Bidang :attribute memiliki nilai yang duplikat.',
    'email' => 'Bidang :attribute harus berupa alamat surel yang valid.',
    'exists' => 'Bidang :attribute yang dipilih tidak valid.',
    'file' => 'Bidang :attribute harus berupa sebuah berkas.',
    'filled' => 'Bidang :attribute harus memiliki nilai.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'Bidang :attribute harus berupa gambar.',
    'in' => 'Bidang :attribute yang dipilih tidak valid.',
    'in_array' => 'Bidang :attribute tidak terdapat dalam :other.',
    'integer' => 'Bidang :attribute harus merupakan bilangan bulat.',
    'ip' => 'Bidang :attribute harus berupa alamat IP yang valid.',
    'ipv4' => 'Bidang :attribute harus berupa alamat IPv4 yang valid.',
    'ipv6' => 'Bidang :attribute harus berupa alamat IPv6 yang valid.',
    'json' => 'Bidang :attribute harus berupa JSON string yang valid.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'Bidang :attribute seharusnya tidak lebih dari :max.',
        'file' => 'Bidang :attribute seharusnya tidak lebih dari :max kilobytes.',
        'string' => 'Bidang :attribute seharusnya tidak lebih dari :max karakter.',
        'array' => 'Bidang :attribute seharusnya tidak lebih dari :max item.',
    ],
    'mimes' => 'Bidang :attribute harus dokumen berjenis : :values.',
    'mimetypes' => 'Bidang :attribute harus dokumen berjenis : :values.',
    'min' => [
        'numeric' => 'Bidang :attribute harus minimal :min.',
        'file' => 'Bidang :attribute harus minimal :min kilobytes.',
        'string' => 'Bidang :attribute harus minimal :min karakter.',
        'array' => 'Bidang :attribute harus minimal :min item.',
    ],
    'not_in' => 'Bidang :attribute yang dipilih tidak valid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'Bidang :attribute harus berupa angka.',
    'present' => 'Bidang :attribute wajib ada.',
    'regex' => 'Format :attribute tidak valid.',
    'required' => 'Bidang :attribute wajib diisi.',
    'required_if' => 'Bidang :attribute wajib diisi bila :other adalah :value.',
    'required_unless' => 'Bidang :attribute wajib diisi kecuali :other memiliki nilai :values.',
    'required_with' => 'Bidang :attribute wajib diisi bila terdapat :values.',
    'required_with_all' => 'Bidang :attribute wajib diisi bila terdapat :values.',
    'required_without' => 'Bidang :attribute wajib diisi bila tidak terdapat :values.',
    'required_without_all' => 'Bidang :attribute wajib diisi bila tidak terdapat ada :values.',
    'same' => 'Bidang :attribute dan :other harus sama.',
    'size' => [
        'numeric' => 'Bidang :attribute harus berukuran :size.',
        'file' => 'Bidang :attribute harus berukuran :size kilobyte.',
        'string' => 'Bidang :attribute harus berukuran :size karakter.',
        'array' => 'Bidang :attribute harus mengandung :size item.',
    ],
    'string' => 'Bidang :attribute harus berupa string.',
    'timezone' => 'Bidang :attribute harus berupa zona waktu yang valid.',
    'unique' => 'Bidang :attribute sudah ada sebelumnya.',
    'uploaded' => 'Bidang :attribute gagal diunggah.',
    'url' => 'Format Bidang :attribute tidak valid.',

    /*
    |---------------------------------------------------------------------------------------
    | Baris Bahasa untuk Validasi Kustom
    |---------------------------------------------------------------------------------------
    |
    | Di sini Anda dapat menentukan pesan validasi kustom untuk atribut dengan menggunakan
    | konvensi "attribute.rule" dalam penamaan baris. Hal ini membuat cepat dalam
    | menentukan spesifik baris bahasa kustom untuk aturan atribut yang diberikan.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |---------------------------------------------------------------------------------------
    | Kustom Validasi Atribut
    |---------------------------------------------------------------------------------------
    |
    | Baris bahasa berikut digunakan untuk menukar atribut 'place-holders'
    | dengan sesuatu yang lebih bersahabat dengan pembaca seperti Alamat Surel daripada
    | "surel" saja. Ini benar-benar membantu kita membuat pesan sedikit bersih.
    |
    */

    'attributes' => [
    ],
];
