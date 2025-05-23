<?php

return [
    'title' => 'Soporte',

    'categories' => [
        'title' => 'Categorías',
        'edit' => 'Editar categoría #:categoría',
        'create' => 'Crear categoría',

        'delete_empty' => 'La categoría contiene tickets y no se puede eliminar.',
    ],

    'tickets' => [
        'title' => 'Tickets',
        'show' => 'Ticket #:ticket - :name',
        'create' => 'Crear ticket',

        'open' => 'Abierto ticket',
    ],

    'permissions' => [
        'tickets' => 'Ver y administrar tickets de soporte',
        'categories' => 'Ver y administrar categorías de soporte',
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
        'title' => 'Ajustes de soporte',
        'home_message' => 'Mensaje de inicio',
        'delay' => 'Delay between two tickets',
        'webhook' => 'URL del Webbook de Discord',
        'webhook_info' => 'Cuando un usuario crea un ticket o añade un comentario, creará una notificación en este webhook. Dejar en blanco para desactivar',
        'scheduler' => 'Cuando las tareas CRON están configuradas, los tickets pueden cerrarse automáticamente después de un cierto tiempo.',
        'auto_close' => 'Retraso antes de cerrar automáticamente tickets',
        'auto_close_info' => 'Cuando un ticket no reciba respuesta durante este tiempo, se cerrará automáticamente. Dejar en blanco para desactivarlo.',
        'reopen' => 'Permitir a los usuarios reabrir un ticket cerrado.',
    ],

    'logs' => [
        'tickets' => [
            'reopened' => 'Reabierto ticket #:id',
            'closed' => 'Ticket cerrado #:id',
        ],
    ],
];
