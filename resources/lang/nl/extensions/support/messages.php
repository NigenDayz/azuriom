<?php

return [
    'title' => 'Support',

    'seconds' => 'seconds',

    'fields' => [
        'subject' => 'Onderwerp',
        'ticket' => 'Ticket',
        'comment' => 'Reactie',
    ],

    'actions' => [
        'create' => 'Open een nieuw ticket',
        'reopen' => 'Heropen',
    ],

    'state' => [
        'open' => 'Open',
        'closed' => 'Gesloten',
        'replied' => 'Beantwoordt',
    ],

    'tickets' => [
        'closed' => 'Dit ticket is gesloten.',

        'open' => 'Open een ticket',

        'notification' => 'Nieuwe reactie op je support ticket.',
        'delay' => 'You need to wait :time before opening a new ticket.',
        'info' => '<strong>:author</strong> heeft dit ticket aangemaakt in de categorie <strong>:category</strong> op :date.',
    ],

    'webhook' => [
        'ticket' => 'Nieuw ticket op de support',
        'comment' => 'Nieuwe reactie op de ondersteuning',
        'closed' => 'Ticket is gesloten',
    ],

    'mails' => [
        'comment' => [
            'subject' => 'Nieuwe reactie op je support ticket',
            'message' => 'Hallo :user, je support ticket #:id heeft een nieuw antwoord gekregen van :auteur.',
            'view' => 'Bekijk openstaande Tickets',
        ],
    ],

    'days' => 'dagen',
];
