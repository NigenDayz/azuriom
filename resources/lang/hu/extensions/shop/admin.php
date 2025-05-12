<?php

return [
    'nav' => [
        'title' => 'Bolt',
        'settings' => 'Beállítások',
        'packages' => 'Csomagok',
        'gateways' => 'Fizetési módok',
        'offers' => 'Ajánlatok',
        'coupons' => 'Kuponok',
        'giftcards' => 'Ajándékkártyák',
        'discounts' => 'Kedvezmények',
        'payments' => 'Fizetések',
        'subscriptions' => 'Subscriptions',
        'variables' => 'Variables',
        'purchases' => 'Vásárlások',
        'statistics' => 'Statisztikák',
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
        'title' => 'Kategóriák',
        'edit' => ':category kategória szerkesztése',
        'create' => 'Kategória létrehozása',

        'parent' => 'Szülőkategória',
        'delete_error' => 'Azok a kategóriák amelyekben csomagok vannak nem törölhetőek.',

        'cumulate' => 'Összesített vásárlások ebben a kategóriában',
        'cumulate_info' => 'Azok a felhasználók, akik már vásároltak egy csomagot ebben a kategóriában, kedvezményt kapnak, és csak a különbözetet kell megfizetniük, ha drágább csomagot vásárolnak.
',
        'cumulate_strict' => 'Prevent users from buying a cheaper package than those already purchased in this category',
        'single_purchase' => 'Limit the user to purchasing a single package from this category',
        'enable' => 'Kategória engedélyezése',
    ],

    'offers' => [
        'title' => 'Ajánlatok',
        'edit' => ':offer ajánlat szerkesztése',
        'create' => 'Ajánlat létrehozása',

        'enable' => 'Ajánlat engedélyezése',
    ],

    'coupons' => [
        'title' => 'Kuponok',
        'edit' => ':coupon kupon szerkesztése',
        'create' => 'Kupon létrehozás',

        'global' => 'A kupon legyen aktív az összes boltban ?',
        'cumulate' => 'Engedélyezi, hogy ezt a kupont más kuponokkal együtt használja fel',
        'user_limit' => 'Felhasználói korlát',
        'global_limit' => 'Globális korlát',
        'active' => 'Aktív',
        'usage' => 'Under usage limit',
        'enable' => 'Kupon engedélyezése',
    ],

    'giftcards' => [
        'title' => 'Ajándékkártyák',
        'edit' => ':giftcard ajándékkártya szerkesztése',
        'create' => 'Ajándékkártya létrehozása',

        'global_limit' => 'Globális korlát',
        'active' => 'Aktív',
        'enable' => 'Ajándékkártya engedélyezése',
        'link' => 'Shareable link',
        'pending' => 'A payment is pending, the balance might not be updated yet.',
    ],

    'discounts' => [
        'title' => 'Kedvezmények',
        'edit' => ':discount kedvezmény szerkesztése',
        'create' => 'Kedvezmény létrehozása',

        'global' => 'A kedvezménynek az összes boltban aktívnak kell lennie?',
        'active' => 'Aktív',
        'enable' => 'Kedvezmény engedélyezése',
        'restricted' => 'Restrict this discount to certain roles only',
    ],

    'packages' => [
        'title' => 'Csomagok',
        'edit' => ':package csomag szerkesztése',
        'create' => 'Csomag létrehozása',

        'every' => 'every',
        'after' => 'after',

        'updated' => 'Csomagok frissítve lettek.',

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
        'enable_quantity' => 'Engedélyezd a mennyiséget',

        'billing' => 'Billing type',
        'billing_period' => 'Billing period',
        'one_off' => 'One-off payment',
        'subscription' => 'Subscription with automatic renewal',
        'subscription_info' => 'Make sure your payment gateway supports subscriptions. When a subscription is created, the user will be charged the same price until the subscription is canceled (any discount active during the first payment will be applied to the next payments).',
        'expiring' => 'One-off payment with expiration',
        'expiring_info' => 'The product will be automatically removed after the specified period.',
        'scheduler' => 'CRON tasks are not enabled, you must set them up to use subscriptions and expiring packages, see the <a href="https://azuriom.com/docs/faq" target="_blank" rel="noopener norefferer">FAQ</a> for more information.',

        'create_category' => 'Kategória létrehozása',
        'create_package' => 'Csomag létrehozása',

        'enable' => 'Csomag engedélyezése',
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
        'title' => 'Fizetési módok',
        'edit' => ':gateway fizetési mód szerkesztése',
        'create' => 'Fizetési mód hozzáadása',

        'current' => 'Jelenlegi fizetési mód',
        'add' => 'Új fizetési mód hozzáadása',
        'info' => 'Ha a Cloudflare vagy tűzfal használata esetén problémái vannak a fizetésekkel, próbálja meg követni a <a href="https://azuriom.com/docs/faq" target="_blank" rel="noopener norefferer">FAQ</a>-ban található lépéseket.',

        'country' => 'Ország',
        'sandbox' => 'Sandbox',
        'api-key' => 'API kulcs',
        'token' => 'Access Token',
        'public-key' => 'Nyilvános (Public) kulcs',
        'private-key' => 'Privát (Private) kulcs',
        'secret-key' => 'Titkos (Secret) kulcs',
        'endpoint-secret' => 'Signing Secret',
        'service-id' => 'Szolgáltatás azonosító',
        'client-id' => 'Ügyfél azonosító',
        'merchant-id' => 'Kereskedő azonosító',
        'project-id' => 'Projekt azonosító',
        'webhook_id' => 'Webhook ID',
        'website_id' => 'Website ID',
        'env' => 'Környezet',

        'subscription' => 'This payment gateway supports automatic subscription renewal.',
        'no_subscription' => 'This payment gateway does not support automatic subscription renewal.',

        'paypal_email' => 'PayPal e-mail cím',
        'paypal_info' => 'Please make sure to input the <strong>primary</strong> email address of the PayPal account.',
        'paypal_checkout' => 'On the PayPal dashboard, in your API application, create a webhook with URL <code>:url</code> and select the events <code>:events</code>.',
        'stripe_info' => 'On the Stripe dashboard you need to set the webhook URL to <code>:url</code> and select the events: <code>:events</code>.',
        'paymentwall_info' => 'A PaymentWall kezelőfelületen a pingback URL címét a <code>:url</code> értékre kell beállítanod.',
        'xsolla' => 'Az Xsolla kezelőfelületen be kell állítanod a webhook URL-t <code>:url</code>-re, engedélyezni kell a "Tranzakció külső azonosítóját" a "Fizetőállomás" beállításoknál, tesztelni kell a webhookokat, majd engedélyezni kell a "Pénztár" opciót a "Fizetőállomás" beállításoknál.',
        'skrill_email' => 'Skrill Email Address',
        'skrill_secret' => 'Secret Word',
        'skrill_info' => 'The website ID and the Secret Word can be found in the Skrill dashboard under "Developer Settings".',
        'mercadopago' => 'The Mercado Pago credentials must be for the <strong>Checkout Pro</strong> integration.',

        'enable' => 'Fizetési mód engedélyezése',
    ],

    'payments' => [
        'title' => 'Fizetések',
        'show' => '#:payment fizetés',

        'info' => 'Fizetési információ',
        'items' => 'Vásárolt tárgyak',

        'card' => 'Bolti fizetések',

        'status' => [
            'pending' => 'Függő',
            'expired' => 'Lejárt',
            'chargeback' => 'Visszaterhelés',
            'completed' => 'Befejezett',
            'refunded' => 'Visszatérítve',
            'error' => 'Hiba',
        ],
    ],

    'purchases' => [
        'title' => 'Vásárlások',
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
        'title' => 'Bolt beállítások',
        'enable_home' => 'Kezdőlapon megjelenítés engedélyezése',
        'home_message' => 'Főoldal üzenet',
        'use_site_money' => 'Engedélyezd a vásárlást a webhely pénznemével.',
        'use_site_money_info' => 'Ha engedélyezve van, a boltban lévő csomagokat csak a weboldalon lévő pénzzel lehet megvásárolni. Annak érdekében, hogy a felhasználók jóváírják a számlájukat, ajánlatokat állíthat be a boltban.
',
        'webhook' => 'Discord Webhook URL-je',
        'webhook_info' => 'When an user make a payment, it will create a notification on this webhook. Leave empty to disable.',
        'commands' => 'Globális parancsok',
        'recent_payments' => 'Legutóbbi fizetések limitje az oldalsávban való megjelenítéshez (0-ra állítva letiltható)
',
        'display_amount' => 'Display amount spend in recent payments and top customer',
        'top_customer' => 'Top havi ügyfél megjelenítése az oldalsávban',

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
            'created' => '#:id fizetési mód létrehozva',
            'updated' => '#:id fizetési mód frissítve',
            'deleted' => '#:id fizetési oldal törölve',
        ],

        'shop-packages' => [
            'created' => '#:id csomag létrehozva',
            'updated' => '#:id csomag frissítve',
            'deleted' => '#:id csomag törölve',
        ],

        'shop-offers' => [
            'created' => '#:id ajánlat létrehozva',
            'updated' => '#:id ajánlat frissítve',
            'deleted' => '#:id ajánlat törölve',
        ],

        'shop-giftcards' => [
            'used' => 'Used giftcard #:id (:amount)',
        ],

        'settings' => 'Updated shop settings',
    ],

    'statistics' => [
        'title' => 'Statisztikák',
        'total' => 'Összesen',
        'recent' => 'Legutóbbi kifizetések',
        'count' => 'Kifizetések száma',
        'estimated' => 'Becsült bevétel',
        'month' => 'Kifizetések ebben a hónapban',
        'month_estimated' => 'Becsült bevétel ebben a hónapban',
    ],

];
