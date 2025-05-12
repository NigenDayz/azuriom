<?php

return [
    'title' => 'Winkel',
    'welcome' => 'Welkom in de winkel!',

    'buy' => 'Koop',

    'free' => 'Gratis',

    'periods' => [
        'hours' => 'uren',
        'days' => 'dagen',
        'weeks' => 'weken',
        'months' => 'maanden',
        'years' => 'jaren',
    ],

    'fields' => [
        'balance' => 'Saldo',
        'category' => 'Categorie',
        'code' => 'Code',
        'commands' => 'Commando\'s',
        'currency' => 'Geldeenheid',
        'discount' => 'Korting',
        'expire_date' => 'Eind Datum',
        'gateways' => 'Betaalmiddelen',
        'global_limit' => 'Globale aankooplimiet',
        'original_balance' => 'Oorspronkelijk Saldo',
        'package' => 'Onderdeel',
        'packages' => 'Onderdelen',
        'payment_id' => 'Betaling ID',
        'payments' => 'Betalingen',
        'price' => 'Prijs',
        'quantity' => 'Hoeveelheid',
        'renewal_date' => 'Vernieuwing datum',
        'required' => 'Required',
        'required_packages' => 'Vereiste pakketten',
        'required_roles' => 'Vereiste rol',
        'role' => 'Rol om in te stellen na aankoop',
        'start_date' => 'Start Datum',
        'subscription' => 'Abonnement',
        'subscription_id' => 'Abonnement ID',
        'total' => 'Totaal',
        'user_id' => 'Gebruiker ID',
        'user_limit' => 'Aankooplimiet voor gebruiker',
    ],

    'actions' => [
        'subscribe' => 'Abonneren',
        'manage' => 'Manage subscription',
        'move' => 'Verplaatsen',
    ],

    'goal' => [
        'title' => 'Doel van de maand',
        'progress' => ':count% voltooid',
    ],

    'recent' => [
        'title' => 'Recente betalingen',
        'empty' => 'Geen recente betalingen',
    ],

    'top' => [
        'title' => 'Top klant',
    ],

    'cart' => [
        'title' => 'Winkelwagen',
        'success' => 'Uw aankoop is succesvol afgerond.',
        'guest' => 'U moet ingelogd zijn om een ​​aankoop te doen.',
        'empty' => 'Uw winkelwagen is leeg.',
        'checkout' => 'Afrekenen',
        'clear' => 'Leeg de winkelwagen',
        'pay' => 'Betaal',
        'back' => 'Terug naar de shop',
        'total' => 'Totaal: :total',
        'payable_total' => 'Totaal te betalen: :total',
        'credit' => 'Credits',

        'confirm' => [
            'title' => 'Betalen?',
            'price' => 'Weet u zeker dat u deze winkelwagen wilt kopen voor :price.',
        ],

        'errors' => [
            'money' => 'U heeft niet genoeg geld om deze aankoop te doen.',
            'execute' => 'Er is een onverwachte fout opgetreden tijdens de betaling, uw aankoop is terugbetaald.',
        ],
    ],

    'coupons' => [
        'title' => 'Kortingsbonnen',
        'add' => 'Kortingscode toevoegen',
        'error' => 'Deze kortingscode bestaat niet, is verlopen of kan niet meer worden gebruikt.',
        'cumulate' => 'U kan deze kortingscode niet gebruiken met een andere kortingscode.',
    ],

    'payment' => [
        'title' => 'Betaling',
        'manual' => 'Handmatige betaling',

        'empty' => 'Er zijn geen betalingsmethodes beschikbaar.',

        'info' => 'Koop #:id op :website',
        'subscription' => ':package - Abonnement (Gebruiker #:user)',
        'error' => 'De betaling kan niet worden voltooid.',
        'giftcards' => 'Giftcards',

        'success' => 'Betaling voltooid, u ontvangt uw aankoop in-game in minder dan een minuut.',
        'pending' => 'Betaling in behandeling, u zult uw aankoop in-game ontvangen zodra de betaling is bevestigd.',

        'webhook' => 'Nieuwe betaling in de winkel',
        'webhook_info' => 'Totaal: :total, ID: :id (:gateway)',
        'webhook_chargeback' => 'Betaling terugboeking in de winkel',
        'webhook_refund' => 'Terugbetaling in de winkel',
    ],

    'categories' => [
        'empty' => 'Deze categorie is leeg.',
    ],

    'packages' => [
        'limit' => 'Je hebt het maximaal mogelijke voor deze pakketten gekocht.',
        'requirements' => 'U heeft niet de vereisten om dit pakket te kopen.',
        'cumulate' => 'U kunt dit pakket niet combineren met een ander pakket van dezelfde categorie bij dezelfde aankoop.',
        'file' => 'Click here to download the file :file',
    ],

    'offers' => [
        'gateway' => 'Betalingswijze',
        'amount' => 'Hoeveelheid',

        'empty' => 'Er zijn momenteel geen aanbiedingen beschikbaar.',
    ],

    'profile' => [
        'payments' => 'Jouw betalingen',
        'subscriptions' => 'Uw abonnementen',
        'money' => 'Geld: :balance',
    ],

    'giftcards' => [
        'title' => 'Cadeaubonnen',
        'error' => 'Deze cadeaukaart bestaat niet, is verlopen of kan niet meer worden gebruikt.',
        'add' => 'Voeg een cadeaubon toe',
        'notification' => 'U heeft een cadeaubon ontvangen, de code is :code (:balance).',
        'pending' => 'Er is momenteel al een betaling gestart met deze cadeaubon. Voltooi die betaling of wacht een paar minuten.',
    ],
];
