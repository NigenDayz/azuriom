<?php

return [
    'nav' => [
        'title' => 'Głosowanie',
        'settings' => 'Ustawienia',
        'sites' => 'Strony internetowe',
        'rewards' => 'Nagrody',
        'votes' => 'Głosy',
    ],

    'permission' => 'Zarządzaj wtyczką do głosowania',

    'settings' => [
        'title' => 'Ustawienia strony głosowania',

        'count' => 'Liczba najlepszych graczy',
        'display-rewards' => 'Pokaż nagrody na stronie głosowania',
        'ip_compatibility' => 'Włącz kompatybilność IPv4/IPv6',
        'ip_compatibility_info' => 'Ta opcja pozwala na poprawienie głosów, które nie są weryfikowane na stronach głosowania, które nie akceptują IPv6 w czasie trwania witryny lub odwrotnie.',
        'commands' => 'Globalne komendy',
    ],

    'sites' => [
        'title' => 'Strony internetowe',
        'edit' => 'Edytuj witrynę :site',
        'create' => 'Utwórz witrynę',

        'enable' => 'Włączyć stronę',
        'delay' => 'Opóźnienie między głosowaniami',
        'minutes' => 'minuty',

        'list' => 'Witryny, na których można zweryfikować głosy',
        'variable' => 'Możesz użyć <code>{player}</code> , aby użyć nazwy gracza.',

        'verifications' => [
            'title' => 'Weryfikacja',
            'enable' => 'Włącz weryfikację głosów',

            'disabled' => 'Głosy na tej stronie nie będą weryfikowane.',
            'auto' => 'Głosy na tej stronie zostaną automatycznie zweryfikowane.',
            'input' => 'Głosy na tej stronie zostaną zweryfikowane po wypełnieniu poniższego wpisu.',

            'pingback' => 'URL Pingback: :url',
            'secret' => 'Tajny klucz',
            'server_id' => 'Identyfikator serwera',
            'token' => 'Token',
            'api_key' => 'API key',
        ],
    ],

    'rewards' => [
        'title' => 'Nagrody',
        'edit' => 'Edytuj nagrodę :reward',
        'create' => 'Utwórz nagrodę',

        'require_online' => 'Wykonaj polecenia, gdy użytkownik jest online na serwerze (dostępne tylko dla AzLink)',
        'enable' => 'Włączyć nagrodę',

        'commands' => 'Możesz wpisać <code>{player}</code> aby użyć nazwy gracza, <code>{reward}</code> za nazwę nagrody i <code>{site}</code> za stronę internetową do głosowania. Dla gier Steam możesz również użyć <code>{steam_id}</code> i <code>{steam_id_32}</code>. Polecenie nie może zaczynać się od <code>/</code>.',
        'monthly' => 'Ranking użytkowników, którym można przyznać tę nagrodę na koniec miesiąca',
        'monthly_info' => 'Automatycznie przyznaj tę nagrodę na koniec miesiąca użytkownikom na danych pozycjach w rankingu najlepszych głosujących.',
        'cron' => 'Musisz skonfigurować zadania CRON, aby używać automatycznych nagród pod koniec miesiąca.',
    ],

    'votes' => [
        'title' => 'Głosy',

        'empty' => 'Brak głosów w tym miesiącu.',
        'votes' => 'Liczba głosów',
        'month' => 'Licznik głosów w tym miesiącu',
        'week' => 'Licznik głosów w tym tygodniu',
        'day' => 'Licznik głosów dzisiaj',
    ],

    'logs' => [
        'vote-sites' => [
            'created' => 'Utworzono stronę głosowań #:id',
            'updated' => 'Zaktualizowano stronę głosowania #:id',
            'deleted' => 'Usunięto witrynę głosowań #:id',
        ],

        'vote-rewards' => [
            'created' => 'Utworzono nagrodę za głos #:id',
            'updated' => 'Zaktualizowano nagrodę za głos #:id',
            'deleted' => 'Nagroda za głos usunięta #:id',
        ],
    ],
];
