<?php

return [
    'fivem' => [
        'id' => 'Cfx.re ID',
        'name' => 'Cfx.re username',
        'commands' => 'You can use <code>{name}</code> for the username, <code>{id}</code> for the ID, <code>{fivem_id}</code> for Cfx.re ID, <code>{steam_id}</code> for the SteamID 64 and <code>{steam_hex}</code> for the HEX Steam ID',
    ],

    'steam' => [
        'id' => 'SteamID 64',
        'commands' => 'Voit käyttää <code>{name}</code> pelaajan käyttäjänimeä, <code>{steam_id}</code> pelaajalle SteamID 64 ja <code>{steam_id_32}</code> pelaajalle SteamID 32.',
    ],

    'epic' => [
        'id' => 'Epic Games ID',
        'commands' => 'You can use <code>{name}</code> for the player username and <code>{game_id}</code> for the player Epic Games ID.',
    ],

    'xbox' => [
        'missing' => 'Tällä Microsoft-tilillä ei ole Xbox profiilia.',
    ],

    'minecraft' => [
        'id' => 'UUID',
        'missing' => 'Tällä Xbox-tilillä ei ole Minecraft-profiilia.',
        'child' => 'This account is a child (under 18) and must be added to a family by an adult in order to login.',
        'commands' => 'Voit käyttää pelaajan käyttäjänimeä <code>{name}</code> ja pelaajan UUID <code>{uuid}</code>',
    ],

    'minecraft_bedrock' => [
        'id' => 'XUID',
        'commands' => 'Voit käyttää pelaajan käyttäjänimeä <code>{name}</code> ja pelaajan UUID <code>{xuid}</code>',
    ],
];
