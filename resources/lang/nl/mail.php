<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Mail Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the mail library to build
    | the mails layout.
    |
    */

    'hello' => 'Hallo!',
    'whoops' => 'Whoops!',

    'regards' => 'Vriendelijke groeten,',

    'link' => "Indien u problemen ondervindt bij het klikken op het \":actionText\" knop, kopieer en plak de onderstaande URL in uw webbrowser: [:displayableActionUrl](:actionURL)",

    'copyright' => '&copy; :year :name. Alle rechten voorbehouden.',

    'test' => [
        'subject' => 'Test mail op :name',
        'content' => 'Als je deze e-mail kunt zien, betekent dit dat het verzenden van e-mails van :name werkt!',
    ],

    'delete' => [
        'subject' => 'Aanvraag voor verwijderen account',
        'line1' => 'U ontvangt deze e-mail omdat we een verzoek tot verwijdering voor uw account hebben ontvangen.',
        'action' => 'Verwijder mijn account',
        'line2' => 'Deze actie kan niet ongedaan worden gemaakt. Dit zal uw account en de bijbehorende gegevens permanent verwijderen. Deze link vervalt over :count minuten.',
        'line3' => 'Indien u geen verzoek heeft gedaan om uw account te verwijderen, zorg er dan voor dat u uw beveiligingsinstellingen nakijkt.',
    ],
];
