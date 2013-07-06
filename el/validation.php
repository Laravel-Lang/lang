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

    "accepted"         => "Το πεδίο :attribute πρέπει να γίνει αποδεκτό.",
    "active_url"       => "Το πεδίο :attribute δεν είναι αποδεκτή δν/ση URL.",
    "after"            => "Το πεδίο :attribute μπορεί να είναι ημ/νία μετα από :date.",
    "alpha"            => "Το πεδίο :attribute μπορεί να περιέχει μόνο από γράμματα.",
    "alpha_dash"       => "Το πεδίο :attribute μπορεί να περιέχει μόνο από γράμματα, αριθμούς, και παύλες.",
    "alpha_num"        => "Το πεδίο :attribute μπορεί να περιέχει μόνο γράμματα και αριθμούς.",
    "before"           => "Το πεδίο :attribute πρέπει να είναι ημ/νία πρίν από :date.",
    "between"          => array(
        "numeric" => "Το πεδίο :attribute πρέπει να είναι μεταξύ :min - :max.",
        "file"    => "Το πεδίο :attribute πρέπει να είναι μεταξύ :min - :max kilobytes.",
        "string"  => "Το πεδίο :attribute πρέπει να είναι μεταξύ :min - :max χαρακτήρες.",
    ),
    "confirmed"        => "Η επιβαιβέωση του :attribute δεν ταιριάζει.",
    "date"             => "Το πεδίο :attribute δεν αποτελει αποδεκτή ημερομηνία.",
    "date_format"      => "Το πεδίο :attribute δεν είναι της μορφής :format.",
    "different"        => "Το πεδίο :attribute και :other πρέπει να είναι διαφορετικά.",
    "digits"           => "Το πεδίο :attribute πρέπει να είναι :digits ψηφία.",
    "digits_between"   => "Το πεδίο :attribute πρέπει να είναι between :min and :max ψηφία.",
    "email"            => "Το πεδίο :attribute δεν είναι αποδεκτή δν/ση email.",
    "exists"           => "Το επιλεγμένο :attribute δεν είναι έγκυρο.",
    "image"            => "Το πεδίο :attribute πρέπει να είναι εικόνα.",
    "in"               => "Το επιλεγμένο :attribute δεν είναι έγκυρο.",
    "integer"          => "Το πεδίο :attribute πρέπει να είναι ακέραιος.",
    "ip"               => "Το πεδίο :attribute πρέπει να είναι αποδεκτή δ/νση IP.",
    "max"              => array(
        "numeric" => "Το πεδίο :attribute πρέπει να είναι μικρότερο από :max.",
        "file"    => "Το πεδίο :attribute πρέπει να είναι μικρότερο από :max kilobytes.",
        "string"  => "Το πεδίο :attribute πρέπει να έχει λιγότερους από :max χαρακτήρες.",
    ),
    "mimes"            => "Το πεδίο :attribute πρέπει να είναι αρχείο με τύπο: :values.",
    "min"              => array(
        "numeric" => "Το πεδίο :attribute πρέπει να είναι τουλάχιστον :min.",
        "file"    => "Το πεδίο :attribute πρέπει να είναι τουλάχιστον :min kilobytes.",
        "string"  => "Το πεδίο :attribute πρέπει να έχει τουλάχιστον :min χαρακτήρες.",
    ),
    "not_in"           => "Το επιλεγμένο :attribute δεν είναι αποδεκτό.",
    "numeric"          => "Το πεδίο :attribute πρέπει να είναι αριθμός.",
    "regex"            => "Η μορφή του :attribute δεν είναι αποδεκτή.",
    "required"         => "Το πεδίο :attribute είναι απαραίτητο.",
    "required_if"      => "Το πεδίο :attribute είναι απαραίτητο όταν το πεδίο :other είναι :value.",
    "required_with"    => "Το πεδίο :attribute είναι απαραίτητο όταν υπάρχει :values.",
    "required_without" => "Το πεδίο :attribute είναι απαραίτητο όταν δεν υπάρχει :values.",
    "same"             => "Τα πεδία :attribute και :other πρέπει να είναι ίδια.",
    "size"             => array(
        "numeric" => "Το πεδίο :attribute πρέπει να είναι :size.",
        "file"    => "Το πεδίο :attribute πρέπει να είναι :size kilobytes.",
        "string"  => "Το πεδίο :attribute πρέπει να είναι :size χαρακτήρες.",
    ),
    "unique"           => "Το πεδίο :attribute έχει ήδη εκχωρηθεί.",
    "url"              => "Το πεδίο :attribute δεν είναι μία αποδεκτή δ/νση URL.",

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
