<?php

return array(

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

    "accepted"         => "Isian :attribute harus diterima.",
    "active_url"       => "Isian :attribute bukan URL yang valid.",
    "after"            => "Isian :attribute harus tanggal setelah :date.",
    "alpha"            => "Isian :attribute hanya boleh berisi huruf.",
    "alpha_dash"       => "Isian :attribute hanya boleh berisi huruf, angka, dan strip.",
    "alpha_num"        => "Isian :attribute hanya boleh berisi huruf dan angka.",
    "array"            => "Isian :attribute harus berupa sebuah array.",
    "before"           => "Isian :attribute harus tanggal sebelum :date.",
    "between"          => array(
        "numeric" => "Isian :attribute harus antara :min dan :max.",
        "file"    => "Isian :attribute harus antara :min dan :max kilobytes.",
        "string"  => "Isian :attribute harus antara :min dan :max karakter.",
        "array"   => "Isian :attribute harus antara :min dan :max item.",
    ),
    "confirmed"        => "Konfirmasi :attribute tidak cocok.",
    "date"             => "Isian :attribute bukan tanggal yang valid.",
    "date_format"      => "Isian :attribute tidak cocok dengan format :format.",
    "different"        => "Isian :attribute dan :other harus berbeda.",
    "digits"           => "Isian :attribute harus berupa angka :digits.",
    "digits_between"   => "Isian :attribute harus antara angka :min dan :max.",
    "email"            => "Format isian :attribute tidak valid.",
    "exists"           => "Isian :attribute yang dipilih tidak valid.",
    "image"            => "Isian :attribute harus berupa gambar.",
    "in"               => "Isian :attribute yang dipilih tidak valid.",
    "integer"          => "Isian :attribute harus merupakan bilangan bulat.",
    "ip"               => "Isian :attribute harus berupa alamat IP yang valid.",
    "max"              => array(
        "numeric" => "Isian :attribute seharusnya tidak lebih dari :max.",
        "file"    => "Isian :attribute seharusnya tidak lebih dari :max kilobytes.",
        "string"  => "Isian :attribute seharusnya tidak lebih dari :max karakter.",
        "array"   => "Isian :attribute seharusnya tidak lebih dari :max item.",
    ),
    "mimes"            => "Isian :attribute harus dokumen berjenis : :values.",
    "min"              => array(
        "numeric" => "Isian :attribute harus minimal :min.",
        "file"    => "Isian :attribute harus minimal :min kilobytes.",
        "string"  => "Isian :attribute harus minimal :min karakter.",
        "array"   => "Isian :attribute harus minimal :min item.",
    ),
    "not_in"           => "Isian :attribute yang dipilih tidak valid.",
    "numeric"          => "Isian :attribute harus berupa angka.",
    "regex"            => "Format isian :attribute tidak valid.",
    "required"         => "Bidang isian :attribute wajib diisi.",
    "required_if"      => "Bidang isian :attribute wajib diisi ketika :other adalah :value.",
    "required_with"    => "Bidang isian :attribute wajib diisi ketika terdapat :values.",
    "required_without" => "Bidang isian :attribute wajib diisi ketika tidak terdapat :values.",
    "required_without_all" => "The :attribute field is required when none of :values are present.",
    "same"             => "Isian :attribute dan :other harus sama.",
    "size"             => array(
        "numeric" => "Isian :attribute harus berukuran :size.",
        "file"    => "Isian :attribute harus berukuran :size kilobyte.",
        "string"  => "Isian :attribute harus berukuran :size karakter.",
        "array"   => "Isian :attribute harus mengandung :size item.",
    ),
    "unique"           => "Isian :attribute sudah ada sebelumnya.",
    "url"              => "Format isian :attribute tidak valid.",

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

    'custom' => array(),

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

    'attributes' => array(),

);
