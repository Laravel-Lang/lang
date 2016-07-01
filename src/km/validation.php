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

    'accepted'             => ':attribute ត្រូវបានទទួលយក។',
    'active_url'           => ':attribute មិនមែនជា URL ត្រឹមត្រូវឡើយ។',
    'after'                => ':attribute ត្រូវតែមានកាលបរិច្ឆេទបន្ទាប់ពី :date។',
    'alpha'                => ':attribute អាចមានអក្សរតែប៉ុណ្ណោះ។',
    'alpha_dash'           => ':attribute អាចមានតែអក្សរ លេខ និងសហសញ្ញា(-)។',
    'alpha_num'            => ':attribute អាចមានតែអក្សរ និងលេខ។',
    'array'                => ':attribute ត្រូវតែជា អារេ។',
    'before'               => ':attribute ត្រូវតែមានកាលបរិច្ឆេទមុន :date។',
    'between'              => [
        'numeric' => ':attribute ត្រូវតែមានរវាង :min និង :max។',
        'file'    => ':attribute ត្រូវតែមានរវាង :min និង :max គីឡូបៃ។',
        'string'  => ':attribute ត្រូវតែមានរវាង :min និង :max តួអក្សរ។',
        'array'   => ':attribute ត្រូវតែមានធាតុរវាង :min និង :max។',
    ],
    'boolean'              => 'The :attribute field must be true or false',
    'confirmed'            => ':attribute ការបញ្ជាក់មិនផ្គូផ្គង។',
    'date'                 => ':attribute គឺមិនមែនជាកាលបរិច្ឆេទត្រឹមត្រូវ។',
    'date_format'          => ':attribute មិនត្រឹមត្រូវនិងទំរង :format​នេះ។',
    'different'            => ':attribute និង :other ត្រូវតែបញ្ជាក់។',
    'digits'               => ':attribute ត្រូវជាខ្ទុង :digits។',
    'digits_between'       => ':attribute ត្រូវចាប់ពីខ្ទុង :min​ទៅ :max។',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => ':attribute ទំរង់នេះមិនត្រឹមត្រូវ។',
    'exists'               => 'ការជ្រើសរើស :attribute ត្រឹមត្រូវ។',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => 'ទំរង់ :attribute នេះគឺទាមទារឲ្យមាន។',
    'image'                => ':attribute ត្រូវតៃជារូបភាព។',
    'in'                   => 'ការជ្រើសរើស :attribute មិនត្រឹមត្រូវ។',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => ':attribute ត្រូវតែជាចំនួនគត់។',
    'ip'                   => ':attribute ត្រូវតែជា IP address​ត្រឹមត្រូវ។',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => ':attribute មិនត្រូវធំជាង :max​។',
        'file'    => ':attribute មិនត្រូវធំជាង :max គីឡូបៃ។',
        'string'  => ':attribute មិនត្រូវធំជាង :max តួអក្សរ។',
        'array'   => ':attribute មិនត្រូវច្រើនជាងធាតុនេះ :max។',
    ],
    'mimes'                => ':attribute ត្រូវតែជាប្រភេទឯកសារ type: :values នេះ។',
    'min'                  => [
        'numeric' => ':attribute ត្រូវតែតូចជាង :min។',
        'file'    => ':attribute ត្រូវតៃតួចជាង :min គីឡូបៃ។',
        'string'  => ':attribute ត្រូវតែតូចជាង :min តួអក្សរ។',
        'array'   => ':attribute ត្រូវតែតិចជាងធាតុនេះ :min។',
    ],
    'not_in'               => 'ការជ្រើសរើស :attribute គឺត្រឹមត្រូវ។',
    'numeric'              => ':attribute ត្រូវតែជាលេខ។',
    'present'              => 'The :attribute field must be present.',
    'regex'                => ':attribute ទំរងមិនត្រឹមត្រូវ។',
    'required'             => 'ទំរង់ :attribute នេះគឺទាមទារឲ្យមាន។',
    'required_if'          => 'ទំរង់ :attribute នេះគឺទាមទារនៅពេល :other គឺ :value​។',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'ទំរង់ :attribute នេះគឺទាមទារនៅពេល :values ត្រូវបង្ហាញ។',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'ទំរង់ :attribute នេះគឺទាមទារនៅពេល :values មិនត្រូវបង្ហាញ។',
    'required_without_all' => 'ទំរង់ :attribute នេះគឺត្រូវបានទាមទារពេលគ្មាន :values បានបង្ហាញ។',
    'same'                 => 'ទំរង់ :attribute និង :other ត្រូវតែដូចគ្នា។',
    'size'                 => [
        'numeric' => ':attribute ត្រូវតែ :size។',
        'file'    => ':attribute ត្រូវតែ :size គីឡូបៃ។',
        'string'  => ':attribute ត្រូវតែ :size តួអក្សរ។',
        'array'   => ':attribute ត្រូវតែមានទំហំ :size។',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => ':attribute ត្រូវបានប្រើរួចហើយ។',
    'url'                  => ':attribute ទំរង់ត្រឹមត្រូវ។',

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

    'attributes'           => [
        //
    ],

];
