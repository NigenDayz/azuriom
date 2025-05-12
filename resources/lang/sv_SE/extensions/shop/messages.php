<?php

return [
    'title' => 'Butik',
    'welcome' => 'Välkommen till butiken!',

    'buy' => 'Köpa',

    'free' => 'Gratis',

    'periods' => [
        'hours' => 'hours',
        'days' => 'days',
        'weeks' => 'weeks',
        'months' => 'months',
        'years' => 'years',
    ],

    'fields' => [
        'balance' => 'Saldo',
        'category' => 'Kategori',
        'code' => 'Rumskod',
        'commands' => 'Kommandon',
        'currency' => 'Valuta',
        'discount' => 'Rabatt',
        'expire_date' => 'Utgångsdatum',
        'gateways' => 'Gateways',
        'global_limit' => 'Global purchase limit',
        'original_balance' => 'Ursprungligt saldo',
        'package' => 'Paket',
        'packages' => 'Paket',
        'payment_id' => 'Betalnings-ID',
        'payments' => 'Betalningar',
        'price' => 'Pris',
        'quantity' => 'Kvantitet',
        'renewal_date' => 'Renewal date',
        'required' => 'Required',
        'required_packages' => 'Required packages',
        'required_roles' => 'Nödvändig roll',
        'role' => 'Roll att ställa in efter köp',
        'start_date' => 'Startdatum',
        'subscription' => 'Subscription',
        'subscription_id' => 'Subscription ID',
        'total' => 'Totalt',
        'user_id' => 'Användar-ID',
        'user_limit' => 'Inköpsgräns för användare',
    ],

    'actions' => [
        'subscribe' => 'Subscribe',
        'manage' => 'Manage subscription',
        'move' => 'Move',
    ],

    'goal' => [
        'title' => 'Månadens mål',
        'progress' => ':count% klart',
    ],

    'recent' => [
        'title' => 'Senaste betalningar',
        'empty' => 'Inga senaste betalningar',
    ],

    'top' => [
        'title' => 'Topp kund',
    ],

    'cart' => [
        'title' => 'Varukorg',
        'success' => 'Ditt köp har slutförts.',
        'guest' => 'Du måste vara inloggad för att göra ett köp.',
        'empty' => 'Din kundvagn är tom.',
        'checkout' => 'Kassa',
        'clear' => 'Rensa varukorgen',
        'pay' => 'Betala',
        'back' => 'Tillbaka till butiken',
        'total' => 'Totalt: :total',
        'payable_total' => 'Totalt att betala: :total',
        'credit' => 'Kredit',

        'confirm' => [
            'title' => 'Betala?',
            'price' => 'Är du säker på att du vill köpa den här vagnen för :price.',
        ],

        'errors' => [
            'money' => 'Du har inte tillräckligt med pengar för att göra detta köp.',
            'execute' => 'Ett oväntat fel inträffade under betalningen, ditt köp fick återbetalning.',
        ],
    ],

    'coupons' => [
        'title' => 'Kuponger',
        'add' => 'Lägg till en kupong',
        'error' => 'Denna kupong finns inte, har löpt ut eller kan inte längre användas.',
        'cumulate' => 'Du kan inte använda denna kupong med en annan kupong.',
    ],

    'payment' => [
        'title' => 'Betalning',
        'manual' => 'Manuell betalning',

        'empty' => 'Inga betalningsmetoder är tillgängliga för närvarande.',

        'info' => 'Köp #:id på :website',
        'subscription' => ':package - Subscription (User #:user)',
        'error' => 'Betalningen kunde inte slutföras.',
        'giftcards' => 'Giftcards',

        'success' => 'Betalning slutförd, du kommer att få ditt köp i spelet på mindre än en minut.',
        'pending' => 'Payment pending, you\'ll receive your purchase in-game once the payment is confirmed.',

        'webhook' => 'Ny betalning i butiken',
        'webhook_info' => 'Total: :total, ID: :id (:gateway)',
        'webhook_chargeback' => 'Payment chargeback on the shop',
        'webhook_refund' => 'Payment refund on the shop',
    ],

    'categories' => [
        'empty' => 'Denna kategori är tom.',
    ],

    'packages' => [
        'limit' => 'Du har köpt det mesta möjliga för dessa paket.',
        'requirements' => 'Du har inga krav på att köpa detta paket.',
        'cumulate' => 'You cannot buy this package with an other from the same category in the same purchase.',
        'file' => 'Click here to download the file :file',
    ],

    'offers' => [
        'gateway' => 'Betalningssätt',
        'amount' => 'Belopp',

        'empty' => 'Inga erbjudanden är för närvarande tillgängliga.',
    ],

    'profile' => [
        'payments' => 'Betalningshistorik',
        'subscriptions' => 'Your subscriptions',
        'money' => 'Pengar: :balance',
    ],

    'giftcards' => [
        'title' => 'Presentkort',
        'error' => 'Presentkortet finns inte, har löpt ut eller kan inte längre användas.',
        'add' => 'Lägg till ett presentkort',
        'notification' => 'Du fick ett presentkort, koden är :code (:balance).',
        'pending' => 'A payment has already started for this giftcard. Complete the payment or wait a few minutes.',
    ],
];
