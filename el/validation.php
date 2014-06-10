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
    "active_url"       => "Το πεδίο :attribute δεν είναι αποδεκτή δ/νση URL.",
    "after"            => "Το πεδίο :attribute μπορεί να είναι μία ημ/νία μετά από :date.",
    "alpha"            => "Το πεδίο :attribute μπορεί να περιέχει μόνο γράμματα.",
    "alpha_dash"       => "Το πεδίο :attribute μπορεί να περιέχει μόνο γράμματα, αριθμούς, και παύλες.",
    "alpha_num"        => "Το πεδίο :attribute μπορεί να περιέχει μόνο γράμματα και αριθμούς.",
    "array"            => "Το πεδίο :attribute πρέπει να είναι ένας πίνακας.",
    "before"           => "Το πεδίο :attribute πρέπει να είναι μία ημ/νία πριν από :date.",
    "between"          => array(
        "numeric" => "Το πεδίο :attribute πρέπει να είναι μεταξύ :min - :max.",
        "file"    => "Το πεδίο :attribute πρέπει να είναι μεταξύ :min - :max kilobytes.",
        "string"  => "Το πεδίο :attribute πρέπει να είναι μεταξύ :min - :max χαρακτήρες.",
        "array"   => "Το πεδίο :attribute πρέπει να έχει μεταξύ :min - :max αντικείμενα."
    ),
    "boolean"          => "The :attribute field must be true or false",
    "confirmed"        => "Η επιβεβαίωση του :attribute δεν ταιριάζει.",
    "date"             => "Το πεδίο :attribute δεν αποτελεί αποδεκτή ημερομηνία.",
    "date_format"      => "Το πεδίο :attribute δεν είναι της μορφής :format.",
    "different"        => "Το πεδίο :attribute και :other πρέπει να είναι διαφορετικά.",
    "digits"           => "Το πεδίο :attribute πρέπει να είναι :digits ψηφία.",
    "digits_between"   => "Το πεδίο :attribute πρέπει να είναι between :min and :max ψηφία.",
    "email"            => "Το πεδίο :attribute δεν είναι αποδεκτή δ/νση email.",
    "exists"           => "Το επιλεγμένο :attribute δεν είναι έγκυρο.",
    "image"            => "Το πεδίο :attribute πρέπει να είναι εικόνα.",
    "in"               => "Το επιλεγμένο :attribute δεν είναι έγκυρο.",
    "integer"          => "Το πεδίο :attribute πρέπει να είναι ακέραιος.",
    "ip"               => "Το πεδίο :attribute πρέπει να είναι αποδεκτή δ/νση IP.",
    "max"              => array(
        "numeric" => "Το πεδίο :attribute δεν μπορεί να είναι μεγαλύτερο από :max.",
        "file"    => "Το πεδίο :attribute δεν μπορεί να είναι μεγαλύτερό :max kilobytes.",
        "string"  => "Το πεδίο :attribute δεν μπορεί να είναι μεγαλύτερό :max χαρακτήρες.",
        "array"   => "Το πεδίο :attribute δεν μπορεί να έχει περισσότερα από :max αντικείμενα."
    ),
    "mimes"            => "Το πεδίο :attribute πρέπει να είναι αρχείο με τύπο: :values.",
    "min"              => array(
        "numeric" => "Το πεδίο :attribute πρέπει να είναι τουλάχιστον :min.",
        "file"    => "Το πεδίο :attribute πρέπει να είναι τουλάχιστον :min kilobytes.",
        "string"  => "Το πεδίο :attribute πρέπει να έχει τουλάχιστον :min χαρακτήρες.",
        "array"   => "Το πεδίο :attribute πρέπει να έχει τουλάχιστον :min αντικείμενα."
    ),
    "not_in"           => "Το επιλεγμένο :attribute δεν είναι αποδεκτό.",
    "numeric"          => "Το πεδίο :attribute πρέπει να είναι αριθμός.",
    "regex"            => "Η μορφή του :attribute δεν είναι αποδεκτή.",
    "required"         => "Το πεδίο :attribute είναι απαραίτητο.",
    "required_if"      => "Το πεδίο :attribute είναι απαραίτητο όταν το πεδίο :other είναι :value.",
    "required_with"    => "Το πεδίο :attribute είναι απαραίτητο όταν υπάρχει :values.",
    "required_with_all" => "The :attribute field is required when :values is present.",
    "required_without" => "Το πεδίο :attribute είναι απαραίτητο όταν δεν υπάρχει :values.",
    "required_without_all" => "The :attribute field is required when none of :values are present.",
    "same"             => "Τα πεδία :attribute και :other πρέπει να είναι ίδια.",
    "size"             => array(
        "numeric" => "Το πεδίο :attribute πρέπει να είναι :size.",
        "file"    => "Το πεδίο :attribute πρέπει να είναι :size kilobytes.",
        "string"  => "Το πεδίο :attribute πρέπει να είναι :size χαρακτήρες.",
        "array"   => "Το πεδίο :attribute πρέπει να περιέχει :size αντικείμενα."
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
