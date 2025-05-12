<?php

return [
    'title' => 'Forumas',

    'fields' => [
        'forum' => 'Forumas',
        'tags' => 'Žymos',
        'editor' => 'Redaktorius',
    ],

    'actions' => [
        'pin' => 'Prisegti',
        'unpin' => 'Atsegti',
        'lock' => 'Užrakinti',
        'unlock' => 'Atrakinti',
    ],

    'latest' => [
        'title' => 'Naujausi pranešimai',
    ],

    'stats' => [
        'title' => 'Statistika',

        'discussions' => 'Diskusijos: :count',
        'posts' => 'Pranešimai: :count',
        'users' => 'Vartotojai: :count',
    ],

    'online' => [
        'title' => 'Prisijungę vartotojai',

        'none' => 'Nėra prisijungusių vartotojų dabar...',
    ],

    'forums' => [
        'discussions' => ':count diskusija|:count diskusijos',

        'locked' => 'Šis forumas yra užrakintas.',
    ],

    'discussions' => [
        'title' => 'Diskusijos',
        'create' => 'Sukurti diskusija',
        'edit' => 'Redaguoti diskusija',

        'pin' => 'Prisegti šią diskusija',
        'lock' => 'Užrakinti šią diskusija',

        'respond' => 'Atsakyti',
        'views' => ':count peržiūra|:count peržiūrų',

        'locked' => 'Užrakinta',
        'pinned' => 'Prisegta',

        'locked_info' => 'Ši diskusija yra užrakinta.',

        'posts' => ':count pranešimas|:count pranešimai',

        'delete' => 'Ar jūs įsitikinę, kad norite panaikinti šią diskusija ?',

        'status' => [
            'created' => 'Diskusija buvo sukurta.',
            'updated' => 'Ši diskusija buvo paredaguota.',
            'deleted' => 'Ši diskusija buvo pašalinta.',

            'pinned' => 'Ši diskusija buvo prisegta.',
            'unpinned' => 'Ši diskusija buvo atsegta.',
            'locked' => 'Ši diskusija buvo užrakinta.',
            'unlocked' => 'Ši diskusija buvo atrakinta.',
        ],
    ],

    'posts' => [
        'title' => 'Pranešimai',
        'edit' => 'Redaguoti pranešimą',

        'delay' => 'Jūs galėsite rašyti vėl po :time.',

        'delete' => 'Ar jūs įsitikinę, kad norite pašalinti šį pranešimą ?',

        'status' => [
            'created' => 'Pranešimas buvo sukurtas.',
            'updated' => 'Šis pranešimas buvo paredaguotas.',
            'deleted' => 'Šis pranešimas buvo pašalintas.',
        ],
    ],

    'notifications' => [
        'reply' => ':user atsakė į tavo diskusija :discussion',
        'mention' => ':user paminėjo jus diskusijoje :discussion',
    ],

    'profile' => [
        'likes' => 'Patinka',
        'posts' => 'Pranešimai',
        'discussions' => 'Diskusijos',

        'information' => 'Informacija',
        'edit' => 'Redaguoti profilį',

        'location' => 'Vieta',
        'website' => 'Tinklapis',
        'about' => 'Apie',
        'signature' => 'Parašas',
        'registered' => 'Užregistruota',
        'last_seen' => 'Paskutinį kartą matytas',
        'display_last_seen' => 'Rodyti paskutinį apsilankymą',
    ],
];
