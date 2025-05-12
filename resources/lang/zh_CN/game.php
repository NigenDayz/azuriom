<?php

return [
    'fivem' => [
        'id' => 'Cfx.re ID',
        'name' => 'Cfx.re 用户名',
        'commands' => 'You can use <code>{name}</code> for the username, <code>{id}</code> for the ID, <code>{fivem_id}</code> for Cfx.re ID, <code>{steam_id}</code> for the SteamID 64 and <code>{steam_hex}</code> for the HEX Steam ID',
    ],

    'steam' => [
        'id' => 'SteamID 64',
        'commands' => '您可以使用 <code>{name}</code>对于玩家用户名,<code>{steam_id}</code>玩家 SteamID 64 和<code>{steam_id_32}</code>玩家 SteamID 32。',
    ],

    'epic' => [
        'id' => 'Epic 游戏 ID',
        'commands' => 'You can use <code>{name}</code> for the player username and <code>{game_id}</code> for the player Epic Games ID.',
    ],

    'xbox' => [
        'missing' => '此 Microsoft 帐户没有绑定 Xbox 游戏帐户.',
    ],

    'minecraft' => [
        'id' => 'UUID',
        'missing' => '此 Xbox 帐户下没有 Minecraft 信息.',
        'child' => '该账户是未成年(18 岁以下), 必须由成年人添加到一个家庭中才能登录.',
        'commands' => '你可以使用 <code>{name}</code> 来获取玩家的用户名, <code>{uuid}</code> 来获取玩家 UUUID',
    ],

    'minecraft_bedrock' => [
        'id' => 'XUID',
        'commands' => '你可以使用 <code>{name}</code> 来使用玩家的用户名, <code>{xuid}</code> 来使用玩家XUID',
    ],
];
