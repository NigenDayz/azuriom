<?php

return [
    'payment' => [
        'subject' => '구매해 주셔서 감사합니다',
        'intro' => ':user 님 구매 감사합니다! 주문이 확인되었으며 수 분 안에 구매한 물품을 받을 수 있습니다.',
        'total' => '총합: :total',
        'transaction' => '트랜잭션 ID: :transaction (:gateway)',
        'date' => '날짜: :date',
        'subscription' => 'This payment is for a subscription started on :date, you can manage it in your profile.',
        'profile' => 'Go to profile',
    ],

    'giftcard' => [
        'subject' => 'Your giftcard code',
        'intro' => 'Thank you for your purchase! Your giftcard is now available.',
        'code' => 'Code: :code',
        'balance' => 'Balance: :balance',
    ],

    'file' => [
        'subject' => 'Your download link',
        'intro' => 'Thank you :user for your purchase! The download link for your purchase is available below.',
    ],
];
