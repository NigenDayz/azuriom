<?php

return [
    'title' => 'Support',

    'seconds' => 'seconds',

    'fields' => [
        'subject' => 'Betreff',
        'ticket' => 'Ticket',
        'comment' => 'Kommentar',
    ],

    'actions' => [
        'create' => 'Ein neues Ticket öffnen',
        'reopen' => 'Wieder öffnen',
    ],

    'state' => [
        'open' => 'Geöffnet',
        'closed' => 'Geschlossen',
        'replied' => 'Genantwortet',
    ],

    'tickets' => [
        'closed' => 'Dieses Ticket ist geschlossen.',

        'open' => 'Ein Ticket öffnen',

        'notification' => 'Neue Antwort auf dein Support-Ticket.',
        'delay' => 'You need to wait :time before opening a new ticket.',
        'info' => '<strong>:author</strong> hat dieses Ticket in der Kategorie <strong>:category</strong> am :date erstellt.',
    ],

    'webhook' => [
        'ticket' => 'Neues Ticket für den Support',
        'comment' => 'Neuer Kommentar zum Support',
        'closed' => 'Ticket geschlossen',
    ],

    'mails' => [
        'comment' => [
            'subject' => 'Neue Antwort auf Deinem Support-Ticket',
            'message' => 'Hallo :user, Dein Support-Ticket #:id hat eine neue Antwort von :author erhalten.',
            'view' => 'Ticket ansehen',
        ],
    ],

    'days' => 'Tage',
];
