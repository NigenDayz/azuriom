<?php

return [
    'title' => 'Bolt',
    'welcome' => 'Üdvözlünk a boltban!',

    'buy' => 'Vásárlás',

    'free' => 'Ingyenes',

    'periods' => [
        'hours' => 'hours',
        'days' => 'days',
        'weeks' => 'weeks',
        'months' => 'months',
        'years' => 'years',
    ],

    'fields' => [
        'balance' => 'Egyenleg',
        'category' => 'Kategória',
        'code' => 'Kód',
        'commands' => 'Parancsok',
        'currency' => 'Pénznem',
        'discount' => 'Kedvezmény',
        'expire_date' => 'Lejárati dátum',
        'gateways' => 'Fizetési módok',
        'global_limit' => 'Global purchase limit',
        'original_balance' => 'Original Balance',
        'package' => 'Csomag',
        'packages' => 'Csomagok',
        'payment_id' => 'Fizetési azonosító',
        'payments' => 'Payments',
        'price' => 'Ár',
        'quantity' => 'Mennyiség',
        'renewal_date' => 'Renewal date',
        'required' => 'Required',
        'required_packages' => 'Required packages',
        'required_roles' => 'Szükséges rang',
        'role' => 'A vásárlás után beállítandó rang',
        'start_date' => 'Kezdő dátum',
        'subscription' => 'Subscription',
        'subscription_id' => 'Subscription ID',
        'total' => 'Összesen',
        'user_id' => 'Felhasználói azonosító',
        'user_limit' => 'Felhasználói vásárlási limit',
    ],

    'actions' => [
        'subscribe' => 'Subscribe',
        'manage' => 'Manage subscription',
        'move' => 'Move',
    ],

    'goal' => [
        'title' => 'Havi cél',
        'progress' => ':count% kész',
    ],

    'recent' => [
        'title' => 'Legutóbbi kifizetések',
        'empty' => 'Nincsenek friss kifizetések
',
    ],

    'top' => [
        'title' => 'Legjobb vásárló
',
    ],

    'cart' => [
        'title' => 'Kosár',
        'success' => 'Vásárlása sikeresen befejeződött.',
        'guest' => 'Be kell jelentkeznek, hogy vásárolhass.',
        'empty' => 'Üres a kosarad.',
        'checkout' => 'Fizetés',
        'clear' => 'Kosár kiürítése',
        'pay' => 'Fizetés',
        'back' => 'Vissza a bolthoz',
        'total' => 'Összesen: :total',
        'payable_total' => 'Total to pay: :total',
        'credit' => 'Kredit',

        'confirm' => [
            'title' => 'Fizetés?',
            'price' => 'Biztos vagy benne, hogy meg akarod venni ezt a kosarat :price-ért?',
        ],

        'errors' => [
            'money' => 'Nincs elég pénzed a vásárláshoz.',
            'execute' => 'Váratlan hiba történt a fizetés során, a vásárlásodat visszatérítettük.',
        ],
    ],

    'coupons' => [
        'title' => 'Kuponok',
        'add' => 'Kupon hozzáadása',
        'error' => 'Ez a kupon nem létezik, lejárt vagy már nem használható fel.',
        'cumulate' => 'Ez a kupon nem használható fel más kuponnal együtt.',
    ],

    'payment' => [
        'title' => 'Fizetés',
        'manual' => 'Manuális fizetés',

        'empty' => 'Nincs elérhető fizetési mód.',

        'info' => 'Vásárlás #:id a :website oldalon',
        'subscription' => ':package - Subscription (User #:user)',
        'error' => 'A kifizetést nem lehetett teljesíteni.',
        'giftcards' => 'Giftcards',

        'success' => 'A fizetés befejeződött, és kevesebb mint egy percen belül megkapod a vásárlásodat a játékban.',
        'pending' => 'Payment pending, you\'ll receive your purchase in-game once the payment is confirmed.',

        'webhook' => 'Új fizetés a boltban',
        'webhook_info' => 'Total: :total, ID: :id (:gateway)',
        'webhook_chargeback' => 'Payment chargeback on the shop',
        'webhook_refund' => 'Payment refund on the shop',
    ],

    'categories' => [
        'empty' => 'Ez a kategória üres.',
    ],

    'packages' => [
        'limit' => 'A lehető legtöbbet vásároltad meg ehhez a csomaghoz.',
        'requirements' => 'A csomag megvásárlásához nincsenek meg a szükséges feltételek.',
        'cumulate' => 'You cannot buy this package with an other from the same category in the same purchase.',
        'file' => 'Click here to download the file :file',
    ],

    'offers' => [
        'gateway' => 'Fizetés típusa',
        'amount' => 'Összeg',

        'empty' => 'Jelenleg nem állnak rendelkezésre ajánlatok.',
    ],

    'profile' => [
        'payments' => 'Kifizetéseid',
        'subscriptions' => 'Your subscriptions',
        'money' => 'Egyenleged: :balance',
    ],

    'giftcards' => [
        'title' => 'Giftcards',
        'error' => 'Ez az ajándékkártya nem létezik, lejárt vagy már nem használható fel.',
        'add' => 'Add a gift card',
        'notification' => 'You received a giftcard, the code is :code (:balance).',
        'pending' => 'A payment has already started for this giftcard. Complete the payment or wait a few minutes.',
    ],
];
