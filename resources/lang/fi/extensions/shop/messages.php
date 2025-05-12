<?php

return [
    'title' => 'Kauppa',
    'welcome' => 'Tervetuloa kauppaan!',

    'buy' => 'Osta',

    'free' => 'Ilmainen',

    'periods' => [
        'hours' => 'hours',
        'days' => 'days',
        'weeks' => 'weeks',
        'months' => 'months',
        'years' => 'years',
    ],

    'fields' => [
        'balance' => 'Balance',
        'category' => 'Kategoria',
        'code' => 'Koodi',
        'commands' => 'Komennot',
        'currency' => 'Valuutta',
        'discount' => 'Alennus',
        'expire_date' => 'Vanhenemispäivä',
        'gateways' => 'Maksutavat',
        'global_limit' => 'Global purchase limit',
        'original_balance' => 'Original Balance',
        'package' => 'Tuote',
        'packages' => 'Tuotteet',
        'payment_id' => 'Maksutunnus',
        'payments' => 'Payments',
        'price' => 'Hinta',
        'quantity' => 'Määrä',
        'renewal_date' => 'Renewal date',
        'required' => 'Required',
        'required_packages' => 'Required packages',
        'required_roles' => 'Vaadittu rooli',
        'role' => 'Asetettu rooli oston jälkeen',
        'start_date' => 'Aloituspäivä',
        'subscription' => 'Subscription',
        'subscription_id' => 'Subscription ID',
        'total' => 'Yhteensä',
        'user_id' => 'Käyttäjätunniste',
        'user_limit' => 'Käyttäjän ostoraja',
    ],

    'actions' => [
        'subscribe' => 'Subscribe',
        'manage' => 'Manage subscription',
        'move' => 'Move',
    ],

    'goal' => [
        'title' => 'Kuukauden tavoite',
        'progress' => ':count% valmis',
    ],

    'recent' => [
        'title' => 'Viimeaikaiset maksut',
        'empty' => 'Ei viimeaikaisia maksuja',
    ],

    'top' => [
        'title' => 'Top asiakas',
    ],

    'cart' => [
        'title' => 'Ostoskori',
        'success' => 'Ostoksesi on suoritettu onnistuneesti.',
        'guest' => 'Sinun täytyy olla kirjautunut sisään tehdäksesi ostoksen.',
        'empty' => 'Ostoskorisi on tyhjä.',
        'checkout' => 'Kassa',
        'clear' => 'Tyhjennä ostoskori',
        'pay' => 'Maksa',
        'back' => 'Takaisin kauppaan',
        'total' => 'Yhteensä: :Total',
        'payable_total' => 'Total to pay: :total',
        'credit' => 'Krediitit',

        'confirm' => [
            'title' => 'Maksa?',
            'price' => 'Oletko varma, että haluat ostaa ostoskorisi tuotteet hintaan :price.',
        ],

        'errors' => [
            'money' => 'Sinulla ei ole riittävästi varoja suorittaaksesi ostoksen.',
            'execute' => 'Odottamaton virhe tapahtui maksun aikana, ostoksesi palautettiin.',
        ],
    ],

    'coupons' => [
        'title' => 'Alennuskoodi',
        'add' => 'Lisää kuponki',
        'error' => 'Tätä kuponkia ei ole joko olemassa, se on vanhentunut tai sitä ei voi enää käyttää.',
        'cumulate' => 'Tätä kuponkia ei voi käyttää toisen kupongin kanssa.',
    ],

    'payment' => [
        'title' => 'Maksu',
        'manual' => 'Manuaalinen maksu',

        'empty' => 'Maksutapoja ei ole tällä hetkellä saatavilla.',

        'info' => 'Osta #:id :website',
        'subscription' => ':package - Subscription (User #:user)',
        'error' => 'Maksua ei voitu suorittaa.',
        'giftcards' => 'Giftcards',

        'success' => 'Maksu suoritettu, saat ostoksesi pelissä alle minuutin kuluttua.',
        'pending' => 'Payment pending, you\'ll receive your purchase in-game once the payment is confirmed.',

        'webhook' => 'Uusi maksu kaupassa',
        'webhook_info' => 'Total: :total, ID: :id (:gateway)',
        'webhook_chargeback' => 'Payment chargeback on the shop',
        'webhook_refund' => 'Payment refund on the shop',
    ],

    'categories' => [
        'empty' => 'Kategoria on tyhjä.',
    ],

    'packages' => [
        'limit' => 'Olet ostanut enimmäismäärän tätä tuotetta.',
        'requirements' => 'Et täytä tarvittavia vaatimuksia ostaaksesi tämän tuotteen.',
        'cumulate' => 'You cannot buy this package with an other from the same category in the same purchase.',
        'file' => 'Click here to download the file :file',
    ],

    'offers' => [
        'gateway' => 'Maksutapa',
        'amount' => 'Määrä',

        'empty' => 'Tarjouksia ei ole tällä hetkellä saatavilla.',
    ],

    'profile' => [
        'payments' => 'Maksuhistoria',
        'subscriptions' => 'Your subscriptions',
        'money' => 'Varat: :balance',
    ],

    'giftcards' => [
        'title' => 'Giftcards',
        'error' => 'Tätä lahjakorttia ei ole joko olemassa, se on vanhentunut tai sitä ei voi enää käyttää.',
        'add' => 'Add a gift card',
        'notification' => 'You received a giftcard, the code is :code (:balance).',
        'pending' => 'A payment has already started for this giftcard. Complete the payment or wait a few minutes.',
    ],
];
