<?php

return [
    'payment' => [
        'subject' => 'Terima kasih atas pembeliannya',
        'intro' => 'Terima kasih :user atas pembeliannya! Pembayaran kamu telah dikonfirmasi dan kamu akan menerima pembelian dalam beberapa menit.',
        'total' => 'Jumlah: :total',
        'transaction' => 'ID transaksi: :transaction (:gateway)',
        'date' => 'Tanggal: :date',
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
