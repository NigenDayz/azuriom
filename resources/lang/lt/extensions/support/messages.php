<?php

return [
    'title' => 'Pagalba',

    'seconds' => 'seconds',

    'fields' => [
        'subject' => 'Tema',
        'ticket' => 'Bilietas',
        'comment' => 'Komentuoti',
    ],

    'actions' => [
        'create' => 'Atidaryti naują bilietą',
        'reopen' => 'Atidaryti iš naujo',
    ],

    'state' => [
        'open' => 'Atidarytas',
        'closed' => 'Uždarytas',
        'replied' => 'Atsakė',
    ],

    'tickets' => [
        'closed' => 'Šis bilietas yra uždarytas.',

        'open' => 'Atidaryti bilietą',

        'notification' => 'Nauji atsakymai jūsų pagalbos biliete.',
        'delay' => 'You need to wait :time before opening a new ticket.',
        'info' => '<strong>:author</strong> sukūrė šį bilietą kategorijoje <strong>:category</strong> :date.',
    ],

    'webhook' => [
        'ticket' => 'Nauji bilietai pagalboje',
        'comment' => 'Nauji komentarai pagalboje',
        'closed' => 'Bilietas uždarytas',
    ],

    'mails' => [
        'comment' => [
            'subject' => 'Naujas atsakymas jūsų pagalbos biliete',
            'message' => 'Labas, :user, jūsų pagalbos bilietas #:id gavo naują atsaką nuo :author.',
            'view' => 'Peržiūrėti bilietą',
        ],
    ],

    'days' => 'dienos',
];
