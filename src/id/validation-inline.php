<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Baris Bahasa untuk Validasi
    |--------------------------------------------------------------------------
    |
    | Baris bahasa berikut ini berisi stdanar pesan kesalahan yang digunakan oleh
    | kelas validasi. Beberapa aturan mempunyai banyak versi seperti aturan 'size'.
    | Jangan ragu untuk mengoptimalkan setiap pesan yang ada di sini.
    |
    */

    'accepted'             => 'Bidang ini harus diterima.',
    'active_url'           => 'URL ini tidak sah.',
    'after'                => 'Tanggal harus berisi setelah :date.',
    'after_or_equal'       => 'Tanggal harus berisi setelah atau sama dengan :date.',
    'alpha'                => 'Bidang ini hanya boleh berisi huruf.',
    'alpha_dash'           => 'Bidang ini hanya boleh berisi huruf, angka, strip, dan garis bawah.',
    'alpha_num'            => 'Bidang ini hanya boleh berisi huruf dan angka.',
    'array'                => 'Bidang harus berisi sebuah array.',
    'before'               => 'Tanggal harus berisi sebelum :date.',
    'before_or_equal'      => 'Tanggal harus berisi tanggal sebelum atau sama dengan :date.',
    'between'              => [
        'numeric' => 'Nilai ini harus bernilai di antara :min dan :max.',
        'file'    => 'Berkas ini harus berukuran di antara :min dan :max kilobyte.',
        'string'  => 'String ini harus memiliki panjang di antara :min dan :max karakter.',
        'array'   => 'Konten ini harus memiliki panjang di antara :min dan :max item.',
    ],
    'boolean'              => 'Bidang ini harus berisi true atau false.',
    'confirmed'            => 'Konfirmasi tidak sesuai.',
    'date'                 => 'Ini bukan tanggal yang benar.',
    'date_equals'          => 'Ini harus berisi tanggal yang sama dengan :date.',
    'date_format'          => 'Ini tidak cocok dengan format :format.',
    'different'            => 'Nilai ini harus tidak sama dengan :other.',
    'digits'               => 'Ini harus berisi :digits digit.',
    'digits_between'       => 'Ini harus di antara :min dan :max digit.',
    'dimensions'           => 'Gambar ini tidak memiliki dimensi yang benar.',
    'distinct'             => 'Bidang ini memiliki nilai duplikat.',
    'email'                => 'Ini harus berisi format email yang benar.',
    'ends_with'            => 'Ini harus berakhiran dengan: :values.',
    'exists'               => 'Nilai yang dipilih tidak sesuai.',
    'file'                 => 'Konten harus berisi sebuah berkas.',
    'filled'               => 'Bidang ini harus berisi sebuah nilai.',
    'gt'                   => [
        'numeric' => 'Nilai harus lebih besar dari :value.',
        'file'    => 'Ukuran berkas harus berisi lebih besar dari :value kilobyte.',
        'string'  => 'String harus berisi lebih besar dari :value karakter.',
        'array'   => 'Konten harus memiliki lebih dari :value item.',
    ],
    'gte'                  => [
        'numeric' => 'Nilai harus berisi lebih besar dari atau setara :value.',
        'file'    => 'Ukuran konten harus berisi lebih besar dari atau setara :value kilobyte.',
        'string'  => 'String harus berisi lebih besar dari atau setara :value karakter.',
        'array'   => 'Konten harus memiliki :value item atau lebih.',
    ],
    'image'                => 'Ini harus berisi sebuah gambar.',
    'in'                   => 'Pilihan nilai tidak sesuai.',
    'in_array'             => 'Nilai ini tidak ada di :other.',
    'integer'              => 'Ini harus berisi sebuah angka.',
    'ip'                   => 'Ini harus berisi alamat IP yang valid.',
    'ipv4'                 => 'Ini harus berisi alamat IPv4 yang valid.',
    'ipv6'                 => 'Ini harus berisi alamat IPv6 yang valid.',
    'json'                 => 'Ini harus berisi string JSON yang valid.',
    'lt'                   => [
        'numeric' => 'Nilai harus berisi kurang dari :value.',
        'file'    => 'Ukuran konten harus berisi kurang dari :value kilobyte.',
        'string'  => 'String harus berisi kurang dari :value karakter.',
        'array'   => 'Panjang array harus kurang dari :value item.',
    ],
    'lte'                  => [
        'numeric' => 'Nilai harus berisi kurang dari atau setara :value.',
        'file'    => 'Ukuran konten harus berisi kurang dari atau setara :value kilobyte.',
        'string'  => 'String harus berisi kurang dari atau setara :value karakter.',
        'array'   => 'Panjang array harus lebih dari :value item.',
    ],
    'max'                  => [
        'numeric' => 'Nilai tidak boleh lebih besar dari :max.',
        'file'    => 'Ukuran konten tidak boleh lebih besar dari :max kilobyte.',
        'string'  => 'String tidak boleh lebih besar dari :max karakter.',
        'array'   => 'Panjang array tidak boleh lebih dari :max item.',
    ],
    'mimes'                => 'Ini harus berisi sebuah berkas berjenis: :values.',
    'mimetypes'            => 'Ini harus berisi sebuah berkas berjenis: :values.',
    'min'                  => [
        'numeric' => 'Nilai harus berisi minimal :min.',
        'file'    => 'Ukuran konten harus berisi minimal :min kilobyte.',
        'string'  => 'String harus berisi minimal :min karakter.',
        'array'   => 'Panjang array harus minimal :min item.',
    ],
    'multiple_of'          => 'The value must be a multiple of :value',
    'not_in'               => 'Pilihan nilai tidak sesuai.',
    'not_regex'            => 'Format ini tidak sesuai.',
    'numeric'              => 'Ini harus berisi angka.',
    'password'             => 'Kata sandi tidak sesuai',
    'present'              => 'Bidang ini wajib ada.',
    'regex'                => 'Format ini tidak sesuai.',
    'required'             => 'Bidang ini wajib di isi',
    'required_if'          => 'Bidang ini wajib di isi bila :other adalah :value.',
    'required_unless'      => 'Bidang ini wajib di isi jika :other berada dalam :values.',
    'required_with'        => 'Bidang ini wajib di isi bila :values tersedia.',
    'required_with_all'    => 'Bidang ini wajib di isi bila :values tersedia.',
    'required_without'     => 'Bidang ini wajib di isi bila :values tidak tersedia.',
    'required_without_all' => 'Bidang ini wajib di isi bila tidak satupun :values tersedia.',
    'same'                 => 'Nilai dari bidang ini harus sesuai dengan :other.',
    'size'                 => [
        'numeric' => 'Nilai harus berisi :size.',
        'file'    => 'Ukuran konten harus berisi :size kilobyte.',
        'string'  => 'String harus berisi :size karakter.',
        'array'   => 'Panjang array harus memiliki :size item.',
    ],
    'starts_with'          => 'Ini harus diawali salah satu dari berikut: :values.',
    'string'               => 'Ini harus berisi sebuah string.',
    'timezone'             => 'Ini harus berisi zona waktu yang valid.',
    'unique'               => 'Ini sudah ada sebelumnya.',
    'uploaded'             => 'Berkas gagal diunggah.',
    'url'                  => 'Format ini tidak valid.',
    'uuid'                 => 'Ini harus merupakan UUID yang valid.',

    /*
    |---------------------------------------------------------------------------------------
    | Baris Bahasa untuk Validasi Kustom
    |---------------------------------------------------------------------------------------
    |
    | Di sini Anda dapat menentukan pesan validasi untuk atribut sesuai keinginan dengan
    | menggunakan konvensi "attribute.rule" dalam penamaan barisnya. Hal ini mempercepat
    | dalam menentukan baris bahasa kustom yang spesifik untuk aturan atribut yang diberikan.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

];
