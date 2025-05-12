<?php

return [
    'title' => 'Tienda',
    'welcome' => '¡Bienvenido a la tienda!',

    'buy' => 'Comprar',

    'free' => 'Gratis',

    'periods' => [
        'hours' => 'hora',
        'days' => 'days',
        'weeks' => 'weeks',
        'months' => 'months',
        'years' => 'years',
    ],

    'fields' => [
        'balance' => 'Saldo',
        'category' => 'Categoría',
        'code' => 'Código',
        'commands' => 'Comandos',
        'currency' => 'Divisa',
        'discount' => 'Descuento',
        'expire_date' => 'Fecha de expiración',
        'gateways' => 'Métodos de pago',
        'global_limit' => 'Global purchase limit',
        'original_balance' => 'Saldo original',
        'package' => 'Paquete',
        'packages' => 'Paquetes',
        'payment_id' => 'ID de pago',
        'payments' => 'Pagos',
        'price' => 'Precio',
        'quantity' => 'Cantidad',
        'renewal_date' => 'Renewal date',
        'required' => 'Required',
        'required_packages' => 'Required packages',
        'required_roles' => 'Rol requerido',
        'role' => 'Rol a establecer después de la compra',
        'start_date' => 'Fecha de inicio',
        'subscription' => 'Subscription',
        'subscription_id' => 'Subscription ID',
        'total' => 'Total',
        'user_id' => 'ID del usuario',
        'user_limit' => 'Límite de compras por usuario',
    ],

    'actions' => [
        'subscribe' => 'Subscribe',
        'manage' => 'Manage subscription',
        'move' => 'Move',
    ],

    'goal' => [
        'title' => 'Objetivo del mes',
        'progress' => ':count% completado',
    ],

    'recent' => [
        'title' => 'Pagos recientes',
        'empty' => 'No hay pagos recientes',
    ],

    'top' => [
        'title' => 'Top clientes',
    ],

    'cart' => [
        'title' => 'Carrito',
        'success' => 'Su compra se ha completado correctamente.',
        'guest' => 'Debes iniciar sesión para poder realizar compras en la tienda.',
        'empty' => 'Tu carrito de compras está vacío.',
        'checkout' => 'Pagar',
        'clear' => 'Vaciar el carrito',
        'pay' => 'Pagar',
        'back' => 'Volver a la tienda',
        'total' => 'Total: :total',
        'payable_total' => 'Total a pagar: :total',
        'credit' => 'Crédito',

        'confirm' => [
            'title' => '¿Pagar?',
            'price' => '¿Estás seguro de que quieres comprar este carrito por :price?',
        ],

        'errors' => [
            'money' => 'No tienes suficiente dinero para hacer esta compra.',
            'execute' => 'Se ha producido un error inesperado durante el pago, se reembolsará su compra.',
        ],
    ],

    'coupons' => [
        'title' => 'Cupones',
        'add' => 'Añadir un cupón',
        'error' => 'Este cupón no existe, ha caducado o ya no se puede utilizar.',
        'cumulate' => 'No puedes usar este cupón con otro cupón.',
    ],

    'payment' => [
        'title' => 'Pago',
        'manual' => 'Pago manual',

        'empty' => 'Lo sentimos, no hay métodos de pago disponibles; intenta de nuevo más tarde.',

        'info' => 'Compra #:id en el sitio :website',
        'subscription' => ':package - Subscription (User #:user)',
        'error' => 'Ocurrió un error al procesar tu pago, intenta de nuevo más tarde.',
        'giftcards' => 'Giftcards',

        'success' => 'Pago completado, recibirás tu compra en el juego en menos de un minuto.',
        'pending' => 'Payment pending, you\'ll receive your purchase in-game once the payment is confirmed.',

        'webhook' => 'Nueva compra en la tienda',
        'webhook_info' => 'Total: :total, ID: :id (:gateway)',
        'webhook_chargeback' => 'Payment chargeback on the shop',
        'webhook_refund' => 'Payment refund on the shop',
    ],

    'categories' => [
        'empty' => 'Esta categoría está vacía.',
    ],

    'packages' => [
        'limit' => '¡Vaya! Parece que has comprado el máximo de paquetes disponibles por usuario.',
        'requirements' => 'No tienes los requisitos para comprar este paquete.',
        'cumulate' => 'You cannot buy this package with an other from the same category in the same purchase.',
        'file' => 'Click here to download the file :file',
    ],

    'offers' => [
        'gateway' => 'Tipo de pago',
        'amount' => 'Cantidad',

        'empty' => 'Lo sentimos, no hay ofertas disponibles actualmente.',
    ],

    'profile' => [
        'payments' => 'Tus pagos',
        'subscriptions' => 'Your subscriptions',
        'money' => 'Dinero: :balance',
    ],

    'giftcards' => [
        'title' => 'Tarjetas de regalo',
        'error' => 'Esta tarjeta de regalo no existe, ha expirado o ya no puede ser utilizada.',
        'add' => 'Añadir un vale de regalo',
        'notification' => 'Has recibido una tarjeta de regalo, el código es :code (:balance).',
        'pending' => 'A payment has already started for this giftcard. Complete the payment or wait a few minutes.',
    ],
];
