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
    'accepted'        => 'මෙම :attribute පිළිගත යුතුය.',
    'active_url'      => 'මෙම :attribute වලංගු සබැඳි එකක් නොවේ.',
    'after'           => 'මෙම :attribute පසු දිනය විය යුතුය :date.',
    'after_or_equal'  => 'මෙම :attribute පසුව හෝ ඊට සමාන දිනයකි :date.',
    'alpha'           => 'මෙම :attribute අක්ෂර පමණක් අඩංගු විය හැක.',
    'alpha_dash'      => 'මෙම :attribute අක්ෂර, ඉලක්කම්, ඉරුම් සහ යටිඅඩර්ස් අඩංගු විය හැක..',
    'alpha_num'       => 'මෙම :attribute අක්ෂර, ඉලක්කම් පමණක් අඩංගු විය හැක.',
    'array'           => 'මෙම :attribute අරාව විය යුතුය.',
    'before'          => 'මෙම :attribute පෙර දින විය යුතුය :date.',
    'before_or_equal' => 'මෙම :attribute පෙර හෝ ඊට සමාන දිනයකි :date.',
    'between'         => [
        'numeric' => 'මෙම :attribute අතර විය යුතුය :min සහ :max.',
        'file'    => 'මෙම :attribute අතර විය යුතුය :min සහ :max කිලෝ බයිට ගණන.',
        'string'  => 'මෙම :attribute අතර විය යුතුය :min සහ :max ප්රමාණය.',
        'array'   => 'මෙම :attribute අතර තිබිය යුතුය :min සහ :max අයිතම.',
    ],
    'boolean'        => 'මෙම :attribute ක්ෂේත්ර සත්ය හෝ අසත්ය විය යුතුය.',
    'confirmed'      => 'මෙම :attribute තහවුරු කිරීම නොගැලපේ.',
    'date'           => 'මෙම :attribute වලංගු දිනය නොවේ.',
    'date_equals'    => 'මෙම :attribute දිනකට සමාන විය යුතුය :date.',
    'date_format'    => 'මෙම :attribute ආකෘතියට ගැළපෙන්නේ නැත :format.',
    'different'      => 'මෙම :attribute සහ :other වෙනස් විය යුතුය.',
    'digits'         => 'මෙම :attribute විය යුතුය :digits ඉලක්කම්.',
    'digits_between' => 'මෙම :attribute විය යුතුය අතර :min සහ :max ඉලක්කම්.',
    'dimensions'     => 'මෙම :attribute වලංගු නොවන පිළිබිඹුවක් ඇත.',
    'distinct'       => 'මෙම :attribute ක්ෂේත්රයේ අනුපිටපත් වටිනාකමක් ඇත.',
    'email'          => 'මෙම :attribute වලංගු විද්යුත් තැපැල් ලිපිනයක් විය යුතුය.',
    'ends_with'      => 'The :attribute must end with one of the following: :values',
    'exists'         => 'මෙම තෝරා ඇත :attribute අවලංගුයි.',
    'file'           => 'මෙම :attribute ගොනුවක් විය යුතුය.',
    'filled'         => 'මෙම :attribute ක්ෂේත්රයේ වටිනාකමක් තිබිය යුතුය.',
    'gt'             => [
        'numeric' => 'මෙම :attribute වඩා විශාල විය යුතුය :value.',
        'file'    => 'මෙම :attribute වඩා විශාල විය යුතුය :value කිලෝ බයිට ගණන.',
        'string'  => 'මෙම :attribute වඩා විශාල විය යුතුය :value ප්රමාණය.',
        'array'   => 'මෙම :attribute වඩා වැඩි විය යුතුය :value අයිතම.',
    ],
    'gte' => [
        'numeric' => 'මෙම :attribute වඩා වැඩි හෝ සමාන විය යුතුය :value.',
        'file'    => 'මෙම :attribute වඩා වැඩි හෝ සමාන විය යුතුයl :value කිලෝ බයිට ගණන.',
        'string'  => 'මෙම :attribute වඩා වැඩි හෝ සමාන විය යුතුය :value ප්රමාණය.',
        'array'   => 'මෙම :attribute තිබිය යුතු :value අයිතම හෝ ඊට වැඩි.',
    ],
    'image'    => 'මෙම :attribute රූපයක් විය යුතුය.',
    'in'       => 'මෙම තෝරා ඇත :attribute අවලංගුයි.',
    'in_array' => 'මෙම :attribute ක්ෂේත්රයේ නොපවතින :other.',
    'integer'  => 'මෙම :attribute පූර්ණ සංඛ්යාවක් විය යුතුය.',
    'ip'       => 'මෙම :attribute වලංගු IP ලිපිනයක් තිබිය යුතුය.',
    'ipv4'     => 'මෙම :attribute වලංගු IPv4 ලිපිනය විය යුතුය.',
    'ipv6'     => 'මෙම :attribute වලංගු IPv6 ලිපිනය විය යුතුය.',
    'json'     => 'මෙම :attribute වලංගු JSON පේළියකි විය යුතුය.',
    'lt'       => [
        'numeric' => 'මෙම :attribute වඩා අඩු විය යුතුය :value.',
        'file'    => 'මෙම :attribute වඩා අඩු විය යුතුය :value කිලෝ බයිට ගණන.',
        'string'  => 'මෙම :attribute වඩා අඩු විය යුතුය :value ප්රමාණය..',
        'array'   => 'මෙම :attribute වඩා අඩු විය යුතුය :value අයිතම.',
    ],
    'lte' => [
        'numeric' => 'මෙම :attribute අඩු හෝ සමාන විය යුතුය :value.',
        'file'    => 'මෙම :attribute අඩු හෝ සමාන විය යුතුය :value කිලෝ බයිට ගණන..',
        'string'  => 'මෙම :attribute අඩු හෝ සමාන විය යුතුය :value ප්රමාණය..',
        'array'   => 'මෙම :attribute වඩා වැඩි නොවිය යුතුය :value අයිතම.',
    ],
    'max' => [
        'numeric' => 'මෙම :attribute වඩා විශාල විය නොහැකිය :max.',
        'file'    => 'මෙම :attribute වඩා විශාල විය නොහැකිය :max කිලෝ බයිට ගණන..',
        'string'  => 'මෙම :attribute වඩා විශාල විය නොහැකිය :max ප්රමාණය..',
        'array'   => 'මෙම :attribute වඩා වැඩි නොවිය හැක :max අයිතම.',
    ],
    'mimes'     => 'මෙම :attribute වර්ගයේ ගොනුවක් විය යුතුය: :values.',
    'mimetypes' => 'මෙම :attribute වර්ගයේ ගොනුවක් විය යුතුය: :values.',
    'min'       => [
        'numeric' => 'මෙම :attribute අවම වශයෙන් විය යුතුය :min.',
        'file'    => 'මෙම :attribute අවම වශයෙන් විය යුතුය :min කිලෝ බයිට ගණන..',
        'string'  => 'මෙම :attribute අවම වශයෙන් විය යුතුය :min ප්රමාණය..',
        'array'   => 'මෙම :attribute අවම වශයෙන් තිබිය යුතුය :min අයිතම.',
    ],
    'not_in'               => 'මෙම තෝරා ඇත :attribute අවලංගුයි.',
    'not_regex'            => 'මෙම :attribute ආකෘතිය අවලංගුයි.',
    'numeric'              => 'මෙම :attribute අංකයක් විය යුතුය.',
    'present'              => 'මෙම :attribute ක්ෂේත්රයයි තිබිය යුතුය.',
    'regex'                => 'මෙම :attribute ආකෘතිය අවලංගුයි.',
    'required'             => 'මෙම :attribute ක්ෂේත්රයයි අවශ්යයි.',
    'required_if'          => 'මෙම :attribute ක්ෂේත්රයයි අවශ්යයි එය :other මෙය :value.',
    'required_unless'      => 'මෙම :attribute ක්ෂේත්රයයි අවශ්යයි මිස :other මෙය :values.',
    'required_with'        => 'මෙම :attribute ක්ෂේත්රයයි අවශ්යයි එය :values තිබිය යුතුය.',
    'required_with_all'    => 'මෙම :attribute ක්ෂේත්රයයි අවශ්යයි එය :values තිබිය යුතුය.',
    'required_without'     => 'මෙම :attribute ක්ෂේත්රයයි අවශ්යයි එය :values තිබිය යුතුය.',
    'required_without_all' => 'මෙම :attribute ක්ෂේත්රයයි අවශ්යයි එය කිසිවක් of :values තිබිය යුතුය.',
    'same'                 => 'මෙම :attribute සහ :other ගැලපිය යුතුයි.',
    'size'                 => [
        'numeric' => 'මෙම :attribute විය යුතුය :size.',
        'file'    => 'මෙම :attribute විය යුතුය :size කිලෝ බයිට ගණන..',
        'string'  => 'මෙම :attribute විය යුතුය :size ප්රමාණය..',
        'array'   => 'මෙම :attribute must contain :size අයිතම.',
    ],
    'starts_with' => 'මෙම :attribute පහත සඳහන් එකක් සමඟ ආරම්භ කළ යුතුය: :values',
    'string'      => 'මෙම :attribute පේළියකි විය යුතුය.',
    'timezone'    => 'මෙම :attribute වලංගු කලාපයකි විය යුතුය.',
    'unique'      => 'මෙම :attribute දැනටමත් අරගෙන තියෙන්නේ.',
    'uploaded'    => 'මෙම :attribute උඩුගත කිරීම අසාර්ථක විය.',
    'url'         => 'මෙම :attribute ආකෘතිය අවලංගුයි.',
    'uuid'        => 'මෙම :attribute වලංගු UUID විය යුතුය.',
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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */
    'attributes' => [
        'name'                  => 'නාමය',
        'username'              => 'පරිශීලක නාමය',
        'email'                 => 'විද්යුත් තැපෑල',
        'first_name'            => 'මුල් නම',
        'last_name'             => 'අවසන් නම',
        'password'              => 'රහස් පදය',
        'password_confirmation' => 'මුරපදය තහවුරු කිරීම',
        'city'                  => 'නගරය',
        'country'               => 'රට',
        'address'               => 'ලිපිනය',
        'phone'                 => 'දුරකථන',
        'mobile'                => 'ජංගම දුරකථන',
        'age'                   => 'වයස',
        'sex'                   => 'ස්ත්රී පුරුෂ භාවය',
        'gender'                => 'ස්ත්රී පුරුෂ භාවය',
        'year'                  => 'වර්ෂය',
        'month'                 => 'මාසය',
        'day'                   => 'දවස',
        'hour'                  => 'පැය',
        'minute'                => 'විනාඩියක්',
        'second'                => 'දෙවැනි',
        'title'                 => 'ශීර්ෂය',
        'content'               => 'අන්තර්ගතය',
        'body'                  => 'කරුණු',
        'description'           => 'විස්තර',
        'excerpt'               => 'උපුටාගන්නා ලදි',
        'date'                  => 'දිනය',
        'time'                  => 'වේලාව',
        'subject'               => 'විෂය',
        'message'               => 'පණිවුඩය',
        'available'             => 'ලබා ගත හැකිය',
        'size'                  => 'ප්රමාණය',
    ],
];
