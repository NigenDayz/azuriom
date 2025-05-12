<?php

return [
    'payment' => [
        'subject' => 'Bedankt voor uw aankoop',
        'intro' => 'Bedankt :user u voor uw aankoop! Uw betaling is bevestigd en u ontvangt uw aankopen binnen enkele minuten.',
        'total' => 'Totaal: :total',
        'transaction' => 'Transactie-ID: :transaction (:gateway)',
        'date' => 'Datum: :date',
        'subscription' => 'Deze betaling is voor een abonnement gestart op :date, U kunt het beheren in uw profiel.',
        'profile' => 'Ga naar profiel',
    ],

    'giftcard' => [
        'subject' => 'Uw cadeaubon code',
        'intro' => 'Bedankt voor uw aankoop! Uw cadeaubon is nu beschikbaar.',
        'code' => 'Code: :code',
        'balance' => 'Saldo: :balance',
    ],

    'file' => [
        'subject' => 'Your download link',
        'intro' => 'Thank you :user for your purchase! The download link for your purchase is available below.',
    ],
];
