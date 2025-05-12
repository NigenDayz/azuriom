<?php

return [
    'payment' => [
        'subject' => 'Obrigado pela sua compra',
        'intro' => 'Obrigado :user por sua compra! Seu pagamento foi confirmado e você receberá suas compras em alguns minutos.',
        'total' => 'Total: :total',
        'transaction' => 'Transação ID: :transaction (:gateway)',
        'date' => 'Data: :date',
        'subscription' => 'Este pagamento é para uma assinatura iniciada em :date, você pode gerenciá-lo no seu perfil.',
        'profile' => 'Ir para o perfil',
    ],

    'giftcard' => [
        'subject' => 'Seu código do giftcard',
        'intro' => 'Obrigado pela sua compra! O seu giftcard está disponível.',
        'code' => 'Código: :code',
        'balance' => 'Saldo: :balance',
    ],

    'file' => [
        'subject' => 'Seu link para download',
        'intro' => 'Obrigado :user por sua compra! O link para download de sua compra está disponível abaixo.',
    ],
];
