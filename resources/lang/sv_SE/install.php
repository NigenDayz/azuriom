<?php

return [
    'title' => 'Installera',

    'welcome' => 'Azuriom är <strong>nästa generations</strong> spel CMS, det är <strong>gratis</strong> och <strong>öppen källkod</strong>, och är en <strong>modern, tillförlitliga, snabba och säkra</strong> alternativ till befintliga CMS så att du kan ha <strong>bästa webbupplevelse möjligt</strong>.',

    'back' => 'Tillbaka',

    'requirements' => [
        'php' => 'PHP {version} eller högre',
        'writable' => 'Skriva behörighet',
        'rewrite' => 'URL omskrivning aktiverad',
        'extension' => 'Förlängning :extension',
        'function' => 'Funktion :function aktiverad',
        '64bit' => '64-bit PHP',

        'refresh' => 'Uppdatera krav',
        'success' => 'Termostater redo för konfiguration',
        'missing' => 'Din server har inte de nödvändiga kraven för att installera Azuriom.',

        'help' => [
            'writable' => 'Du kan prova detta kommando för att bevilja skrivbehörighet: <code>:command</code>.',
            'rewrite' => 'Du kan följa instruktionerna i <a href="https://azuriom.com/docs/installation" target="_blank" rel="noopener noreferrer">vår dokumentation</a> för att aktivera URL-omskrivning.',
            'htaccess' => 'Filen <code>.htaccess</code> eller <code>public/.htaccess</code> saknas. Kontrollera att du har aktiverat dolda filer och att filen är närvarande.',
            'extension' => 'Du kan prova detta kommando för att installera de saknade PHP-tilläggen: <code>:command</code>.<br>När detta är gjort, starta om Apache eller Nginx.',
            'function' => 'Du måste aktivera denna funktion i php.ini filen PHP genom att redigera värdet <code>disable_functions</code>.',
        ],
    ],

    'database' => [
        'title' => 'Database',

        'type' => 'Typ',
        'host' => 'Värddator',
        'port' => 'Port',
        'database' => 'Database',
        'user' => 'Användare',
        'password' => 'Lösenord',

        'warn' => 'Denna databastyp rekommenderas inte och bör endast användas när det inte är möjligt att göra något annat.',
    ],

    'game' => [
        'title' => 'Spel',

        'locale' => 'Språk',

        'warn' => 'Be careful, once the installation is finished it will not be possible to change the game or login method without reinstalling Azuriom entirely!',

        'install' => 'Installera',

        'user' => [
            'title' => 'Administratörskonto',

            'name' => 'Namn',
            'email' => 'E-postadress',
            'password' => 'Lösenord',
            'password_confirm' => 'Bekräfta lösenord',
        ],

        'minecraft' => [
            'premium' => 'Logga in med Microsoft-konto (säkrast men måste ha köpt Minecraft)',
        ],

        'steam' => [
            'profile' => 'Steam Profile URL',
            'profile_info' => 'Denna Steam-användare kommer att vara admin på webbplatsen.',

            'key' => 'Steam API-nyckel',
            'key_info' => 'Du kan hitta din Steam API-nyckel på <a href="https://steamcommunity.com/dev/apikey" target="_blank" rel="noopener noreferrer">Steam</a>.',
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
        'thanks' => 'Tack för att du väljer Azuriom !',
        'success' => 'Din webbplats har installerats framgångsrikt, du kan nu använda din webbplats och göra något häftigt !',
        'go' => 'Kom igång',
        'support' => 'Om du uppskattar Azuriom och det arbete vi tillhandahåller, glöm inte att <a href="https://azuriom.com/support-us" target="_blank" rel="noopener noreferrer">stödja oss</a>.',
    ],
];
