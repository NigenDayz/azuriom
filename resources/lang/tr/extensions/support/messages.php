<?php

return [
    'title' => 'Destek',

    'seconds' => 'saniye',

    'fields' => [
        'subject' => 'Konu',
        'ticket' => 'Destek Talebi',
        'comment' => 'Yorum',
    ],

    'actions' => [
        'create' => 'Yeni bir destek talebi oluşturun',
        'reopen' => 'Yeniden aç',
    ],

    'state' => [
        'open' => 'Aç',
        'closed' => 'Kapalı',
        'replied' => 'Yanıtlandı',
    ],

    'tickets' => [
        'closed' => 'Bu yardım etiketi kapalı.',

        'open' => 'Destek talebini aç',

        'notification' => 'Destek biletinize yeni bir yanıt yazın.',
        'delay' => 'Yeni bir bilet açmadan önce :time kadar beklemeniz gerekiyor.',
        'info' => '<strong>:author</strong> bu destek talebini <strong>:category</strong> kategorisinde şu zamanda açtı: :date.',
    ],

    'webhook' => [
        'ticket' => 'Yeni bir destek talebi oluştur',
        'comment' => 'Destek talebine yeni yorum ekle',
        'closed' => 'Bilet Kapatıldı',
    ],

    'mails' => [
        'comment' => [
            'subject' => 'Destek biletinize yeni bir yanıt yazın',
            'message' => 'Merhaba :user! #:id destek talebinde :author tarafından bir yanıt var.',
            'view' => 'Talebi görüntüle',
        ],
    ],

    'days' => 'günler',
];
