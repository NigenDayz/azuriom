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

    'accepted' => 'A :attribútumot el kell fogadni.',
    'accepted_if' => 'A :attribute akkor kell elfogadni, ha :other :value.
',
    'active_url' => 'The :attribute field must be a valid URL.',
    'after' => 'A :attribútumnak a :date után egy dátumnak kell lennie.',
    'after_or_equal' => 'A(z) :attribute a :date után vagy azzal megegyező dátumnak kell lennie.
',
    'alpha' => 'A(z) :attribute csak betűket tartalmazhat.
',
    'alpha_dash' => 'A :attribute csak betűket, számokat, kötőjeleket és aláhúzásokat tartalmazhat.
',
    'alpha_num' => 'A :attribute csak betűket és számokat tartalmazhat.',
    'array' => 'A :attribute tömbnek kell lennie.
',
    'ascii' => 'The :attribute field must only contain single-byte alphanumeric characters and symbols.',
    'before' => 'A(z) :attribute -nak a :date előtti dátumnak kell lennie.
',
    'before_or_equal' => 'A(z) :attribute a :date előtti vagy azzal megegyező dátumnak kell lennie.
',
    'between' => [
        'array' => 'A(z) :attribute -nak :min és :max elemek között kell lennie.
',
        'file' => 'A(z) :attribute -nak :min és :max kilobájt között kell lennie.',
        'numeric' => 'A(z) :attribute -nak :min és :max között kell lennie.
',
        'string' => 'A :attribute :min és :max karakterek között kell lennie.',
    ],
    'boolean' => 'A :attribute mezőnek igaznak vagy hamisnak kell lennie.',
    'can' => 'The :attribute field contains an unauthorized value.',
    'confirmed' => 'A :attribute megerősítése nem egyezik.
',
    'contains' => 'The :attribute field is missing a required value.',
    'current_password' => 'A jelszó helytelen.',
    'date' => 'The :attribute field must be a valid date.',
    'date_equals' => 'A :attribute -nak a :date -nek megfelelő dátumnak kell lennie.
',
    'date_format' => 'The :attribute field must match the format :format.',
    'decimal' => 'The :attribute field must have :decimal decimal places.',
    'declined' => 'A(z)  :attribute el kell utasítani.
',
    'declined_if' => 'A :attribute -ot vissza kell utasítani, ha :other :value.',
    'different' => 'A :attribute és a :other  különbözőnek kell lennie.
',
    'digits' => 'A :attribute :digits számjegyeknek kell lennie.
',
    'digits_between' => 'A(z) :attribute értéke :min és :max közötti számjegy lehet!',
    'dimensions' => 'Az :attribute érvénytelen képmérettel rendelkezik.',
    'distinct' => ':attribute mezőben duplikált érték van.',
    'doesnt_end_with' => 'The :attribute field must not end with one of the following: :values.',
    'doesnt_start_with' => 'Az :attribute a következők valamelyikével kell kezdődnie: :values.
',
    'email' => 'A :attribute egy érvényes e-mail címnek kell lennie.
',
    'ends_with' => 'Az :attribute -nak a következők valamelyikével kell végződnie: :values.
',
    'enum' => 'A kiválasztott :attribute érvénytelen.
',
    'exists' => 'A kiválasztott :attribute érvénytelen.',
    'extensions' => 'The :attribute field must have one of the following extensions: :values.',
    'file' => 'A :attribute fájlnak kell lennie.',
    'filled' => 'A :attribute mezőnek értékkel kell rendelkeznie.
',
    'gt' => [
        'array' => 'A :attribute több mint :value elemet kell tartalmaznia.
',
        'file' => 'A(z) :attribute mérete nagyobb kell, hogy legyen, mint :value kilobájt.',
        'numeric' => 'A(z) :attribute nagyobb kell, hogy legyen, mint :value.',
        'string' => ':attribute nagyobb kell legyen mint :value karakter.',
    ],
    'gte' => [
        'array' => 'A :attribute nek- legalább :value elemekkel kell rendelkeznie.',
        'file' => 'A(z) :attribute mérete nem lehet kevesebb, mint :value kilobájt.',
        'numeric' => 'A :attribute nagyobbnak, vagy egyenlőnek kell lennie, mint a :value.',
        'string' => 'A :attribute nagyobbnak, vagy egyenlőnek kell lennie, mint a :value karakter.',
    ],
    'hex_color' => 'The :attribute field must be a valid hexadecimal color.',
    'image' => 'A :attribute fényképnek kell lennie.',
    'in' => 'A kiválasztott :attribute érvénytelen.
