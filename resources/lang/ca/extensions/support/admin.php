<?php

return [
    'title' => 'Assistència',

    'categories' => [
        'title' => 'Categories',
        'edit' => 'Edit category #:category',
        'create' => 'Create category',

        'delete_empty' => 'The category contains tickets and can\'t be deleted.',
    ],

    'tickets' => [
        'title' => 'Tickets',
        'show' => 'Ticket #:ticket - :name',
        'create' => 'Create ticket',

        'open' => 'Open tickets',
    ],

    'permissions' => [
        'tickets' => 'Veure i administrar tickets d\'assistència',
        'categories' => 'Veure i administrar categories d\'assistència',
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
        'title' => 'Configuració d\'assistència',
        'home_message' => 'Home message',
        'delay' => 'Delay between two tickets',
        'webhook' => 'Enllaç del Webhook de Discord',
        'webhook_info' => 'When an user create a ticket or add a comment it will create a notification on this webhook. Leave empty to disable',
        'scheduler' => 'When CRON tasks are setup, tickets can be automatically closed after a certain time.',
        'auto_close' => 'Delay before automatically closing tickets',
        'auto_close_info' => 'When a ticket doesn\'t receive any answer during this time, it will be automatically closed. Leave empty to disable.',
        'reopen' => 'Allow users to reopen a closed ticket.',
    ],

    'logs' => [
        'tickets' => [
            'reopened' => 'Reopened ticket #:id',
            'closed' => 'Closed ticket #:id',
        ],
    ],
];
