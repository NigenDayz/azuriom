<?php

return [
    'title' => 'Segítségnyújtás',

    'categories' => [
        'title' => 'Kategóriák',
        'edit' => '#:category kategória szerkeztése',
        'create' => 'Kategória létrehozása',

        'delete_empty' => 'A kategória jegyeket tartalmaz, és nem törölhető.',
    ],

    'tickets' => [
        'title' => 'Jegyek',
        'show' => '#:ticket Jegy - :name',
        'create' => 'Jegy létrehozása',

        'open' => 'Nyitott Jegyek',
    ],

    'permissions' => [
        'tickets' => 'Segítségnyújtási jegyek megtekintése és kezelése',
        'categories' => 'Segítségnyújtási kategóriák megtekintése és kezelése',
    ],

    'fields' => [
        'title' => 'Ticket template fields',
        'info' => 'A ticket template is used to define the fields that will be displayed when creating a ticket instead of a free text field.',
        'required' => 'Is this field required?',
        'options' => 'Options',

        'text' => 'Text',
        'textarea' => 'Textarea (multiple lines)',
        'number' => 'Number',
        'email' => 'E-Mail',
        'checkbox' => 'Checkbox',
        'dropdown' => 'Dropdown',
    ],

    'settings' => [
        'title' => 'Segítségnyújtási beállítások',
        'home_message' => 'Home message',
        'delay' => 'Delay between two tickets',
        'webhook' => 'Discord Webhook URL-je',
        'webhook_info' => 'Amikor egy felhasználó jegyet hoz létre vagy megjegyzést ad hozzá, értesítést hoz létre ezen a webhookon. Üresen hagyva letiltja',
        'scheduler' => 'When CRON tasks are setup, tickets can be automatically closed after a certain time.',
        'auto_close' => 'Delay before automatically closing tickets',
        'auto_close_info' => 'When a ticket doesn\'t receive any answer during this time, it will be automatically closed. Leave empty to disable.',
        'reopen' => 'Allow users to reopen a closed ticket.',
    ],

    'logs' => [
        'tickets' => [
            'reopened' => 'Reopened ticket #:id',
            'closed' => '#:id jegy lezárva',
        ],
    ],
];
