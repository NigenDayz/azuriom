<?php

return [

    'lang' => 'Русский',

    'date' => [
        'default' => 'j F Y \г\.',
        'full' => 'j F Y \г\. \в G:i',
        'compact' => 'd/m/Y \г\. \в G:i',
    ],

    'nav' => [
        'toggle' => 'Переключить навигацию',
        'profile' => 'Профиль',
        'admin' => 'Панель администратора',
    ],

    'actions' => [
        'add' => 'Добавить',
        'back' => 'Назад',
        'browse' => 'Просмотреть',
        'cancel' => 'Отменить',
        'choose_file' => 'Выбрать файл',
        'close' => 'Закрыть',
        'collapse' => 'Свернуть',
        'comment' => 'Комментировать',
        'continue' => 'Продолжить',
        'copy' => 'Копировать',
        'create' => 'Создать',
        'delete' => 'Удалить',
        'disable' => 'Отключить',
        'download' => 'Скачать',
        'duplicate' => 'Дублировать',
        'edit' => 'Редактировать',
        'enable' => 'Включить',
        'expand' => 'Развернуть',
        'generate' => 'Создать',
        'install' => 'Установить',
        'move' => 'Переместить',
        'refresh' => 'Обновить',
        'reload' => 'Перезагрузить',
        'remove' => 'Удалить',
        'save' => 'Сохранить',
        'search' => 'Искать',
        'send' => 'Отправить',
        'show' => 'Показать',
        'sort' => 'Сортировка',
        'update' => 'Обновить',
        'upload' => 'Загрузить',
    ],

    'fields' => [
        'action' => 'Действие',
        'address' => 'Адрес',
        'author' => 'Автор',
        'category' => 'Категория',
        'color' => 'Цвет',
        'content' => 'Содержание',
        'date' => 'Дата',
        'description' => 'Описание',
        'enabled' => 'Включено',
        'file' => 'Файл',
        'game' => 'Игра',
        'icon' => 'Иконка',
        'image' => 'Изображение',
        'link' => 'Ссылка',
        'money' => 'Деньги',
        'name' => 'Название',
        'permissions' => 'Права',
        'port' => 'Порт',
        'price' => 'Цена',
        'published_at' => 'Опубликовано',
        'quantity' => 'Количество',
        'role' => 'Роль',
        'server' => 'Сервер',
        'short_description' => 'Краткое описание',
        'slug' => 'Ссылка',
        'status' => 'Статус',
        'title' => 'Заголовок',
        'type' => 'Тип',
        'url' => 'URL',
        'user' => 'Пользователь',
        'value' => 'Значение',
        'version' => 'Версия',
    ],

    'status' => [
        'success' => 'Действие успешно завершено!',
        'error' => 'Произошла ошибка: :error',
    ],

    'range' => [
        'days' => 'По дням',
        'months' => 'По месяцам',
    ],

    'loading' => 'Загрузка...',

    'yes' => 'Да',
    'no' => 'Нет',
    'unknown' => 'Неизвестный(е)',
    'other' => 'Другое',
    'none' => 'Ни одного',
    'copied' => 'Скопировано',
    'icons' => 'Вы можете найти список доступных иконок на <a href="https://icons.getbootstrap.com/" target="_blank" rel="noopener noreferrer">Bootstrap Icons</a>.',

    'home' => 'Главная',
    'servers' => 'Серверы',
    'news' => 'Новости',
    'welcome' => 'Добро пожаловать на :name',
    'copyright' => 'Работает на <a href="https://azuriom.com" target="_blank" rel="noopener noreferrer">Azuriom</a>.',

    'maintenance' => [
        'title' => 'Техническое обслуживание',
        'message' => 'В настоящее время сайт находится на техобслуживании.',
    ],

    'theme' => [
        'light' => 'Светлая тема',
        'dark' => 'Темная тема',
    ],

    'captcha' => 'Проверка капчи не удалась, пожалуйста, попробуйте ещё раз.',

    'notifications' => [
        'notifications' => 'Уведомления',
        'read' => 'Отметить как прочитанное',
        'empty' => 'У вас нет непрочитанных уведомлений.',
        'level' => 'Уровень оповещения',
        'info' => 'Информация',
        'warning' => 'Предупреждение',
        'danger' => 'Опасность',
        'success' => 'Успех',
    ],

    'clipboard' => [
        'copied' => 'Скопировано!',
        'error' => 'CTRL + C для копирования',
    ],

    'server' => [
        'join' => 'Подключиться',
        'total' => ':count/:max игрок|:count/:max игроков онлайн',
        'online' => ':count игрок в сети|:count игроков в сети',
        'offline' => 'Сервер в настоящее время отключен.',
    ],

    'profile' => [
        'title' => 'Мой профиль',
        'change_email' => 'Изменить email-адрес',
        'change_password' => 'Изменить пароль',
        'change_name' => 'Изменить имя пользователя',
        'change_avatar' => 'Сменить аватар',
        'delete_avatar' => 'Удалить аватар',

        'avatar' => 'Аватар должен быть квадратным и иметь минимальный размер :size пикселей.',

        'delete' => [
            'btn' => 'Удалить мой аккаунт',
            'title' => 'Аккаунт удален',
            'info' => 'Это приведет к удалению вашего аккаунта и всех связанных с ним данных. Эту операцию нельзя отменить.',
            'email' => 'Мы вышлем вам подтверждение по электронной почте для подтверждения этой операции.',
            'sent' => 'Ссылка для подтверждения отправлена на ваш адрес электронной почты.',
            'success' => 'Ваш аккаунт был успешно удалён!',
        ],

        'email_verification' => 'Ваш email не подтверждён, проверьте вашу почту и подтвердите её по ссылке в письме.',
        'updated' => 'Ваш профиль был обновлён.',

        'info' => [
            'role' => 'Роль: :role',
            'register' => 'Зарегистрирован: :date',
            'money' => 'Деньги: :money',
            '2fa' => 'Двухфакторная аутентификация (2FA): :2fa',
            'discord' => 'Привязанный Discord аккаунт: :user',
        ],

        '2fa' => [
            'enable' => 'Включить 2FA',
            'disable' => 'Отключить 2FA',
            'manage' => 'Управление 2FA',
            'info' => 'Отсканируйте QR-код выше с помощью приложения двухфакторной аутентификации на вашем телефоне, таким как <a href="https://authy.com/" target="_blank" rel="noopener norefferer">Authy</a>, <a href="https://outercorner.com/secrets-ios/" target="_blank" rel="noopener norefferer">Secrets</a> или Google Authenticator.',
            'secret' => 'Секретный ключ: :secret',
            'title' => 'Двухфакторная аутентификация',
            'codes' => 'Показать коды восстановления',
            'code' => 'Код',
            'enabled' => 'Двухфакторная аутентификация включена. Не забудьте сохранить ваши коды восстановления!',
            'disabled' => 'Двухфакторная аутентификация отключена.',
        ],

        'discord' => [
            'link' => 'Привязать к Discord',
            'unlink' => 'Отвязать от Discord',
            'linked' => 'Ваша учётная запись Discord успешно привязана.',
        ],

        'money_transfer' => [
            'title' => 'Перевод',
            'user' => 'Пользователь не найден.',
            'balance' => 'У вас недостаточно денег для перевода.',
            'success' => 'Перевод отправлен.',
            'notification' => ':user отправил вам :money.',
        ],
    ],

    'posts' => [
        'posts' => 'Посты',
        'posted' => 'Опубликован :date :user',
        'unpublished' => 'Этот пост ещё не опубликован.',
        'read' => 'Подробнее',
    ],

    'comments' => [
        'create' => 'Прокомментировать',
        'guest' => 'Вы должны войти, чтобы оставить комментарий.',
        'author' => '<strong>:user</strong> прокомментировал(а) :date',
        'content' => 'Ваш комментарий',
        'delete' => 'Удалить?',
        'delete_confirm' => 'Вы уверены, что хотите удалить этот комментарий?',
    ],

    'auto' => 'Автоматически',

    'likes' => 'Лайки: :count',

    'markdown' => [
        'init' => 'Прикрепите файлы, перетаскивая или вставляя из буфера обмена.',
        'drag' => 'Перетащите картинку сюда.',
        'drop' => 'Загружаем изображение #images_names#...',
        'progress' => 'Загрузка #file_name#: #progress#%',
        'uploaded' => 'Загружено #image_name#',

        'size' => 'Изображение #image_name# слишком большое (#image_size#).\nМаксимальный размер файла #image_max_size#.',
        'error' => 'Что-то пошло не так при загрузке изображения #image_name#.',
    ],

    'discord_roles' => [
        'id' => [
            'name' => 'ID роли',
            'description' => 'ID роли на сайте.',
        ],

        'power' => [
            'name' => 'Сила роли',
            'description' => 'Сила роли на сайте равна или больше',
        ],
    ],
];
