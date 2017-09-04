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

    'accepted'             => ':Attribute баталсан байх шаардлагатай.',
    'active_url'           => ':Attribute талбарт зөв URL хаяг оруулна уу.',
    'after'                => ':Attribute талбарт :date-с хойш огноо оруулна уу.',
    'after_or_equal'       => ':Attribute талбарт :date эсвэл түүнээс хойш огноо оруулна уу.',
    'alpha'                => ':Attribute талбарт латин үсэг оруулна уу.',
    'alpha_dash'           => ':Attribute талбарт латин үсэг, тоо болон зураас оруулах боломжтой.',
    'alpha_num'            => ':Attribute талбарт латин үсэг болон тоо оруулах боломжтой.',
    'array'                => ':Attribute талбар массив байх шаардлагатай.',
    'before'               => ':Attribute талбарт :date-с өмнөх огноо оруулна уу.',
    'before_or_equal'      => ':attribute талбарт :date эсвэл түүнээс өмнөх огноо оруулна уу.',
    'between'              => [
        'numeric' => ':Attribute талбарт :min-:max хооронд тоо оруулна уу.',
        'file'    => ':Attribute талбарт :min-:max килобайт хэмжээтэй файл оруулна уу.',
        'string'  => ':Attribute талбарт :min-:max урттай текст оруулна уу.',
        'array'   => ':Attribute массивт :min-:max элемэнт байх шаардлагатай.',
    ],
    'boolean'              => ':Attribute талбарын утга үнэн эсвэл худал байх шаардлагатай.',
    'confirmed'            => ':Attribute талбарын баталагажуулалт тохирохгүй байна.',
    'date'                 => ':Attribute талбарт оруулсан огноо буруу байна.',
    'date_format'          => ':Attribute талбарт :format хэлбэртэй огноо оруулна уу.',
    'different'            => ':Attribute талбарт :other -с өөр утга оруулах шаардлагатай.',
    'digits'               => ':Attribute талбарт дараах цифрүүдээс оруулах боломжтой. :digits.',
    'digits_between'       => ':Attribute талбарт :min-:max хоорондох цифр оруулах боломжтой.',
    'dimensions'           => ':Attribute талбарийн зургийн хэмжээс буруу байна.',
    'distinct'             => ':Attribute талбарт ялгаатай утга оруулах шаардлагатай.',
    'email'                => ':Attribute талбарт зөв и-мэйл хаяг оруулах шаардлагатай.',
    'exists'               => 'Сонгогдсон :attribute буруу байна.',
    'file'                 => ':Attribute талбарт файл оруулах шаардлагатай.',
    'filled'               => ':Attribute талбар шаардлагатай.',
    'image'                => ':Attribute талбарт зураг оруулна уу.',
    'in'                   => 'Сонгогдсон :attribute буруу байна.',
    'in_array'             => ':Attribute талбарт оруулсан утга :other -д байхгүй байна.',
    'integer'              => ':Attribute талбарт бүхэл тоо оруулах шаардлагатай.',
    'ip'                   => ':Attribute талбарт зөв IP хаяг оруулах шаардлагатай.',
    'json'                 => ':Attribute талбарт зөв JSON тэмдэгт мөр оруулах шаардлагатай.',
    'max'                  => [
        'numeric' => ':Attribute талбарт :max буюу түүнээс бага утга оруулна уу.',
        'file'    => ':Attribute талбарт :max килобайтаас бага хэмжээтэй файл оруулна уу.',
        'string'  => ':Attribute талбарт :max-с бага урттай текст оруулна уу.',
        'array'   => ':Attribute талбарт хамгийн ихдээ :max элемэнт оруулах боломжтой.',
    ],
    'mimes'                => ':Attribute талбарт дараах төрлийн файл оруулах боломжтой: :values.',
    'mimetypes'            => ':Attribute талбарт дараах төрлийн файл оруулах боломжтой: :values.',
    'min'                  => [
        'numeric' => ':Attribute талбарт :min буюу түүнээс их тоо оруулна уу.',
        'file'    => ':Attribute талбарт :min килобайтаас их хэмжээтэй файл оруулна уу.',
        'string'  => ':Attribute талбарт :min буюу түүнээс их үсэг бүхий текст оруулна уу.',
        'array'   => ':Attribute талбарт хамгийн багадаа :min элемэнт оруулах боломжтой.',
    ],
    'not_in'               => 'Буруу :attribute сонгогдсон байна.',
    'numeric'              => ':Attribute талбарт тоон утга оруулна уу.',
    'present'              => ':Attribute талбар байх шаардлагатай.',
    'regex'                => ':Attribute талбарт оруулсан утга буруу байна.',
    'required'             => ':Attribute талбар шаардлагатай.',
    'required_if'          => 'Хэрэв :other :value бол :attribute табларт утга оруулах шаардлагатай.',
    'required_unless'      => ':other :values дотор байхгүй бол :attribute талбарт утга оруулах шаардлагатай.',
    'required_with'        => ':values утгуудийн аль нэг байвал :attribute талбар шаардлагатай.',
    'required_with_all'    => ':values утгууд байвал :attribute талбар шаардлагатай.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => ':Attribute :size хэмжээтэй байх шаардлагатай.',
        'file'    => ':Attribute :size килобайт хэмжээтэй байх шаардлагатай.',
        'string'  => ':Attribute :size тэмдэгтийн урттай байх шаардлагатай.',
        'array'   => ':Attribute :size элемэнттэй байх шаардлагатай.',
    ],
    'string'               => ':Attribute талбарт текст оруулна уу.',
    'timezone'             => ':Attribute талбарт зөв цагийн бүс оруулна уу.',
    'unique'               => 'Оруулсан :attribute аль хэдий нь бүртгэгдсэн байна.',
    'uploaded'             => ':Attribute талбарт оруулсан файлыг хуулхад алдаа гарлаа.',
    'url'                  => ':Attribute зөв url хаяг оруулна уу.',

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

    'attributes' => [
        //
    ],

];
