<?php

return [
    'title' => 'Podpora',

    'categories' => [
        'title' => 'Kategorie',
        'edit' => 'Úprava kategorie #:category',
        'create' => 'Vytvořit kategorii',

        'delete_empty' => 'Kategorie obsahuje tickety a nemůže být odstraněna.',
    ],

    'tickets' => [
        'title' => 'Tickety',
        'show' => 'Ticket #:ticket - :name',
        'create' => 'Vytvořit ticket',

        'open' => 'Otevřené tickety',
    ],

    'permissions' => [
        'tickets' => 'Zobrazit a spravovat tickety podpory',
        'categories' => 'Zobrazit a spravovat kategorie podpory',
    ],

    'fields' => [
        'title' => 'Šablony polí ticketů',
        'info' => 'Šablona ticketu je použita pro definování polí, která budou zobrazena při vytváření ticketu, namísto volného textového pole.',
        'required' => 'Je toto pole povinné?',
        'options' => 'Možnosti',

        'text' => 'Text',
        'textarea' => 'Textová oblast (více řádků)',
        'number' => 'Číslo',
        'email' => 'E-mail',
        'checkbox' => 'Zaškrtávací pole',
        'dropdown' => 'Rozbalovací nabídka',
    ],

    'settings' => [
        'title' => 'Nastavení podpory',
        'home_message' => 'Zpráva na domovské obrazovce',
        'delay' => 'Zpoždění mezi dvěma tickety',
        'webhook' => 'URL Discord webhooku',
        'webhook_info' => 'Když si uživatel vytvoří ticket nebo přidá komentář, bude vytvořeno oznámení na tento webhook. Ponechte prázdné pro zakázání',
        'scheduler' => 'Při nastavení úkolů CRON mohou být tickety po určité době automaticky uzavřeny.',
        'auto_close' => 'Zpoždění před automatickým zavřením ticketů',
        'auto_close_info' => 'Pokud ticket v průběhu této doby neobdrží odpověď, bude automaticky uzavřen. Ponechte prázdné pro vypnutí.',
        'reopen' => 'Umožnit uživatelům znovu otevřít uzavřený ticket.',
    ],

    'logs' => [
        'tickets' => [
            'reopened' => 'Ticket #:id znovu otevřen',
            'closed' => 'Uzavřen ticket #:id',
        ],
    ],
];
