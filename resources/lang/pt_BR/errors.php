<?php

return [
    'error' => 'Erro',
    'code' => 'Erro :code',
    'home' => 'Voltar a página inicial',
    'whoops' => 'Oopss !',

    '401' => [
        'title' => 'Acesso negado',
        'message' => 'Você não está autorizado a acessar esta página.',
    ],
    '403' => [
        'title' => 'Acesso negado',
        'message' => 'Você não tem autorização para acessar esta página.',
    ],
    '404' => [
        'title' => 'Não encontrado',
        'message' => 'A página que você procura não foi encontrada.',
    ],
    '419' => [
        'title' => 'Página expirada',
        'message' => 'Sua sessão expirou. Atualize e tente novamente.',
    ],
    '429' => [
        'title' => 'Muitas solicitações',
        'message' => 'Você está fazendo muitas solicitações aos nossos servidores. Por favor, tente novamente mais tarde.',
    ],
    '500' => [
        'title' => 'Erro de servidor',
        'message' => 'Opa, algo deu errado em nossos servidores. Por favor, tente novamente mais tarde.',
    ],
    '503' => [
        'title' => 'Serviço indisponível',
        'message' => 'Estamos fazendo algumas manutenções. Por favor, volte em breve.',
    ],

    'fallback' => [
        'message' => 'Ocorreu um erro. Por favor aguarde.',
    ],
];
