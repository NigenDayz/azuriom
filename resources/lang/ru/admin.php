<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Admin Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used on the admin dashboard
    |
    */

    'nav' => [
        'dashboard' => 'Панель управления',
        'settings' => [
            'heading' => 'Настройки',
            'settings' => 'Настройки',
            'global' => 'Общее',
            'security' => 'Безопасность',
            'performances' => 'Производительность',
            'home' => 'Главная',
            'auth' => 'Аутентификация',
            'mail' => 'Почта',
            'maintenance' => 'Техобслуживание',
            'social' => 'Соц. Сети',
            'navbar' => 'Панель навигации',
            'servers' => 'Серверы',
        ],

        'users' => [
            'heading' => 'Пользователи',
            'users' => 'Пользователи',
            'roles' => 'Роли',
            'bans' => 'Блокировки',
        ],

        'content' => [
            'heading' => 'Содержание',
            'pages' => 'Страницы',
            'posts' => 'Посты',
            'images' => 'Изображения',
            'redirects' => 'Перенаправления',
        ],

        'extensions' => [
            'heading' => 'Расширения',
            'plugins' => 'Плагины',
            'themes' => 'Темы',
        ],

        'other' => [
            'heading' => 'Другое',
            'update' => 'Обновление',
            'logs' => 'Логи',
        ],

        'profile' => [
            'profile' => 'Профиль',
        ],

        'back' => 'Вернуться на сайт',
        'support' => 'Поддержка',
        'documentation' => 'Документация',
    ],

    'delete' => [
        'title' => 'Удалить?',
        'description' => 'Вы уверены, что хотите удалить это? Это невозможно отменить!',
    ],

    'footer' => 'Работает на :azuriom &copy; :year. Панель разработана :startbootstrap.',

    /*
    |
    | Admin pages
    |
    */

    'dashboard' => [
        'title' => 'Панель управления',

        'users' => 'Пользователи',
        'posts' => 'Посты',
        'pages' => 'Страницы',
        'images' => 'Изображения',

        'update' => 'Доступна новая версия Azuriom: :version',
        'http' => 'Ваш сайт не использует https, вам следует включить его для вашей безопасности и безопасности других пользователей.',
        'cloudflare' => 'Если вы используете Cloudflare, установите плагин Cloudflare Support.',
        'recent_users' => 'Последние пользователи',
        'active_users' => 'Активные пользователи',
        'emails' => 'Отправка email отключена. Пользователи не смогут восстановить забытые пароли. Включить рассылку можно в разделе <a href=":url">настройки почты</a>.',
    ],

    'settings' => [
        'index' => [
            'title' => 'Общие настройки',

            'name' => 'Название сайта',
            'url' => 'URL сайта',
            'description' => 'Описание сайта',
            'meta' => 'Мета-теги',
            'meta_info' => 'Ключевые слова должны быть разделены запятой.',
            'favicon' => 'Favicon',
            'background' => 'Фон',
            'logo' => 'Логотип',
            'timezone' => 'Часовой пояс',
            'locale' => 'Язык',
            'money' => 'Название валюты сайта',
            'copyright' => 'Копирайт',
            'user_money_transfer' => 'Разрешить перевод денег между пользователями',
            'site_key' => 'Ключ сайта для azuriom.com',
            'site_key_info' => 'Для установки премиальных расширений, купленных в магазине, требуется ключ сайта на azuriom.com. Вы можете получить его в своём <a href="https://market.azuriom.com/profile" target="_blank" rel="noopener norefferer">профиле Azuriom</a>.',
            'webhook' => 'URL Discord Вебхука',
            'webhook_info' => 'Уведомление о постах будет отправлено на этот вебхук, оставьте пустым для отключения.',
        ],

        'security' => [
            'title' => 'Настройки безопасности',

            'captcha' => [
                'title' => 'Капча',
                'site_key' => 'Ключ сайта',
                'secret_key' => 'Секретный ключ',
                'recaptcha' => 'Вы можете получить ключи reCaptcha на <a href="https://www.google.com/recaptcha/" target="_blank" rel="noopener noreferrer">Сайте Google reCaptcha</a>. Вам нужно использовать reCaptcha <strong>V2 Invisible</strong> ключи.',
                'hcaptcha' => 'Вы можете получить ключи hCaptcha на <a href="https://www.hcaptcha.com/" target="_blank" rel="noopener noreferrer">сайте hCaptcha</a>.',
                'turnstile' => 'Вы можете получить ключи Turnstil на <a href="https://dash.cloudflare.com/?to=/:account/turnstile" target="_blank" rel="noopener noreferrer">Сайте Cloudflare dashboard</a>. Вам нужно использовать "Managed" виджет.',
            ],

            'hash' => 'Алгоритм хеширования',
            'hash_error' => 'Этот алгоритм хеширования не поддерживается вашей текущей версией PHP.',
            'force_2fa' => 'Требовать 2FA для доступа в админ панель',
        ],

        'performances' => [
            'title' => 'Настройки производительности',

            'cache' => [
                'title' => 'Очистить кэш',
                'clear' => 'Очистить кэш',
                'description' => 'Очищает кеш сайта.',
                'error' => 'Ошибка при очистке кэша.',
            ],

            'boost' => [
                'title' => 'AzBoost',
                'description' => 'AzBoost улучшает производительность вашего сайта, добавляя ещё один эксклюзивный слой кэша.',
                'info' => 'Если у вас возникли проблемы после включения расширения, очистите кэш сайта.',

                'enable' => 'Включить AzBoost',
                'disable' => 'Выключить AzBoost',
                'reload' => 'Перезагрузить AzBoost',

                'status' => 'AzBoost в данный момент :status.',
                'enabled' => 'включён',
                'disabled' => 'отключен',

                'error' => 'Ошибка при включении AzBoost.',
            ],
        ],

        'seo' => [
            'title' => 'Настройки домашнего экрана',

            'html' => 'Вы можете добавить HTML-код в <code>&lt;head&gt;</code> или <code>&lt;body&gt;</code> всех страниц (например, для анализа баннеров или сайтов), создав файл с именем <code>head. blade.php</code> или <code>body.blade.php</code> в папке <code>recources/views/custom/</code>.',
            'home_message' => 'Приветственное сообщение',

            'welcome_alert' => [
                'enable' => 'Включить всплывающее окно приветствия?',
                'message' => 'Всплывающее приветственное сообщение',
                'info' => 'Это всплывающее сообщение будет отображено при первом посещении сайта пользователем.',
            ],
        ],

        'auth' => [
            'title' => 'Аутентификация',

            'conditions' => 'Условия, которые будут приняты при регистрации',
            'conditions_info' => 'Ссылки в формате Markdown, например: <code>Я принимаю [conditions](/conditions-link) и [политику конфиденциальности](/privacy-policy)</code>',
            'registration' => 'Включить регистрацию пользователей',
            'registration_info' => '<strong>Кнопка "Регистрация" удаляется при отключении этой опции.</strong> Некоторые плагины могут по-прежнему позволять создавать новые учетные записи пользователей.',
            'api' => 'Включить Auth API',
            'api_info' => 'Этот API позволяет добавить пользовательскую аутентификацию на сервер. Для серверов Minecraft с использованием лаунчера, можно использовать <a href="https://github.com/Azuriom/AzAuth" target="_blank" rel="noopener noreferrer">AzAuth</a> для упрощения интеграции.',
            'user_change_name' => 'Разрешить изменение имени пользователя в профиле',
            'user_avatar' => 'Разрешить пользователям загружать свой собственный аватар в своем профиле',
            'user_delete' => 'Разрешить пользователям удалять свой аккаунт из своего профиля',
        ],

        'mail' => [
            'title' => 'Настройки почты',
            'from' => 'Адрес электронной почты, используемый для отправки писем.',
            'mailer' => 'Тип email',
            'mailer_info' => 'Azuriom поддерживает SMTP и Sendmail для отправки электронной почты. Более подробную информацию о конфигурации почты вы можете найти в нашей <a href="https://azuriom.com/docs" target="_blank" rel="noopener noreferrer">документации</a>.',
            'disabled' => 'Когда отправка электронной почты отключена, пользователи не смогут восстановить свой пароль, если они его забудут.',
            'sendmail' => 'Использование Sendmail не рекомендуется. Если у вас есть такая возможность, используйте SMTP-сервер.',
            'smtp' => [
                'host' => 'Адрес хоста SMTP',
                'port' => 'Порт хоста SMTP',
                'scheme' => 'Схема',
                'username' => 'Имя пользователя SMTP-сервера',
                'password' => 'Пароль SMTP-сервера',
            ],
            'verification' => 'Включить подтверждение email пользователей',
            'send' => 'Отправить тестовое письмо',
            'sent' => 'Тестовое письмо было успешно отправлено.',
            'missing' => 'Для учетной записи :user не указан адрес электронной почты.',
        ],

        'maintenance' => [
            'title' => 'Настройки тех. обслуживания',

            'enable' => 'Включить тех. обслуживание',
            'message' => 'Техническое сообщение',
            'global' => 'Включить режим обслуживания на сайте',
            'paths' => 'Пути, заблокированные в режиме обслуживания',
            'info' => 'Для блокировки страниц, начинающихся с одного пути, можно использовать <code>/*</code>. К примеру, <code>/news/*</code> заблокирует доступ ко всем новостям.',
        ],

        'updated' => 'Настройки были обновлены.',
    ],

    'navbar_elements' => [
        'title' => 'Панель навигации',
        'edit' => 'Редактировать элемент :element панели навигации',
        'create' => 'Создать элемент панели навигации',

        'restrict' => 'Ограничить роли, которые смогут увидеть этот элемент',
        'dropdown' => 'После сохранения этого выпадающего списка элементы могут быть добавлены через перетаскивание на главной странице панели навигации.',

        'fields' => [
            'home' => 'Главная',
            'link' => 'Внешняя ссылка',
            'page' => 'Страница',
            'post' => 'Пост',
            'posts' => 'Список постов',
            'plugin' => 'Плагин',
            'dropdown' => 'Выпадающий список',
            'new_tab' => 'Открыть в новой вкладке',
        ],

        'updated' => 'Панель навигации обновлена.',
        'not_empty' => 'Вы не можете удалить выпадающее меню с элементами.',
    ],

    'social_links' => [
        'title' => 'Соц. сети',
        'edit' => 'Редактировать соц. сеть :link',
        'create' => 'Добавить соц. сеть',
    ],

    'servers' => [
        'title' => 'Серверы',
        'edit' => 'Редактировать сервер :server',
        'create' => 'Добавить сервер',

        'default' => 'Сервер по умолчанию',
        'default_info' => 'Количество подключенных к серверу по умолчанию игроков будет отображаться на сайте, если текущая тема поддерживает их показ.',

        'home_display' => 'Отображать сервер на главной странице',
        'url' => 'Ссылка для кнопки "Присоединиться"',
        'url_info' => 'Ссылка для загрузки игры/лаунчера или ссылка для подключения вида <code>steam://connect/&lt;ip&gt;</code>. Для отображения адреса сервера, оставьте это поле пустым.',

        'ping_info' => 'Для способа ping не требуется плагин, но с ним нельзя выполнять команды.',
        'query_info' => 'Способ query не позволяет выполнять команды на сервере.',

        'query_port_info' => 'Может быть пустым, если порт стандартный для игры.',

        'verify' => 'Проверка мгновенных команд',

        'rcon_password' => 'Пароль Rcon',
        'rcon_port' => 'Порт Rcon',
        'query_port' => 'Порт исходного запроса (Source Query Port)',
        'unturned_info' => 'Вам нужно использовать SRCDS RCON в OpenMod. RocketMod RCON не поддерживается!',

        'azlink' => [
            'port' => 'Порт AzLink',

            'link' => 'Чтобы связать Minecraft с вашим сайтом, используйте AzLink:',
            'link1' => '<a href="https://azuriom.com/azlink">Загрузите плагин AzLink</a> и установите его на свой сервер.',
            'link2' => 'Перезагрузите сервер.',
            'link3' => 'Выполните эту команду на сервере: ',
            'auth' => 'Чтобы автоматически регистрировать пользователей на сайте, вы можете включить интеграцию вашей системы аутентификации (AuthMe и т. д.) в конфигурации AzLink.',

            'info' => 'Если у вас проблемы с AzLink при использовании Cloudflare или брандмауэра, попробуйте следовать шагам из этой инструкции <a href="https://azuriom.com/docs/faq" target="_blank" rel="noopener norefferer">FAQ</a>.',
            'command' => 'Связать сайт с сервером Minecraft можно данной командой: ',
            'port_command' => 'Если вы используете нестандартный порт AzLink, его нужно настроить этой командой: ',
            'ping' => 'Включить мгновенные команды (требуется открытый порт на сервере)',
            'ping_info' => 'Если мгновенные команды не включены, команды будут выполняться с задержкой от 30 секунд до минуты.',
            'custom_port' => 'Использовать пользовательский порт AzLink',

            'error' => 'Подключение к серверу не удалось, адрес и/или порт неверны, либо порт закрыт.',
            'badresponse' => 'Подключение к серверу не удалось (код :code), токен недействителен или сервер неправильно настроен. Для исправления ошибки можно повторить команду link.',
        ],

        'players' => ':count игрок|:count игроков',
        'offline' => 'Не в сети',

        'connected' => 'Подключение к серверу успешно установлено!',
        'error' => 'Подключение к серверу не удалось: :error',

        'type' => [
            'mc-ping' => 'Пинг Майнкрафт',
            'mc-rcon' => 'Майнкрафт RCON',
            'mc-azlink' => 'AzLink',
            'source-query' => 'Исходный запрос (Source Query)',
            'source-rcon' => 'Исходный RCON (Source RCON)',
            'steam-azlink' => 'AzLink',
            'bedrock-ping' => 'Бедрок Пинг',
            'bedrock-rcon' => 'Бедрок RCON',
            'fivem-status' => 'FiveM статус',
            'fivem-rcon' => 'FiveM RCON',
            'rust-rcon' => 'Rust RCON',
            'flyff-server' => 'Flyff сервер', // TODO make this dynamic
        ],
    ],

    'users' => [
        'title' => 'Пользователи',
        'edit' => 'Редактировать пользователя :user',
        'create' => 'Создать пользователя',

        'registered' => 'Зарегистрирован',
        'last_login' => 'Последний раз входил',
        'ip' => 'IP-адрес',

        'admin' => 'Админ',
        'banned' => 'Забанен',
        'deleted' => 'Удалён',

        'ban' => 'Забанить',
        'unban' => 'Разбанить',
        'delete' => 'Удалить',

        'alert-deleted' => 'Этот пользователь удалён, его нельзя редактировать.',
        'alert-banned' => [
            'title' => 'Этот пользователь забанен:',
            'banned-by' => 'Забанил: :author',
            'reason' => 'Причина: :reason',
            'date' => 'Дата: :date',
        ],

        'edit_profile' => 'Редактировать профиль',

        'info' => 'Информация о пользователе',

        'ban-title' => 'Забанить :user',
        'ban-description' => 'Вы уверены, что хотите забанить этого пользователя?',

        'email' => [
            'verify' => 'Подтвердить email',
            'verified' => 'Email-адрес подтверждён',
            'date' => 'Да, в :date',
            'verify_success' => 'Email-адрес был подтверждён.',
        ],

        '2fa' => [
            'title' => 'Двухфакторная аутентификация',
            'secured' => '2FA включен',
            'disable' => 'Отключить 2FA',
            'disabled' => 'Двухфакторная аутентификация была отключена.',
        ],

        'password' => [
            'title' => 'Последняя смена пароля',
            'force' => 'Принудительное изменение',
            'forced' => 'Необходимо изменить пароль',
        ],

        'status' => [
            'banned' => 'Пользователь теперь забанен.',
            'unbanned' => 'Этот пользователь был разбанен.',
        ],

        'discord' => 'Привязанный аккаунт Discord',

        'notify' => 'Отправить уведомление',
        'notify_info' => 'Отправить уведомление пользователю',
        'notify_all' => 'Отправить уведомления всем пользователям',
    ],

    'roles' => [
        'title' => 'Роли',
        'edit' => 'Изменить роль :role (#:id)',
        'create' => 'Создать роль',

        'info' => '(ID: :id, Сила: :power)',

        'default' => 'По умолчанию',
        'admin' => 'Админ',
        'admin_info' => 'У группы Администратор есть все права.',

        'updated' => 'Роли были обновлены.',
        'unauthorized' => 'Эта роль выше вашей роли.',
        'add_admin' => 'Вы не можете давать права администратора.',
        'remove_admin' => 'Вы не можете убрать право администратора с вашей роли.',
        'no_admin' => 'Для удаления вашей роли администратора должен быть хотя бы один другой администратор.',
        'delete_default' => 'Эту роль нельзя удалить.',
        'delete_own' => 'Вы не можете удалить свою роль.',

        'discord' => [
            'title' => 'Привязать роли Discord',
            'enable' => 'Включить привязку ролей Discord',
            'enable_info' => 'После включения отредактируйте роль в Discord, и добавьте требование на вкладке <b>Ссылки</b>. Пользователи могут получить свою роль Discord в меню сервера, в пункте <b>Связанные роли</b>.',
            'info' => 'Вам необходимо создать приложение на <a href="https://discord.com/developers/applications" target="_blank">Discord Developer Dashboard</a> и установить <b>Linked Role Verification URL</b> на <code>:url</code>',
            'oauth' => 'Затем на вкладке <b>OAuth2</b> в разделе <b>General</b> вам нужно добавить <code>:url</code> в разделе <b>Redirects</b>.',
            'token_info' => 'Токен бота можно получить, создав бота для вашего приложения, на вкладке <b>Bot</b> слева от панели разработчика Discord.',

            'token' => 'Токен Discord бота',
            'client_id' => 'ID клиента Discord',
            'client_secret' => 'Секрет клиента Discord',
        ],
    ],

    'permissions' => [
        'create-comments' => 'Прокомментировать пост',
        'delete-other-comments' => 'Удалить комментарий от другого пользователя',
        'maintenance-access' => 'Доступ к веб-сайту во время техобслуживания',
        'admin-access' => 'Доступ к панели администратора',
        'admin-logs' => 'Просмотр и управление логами сайта',
        'admin-images' => 'Просмотр и управление изображениями',
        'admin-navbar' => 'Просмотр и управление панели навигации',
        'admin-pages' => 'Просмотр и управление страницами',
        'admin-redirects' => 'Просмотр и управление перенаправлениями',
        'admin-posts' => 'Просмотр и управление постами',
        'admin-settings' => 'Просмотр и управление настройками',
        'admin-users' => 'Просмотр и управление пользователями',
        'admin-themes' => 'Просмотр и управление темами',
        'admin-plugins' => 'Просмотр и управление плагинами',
    ],

    'bans' => [
        'title' => 'Баны',

        'by' => 'Заблокировал',
        'reason' => 'Причина',
        'removed' => 'Удалён :date :user',
    ],

    'posts' => [
        'title' => 'Посты',
        'edit' => 'Редактировать пост :post',
        'create' => 'Создать пост',

        'published_info' => 'Этот пост не будет опубликован до этой даты.',
        'pin' => 'Закрепить этот пост',
        'pinned' => 'Закреплённые',
        'feed' => 'Канал RSS или Atom для публикаций доступны на <code>:rss</code> и <code>:atom</code>.',
    ],

    'pages' => [
        'title' => 'Страницы',
        'edit' => 'Редактировать страницу #:page',
        'create' => 'Создать страницу',

        'enable' => 'Включить страницу',
        'restrict' => 'Ограничить роли, которые смогут увидеть эту страницу',
    ],

    'redirects' => [
        'title' => 'Перенаправления',
        'edit' => 'Редактирование перенаправления :redirect',
        'create' => 'Создание перенаправления',

        'enable' => 'Включить перенаправление',
        'source' => 'Источник',
        'destination' => 'Назначение',
        'code' => 'Код',

        '301' => '301 - Постоянное перенаправление',
        '302' => '302 - Временное перенаправление',
    ],

    'images' => [
        'title' => 'Изображения',
        'edit' => 'Редактировать изображение :image',
        'create' => 'Загрузить изображение',
        'help' => 'Если изображения не загружаются, попробуйте выполнить шаги в <a href="https://azuriom.com/docs/faq" target="_blank" rel="noopener norefferer">FAQ</a>.',
    ],

    'extensions' => [
        'buy' => 'Купить за :price',
        'market' => 'Информация обо всех расширениях доступна на сайте <a href=":url" target="_blank" rel="noopener noreferrer">Azuriom Market</a>.',
    ],

    'plugins' => [
        'title' => 'Плагины',

        'list' => 'Установленные плагины',
        'available' => 'Доступные плагины',

        'requirements' => [
            'api' => 'Эта версия плагина несовместима с Azuriom v:version.',
            'azuriom' => 'Этот плагин несовместим с вашей версией Azuriom.',
            'game' => 'Этот плагин несовместим с игрой :game.',
            'plugin' => 'Плагин ":plugin" отсутствует или его версия несовместима с данным плагином.',
        ],

        'reloaded' => 'Плагины перезагружены.',
        'enabled' => 'Плагин включён.',
        'disabled' => 'Плагин отключён.',
        'updated' => 'Плагин обновлён.',
        'installed' => 'Плагин установлен.',
        'deleted' => 'Плагин удалён.',
        'delete_enabled' => 'Перед удалением плагин необходимо отключить.',
    ],

    'themes' => [
        'title' => 'Темы',

        'current' => 'Текущая тема',
        'author' => 'Автор: :author',
        'version' => 'Версия: :version',
        'list' => 'Установленные темы',
        'available' => 'Доступные темы',
        'no-enabled' => 'У вас нет включенной темы.',
        'legacy' => 'Эта версия темы несовместима с Azuriom v:version.',

        'config' => 'Редактировать конфигурацию',
        'disable' => 'Отключить тему',

        'reloaded' => 'Темы были перезагружены.',
        'no_config' => 'Эту тему нельзя конфигурировать.',
        'config_updated' => 'Конфигурация темы была обновлена.',
        'invalid' => 'Эта тема недействительна (название папки с темой должно быть ID темы).',
        'updated' => 'Тема обновлена.',
        'installed' => 'Тема установлена.',
        'deleted' => 'Тема удалена.',
        'delete_current' => 'Текущую тему нельзя удалить.',
    ],

    'update' => [
        'title' => 'Обновление',

        'has_update' => 'Доступно обновление',
        'no_update' => 'Обновлений нет',
        'check' => 'Проверить обновления',

        'update' => 'Доступна <code>:last-version</code> версия Azuriom, а у вас <code>:version</code> версия.',
        'changelog' => 'Список изменений доступен <a href=":url" target="_blank" rel="noopener noreferrer">здесь</a>.',
        'download' => 'Последняя версия Azuriom готова к загрузке.',
        'install' => 'Последняя версия Azuriom была загружена и готова к установке.',

        'backup' => 'Перед обновлением Azuriom обязательно сделайте резервную копию!',

        'latest_version' => 'Вы используете последнюю версию Azuriom: <code>:version</code>.',
        'latest' => 'Вы используете последнюю версию Azuriom.',

        'downloaded' => 'Последняя версия была загружена, теперь её можно установить.',
        'installed' => 'Обновление было успешно установлено.',

        'php' => 'Вы должны использовать PHP :version или выше, чтобы обновиться до этой версии Azuriom.',
    ],

    'logs' => [
        'title' => 'Логи',

        'clear' => 'Очистить старые логи (15+ дней)',
        'cleared' => 'Старые логи были удалены.',
        'changes' => 'Изменения',
        'old' => 'Старое значение',
        'new' => 'Новое значение',

        'pages' => [
            'created' => 'Создана страница #:id',
            'updated' => 'Обновлена страница #:id',
            'deleted' => 'Удалена страница #:id',
        ],

        'posts' => [
            'created' => 'Создан пост #:id',
            'updated' => 'Обновлён пост #:id',
            'deleted' => 'Удалён пост #:id',
        ],

        'images' => [
            'created' => 'Создано изображение #:id',
            'updated' => 'Обновлено изображение #:id',
            'deleted' => 'Удалено изображение #:id',
        ],

        'redirects' => [
            'created' => 'Создано перенаправление #:id',
            'updated' => 'Обновлено перенаправление #:id',
            'deleted' => 'Удалено перенаправление #:id',
        ],

        'roles' => [
            'created' => 'Создана роль #:id',
            'updated' => 'Обновлена роль #:id',
            'deleted' => 'Удалена роль #:id',
        ],

        'servers' => [
            'created' => 'Создан сервер #:id',
            'updated' => 'Обновлён сервер #:id',
            'deleted' => 'Удалён сервер #:id',
        ],

        'users' => [
            'updated' => 'Обновлён пользователь #:id',
            'deleted' => 'Удалён пользователь #:id',
            'transfer' => 'Отправлено :money денег пользователю #:id',

            'login' => 'Успешный вход с :ip (2FA: :2fa)',
            '2fa' => [
                'enabled' => 'Включена двухфакторная аутентификация',
                'disabled' => 'Отключена двухфакторная аутентификация',
            ],
        ],

        'settings' => [
            'updated' => 'Обновлены настройки',
        ],

        'updates' => [
            'installed' => 'Установлено обновление Azuriom',
        ],

        'plugins' => [
            'enabled' => 'Включен плагин',
            'disabled' => 'Отключен плагин',
        ],

        'themes' => [
            'changed' => 'Изменена тема',
            'configured' => 'Настройки темы сохранены',
        ],
    ],

    'errors' => [
        'back' => 'Вернуться к панели',
        '404' => 'Страница не найдена',
        'info' => 'Похоже, вы нашли ошибку в матрице...',
        '2fa' => 'Для доступа к этой странице необходимо включить двухфакторную аутентификацию.',
    ],
];
