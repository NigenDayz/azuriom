<?php

return [
    'title' => 'Parduotuvė',
    'welcome' => 'Sveiki atvykę į parduotuvę!',

    'buy' => 'Pirkti',

    'free' => 'Nemokama',

    'periods' => [
        'hours' => 'valandų',
        'days' => 'dienos',
        'weeks' => 'savaitės',
        'months' => 'mėnėsiai',
        'years' => 'metai',
    ],

    'fields' => [
        'balance' => 'Balansas',
        'category' => 'Kategorija',
        'code' => 'Kodas',
        'commands' => 'Komandos',
        'currency' => 'Valiuta',
        'discount' => 'Nuolaida',
        'expire_date' => 'Galioja iki',
        'gateways' => 'Mokėjimo būdas',
        'global_limit' => 'Globalus pirkimo limitas',
        'original_balance' => 'Originalus Balansas',
        'package' => 'Paketas',
        'packages' => 'Paketai',
        'payment_id' => 'Mokėjimo ID',
        'payments' => 'Mokėjimai',
        'price' => 'Kaina',
        'quantity' => 'Kiekis',
        'renewal_date' => 'Atnaujinimo data',
        'required' => 'Privaloma',
        'required_packages' => 'Privalomi paketai',
        'required_roles' => 'Privalomos rolės',
        'role' => 'Grupė į kurią nustatyti po pirkimo',
        'start_date' => 'Pradžios data',
        'subscription' => 'Prenumerata',
        'subscription_id' => 'Prenumeratos ID',
        'total' => 'Viso',
        'user_id' => 'Vartotojo ID',
        'user_limit' => 'Vartotojo pirkimo limitas',
    ],

    'actions' => [
        'subscribe' => 'Prenumeruoti',
        'manage' => 'Manage subscription',
        'move' => 'Perkelti',
    ],

    'goal' => [
        'title' => 'Mėnėsio taikinys',
        'progress' => ':count% įvykdyta',
    ],

    'recent' => [
        'title' => 'Paskutiniai mokėjimai',
        'empty' => 'Jokių naujų mokėjimų',
    ],

    'top' => [
        'title' => 'Top klientas',
    ],

    'cart' => [
        'title' => 'Krepšelis',
        'success' => 'Jūsų pirkimas buvo sekmingai įvykdytas.',
        'guest' => 'Jūs privalote būti prisijungęs, kad įvykdyti pirkinį.',
        'empty' => 'Jūsų krepšelis yra tuščias.',
        'checkout' => 'Apmokėjimas',
        'clear' => 'Ištuštinti krepšelį',
        'pay' => 'Mokėti',
        'back' => 'Atgal į parduotuvę',
        'total' => 'Viso: :total',
        'payable_total' => 'Bendrai sumokėti: total',
        'credit' => 'Kreditas',

        'confirm' => [
            'title' => 'Mokėti?',
            'price' => 'Ar jūs tikrai norite nusipirkti šį krepšelį už :price.',
        ],

        'errors' => [
            'money' => 'Jūs neturite pakankamai pinigų, kad įvykdyti šį pirkinį.',
            'execute' => 'Įvyko netikėta klaida apmokėjimo metu, jūsų pirkimas buvo grąžintas.',
        ],
    ],

    'coupons' => [
        'title' => 'Kuponai',
        'add' => 'Pridėti kuponą',
        'error' => 'Šis kuponas neegzistuoja, pasibaigė arba nebegali būti panaudotas.',
        'cumulate' => 'Jūs negalite naudoti šio kupono su kitu kuponu.',
    ],

    'payment' => [
        'title' => 'Mokėjimas',
        'manual' => 'Rankinis mokėjimas',

        'empty' => 'Nėra jokių tinkamų mokėjimo būdų.',

        'info' => 'Pirkinys #id: svetainėje :website',
        'subscription' => ':package - Prenumerata (Vartotojas #:user)',
        'error' => 'Mokėjimas negalėjo būti įvykdytas.',
        'giftcards' => 'Giftcards',

        'success' => 'Mokėjimas baigtas, savo pirkimą gausite žaidime per mažiau nei minutę.',
        'pending' => 'Mokėjimas laukia, savo pirkimą gausite žaidime, kai mokėjimas bus patvirtintas.',

        'webhook' => 'Naujas mokėjimas parduotuvėje',
        'webhook_info' => 'Iš viso: :total, ID: :id (:gateway)',
        'webhook_chargeback' => 'Mokėjimo grąžinimas parduotuvėje',
        'webhook_refund' => 'Mokėjimo grąžinimas parduotuvėje',
    ],

    'categories' => [
        'empty' => 'Ši kategorija yra tuščia.',
    ],

    'packages' => [
        'limit' => 'Jūs nusipirkote maksimalų įmanomą kiekį šiam paketui.',
        'requirements' => 'Jūs neatitinkate reikalavimų įsigyti šiam paketui.',
        'cumulate' => 'Negalite įsigyti šio paketo kartu su kitu iš tos pačios kategorijos per tą pačią pirkimo operaciją.',
        'file' => 'Click here to download the file :file',
    ],

    'offers' => [
        'gateway' => 'Mokėjimo būdas',
        'amount' => 'Kiekis',

        'empty' => 'Nėra jokių galimų pasiūlymų.',
    ],

    'profile' => [
        'payments' => 'Jūsų mokėjimai',
        'subscriptions' => 'Jūsų prenumeratos',
        'money' => 'Pinigai: :balance',
    ],

    'giftcards' => [
        'title' => 'Dovanų kortelės',
        'error' => 'Šis dovanų kortelė neegzistuoja, yra pasibaigusi arba nebegali būti panaudota.',
        'add' => 'Pridėti dovanų kortelę',
        'notification' => 'Jūs gavote dovanų kortelę, kodas yra :code (:balance).',
        'pending' => 'Mokėjimas jau buvo pradėtas už šią dovanų kortelę. Baigkite mokėjimą arba palaukite kelias minutes.',
    ],
];
