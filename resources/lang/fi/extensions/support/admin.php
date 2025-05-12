<?php

return [
    'title' => 'Tuki',

    'categories' => [
        'title' => 'Kategoriat',
        'edit' => 'Muokkaa kategoriaa #:category',
        'create' => 'Luo kategoria',

        'delete_empty' => 'Tämä kategoria sisältää tukipyyntöjä, eikä sitä voi poistaa.',
    ],

    'tickets' => [
        'title' => 'Tukipyynnöt',
        'show' => 'Tukipyyntö #:ticket - :name',
        'create' => 'Luo uusi tukipyyntö',

        'open' => 'Avoimet tukipyynnöt',
    ],

    'permissions' => [
        'tickets' => 'Tarkastele ja hallitse tukipyyntöjä',
        'categories' => 'Tarkastele ja hallitse tukikategorioita',
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
        'title' => 'Tuki asetukset',
        'home_message' => 'Home message',
        'delay' => 'Delay between two tickets',
        'webhook' => 'Discord Webhook URL',
        'webhook_info' => 'Kun käyttäjä luo tukipyynnöt tai lisää kommentin, se luo ilmoituksen tähän webhookkiin. Jätä tyhjäksi poistaaksesi käytöstä',
        'scheduler' => 'When CRON tasks are setup, tickets can be automatically closed after a certain time.',
        'auto_close' => 'Delay before automatically closing tickets',
        'auto_close_info' => 'When a ticket doesn\'t receive any answer during this time, it will be automatically closed. Leave empty to disable.',
        'reopen' => 'Allow users to reopen a closed ticket.',
    ],

    'logs' => [
        'tickets' => [
            'reopened' => 'Reopened ticket #:id',
            'closed' => 'Suljettu tukipyyntö #:id',
        ],
    ],
];
