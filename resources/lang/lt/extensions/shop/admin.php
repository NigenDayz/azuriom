<?php

return [
    'nav' => [
        'title' => 'Parduotuvė',
        'settings' => 'Nustatymai',
        'packages' => 'Paketai',
        'gateways' => 'Mokėjimo būdai',
        'offers' => 'Pasiūlymai',
        'coupons' => 'Kuponai',
        'giftcards' => 'Dovanų kortelės',
        'discounts' => 'Nuolaidos',
        'payments' => 'Mokėjimai',
        'subscriptions' => 'Prenumeratos',
        'variables' => 'Kintamieji',
        'purchases' => 'Pirkimai',
        'statistics' => 'Statistika',
    ],

    'permissions' => [
        'settings' => 'Valdyti parduotuvės nustatymus',
        'packages' => 'Valdyti parduotuvės paketus ir kategorijas',
        'gateways' => 'Valdyti parduotuvės apmokėjimo būdus',
        'promotions' => 'Valdyti parduotuvės kuponus ir nuolaidas',
        'giftcards' => 'Valdyti parduotuvės dovanų korteles',
        'payments' => 'Kurti ir peržiūrėti parduotuvės mokėjimus/pirkimus ir prenumeratas',
    ],

    'categories' => [
        'title' => 'Kategorijos',
        'edit' => 'Redaguoti kategorija :category',
        'create' => 'Sukurti kategorija',

        'parent' => 'Tėvinė kategorija',
        'delete_error' => 'Kategorija su paketais negali būti pašalinta.',

        'cumulate' => 'Kaupti pirkimus šioje kategorijoje',
        'cumulate_info' => 'Vartotojai, kurie jau įsigijo paketą šioje kategorijoje, gaus nuolaidą ir sumokės tik skirtumą, kai įsigis brangesnį paketą.',
        'cumulate_strict' => 'Prevent users from buying a cheaper package than those already purchased in this category',
        'single_purchase' => 'Apriboti vartotoją, kad jis galėtų įsigyti tik vieną paketą iš šios kategorijos',
        'enable' => 'Įjungti kategorija',
    ],

    'offers' => [
        'title' => 'Pasiūlymai',
        'edit' => 'Redaguoti pasiūlymą :offer',
        'create' => 'Sukurti pasiūlymą',

        'enable' => 'Įjungti šį pasiūlymą',
    ],

    'coupons' => [
        'title' => 'Kuponai',
        'edit' => 'Redaguoti kuponą :coupon',
        'create' => 'Sukurti kuponą',

        'global' => 'Ar turėtų kuponas būti aktyvus visoje parduotuvėje?',
        'cumulate' => 'Leisti naudoti šį kuponą kartu su kitais kuponais',
        'user_limit' => 'Vartotojo limitas',
        'global_limit' => 'Globalus limitas',
        'active' => 'Aktyvus',
        'usage' => 'Po naudojimo ribos',
        'enable' => 'Įjungti kuponą',
    ],

    'giftcards' => [
        'title' => 'Dovanų kortelės',
        'edit' => 'Redaguoti dovanų kortelę :giftcard',
        'create' => 'Sukurti dovanų kortelę',

        'global_limit' => 'Globalus limitas',
        'active' => 'Aktyvus',
        'enable' => 'Įjungti dovanų kortelę',
        'link' => 'Nuoroda dalinimuisi',
        'pending' => 'Mokėjimas laukia, balansas gali dar neatsinaujinti.',
    ],

    'discounts' => [
        'title' => 'Nuolaidos',
        'edit' => 'Redaguoti nuolaidą :discount',
        'create' => 'Sukurti nuolaida',

        'global' => 'Ar turėtų nuolaida būti aktyvi visoje parduotuvėje?',
        'active' => 'Aktyvus',
        'enable' => 'Įjungti nuolaida',
        'restricted' => 'Apriboti šią nuolaidą tik tam tikroms rolėms',
    ],

    'packages' => [
        'title' => 'Paketai',
        'edit' => 'Redaguoti paketą :package',
        'create' => 'Sukurti paketą',

        'every' => 'kiekvieną',
        'after' => 'po',

        'updated' => 'Paketai buvo paredaguoti.',

        'variables' => 'Pasirinktiniai kintamieji',
        'files' => 'Downloadable files',
        'role' => 'Rolė, kurią nustatyti, kai paketas pasibaigia',
        'money' => 'Pinigai, kuriuos suteikti vartotojui po pirkimo',
        'has_giftcard' => 'Sukurti dovanų kortelę po pirkimo ir suteikti ją vartotojui',
        'giftcard_balance' => 'Dovanų kortelės balansas',
        'giftcard_fixed' => 'Fiksuota suma',
        'giftcard_dynamic' => 'Paketo kaina',
        'command' => 'Komanda neturi prasidėti su <code>/</code>. Galite naudoti <code>{player}</code>, kad įterptumėte žaidėjo vardą. Steam žaidimams taip pat galite naudoti <code>{steam_id}</code> ir <code>{steam_id_32}</code>. Kiti prieinami žymekliai: :placeholders.',
        'has_user_limit' => 'Pridėti individualų pirkimo limitą kiekvienam vartotojui šiam paketui',
        'has_global_limit' => 'Pridėti globalų pirkimo limitą šiam paketui',
        'limit_period' => 'Limitavimo laikotarpis',
        'limits_no_expired' => 'Išskirti pasibaigusius paketus skaičiuojant pirkimo limitus',
        'no_period' => 'Nėra laikotarpio',
        'custom_price' => 'Leisti vartotojui pasirinkti mokamą kainą (tuomet paketo kaina bus minimali)',
        'enable_quantity' => 'Įjungti kiekį',

        'billing' => 'Atsiskaitymo būdas',
        'billing_period' => 'Apmokėjimo laikotarpis',
        'one_off' => 'Vieno karto mokestis',
        'subscription' => 'Prenumerata su automatišku atnaujinimu',
        'subscription_info' => 'Įsitikinkite, kad jūsų apmokėjimo būdas palaiko prenumeratas. Kai prenumerata bus sukurta, vartotojui bus taikoma ta pati kaina, kol prenumerata bus atšaukta (bet kokia nuolaida, taikyta pirmo mokėjimo metu, bus taikoma ir kitiems mokėjimams).',
        'expiring' => 'Vienkartinis mokėjimas su galiojimo laiku',
        'expiring_info' => 'Produktas bus automatiškai pašalintas po nurodyto laikotarpio.',
        'scheduler' => 'Turite nustatyti CRON užduotis, kad galėtumėte naudoti prenumeratas, daugiau informacijos rasite <a href="https://azuriom.com/docs/faq" target="_blank" rel="noopener norefferer">DUK</a>.',

        'create_category' => 'Sukurti kategorija',
        'create_package' => 'Sukurti paketą',

        'enable' => 'Įjungti šį paketą',
    ],

    'commands' => [
        'online' => 'Palaukite kol žaidėjas bus prisijungęs, prieš vykdant komandą (reikalauja AzLink)',
        'offline' => 'Vykdyti komandą tiesiogiai, nepriklausomai nuo to, ar žaidėjas prisijungęs, ar ne',
        'servers' => 'Turite pridėti bent vieną serverį, kad galėtumėte sukurti komandą.',

        'trigger' => 'Komandos paleidiklis',
        'command' => 'Komanda',
        'condition' => 'Komandos vykdymo sąlyga',

        'triggers' => [
            'purchase' => 'Pradinis pirkimas',
            'expiration' => 'Po galiojimo pabaigos',
            'refund' => 'Mokėjimas grąžintas',
            'chargeback' => 'Mokėjimo atšaukimas',
            'renewal' => 'Prenumeratos Atnaujinimas',
        ],
    ],

    'gateways' => [
        'title' => 'Mokėjimo būdai',
        'edit' => 'Redaguoti mokėjimo būdą :gateway',
        'create' => 'Pridėti mokėjimo būdą',

        'current' => 'Dabartiniai mokėjimo būdai',
        'add' => 'Pridėti naują mokėjimo būdą',
        'info' => 'Jei turite problemų su mokėjimais naudodami Cloudflare ar užkardą, pabandykite atlikti veiksmus, nurodytus <a href="https://azuriom.com/docs/faq" target="_blank" rel="noopener norefferer">DUK</a>.',

        'country' => 'Šalis',
        'sandbox' => 'Smėlio dėžė',
        'api-key' => 'API raktas',
        'token' => 'Access Token',
        'public-key' => 'Viešasis raktas',
        'private-key' => 'Privatus raktas',
        'secret-key' => 'Slaptas raktas',
        'endpoint-secret' => 'Pasirašymo slaptas kodas',
        'service-id' => 'Paslaugos ID',
        'client-id' => 'Kliento ID',
        'merchant-id' => 'Prekybininko ID',
        'project-id' => 'Projekto ID',
        'webhook_id' => 'Webhook ID',
        'website_id' => 'Svetainės ID',
        'env' => 'Aplinka',

        'subscription' => 'Ši mokėjimo sistema palaiko automatinį prenumeratos atnaujinimą.',
        'no_subscription' => 'Ši mokėjimo sistema nepalaiko automatinio prenumeratos atnaujinimo.',

        'paypal_email' => 'PayPal el. pašto adresas',
        'paypal_info' => 'Įsitikinkite, kad įvedėte <strong>pagrindinį</strong> PayPal paskyros el. pašto adresą.',
        'paypal_checkout' => 'PayPal skydelyje, jūsų API programoje, sukurkite webhook su URL <code>:url</code> ir pasirinkite įvykius <code>:events</code>.',
        'stripe_info' => 'Stripe skydelyje turite nustatyti webhook URL į <code>:url</code> ir pasirinkti įvykius: <code>:events</code>.',
        'paymentwall_info' => 'PaymentWall valdymo skyde jūs turite nustatyti pingback URL į <code>:url</code>.',
        'xsolla' => 'Xsoolla valdymo skyde jūs turite nustatyti webhook URL į <code>:url</code>, įjungti \'Transaction external ID\' esantį \'Pay station\' nustatymuose, patikrinti webhooks ir tada įjungti \'Checkout\' esantį \'Pay Station\' nustatymuose.',
        'skrill_email' => 'Skrill El. pašto adresas',
        'skrill_secret' => 'Slaptas žodis',
        'skrill_info' => 'Svetainės ID ir Slaptas žodis gali būti rasti Skrill skydelyje, skiltyje "Developer Settings".',
        'mercadopago' => 'The Mercado Pago credentials must be for the <strong>Checkout Pro</strong> integration.',

        'enable' => 'Įjungti mokėjimo būdą',
    ],

    'payments' => [
        'title' => 'Mokėjimai',
        'show' => 'Mokėjimas #:payment',

        'info' => 'Apmokėjimo informacija',
        'items' => 'Įsigytos prekės',

        'card' => 'Parduotuvės mokėjimai',

        'status' => [
            'pending' => 'Laukiama',
            'expired' => 'Nebegalioja',
            'chargeback' => 'Mokėjimo atšaukimas',
            'completed' => 'Įvykdyta',
            'refunded' => 'Grąžintas',
            'error' => 'Klaida',
        ],
    ],

    'purchases' => [
        'title' => 'Pirkimai',
    ],

    'subscriptions' => [
        'title' => 'Prenumeratos',
        'show' => 'Prenumerata #:subscription',

        'info' => 'Prenumeratos informacija',
        'error' => 'Norėdami tęsti, turite atšaukti susijusias prenumeratas ir palaukti jų pasibaigimo.',
        'setup' => 'Subscription package can be set up in a package settings, just under the price field.',

        'status' => [
            'active' => 'Aktyvus',
            'canceled' => 'Atšauktas',
            'expired' => 'Nebegalioja',
        ],
    ],

    'settings' => [
        'title' => 'Parduotuvės nustatymai',
        'enable_home' => 'Įjungti parduotuvės pagrindinį puslapį',
        'home_message' => 'Pagrindinio puslapio žinutė',
        'use_site_money' => 'Įjungti pirkimus naudojant svetainės valiutą.',
        'use_site_money_info' => 'Kai įjungta, paketus parduotuvėje galima įsigyti tik naudojant svetainės pinigus. Norėdami, kad vartotojai galėtų papildyti savo sąskaitą, galite nustatyti pasiūlymus parduotuvėje.',
        'webhook' => 'Discord Webhook URL adresas',
        'webhook_info' => 'When an user make a payment, it will create a notification on this webhook. Leave empty to disable.',
        'commands' => 'Globalios komandos',
        'recent_payments' => 'Naujausių mokėjimų limitas, rodomas šoninėje juostoje (nustatykite į 0, kad išjungtumėte)',
        'display_amount' => 'Rodyti išleistą sumą naujausiuose mokėjimuose ir geriausiam klientui',
        'top_customer' => 'Rodyti geriausią mėnesio klientą šoninėje juostoje',

        'terms_required' => 'Reikalauti, kad vartotojai priimtų paslaugų teikimo sąlygas prieš pirkimą',
        'terms' => 'Paslaugų teikimo sąlygos',
        'terms_info' => 'Nuorodos Markdown formatu, pavyzdžiui: <code>Aš sutinku su parduotuvės [paslaugų teikimo sąlygomis](https://example.com/terms).</code>',
    ],

    'variables' => [
        'title' => 'Kintamieji',
        'edit' => 'Redaguoti kintamąjį :variable',
        'create' => 'Sukurti kintamąjį',

        'info' => 'Kintamieji yra pasirinktiniai laukai, kuriuos galima pridėti prie paketų. Jie gali būti naudojami prašyti papildomos informacijos iš vartotojo perkant paketą.',

        'name' => 'Vidinis kintamojo pavadinimas, kurio po sukūrimo negalima keisti.',
        'required' => 'Ar šis kintamasis turi būti privalomas?',
        'options' => 'Nustatymai',

        'text' => 'Tekstas',
        'number' => 'Numeris',
        'email' => 'El. paštas',
        'checkbox' => 'Žymimasis langelis',
        'dropdown' => 'Išskleidžiamasis meniu',
    ],

    'logs' => [
        'shop-gateways' => [
            'created' => 'Sukurtas mokėjimo būdas #:id',
            'updated' => 'Atnaujintas mokėjimo būdas #:id',
            'deleted' => 'Pašalintas mokėjimo būdas #:id',
        ],

        'shop-packages' => [
            'created' => 'Sukurtas paketas #:id',
            'updated' => 'Atnaujintas paketas #:id',
            'deleted' => 'Pašalintas paketas #:id',
        ],

        'shop-offers' => [
            'created' => 'Sukurtas pasiūlymas #:id',
            'updated' => 'Atnaujintas pasiūlymas #:id',
            'deleted' => 'Pašalintas pasiūlymas #:id',
        ],

        'shop-giftcards' => [
            'used' => 'Naudota dovanų kortelė #:id (:amount)',
        ],

        'settings' => 'Updated shop settings',
    ],

    'statistics' => [
        'title' => 'Statistika',
        'total' => 'Viso',
        'recent' => 'Paskutiniai mokėjimai',
        'count' => 'Mokėjimų skaičius',
        'estimated' => 'Apskaičiuotas uždarbis',
        'month' => 'Mokėjimai per šį mėnėsį',
        'month_estimated' => 'Numatomos pajamos šį mėnesį',
    ],

];
