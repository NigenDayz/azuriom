<?php

return [
    'nav' => [
        'title' => 'Tienda',
        'settings' => 'Ajustes',
        'packages' => 'Paquetes',
        'gateways' => 'Métodos de pago',
        'offers' => 'Ofertas',
        'coupons' => 'Cupones',
        'giftcards' => 'Tarjetas de regalo',
        'discounts' => 'Descuentos',
        'payments' => 'Pagos',
        'subscriptions' => 'Subscriptions',
        'variables' => 'Variables',
        'purchases' => 'Compras',
        'statistics' => 'Estadísticas',
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
        'title' => 'Categorías',
        'edit' => 'Editar categoría :category',
        'create' => 'Crear categoría',

        'parent' => 'Categoría principal',
        'delete_error' => 'Una categoría con paquetes no puede ser eliminada.',

        'cumulate' => 'Recoger compras de esta categoría',
        'cumulate_info' => 'Los usuarios que ya hayan comprado un paquete en esta categoría obtendrán un descuento y sólo pagarán la diferencia al comprar un paquete más caro.',
        'cumulate_strict' => 'Prevent users from buying a cheaper package than those already purchased in this category',
        'single_purchase' => 'Limit the user to purchasing a single package from this category',
        'enable' => 'Habilitar la categoría',
    ],

    'offers' => [
        'title' => 'Ofertas',
        'edit' => 'Editar oferta :offer',
        'create' => 'Crear oferta',

        'enable' => 'Habilitar esta oferta',
    ],

    'coupons' => [
        'title' => 'Cupones',
        'edit' => 'Editar cupón :cupón',
        'create' => 'Crear cupón',

        'global' => '¿El cupón debe estar activo en toda la tienda?',
        'cumulate' => 'Permite usar este cupón con otros cupones',
        'user_limit' => 'Límite de usuarios',
        'global_limit' => 'Límite global',
        'active' => 'Activo',
        'usage' => 'Bajo límite de uso',
        'enable' => 'Habilitar el cupón',
    ],

    'giftcards' => [
        'title' => 'Tarjetas de regalo',
        'edit' => 'Editar la tarjeta regalo :giftcard',
        'create' => 'Crear una tarjeta regalo',

        'global_limit' => 'Límite global',
        'active' => 'Activo',
        'enable' => 'Activar la tarjeta regalo',
        'link' => 'Shareable link',
        'pending' => 'A payment is pending, the balance might not be updated yet.',
    ],

    'discounts' => [
        'title' => 'Descuentos',
        'edit' => 'Editar descuento :discount',
        'create' => 'Crear descuento',

        'global' => '¿El descuento debe estar activo en toda la tienda?',
        'active' => 'Activo',
        'enable' => 'Activar el descuento',
        'restricted' => 'Restringir este descuento solo a ciertos roles',
    ],

    'packages' => [
        'title' => 'Paquetes',
        'edit' => 'Editar paquete :package',
        'create' => 'Crear paquete',

        'every' => 'every',
        'after' => 'after',

        'updated' => 'Los paquetes han sido actualizados.',

        'variables' => 'Custom variables',
        'files' => 'Downloadable files',
        'role' => 'Role to set when the package expires',
        'money' => 'Dinero para entregar al usuario después de la compra',
        'has_giftcard' => 'Create a giftcard after the purchase and give it to the user',
        'giftcard_balance' => 'Giftcard balance',
        'giftcard_fixed' => 'Fixed amount',
        'giftcard_dynamic' => 'Precio del paquete',
        'command' => 'El comando no debe comenzar con <code>/</code>. Puedes usar <code>{player}</code> para el nombre del jugador. Para los juegos de Steam, también puedes usar <code>{steam_id}</code> y <code>{steam_id_32}</code>. Los otros marcadores de posición disponibles son: :placeholders.',
        'has_user_limit' => 'Add an individual purchase limit per user for this package',
        'has_global_limit' => 'Add a global purchase limit for this package',
        'limit_period' => 'Limit period',
        'limits_no_expired' => 'Exclude expired packages when calculating purchase limits',
        'no_period' => 'No period',
        'custom_price' => 'Permitir al usuario elegir el precio a pagar (el precio del paquete será entonces el mínimo)',
        'enable_quantity' => 'Habilitar la cantidad',

        'billing' => 'Billing type',
        'billing_period' => 'Billing period',
        'one_off' => 'One-off payment',
        'subscription' => 'Subscription with automatic renewal',
        'subscription_info' => 'Make sure your payment gateway supports subscriptions. When a subscription is created, the user will be charged the same price until the subscription is canceled (any discount active during the first payment will be applied to the next payments).',
        'expiring' => 'One-off payment with expiration',
        'expiring_info' => 'The product will be automatically removed after the specified period.',
        'scheduler' => 'CRON tasks are not enabled, you must set them up to use subscriptions and expiring packages, see the <a href="https://azuriom.com/docs/faq" target="_blank" rel="noopener norefferer">FAQ</a> for more information.',

        'create_category' => 'Crear categoría',
        'create_package' => 'Crear paquete',

        'enable' => 'Habilitar este paquete',
    ],

    'commands' => [
        'online' => 'Wait for the player to be online before executing the command (requires AzLink)',
        'offline' => 'Ejecutar el comando directamente, si el jugador está conectado o no',
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
        'title' => 'Métodos de pago',
        'edit' => 'Editar método de pago :gateway',
        'create' => 'Añadir método de pago',

        'current' => 'Métodos de pago actuales',
        'add' => 'Añadir un nuevo método de pago',
        'info' => 'Si tienes problemas con los pagos al usar Cloudflare o un cortafuegos, intenta seguir los pasos en la <a href="https://azuriom.com/docs/faq" target="_blank" rel="noopener norefferer">FAQ</a>.',

        'country' => 'País',
        'sandbox' => 'Sandbox',
        'api-key' => 'Clave API',
        'token' => 'Access Token',
        'public-key' => 'Clave pública',
        'private-key' => 'Clave privada',
        'secret-key' => 'Clave secreta',
        'endpoint-secret' => 'Firmando secreto',
        'service-id' => 'ID del servicio',
        'client-id' => 'ID del cliente',
        'merchant-id' => 'ID de comerciante',
        'project-id' => 'ID del proyecto',
        'webhook_id' => 'Webhook ID',
        'website_id' => 'Website ID',
        'env' => 'Entorno',

        'subscription' => 'This payment gateway supports automatic subscription renewal.',
        'no_subscription' => 'This payment gateway does not support automatic subscription renewal.',

        'paypal_email' => 'Dirección de correo de PayPal',
        'paypal_info' => 'Por favor, asegúrate de introducir la <strong>dirección de correo principal</strong> de la cuenta de PayPal.',
        'paypal_checkout' => 'On the PayPal dashboard, in your API application, create a webhook with URL <code>:url</code> and select the events <code>:events</code>.',
        'stripe_info' => 'On the Stripe dashboard you need to set the webhook URL to <code>:url</code> and select the events: <code>:events</code>.',
        'paymentwall_info' => 'En el panel de control de PaymentWall necesitas establecer la URL de pingback a <code>:url</code>.',
        'xsolla' => 'En el panel Xsolla necesita establecer la URL del webhook a <code>:url</code>, activa \'ID externo de la transacción\' en la configuración de \'Paga la estación\', prueba los webhooks y luego activa \'Pagar\' en la configuración de \'Pagar Estación\'.',
        'skrill_email' => 'Skrill Email Address',
        'skrill_secret' => 'Secret Word',
        'skrill_info' => 'The website ID and the Secret Word can be found in the Skrill dashboard under "Developer Settings".',
        'mercadopago' => 'The Mercado Pago credentials must be for the <strong>Checkout Pro</strong> integration.',

        'enable' => 'Habilitar la entrada',
    ],

    'payments' => [
        'title' => 'Pagos',
        'show' => 'Pago #:payment',

        'info' => 'Información sobre el pago',
        'items' => 'Artículos comprados',

        'card' => 'Pagos de la tienda',

        'status' => [
            'pending' => 'Pendiente',
            'expired' => 'Expirado',
            'chargeback' => 'Contracargo',
            'completed' => 'Completado',
            'refunded' => 'Reembolsado',
            'error' => 'Error',
        ],
    ],

    'purchases' => [
        'title' => 'Compras',
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
        'title' => 'Los ajustes de la tienda',
        'enable_home' => 'Habilitar la página de inicio de la tienda',
        'home_message' => 'Mensaje de inicio',
        'use_site_money' => 'Habilitar compras con la moneda del sitio.',
        'use_site_money_info' => 'Cuando se activa, los paquetes de la tienda sólo pueden comprarse con dinero del sitio web. Para que los usuarios acrediten su cuenta, puedes establecer ofertas en la tienda.',
        'webhook' => 'URL del Webbook de Discord',
        'webhook_info' => 'When an user make a payment, it will create a notification on this webhook. Leave empty to disable.',
        'commands' => 'Comandos globales',
        'recent_payments' => 'Límite de pagos recientes para mostrar en la barra lateral (establecer en 0 para desactivar)',
        'display_amount' => 'Mostrar la cantidad gastada en pagos recientes y clientes superiores',
        'top_customer' => 'Mostrar los principales clientes mensuales en la barra lateral',

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
        'dropdown' => '',
    ],

    'logs' => [
        'shop-gateways' => [
            'created' => 'Metodo creado #:id',
            'updated' => 'Método de pago actualizado #:id',
            'deleted' => 'Método de pago eliminado #:id',
        ],

        'shop-packages' => [
            'created' => 'Paquete creado #:id',
            'updated' => 'Paquete actualizado #:id',
            'deleted' => 'Borrar paquete #:id',
        ],

        'shop-offers' => [
            'created' => 'Crear oferta #:id',
            'updated' => 'Oferta actualizada #:id',
            'deleted' => 'Oferta eliminada #:id',
        ],

        'shop-giftcards' => [
            'used' => 'Tarjeta de regalo #:id (:amount)',
        ],

        'settings' => 'Updated shop settings',
    ],

    'statistics' => [
        'title' => 'Estadísticas',
        'total' => 'Total',
        'recent' => 'Pagos recientes',
        'count' => 'Contador de pagos',
        'estimated' => 'Ganancias estimadas',
        'month' => 'Pagos durante este mes',
        'month_estimated' => 'Ganancias estimadas en este mes',
    ],

];
