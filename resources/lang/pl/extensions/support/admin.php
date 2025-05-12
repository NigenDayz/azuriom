<?php

return [
    'title' => 'Pomoc',

    'categories' => [
        'title' => 'Kategorie',
        'edit' => 'Edytuj kategorię #:category',
        'create' => 'Utwórz kategorię',

        'delete_empty' => 'Kategoria zawiera zgłoszenia i nie może zostać usunięta.',
    ],

    'tickets' => [
        'title' => 'Wątki',
        'show' => 'Zgłoszenie #:ticket - :name',
        'create' => 'Utwórz zgłoszenie',

        'open' => 'Otwórz zgłoszenie',
    ],

    'permissions' => [
        'tickets' => 'Wyświetl i zarządzaj wątkami',
        'categories' => 'Wyświetlaj kategorie i zarządzaj nimi',
    ],

    'fields' => [
        'title' => 'Pola szablonu zgłoszenia',
        'info' => 'Szablon zgłoszenia służy do definiowania pól, które będą wyświetlane podczas tworzenia zgłoszenia zamiast pola tekstowego.',
        'required' => 'Czy to pole jest wymagane?',
        'options' => 'Opcje',

        'text' => 'Tekst',
        'textarea' => 'Obszar tekstowy (wiele wierszy)',
        'number' => 'Numer',
        'email' => 'E-mail',
        'checkbox' => 'Pole wyboru',
        'dropdown' => 'Rozwijane menu',
    ],

    'settings' => [
        'title' => 'Ustawienia pomocy',
        'home_message' => 'Wiadomość główna',
        'delay' => 'Opóźnienie pomiędzy dwoma zgłoszeniami',
        'webhook' => 'Adres URL webhooka Discord',
        'webhook_info' => 'Gdy użytkownik utworzy zgłoszenie lub doda komentarz, to stworzy powiadomienie na tym webhooku. Pozostaw puste, aby wyłączyć',
        'scheduler' => 'Po skonfigurowaniu zadań CRON zgłoszenia mogą być automatycznie zamykane po określonym czasie.',
        'auto_close' => 'Opóźnienie przed automatycznym zamknięciem biletów',
        'auto_close_info' => 'Gdy zgłoszenie nie otrzyma odpowiedzi w tym czasie, zostanie automatycznie zamknięte. Pozostaw puste, aby wyłączyć.',
        'reopen' => 'Zezwalaj użytkownikom na ponowne otwarcie zamkniętego zgłoszenia.',
    ],

    'logs' => [
        'tickets' => [
            'reopened' => 'Ponownie otwarte zgłoszenie #:id',
            'closed' => 'Zamknięte zgłoszenie #:id',
        ],
    ],
];
