<?php

return [
    'fivem' => [
        'id' => 'Cfx.re ID',
        'name' => 'Cfx.re kullanıcı adı',
        'commands' => 'Kullanıcı adı için <code>{name}</code>, ID için <code>{id}</code>, Cfx.re ID için <code>{fivem_id}</code>, SteamID 64 için <code>{steam_id}</code> ve HEX Steam ID için <code>{steam_hex}</code> kullanabilirsiniz',
    ],

    'steam' => [
        'id' => 'SteamID 64',
        'commands' => 'Oyuncu kullanıcı adı için <code>{name}</code> komutunu, oyuncu SteamID 64\'ü için <code>{steam_id} ve oyuncu SteamID 32\'si için <code>{steam_id_32}</code> komutlarını kullanabilirsiniz.',
    ],

    'epic' => [
        'id' => 'Epic Games Kimliği',
        'commands' => 'Oyuncu kullanıcı adı için <code>{name}</code> ve oyuncunun Epic Games Kimliği için <code>{game_id}</code> kullanabilirsiniz.',
    ],

    'xbox' => [
        'missing' => 'Bu Microsoft hesabının bir Xbox profili yok.',
    ],

    'minecraft' => [
        'id' => 'UUID',
        'missing' => 'Bu Xbox hesabının bir Minecraft profili yok.',
        'child' => 'Bu hesap bir çocuktur (18 yaş altı) ve giriş yapabilmek için bir yetişkin tarafından bir aileye eklenmelidir.',
        'commands' => '<code>{name}</code> kodunu oyuncu kullanıcı adı için ve <code>{uuid}</code> kodunu oyuncu UUID için kullanabilirsin',
    ],

    'minecraft_bedrock' => [
        'id' => 'XUID',
        'commands' => '<code>{name}</code> kodunu oyuncu kullanıcı adı için ve <code>{xuid}</code> kodunu oyuncu XUID için kullanabilirsin',
    ],
];
