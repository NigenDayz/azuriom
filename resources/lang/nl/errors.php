<?php

return [
    'error' => 'Foutmelding',
    'code' => 'Foutmelding :code',
    'home' => 'Terug naar home',
    'whoops' => 'Whoops !',

    '401' => [
        'title' => 'Onbevoegd',
        'message' => 'Je hebt geen bevoegdheid om deze pagina te bezoeken.',
    ],
    '403' => [
        'title' => 'Verboden',
        'message' => 'U heeft geen toegang tot deze pagina.',
    ],
    '404' => [
        'title' => 'Niet gevonden',
        'message' => 'De pagina die u zoekt, is niet gevonden.',
    ],
    '419' => [
        'title' => 'Pagina verlopen',
        'message' => 'Uw sessie is verlopen. Vernieuw en probeer opnieuw.',
    ],
    '429' => [
        'title' => 'Te veel verzoeken',
        'message' => 'U doet te veel verzoeken aan onze servers. Probeer het later opnieuw.',
    ],
    '500' => [
        'title' => 'Serverfout',
        'message' => 'Oeps, er is iets misgegaan op onze servers. Probeer het later opnieuw.',
    ],
    '503' => [
        'title' => 'Service niet beschikbaar',
        'message' => 'We zijn bezig met onderhoud. Probeer het later nog eens.',
    ],

    'fallback' => [
        'message' => 'Er is een fout opgetreden. Probeer het opnieuw.',
    ],
];
