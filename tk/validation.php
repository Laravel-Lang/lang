<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Language
 * @version  4.x
 * @author   Isa Ishangulyyev <ishankuliyew424@gmail.com>
 * @link     http://github.com/isa424
 */

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

    "accepted"              => ":attribute kabul edilmelidir.",
    "active_url"            => ":attribute dogry URL bolmalydyr.",
    "after"                 => ":attribute şundan has köne sene bolmalydyr :date.",
    "alpha"                 => ":attribute dine harplardan durmalydyr.",
    "alpha_dash"            => ":attribute dine harplardan, sanlardan we tirelerden durmalydyr.",
    "alpha_num"             => ":attribute dine harplardan we sanlardan durmalydyr.",
    "array"                 => ":attribute ýygyndy bolmalydyr.",
    "before"                => ":attribute şundan has irki sene bolmalydyr :date.",
    "between"               => array(
        "numeric" => ":attribute :min - :max arasynda bolmalydyr.",
        "file"    => ":attribute :min - :max kilobaýt arasynda bolmalydyr.",
        "string"  => ":attribute :min - :max harplar arasynda bolmalydyr.",
        "array"   => ":attribute :min - :max arasynda madda eýe bolmalydyr."
    ),
    "boolean"               => ":attribute diňe dogry ýada ýalňyş bolmalydyr.",
    "confirmed"             => ":attribute tassyklamasy deň däl.",
    "date"                  => ":attribute dogry sene bolmalydyr.",
    "date_format"           => ":attribute :format formatyna deň däl.",
    "different"             => ":attribute bilen :other birbirinden tapawutly bolmalydyr.",
    "digits"                => ":attribute :digits san bolmalydyr.",
    "digits_between"        => ":attribute :min bilen :max arasynda san bolmalydyr.",
    "email"                 => ":attribute formaty dogry däl.",
    "exists"                => "Saýlanan :attribute ýalňyş.",
    "image"                 => ":attribute surat bolmalydyr.",
    "in"                    => ":attribute mukdary ýalňyş.",
    "integer"               => ":attribute san bolmalydyr.",
    "ip"                    => ":attribute dogry IP adres bolmalydyr.",
    "max"                   => array(
        "numeric" => ":attribute :max den kiçi bolmalydyr.",
        "file"    => ":attribute :max kilobaýtdan kiçi bolmalydyr.",
        "string"  => ":attribute değeri :max karakter değerinden kiçi bolmalydyr.",
        "array"   => ":attribute değeri :max adedinden az nesneye sahip bolmalydyr."
    ),
    "mimes"                 => ":attribute dosya biçimi :values bolmalydyr.",
    "min"                   => array(
        "numeric" => ":attribute değeri :min değerinden büyük olmalıdır.",
        "file"    => ":attribute değeri :min kilobaýt değerinden büyük bolmalydyr.",
        "string"  => ":attribute değeri :min karakter değerinden büyük bolmalydyr.",
        "array"   => ":attribute en az :min nesneye sahip olmalıdır."
    ),
    "not_in"                => "Seçili :attribute geçersiz.",
    "numeric"               => ":attribute rakam bolmalydyr.",
    "regex"                 => ":attribute biçimi geçersiz.",
    "required"              => ":attribute alanı gereklidir.",
    "required_if"           => ":attribute alanı, :other :value değerine sahip olduğunda zorunludur.",
    "required_with"         => ":attribute alanı :values varken zorunludur.",
    "required_with_all"     => ":attribute alanı herhangi bir :values değeri varken zorunludur.",
    "required_without"      => ":attribute alanı :values yokken zorunludur.",
    "required_without_all"  => ":attribute alanı :values değerlerinden herhangi biri yokken zorunludur.",
    "same"                  => ":attribute ile :other eşleşmelidir.",
    "size"                  => array(
        "numeric" => ":attribute :size bolmalydyr.",
        "file"    => ":attribute :size kilobaýt bolmalydyr.",
        "string"  => ":attribute :size karakter bolmalydyr.",
        "array"   => ":attribute :size nesneye sahip bolmalydyr."
    ),
    "timezone"              => "The :attribute must be a valid zone.",
    "unique"                => ":attribute daha önceden kayıt edilmiş.",
    "url"                   => ":attribute biçimi geçersiz.",

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

    'custom' => array(
        'attribute-name' => array(
            'rule-name' => 'custom-message',
        ),
    ),

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
