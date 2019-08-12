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

    'accepted'        => 'Dapat na tanggapin ang :attribute.',
    'active_url'      => 'Hindi valid na URL ang :attribute.',
    'after'           => 'Ang :attribute ay dapat na isang petsa pagkatapos ng :date.',
    'after_or_equal'  => 'Ang :attribute ay dapat na isang petsa na pagkatapos o katumbas ng :date.',
    'alpha'           => 'Mga titik lang dapat ang nilalaman ng :attribute.',
    'alpha_dash'      => 'Mag titik, numero, gitlling at underscore lang dapat ang nilalaman ng :attribute.',
    'alpha_num'       => 'Mag titik, numero, gitlling at underscore lang dapat ang nilalaman ng :attribute.',
    'array'           => 'Dapat na isang array ang :attribute.',
    'before'          => 'Ang :attribute ay dapat na isang petsa bago ang :date.',
    'before_or_equal' => 'Ang :attribute ay dapat na isang petsa bago ang o katumbas ng :date.',
    'between'         => [
        'numeric' => 'Ang :attribute ay dapat na nasa pagitan ng :min at :max.',
        'file'    => 'Ang :attribute ay dapat na nasa pagitan ng :min at :max (na) kilobyte.',
        'string'  => 'Ang :attribute ay dapat na nasa pagitan ng :min at :max (na) character.',
        'array'   => 'Ang :attribute ay dapat na nasa pagitan ng :min at :max (na) item.',
    ],
    'boolean'        => 'Dapat na true o false ang field na :attribute.',
    'confirmed'      => 'Hindi tumutugma ang pagkumpirma ng :attribute.',
    'date'           => 'Hindi valid na petsa ang :attribute.',
    'date_equals'    => 'Ang :attribute ay dapat na isang petsa na katumbas ng :date.',
    'date_format'    => 'Hindi tumutugma ang :attribute sa format na :format.',
    'different'      => 'Dapat na magkaiba ang :attribute at :other.',
    'digits'         => 'Ang :attribute ay dapat na :digits (na) digits',
    'digits_between' => 'Ang :attribute ay dapat na nasa pagitan ng :min at :max (na) digit.',
    'dimensions'     => 'May mga hindi valid na dimensyon ng larawan ang :attribute.',
    'distinct'       => 'May duplicate na value ang field na :attribute.',
    'email'          => 'Dapat na valid na email address ang :attribute.',
    'ends_with'      => 'The :attribute must end with one of the following: :values',
    'exists'         => 'Hindi valid ang piniling :attribute.',
    'file'           => 'Dapat na isang file ang :attribute.',
    'filled'         => 'Dapat na may value ang field na :attribute.',
    'gt'             => [
        'numeric' => 'Ang :attribute ay dapat na mas malaki sa :value.',
        'file'    => 'Ang :attribute ay dapat na mas malaki sa :value (na) kilobyte.',
        'string'  => 'Ang :attribute ay dapat na mas marami sa :value (na) character.',
        'array'   => 'Ang :attribute ay dapat na mayroong mahigit sa :value (na) item.',
    ],
    'gte' => [
        'numeric' => 'Ang :attribute ay dapat na mas malaki sa o katumbas ng :value.',
        'file'    => 'Ang :attribute ay dapat na mas malaki sa o katumbas ng :value (na) kilobyte.',
        'string'  => 'Ang :attribute ay dapat na mas marami sa o katumbas ng :value (na) character.',
        'array'   => 'Ang :attribute ay dapat na mayroong :value (na) item o higit pa.',
    ],
    'image'    => 'Dapat na isang larawan ang :attribute.',
    'in'       => 'Hindi valid ang piniling :attribute.',
    'in_array' => 'Hindi umiiral ang field na :attribute sa :other.',
    'integer'  => 'Dapat na isang integer ang :attribute.',
    'ip'       => 'Dapat na valid na IP address ang :attribute.',
    'ipv4'     => 'Dapat na valid na IPv4 address ang :attribute.',
    'ipv6'     => 'Dapat na IPv6 address ang :attribute.',
    'json'     => 'Dapat na valid na JSON string ang :attribute.',
    'lt'       => [
        'numeric' => 'Ang :attribute ay dapat na mas mababa sa :value.',
        'file'    => 'Ang :attribute ay dapat na mas mababa sa :value (na) kilobyte.',
        'string'  => 'Ang :attribute ay dapat na mas mababa sa :value (na) character.',
        'array'   => 'Ang :attribute ay dapat na may mas bababa sa :value (na) item.',
    ],
    'lte' => [
        'numeric' => 'Ang :attribute ay dapat na mas mababa sa o katumbas ng :value.',
        'file'    => 'Ang :attribute ay dapat na mas mababa sa o katumbas ng :value (na) kilobyte.',
        'string'  => 'Ang :attribute ay dapat na mas mababa sa o katumbas ng :value (na) character.',
        'array'   => 'Hindi dapat magkaroon ang :attribute ng higit sa :value (na) item.',
    ],
    'max' => [
        'numeric' => 'Ang :attribute ay hindi dapat mas malaki sa :max.',
        'file'    => 'Ang :attribute ay hindi dapat mas malaki sa :max (na) kilobyte.',
        'string'  => 'Ang :attribute ay hindi dapat mas malaki sa :max (na) character.',
        'array'   => 'Hindi dapat magkaroon ang :attribute ng mahigit sa :max (na) item.',
    ],
    'mimes'     => 'Ang :attribute ay dapat na isang file na may uri na: :values.',
    'mimetypes' => 'Ang :attribute ay dapat na file na may uri na: :values.',
    'min'       => [
        'numeric' => 'Ang :attribute ay dapat na hindi bababa sa :min.',
        'file'    => 'Ang :attribute ay dapat na hindi bababa sa :min (na) kilobyte.',
        'string'  => 'Ang :attribute ay dapat na hindi bababa sa :min (na) character.',
        'array'   => 'Ang :attribute ay dapat na may hindi bababa sa :min (na) item.',
    ],
    'not_in'               => 'Hindi valid ang piniling :attribute.',
    'not_regex'            => 'Hindi valid ang format na :attribute.',
    'numeric'              => 'Dapat na numero ang :attribute.',
    'present'              => 'Dapat na mayroon ng field na :attribute.',
    'regex'                => 'Hindi valid ang format na :attribute.',
    'required'             => 'Kinakailangan ang field na :attribute.',
    'required_if'          => 'Kinakailangan ang field na :attribute kapag ang :other ay :value.',
    'required_unless'      => 'Kinakailangan ang field na :attribute maliban kung ang :other ay nasa :values.',
    'required_with'        => 'Kinakailangan ang field na :attribute kapag mayroong :values.',
    'required_with_all'    => 'Kinakailangan ang field na :attribute kapag mayroong :values.',
    'required_without'     => 'Kinakailangan ang field na :attribute kapag wala ang anuman sa :values.',
    'required_without_all' => 'Kinakailangan ang field na :attribute kapag wala ang anuman sa :values.',
    'same'                 => 'Dapat na magtugma ang :attribute at :other.',
    'size'                 => [
        'numeric' => 'Ang :attribute ay dapat na :size.',
        'file'    => 'Ang :attribute ay dapat na :size (na) kilobyte.',
        'string'  => 'Ang :attribute ay dapat na :size (na) character.',
        'array'   => 'Dapat na maglaman ang :attribute ng :size (na) item.',
    ],
    'starts_with' => 'Dapat na magsimula ang :attribute sa isa sa sumusunod: :values',
    'string'      => 'Dapat na isang string ang :attribute.',
    'timezone'    => 'Dapat na valid na timezone ang :attribute.',
    'unique'      => 'Ginagamit na ang :attribute.',
    'uploaded'    => 'Hindi na-upload ang :attribute.',
    'url'         => 'Hindi valid ang format na :attribute.',
    'uuid'        => 'Dapat na valid na UUID ang :attribute.',

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
