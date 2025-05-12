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

    'accepted' => 'Het :attribute moet geaccepteerd worden.',
    'accepted_if' => 'Het :attribute veld is verplicht wanneer :other is :value.',
    'active_url' => 'Het :attribute veld moet een geldige URL zijn.',
    'after' => 'Het :attribute veld moet een datum zijn na :date.',
    'after_or_equal' => 'Het :attribute veld moet een datum zijn na of gelijk aan :date.',
    'alpha' => ':attribute mag alleen letters bevatten.',
    'alpha_dash' => ':attribute mag alleen letters, cijfers, streepjes en liggende streepjes bevatten.',
    'alpha_num' => ':attribute mag alleen letters en cijfers bevatten.',
    'array' => ':attribute moet een array zijn.',
    'ascii' => 'Het :attribute veld mag alleen single-byte alfanumerieke tekens en symbolen bevatten.',
    'before' => ':attribute moet een datum voor :date zijn.',
    'before_or_equal' => ':attribute moet een datum zijn voor of gelijk aan :date.',
    'between' => [
        'array' => ':attribute moet tussen :min en :max items bevatten.',
        'file' => ':attribute moet tussen :min en :max kilobytes zijn.',
        'numeric' => ':attribute moet tussen de :min en de :max zijn.',
        'string' => ':attribute moet tussen de :min en :max karakters lang zijn.',
    ],
    'boolean' => ':attribute moet waar of onwaar zijn.',
    'can' => 'Het :attribute veld bevat een niet-geautoriseerde waarde.',
    'confirmed' => ':attribute bevestiging komt niet overeen.',
    'contains' => 'The :attribute field is missing a required value.',
    'current_password' => 'Het wachtwoord is onjuist.',
    'date' => 'Het :attribute veld moet een geldige datum zijn.',
    'date_equals' => ':attribute moet een datum gelijk zijn aan :date.',
    'date_format' => 'Het :attribute veld moet overeenkomen met het formaat :format.',
    'decimal' => 'Het :attribute veld moet :decimal decimale plaatsen hebben.',
    'declined' => 'Het :attribute moet geaccepteerd worden.',
    'declined_if' => 'Het veld :attribute is verplicht als :other gelijk is aan :value.',
    'different' => ':attribute en :other mogen niet hetzelfde zijn.',
    'digits' => ':attribute moet uit :digits cijfers bestaan.',
    'digits_between' => ':attribute moet tussen de :min en :max cijfers zijn.',
    'dimensions' => ':attribute heeft geen geldige afmetingen voor afbeeldingen.',
    'distinct' => ':attribute veld heeft een dubbele waarde.',
    'doesnt_end_with' => 'Het :attribute veld mag niet eindigen met één van de volgende waarden: :values.',
    'doesnt_start_with' => 'Het :attribute veld mag niet beginnen met één van de volgende waarden: :values.',
    'email' => ':attribute moet een geldig e-mailadres zijn.',
    'ends_with' => ':attribute moet eindigen met een van de volgende :values.',
    'enum' => 'Het geselecteerde :attribute is ongeldig.',
    'exists' => 'De geselecteerde :attribute is ongeldig.',
    'extensions' => 'Het :attribute veld moet een van de volgende extensies hebben: :values.',
    'file' => ':attribute moet een bestand zijn.',
    'filled' => ':attribute veld moet een waarde hebben.',
    'gt' => [
        'array' => 'De :attribute moet meer dan :value items bevatten.',
        'file' => 'De :attribute moet groter zijn dan :value kilobytes.',
        'numeric' => ':attribute moet groter zijn dan :value.',
        'string' => 'De :attribute moet meer dan :value karakters bevatten.',
    ],
    'gte' => [
        'array' => 'De :attribute moet :value items of meer bevatten.',
        'file' => 'De :attribute moet groter of gelijk zijn aan :value kilobytes.',
        'numeric' => 'De :attribute moet groter of gelijk zijn aan :value.',
        'string' => 'De :attribute moet :value karakters of meer bevatten.',
    ],
    'hex_color' => 'Het :attribute veld moet een geldige hexadecimale kleur hebben.',
    'image' => ':attribute moet een afbeelding zijn.',
    'in' => 'De geselecteerde :attribute is ongeldig.',
    'in_array' => 'Het :attribute veld moet bestaan in :other.',
    'integer' => ':attribute moet een geheel getal zijn.',
    'ip' => ':attribute moet een geldig IP-adres zijn.',
    'ipv4' => ':attribute moet een geldig IPv4-adres zijn.',
    'ipv6' => ':attribute moet een geldig IPv6-adres zijn.',
    'json' => ':attribute moet een geldige JSON-string zijn.',
    'list' => 'The :attribute field must be a list.',
    'lowercase' => 'Het :attribute veld moet in kleine letters zijn.',
    'lt' => [
        'array' => 'De :attribute moet minder dan :value items bevatten.',
        'file' => 'De :attribute moet kleiner zijn dan :value kilobytes.',
        'numeric' => ':attribute moet kleiner zijn dan :value.',
        'string' => 'De :attribute moet minder dan :value karakters bevatten.',
    ],
    'lte' => [
        'array' => 'Het :attribute mag niet meer dan :value items bevatten.',
        'file' => 'De :attribute moet kleiner of gelijk zijn aan :value kilobytes.',
        'numeric' => 'De :attribute moet kleiner of gelijk zijn aan :value.',
        'string' => 'De :attribute moet :value karakters of minder bevatten.',
    ],
    'mac_address' => 'Het :attribute moet een geldig MAC-adres zijn.',
    'max' => [
        'array' => ':attribute mag niet meer dan :max items bevatten.',
        'file' => ':attribute mag niet groter zijn dan :max kilobytes.',
        'numeric' => ':attribute mag niet groter zijn dan :max.',
        'string' => ':attribute mag niet groter zijn dan :max tekens.',
    ],
    'max_digits' => 'Het :attribute veld mag niet meer dan :max cijfers bevatten.',
    'mimes' => ':attribute moet een bestand zijn van het type: :values.',
    'mimetypes' => ':attribute moet een bestand zijn van het type: :values.',
    'min' => [
        'array' => ':attribute moet minstens :min items bevatten.',
        'file' => ':attribute moet minstens :min kilobytes zijn.',
        'numeric' => ':attribute moet minstens :min zijn.',
        'string' => ':attribute moet minstens :min karakters bevatten.',
    ],
    'min_digits' => 'Het :attribute veld moet minstens :min cijfers bevatten.',
    'missing' => 'Het :attribute veld moet ontbreken.',
    'missing_if' => 'Het :attribute veld moet ontbreken wanneer :other is :value.',
    'missing_unless' => 'Het :attribute veld moet ontbreken, tenzij :other is :value.',
    'missing_with' => 'Het :attribute veld moet ontbreken als :values aanwezig is.',
    'missing_with_all' => 'Het :attribute veld moet ontbreken wanneer :values aanwezig zijn.',
    'multiple_of' => ':attribute moet een veelvoud van :value zijn.',
    'not_in' => 'De geselecteerde :attribute is ongeldig.',
    'not_regex' => ':attribute formaat is ongeldig.',
    'numeric' => ':attribute moet een getal zijn.',
    'password' => [
        'letters' => 'Het :attribute moet minimaal één letter bevatten.',
        'mixed' => 'Het :attribute moet minimaal één hoofdletter en één kleine letter bevatten.',
        'numbers' => 'Het :attribute moet minimaal één cijfer bevatten.',
        'symbols' => 'Het :attribute moet minimaal één symbool bevatten.',
        'uncompromised' => 'Het :attribute is aangetroffen in een datalek. Geef een ander :attribute.',
    ],
    'present' => ':attribute veld moet aanwezig zijn.',
    'present_if' => 'Het :attribute veld moet aanwezig zijn wanneer :other is :value.',
    'present_unless' => 'Het :attribute veld moet aanwezig zijn tenzij :other is :value.',
    'present_with' => 'Het :attribute veld moet aanwezig zijn als :values aanwezig is.',
    'present_with_all' => 'Het :attribute veld moet aanwezig zijn wanneer :values aanwezig zijn.',
    'prohibited' => 'Het veld :attribute is verplicht.',
    'prohibited_if' => 'Het veld :attribute is verplicht als :other gelijk is aan :value.',
    'prohibited_unless' => 'Het :attribute veld is verplicht tenzij :other is in :values.',
    'prohibits' => ':attribute veld verbiedt :other aanwezig te zijn.',
    'regex' => ':attribute formaat is ongeldig.',
    'required' => ':attribute veld is verplicht.',
    'required_array_keys' => 'Het :attribute veld moet items bevatten voor: :values.',
    'required_if' => ':attribute veld is verplicht als :other gelijk is aan :value.',
    'required_if_accepted' => 'Het :attribute veld is verplicht wanneer :other is geaccepteerd.',
    'required_if_declined' => 'The :attribute field is required when :other is declined.',
    'required_unless' => ':attribute veld is verplicht tenzij :other gelijk is aan :values.',
    'required_with' => ':attribute veld is verplicht wanneer :values aanwezig is.',
    'required_with_all' => ':attribute veld is verplicht wanneer :values aanwezig zijn.',
    'required_without' => ':attribute veld is verplicht als :values niet aanwezig is.',
    'required_without_all' => ':attribute veld is verplicht wanneer geen van :values aanwezig zijn.',
    'same' => 'Het :attribute veld moet overeenkomen met :other.',
    'size' => [
        'array' => ':attribute moet :size items bevatten.',
        'file' => ':attribute moet :size kilobytes zijn.',
        'numeric' => ':attribute moet :size zijn.',
        'string' => ':attribute moet :size karakters bevatten.',
    ],
    'starts_with' => ':attribute moet beginnen met een van de volgende :values.',
    'string' => ':attribute moet een tekenreeks zijn.',
    'timezone' => ':attribute moet een geldige zone zijn.',
    'unique' => ':attribute is al in gebruik.',
    'uploaded' => 'Het uploaden van :attribute is mislukt. Misschien is deze te zwaar.',
    'uppercase' => 'Het :attribute veld moet uit hoofdletters bestaan.',
    'url' => ':attribute formaat is ongeldig.',
    'ulid' => 'Het :attribute veld moet een geldige ULID zijn.',
    'uuid' => ':attribute moet een geldige UUID zijn.',

    'username' => ':attribute moet een geldige gebruikersnaam zijn.',
    'slug' => ':attribute moet een slug zijn met alleen kleine letters, cijfers en streepjes.',
    'game_auth' => 'Het :attribute veld moet een geldige :game gebruikersnaam zijn.',

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
            'rule-name' => 'aangepast bericht',
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
        'address' => 'adres',
        'category_id' => 'categorie',
        'code' => 'code',
        'color' => 'kleur',
        'commands' => 'commands',
        'conditions' => 'voorwaarden',
        'content' => 'inhoud',
        'description' => 'beschrijving',
        'email' => 'e-mailadres',
        'expires_at' => 'expires at',
        'icon' => 'pictogram',
        'image' => 'afbeelding',
        'join_url' => 'join URL',
        'link' => 'link',
        'money' => 'geld',
        'name' => 'naam',
        'page' => 'pagina',
        'password' => 'wachtwoord',
        'plugin' => 'plugin',
        'port' => 'poort',
        'post' => 'link',
        'price' => 'prijs',
        'published_at' => 'gepubliceerd op',
        'quantity' => 'hoeveelheid',
        'reason' => 'reden',
        'role_id' => 'rol',
        'server' => 'server',
        'short_description' => 'korte beschrijving',
        'slug' => 'slug',
        'start_date' => 'start date',
        'title' => 'titel',
        'type' => 'type',
        'url' => 'url',
        'user' => 'gebruiker',
        'user_id' => 'user ID',
        'value' => 'waarde',
    ],

];