',
    'in_array' => 'The :attribute field must exist in :other.',
    'integer' => 'A :attribute -nak egész számnak kell lennie.
',
    'ip' => 'A(z) :attribute érvényes IP cím kell, hogy legyen!',
    'ipv4' => 'A(z) :attribute érvényes IPv4 cím kell, hogy legyen!',
    'ipv6' => 'A(z) :attribute érvényes IPv6 cím kell, hogy legyen!',
    'json' => ':attribute érvényes JSON karakterlánc kell legyen.',
    'list' => 'The :attribute field must be a list.',
    'lowercase' => 'The :attribute field must be lowercase.',
    'lt' => [
        'array' => 'A :attribute kevesebbnek kell lennie, mint :value adat.',
        'file' => 'A :attribute kisebbnek kell lennie, mint a :value kilobájt.
',
        'numeric' => 'A :attribute kevesebbnek kell lennie, mint :value.',
        'string' => 'A :attribute -nak kevesebbnek kell lennie, mint a :value karaktereknek.
',
    ],
    'lte' => [
        'array' => 'A(z) :attribute legfeljebb :value elemet kell, hogy tartalmazzon.',
        'file' => 'A(z) :attribute mérete nem lehet több, mint :value kilobájt.',
        'numeric' => 'A :attribute kevesebbnek, vagy egyenlőnek kell lennie, mint :value.',
        'string' => 'A :attribute kevesebbnek, vagy egyenlőnek kell lennie, mint :value karakter.',
    ],
    'mac_address' => 'Az  :attribute -nak érvényes MAC-címnek kell lennie.
',
    'max' => [
        'array' => 'A :attribute nem tartalmazhat tobb adatot, mint :max.',
        'file' => ':attribute nem lehet nagyobb mint :max kilobájt.',
        'numeric' => 'A(z) :attribute értéke nem lehet nagyobb, mint :max!',
        'string' => 'A :attribute nem lehet nagyobb, mint :max karakter.',
    ],
    'max_digits' => 'The :attribute field must not have more than :max digits.',
    'mimes' => 'A(z) :attribute kizárólag az alábbi fájlformátumok egyike lehet: :values.',
    'mimetypes' => 'A :attribute ilyen fájl típusnak kell lennie: :values.',
    'min' => [
        'array' => ':attribute legalább :min elem kell legyen.',
        'file' => 'A :attribute legalább :min kilobájtnak kell lennie.',
        'numeric' => 'A :attribute legalább :min kell lennie.',
        'string' => 'A(z) :attribute legalább :min karakteresnek kell lennie.
',
    ],
    'min_digits' => 'The :attribute field must have at least :min digits.',
    'missing' => 'The :attribute field must be missing.',
    'missing_if' => 'The :attribute field must be missing when :other is :value.',
    'missing_unless' => 'The :attribute field must be missing unless :other is :value.',
    'missing_with' => 'The :attribute field must be missing when :values is present.',
    'missing_with_all' => 'The :attribute field must be missing when :values are present.',
    'multiple_of' => 'A :attribute a :value többszörösének kell lennie.
',
    'not_in' => 'A kiválasztott :attribute érvénytelen.
',
    'not_regex' => 'A(z) :attribute formátum érvénytelen.
',
    'numeric' => ':attribute szám kell legyen.',
    'password' => [
        'letters' => 'A(z) :attribute -nak legalább egy szimbólumot kell tartalmaznia.
',
        'mixed' => 'A :attribute legalább egy nagy- és egy kisbetűt kell tartalmaznia.
',
        'numbers' => 'A :attribute legalább egy számot kell tartalmaznia.
',
        'symbols' => 'A(z) :attribute -nak legalább egy szimbólumot kell tartalmaznia.
',
        'uncompromised' => 'Az adott :attribute megjelent egy adatszivárgásban. Kérjük, válasszon másik :attribute.
',
    ],
    'present' => 'A(z) :attribute mezőnek jelen kell lennie.
