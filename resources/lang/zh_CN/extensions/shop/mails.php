<?php

return [
    'payment' => [
        'subject' => '感谢您的购买',
        'intro' => ':user, 感谢您的购买! 您的交易已确认，您将在几分钟内收到您的物品.',
        'total' => '总计: :total',
        'transaction' => '交易 ID: :transaction (:gateway)',
        'date' => '日期: :date',
        'subscription' => '这笔自动订阅开始于 :date , 您可以在您的个人资料中管理它.',
        'profile' => '前往个人资料',
    ],

    'giftcard' => [
        'subject' => '您的礼品卡代码',
        'intro' => '感谢您的购买! 您的礼品卡现已可用.',
        'code' => '代码: :code',
        'balance' => '余额: :balance',
    ],

    'file' => [
        'subject' => 'Your download link',
        'intro' => 'Thank you :user for your purchase! The download link for your purchase is available below.',
    ],
];
