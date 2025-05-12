<?php

return [
    'payment' => [
        'subject' => 'Danke für Ihren Einkauf',
        'intro' => 'Vielen Dank :user für Ihren Kauf! Deine Zahlung wurde bestätigt und du erhältst deine Einkäufe in wenigen Minuten.',
        'total' => 'Gesamt: :total',
        'transaction' => 'Transaktions-ID: :transaction (:gateway)',
        'date' => 'Datum: :date',
        'subscription' => 'Diese Zahlung ist für ein Abonnement, das am :date begonnen hat. Du kannst es in deinem Profil verwalten.',
        'profile' => 'Zum Profil',
    ],

    'giftcard' => [
        'subject' => 'Dein Geschenkkarten-Code',
        'intro' => 'Vielen Dank für deinen Einkauf! Dein Geschenkgutschein ist jetzt verfügbar.',
        'code' => 'Code: :code',
        'balance' => 'Kontostand: :balance',
    ],

    'file' => [
        'subject' => 'Your download link',
        'intro' => 'Thank you :user for your purchase! The download link for your purchase is available below.',
    ],
];
