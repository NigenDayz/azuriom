<?php

return [
    'title' => 'Forum',

    'fields' => [
        'forum' => 'Forum',
        'tags' => 'Tagi',
        'editor' => 'Edytor',
    ],

    'actions' => [
        'pin' => 'Przypnij',
        'unpin' => 'Odepnij',
        'lock' => 'Zablokuj',
        'unlock' => 'Odblokuj',
    ],

    'latest' => [
        'title' => 'Ostatnie posty',
    ],

    'stats' => [
        'title' => 'Statystyki',

        'discussions' => 'Dyskusje: :count',
        'posts' => 'Postów: :count',
        'users' => 'Użytkowników: :count',
    ],

    'online' => [
        'title' => 'Dostępni użytkownicy',

        'none' => 'Brak dostępnych użytkowników...',
    ],

    'forums' => [
        'discussions' => ':count dyskusja|:count dyskusje',

        'locked' => 'To forum jest zablokowane.',
    ],

    'discussions' => [
        'title' => 'Dyskusje',
        'create' => 'Utwórz dyskusję',
        'edit' => 'Edytuj dyskusję',

        'pin' => 'Przypnij tę dyskusję',
        'lock' => 'Zablokuj tę dyskusję',

        'respond' => 'Odpowiedz',
        'views' => ':count widok|:count wyświetleń|:count wyświetleń',

        'locked' => 'Zablokowane',
        'pinned' => 'Przypięte',

        'locked_info' => 'Ta dyskusja jest zablokowana.',

        'posts' => ':count post|:count postów',

        'delete' => 'Czy na pewno chcesz usunąć tę dyskusję?',

        'status' => [
            'created' => 'Dyskusja została utworzona.',
            'updated' => 'Ta dyskusja została zmodyfikowana.',
            'deleted' => 'Ta dyskusja została usunięta.',

            'pinned' => 'Ta dyskusja została przypięta.',
            'unpinned' => 'Ta dyskusja została odpięta.',
            'locked' => 'Ta dyskusja została zablokowana.',
            'unlocked' => 'Ta dyskusja została odblokowana.',
        ],
    ],

    'posts' => [
        'title' => 'Posty',
        'edit' => 'Edytuj post',

        'delay' => 'Możesz pisać ponownie za :time.',

        'delete' => 'Czy na pewno chcesz usunąć ten post?',

        'status' => [
            'created' => 'Post został utworzony.',
            'updated' => 'Ten post został zmodyfikowany.',
            'deleted' => 'Ten post został usunięty.',
        ],
    ],

    'notifications' => [
        'reply' => ':user odpowiedział na twoją dyskusję :discussion',
        'mention' => ':user wspomniał o tobie w :discussion',
    ],

    'profile' => [
        'likes' => 'Polubień',
        'posts' => 'Posty',
        'discussions' => 'Dyskusje',

        'information' => 'Informacje',
        'edit' => 'Edytuj profil',

        'location' => 'Lokalizacja',
        'website' => 'Strona internetowa',
        'about' => 'O Aplikacji',
        'signature' => 'Podpis',
        'registered' => 'Zarejestrowany',
        'last_seen' => 'Ostatnio widziany',
        'display_last_seen' => 'Wyświetl ostatnią wizytę',
    ],
];
