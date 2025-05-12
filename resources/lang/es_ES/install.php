<?php

return [
    'title' => 'Instalación',

    'welcome' => 'Azuriom es la <strong>siguiente generación</strong> CMS de juego, es <strong>gratis</strong> y <strong>de código abierto</strong>y es <strong>moderno, una alternativa confiable, rápida y segura</strong> alternativa que existe, CMS existente para que pueda tener la <strong>mejor experiencia web posible</strong>.',

    'back' => 'Atrás',

    'requirements' => [
        'php' => 'PHP :version o superior',
        'writable' => 'Permiso de escritura',
        'rewrite' => 'Reescritura de URL habilitada',
        'extension' => 'Extensión :extension',
        'function' => 'Función :function habilitada',
        '64bit' => '64-bit PHP',

        'refresh' => 'Actualizar requisitos',
        'success' => '¡Azuriom está listo para ser configurado!',
        'missing' => 'Su servidor no tiene los requisitos necesarios para instalar Azuriom.',

        'help' => [
            'writable' => 'Puedes intentar este comando para conceder permisos de escritura: <code>:command</code>.',
            'rewrite' => 'Puede seguir las instrucciones en <a href="https://azuriom.com/docs/installation" target="_blank" rel="noopener noreferrer">nuestra documentación</a> para habilitar la reescritura de URL.',
            'htaccess' => 'Falta el archivo <code>.htaccess</code> o <code>public/.htaccess</code>. Asegúrate de que has habilitado archivos ocultos y que el archivo está presente.',
            'extension' => 'Puede probar este comando para instalar las extensiones PHP faltantes: <code>:command</code>.<br>Una vez hecho, reinicie Apache o Nginx.',
            'function' => 'Necesitas habilitar esta función en el archivo php.ini de PHP editando el valor de <code>disable_functions</code>.',
        ],
    ],

    'database' => [
        'title' => 'Base de datos',

        'type' => 'Tipo',
        'host' => 'Host',
        'port' => 'Puerto',
        'database' => 'Base de datos',
        'user' => 'Usuario',
        'password' => 'Contraseña',

        'warn' => 'Este tipo de base de datos no es recomendable y sólo debe ser utilizado cuando no es posible hacer lo contrario.',
    ],

    'game' => [
        'title' => 'Juego',

        'locale' => 'Local',

        'warn' => 'Be careful, once the installation is finished it will not be possible to change the game or login method without reinstalling Azuriom entirely!',

        'install' => 'Instalar',

        'user' => [
            'title' => 'Cuenta de administrador',

            'name' => 'Nombre',
            'email' => 'Dirección de E-mail',
            'password' => 'Contraseña',
            'password_confirm' => 'Confirmar contraseña',
        ],

        'minecraft' => [
            'premium' => 'Iniciar sesión con la cuenta de Microsoft (más segura pero requiere haber comprado Minecraft)',
        ],

        'steam' => [
            'profile' => 'URL del perfil de Steam',
            'profile_info' => 'Este usuario de Steam será administrador en el sitio.',

            'key' => 'Clave API de Steam',
            'key_info' => 'Puedes encontrar tu clave API de Steam en <a href="https://steamcommunity.com/dev/apikey" target="_blank" rel="noopener noreferrer">Steam</a>.',
        ],

        'epic' => [
            'id' => 'Epic ID of your account',
            'id_info' => 'This user will be admin on the site. You can find your Epic ID on your <a href="https://www.epicgames.com/account/personal" target="_blank" rel="noopener noreferrer">Epic Games account</a>.',

            'client_id' => 'Epic Games Client ID',
            'client_secret' => 'Epic Games Client Secret',

            'steps' => 'To get the Client ID and Client Secret, follow these steps:',
            'step_1' => 'Go on the <a href="https://dev.epicgames.com/portal/" target="_blank" rel="noopener noreferrer">Epic Games Developer Portal</a> and create a new product.',
            'step_2' => 'In the product settings, in the "Clients" tab, create a new client with the "GameClient" policy type and the following redirect URL: <code>:redirect</code>',
            'step_3' => 'You can find the Client ID and Client Secret in the client settings (Edit on the right of the client).',
        ],
    ],

    'success' => [
        'thanks' => '¡Gracias por elegir Azuriom !',
        'success' => 'Tu sitio web ha sido instalado con éxito, ahora puedes usar tu sitio web y hacer algo increíble!',
        'go' => 'Comenzar',
        'support' => 'Si aprecias Azuriom y el trabajo que proporcionamos, no olvides <a href="https://azuriom.com/support-us" target="_blank" rel="noopener noreferrer">apoyarnos</a>.',
    ],
];
