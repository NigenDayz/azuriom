<?php

return [
    'nav' => [
        'title' => 'Stem',
        'settings' => 'Instellingen',
        'sites' => 'Sites',
        'rewards' => 'Beloningen',
        'votes' => 'Stemmen',
    ],

    'permission' => 'Beheer stemplugin',

    'settings' => [
        'title' => 'Stem pagina-instellingen',

        'count' => 'Top Spelers Aantal',
        'display-rewards' => 'Toon beloningen op de stempagina',
        'ip_compatibility' => 'IPv4/IPv6 compatibiliteit inschakelen',
        'ip_compatibility_info' => 'Deze optie stelt u in staat om stemmen te corrigeren die niet zijn geverifieerd op websites die geen IPv6 accepteren, terwijl uw site dat wel doet of omgekeerd.',
        'commands' => 'Globale opdrachten',
    ],

    'sites' => [
        'title' => 'Sites',
        'edit' => 'Bewerk site :site',
        'create' => 'Site maken',

        'enable' => 'Schakel de site in',
        'delay' => 'Vertraging tussen stemmen',
        'minutes' => 'minuten',

        'list' => 'Sites waarop stemmen kunnen worden geverifieerd',
        'variable' => 'Je kunt <code>{player}</code> gebruiken om de spelernaam te gebruiken.',

        'verifications' => [
            'title' => 'Verificatie',
            'enable' => 'Stemverificatie inschakelen',

            'disabled' => 'De stemmen op deze website worden niet geverifieerd.',
            'auto' => 'De stemmen op deze website worden automatisch geverifieerd.',
            'input' => 'De stemmen op deze website zullen worden geverifieerd wanneer de onderstaande invoer is gevuld.',

            'pingback' => 'Pingback URL: :url',
            'secret' => 'Geheime sleutel',
            'server_id' => 'Server-ID',
            'token' => 'Token',
            'api_key' => 'API sleutel',
        ],
    ],

    'rewards' => [
        'title' => 'Beloningen',
        'edit' => 'Beloning :reward bewerken',
        'create' => 'Beloning aanmaken',

        'require_online' => 'Opdrachten uitvoeren wanneer de gebruiker online is op de server (alleen beschikbaar met AzLink)',
        'enable' => 'De beloning inschakelen',

        'commands' => 'U kunt <code>{player}</code> gebruiken om de naam van de speler te gebruiken. <code>{reward}</code> voor de naam van de beloning en <code>{site}</code> voor de naam van de website waarop is gestemd. Voor Steam spellen, kan je ook <code>{steam_id}</code> en <code>{steam_id_32}</code>gebruiken. Het commando mag niet beginnen met <code>/</code>.',
        'monthly' => 'Keuze rangschikking van gebruikers om deze beloning te geven aan het einde van de maand',
        'monthly_info' => 'Geef deze beloning aan het eind van de maand automatisch aan de gebruikers op de aangegeven posities in de beste stemmers ranklijst.',
        'cron' => 'U moet CRON taken instellen om automatische beloningen aan het einde van de maand te gebruiken.',
    ],

    'votes' => [
        'title' => 'Stemmen',

        'empty' => 'Geen stemmen deze maand.',
        'votes' => 'Aantal stemmen',
        'month' => 'Aantal stemmen deze maand',
        'week' => 'Aantal stemmen deze week',
        'day' => 'Aantal stemmen vandaag',
    ],

    'logs' => [
        'vote-sites' => [
            'created' => 'Stem website aangemaakt #:id',
            'updated' => 'Stem website geüpdatet #:id',
            'deleted' => 'Stem website verwijderd #:id',
        ],

        'vote-rewards' => [
            'created' => 'Stembeloning #:id aangemaakt',
            'updated' => 'Stembeloning geüpdatet #:id',
            'deleted' => 'Stembeloning #:id verwijderd',
        ],
    ],
];
