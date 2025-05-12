<?php

return [
    'fivem' => [
        'id' => 'Cfx.re ID',
        'name' => 'Cfx.re username',
        'commands' => 'You can use <code>{name}</code> for the username, <code>{id}</code> for the ID, <code>{fivem_id}</code> for Cfx.re ID, <code>{steam_id}</code> for the SteamID 64 and <code>{steam_hex}</code> for the HEX Steam ID',
    ],

    'steam' => [
        'id' => 'SteamID 64',
        'commands' => 'Használd a <code>{name}</code> -et a felhasználónév, a <code>{steam_id}</code> -t a SteamID és a <code>{steam_id_32}</code> a SteamID 32 behelyettesítésére.',
    ],

    'epic' => [
        'id' => 'Epic Games ID',
        'commands' => 'You can use <code>{name}</code> for the player username and <code>{game_id}</code> for the player Epic Games ID.',
    ],

    'xbox' => [
        'missing' => 'Ez a Microsoft-fiók nem rendelkezik Xbox-profillal.',
    ],

    'minecraft' => [
        'id' => 'UUID',
        'missing' => 'Ennek az Xbox-fióknak nincs Minecraft-profilja.',
        'child' => 'This account is a child (under 18) and must be added to a family by an adult in order to login.',
        'commands' => 'Használd a <code>{name}</code> -et a játékos felhasználóneve és a <code>{uuid}</code> -t a játékos UUID-ja helyettesítésére',
    ],

    'minecraft_bedrock' => [
        'id' => 'XUID',
        'commands' => 'Használd a <code>{name}</code> -et a játékos felhasználóneve és a <code>{xuid}</code> -t a játékos XUID-ja helyettesítéséhez',
    ],
];
