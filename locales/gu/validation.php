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

    'accepted'              => ':attribute સ્વીકૃત હોવું જોઈએ.',
    'active_url'            => ':attribute માન્ય URL નથી.',
    'after'                 => ':attribute પછી તારીખ હોવી જોઈએ :તારીખ.',
    'after_or_equal'        => ':attribute પછી તારીખ કે સમાંતર હોવું જોઈએ :તારીખ.',
    'alpha'                 => ':attribute માત્ર અક્ષરોનો જ સમાવેશ કરી શકે.',
    'alpha_dash'            => ':attribute માત્ર અક્ષરો, આંકડાઓ, ડેશ અને ની નીચે લીટીનો જ સમાવેશ કરી શકે.',
    'alpha_num'             => ':attribute માત્ર અક્ષરો તથા આંકડાઓનો જ સમાવેશ કરી શકે.',
    'array'                 => ':attribute ગોઠવણીમાં હોવું જોઈએ.',
    'before'                => ':attribute પહેલાં તારીખ હોવી જોઈએ :તારીખ.',
    'before_or_equal'       => ':attribute પહેલાં તારીખ કે સમાંતર હોવું જોઈએ :તારીખ.',
    'between'               => [
        'numeric' => ':attribute ની વચ્ચે હોવું જોઈએ :min અને :max.',
        'file'    => ':attribute ની વચ્ચે હોવું જોઈએ :min અને :max કિલોબાઇટ્સ.',
        'string'  => ':attribute ની વચ્ચે હોવું જોઈએ :min અને :max અક્ષરો.',
        'array'   => ':attribute ની વચ્ચે હોવું જોઈએ :min અને :max વસ્તુઓ.',
    ],	
    'boolean'               => ':attribute પ્રવૃત્તિ ક્ષેત્ર ખરું કે ખોટું હોવું જોઈએ.',
    'confirmed'             => ':attribute પુષ્ટિકરણ બંધબેસતું નથી.',
    'date'                  => ':attribute માન્ય તારીખ નથી.',
    'date_equals'           => ':attribute સમાંતર તારીખ હોવી જોઈએ :તારીખ.',
    'date_format'           => ':attribute ગોઠવણ સાથે બંધબેસતું નથી :ગોઠવણ.',
    'different'             => ':attribute અને :other અલગ હોવું જોઈએ.',
    'digits'                => ':attribute હોવું જોઈએ  :digits અંક.',
    'digits_between'        => ':attribute વચ્ચે હોવું જોઈએ :min અને :max અંક.',
    'dimensions'            => ':attribute છબીનું પરિમાણ અમાન્ય છે.',
    'distinct'              => ':attribute પ્રવૃત્તિ ક્ષેત્રનું નકલી મૂલ્ય છે.',
    'email'                 => ':attribute માન્ય ઈમેઈલ એડ્રેસ હોવું જોઈએ.',
    'ends_with'             => ':attribute નીચેમાંથી એક પ્રમાણે પૂરું થતું હોવું જોઈએ :values.',
    'exists'                => 'પસંદ કરાયેલ :attribute અમાન્ય છે.',
    'file'                  => ':attribute એક ફાઈલ હોવી જોઈએ.',
    'filled'                => ':attribute પ્રવૃત્તિ ક્ષેત્રનું મૂલ્ય હોવું જોઈએ.',
    'gt'                    => [
        'numeric' => ':attribute થી વિશેષ હોવું જોઈએ :value.',
        'file'    => ':attribute થી વિશેષ હોવું જોઈએ :value કિલો બાઇટ્સ.',
        'string'  => ':attribute થી વિશેષ હોવું જોઈએ :value મૂલ્ય અક્ષરો.',
        'array'   => ':attribute ના કરતાં વિશેષ :value વસ્તુઓ.',
    ],	
    'gte'                   => [
        'numeric' => ':attribute થી વિશેષ અથવા સમાંતર હોવું જોઈએ :value.',
        'file'    => ':attribute થી વિશેષ અથવા સમાંતર હોવું જોઈએ :value કિલો બાઇટ્સ.',
        'string'  => ':attribute થી વિશેષ અથવા સમાંતર હોવું જોઈએ :value મૂલ્ય અક્ષરો.',
        'array'   => ':attribute હોવું જોઈએ :value વસ્તુઓ કે વિશેષ.',
    ],	
    'image'                 => ':attribute છબી હોવી જોઈએ.',
    'in'                    => ':attribute અમાન્ય છે.',
    'in_array'              => ':attribute માં પ્રવૃત્તિ ક્ષેત્ર અસ્તિત્વ ધરાવતું નથી :other.',
    'integer'               => ':attribute પૂર્ણ સંખ્યા હોવી જોઈએ.',
    'ip'                    => ':attribute માન્ય IP address હોવું જોઈએ.',
    'ipv4'                  => ':attribute માન્ય IPv4 address હોવું જોઈએ.',
    'ipv6'                  => ':attribute માન્ય IPv6 address હોવું જોઈએ.',
    'json'                  => ':attribute માન્ય JSON શબ્દમાળા હોવી જોઈએ.',
    'lt'                    => [
        'numeric' => ':attribute ઓછું હોવું જોઈએ :value.',
        'file'    => ':attribute ઓછું હોવું જોઈએ :value કિલો બાઇટ્સ.',
        'string'  => ':attribute ઓછું હોવું જોઈએ :value અક્ષરો.',
        'array'   => ':attribute ઓછું હોવું જોઈએ :value વસ્તુઓ.',
    ],	
    'lte'                   => [
        'numeric' => ':attribute ઓછું કે સમાંતર હોવું જોઈએ :value.',
        'file'    => ':attribute ઓછું કે સમાંતર હોવું જોઈએ :value કિલો બાઇટ્સ.',
        'string'  => ':attribute ઓછું કે સમાંતર હોવું જોઈએ :value અક્ષરો.',
        'array'   => ':attribute ના કરતા વધુ ન હોવું જોઈએ :value વસ્તુઓ.',
    ],	
    'max'                   => [
        'numeric' => ':attribute મોટું ન હોઈ શકે :max.',
        'file'    => ':attribute મોટું ન હોઈ શકે :max કિલો બાઇટ્સ.',
        'string'  => ':attribute મોટું ન હોઈ શકે :max અક્ષરો.',
        'array'   => ':attribute ના કરતાં વધુ ન હોઈ શકે :max વસ્તુઓ.',
    ],	
    'mimes'                 => ':attribute પ્રકારની ફાઈલ હોવી જોઈએ :values.',
    'mimetypes'             => ':attribute પ્રકારની ફાઈલ હોવી જોઈએ :values.',
    'min'                   => [
        'numeric' => ':attribute ઓછામાં ઓછું હોવું જોઈએ :min.',
        'file'    => ':attribute ઓછામાં ઓછું હોવું જોઈએ :min કિલો બાઇટ્સ.',
        'string'  => ':attribute ઓછામાં ઓછું હોવું જોઈએ :min અક્ષરો.',
        'array'   => ':attribute  હોવું જ જોઈએ :min વસ્તુઓ.',
    ],	
    'not_in'                => 'પસંદ કરાયેલ :attribute અમાન્ય છે.',
    'not_regex'             => ':attribute અમાન્ય ગોઠવણ છે.',
    'numeric'               => ':attribute આંક હોવો જોઈએ.',
    'present'               => ':attribute પ્રવૃત્તિ ક્ષેત્ર હાજર હોવું જોઈએ.',
    'regex'                 => ':attribute અમાન્ય ગોઠવણ છે.',
    'required'              => ':attribute પ્રવૃત્તિ ક્ષેત્ર આવશ્યક છે.',
    'required_if'           => ':attribute પ્રવૃત્તિ ક્ષેત્ર આવશ્યક છે જ્યારે :other છે :value.',
    'required_unless'       => ':attribute પ્રવૃત્તિ ક્ષેત્ર આવશ્યક છે સિવાય :other માં છે :values.',
    'required_with'         => ':attribute પ્રવૃત્તિ ક્ષેત્ર આવશ્યક છે જ્યારે :values હાજર હોય.',
    'required_with_all'     => ':attribute પ્રવૃત્તિ ક્ષેત્ર આવશ્યક છે જ્યારે :values હાજર હોય.',
    'required_without'      => ':attribute પ્રવૃત્તિ ક્ષેત્ર આવશ્યક છે જ્યારે :values હાજર ન હોય.',
    'required_without_all'  => ':attribute પ્રવૃત્તિ ક્ષેત્ર આવશ્યક છે જ્યારે કશું પણ :values હાજર હોય.',
    'same'                  => ':attribute અને :other બંધબેસતું હોવું જોઈએ.',
    'size'                  => [
        'numeric' => ':attribute હોવું જોઈએ :કદ.',
        'file'    => ':attribute હોવું જોઈએ :size કિલો બાઇટ્સ.',
        'string'  => ':attribute હોવું જોઈએ :size અક્ષરો.',
        'array'   => ':attribute સમાવેશ કરતું હોવું જોઈએ : કદ વસ્તુઓ.',
    ],	
    'starts_with'           => ':attribute નીચેમાંથી કોઈએક વડે શરૂ થતું હોવું જોઈએ :values.',
    'string'                => ':attribute શબ્દમાળા હોવી જોઈએ.',
    'timezone'              => ':attribute  માન્ય પરિક્ષેત્ર હોવું જોઈએ.',
    'unique'                => ':attribute પહેલેથી લઈ લેવામાં આવેલ છે.',
    'uploaded'              => ':attribute અપલોડ થવામાં નિષ્ફળ.',
    'url'                   => ':attribute ગોઠવણ અમાન્ય છે.',
    'uuid'                  => ':attribute માન્ય UUID હોવું જોઈએ.',

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
        'address'               => 'એડ્રેસ',
        'age'                   => 'વય',
        'available'             => 'ઉપલબ્ધ',
        'body'                  => 'મુખ્ય ભાગ',
        'city'                  => 'શહેર',
        'content'               => 'સામગ્રી',
        'country'               => 'દેશ',
        'date'                  => 'તારીખ',
        'day'                   => 'દિવસ',
        'description'           => 'વર્ણન',
        'email'                 => 'ઈમેઈલ',
        'excerpt'               => 'ટૂંકસાર',
        'first_name'            => 'પ્રથમ_નામ',
        'gender'                => 'જાતિ',
        'hour'                  => 'કલાક',
        'last_name'             => 'અંતિમ_નામ',
        'message'               => 'સંદેશ',
        'minute'                => 'મિનિટ',
        'mobile'                => 'મોબાઈલ',
        'month'                 => 'મહિનો',
        'name'                  => 'નામ',
        'password'              => 'પાસવર્ડ',
        'password_confirmation' => 'પાસવર્ડ_પુષ્ટિકરણ',
        'phone'                 => 'ફોન',
        'province'              => 'પ્રદેશ',
        'second'                => 'સેકંડ',
        'sex'                   => 'જાતિ',
        'size'                  => 'કદ',
        'subject'               => 'વિષય',
        'terms'                 => 'શરતો',
        'text'                  => 'લખાણ',
        'time'                  => 'સમય',
        'title'                 => 'શીર્ષક',
        'username'              => 'વપરાશકર્તા નામ',
        'year'                  => 'વર્ષ',
    ],
];