',
    'present_if' => 'The :attribute field must be present when :other is :value.',
    'present_unless' => 'The :attribute field must be present unless :other is :value.',
    'present_with' => 'The :attribute field must be present when :values is present.',
    'present_with_all' => 'The :attribute field must be present when :values are present.',
    'prohibited' => 'A(z) :attribute mező tiltott.
',
    'prohibited_if' => 'A(7) :attribute mező tilos, ha :other :value.',
    'prohibited_unless' => 'A(z) :attribute mező tilos, hacsak a :other nem szerepel a :values mezőben.
',
    'prohibits' => 'A(z) :attribute mező tiltja a :other jelenlétét.
',
    'regex' => 'A(z) :attribute formátum érvénytelen.
',
    'required' => 'A(z) :attribute mező kitöltése kötelező.
',
    'required_array_keys' => 'Az :attribute mezőnek a következőket kell tartalmaznia: :values.
',
    'required_if' => 'A :attribute mező akkor kötelező, ha :other :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_if_declined' => 'The :attribute field is required when :other is declined.',
    'required_unless' => 'A :attribute mező kötelező, hacsak a :other nem szerepel a :values mezőben.
',
    'required_with' => 'A :attribute mező akkor kötelező, ha a :values jelen van.
',
    'required_with_all' => 'A :attribute mező akkor kötelező, ha :values jelen van.',
    'required_without' => 'A :attribute mező akkor kötelező, ha a :values nincs jelen.',
    'required_without_all' => 'A :attribute mező akkor kötelező, ha a :values egyike sincs jelen.
',
    'same' => 'The :attribute field must match :other.',
    'size' => [
        'array' => 'A :attribute :size elemeket kell tartalmaznia.
',
        'file' => 'A :attribute :size kilobájtnak kell lennie.
',
        'numeric' => 'Az :attribute -nak :size-nak kell lennie.
',
        'string' => 'A :attribute :size karaktereknek kell lennie.
',
    ],
    'starts_with' => 'Az :attribute a következők valamelyikével kell kezdődnie: :values.
',
    'string' => 'A :attribute egy karakterláncnak kell lennie.
',
    'timezone' => 'Az :attribute érvényes időzónának kell lennie.
',
    'unique' => 'A :attribute már foglalt.',
    'uploaded' => 'Az :attribute feltöltése sikertelen volt. Talán ez túl nehéz.
',
    'uppercase' => 'The :attribute field must be uppercase.',
    'url' => 'A :attribute érvényes URL-nek kell lennie.',
    'ulid' => 'The :attribute field must be a valid ULID.',
    'uuid' => 'A :attribute érvényes UUID-nek kell lennie.',

    'username' => 'A :attribute érvényes felhasználónévnek kell lennie.',
    'slug' => 'A :attribute csak kisbetűket, számokat és kötőjeleket tartalmazó slugnak kell lennie.',
    'game_auth' => 'A :attribute érvényes :game felhasználónévnek kell lennie.',

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
            'rule-name' => 'egyéni-üzenet',
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
        'address' => 'cím',
        'category_id' => 'kategória',
        'code' => 'kód',
        'color' => 'szín',
        'commands' => 'commands',
        'conditions' => 'feltételek',
        'content' => 'tartalom',
        'description' => 'leírás',
        'email' => 'e-mail cím',
        'expires_at' => 'expires at',
        'icon' => 'ikon',
        'image' => 'kép',
        'join_url' => 'csatlakozási URL',
        'link' => 'link',
        'money' => 'pénz',
        'name' => 'név',
        'page' => 'oldal',
        'password' => 'jelszó',
        'plugin' => 'plugin',
        'port' => 'port',
        'post' => 'link',
        'price' => 'ár',
        'published_at' => 'közzétéve',
        'quantity' => 'mennyiség',
        'reason' => 'indok',
        'role_id' => 'rang',
        'server' => 'szerver',
        'short_description' => 'rövid leírás',
        'slug' => 'slug',
        'start_date' => 'start date',
        'title' => 'cím',
        'type' => 'típus',
        'url' => 'url',
        'user' => 'felhasználó',
        'user_id' => 'user ID',
        'value' => 'érték',
    ],

];
