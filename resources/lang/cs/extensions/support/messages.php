<?php

return [
    'title' => 'Podpora',

    'seconds' => 'sekund',

    'fields' => [
        'subject' => 'Předmět',
        'ticket' => 'Ticket',
        'comment' => 'Potvrdit',
    ],

    'actions' => [
        'create' => 'Otevřít nový ticket',
        'reopen' => 'Znovu otevřít',
    ],

    'state' => [
        'open' => 'Otevřený',
        'closed' => 'Uzavřený',
        'replied' => 'Odpověď',
    ],

    'tickets' => [
        'closed' => 'Tento ticket je uzavřený.',

        'open' => 'Otevřít ticket',

        'notification' => 'Nová odpověď na vašem ticketu podpory.',
        'delay' => 'Před otevřením nového ticketu musíte počkat :time.',
        'info' => 'Uživatel <strong>:author</strong> vytvořil tento ticket v kategorii <strong>:category</strong> :date.',
    ],

    'webhook' => [
        'ticket' => 'Nový ticket na podpoře',
        'comment' => 'Nový komentář na podpoře',
        'closed' => 'Ticket uzavřen',
    ],

    'mails' => [
        'comment' => [
            'subject' => 'Nová odpověď ve vašem ticketu podpory',
            'message' => 'Dobrý den, :user, váš ticket podpory #:id dostal novou odpověď od uživatele :author.',
            'view' => 'Zobrazit ticket',
        ],
    ],

    'days' => 'dní',
];
