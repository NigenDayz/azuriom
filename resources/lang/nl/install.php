<?php

return [
    'title' => 'Installatie',

    'welcome' => 'Azuriom is een <strong>volgende generatie</strong> game CMS, het is <strong>gratis</strong>, <strong>open-source</strong>, <strong>modern, betrouwbaar, snel en veilig</strong> alternatief voor een bestaande CMS zodat u de <strong>beste webervaring mogelijk kunt hebben</strong>.',

    'back' => 'Terug',

    'requirements' => [
        'php' => 'PHP :version of hoger',
        'writable' => 'Schrijf permissie',
        'rewrite' => 'URL herschrijven ingeschakeld',
        'extension' => 'Extensie :extension',
        'function' => 'Functie :functie ingeschakeld',
        '64bit' => '64-bit PHP',

        'refresh' => 'Ververs vereisten',
        'success' => 'Azuriom is klaar voor configuratie!',
        'missing' => 'Uw server heeft niet de benodigde vereisten om Azuriom te installeren.',

        'help' => [
            'writable' => 'Je kunt dit commando proberen om schrijftoestemming te geven op: <code>:command</code>.',
            'rewrite' => 'Je kunt de instructies volgen op <a href="https://azuriom.com/docs/installation" target="_blank" rel="noopener noreferrer">onze documentatie</a> om URL herschrijven in te schakelen.',
            'htaccess' => 'Het bestand <code>.htaccess</code> of <code>public/.htaccess</code> ontbreekt. Zorg ervoor dat verborgen bestanden ingeschakeld zijn en dat het bestand aanwezig is.',
            'extension' => 'Je kunt dit commando proberen om de ontbrekende PHP-extensies te installeren: <code>:command</code>.<br>Eenmaal voltooid, herstart Apache of Nginx.',
            'function' => 'U moet deze functie inschakelen in het php.ini bestand door de waarde van <code>disable_functions</code> te bewerken.',
        ],
    ],

    'database' => [
        'title' => 'Database',

        'type' => 'Type',
        'host' => 'Hostnaam',
        'port' => 'Poort',
        'database' => 'Database',
        'user' => 'Gebruiker',
        'password' => 'Wachtwoord',

        'warn' => 'Deze database wordt niet aanbevolen en zal alleen moeten worden gebruikt indien niets anders mogelijk is.',
    ],

    'game' => [
        'title' => 'Spel',

        'locale' => 'Taal',

        'warn' => 'Be careful, once the installation is finished it will not be possible to change the game or login method without reinstalling Azuriom entirely!',

        'install' => 'Installeren',

        'user' => [
            'title' => 'Beheerdersaccount',

            'name' => 'Naam',
            'email' => 'E-mailadres',
            'password' => 'Wachtwoord',
            'password_confirm' => 'Bevestig wachtwoord',
        ],

        'minecraft' => [
            'premium' => 'Log in met Microsoft-account (veiligst, maar moet Minecraft aangeschaft hebben)',
        ],

        'steam' => [
            'profile' => 'Steam profiel link',
            'profile_info' => 'Deze Steam gebruiker zal admin worden op de site.',

            'key' => 'Steam API Sleutel',
            'key_info' => 'Je kunt je Steam API sleutel vinden op <a href="https://steamcommunity.com/dev/apikey" target="_blank" rel="noopener noreferrer">Steam</a>.',
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
        'thanks' => 'Bedankt voor het kiezen van Azuriom!',
        'success' => 'Uw website is succesvol geïnstalleerd, u kunt nu uw website gebruiken en iets geweldigs maken!',
        'go' => 'Ga aan de slag',
        'support' => 'Als u Azuriom en het werk dat wij doen waardeert, vergeet dan niet om <a href="https://azuriom.com/support-us" target="_blank" rel="noopener noreferrer">ons te steunen</a>.',
    ],
];
