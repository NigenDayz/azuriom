<?php

return [
    'title' => 'Dukungan',

    'seconds' => 'seconds',

    'fields' => [
        'subject' => 'Judul',
        'ticket' => 'Tiket',
        'comment' => 'Kometar',
    ],

    'actions' => [
        'create' => 'Buka tiket baru',
        'reopen' => 'Buka kembali',
    ],

    'state' => [
        'open' => 'Buka',
        'closed' => 'Ditutup',
        'replied' => 'Replied',
    ],

    'tickets' => [
        'closed' => 'Tiket ini ditutup.',

        'open' => 'Buka tiket',

        'notification' => 'Tanggapan baru di tiket dukungan kamu.',
        'delay' => 'You need to wait :time before opening a new ticket.',
        'info' => '<strong>:author</strong> membuat tiket ini dalam kategori <strong>:category</strong> pada :date.',
    ],

    'webhook' => [
        'ticket' => 'Tiket baru di dukungan',
        'comment' => 'Komentar baru di dukungan',
        'closed' => 'Tiket ditutup',
    ],

    'mails' => [
        'comment' => [
            'subject' => 'Balasan baru di tiket dukungan kamu',
            'message' => 'Halo :user, tiket dukungan kamu #:id mendapat balasan baru dari :author.',
            'view' => 'Lihat tiket',
        ],
    ],

    'days' => 'days',
];
