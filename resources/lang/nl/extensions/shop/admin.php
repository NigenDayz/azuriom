<?php

return [
    'nav' => [
        'title' => 'Winkel',
        'settings' => 'Instellingen',
        'packages' => 'Pakketten',
        'gateways' => 'Gateways',
        'offers' => 'Aanbiedingen',
        'coupons' => 'Kortingscodes',
        'giftcards' => 'Cadeaubonnen',
        'discounts' => 'Kortingen',
        'payments' => 'Betalingen',
        'subscriptions' => 'Abonnementen',
        'variables' => 'Variables',
        'purchases' => 'Aankopen',
        'statistics' => 'Statistieken',
    ],

    'permissions' => [
        'settings' => 'Beheer winkel instellingen',
        'packages' => 'Beheer winkel pakketten en categorieën',
        'gateways' => 'Beheer winkel betaling gateways',
        'promotions' => 'Beheer winkel coupons en kortingen',
        'giftcards' => 'Beheer de winkel cadeaubonnen',
        'payments' => 'Aanmaken en bekijken winkel betalingen/aankopen en abonnementen',
    ],

    'categories' => [
        'title' => 'Categorieën',
        'edit' => 'Bewerk :category categorie',
        'create' => 'Categorie aanmaken',

        'parent' => 'Bovenliggende categorie',
        'delete_error' => 'Een categorie die nog pakketten bevat kan niet worden verwijderd.',

        'cumulate' => 'Cumuleer aankopen in deze categorie',
        'cumulate_info' => 'Gebruikers die al een pakket in deze categorie hebben gekocht krijgen een korting en betalen het verschil alleen bij het kopen van een duurder pakket.',
        'cumulate_strict' => 'Prevent users from buying a cheaper package than those already purchased in this category',
        'single_purchase' => 'Limit the user to purchasing a single package from this category',
        'enable' => 'Categorie inschakelen',
    ],

    'offers' => [
        'title' => 'Aanbiedingen',
        'edit' => 'Aanbieding :offer bewerken',
        'create' => 'Aanbieding aanmaken',

        'enable' => 'Deze aanbieding inschakelen',
    ],

    'coupons' => [
        'title' => 'Kortingsbonnen',
        'edit' => 'Kortingscode :coupon bewerken',
        'create' => 'Kortingscode aanmaken',

        'global' => 'Moet de kortingsbon voor alle winkels actief zijn?',
        'cumulate' => 'Sta gebruik van deze kortingscode toe met andere kortingscodes',
        'user_limit' => 'Gebruikers limiet',
        'global_limit' => 'Globale limiet',
        'active' => 'Actief',
        'usage' => 'Onder gebruikslimiet',
        'enable' => 'Kortingsbon inschakelen',
    ],

    'giftcards' => [
        'title' => 'Cadeaubonnen',
        'edit' => 'Bewerk de cadeaubon :giftcard',
        'create' => 'Maak een cadeaubon aan',

        'global_limit' => 'Globale limiet',
        'active' => 'Actief',
        'enable' => 'De cadeaubon inschakelen',
        'link' => 'Deelbare link',
        'pending' => 'Er is een betaling in behandeling, het saldo wordt mogelijk nog bijgewerkt.',
    ],

    'discounts' => [
        'title' => 'Kortingen',
        'edit' => 'Korting :discount bewerken',
        'create' => 'Korting aanmaken',

        'global' => 'Moet de korting actief zijn op alle winkels ?',
        'active' => 'Actief',
        'enable' => 'Schakel de korting in',
        'restricted' => 'Beperk deze korting tot bepaalde rollen',
    ],

    'packages' => [
        'title' => 'Pakketten',
        'edit' => 'Bewerk pakket :package',
        'create' => 'Pakket aanmaken',

        'every' => 'alle',
        'after' => 'na',

        'updated' => 'De pakketten zijn bijgewerkt.',

        'variables' => 'Custom variables',
        'files' => 'Downloadable files',
        'role' => 'Role to set when the package expires',
        'money' => 'Geld om te geven aan de gebruiker na aankoop',
        'has_giftcard' => 'Maak een cadeaubon aan na de aankoop en geef deze aan de gebruiker',
        'giftcard_balance' => 'Cadeaubon saldo',
        'giftcard_fixed' => 'Vast bedrag',
        'giftcard_dynamic' => 'Prijs van het pakket',
        'command' => 'Het commando mag niet beginnen met <code>/</code>. U kunt <code>{player}</code> gebruiken voor de spelersnaam. Voor Steam spellen, kan u ook <code>{steam_id}</code> en <code>{steam_id_32}</code>gebruiken. De andere beschikbare placeholders zijn: :placeholders.',
        'has_user_limit' => 'Voeg een individuele aankooplimiet toe per gebruiker voor dit pakket',
        'has_global_limit' => 'Voeg een globale inkooplimiet voor dit pakket toe',
        'limit_period' => 'Beperk periode',
        'limits_no_expired' => 'Verlopen pakketten uitsluiten bij het berekenen van aankooplimieten',
        'no_period' => 'Geen periode',
        'custom_price' => 'Laat de gebruiker de prijs kiezen (de prijs van het pakket zal dan het minimum zijn)',
        'enable_quantity' => 'Activeer de hoeveelheid',

        'billing' => 'Type Facturering',
        'billing_period' => 'Facturering periode',
        'one_off' => 'Eenmalige betaling',
        'subscription' => 'Abonnement met automatische verlenging',
        'subscription_info' => 'Zorg ervoor dat uw betaling gateway abonnementen ondersteunt. Wanneer een abonnement is aangemaakt wordt dezelfde prijs in rekening gebracht totdat het abonnement is geannuleerd (elke actieve korting tijdens de eerste betaling zal worden toegepast op de volgende betalingen).',
        'expiring' => 'Eenmalige betaling met vervaldatum',
        'expiring_info' => 'Het product wordt automatisch verwijderd na de opgegeven periode.',
        'scheduler' => 'U moet CRON taken instellen om abonnementen te kunnen gebruiken, zie de <a href="https://azuriom.com/docs/faq" target="_blank" rel="noopener norefferer">FAQ</a> voor meer informatie.',

        'create_category' => 'Categorie aanmaken',
        'create_package' => 'Pakket aanmaken',

        'enable' => 'Dit pakket inschakelen',
    ],

    'commands' => [
        'online' => 'Wacht tot de speler online is voordat het commando wordt uitgevoerd (vereist AzLink)',
        'offline' => 'Voer de opdracht direct uit, maakt niet uit of de speler online is of niet',
        'servers' => 'U moet tenminste één server toevoegen om een commando te kunnen maken.',

        'trigger' => 'Commando trigger',
        'command' => 'Commando',
        'condition' => 'Conditie voor uitvoering van het commando',

        'triggers' => [
            'purchase' => 'Initiële Aankoop',
            'expiration' => 'Na afloop',
            'refund' => 'Betaling Terugbetaald',
            'chargeback' => 'Terugboeking',
            'renewal' => 'Abonnement Verlenging',
        ],
    ],

    'gateways' => [
        'title' => 'Gateways',
        'edit' => 'Bewerk gateway :gateway',
        'create' => 'Gateway toevoegen',

        'current' => 'Huidige gateways',
        'add' => 'Voeg een nieuwe gateway toe',
        'info' => 'Indien u problemen heeft met betalingen bij het gebruik van Cloudflare of een firewall, probeer dan de stappen in de <a href="https://azuriom.com/docs/faq" target="_blank" rel="noopener norefferer">FAQ</a> te volgen.',

        'country' => 'Land',
        'sandbox' => 'Sandbox',
        'api-key' => 'API sleutel',
        'token' => 'Access Token',
        'public-key' => 'Publieke sleutel',
        'private-key' => 'Privé sleutel',
        'secret-key' => 'Geheime sleutel',
        'endpoint-secret' => 'Geheime Ondertekening',
        'service-id' => 'Service ID',
        'client-id' => 'Klant ID',
        'merchant-id' => 'Handelaar ID',
        'project-id' => 'Project ID',
        'webhook_id' => 'Webhook ID',
        'website_id' => 'Website ID',
        'env' => 'Omgeving',

        'subscription' => 'Deze betaling gateway ondersteunt automatische verlenging van abonnementen.',
        'no_subscription' => 'Deze betaling gateway ondersteunt geen automatische abonnementsverlenging.',

        'paypal_email' => 'PayPal E-mailadres',
        'paypal_info' => 'Zorg er nadrukkelijk voor dat het <strong>primaire</strong> e-mailadres van het PayPal account wordt ingevoerd.',
        'paypal_checkout' => 'Maak op het PayPal dashboard in uw API applicatie een webhook met URL <code>:url</code> en selecteer de evenementen <code>:events</code>.',
        'stripe_info' => 'Op het Stripe dashboard moet u de webhook URL instellen op <code>:url</code> en de evenementen selecteren: <code>:events</code>.',
        'paymentwall_info' => 'Op het PaymentWall dashboard moet u de pingback URL instellen op <code>:url</code>.',
        'xsolla' => 'Op het Xsolla dashboard moet u de webhook URL instellen op <code>:url</code>, activeer \'Transactie externe ID\' in de instellingen \'Pay station\', test de webhooks en zet \'Checkout\' aan in de instellingen \'Pay Station\'.',
        'skrill_email' => 'Skrill e-mailadres',
        'skrill_secret' => 'Geheim woord',
        'skrill_info' => 'De website ID en het Geheime Woord kunnen worden gevonden in het dashboard van Skrill onder "Developer Settings".',
        'mercadopago' => 'The Mercado Pago credentials must be for the <strong>Checkout Pro</strong> integration.',

        'enable' => 'Schakel de gateway in',
    ],

    'payments' => [
        'title' => 'Betalingen',
        'show' => 'Betaling #:payment',

        'info' => 'Betalings informatie',
        'items' => 'Gekochte items',

        'card' => 'Winkel betalingen',

        'status' => [
            'pending' => 'In afwachting',
            'expired' => 'Verlopen',
            'chargeback' => 'Terugboeking',
            'completed' => 'Voltooid',
            'refunded' => 'Terugbetaald',
            'error' => 'Error',
        ],
    ],

    'purchases' => [
        'title' => 'Aankopen',
    ],

    'subscriptions' => [
        'title' => 'Abonnementen',
        'show' => 'Abonnement #:subscription',

        'info' => 'Abonnement informatie',
        'error' => 'Om verder te gaan moet u gekoppelde abonnementen annuleren en wachten op de vervaldatum.',
        'setup' => 'Subscription package can be set up in a package settings, just under the price field.',

        'status' => [
            'active' => 'Actief',
            'canceled' => 'Geannuleerd',
            'expired' => 'Verlopen',
        ],
    ],

    'settings' => [
        'title' => 'Winkel instellingen',
        'enable_home' => 'Schakel de startpagina van de winkel in',
        'home_message' => 'Thuis bericht',
        'use_site_money' => 'Aankopen inschakelen met de valuta van de site.',
        'use_site_money_info' => 'Indien ingeschakeld, kunnen de pakketten in de winkel alleen gekocht worden met geld van de website. Om gebruikers hun account te laten crediteren, kunt u aanbiedingen instellen in de winkel.',
        'webhook' => 'Discord Webhook URL',
        'webhook_info' => 'When an user make a payment, it will create a notification on this webhook. Leave empty to disable.',
        'commands' => 'Globale opdrachten',
        'recent_payments' => 'Recente aankopen limiet om weer te geven in zijbalk (ingesteld op 0 om uit te schakelen)',
        'display_amount' => 'Toon het bestede bedrag in recente aankopen en de top klant',
        'top_customer' => 'Toon de beste maandelijkse klant in de zijbalk',

        'terms_required' => 'Vereis gebruikers om servicevoorwaarden te accepteren voor de aankoop',
        'terms' => 'Algemene voorwaarden',
        'terms_info' => 'Links in Markdown formaat, bijvoorbeeld: <code>Ik accepteer de [terms of service](https://example.com/terms) van de shop.</code>',
    ],

    'variables' => [
        'title' => 'Variables',
        'edit' => 'Edit variable :variable',
        'create' => 'Create variable',

        'info' => 'Variables are custom fields that can be added to packages. They can be used to ask for additional information from the user when purchasing a package.',

        'name' => 'The internal name of the variable, cannot be changed after creation.',
        'required' => 'Should this variable be required?',
        'options' => 'Options',

        'text' => 'Text',
        'number' => 'Number',
        'email' => 'E-Mail',
        'checkbox' => 'Checkbox',
        'dropdown' => 'Dropdown',
    ],

    'logs' => [
        'shop-gateways' => [
            'created' => 'Gateway #:id gemaakt',
            'updated' => 'Gateway geüpdatet #:id',
            'deleted' => 'Gateway verwijderd #:id',
        ],

        'shop-packages' => [
            'created' => 'Pakket aangemaakt #:id',
            'updated' => 'Pakket geüpdatet #:id',
            'deleted' => 'Pakket verwijderd #:id',
        ],

        'shop-offers' => [
            'created' => 'Aanbieding aangemaakt #:id',
            'updated' => 'Aanbieding bijgewerkt #:id',
            'deleted' => 'Aanbieding verwijderd #:id',
        ],

        'shop-giftcards' => [
            'used' => 'Gebruikte cadeaubon #:id (:amount)',
        ],

        'settings' => 'Updated shop settings',
    ],

    'statistics' => [
        'title' => 'Statistieken',
        'total' => 'Totaal',
        'recent' => 'Recente aankopen',
        'count' => 'Aantal betalingen',
        'estimated' => 'Geschatte winst',
        'month' => 'Betalingen gedurende deze maand',
        'month_estimated' => 'Geschatte opbrengst deze maand',
    ],

];
