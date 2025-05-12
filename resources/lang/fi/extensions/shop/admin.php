<?php

return [
    'nav' => [
        'title' => 'Kauppa',
        'settings' => 'Asetukset',
        'packages' => 'Tuotteet',
        'gateways' => 'Maksutavat',
        'offers' => 'Tarjoukset',
        'coupons' => 'Alennuskupongit',
        'giftcards' => 'Lahjakortit',
        'discounts' => 'Alennukset',
        'payments' => 'Maksut',
        'subscriptions' => 'Subscriptions',
        'variables' => 'Variables',
        'purchases' => 'Ostot',
        'statistics' => 'Tilastot',
    ],

    'permissions' => [
        'settings' => 'Manage shop settings',
        'packages' => 'Manage shop packages and categories',
        'gateways' => 'Manage shop payment gateways',
        'promotions' => 'Manage shop coupons and discounts',
        'giftcards' => 'Manage shop gift cards',
        'payments' => 'Create and view shop payments/purchases and subscriptions',
    ],

    'categories' => [
        'title' => 'Kategoriat',
        'edit' => 'Muokkaa kategoriaa :category',
        'create' => 'Luo kategoria',

        'parent' => 'Isäntäkategoria',
        'delete_error' => 'Kategoriaa jossa on tuotteita, ei voi poistaa.',

        'cumulate' => 'Kumulatisoi ostokset tässä kategoriassa',
        'cumulate_info' => 'Käyttäjät, jotka ovat jo ostaneet paketin tässä kategoriassa saavat alennuksen ja maksavat ainoastaan erotuksen ostaessaan kalliimpaa pakettia.',
        'cumulate_strict' => 'Prevent users from buying a cheaper package than those already purchased in this category',
        'single_purchase' => 'Limit the user to purchasing a single package from this category',
        'enable' => 'Ota kategoria käyttöön',
    ],

    'offers' => [
        'title' => 'Tarjoukset',
        'edit' => 'Muokkaa tarjousta :offer',
        'create' => 'Luo tarjous',

        'enable' => 'Ota tämä tarjous käyttöön',
    ],

    'coupons' => [
        'title' => 'Alennuskupongit',
        'edit' => 'Muokkaa alennuskuponkia :coupon',
        'create' => 'Luo alennuskuponki',

        'global' => 'Pitäisikö alennukuponki olla aktiivinen koko kaupassa?',
        'cumulate' => 'Salli käyttää tätä kuponkia muiden kuponkien kanssa',
        'user_limit' => 'Rajoitus käyttäjää kohden',
        'global_limit' => 'Yleinen käyttörajoitus',
        'active' => 'Aktiivinen',
        'usage' => 'Under usage limit',
        'enable' => 'Ota alennuskuponki käyttöön',
    ],

    'giftcards' => [
        'title' => 'Lahjakortit',
        'edit' => 'Muokkaa lahjakorttia :giftcard',
        'create' => 'Luo lahjakortti',

        'global_limit' => 'Yleinen käyttörajoitus',
        'active' => 'Aktiivinen',
        'enable' => 'Ota lahjakortti käyttöön',
        'link' => 'Shareable link',
        'pending' => 'A payment is pending, the balance might not be updated yet.',
    ],

    'discounts' => [
        'title' => 'Alennukset',
        'edit' => 'Muokkaa alennusta :discount',
        'create' => 'Luo alennus',

        'global' => 'Pitäisikö alennukuponki olla aktiivinen koko kaupassa?',
        'active' => 'Aktiivinen',
        'enable' => 'Ota alennus käyttöön',
        'restricted' => 'Restrict this discount to certain roles only',
    ],

    'packages' => [
        'title' => 'Tuotteet',
        'edit' => 'Muokkaa tuotetta :package',
        'create' => 'Luo tuote',

        'every' => 'every',
        'after' => 'after',

        'updated' => 'Tuotteet on päivitetty.',

        'variables' => 'Custom variables',
        'files' => 'Downloadable files',
        'role' => 'Role to set when the package expires',
        'money' => 'Money to give to the user after purchase',
        'has_giftcard' => 'Create a giftcard after the purchase and give it to the user',
        'giftcard_balance' => 'Giftcard balance',
        'giftcard_fixed' => 'Fixed amount',
        'giftcard_dynamic' => 'Price of the package',
        'command' => 'The command must not start with <code>/</code>. You can use <code>{player}</code> for the player name. For Steam games, you can also use <code>{steam_id}</code> and <code>{steam_id_32}</code>. The others available placeholders are: :placeholders.',
        'has_user_limit' => 'Add an individual purchase limit per user for this package',
        'has_global_limit' => 'Add a global purchase limit for this package',
        'limit_period' => 'Limit period',
        'limits_no_expired' => 'Exclude expired packages when calculating purchase limits',
        'no_period' => 'No period',
        'custom_price' => 'Allow the user to choose the price to pay (the package price will then be the minimum)',
        'enable_quantity' => 'Ota määrä käyttöön',

        'billing' => 'Billing type',
        'billing_period' => 'Billing period',
        'one_off' => 'One-off payment',
        'subscription' => 'Subscription with automatic renewal',
        'subscription_info' => 'Make sure your payment gateway supports subscriptions. When a subscription is created, the user will be charged the same price until the subscription is canceled (any discount active during the first payment will be applied to the next payments).',
        'expiring' => 'One-off payment with expiration',
        'expiring_info' => 'The product will be automatically removed after the specified period.',
        'scheduler' => 'CRON tasks are not enabled, you must set them up to use subscriptions and expiring packages, see the <a href="https://azuriom.com/docs/faq" target="_blank" rel="noopener norefferer">FAQ</a> for more information.',

        'create_category' => 'Luo kategoria',
        'create_package' => 'Luo tuote',

        'enable' => 'Ota käyttöön tämä tuote',
    ],

    'commands' => [
        'online' => 'Wait for the player to be online before executing the command (requires AzLink)',
        'offline' => 'Execute the command directly, whether the player is online or not',
        'servers' => 'You need to add at least one server to create a command.',

        'trigger' => 'Command trigger',
        'command' => 'Command',
        'condition' => 'Condition to execute the command',

        'triggers' => [
            'purchase' => 'Initial Purchase',
            'expiration' => 'After Expiration',
            'refund' => 'Payment Refunded',
            'chargeback' => 'Chargeback',
            'renewal' => 'Subscription Renewal',
        ],
    ],

    'gateways' => [
        'title' => 'Maksutavat',
        'edit' => 'Muokkaa :gateway maksutapaa',
        'create' => 'Lisää maksutapa',

        'current' => 'Nykyiset maksutavat',
        'add' => 'Lisää uusi maksutapa',
        'info' => 'Jos sinulla on ongelmia maksujen kanssa Cloudflarea tai palomuuria käytettäessä, yritä seurata <a href="https://azuriom.com/docs/faq" target="_blank" rel="noopener norefferer">FAQ</a> -ohjeita.',

        'country' => 'Maa',
        'sandbox' => 'Hiekkalaatikko',
        'api-key' => 'API-avain',
        'token' => 'Access Token',
        'public-key' => 'Julkinen avain',
        'private-key' => 'Yksityinen avain',
        'secret-key' => 'Salainen avain',
        'endpoint-secret' => 'Signing Secret',
        'service-id' => 'Palvelun tunnus',
        'client-id' => 'Asiakastunnus',
        'merchant-id' => 'Kauppiastunnus',
        'project-id' => 'Projektitunnus',
        'webhook_id' => 'Webhook ID',
        'website_id' => 'Website ID',
        'env' => 'Ympäristö',

        'subscription' => 'This payment gateway supports automatic subscription renewal.',
        'no_subscription' => 'This payment gateway does not support automatic subscription renewal.',

        'paypal_email' => 'PayPal sähköpostiosoite',
        'paypal_info' => 'Please make sure to input the <strong>primary</strong> email address of the PayPal account.',
        'paypal_checkout' => 'On the PayPal dashboard, in your API application, create a webhook with URL <code>:url</code> and select the events <code>:events</code>.',
        'stripe_info' => 'On the Stripe dashboard you need to set the webhook URL to <code>:url</code> and select the events: <code>:events</code>.',
        'paymentwall_info' => 'PaymentWall:in hallintapaneelissa sinun täytyy asettaa pingback URL osoitteeksi <code>:url</code>.',
        'xsolla' => 'Xsolla:n hallintapaneelissa sinun täytyy asettaa webhookin URL osoitteeksi <code>:url</code>, Ota \'Transaction external ID\' käyttöön \'Pay station\' -asetuksissa, testaa webhookit ja ota \'Checkout\' käyttöön \'Pay Station\' -asetuksista.',
        'skrill_email' => 'Skrill Email Address',
        'skrill_secret' => 'Secret Word',
        'skrill_info' => 'The website ID and the Secret Word can be found in the Skrill dashboard under "Developer Settings".',
        'mercadopago' => 'The Mercado Pago credentials must be for the <strong>Checkout Pro</strong> integration.',

        'enable' => 'Ota maksutapa käyttöön',
    ],

    'payments' => [
        'title' => 'Maksut',
        'show' => 'Maksu #:payment',

        'info' => 'Maksutiedot',
        'items' => 'Ostetut kohteet',

        'card' => 'Kaupan maksut',

        'status' => [
            'pending' => 'Odottaa',
            'expired' => 'Vanhentunut',
            'chargeback' => 'Takaisinveloitus',
            'completed' => 'Suoritettu',
            'refunded' => 'Hyvitetty',
            'error' => 'Virhe',
        ],
    ],

    'purchases' => [
        'title' => 'Ostot',
    ],

    'subscriptions' => [
        'title' => 'Subscriptions',
        'show' => 'Subscription #:subscription',

        'info' => 'Subscription information',
        'error' => 'To continue, you must cancel associated subscriptions and wait for their expiration.',
        'setup' => 'Subscription package can be set up in a package settings, just under the price field.',

        'status' => [
            'active' => 'Active',
            'canceled' => 'Canceled',
            'expired' => 'Expired',
        ],
    ],

    'settings' => [
        'title' => 'Kaupan asetukset',
        'enable_home' => 'Ota kaupan kotisivu käyttöön',
        'home_message' => 'Koti viesti',
        'use_site_money' => 'Ota käyttöön ostokset sivuston valuutalla.',
        'use_site_money_info' => 'Kun käytössä, kaupassa olevat tuotteet voidaan ostaa vain tämän verkkosivuston valuutalla (krediiteillä". Muista lisätä Tarjoukset kohtaan yksi tai useampi tuote, jotta asiakkaat voivat ostaa sivun omaa valuuttaa (krediittejä).',
        'webhook' => 'Discord Webhook URL',
        'webhook_info' => 'When an user make a payment, it will create a notification on this webhook. Leave empty to disable.',
        'commands' => 'Yleiset komennot',
        'recent_payments' => 'Viimeaikaiset maksut määräraja sivupalkissa (aseta 0 poistaaksesi käytöstä)',
        'display_amount' => 'Display amount spend in recent payments and top customer',
        'top_customer' => 'Näytä kuukausittainen top asiakas sivupalkissa',

        'terms_required' => 'Require users to accept terms of service before purchase',
        'terms' => 'Terms of service',
        'terms_info' => 'Links in Markdown format, for example: <code>I accept the [terms of service](https://example.com/terms) of the shop.</code>',
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
            'created' => 'Maksutapa #:id luotu',
            'updated' => 'Maksutapa #:id päivitetty',
            'deleted' => 'Maksutapa #:id poistettu',
        ],

        'shop-packages' => [
            'created' => 'Tuote #:id luotu',
            'updated' => 'Tuote #:id päivitetty',
            'deleted' => 'Tuote #:id poistettu',
        ],

        'shop-offers' => [
            'created' => 'Tarjous #:id luotu',
            'updated' => 'Tarjous #:id päivitetty',
            'deleted' => 'Tarjous #:id poistettu',
        ],

        'shop-giftcards' => [
            'used' => 'Used giftcard #:id (:amount)',
        ],

        'settings' => 'Updated shop settings',
    ],

    'statistics' => [
        'title' => 'Tilastot',
        'total' => 'Yhteensä',
        'recent' => 'Viimeaikaiset maksut',
        'count' => 'Maksujen määrä',
        'estimated' => 'Arvioidut ansiot',
        'month' => 'Maksut tämän kuukauden aikana',
        'month_estimated' => 'Arvioidut ansiot tässä kuussa',
    ],

];
