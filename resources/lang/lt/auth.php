<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => 'Šie duomenys neatitinka mūsų įrašų.',
    'throttle' => 'Per daug bandymų prisijungti. Bandykite po :seconds sekundžių.',

    'register' => 'Užsiregistruoti',
    'login' => 'Prisijungti',
    'logout' => 'Atsijungti',
    'verify' => 'Patvirtinti el. pašto adresą',
    'passwords' => [
        'confirm' => 'Patvirtinkite slaptažodį',
        'reset' => 'Atkurti slaptažodį',
        'send' => 'Slaptažodžio atkūrimo nuoroda',
    ],
    'fpc' => [
        'title' => 'Priverstinis slaptažodžio keitimas',
        'line1' => 'Jūsų paskyra buvo laikinai užblokuota saugumo sumetimais. Norėdami ją atblokuoti, pakeiskite slaptažodį.',
        'line2' => 'Jei reikia daugiau informacijos arba turite problemų atblokuojant paskyrą, susisiekite su tinklalapio administratoriumi.',
        'action' => 'Keisti slaptažodį',
    ],
    'name' => 'Slapyvardis',
    'email' => 'El. pašto adresas',
    'password' => 'Slaptažodis',
    'confirm_password' => 'Patvirtinti slaptažodį',
    'current_password' => 'Dabartinis slaptažodis',

    'conditions' => 'Aš sutinku su <a href=":url" target="_blank">šiomis sąlygomis</a>.',

    '2fa' => [
        'code' => 'Dviejų faktorių autentifikacijos kodas',
        'invalid' => 'Neteisingas kodas',
    ],

    'suspended' => 'Ši paskyra yra sustabdyta.',

    'maintenance' => 'Svetainė yra uždaryta tvarkymo darbams.',

    'remember' => 'Prisiminti mane',
    'forgot_password' => 'Pamiršote savo slaptažodį?',

    'verification' => [
        'sent' => 'Naujas patvirtinimo adresas buvo išsiųstas į jūsų el. pašto adresą.',
        'check' => 'Prieš tęsdami, prašome patikrinti savo el. pašte esamo patvirtinimo laiško.',
        'request' => 'Jeigu jūs negavote laiško, jūs galite pareikalauti kito.',
        'resend' => 'Pakartoti el. laiško siuntimą',
    ],

    'confirmation' => 'Prieš tęsdami, prašome patvirtinti savo slaptažodį.',

    'mail' => [
        'reset' => [
            'subject' => 'Slaptažodžio atkūrimo notifikacija',
            'line1' => 'Jūs gaunate šį el. laišką todėl, kad mes gavome slaptažodžio atkūrimo prašymą jūsų paskyrai.',
            'action' => 'Atkurti slaptažodį',
            'line2' => 'Šis slaptažodžio atkūrimo adresas nustos galioti po :count minučių.',
            'line3' => 'Jeigu jūs nepareikalavote slaptažodžio atkūrimo, jokių tolesnių veiksmų atlikti nereikia.',
        ],

        'verify' => [
            'subject' => 'Patvirtinti el. pašto adresą',
            'line1' => 'Prašome spustelėti žemiau esantį mygtuką, kad patvirtintumėte savo el. pašto adresą. Ši nuoroda galioja :count minutes.',
            'action' => 'Patvirtinti el. pašto adresą',
            'line2' => 'Jeigu ne jūs kūrėte paskyrą, jokių tolesnių veiksmų atlikti nereikia.',
        ],
    ],
];
