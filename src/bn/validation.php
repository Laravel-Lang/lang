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

    'accepted'        => ':attribute গ্রহণ করা আবশ্যক।',
    'active_url'      => 'এই :attribute একটি বৈধ URL নয়।',
    'after'           => ':date অবশ্যই :attribute এর পরের একটি তারিখ হতে হবে।',
    'after_or_equal'  => ':attribute টি অবশ্যই :date এর সাথে মিল অথবা এর পরের একটি তারিখ হতে হবে।',
    'alpha'           => ':attribute শুধুমাত্র অক্ষর থাকতে পারে।',
    'alpha_dash'      => ':attribute শুধুমাত্র অক্ষর, সংখ্যা, এবং ড্যাশ থাকতে পারে।',
    'alpha_num'       => ':attribute শুধুমাত্র বর্ণ ও সংখ্যা থাকতে পারে।',
    'array'           => ':attribute একটি অ্যারে হতে হবে।',
    'before'          => ':date অবশ্যই :attribute এর আগের একটি তারিখ হতে হবে।',
    'before_or_equal' => ':attribute টি অবশ্যই :date এর সাথে মিল অথবা এর আগের একটি তারিখ হতে হবে।',
    'between'         => [
        'numeric' => ':min এবং :max :attribute মধ্যে হতে হবে।',
        'file'    => ':min এবং :max কিলোবাইট :attribute মধ্যে হতে হবে।',
        'string'  => ':min এবং :max অক্ষর :attribute মধ্যে হতে হবে।',
        'array'   => ':min এবং :max আইটেম :attribute মধ্যে হতে হবে।',
    ],
    'boolean'        => ':attribute স্থানে  সত্য বা মিথ্যা হতে হবে।',
    'confirmed'      => ':attribute নিশ্চিতকরণ এর  সাথে মিলছে না।',
    'date'           => ':attribute একটি বৈধ তারিখ নয়।',
    'date_equals'    => 'The :attribute must be a date equal to :date.',
    'date_format'    => ':attribute, :format এর সাথে বিন্যাস মিলছে না।',
    'different'      => ':attribute এবং :other আলাদা হতে হবে।',
    'digits'         => ':attribute :digits অবশ্যই একটি সংখ্যার ডিজিট হতে হবে।',
    'digits_between' => ':attribute অবশ্যই :min এবং :max ডিজিট এর মধ্যে হতে হবে।',
    'dimensions'     => ':attribute অবৈধ ইমেজ মাত্রা রয়েছে।',
    'distinct'       => ':attribute এর স্থানে একটি নকল মান আছে।',
    'email'          => ':attribute একটি বৈধ ইমেইল ঠিকানা হতে হবে।',
    'ends_with'      => 'The :attribute must end with one of the following: :values.',
    'exists'         => 'নির্বাচিত :attribute টি অবৈধ।',
    'file'           => ':attribute একটি ফাইল হতে হবে।',
    'filled'         => ':attribute স্থানটি পূরণ করতে হবে।',
    'gt'             => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file'    => 'The :attribute must be greater than :value kilobytes.',
        'string'  => 'The :attribute must be greater than :value characters.',
        'array'   => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file'    => 'The :attribute must be greater than or equal :value kilobytes.',
        'string'  => 'The :attribute must be greater than or equal :value characters.',
        'array'   => 'The :attribute must have :value items or more.',
    ],
    'image'    => ':attribute একটি ইমেজ হতে হবে।',
    'in'       => 'নির্বাচিত :attribute টি অবৈধ।',
    'in_array' => ':attribute উপাদানটি :other এ খুঁজে পাওয়া যায়নি।.',
    'integer'  => ':attribute একটি পূর্ণসংখ্যা হতে হবে।',
    'ip'       => ':attribute একটি বৈধ  IP address হতে হবে।',
    'ipv4'     => ':attribute টি একটি বৈধ IPv4 address হতে হবে।',
    'ipv6'     => ':attribute টি একটি বৈধ IPv6 address হতে হবে।',
    'json'     => ':attribute একটি বৈধ JSON স্ট্রিং হতে হবে।',
    'lt'       => [
        'numeric' => 'The :attribute must be less than :value.',
        'file'    => 'The :attribute must be less than :value kilobytes.',
        'string'  => 'The :attribute must be less than :value characters.',
        'array'   => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file'    => 'The :attribute must be less than or equal :value kilobytes.',
        'string'  => 'The :attribute must be less than or equal :value characters.',
        'array'   => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => ' :attribute এর মান :max এর চেয়ে বড় হতে পারেনা।',
        'file'    => ':attribute এর মান :max কিলোবাইট এর চেয়ে বড় হতে পারেনা।',
        'string'  => ':attribute এর মান :max অক্ষর এর চেয়ে বড় হতে পারেনা।',
        'array'   => ':attribute এর মান :max টি উপাদানের চেয়ে বড় হতে পারেনা।',
    ],
    'mimes'     => ':attribute এর একটি ফাইল হতে হবে: :values।',
    'mimetypes' => ':attribute এর একটি ফাইল হতে হবে: :values।',
    'min'       => [
        'numeric' => ':attribute অবশ্যই :min এর চেয়ে ছোট হতে হবে।',
        'file'    => ':attribute অবশ্যই :min কিলোবাইট এর চেয়ে ছোট হতে হবে।',
        'string'  => ':attribute অবশ্যই :min অক্ষর এর চেয়ে ছোট হতে হবে।',
        'array'   => ':attribute অবশ্যই :min উপাদানের চেয়ে ছোট হতে হবে।',
    ],
    'not_in'               => 'নির্বাচিত :attribute অবৈধ।',
    'not_regex'            => 'The :attribute format is invalid.',
    'numeric'              => ':attribute একটি সংখ্যা হতে হবে।',
    'present'              => ':attribute ক্ষেত্র উপস্থিত থাকা আবশ্যক।',
    'regex'                => ':attribute বিন্যাস অবৈধ।',
    'required'             => ':attribute স্থানটি পূরণ করা বাধ্যতামূলক।',
    'required_if'          => ':attribute স্থানটি পূরণ করা বাধ্যতামূলক যেখানে :other হল :value।',
    'required_unless'      => ':attribute স্থানটি পূরণ করা বাধ্যতামূলক যদি না :other, :values তে উপস্থিত থাকে।',
    'required_with'        => ':attribute স্থানটি পূরণ করা বাধ্যতামূলক যখন  :values উপস্থিত।',
    'required_with_all'    => ':attribute স্থানটি পূরণ করা বাধ্যতামূলক যখন :values উপস্থিত।',
    'required_without'     => ':attribute স্থানটি পূরণ করা বাধ্যতামূলক যখন :values অনুপস্থিত।',
    'required_without_all' => ':attribute স্থানটি পূরণ করা বাধ্যতামূলক যখন সকল :values অনুপস্থিত।',
    'same'                 => ':attribute এবং :other অবশ্যই মিলতে হবে।',
    'size'                 => [
        'numeric' => ':attribute অবশ্যই :size হতে হবে।',
        'file'    => ':attribute অবশ্যই :size কিলোবাইট হতে হবে।',
        'string'  => ':attribute অবশ্যই :size অক্ষর হতে হবে।',
        'array'   => ':attribute অবশ্যই :size আইটেম হতে হবে।',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string'      => ':attribute একটি স্ট্রিং হতে হবে।',
    'timezone'    => ':attribute একটি বৈধ সময় অঞ্চল হতে হবে।',
    'unique'      => ':attribute ইতিমধ্যেই নেওয়া হয়েছে।',
    'uploaded'    => ':attribute আপলোড করতে ব্যর্থ হয়েছে।',
    'url'         => ':attribute বিন্যাস অবৈধ।',
    'uuid'        => 'The :attribute must be a valid UUID.',

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
