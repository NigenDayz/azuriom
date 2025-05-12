<?php

return [
    'title' => 'Pomoc',

    'seconds' => 'sekundy',

    'fields' => [
        'subject' => 'Temat',
        'ticket' => 'Wątek',
        'comment' => 'Komentarz',
    ],

    'actions' => [
        'create' => 'Otwórz wątek',
        'reopen' => 'Otwórz ponownie',
    ],

    'state' => [
        'open' => 'Otwarty',
        'closed' => 'Zamknięty',
        'replied' => 'Odpowiedział',
    ],

    'tickets' => [
        'closed' => 'Ten wątek jest zamknięty.',

        'open' => 'Otwórz zgłoszenie',

        'notification' => 'Nowa odpowiedź na Twoje zgłoszenie.',
        'delay' => 'Musisz poczekać :time przed otwarciem nowego zgłoszenia.',
        'info' => '<strong>:author</strong> utworzył to zgłoszenie w kategorii <strong>:category</strong> :date.',
    ],

    'webhook' => [
        'ticket' => 'Nowy wątek na pomocy',
        'comment' => 'Nowy komentarz odnośnie wątku',
        'closed' => 'Zgłoszenie zostało zamknięte',
    ],

    'mails' => [
        'comment' => [
            'subject' => 'Nowa odpowiedź na Twoje zgłoszenie',
            'message' => 'Witaj :user, otrzymałeś nową odpowiedź do twojego zgłoszenia #:id od administratora :author.',
            'view' => 'Pokaż wszystkie zgłoszenia',
        ],
    ],

    'days' => 'dni',
];
