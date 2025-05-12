<?php

return [
    'title' => 'Pagalba',

    'categories' => [
        'title' => 'Kategorijos',
        'edit' => 'Redaguoti kategorija #:category',
        'create' => 'Sukurti kategorija',

        'delete_empty' => 'Kategorija turi bilietų ir negali būti pašalinta.',
    ],

    'tickets' => [
        'title' => 'Bilietai',
        'show' => 'Bilietas #:ticket - :name',
        'create' => 'Sukurti bilietą',

        'open' => 'Atviri bilietai',
    ],

    'permissions' => [
        'tickets' => 'Peržiūrėti ir redaguoti pagalbos bilietus',
        'categories' => 'Peržiūrėti ir tvarkyti pagalbos kategorijas',
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
        'title' => 'Pagalbos nustatymai',
        'home_message' => 'Pagrindinio puslapio žinutė',
        'delay' => 'Delay between two tickets',
        'webhook' => 'Discord Webhook URL adresas',
        'webhook_info' => 'Kai vartotojas sukurs bilietą arba pridės komentarą, bus sukurtas pranešimas šiame webhook\'e. Palikite tuščią, kad išjungtumėte',
        'scheduler' => 'Kai CRON užduotys bus nustatytos, bilietai gali būti automatiškai uždaryti po tam tikro laiko.',
        'auto_close' => 'Uždelstas laikas prieš automatiškai uždarant bilietus',
        'auto_close_info' => 'Kai bilietas negauna jokių atsakymų per šį laikotarpį, jis bus automatiškai uždarytas. Palikite šį langą tuščią, jog išjungti.',
        'reopen' => 'Leisti vartotojams iš naujo atidaryti uždarytą bilietą.',
    ],

    'logs' => [
        'tickets' => [
            'reopened' => 'Iš naujo atidarytas bilietas #:id',
            'closed' => 'Uždarytas bilietas #:id',
        ],
    ],
];
