<?php

return [
    'payment' => [
        'subject' => 'Gracias por su compra',
        'intro' => 'Gracias por tu compra, :user. Tu pago ha sido procesado y recibirás tus productos en el servidor a la brevedad.',
        'total' => 'Monto total: :total',
        'transaction' => 'Transacción: :transaction (:gateway)',
        'date' => 'Fecha: :date',
        'subscription' => 'This payment is for a subscription started on :date, you can manage it in your profile.',
        'profile' => 'Go to profile',
    ],

    'giftcard' => [
        'subject' => 'Tu código de tarjeta regalo',
        'intro' => '¡Gracias por su compra! Su tarjeta de regalo ya está disponible.',
        'code' => 'Código: :code',
        'balance' => 'Balance: :balance',
    ],

    'file' => [
        'subject' => 'Your download link',
        'intro' => 'Thank you :user for your purchase! The download link for your purchase is available below.',
    ],
];
