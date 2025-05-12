<?php

return [
    'nav' => [
        'title' => 'Butik',
        'settings' => 'Inställningar',
        'packages' => 'Paket',
        'gateways' => 'Gateways',
        'offers' => 'Erbjudanden',
        'coupons' => 'Kuponger',
        'giftcards' => 'Presentkort',
        'discounts' => 'Rabatter',
        'payments' => 'Betalningar',
        'subscriptions' => 'Subscriptions',
        'variables' => 'Variables',
        'purchases' => 'Inköp',
        'statistics' => 'Statistik',
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
        'title' => 'Kategorier',
        'edit' => 'Redigera kategori :category',
        'create' => 'Skapa kategori',

        'parent' => 'Överordnad kategori',
        'delete_error' => 'En kategori med paket kan inte tas bort.',

        'cumulate' => 'Samla inköp i denna kategori',
        'cumulate_info' => 'Användare som redan har köpt ett paket i denna kategori kommer att få en rabatt och kommer bara att betala skillnaden när de köper ett dyrare paket.',
        'cumulate_strict' => 'Prevent users from buying a cheaper package than those already purchased in this category',
        'single_purchase' => 'Limit the user to purchasing a single package from this category',
        'enable' => 'Aktivera kategorin',
    ],

    'offers' => [
        'title' => 'Erbjudanden',
        'edit' => 'Redigera erbjudande:offer',
        'create' => 'Skapa erbjudande',

        'enable' => 'Aktivera detta erbjudande',
    ],

    'coupons' => [
        'title' => 'Kuponger',
        'edit' => 'Redigera kupong :coupon',
        'create' => 'Skapa kupong',

        'global' => 'Bör kupongen vara aktiv på hela butiken?',
        'cumulate' => 'Tillåt att använda denna kupong med andra kuponger',
        'user_limit' => 'Användargräns',
        'global_limit' => 'Global gräns',
        'active' => 'Aktiv',
        'usage' => 'Under usage limit',
        'enable' => 'Aktivera kupongen',
    ],

    'giftcards' => [
        'title' => 'Presentkort',
        'edit' => 'Redigera presentkortet :giftcard',
        'create' => 'Skapa ett presentkort',

        'global_limit' => 'Global gräns',
        'active' => 'Aktiv',
        'enable' => 'Aktivera presentkortet',
        'link' => 'Shareable link',
        'pending' => 'A payment is pending, the balance might not be updated yet.',
    ],

    'discounts' => [
        'title' => 'Rabatter',
        'edit' => 'Redigera rabatt :discount',
        'create' => 'Skapa rabatt',

        'global' => 'Ska rabatten vara aktiv på hela butiken?',
        'active' => 'Aktiv',
        'enable' => 'Aktivera rabatten',
        'restricted' => 'Restrict this discount to certain roles only',
    ],

    'packages' => [
        'title' => 'Paket',
        'edit' => 'Redigera paket :package',
        'create' => 'Skapa paket',

        'every' => 'every',
        'after' => 'after',

        'updated' => 'Paketen har uppdaterats.',

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
        'custom_price' => 'Tillåt användaren att välja priset för att betala (paketpriset blir då det minsta)',
        'enable_quantity' => 'Aktivera kvantitet',

        'billing' => 'Billing type',
        'billing_period' => 'Billing period',
        'one_off' => 'One-off payment',
        'subscription' => 'Subscription with automatic renewal',
        'subscription_info' => 'Make sure your payment gateway supports subscriptions. When a subscription is created, the user will be charged the same price until the subscription is canceled (any discount active during the first payment will be applied to the next payments).',
        'expiring' => 'One-off payment with expiration',
        'expiring_info' => 'The product will be automatically removed after the specified period.',
        'scheduler' => 'CRON tasks are not enabled, you must set them up to use subscriptions and expiring packages, see the <a href="https://azuriom.com/docs/faq" target="_blank" rel="noopener norefferer">FAQ</a> for more information.',

        'create_category' => 'Skapa kategori',
        'create_package' => 'Skapa paket',

        'enable' => 'Aktivera detta paket',
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
        'title' => 'Gateways',
        'edit' => 'Redigera gateway :gateway',
        'create' => 'Lägg till gateway',

        'current' => 'Nuvarande gateways',
        'add' => 'Lägg till en ny gateway',
        'info' => 'Om du har problem med AzLink när du använder Cloudflare eller en brandvägg, prova att följa stegen i <a href="https://azuriom.com/docs/faq" target="_blank" rel="noopener norefferer">FAQ</a>.',

        'country' => 'Land',
        'sandbox' => 'Sandbox',
        'api-key' => 'API-nyckel',
        'token' => 'Access Token',
        'public-key' => 'Publik nyckel',
        'private-key' => 'Privat nyckel',
        'secret-key' => 'Hemlig nyckel',
        'endpoint-secret' => 'Signing Secret',
        'service-id' => 'Tjänst-ID',
        'client-id' => 'Klient-ID',
        'merchant-id' => 'Handlare-ID',
        'project-id' => 'Projekt-ID',
        'webhook_id' => 'Webhook ID',
        'website_id' => 'Website ID',
        'env' => 'Miljö',

        'subscription' => 'This payment gateway supports automatic subscription renewal.',
        'no_subscription' => 'This payment gateway does not support automatic subscription renewal.',

        'paypal_email' => 'PayPal e-postadress',
        'paypal_info' => 'Please make sure to input the <strong>primary</strong> email address of the PayPal account.',
        'paypal_checkout' => 'On the PayPal dashboard, in your API application, create a webhook with URL <code>:url</code> and select the events <code>:events</code>.',
        'stripe_info' => 'On the Stripe dashboard you need to set the webhook URL to <code>:url</code> and select the events: <code>:events</code>.',
        'paymentwall_info' => 'På PaymentWall instrumentpanelen måste du ställa in pingback URL till <code>:url</code>.',
        'xsolla' => 'På Xsolla instrumentpanelen måste du ställa in webhook URL till <code>:url</code>, aktivera "Transaktions externa ID" i inställningarna för "Pay station", testa webbhookarna och aktivera sedan "Checkout" i inställningarna för "Pay Station".',
        'skrill_email' => 'Skrill Email Address',
        'skrill_secret' => 'Secret Word',
        'skrill_info' => 'The website ID and the Secret Word can be found in the Skrill dashboard under "Developer Settings".',
        'mercadopago' => 'The Mercado Pago credentials must be for the <strong>Checkout Pro</strong> integration.',

        'enable' => 'Aktivera gateway',
    ],

    'payments' => [
        'title' => 'Betalningar',
        'show' => 'Betalning #:payment',

        'info' => 'Betalningsinfo',
        'items' => 'Köpta artiklar',

        'card' => 'Handla betalningar',

        'status' => [
            'pending' => 'Väntar',
            'expired' => 'Utgått',
            'chargeback' => 'Återbetalning',
            'completed' => 'Slutförd',
            'refunded' => 'Refunded',
            'error' => 'Fel',
        ],
    ],

    'purchases' => [
        'title' => 'Inköp',
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
        'title' => 'Butikens inställningar',
        'enable_home' => 'Aktivera butikens hemsida',
        'home_message' => 'Hem meddelande',
        'use_site_money' => 'Aktivera köp med webbplatsens valuta.',
        'use_site_money_info' => 'När den är aktiverad kan paketen i butiken endast köpas med pengar från webbplatsen. För att användare ska kunna kreditera sitt konto kan du ställa in erbjudanden i butiken.',
        'webhook' => 'Discord Webhook URL',
        'webhook_info' => 'When an user make a payment, it will create a notification on this webhook. Leave empty to disable.',
        'commands' => 'Globala kommandon',
        'recent_payments' => 'Senaste betalningar gräns för att visas i sidofältet (satt till 0 för att inaktivera)',
        'display_amount' => 'Display amount spend in recent payments and top customer',
        'top_customer' => 'Visa toppkunder i sidofältet',

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
            'created' => 'Skapad gateway #:id',
            'updated' => 'Uppdaterad gateway #:id',
            'deleted' => 'Borttagna gateway #:id',
        ],

        'shop-packages' => [
            'created' => 'Skapat paket #:id',
            'updated' => 'Uppdaterat paket #:id',
            'deleted' => 'Tog bort paket #:id',
        ],

        'shop-offers' => [
            'created' => 'Skapade erbjudande #:id',
            'updated' => 'Uppdaterat erbjudande #:id',
            'deleted' => 'Raderat erbjudande #:id',
        ],

        'shop-giftcards' => [
            'used' => 'Använt presentkort #:id (:amount)',
        ],

        'settings' => 'Updated shop settings',
    ],

    'statistics' => [
        'title' => 'Statistik',
        'total' => 'Totalt',
        'recent' => 'Senaste betalningar',
        'count' => 'Antal betalningar',
        'estimated' => 'Beräknad lön',
        'month' => 'Betalningar under denna månad',
        'month_estimated' => 'Beräknad lön denna månad',
    ],

];
