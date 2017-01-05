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

    'accepted'             => ':attribute গ্রহণ করা আবশ্যক.',
    'active_url'           => 'এই :attribute একটি বৈধ URL নয়.',
    'after'                => ':date :attribute পরে একটি তারিখ হতে হবে.',
    'after_or_equal'       => 'The :attribute must be a date after or equal to :date.',
    'alpha'                => ':attribute শুধুমাত্র অক্ষর থাকতে পারে.',
    'alpha_dash'           => ':attribute শুধুমাত্র অক্ষর, সংখ্যা, এবং ড্যাশ থাকতে পারে.',
    'alpha_num'            => ':attribute শুধুমাত্র বর্ণ ও সংখ্যা থাকতে পারে.',
    'array'                => ':attribute একটি অ্যারে হতে হবে.',
    'before'               => ':date :attribute সামনে একটি তারিখ হতে হবে.',
    'before_or_equal'      => 'The :attribute must be a date before or equal to :date.',
    'between'              => [
        'numeric' => ':min and :max :attribute মধ্যে হতে হবে.',
        'file'    => ':min and :max কিলোবাইট :attribute মধ্যে হতে হবে.',
        'string'  => ':min and :max অক্ষর :attribute মধ্যে হতে হবে.',
        'array'   => ':min and :max আইটেম :attribute মধ্যে হতে হবে.',
    ],
    'boolean'              => ':attribute স্থানে  সত্য বা মিথ্যা হতে হবে.',
    'confirmed'            => ':attribute নিশ্চিতকরণ এর  সাথে মিলছে না.',
    'date'                 => ':attribute একটি বৈধ তারিখ নয়.',
    'date_format'          => ':attribute বিন্যাস মিলছে না :format.',
    'different'            => ':attribute এবং :other আলাদা হতে হবে.',
    'digits'               => ':attribute করা আবশ্যক সংখ্যার ডিজিট :digits',
    'digits_between'       => ':min and :max ডিজিট :attribute মধ্যে হতে হবে.',
    'dimensions'           => ':attribute অবৈধ ইমেজ মাত্রা রয়েছে.',
    'distinct'             => ':attribute ক্ষেত্রের একটি ডুপ্লিকেট মূল্য আছে.',
    'email'                => ':attribute একটি বৈধ ইমেইল ঠিকানা হতে হবে.',
    'exists'               => 'নির্বাচিত :attribute অবৈধ.',
    'file'                 => ':attribute একটি ফাইল হতে হবে.',
    'filled'               => ':attribute ক্ষেত্র প্রয়োজন বোধ করা হয়.',
    'image'                => ':attribute একটি ইমেজ হতে হবে.',
    'in'                   => 'নির্বাচিত :attribute অবৈধ.',
    'in_array'             => ':other :attribute ক্ষেত্রের অস্তিত্ব নেই.',
    'integer'              => ':attribute একটি পূর্ণসংখ্যা হতে হবে.',
    'ip'                   => ':attribute একটি বৈধ  IP address হতে হবে.',
    'json'                 => ':attribute একটি বৈধ JSON স্ট্রিং হতে হবে.',
    'max'                  => [
        'numeric' => ':max :attribute তার চেয়ে অনেক বেশী হতে পারে না.',
        'file'    => ':max কিলোবাইট:attribute তার চেয়ে অনেক বেশী হতে পারে না.',
        'string'  => ':max অক্ষর:attribute তার চেয়ে অনেক বেশী হতে পারে না.',
        'array'   => ':max আইটেম :attribute চেয়ে বেশি থাকতে পারে না.',
    ],
    'mimes'                => ':attribute এর একটি ফাইল হতে হবে: :values.',
    'mimetypes'            => ':attribute এর একটি ফাইল হতে হবে: :values.',
    'min'                  => [
        'numeric' => ':attribute হবে অন্তত :min.',
        'file'    => ':attribute হবে অন্তত :min কিলোবাইট.',
        'string'  => ':attribute অন্তত হতে হবে :min অক্ষর.',
        'array'   => ':attribute থাকতে হবে অন্তত :min আইটেম.',
    ],
    'not_in'               => 'নির্বাচিত :attribute অবৈধ.',
    'numeric'              => ':attribute একটি সংখ্যা হতে হবে.',
    'present'              => ':attribute ক্ষেত্র উপস্থিত থাকা আবশ্যক.',
    'regex'                => ':attribute বিন্যাস অবৈধ.',
    'required'             => ':attribute ক্ষেত্র প্রয়োজন বোধ করা হয়.',
    'required_if'          => ':attribute ক্ষেত্র প্রয়োজন বোধ করা হয় যখন :other হল :value.',
    'required_unless'      => ':values অন্যান্য রয়েছে যদি না :attribute  ক্ষেত্র প্রয়োজন বোধ করা হয়.',
    'required_with'        => ':attribute ক্ষেত্র প্রয়োজন বোধ করা হয় যখন  :values উপস্থিত.',
    'required_with_all'    => ':attribute ক্ষেত্র প্রয়োজন বোধ করা হয় যখন :values উপস্থিত.',
    'required_without'     => ':attribute ক্ষেত্র প্রয়োজন হলে :values উপস্থিত না.',
    'required_without_all' => ':attribute ক্ষেত্র প্রয়োজন বোধ করা হয় যখন কেউ :values উপস্থিত হয়.',
    'same'                 => ':attribute এবং :other মেলানো.',
    'size'                 => [
        'numeric' => ':attribute করা আবশ্যক :size.',
        'file'    => ':attribute করা আবশ্যক :size কিলোবাইট.',
        'string'  => ':attribute করা আবশ্যক :size অক্ষর.',
        'array'   => ':attribute ধারণ করতে হবে :size আইটেম.',
    ],
    'string'               => ':attribute একটি স্ট্রিং হতে হবে.',
    'timezone'             => ':attribute একটি বৈধ জোন হতে হবে.',
    'unique'               => ':attribute ইতিমধ্যেই নেওয়া হয়েছে.',
    'uploaded'             => ':attribute আপলোড করতে ব্যর্থ হয়েছে.',
    'url'                  => ':attribute বিন্যাস অবৈধ.',

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

    'custom'               => [
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

    'attributes'           => [],

];
