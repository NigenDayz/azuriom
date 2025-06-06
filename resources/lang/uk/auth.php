<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => 'Введені дані не збігаються з нашими записами.',
    'throttle' => 'Занадто багато спроб входу. Будь ласка, спробуйте ще раз, через :seconds секунд.',

    'register' => 'Реєстрація',
    'login' => 'Увійти',
    'logout' => 'Вийти',
    'verify' => 'Підтвердіть свою ел. адресу',
    'passwords' => [
        'confirm' => 'Підтвердження паролю',
        'reset' => 'Відновлення паролю',
        'send' => 'Надіслати лист для відновлення паролю',
    ],
    'fpc' => [
        'title' => 'Примусова зміна пароля',
        'line1' => 'Ваш обліковий запис тимчасово заблоковано з міркувань безпеки. Щоб розблокувати його, будь ласка, змініть ваш пароль.',
        'line2' => 'Якщо вам потрібна додаткова інформація або є проблеми з розблокуванням облікового запису, будь ласка, зв\'яжіться з адміністратором сайту.',
        'action' => 'Змінити мій пароль',
    ],
    'name' => 'Нікнейм',
    'email' => 'Ел. адреса',
    'password' => 'Пароль',
    'confirm_password' => 'Підтвердити пароль',
    'current_password' => 'Поточний пароль',

    'conditions' => 'Я приймаю <a href=":url" target="_blank">умови</a>.',

    '2fa' => [
        'code' => 'Код автентифікації для двох факторних аутентифікацій',
        'invalid' => 'Невірний код',
    ],

    'suspended' => 'Цей обліковий запис заблоковано.',

    'maintenance' => 'Наразі сайт знаходиться на обслуговуванні.',

    'remember' => 'Запам\'ятати мене',
    'forgot_password' => 'Забули пароль?',

    'verification' => [
        'sent' => 'На вашу електронну адресу було надіслано нове посилання для підтвердження.',
        'check' => 'Перед тим як продовжити, будь ласка, перевірте свою електронну пошту, щоб підтвердити посилання.',
        'request' => 'Якщо ви не отримали листа, то можете запросити інший.',
        'resend' => 'Надіслати лист повторно',
    ],

    'confirmation' => 'Будь ласка, підтвердіть ваш пароль, перш ніж продовжити.',

    'mail' => [
        'reset' => [
            'subject' => 'Сповішення про відновлення паролю',
            'line1' => 'Ви отримали цей лист, тому що ми отримали запит на зміну пароля для вашого облікового запису.',
            'action' => 'Скинути пароль',
            'line2' => 'Термін дії цього посилання для скидання пароля мине через :count хвилин.',
            'line3' => 'Якщо ви не запитували скидання паролю, просто ігноруйте цей лист.',
        ],

        'verify' => [
            'subject' => 'Підтвердити ел. пошту',
            'line1' => 'Будь ласка, натисніть на кнопку нижче, щоб підтвердити свою електронну адресу.',
            'action' => 'Підтвердити ел. пошту',
            'line2' => 'Якщо ви не створювали обліковий запис, просто ігноруйте цей лист.',
        ],
    ],
];
