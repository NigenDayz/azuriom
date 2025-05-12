<?php

return [
    'payment' => [
        'subject' => 'Köszönjük a vásárlást',
        'intro' => 'Köszönjük :user a vásárlást! Fizetésedet jóváhagytuk, és néhány percen belül megkapod vásárlásaidat.',
        'total' => 'Összesen: :total',
        'transaction' => 'Tranzakció azonosító: :transaction (:gateway)',
        'date' => 'Dátum: :date',
        'subscription' => 'This payment is for a subscription started on :date, you can manage it in your profile.',
        'profile' => 'Go to profile',
    ],

    'giftcard' => [
        'subject' => 'Your giftcard code',
        'intro' => 'Thank you for your purchase! Your giftcard is now available.',
        'code' => 'Code: :code',
        'balance' => 'Balance: :balance',
    ],

    'file' => [
        'subject' => 'Your download link',
        'intro' => 'Thank you :user for your purchase! The download link for your purchase is available below.',
    ],
];
