<?php

return [
    'title' => 'Support',

    'categories' => [
        'title' => 'Kategorien',
        'edit' => 'Kategorie #:category bearbeiten',
        'create' => 'Kategorie erstellen',

        'delete_empty' => 'Die Kategorie enthält Tickets und kann nicht gelöscht werden.',
    ],

    'tickets' => [
        'title' => 'Tickets',
        'show' => 'Ticket #:ticket - :name',
        'create' => 'Ticket erstellen',

        'open' => 'Tickets öffnen',
    ],

    'permissions' => [
        'tickets' => 'Anzeigen und Verwalten von Support-Tickets',
        'categories' => 'Anzeigen und Verwalten von Support Kategorien',
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
        'title' => 'Support-Einstellungen',
        'home_message' => 'Startseiten-Nachricht',
        'delay' => 'Delay between two tickets',
        'webhook' => 'Discord Webhook URL',
        'webhook_info' => 'Wenn ein Benutzer ein Ticket erstellt oder einen Kommentar hinzufügt, wird eine Benachrichtigung auf diesem Webhook erstellt. Zum Deaktivieren leer lassen',
        'scheduler' => 'Wenn CRON-Aufgaben eingerichtet sind, können Tickets nach einer bestimmten Zeit automatisch geschlossen werden.',
        'auto_close' => 'Verzögerung vor dem automatischen Schließen von Tickets',
        'auto_close_info' => 'Wenn ein Ticket innerhalb dieser Zeit keine Antwort erhält, wird es automatisch geschlossen. Lass leer, um es zu deaktivieren.',
        'reopen' => 'Erlaube Benutzern, ein geschlossenes Ticket wieder zu öffnen.',
    ],

    'logs' => [
        'tickets' => [
            'reopened' => 'Wiedereröffnetes Ticket #:id',
            'closed' => 'Ticket #:id geschlossen',
        ],
    ],
];
