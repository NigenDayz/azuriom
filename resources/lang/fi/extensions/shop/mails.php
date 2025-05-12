<?php

return [
    'payment' => [
        'subject' => 'Kiitos ostoksestasi',
        'intro' => 'Kiitos :user ostoksestasi! Maksusi on vahvistettu ja saat ostoksesi muutaman minuutin kuluttua.',
        'total' => 'Yhteensä: :Total',
        'transaction' => 'Maksutapahtuman tunnus: :transaction (:gateway)',
        'date' => 'Päivämäärä: :date',
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
