<?php

return [
    'fivem' => [
        'id' => 'Cfx.re ID',
        'name' => 'Cfx.re slapyvardis',
        'commands' => 'Galite naudoti <code>{name}</code> vartotojo vardui, <code>{id}</code> ID, <code>{fivem_id}</code> Cfx.re ID, <code>{steam_id}</code> SteamID 64 ir <code>{steam_hex}</code> HEX Steam ID',
    ],

    'steam' => [
        'id' => 'SteamID 64',
        'commands' => 'Jūs galite panaudoti <code>{name}</code> žaidėjo slapyvardžiui, <code>{steam_id}</code> žaidėjo SteamID 64 ir <code>{steam_id_32}</code> žaidėjo SteamID 32.',
    ],

    'epic' => [
        'id' => 'Epic Games ID',
        'commands' => 'Galite naudoti <code>{name}</code> žaidėjo vartotojo vardui ir <code>{game_id}</code> žaidėjo Epic Games ID.',
    ],

    'xbox' => [
        'missing' => 'Ši Microsoft paskyra neturi Xbox profilio.',
    ],

    'minecraft' => [
        'id' => 'UUID',
        'missing' => 'Ši Xbox paskyra neturi Minecraft profilio.',
        'child' => 'Ši paskyra yra vaikas (Turi mažiau nei 18) ir turi būti pridėta į šeimą suaugusiojo asmens, jog prisijungti.',
        'commands' => 'Jūs galite panaudoti <code>{name}</code> žaidėjo slapyvardžiui ir <code>{uuid}</code> žaidėjo UUID',
    ],

    'minecraft_bedrock' => [
        'id' => 'XUID',
        'commands' => 'Jūs galite panaudoti <code>{name}</code> žaidėjo slapyvardžiui ir <code>{xuid}</code> žaidėjo XUUID',
    ],
];
