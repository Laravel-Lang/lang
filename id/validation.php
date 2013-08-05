<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

    "accepted"         => "Isian :attribute harus diterima.",
    "active_url"       => "Isian :attribute bukan URL yang valid.",
    "after"            => "Isian :attribute harus tanggal setelah :date.",
    "alpha"            => "Isian :attribute hanya boleh berisi huruf.",
    "alpha_dash"       => "Isian :attribute hanya boleh berisi huruf, angka, dan strip.",
    "alpha_num"        => "Isian :attribute hanya boleh berisi huruf dan angka.",
    "array"            => "The :attribute must be an array.",
    "before"           => "Isian :attribute harus tanggal sebelum :date.",
    "between"          => array(
        "numeric" => "Isian :attribute harus antara :min - :max.",
        "file"    => "Isian :attribute harus antara :min - :max kilobytes.",
        "string"  => "Isian :attribute harus antara  :min - :max karakter.",
        "array"   => "The :attribute must have between :min - :max items."
    ),
    "confirmed"        => "Konfirmasi :attribute tidak cocok.",
    "date"             => "The :attribute is not a valid date.",
    "date_format"      => "The :attribute does not match the format :format.",
    "different"        => "Isian :attribute dan :other harus berbeda.",
    "digits"           => "The :attribute must be :digits digits.",
    "digits_between"   => "The :attribute must be between :min and :max digits.",
    "email"            => "Format isian :attribute tidak valid.",
    "exists"           => "Isian :attribute yang dipilih tidak valid.",
    "image"            => ":attribute harus berupa gambar.",
    "in"               => "Isian :attribute yang dipilih tidak valid.",
    "integer"          => "Isian :attribute harus merupakan bilangan.",
    "ip"               => "Isian :attribute harus alamat IP yang valid.",
    "max"              => array(
        "numeric" => "Isian :attribute harus kurang dari :max.",
        "file"    => "Isian :attribute harus kurang dari :max kilobytes.",
        "string"  => "Isian :attribute harus kurang dari :max karakter.",
        "array"   => "The :attribute may not have more than :max items."
    ),
    "mimes"            => "Isian :attribute harus dokumen berjenis : :values.",
    "min"              => array(
        "numeric" => "Isian :attribute harus minimal :min.",
        "file"    => "Isian :attribute harus minimal :min kilobytes.",
        "string"  => "Isian :attribute harus minimal :min karakter.",
        "array"   => "The :attribute must have at least :min items."
    ),
    "not_in"           => "Isian :attribute yang dipilih tidak valid.",
    "numeric"          => "Isian :attribute harus berupa angka.",
    "regex"            => "The :attribute format is invalid.",
    "required"         => "Isian :attribute wajib diisi.",
    "required_if"      => "The :attribute field is required when :other is :value.",
    "required_with"    => "The :attribute field is required when :values is present.",
    "required_without" => "The :attribute field is required when :values is not present.",
    "same"             => "Isian :attribute dan :other harus sama.",
    "size"             => array(
        "numeric" => "Isian :attribute harus berukuran :size.",
        "file"    => "Isian :attribute harus berukuran :size kilobyte.",
        "string"  => "Isian :attribute harus berukuran :size karakter.",
        "array"   => "The :attribute must contain :size items."
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