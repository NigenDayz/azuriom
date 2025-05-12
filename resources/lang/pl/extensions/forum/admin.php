<?php

return [

    'nav' => [
        'settings' => 'Ustawienia',
        'forums' => 'Forum',
        'tags' => 'Tagi',
    ],

    'settings' => [
        'title' => 'Ustawienia forum',
        'home_message' => 'Wiadomość powitalna',
        'webhook' => 'Link do webhooka discorda',
        'webhook_info' => 'Powiadomienie zostanie wysłane na ten webhook po opublikowaniu nowej wiadomości. Pozostaw puste, aby wyłączyć',
    ],

    'categories' => [
        'title' => 'Kategorie',
        'edit' => 'Edytuj kategorię :category',
        'create' => 'Utwórz kategorię',

        'delete_error' => 'Ta kategoria zawiera fora i nie można jej usunąć.',
    ],

    'forums' => [
        'title' => 'Fora',
        'create' => 'Utwórz forum',
        'edit' => 'Edytuj forum :forum',

        'create_category' => 'Utwórz kategorię',
        'create_forum' => 'Utwórz forum',

        'parent' => 'Forum nadrzędne',
        'restricted' => 'Ogranicz dostęp do tego forum tylko do pewnych ról',
        'default_tags' => 'Domyślne tagi',
        'lock' => 'Zablokuj to forum',
        'lock_info' => 'Użytkownicy niebędący administratorami nie będą mogli tworzyć dyskusji.',
        'private' => 'Prywatne forum',
        'private_info' => 'Użytkownicy mogą widzieć tylko własne dyskusje i przypięte dyskusje.',

        'updated' => 'Zaktualizowano kolejność forów.',
        'delete_error' => 'Nie można usunąć forum z subforami.',
    ],

    'discussions' => [
        'card' => 'Dyskusje na forum',
    ],

    'posts' => [
        'card' => 'Posty na forum',

        'recent' => 'Najnowsze posty w kategorii Home',
        'delay' => 'Opóźnienie między postami',
        'seconds' => 'sekundy',
    ],

    'tags' => [
        'title' => 'Tagi',
        'create' => 'Stwórz tag',
    ],

    'logs' => [
        'forum-discussions' => [
            'deleted' => 'Usunięto dyskusję #:id',
            'pinned' => 'Przypięto dyskusje #:id',
            'unpinned' => 'Odpięto dyskusje #:id',
            'locked' => 'Zamknięto dyskusje #:id',
            'unlocked' => 'Odblokowano dyskusje #:id',
        ],

        'forum-posts' => [
            'deleted' => 'Usunięto post #:id',
        ],

        'forum-categories' => [
            'created' => 'Utworzono kategorię forum #:id',
            'updated' => 'Zaktualizowano kategorie forum #:id',
            'deleted' => 'Usunięto kategorie forum #:id',
        ],

        'forum-forums' => [
            'created' => 'Utworzono forum #:id',
            'updated' => 'Zaktualizowano forum #:id',
            'deleted' => 'Usunięto forum #:id',
        ],
    ],

    'permissions' => [
        'forums' => 'Zarządzaj forami i kategoriami',
        'discussions' => 'Zarządzaj dyskusjami na forum (przenoszenie, edycja, usuwanie, pin, blokada)',
        'private' => 'Zobacz dyskusje od innych użytkowników na prywatnych forach',
        'delete_own_posts' => 'Usuń własne posty na forum',
        'locked' => 'Utwórz dyskusję na zablokowanym forum'
    ],
];
