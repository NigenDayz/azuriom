<?php

return [
    'fivem' => [
        'id' => 'ID Cfx.re',
        'name' => 'Nazwa użytkownika Cfx.re',
        'commands' => 'Możesz użyć <code>{name}</code> dla nazwy użytkownika, <code>{id}</code> dla ID, <code>{fivem_id}</code> dla Cfx. e ID, <code>{steam_id}</code> dla SteamID 64 i <code>{steam_hex}</code> dla Steam ID HEX',
    ],

    'steam' => [
        'id' => 'SteamID 64',
        'commands' => 'Możesz użyć <code>{name}</code> dla nazwy gracza, <code>{steam_id}</code> dla gracza SteamID 64 i <code>{steam_id_32}</code> dla gracza SteamID 32.',
    ],

    'epic' => [
        'id' => 'ID Epic Games',
        'commands' => 'Możesz użyć <code>{name}</code> dla nazwy użytkownika i <code>{game_id}</code> dla ID Epic Games.',
    ],

    'xbox' => [
        'missing' => 'To konto Microsoft nie posiada profilu Xbox.',
    ],

    'minecraft' => [
        'id' => 'UUID',
        'missing' => 'To konto Xbox nie posiada profilu Minecraft.',
        'child' => 'To konto należy do dziecka (poniżej 18 roku życia) i musi zostać dodane do grupy rodzinnej, aby móc się zalogować.',
        'commands' => 'Możesz użyć <code>{name}</code> dla nazwy użytkownika i <code>{uuid}</code> dla gracza UUUID',
    ],

    'minecraft_bedrock' => [
        'id' => 'XUID',
        'commands' => 'Możesz użyć <code>{name}</code> dla nazwy użytkownika i <code>{xuid}</code> dla gracza XUID',
    ],
];
