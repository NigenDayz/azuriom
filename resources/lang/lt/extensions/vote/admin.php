<?php

return [
    'nav' => [
        'title' => 'Balsavimas',
        'settings' => 'Nustatymai',
        'sites' => 'Svetainės',
        'rewards' => 'Apdovanojimai',
        'votes' => 'Balsai',
    ],

    'permission' => 'Redaguoti balsavimo įskiepį',

    'settings' => [
        'title' => 'Balsavimo puslapio nustatymai',

        'count' => 'Top žaidėjų skaičius',
        'display-rewards' => 'Rodyti apdovanojimus balsų puslapyje',
        'ip_compatibility' => 'Įjungti IPv4/IPv6 palaikymą',
        'ip_compatibility_info' => 'Ši parinktis leidžia koreguoti balsus, kurie nėra patvirtinti balsavimo svetainėse, kurios nepriima IPv6, o jūsų svetainė priima, arba atvirkščiai.',
        'commands' => 'Globalios komandos',
    ],

    'sites' => [
        'title' => 'Svetainės',
        'edit' => 'Redaguoti svetainę :site',
        'create' => 'Sukurti svetainę',

        'enable' => 'Įjungti svetainę',
        'delay' => 'Vėlavimas tarp balsų',
        'minutes' => 'minutės',

        'list' => 'Svetainės, kuriose balsai gali būti verifikuoti',
        'variable' => 'Jūs galite naudoti <code>{player}</code>, jog naudoti žaidėjo vardą.',

        'verifications' => [
            'title' => 'Verifikacija',
            'enable' => 'Įjungti balsų verifikacija',

            'disabled' => 'Balsai šioje svetainėje nebus patvirtinti.',
            'auto' => 'Balsai šioje svetainėje bus automatiškai patvirtinti.',
            'input' => 'Balsai šioje svetainėje bus patvirtinti kada bus įrašoma įvestis esanti apačioje.',

            'pingback' => 'Pingback URL: :url',
            'secret' => 'Slaptas raktas',
            'server_id' => 'Serverio ID',
            'token' => 'Prieigos raktas',
            'api_key' => 'API raktas',
        ],
    ],

    'rewards' => [
        'title' => 'Apdovanojimai',
        'edit' => 'Redaguoti atlygį :reward',
        'create' => 'Sukurti atlygį',

        'require_online' => 'Vykdykite komandas, kai vartotojas yra prisijungęs prie serverio (galima tik naudojant AzLink)',
        'enable' => 'Įjungti apdovanojimą',

        'commands' => 'Galite naudoti <code>{player}</code>, kad įterptumėte žaidėjo vardą, <code>{reward}</code>, kad nurodytumėte atlygio pavadinimą, ir <code>{site}</code>, balsavimo svetainės pavadinimui. Steam žaidimams taip pat galite naudoti <code>{steam_id}</code> ir <code>{steam_id_32}</code>. Komanda neturi prasidėti <code>/</code>.',
        'monthly' => 'Vartotojų reitingas, kuriems šis atlygis bus suteiktas mėnesio pabaigoje',
        'monthly_info' => 'Automatiškai suteikite šį atlygį mėnesio pabaigoje vartotojams, esantiems nurodytose pozicijose geriausių balsuotojų reitinge.',
        'cron' => 'Turite nustatyti CRON užduotis, kad galėtumėte naudoti automatinius atlygius mėnesio pabaigoje.',
    ],

    'votes' => [
        'title' => 'Balsai',

        'empty' => 'Jokių balsų šį mėnėsį.',
        'votes' => 'Balsų skaičius',
        'month' => 'Balsų skaičius šį mėnėsį',
        'week' => 'Balsų skaičius šią savaitę',
        'day' => 'Balsų skaičius šiandien',
    ],

    'logs' => [
        'vote-sites' => [
            'created' => 'Sukurta balsavimo svetainė #:id',
            'updated' => 'Atnaujinta balsavimo svetainė #:id',
            'deleted' => 'Pašalinta balsavimo svetainė #:id',
        ],

        'vote-rewards' => [
            'created' => 'Sukurtas balsavimo atlygis #:id',
            'updated' => 'Redaguotas balsavimo atlygis #:id',
            'deleted' => 'Pašalintas balsavimo atlygis #:id',
        ],
    ],
];
