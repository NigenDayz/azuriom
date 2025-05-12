<?php

return [
    'title' => 'Suporte',

    'seconds' => 'segundos',

    'fields' => [
        'subject' => 'Assunto',
        'ticket' => 'Ticket',
        'comment' => 'Comentário',
    ],

    'actions' => [
        'create' => 'Abra um novo ticket',
        'reopen' => 'Reabrir',
    ],

    'state' => [
        'open' => 'Abrir',
        'closed' => 'Fechado',
        'replied' => 'Respondido',
    ],

    'tickets' => [
        'closed' => 'Este ticket foi fechado.',

        'open' => 'Abrir um ticket',

        'notification' => 'Nova resposta no seu ticket de suporte.',
        'delay' => 'Você precisa esperar :time antes de abrir um novo ticket.',
        'info' => '<strong>:author</strong> criou esse ticket na categoria <strong>:category</strong> dia :date.',
    ],

    'webhook' => [
        'ticket' => 'Abrir um novo ticket de suporte',
        'comment' => 'Novo comentário em seu ticket',
        'closed' => 'Ticket fechado',
    ],

    'mails' => [
        'comment' => [
            'subject' => 'Nova resposta no seu ticket de suporte',
            'message' => 'Olá :user, o seu ticket de suporte #:id recebeu uma nova resposta de :author.',
            'view' => 'Ver o ticket',
        ],
    ],

    'days' => 'dias',
];
