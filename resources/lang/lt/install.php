<?php

return [
    'title' => 'Įdiegimas',

    'welcome' => 'Azuriom yra <strong>naujos kartos</strong> žaidimų TVS, ji yra <strong>nemokama</strong> ir <strong>atviro kodo</strong>, ir yra <strong>moderni, patikima, greita ir saugi</strong> alternatyva esamoms TVS, kad galėtumėte turėti <strong>geriausią įmanomą interneto patirtį</strong>.',

    'back' => 'Atgal',

    'requirements' => [
        'php' => 'PHP :version arba naujesnė versija',
        'writable' => 'Rašymo teisės',
        'rewrite' => 'URL perrašymas įjungtas',
        'extension' => 'Plėtinys :extension',
        'function' => 'Funkcija :function įjungta',
        '64bit' => '64-bit PHP',

        'refresh' => 'Atnaujinti reikalavimus',
        'success' => 'Azuriom yra pasirengęs būti konfigūruojamas!',
        'missing' => 'Jūsų serveris neatitinka visų privalomų reikalavimų, jog galėtumėte įdiegti Azuriom.',

        'help' => [
            'writable' => 'Galite pabandyti šią komandą, kad suteiktumėte rašymo leidimą: <code>:command</code>.',
            'rewrite' => 'Galite vadovautis instrukcijomis <a href="https://azuriom.com/docs/installation" target="_blank" rel="noopener noreferrer">mūsų dokumentacijoje</a>, kad įjungtumėte URL perrašymą.',
            'htaccess' => 'Trūksta failo <code>.htaccess</code> arba <code>public/.htaccess</code>. Įsitikinkite, kad įjungėte paslėptus failus ir kad failas yra.',
            'extension' => 'Galite pabandyti šią komandą, kad įdiegtumėte trūkstamus PHP plėtinius: <code>:command</code>.<br>Baigę, paleiskite iš naujo Apache arba Nginx.',
            'function' => 'Turite įjungti šią funkciją PHP php.ini faile, redaguodami <code>disable_functions</code> reikšmę.',
        ],
    ],

    'database' => [
        'title' => 'Duomenų bazė',

        'type' => 'Tipas',
        'host' => 'Hostas',
        'port' => 'Prievadas',
        'database' => 'Duomenų bazė',
        'user' => 'Vartotojas',
        'password' => 'Slaptažodis',

        'warn' => 'Šis duomenų bazės tipas nerekomenduojamas ir turėtų būti naudojamas tik tada, kai nėra kitos galimybės.',
    ],

    'game' => [
        'title' => 'Žaidimas',

        'locale' => 'Kalba',

        'warn' => 'Būkite atsargūs, kai diegimas bus baigtas, nebus įmanoma pakeisti žaidimo ar prisijungimo metodo be visiško Azuriom perinstaliavimo!',

        'install' => 'Įdiegti',

        'user' => [
            'title' => 'Administratoriaus paskyra',

            'name' => 'Vardas',
            'email' => 'El. pašto adresas',
            'password' => 'Slaptažodis',
            'password_confirm' => 'Patvirtinkite slaptažodį',
        ],

        'minecraft' => [
            'premium' => 'Prisijungti su Microsoft paskyra (saugiausia, bet reikalauja įsigyto Minecraft)',
        ],

        'steam' => [
            'profile' => 'Steam Profilio URL',
            'profile_info' => 'Šis Steam vartotojas bus administratorius svetainėje.',

            'key' => 'Steam API Raktas',
            'key_info' => 'Savo Steam API raktą galite rasti <a href="https://steamcommunity.com/dev/apikey" target="_blank" rel="noopener noreferrer">Steam</a>.',
        ],

        'epic' => [
            'id' => 'Jūsų paskyros Epic ID',
            'id_info' => 'Šis vartotojas bus administratorius svetainėje. Savo Epic ID galite rasti savo <a href="https://www.epicgames.com/account/personal" target="_blank" rel="noopener noreferrer">Epic Games paskyroje</a>.',

            'client_id' => 'Epic Games kliento ID',
            'client_secret' => 'Epic Games Kliento Paslaptis',

            'steps' => 'Norėdami gauti kliento ID ir kliento slaptąjį raktą, atlikite šiuos veiksmus:',
            'step_1' => 'Eikite į <a href="https://dev.epicgames.com/portal/" target="_blank" rel="noopener noreferrer">Epic Games kūrėjų portalą</a> ir sukurkite naują produktą.',
            'step_2' => 'Produkto nustatymuose, skiltyje "Clients", sukurkite naują klientą su "GameClient" politikos tipu ir šiuo peradresavimo URL: <code>:redirect</code>',
            'step_3' => 'Kliento ID ir kliento slaptąjį raktą galite rasti kliento nustatymuose (Redaguoti dešinėje kliento pusėje).',
        ],
    ],

    'success' => [
        'thanks' => 'Ačiū, kad pasirinkote Azuriom!',
        'success' => 'Jūsų svetainė sėkmingai įdiegta, dabar galite naudotis savo svetaine ir sukurti kažką nuostabaus!',
        'go' => 'Pradėti',
        'support' => 'Jei vertinate Azuriom ir mūsų teikiamą darbą, nepamirškite <a href="https://azuriom.com/support-us" target="_blank" rel="noopener noreferrer">palaikyti mus</a>.',
    ],
];
