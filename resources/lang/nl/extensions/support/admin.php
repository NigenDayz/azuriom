<?php

return [
    'title' => 'Support',

    'categories' => [
        'title' => 'Categorieën',
        'edit' => 'Bewerk categorie #:category',
        'create' => 'Categorie aanmaken',

        'delete_empty' => 'De categorie bevat tickets en kan niet worden verwijderd.',
    ],

    'tickets' => [
        'title' => 'Tickets',
        'show' => 'Ticket #:ticket - :name',
        'create' => 'Ticket aanmaken',

        'open' => 'Openstaande tickets',
    ],

    'permissions' => [
        'tickets' => 'Bekijk en beheer ondersteuningstickets',
        'categories' => 'Bekijk en beheer ondersteuningstickets',
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
        'title' => 'Instellingen voor ondersteuning',
        'home_message' => 'Home bericht',
        'delay' => 'Delay between two tickets',
        'webhook' => 'Discord Webhook URL',
        'webhook_info' => 'Wanneer een gebruiker een ticket maakt of een reactie toevoegt, maakt deze een notificatie op deze webhook. Laat leeg om uit te schakelen',
        'scheduler' => 'Wanneer CRON taken zijn ingesteld, kunnen tickets automatisch worden gesloten na een bepaalde tijd.',
        'auto_close' => 'Vertraging voor het automatisch sluiten van tickets',
        'auto_close_info' => 'Wanneer een ticket gedurende deze tijd geen antwoord ontvangt, wordt deze automatisch gesloten. Laat leeg om uit te schakelen.',
        'reopen' => 'Gebruikers toestaan een gesloten ticket te heropenen.',
    ],

    'logs' => [
        'tickets' => [
            'reopened' => 'Heropend ticket #:id',
            'closed' => 'Gesloten ticket #:id',
        ],
    ],
];
