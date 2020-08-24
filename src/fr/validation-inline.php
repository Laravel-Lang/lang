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

    'accepted'        => 'Ce champ doit être accepté.',
    'active_url'      => "Ce n'est pas une URL valide",
    'after'           => 'La date doit être postérieure au :date.',
    'after_or_equal'  => 'La date doit être postérieure ou égale au :date.',
    'alpha'           => 'Ce champ doit contenir uniquement des lettres',
    'alpha_dash'      => 'Ce champ doit contenir uniquement des lettres, des chiffres et des tirets.',
    'alpha_num'       => 'Ce champ doit contenir uniquement des chiffres et des lettres.',
    'array'           => 'Ce champ doit être un tableau.',
    'before'          => 'Ce champ doit être une date antérieure au :date.',
    'before_or_equal' => 'Ce champ doit être une date antérieure ou égale au :date.',
    'between'         => [
        'numeric' => 'La valeur doit être comprise entre :min et :max.',
        'file'    => 'La taille du fichier doit être comprise entre :min et :max kilo-octets.',
        'string'  => 'Le texte doit contenir entre :min et :max caractères.',
        'array'   => 'Le tableau doit contenir entre :min et :max éléments.',
    ],
    'boolean'        => 'Ce champ doit être vrai ou faux.',
    'confirmed'      => 'Le champ de confirmation ne correspond pas.',
    'date'           => "Ce n'est pas une date valide.",
    'date_equals'    => 'La date doit être égale à :date.',
    'date_format'    => 'Ce champ ne correspond pas au format :format.',
    'different'      => 'Cette valeur doit être différente de :other.',
    'digits'         => 'Ce champ doit contenir :digits chiffres.',
    'digits_between' => 'Ce champ doit contenir entre :min et :max chiffres.',
    'dimensions'     => "La taille de l'image n'est pas conforme.",
    'distinct'       => 'Ce champ a une valeur en double.',
    'email'          => 'Ce champ doit être une adresse email valide.',
    'ends_with'      => 'Ce champ doit se terminer par une des valeurs suivantes : :values',
    'exists'         => 'Ce champ sélectionné est invalide.',
    'file'           => 'Ce champ doit être un fichier.',
    'filled'         => 'Ce champ doit avoir une valeur.',
    'gt'             => [
        'numeric' => 'La valeur doit être supérieure à :value.',
        'file'    => 'La taille du fichier doit être supérieure à :value kilo-octets.',
        'string'  => 'Le texte doit contenir plus de :value caractères.',
        'array'   => 'Le tableau doit contenir plus de :value éléments.',
    ],
    'gte' => [
        'numeric' => 'La valeur doit être supérieure ou égale à :value.',
        'file'    => 'La taille du fichier doit être supérieure ou égale à :value kilo-octets.',
        'string'  => 'Le texte doit contenir au moins :value caractères.',
        'array'   => 'Le tableau doit contenir au moins :value éléments.',
    ],
    'image'    => 'Ce champ doit être une image.',
    'in'       => 'Ce champ est invalide.',
    'in_array' => "Ce champ n'existe pas dans :other.",
    'integer'  => 'Ce champ doit être un entier.',
    'ip'       => 'Ce champ doit être une adresse IP valide.',
    'ipv4'     => 'Ce champ doit être une adresse IPv4 valide.',
    'ipv6'     => 'Ce champ doit être une adresse IPv6 valide.',
    'json'     => 'Ce champ doit être un document JSON valide.',
    'lt'       => [
        'numeric' => 'La valeur doit être inférieure à :value.',
        'file'    => 'La taille du fichier doit être inférieure à :value kilo-octets.',
        'string'  => 'Le texte doit contenir moins de :value caractères.',
        'array'   => 'Le tableau doit contenir moins de :value éléments.',
    ],
    'lte' => [
        'numeric' => 'La valeur doit être inférieure ou égale à :value.',
        'file'    => 'La taille du fichier doit être inférieure ou égale à :value kilo-octets.',
        'string'  => 'Le texte doit contenir au plus :value caractères.',
        'array'   => 'Le tableau doit contenir au plus :value éléments.',
    ],
    'max' => [
        'numeric' => 'La valeur ne peut être supérieure à :max.',
        'file'    => 'La taille du fichier ne peut pas dépasser :max kilo-octets.',
        'string'  => 'Le texte ne peut contenir plus de :max caractères.',
        'array'   => 'Le tableau ne peut contenir plus de :max éléments.',
    ],
    'mimes'     => 'Le fichier doit être de type : :values.',
    'mimetypes' => 'Le fichier doit être de type : :values.',
    'min'       => [
        'numeric' => 'La valeur doit être supérieure ou égale à :min.',
        'file'    => 'La taille du fichier doit être supérieure à :min kilo-octets.',
        'string'  => 'Le texte doit contenir au moins :min caractères.',
        'array'   => 'Le tableau doit contenir au moins :min éléments.',
    ],
    'not_in'               => "Le champ sélectionné n'est pas valide.",
    'not_regex'            => "Le format du champ n'est pas valide.",
    'numeric'              => 'Ce champ doit contenir un nombre.',
    'password'             => 'Le mot de passe est incorrect',
    'present'              => 'Ce champ doit être présent.',
    'regex'                => 'Le format du champ est invalide.',
    'required'             => 'Ce champ est obligatoire.',
    'required_if'          => 'Ce champ est obligatoire quand la valeur de :other est :value.',
    'required_unless'      => 'Ce champ est obligatoire sauf si :other est :values.',
    'required_with'        => 'Ce champ est obligatoire quand :values est présent.',
    'required_with_all'    => 'Ce champ est obligatoire quand :values sont présents.',
    'required_without'     => "Ce champ est obligatoire quand :values n'est pas présent.",
    'required_without_all' => "Ce champ est requis quand aucun de :values n'est présent.",
    'same'                 => 'Ce champ doit être identique à :other.',
    'size'                 => [
        'numeric' => 'La valeur doit être :size.',
        'file'    => 'La taille du fichier doit être de :size kilo-octets.',
        'string'  => 'Le texte doit contenir :size caractères.',
        'array'   => 'Le tableau doit contenir :size éléments.',
    ],
    'starts_with' => 'Ce champ doit commencer avec une des valeurs suivantes : :values',
    'string'      => 'Ce champ doit être une chaîne de caractères.',
    'timezone'    => 'Ce champ doit être un fuseau horaire valide.',
    'unique'      => 'La valeur est déjà utilisée.',
    'uploaded'    => "Le fichier n'a pu être téléversé.",
    'url'         => "Le format de l'URL n'est pas valide.",
    'uuid'        => 'Ce champ doit être un UUID valide',

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
        'name'                  => 'nom',
        'username'              => "nom d'utilisateur",
        'email'                 => 'adresse email',
        'first_name'            => 'prénom',
        'last_name'             => 'nom',
        'password'              => 'mot de passe',
        'password_confirmation' => 'confirmation du mot de passe',
        'city'                  => 'ville',
        'country'               => 'pays',
        'address'               => 'adresse',
        'phone'                 => 'téléphone',
        'mobile'                => 'portable',
        'age'                   => 'âge',
        'sex'                   => 'sexe',
        'gender'                => 'genre',
        'day'                   => 'jour',
        'month'                 => 'mois',
        'year'                  => 'année',
        'hour'                  => 'heure',
        'minute'                => 'minute',
        'second'                => 'seconde',
        'title'                 => 'titre',
        'content'               => 'contenu',
        'description'           => 'description',
        'excerpt'               => 'extrait',
        'date'                  => 'date',
        'time'                  => 'heure',
        'available'             => 'disponible',
        'size'                  => 'taille',
    ],
];
