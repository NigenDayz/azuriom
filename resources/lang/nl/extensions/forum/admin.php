<?php

return [

    'nav' => [
        'settings' => 'Instellingen',
        'forums' => 'Forums',
        'tags' => 'Tags',
    ],

    'settings' => [
        'title' => 'Forum instellingen',
        'home_message' => 'Home bericht',
        'webhook' => 'Discord Webhook URL',
        'webhook_info' => 'Er wordt een melding verzonden op deze webhook wanneer een nieuw bericht is geplaatst. Laat leeg om uit te schakelen',
    ],

    'categories' => [
        'title' => 'Categorieën',
        'edit' => 'Categorie :category bewerken',
        'create' => 'Categorie aanmaken',

        'delete_error' => 'Deze categorie bevat forums en kan niet worden verwijderd.',
    ],

    'forums' => [
        'title' => 'Forums',
        'create' => 'Forum aanmaken',
        'edit' => 'Bewerk :forum forum',

        'create_category' => 'Categorie aanmaken',
        'create_forum' => 'Forum aanmaken',

        'parent' => 'Bovenliggend forum',
        'restricted' => 'Beperk alleen de toegang tot dit forum tot bepaalde rollen',
        'default_tags' => 'Standaard tags',
        'lock' => 'Vergrendel dit forum',
        'lock_info' => 'Gebruikers die geen admin zijn, kunnen geen discussies meer aanmaken.',
        'private' => 'Privé forum',
        'private_info' => 'Gebruikers kunnen alleen hun eigen discussies en vastgelegde discussies zien.',

        'updated' => 'Forum volgorde bijgewerkt.',
        'delete_error' => 'Een forum met discussies of subforums kan niet verwijderd worden.',
    ],

    'discussions' => [
        'card' => 'Forum discussies',
    ],

    'posts' => [
        'card' => 'Forumberichten',

        'recent' => 'Recente berichten in home',
        'delay' => 'Vertraging tussen berichten',
        'seconds' => 'seconden',
    ],

    'tags' => [
        'title' => 'Tags',
        'create' => 'Maak een tag',
    ],

    'logs' => [
        'forum-discussions' => [
            'deleted' => 'Verwijderde discussie #:id',
            'pinned' => 'Vastgezette discussie #:id',
            'unpinned' => 'Discussie losgemaakt #:id',
            'locked' => 'Vergrendelde discussie #:id',
            'unlocked' => 'Ontgrendelde discussie #:id',
        ],

        'forum-posts' => [
            'deleted' => 'Post verwijderd #:id',
        ],

        'forum-categories' => [
            'created' => 'Gemaakte forum categorieën #:id',
            'updated' => 'Bijgewerkte forumcategorie #:id',
            'deleted' => 'Verwijderde forum categorieën #:id',
        ],

        'forum-forums' => [
            'created' => 'Gecreëerde forum #:id',
            'updated' => 'Bijgewerkte forum #:id',
            'deleted' => 'Verwijderde forum #:id',
        ],
    ],

    'permissions' => [
        'forums' => 'Beheer forums en categorieën',
        'discussions' => 'Beheer forum discussies (verplaatsen, bewerken, verwijderen, pin, slot)',
        'private' => 'Bekijk discussies van andere gebruikers in privéforums',
        'delete_own_posts' => 'Verwijder eigen forumberichten',
        'locked' => 'Een discussie maken in een vergrendeld forum'
    ],
];
