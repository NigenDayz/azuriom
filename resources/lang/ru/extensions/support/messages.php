<?php

return [
    'title' => 'Поддержка',

    'seconds' => 'секунд',

    'fields' => [
        'subject' => 'Тема',
        'ticket' => 'Тикет',
        'comment' => 'Комментарий',
    ],

    'actions' => [
        'create' => 'Создать новый тикет',
        'reopen' => 'Открыть снова',
    ],

    'state' => [
        'open' => 'Открыто',
        'closed' => 'Закрыт',
        'replied' => 'Отвечено',
    ],

    'tickets' => [
        'closed' => 'Этот тикет закрыт.',

        'open' => 'Создать тикет',

        'notification' => 'Новый ответ на вашу заявку в поддержке.',
        'delay' => 'Вам нужно подождать :time перед открытием нового тикета.',
        'info' => '<strong>:author</strong> создал этот тикет в категории <strong>:category</strong> :date.',
    ],

    'webhook' => [
        'ticket' => 'Новый тикет службы поддержки',
        'comment' => 'Новый комментарий службы поддержки',
        'closed' => 'Заявка закрыта',
    ],

    'mails' => [
        'comment' => [
            'subject' => 'Новый ответ на вашу заявку в поддержке',
            'message' => 'Здравствуйте, :user, ваша заявка на поддержку #:id получила новый ответ от :author.',
            'view' => 'Посмотреть заявку',
        ],
    ],

    'days' => 'дней',
];
