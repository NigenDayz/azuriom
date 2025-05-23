<?php

return [
    'fivem' => [
        'id' => 'ID Cfx.re',
        'name' => 'Uživatelské jméno Cfx.re',
        'commands' => 'Místo uživatelského jména můžete použít <code>{name}</code>, místo ID <code>{id}</code>, místo ID Cfx.re <code>{fivem_id}</code>, místo SteamID 64 <code>{steam_id}</code> a místo HEX Steam ID <code>{steam_hex}</code>',
    ],

    'steam' => [
        'id' => 'SteamID 64',
        'commands' => 'Můžete použít <code>{name}</code> pro hráčovo uživatelské jméno, <code>{steam_id}</code> pro hráčovo SteamID 64 a <code>{steam_id_32}</code> pro hráčovo SteamID 32.',
    ],

    'epic' => [
        'id' => 'ID Epic Games',
        'commands' => 'Místo uživatelského jména můžete použít <code>{name}</code> a místo Epic Games ID <code>{game_id}</code>.',
    ],

    'xbox' => [
        'missing' => 'Tento účet Microsoft nemá profil Xbox.',
    ],

    'minecraft' => [
        'id' => 'UUID',
        'missing' => 'Tento účet Xbox nemá profil Minecraftu.',
        'child' => 'Tento účet je dětský (osoby mladší 18 let) a musí být přidán do rodiny dospělým, aby se mohl přihlásit.',
        'commands' => 'Můžete použít <code>{name}</code> pro hráčovo uživatelské jméno a <code>{uuid}</code> pro hráčovo UUID',
    ],

    'minecraft_bedrock' => [
        'id' => 'XUID',
        'commands' => 'Můžete použít <code>{name}</code> pro hráčovo uživatelské jméno a <code>{xuid}</code> pro hráčovo XUID',
    ],
];
