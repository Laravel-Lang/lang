<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Patvirtinimo kalbos eilutės
    |--------------------------------------------------------------------------
    |
    | Sekančios kalbos eilutėse yra numatyti klaidos pranešimai naudojami
    | patvirtinimo klasėje. Kai kurios iš šių eilučių turi keletą versijų
    | tokių kaip dydžio taisyklės. Galite laisvai pataisyti bet kuriuos pranešimus.
    |
    */

    'accepted'             => 'Šis laukas turi būti priimtas.',
    'active_url'           => 'Šio lauko reikšmė nėra galiojantis internetinis adresas.',
    'after'                => 'Šio lauko reikšmė turi būti po :date datos',
    'after_or_equal'       => 'Šio lauko reikšmė privalo būti data lygi arba vėlesnė negu :date.',
    'alpha'                => 'Šis laukas gali turėti tik raides.',
    'alpha_dash'           => 'Šis laukas gali turėti tik raides, skaičius ir brūkšnelius.',
    'alpha_num'            => 'Šis laukas gali turėti tik raides ir skaičius.',
    'array'                => 'Šis laukas turi būti masyvas.',
    'before'               => 'Šio lauko reikšmė turi būti data prieš :date.',
    'before_or_equal'      => 'Šio lauko reikšmė privalo būti data lygi arba ankstesnė negu :date.',
    'between'              => [
        'numeric' => 'Šio lauko reikšmė turi būti tarp :min ir :max.',
        'file'    => 'Failo dydis šiame lauke turi būti tarp :min ir :max kilobaitų.',
        'string'  => 'Simbolių skaičius šiame lauke turi būti tarp :min ir :max.',
        'array'   => 'Elementų skaičius šiame lauke turi turėti nuo :min iki :max.',
    ],
    'boolean'              => "Šio lauko reikšmė turi būti 'taip' arba 'ne'.",
    'confirmed'            => 'Šio lauko patvirtinimas nesutampa.',
    'date'                 => 'Šio lauko reikšmė nėra galiojanti data.',
    'date_equals'          => 'Šio lauko reikšmė turi būti data lygi :date.',
    'date_format'          => 'Šio lauko reikšmė neatitinka formato :format.',
    'different'            => 'Šio lauko reikšmė privalo skirtis nuo :other.',
    'digits'               => 'Šio laukas turi būti sudarytas iš :digits skaitmenų.',
    'digits_between'       => 'Šis laukas turi turėti nuo :min iki :max skaitmenų.',
    'dimensions'           => 'Šis įkeltas paveiksliukas neatitinka išmatavimų reikalavimo.',
    'distinct'             => 'Šio lauko reikšmė pasikartoja.',
    'email'                => 'Šio lauko reikšmė turi būti galiojantis el. pašto adresas.',
    'ends_with'            => 'Šis laukas turi baigtis vienu iš: :values',
    'exists'               => 'Šio lauko reikšmė negalioja.',
    'file'                 => 'Šis laukas turi būti failas.',
    'filled'               => 'Šis laukas turi būti užpildytas.',
    'gt'                   => [
        'numeric' => 'Šio lauko reikšmė turi būti didesnė negu :value.',
        'file'    => 'Šis failas turi būti didesnis negu :value kilobaitai.',
        'string'  => 'Šio lauko simbolių skaičius turi būti didesnis negu :value simboliai.',
        'array'   => 'Šis laukas turi turėti daugiau nei :value elementus.',
    ],
    'gte'                  => [
        'numeric' => 'Šio lauko reikšmė turi būti didesnė arba lygi :value.',
        'file'    => 'Šis failas turi būti didesnis arba lygus :value kilobaitams.',
        'string'  => 'Šio lauko reikšmė turi būti didesnė arba lygi :value simboliams.',
        'array'   => 'Šis laukas turi turėti :value elementus arba daugiau.',
    ],
    'image'                => 'Šio lauko reikšmė turi būti paveikslėlis.',
    'in'                   => 'Pasirinkta negaliojanti šio lauko reikšmė.',
    'in_array'             => 'Ši reikšmė neegzistuoja :other lauke.',
    'integer'              => 'Šio lauko reikšmė turi būti sveikasis skaičius.',
    'ip'                   => 'Šio lauko reikšmė turi būti galiojantis IP adresas.',
    'ipv4'                 => 'Šio lauko reikšmė turi būti galiojantis IPv4 adresas.',
    'ipv6'                 => 'Šio lauko reikšmė turi būti galiojantis IPv6 adresas.',
    'json'                 => 'Šio lauko reikšmė turi būti JSON tekstas.',
    'lt'                   => [
        'numeric' => 'Šio lauko reikšmė turi būti mažesnė negu :value.',
        'file'    => 'Šis failas turi būti mažesnis negu :value kilobaitai.',
        'string'  => 'Šio lauko reikšmė turi būti mažesnė negu :value simboliai.',
        'array'   => 'Šis laukas turi turėti mažiau negu :value elementus.',
    ],
    'lte'                  => [
        'numeric' => 'Šio lauko reikšmė turi būti mažesnė arba lygi :value.',
        'file'    => 'Šis failas turi būti mažesnis arba lygus :value kilobaitams.',
        'string'  => 'Šio lauko reikšmė turi būti mažesnė arba lygi :value simboliams.',
        'array'   => 'Šis laukas turi turėti mažiau arba lygiai :value elementus.',
    ],
    'max'                  => [
        'numeric' => 'Šio lauko reikšmė negali būti didesnė nei :max.',
        'file'    => 'Šis failas negali būti didesnis nei :max kilobaitų.',
        'string'  => 'Šio lauko reikšmė negali būti didesnė nei :max simbolių.',
        'array'   => 'Šis laukas negali turėti daugiau nei :max elementų.',
    ],
    'mimes'                => 'Šis laukas turi būti failas vieno iš sekančių tipų: :values.',
    'mimetypes'            => 'Šis laukas turi būti failas vieno iš sekančių tipų: :values.',
    'min'                  => [
        'numeric' => 'Šio lauko reikšmė turi būti ne mažesnė nei :min.',
        'file'    => 'Šis failas turi būti ne mažesnis nei :min kilobaitų.',
        'string'  => 'Šio lauko simbolių kiekis turi būti ne mažiau nei :min.',
        'array'   => 'Šio lauko elementų kiekis turi būti ne mažiau nei :min.',
    ],
    'multiple_of'          => 'Šio lauko reikšmė turi būti :value kartotinis.',
    'not_in'               => 'Pasirinkta negaliojanti reikšmė.',
    'not_regex'            => 'Šio lauko formatas yra neteisingas.',
    'numeric'              => 'Šio lauko reikšmė turi būti skaičius.',
    'password'             => 'Slaptažodis neteisingas.',
    'present'              => 'Šis laukas turi egzistuoti.',
    'regex'                => 'Negaliojantis šio lauko formatas.',
    'required'             => 'Privaloma užpildyti šį lauką.',
    'required_if'          => 'Privaloma užpildyti šį lauką, kai :other yra :value.',
    'required_unless'      => 'Šis laukas yra privalomas, nebent :other yra tarp :values reikšmių.',
    'required_with'        => 'Privaloma užpildyti šį lauką, kai pateikta :values.',
    'required_with_all'    => 'Privaloma užpildyti šį lauką, kai pateikta :values.',
    'required_without'     => 'Privaloma užpildyti šį lauką, kai nepateikta :values.',
    'required_without_all' => 'Privaloma užpildyti šį lauką, kai nepateikta nei viena iš reikšmių :values.',
    'same'                 => 'Šis ir :other laukai turi sutapti.',
    'size'                 => [
        'numeric' => 'Šio lauko reikšmė turi būti :size.',
        'file'    => 'Šio failo dydis turi būti :size kilobaitai.',
        'string'  => 'Simbolių skaičius šiame lauke turi būti :size.',
        'array'   => 'Elementų skačius šiame lauke turi būti :size.',
    ],
    'starts_with'          => 'Šis laukas turi prasidėti vienu iš: :values',
    'string'               => 'Šis laukas turi būti tekstinis.',
    'timezone'             => 'Šio lauko reikšmė turi būti galiojanti laiko zona.',
    'unique'               => 'Ši reikšmė jau pasirinkta.',
    'uploaded'             => 'Nepavyko įkelti šio lauko.',
    'url'                  => 'Negaliojantis šio lauko formatas.',
    'uuid'                 => 'Šio lauko reikšmė turi būti galiojantis UUID.',

    /*
    |--------------------------------------------------------------------------
    | Pasirinktiniai patvirtinimo kalbos eilutės
    |--------------------------------------------------------------------------
    |
    | Čia galite nurodyti pasirinktinius patvirtinimo pranešimus, naudodami
    | konvenciją "attribute.rule" eilučių pavadinimams. Tai leidžia greitai
    | nurodyti konkrečią pasirinktinę kalbos eilutę tam tikrai atributo taisyklei.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

];
