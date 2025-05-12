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

    'accepted' => ':attribute turi būti priimtas.',
    'accepted_if' => 'Laukas :attribute turi būti priimtas, kai :other yra :value.',
    'active_url' => 'Laukas :attribute turi būti galiojantis URL.',
    'after' => ':attribute privalo būti data po :date.',
    'after_or_equal' => ':attribute privalo būti data po arba lygi :date.',
    'alpha' => ':attribute gali turėti tik raides.',
    'alpha_dash' => ':attribute gali sudaryti tik raidės, skaičiai ir brūkšneliai ir pabraukimai.',
    'alpha_num' => ':attribute gali turėti tik raides ir skaičius.',
    'array' => ':attribute turi būti masyvas.',
    'ascii' => 'Lauke :attribute gali būti tik vieno baito raidiniai skaitmeniniai simboliai ir ženklai.',
    'before' => ':attribute turi būti data prieš :date.',
    'before_or_equal' => 'Atributas :attribute turi būti data prieš arba lygi datai :date.',
    'between' => [
        'array' => ':attribute turi būti tarp :min ir :max elementų.',
        'file' => 'Atributas :attribute turi būti tarp :min ir :max kilobaitų.',
        'numeric' => 'Atributas :attribute turi būti tarp :min ir :max.',
        'string' => 'Atributas :attribute turi būti tarp :min ir :max simbolių.',
    ],
    'boolean' => ':attribute turi būti teisingas arba neteisingas.',
    'can' => 'Lauke :attribute yra neleistina reikšmė.',
    'confirmed' => ':attribute patvirtinimas nesutampa.',
    'contains' => 'Lauke :attribute trūksta būtinos reikšmės.',
    'current_password' => 'Slaptažodis yra neteisingas.',
    'date' => 'Laukas :attribute turi būti galiojanti data.',
    'date_equals' => ':attribute turi būti data lygi :date.',
    'date_format' => 'Laukas :attribute turi atitikti formatą :format.',
    'decimal' => 'Laukas :attribute turi turėti :decimal dešimtaines vietas.',
    'declined' => 'Laukas :attribute turi būti atmestas.',
    'declined_if' => 'Laukas :attribute turi būti atmestas, kai :other yra :value.',
    'different' => ':attribute ir :other turi būti skirtingi.',
    'digits' => ':attribute privalo būti :digits skaičiai.',
    'digits_between' => ':attribute turi būti tarp :min ir :max skaitmenų.',
    'dimensions' => ':attribute turi netinkamų nuotraukų matmenų.',
    'distinct' => ':attribute laukas turi dvigubą reikšmę.',
    'doesnt_end_with' => 'Laukas :attribute negali baigtis viena iš šių reikšmių: :values.',
    'doesnt_start_with' => 'Laukas :attribute negali prasidėti viena iš šių reikšmių: :values.',
    'email' => ':attribute Turi būti galiojantis el. pašto adresas.',
    'ends_with' => ':attribute turi pasibaigti su vienu iš šių :values.',
    'enum' => 'Pasirinktas laukas :attribute neteisingas.',
    'exists' => 'Pasirinktas :attribute neteisingas.',
    'extensions' => 'Laukas :attribute turi turėti vieną iš šių plėtinių: :values.',
    'file' => ':attribute turi būti failas.',
    'filled' => ':attribute laukas turi būti užpildytas.',
    'gt' => [
        'array' => ':attribute turi turėti daugiau negu :value elementų.',
        'file' => ':attribute turi būti didesnis nei :value kilobaitų.',
        'numeric' => ':attribute turi būti didesnis nei :value.',
        'string' => ':attribute turi būti ilgesnis nei :value raidės.',
    ],
    'gte' => [
        'array' => ':attribute turi turėti :value elementų arba daugiau.',
        'file' => ':attribute turi būti didesnis arba lygus :value kilobaitų.',
        'numeric' => ':attribute turi būti didesnis arba lygus :value.',
        'string' => ':attribute turi būti didesnis arba lygus :value simbolių.',
    ],
    'hex_color' => 'Laukas :attribute turi būti galiojanti šešioliktainė spalva.',
    'image' => ':attribute turi būti nuotrauka.',
    'in' => 'Pasirinktas :attribute neteisingas.',
    'in_array' => 'Laukas :attribute turi egzistuoti :other.',
    'integer' => ':attribute turi būti skaičius.',
    'ip' => ':attribute turi būti tinkamas IP adresas.',
    'ipv4' => ':attribute turi būti tinkamas IPv4 adresas.',
    'ipv6' => ':attribute turi būti tinkamas IPv6 adresas.',
    'json' => ':attribute turi būti tinkama JSON eilutė.',
    'list' => 'Laukas :attribute turi būti sąrašas.',
    'lowercase' => 'Laukas :attribute turi būti mažosiomis raidėmis.',
    'lt' => [
        'array' => ':attribute turi būti mažesnė nei :value elementų.',
        'file' => ':attribute turi būti mažesnė nei :value kilobaitų.',
        'numeric' => ':attribute turi būti mažesnis nei :value.',
        'string' => ':attribute turi būti mažesnė nei :value raidžių.',
    ],
    'lte' => [
        'array' => ':attribute negali turėti daugiau negu :value elementų.',
        'file' => ':attribute turi būti mažesnė arba lygi :value kilobaitų.',
        'numeric' => ':attribute turi būti mažesnė arba lygi :value.',
        'string' => ':attribute turi būti mažesnė arba lygi :value simbolių.',
    ],
    'mac_address' => 'Laukas :attribute turi būti galiojantis MAC adresas.',
    'max' => [
        'array' => ':attribute negali turėti daugiau negu :max elementų.',
        'file' => ':attribute negali būti didesnė nei :max kilobaitų.',
        'numeric' => ':attribute negali būti didesnė nei :max.',
        'string' => ':attribute negali būti didesnė nei :max simbolių.',
    ],
    'max_digits' => 'Laukas :attribute negali turėti daugiau nei :max skaitmenų.',
    'mimes' => ':attribute turi būti failas tipo: :values.',
    'mimetypes' => ':attribute turi būti failas tipo: :values.',
    'min' => [
        'array' => ':attribute turi turėti mažiausiai :min elementų.',
        'file' => ':attribute turi būti mažiausiai :min kilobaitų.',
        'numeric' => ':attribute turi mažiausiai būti :min.',
        'string' => ':attribute turi būti mažiausiai :min simbolių.',
    ],
    'min_digits' => 'Laukas :attribute turi turėti mažiausiai :min skaitmenų.',
    'missing' => ':attribute laukas turi būti trūkstamas.',
    'missing_if' => ':attribute laukas turi būti trūkstamas, kai :other yra :value.',
    'missing_unless' => ':attribute laukas turi būti trūkstamas, nebent :other yra :value.',
    'missing_with' => ':attribute laukas turi būti trūkstamas, kai yra :values.',
    'missing_with_all' => ':attribute laukas turi būti trūkstamas, kai yra :values reikšmės.',
    'multiple_of' => ':attribute turi būti sandauga :value.',
    'not_in' => 'Pasirinktas :attribute neteisingas.',
    'not_regex' => ':attribute formatas neteisingas.',
    'numeric' => ':attribute privalo būti skaičius.',
    'password' => [
        'letters' => ':attribute lauke turi būti bent viena raidė.',
        'mixed' => ':attribute lauke turi būti bent viena didžioji ir viena mažoji raidė.',
        'numbers' => ':attribute lauke turi būti bent vienas skaičius.',
        'symbols' => 'The :attribute field must contain at least one symbol.',
        'uncompromised' => 'Pateiktas :attribute buvo aptiktas duomenų nutekėjime. Prašome pasirinkti kitą :attribute.',
    ],
    'present' => ':attribute laukas turi būti.',
    'present_if' => ':attribute laukas turi būti, kai :other yra :value.',
    'present_unless' => ':attribute laukas turi būti, nebent :other yra :value.',
    'present_with' => ':attribute laukas turi būti, kai yra :values.',
    'present_with_all' => ':attribute laukas turi būti, kai yra :values reikšmės.',
    'prohibited' => ':attribute laukas yra draudžiamas.',
    'prohibited_if' => ':attribute laukas yra draudžiamas, kai :other yra :value.',
    'prohibited_unless' => ':attribute laukas yra draudžiamas, nebent :other yra tarp :values.',
    'prohibits' => ':attribute laukas draudžia :other buvimą.',
    'regex' => ':attribute formatas neteisingas.',
    'required' => ':attribute laukelis privalomas.',
    'required_array_keys' => ':attribute lauke turi būti įrašai: :values.',
    'required_if' => ':attribute laukelis yra privalomas kai :other yra :value.',
    'required_if_accepted' => ':attribute laukas yra privalomas, kai :other yra priimtas.',
    'required_if_declined' => ':attribute laukas yra privalomas, kai :other yra atmestas.',
    'required_unless' => ':attribute laukelis yra privalomas nebent :other yra :values.',
    'required_with' => ':attribute laukelis yra privalomas, kai :values yra nurodytas.',
    'required_with_all' => ':attribute laukelis yra privalomas, kai :values yra nurodyti.',
    'required_without' => ':attribute laukelis yra privalomas, kai :values nėra nurodytas.',
    'required_without_all' => ':attribute laukelis privalomas kai nė vienas iš :values yra nurodytas.',
    'same' => ':attribute laukas turi sutapti su :other.',
    'size' => [
        'array' => ':attribute turi sudaryti :size elementų.',
        'file' => ':attribute turi būti :size kilobaitų.',
        'numeric' => ':attribute turi būti :size.',
        'string' => ':attribute turi būti :size simbolių.',
    ],
    'starts_with' => ':attribute turi prasidėti su vienu iš nurodytų: :values.',
    'string' => ':attribute turi būti eilutė.',
    'timezone' => ':attribute turi būti tinkama zona.',
    'unique' => ':attribute jau užimtas.',
    'uploaded' => ':attribute nepavyko įkelti. Gal šis vienas yra per sunkus.',
    'uppercase' => ':attribute laukas turi būti didžiosiomis raidėmis.',
    'url' => ':attribute formatas neteisingas.',
    'ulid' => ':attribute laukas turi būti galiojantis ULID.',
    'uuid' => ':attribute turi būti tinkamas UUID.',

    'username' => ':attribute turi būti tinkamas slapyvardis.',
    'slug' => ':attribute turi būti šliužas tik su mažosiomis raidėmis, skaičiais ir brūkšneliais.',
    'game_auth' => ':attribute laukas turi būti galiojantis :game vartotojo vardas.',

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
            'rule-name' => 'pasirinktinis-pranešimas',
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
        'address' => 'adresas',
        'category_id' => 'kategorija',
        'code' => 'kodas',
        'color' => 'spalva',
        'commands' => 'komandos',
        'conditions' => 'sąlygos',
        'content' => 'turinys',
        'description' => 'aprašymas',
        'email' => 'el. pašto adresas',
        'expires_at' => 'galioja iki',
        'icon' => 'ikona',
        'image' => 'nuotrauka',
        'join_url' => 'prisijungimo URL',
        'link' => 'nuoroda',
        'money' => 'pinigai',
        'name' => 'vardas',
        'page' => 'puslapis',
        'password' => 'slaptažodis',
        'plugin' => 'įskiepis',
        'port' => 'prievadas',
        'post' => 'nuoroda',
        'price' => 'kaina',
        'published_at' => 'paskelbta',
        'quantity' => 'kiekis',
        'reason' => 'priežastis',
        'role_id' => 'grupė',
        'server' => 'serveris',
        'short_description' => 'trumpas aprašymas',
        'slug' => 'šliužas',
        'start_date' => 'pradžios data',
        'title' => 'pavadinimas',
        'type' => 'tipas',
        'url' => 'url',
        'user' => 'vartotojas',
        'user_id' => 'vartotojo ID',
        'value' => 'reikšmė',
    ],

];
