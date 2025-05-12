<?php

return [
    'title' => 'Forum',

    'fields' => [
        'forum' => 'Forum',
        'tags' => 'Tags',
        'editor' => 'Bewerker',
    ],

    'actions' => [
        'pin' => 'Pin',
        'unpin' => 'Losmaken',
        'lock' => 'Sluit',
        'unlock' => 'Ontgrendelen',
    ],

    'latest' => [
        'title' => 'Laatste berichten',
    ],

    'stats' => [
        'title' => 'Statistieken',

        'discussions' => 'Discussies: :count',
        'posts' => 'Berichten :count',
        'users' => 'Users: :count',
    ],

    'online' => [
        'title' => 'Online users',

        'none' => 'Geen online gebruikers nu...',
    ],

    'forums' => [
        'discussions' => ':count discussie|:count discussies',

        'locked' => 'Dit forum is vergrendeld.',
    ],

    'discussions' => [
        'title' => 'Discussies',
        'create' => 'Creëer een discussie',
        'edit' => 'Discussie Wijzigen',

        'pin' => 'Pin deze discussie',
        'lock' => 'Vergrendel deze discussie',

        'respond' => 'Reageren',
        'views' => ':count view : count keer bekeken',

        'locked' => 'Op slot',
        'pinned' => 'Vastgemaakt',

        'locked_info' => 'Deze discussie is vergrendeld.',

        'posts' => ':count bericht|:count berichten',

        'delete' => 'Weet u zeker dat u deze discussie wilt verwijderen?',

        'status' => [
            'created' => 'De discussie is gemaakt.',
            'updated' => 'Deze discussie is aangepast.',
            'deleted' => 'Deze discussie is verwijderd.',

            'pinned' => 'Deze discussie is vastgezet.',
            'unpinned' => 'Deze discussie is losgemaakt.',
            'locked' => 'Deze discussie is gesloten.',
            'unlocked' => 'Deze discussie is ontgrendeld.',
        ],
    ],

    'posts' => [
        'title' => 'Berichten',
        'edit' => 'Bericht bewerken',

        'delay' => 'Je kunt weer posten over: :time.',

        'delete' => 'Weet u zeker dat u dit bericht wilt verwijderen?',

        'status' => [
            'created' => 'Het bericht is gemaakt.',
            'updated' => 'Dit bericht is gewijzigd.',
            'deleted' => 'Dit bericht is verwijderd.',
        ],
    ],

    'notifications' => [
        'reply' => ':user heeft gereageerd op uw discussie :discussion',
        'mention' => ':user noemde je in :discussion',
    ],

    'profile' => [
        'likes' => 'Likes',
        'posts' => 'Berichten',
        'discussions' => 'Discussies',

        'information' => 'Informatie',
        'edit' => 'Profiel bewerken',

        'location' => 'Locatie',
        'website' => 'Website',
        'about' => 'Over',
        'signature' => 'Handtekening',
        'registered' => 'Geregistreerd',
        'last_seen' => 'Voor het laatst gezien',
        'display_last_seen' => 'Laatste bezoek weergeven',
    ],
];
