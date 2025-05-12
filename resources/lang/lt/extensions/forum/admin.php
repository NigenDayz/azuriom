<?php

return [

    'nav' => [
        'settings' => 'Nustatymai',
        'forums' => 'Diskusijos',
        'tags' => 'Žymos',
    ],

    'settings' => [
        'title' => 'Forumo nustatymai',
        'home_message' => 'Pagrindinio puslapio žinutė',
        'webhook' => 'Discord Webhook URL adresas',
        'webhook_info' => 'Pranešimas bus išsiųstas į šį webhook\'ą, kai bus paskelbtas naujas pranešimas. Palikite tuščią, kad išjungtumėte',
    ],

    'categories' => [
        'title' => 'Kategorijos',
        'edit' => 'Redaguoti kategorija :category',
        'create' => 'Sukurti kategorija',

        'delete_error' => 'Ši kategorija turi forumų ir negali būti ištrinta.',
    ],

    'forums' => [
        'title' => 'Forumas',
        'create' => 'Sukurti forumą',
        'edit' => 'Redaguoti forumą :forum',

        'create_category' => 'Sukurti kategorija',
        'create_forum' => 'Sukurti forumą',

        'parent' => 'Pagrindinis forumas',
        'restricted' => 'Duoti prieiga prie šio forumo tik tam tikroms grupėms',
        'default_tags' => 'Numatytosios žymos',
        'lock' => 'Užrakinti šį forumą',
        'lock_info' => 'Vartotojai kurie nėra administratoriai negalės kurti diskusijų.',
        'private' => 'Privatus forumas',
        'private_info' => 'Vartotojai gali matyti tik savo diskusijas ir prisegtas diskusijas.',

        'updated' => 'Forumų eiliškumas atnaujintas.',
        'delete_error' => 'Forumas su diskusijomis arba subforumas negali būti pašalintas.',
    ],

    'discussions' => [
        'card' => 'Forumo diskusijos',
    ],

    'posts' => [
        'card' => 'Forumo pranešimai',

        'recent' => 'Naujausi įrašai pagrindiniame puslapyje',
        'delay' => 'Vėlavimas tarp pranešimų',
        'seconds' => 'sekundės',
    ],

    'tags' => [
        'title' => 'Žymos',
        'create' => 'Kurti naują žymą',
    ],

    'logs' => [
        'forum-discussions' => [
            'deleted' => 'Ištrynė diskusija #:id',
            'pinned' => 'Prisegė diskusija #:id',
            'unpinned' => 'Atsegė diskusija #:id',
            'locked' => 'Užrakino diskusija #:id',
            'unlocked' => 'Atrakino diskusija #:id',
        ],

        'forum-posts' => [
            'deleted' => 'Pašalino pranešimą #:id',
        ],

        'forum-categories' => [
            'created' => 'Sukūrė forumo kategorija #:id',
            'updated' => 'Atnaujino forumo kategorija #:id',
            'deleted' => 'Pašalino forumo kategorija #:id',
        ],

        'forum-forums' => [
            'created' => 'Sukūrė forumą #:id',
            'updated' => 'Atnaujino foruma #:id',
            'deleted' => 'Pašalino foruma #:id',
        ],
    ],

    'permissions' => [
        'forums' => 'Tvarkyti forumus ir kategorijas',
        'discussions' => 'Tvarkyti forumo diskusijas (perkelti, redaguoti, pašalinti, prisegti, užrakinti)',
        'private' => 'Peržiūrėti diskusijas iš kitų narių privačiuose forumuose',
        'delete_own_posts' => 'Pašalinti savo forumo pranešimus',
        'locked' => 'Sukurti diskusiją užrakintame forume'
    ],
];
