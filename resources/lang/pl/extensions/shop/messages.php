<?php

return [
    'title' => 'Sklep',
    'welcome' => 'Witaj w sklepie!',

    'buy' => 'Kup',

    'free' => 'Darmowy',

    'periods' => [
        'hours' => 'godzin(-y)',
        'days' => 'dni',
        'weeks' => 'tygodni',
        'months' => 'miesiące',
        'years' => 'lata',
    ],

    'fields' => [
        'balance' => 'Saldo',
        'category' => 'Kategoria',
        'code' => 'Kod',
        'commands' => 'Komendy',
        'currency' => 'Waluta',
        'discount' => 'Zniżka',
        'expire_date' => 'Data ważności',
        'gateways' => 'Bramki',
        'global_limit' => 'Globalny limit zakupów',
        'original_balance' => 'Oryginalne saldo',
        'package' => 'Pakiet',
        'packages' => 'Pakiety',
        'payment_id' => 'ID płatności',
        'payments' => 'Płatności',
        'price' => 'Cena',
        'quantity' => 'Ilość',
        'renewal_date' => 'Data odnowienia',
        'required' => 'Wymagane',
        'required_packages' => 'Wymagane pakiety',
        'required_roles' => 'Wymagana rola',
        'role' => 'Ustawienie roli po zakupie',
        'start_date' => 'Data rozpoczęcia',
        'subscription' => 'Subskrypcja',
        'subscription_id' => 'ID subskrypcji',
        'total' => 'Łącznie',
        'user_id' => 'ID użytkownika',
        'user_limit' => 'Limit zakupów użytkownika',
    ],

    'actions' => [
        'subscribe' => 'Subskrybuj',
        'manage' => 'Zarządzaj subskrypcją',
        'move' => 'Przenieś',
    ],

    'goal' => [
        'title' => 'Cel miesiąca',
        'progress' => ':count% ukończone',
    ],

    'recent' => [
        'title' => 'Ostatnie płatności',
        'empty' => 'Brak ostatnich płatności',
    ],

    'top' => [
        'title' => 'Najlepszy klient',
    ],

    'cart' => [
        'title' => 'Wózek',
        'success' => 'Twój zakup został ukończony pomyślnie.',
        'guest' => 'Musisz być zalogowany, aby dokonać zakupu.',
        'empty' => 'Twój koszyk jest pusty.',
        'checkout' => 'Kasa',
        'clear' => 'Wyczyść koszyk',
        'pay' => 'Zapłać',
        'back' => 'Wróć do sklepu',
        'total' => 'Łącznie: :total',
        'payable_total' => 'Suma do zapłaty: :total',
        'credit' => 'Kredyt',

        'confirm' => [
            'title' => 'Zapłacić?',
            'price' => 'Czy na pewno chcesz to zakupić za :price',
        ],

        'errors' => [
            'money' => 'Nie masz wystarczającej ilości środków na dokonanie tego zakupu.',
            'execute' => 'Wystąpił nieznany błąd podczas płatności, a Twój zakup został odwołany.',
        ],
    ],

    'coupons' => [
        'title' => 'Kupony',
        'add' => 'Dodaj kupon',
        'error' => 'Taki kupon nie istnieje, stracił ważność lub nie może być już użyty.',
        'cumulate' => 'Tego kuponu nie można łączyć z innymi.',
    ],

    'payment' => [
        'title' => 'Zapłata',
        'manual' => 'Płatność ręczna',

        'empty' => 'Obecnie brak dostępnych metod płatności.',

        'info' => 'Kupiono #:id na :website',
        'subscription' => ':package - Subskrypcja (Użytkownik #:user)',
        'error' => 'Nie udało się zrealizować płatności.',
        'giftcards' => 'Karty podarunkowe',

        'success' => 'Płatność zakończona, zakupy w grze w ciągu mniej niż minuty.',
        'pending' => 'Płatność w toku, otrzymasz swój zakup w grze, gdy płatność zostanie potwierdzona.',

        'webhook' => 'Nowa płatność w sklepie',
        'webhook_info' => 'Łącznie: :total, ID: :id (:gateway)',
        'webhook_chargeback' => 'Obciążenie zwrotne płatności w sklepie',
        'webhook_refund' => 'Zwrot płatności w sklepie',
    ],

    'categories' => [
        'empty' => 'Ta kategoria jest pusta.',
    ],

    'packages' => [
        'limit' => 'Kupiłeś maksymalnie możliwe dla tych pakietów.',
        'requirements' => 'Nie posiadasz uprawnień do zakupu tego pakietu.',
        'cumulate' => 'Nie można kupić tego pakietu z innym pakietem z tej samej kategorii w ramach tego samego zakupu.',
        'file' => 'Kliknij tutaj, aby pobrać plik :file',
    ],

    'offers' => [
        'gateway' => 'Rodzaj płatności',
        'amount' => 'Kwota',

        'empty' => 'Obecnie nie są dostępne żadne oferty.',
    ],

    'profile' => [
        'payments' => 'Twoje płatności',
        'subscriptions' => 'Twoja subskrypcja',
        'money' => 'Pieniądze: :balance',
    ],

    'giftcards' => [
        'title' => 'Karty podarunkowe',
        'error' => 'Ta karta podarunkowa nie istnieje, straciła ważność lub jest wykorzystana.',
        'add' => 'Zrealizuj kartę podarunkową',
        'notification' => 'Otrzymałeś kartę podarunkową, kod to :code (:balance).',
        'pending' => 'Płatność została już rozpoczęta dla tej karty podarunkowej. Zakończ płatność lub poczekaj kilka minut.',
    ],
];
