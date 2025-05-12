<?php

return [
    'payment' => [
        'subject' => 'Tack för ditt köp',
        'intro' => 'Tack :user dig för ditt köp! Din betalning har bekräftats och du kommer att få dina köp inom några minuter.',
        'total' => 'Totalt: :total',
        'transaction' => 'Transaktions-ID: :transaction (:gateway)',
        'date' => 'Datum: :datum',
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
