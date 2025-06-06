<?php

return [
    'error' => 'Помилка',
    'code' => 'Помилка :code',
    'home' => 'Повернутися на головну',
    'whoops' => 'Йой!',

    '401' => [
        'title' => 'Неавторизовано',
        'message' => 'Для доступу до цієї сторінки ви маєте бути авторизовані.',
    ],
    '403' => [
        'title' => 'Не доступно',
        'message' => 'Вам заборонено доступ до цієї сторінки.',
    ],
    '404' => [
        'title' => 'Не знайдено',
        'message' => 'Сторінку не знайдено.',
    ],
    '419' => [
        'title' => 'Термін дії сторінки вичерпано',
        'message' => 'Час вашої сесії минув. Будь ласка, оновіть сторінку та спробуйте знову.',
    ],
    '429' => [
        'title' => 'Забагато запитів',
        'message' => 'Ви робите занадто багато запитів до наших серверів. Будь ласка, спробуйте ще раз пізніше.',
    ],
    '500' => [
        'title' => 'Помилка сервера',
        'message' => 'Ой, щось пішло не так на наших серверах. Будь ласка, спробуйте ще раз пізніше.',
    ],
    '503' => [
        'title' => 'Сервіс недоступний',
        'message' => 'Ми проводимо технічне обслуговування. Будь ласка, завітайте пізніше.',
    ],

    'fallback' => [
        'message' => 'Сталася помилка. Спробуйте ще раз.',
    ],
];
