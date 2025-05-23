<?php

return [
    'title' => 'Assistència',

    'seconds' => 'seconds',

    'fields' => [
        'subject' => 'Assumpte',
        'ticket' => 'Tiquet',
        'comment' => 'Comment',
    ],

    'actions' => [
        'create' => 'Open a new ticket',
        'reopen' => 'Reobrir',
    ],

    'state' => [
        'open' => 'Obert',
        'closed' => 'Tancat',
        'replied' => 'Replied',
    ],

    'tickets' => [
        'closed' => 'Aquest ticket està tancat.',

        'open' => 'Open a ticket',

        'notification' => 'Nova resposta al seu ticket.',
        'delay' => 'You need to wait :time before opening a new ticket.',
        'info' => '<strong>:author</strong> created this ticket in the category <strong>:category</strong> the :date.',
    ],

    'webhook' => [
        'ticket' => 'Nou ticket d\'assistència',
        'comment' => 'Nou comentari en l\'assistència',
        'closed' => 'Ticket closed',
    ],

    'mails' => [
        'comment' => [
            'subject' => 'New reply on your support ticket',
            'message' => 'Hello :user, your support ticket #:id got a new reply from :author.',
            'view' => 'View the ticket',
        ],
    ],

    'days' => 'days',
];
