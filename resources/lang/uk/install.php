<?php

return [
    'title' => 'Інсталяція',

    'welcome' => 'Azuriom — це ігрова CMS <strong>нового покоління</strong>, вона <strong>безкоштовна</strong> з <strong>відкритим кодом</strong> і є <strong>сучасною, надійною, швидкою та безпечною</strong> альтернативою існуючих CMS, щоб мати <strong>найкращий веб-досвід</strong>.',

    'back' => 'Назад',

    'requirements' => [
        'php' => 'PHP :version або вище',
        'writable' => 'Дозвіл на запис',
        'rewrite' => 'URL перезапис увімкнено',
        'extension' => 'Розширення :extension',
        'function' => 'Функція :function увімкнена',
        '64bit' => '64-бітний PHP',

        'refresh' => 'Оновити вимоги',
        'success' => 'Azuriom можна налаштувати!',
        'missing' => 'У вашому сервері немає необхідних вимог для встановлення Azuriom.',

        'help' => [
            'writable' => 'Ви можете спробувати цю команду, щоб надати дозвіл на запис: <code>:command</code>.',
            'rewrite' => 'Ви можете слідувати інструкціям в <a href="https://azuriom.com/docs/installation" target="_blank" rel="noopener noreferrer">нашій документації</a> для активації перезапису URL.',
            'htaccess' => 'Файл <code>.htaccess</code> або <code>public/.htaccess</code> відсутній. Переконайтесь, що ви маєте включені приховані файли та що цей файл присутній.',
            'extension' => 'Ви можете спробувати цю команду для встановлення відсутніх розширень PHP: <code>:command</code>.<br>Як тільки буде виконано, перезапустіть Apache або Nginx.',
            'function' => 'Вам необхідно ввімкнути цю функцію у файлі php.ini, через редагування значення <code>disable_function</code>.',
        ],
    ],

    'database' => [
        'title' => 'База даних',

        'type' => 'Тип',
        'host' => 'Хост',
        'port' => 'Порт',
        'database' => 'База даних',
        'user' => 'Користувач',
        'password' => 'Пароль',

        'warn' => 'Цей тип бази даних не рекомендується і він повинен використовуватися лише тоді, коли це неможливо зробити інакше.',
    ],

    'game' => [
        'title' => 'Гра',

        'locale' => 'Локалізація',

        'warn' => 'Будьте уважні, після завершення інсталяції неможливо буде змінити гру або метод входу без повного перевстановлення Azuriom!',

        'install' => 'Інсталювати',

        'user' => [
            'title' => 'Обліковий запис адміністратора',

            'name' => 'Назва',
            'email' => 'E-mail адреса',
            'password' => 'Пароль',
            'password_confirm' => 'Підтвердження паролю',
        ],

        'minecraft' => [
            'premium' => 'Увійдіть під обліковим записом Microsoft (найбезпечніше, але потрібно придбати Minecraft)',
        ],

        'steam' => [
            'profile' => 'URL-адреса профілю Steam',
            'profile_info' => 'Цей користувач Steam буде адміністратором на сайті.',

            'key' => 'Ключ API Steam',
            'key_info' => 'Ви можете знайти ваш ключ Steam API на <a href="https://steamcommunity.com/dev/apikey" target="_blank" rel="noopener noreferrer">Steam</a>.',
        ],

        'epic' => [
            'id' => 'Epic ID вашого профілю',
            'id_info' => 'Цей користувач буде адміністратором на сайті. Ви можете знайти свій Epic ID на своєму <a href="https://www.epicgames.com/account/personal" target="_blank" rel="noopener noreferrer">аккаунті Epic Games</a>.',

            'client_id' => 'Epic Games Client ID',
            'client_secret' => 'Epic Games Client Secret',

            'steps' => 'Щоб отримати Client ID і Client Secret, виконайте наступні дії:',
            'step_1' => 'Перейдіть на <a href="https://dev.epicgames.com/portal/" target="_blank" rel="noopener noreferrer">Epic Games Developer Portal</a> і створіть новий продукт.',
            'step_2' => 'В налаштуваннях продукту на вкладці "Clients" створіть нового клієнта за допомогою "GameClient" типу політики та наступну URL-адресу перенаправлення: <code>:redirect</code>',
            'step_3' => 'Ви можете знайти Client ID і Client Secret в налаштуваннях клієнта (Редагувати праворуч від клієнта).',
        ],
    ],

    'success' => [
        'thanks' => 'Дякуємо, що вибрали Azuriom!',
        'success' => 'Ваш сайт успішно встановлено, тепер ви можете користуватися своїм сайтом і зробити щось круте!',
        'go' => 'Початок роботи',
        'support' => 'Якщо ви цінуєте Azuriom та роботу, яку ми надаємо, не забувайте <a href="https://azuriom.com/support-us" target="_blank" rel="noopener noreferrer">підтримати нас</a>.',
    ],
];
