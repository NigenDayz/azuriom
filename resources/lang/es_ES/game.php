<?php

return [
    'fivem' => [
        'id' => 'Cfx.re ID',
        'name' => 'Nombre de usuario',
        'commands' => 'You can use <code>{name}</code> for the username, <code>{id}</code> for the ID, <code>{fivem_id}</code> for Cfx.re ID, <code>{steam_id}</code> for the SteamID 64 and <code>{steam_hex}</code> for the HEX Steam ID',
    ],

    'steam' => [
        'id' => 'Steam 64',
        'commands' => 'Puedes usar <code>{name}</code> para el nombre de usuario, <code>{steam_id}</code> para el Steam 64 y <code>{steam_id_32}</code> para el Steam 32.',
    ],

    'epic' => [
        'id' => 'Epic Games ID',
        'commands' => 'You can use <code>{name}</code> for the player username and <code>{game_id}</code> for the player Epic Games ID.',
    ],

    'xbox' => [
        'missing' => 'Esta cuenta de Microsoft no tiene un perfil Xbox.',
    ],

    'minecraft' => [
        'id' => 'UUID',
        'missing' => 'Esta cuenta de Xbox no tiene un perfil de Minecraft.',
        'child' => 'Esta cuenta es un niño (menores de 18 años) y debe ser añadida a una familia por un adulto para poder iniciar sesión.',
        'commands' => 'Puedes usar <code>{name}</code> para el nombre de usuario del jugador y <code>{uuid}</code> para el UUID del jugador',
    ],

    'minecraft_bedrock' => [
        'id' => 'XUID',
        'commands' => 'Puedes usar <code>{name}</code> para el nombre de usuario del jugador y <code>{xuid}</code> para el XUID del jugador',
    ],
];
