<?php

return [
    'payment' => [
        'subject' => 'Dziękujemy za zakupy',
        'intro' => 'Dziękujemy :user za zakup! Twoja płatność została potwierdzona, a zakupy otrzymasz w ciągu kilku minut.',
        'total' => 'Łącznie: :total',
        'transaction' => 'ID transakcji: :transaction (:gateway)',
        'date' => 'Data: :date',
        'subscription' => 'Ta płatność dotyczy subskrypcji rozpoczętej w dniu :date możesz zarządzać nią w swoim profilu.',
        'profile' => 'Przejdź do profilu',
    ],

    'giftcard' => [
        'subject' => 'Kod karty podarunkowej',
        'intro' => 'Dziękujemy za zakup! Twoja karta podarunkowa jest już dostępna.',
        'code' => 'Kod: :code',
        'balance' => 'Saldo: :balance',
    ],

    'file' => [
        'subject' => 'Link do pobrania',
        'intro' => 'Dziękujemy :user za zakup! Link do pobrania jest dostępny poniżej.',
    ],
];
