<?php

return [
    'title' => 'Suporte',

    'categories' => [
        'title' => 'Categorias',
        'edit' => 'Editar categoria #:category',
        'create' => 'Criar categoria',

        'delete_empty' => 'A categoria contém tickets e não pode ser excluída.',
    ],

    'tickets' => [
        'title' => 'Tickets',
        'show' => 'Ticket #:ticket - :name',
        'create' => 'Criar ticket',

        'open' => 'Tickets abertos',
    ],

    'permissions' => [
        'tickets' => 'Ver e gerenciar tickets de suporte',
        'categories' => 'Ver e gerenciar categorias de suporte',
    ],

    'fields' => [
        'title' => 'Modelos de campos do ticket',
        'info' => 'Um modelo de ticket é usado para definir os campos que serão exibidos ao criar um ticket em vez de um campo de texto livre.',
        'required' => 'Este campo é obrigatório?',
        'options' => 'Opções',

        'text' => 'Texto',
        'textarea' => 'Área de texto (várias linhas)',
        'number' => 'Número',
        'email' => 'E-mail',
        'checkbox' => 'Caixa de seleção',
        'dropdown' => 'Menu suspenso',
    ],

    'settings' => [
        'title' => 'Configurações de suporte',
        'home_message' => 'Mensagem de boas vindas',
        'delay' => 'Atraso entre dois tickets',
        'webhook' => 'Discord Webhook URL',
        'webhook_info' => 'Quando um usuário criar um ticket ou adicionar um comentário, ele criará uma notificação neste webhook. Deixe em branco para desativar',
        'scheduler' => 'Quando tarefas CRON estão configuradas, tickets podem ser fechados automaticamente após um certo tempo.',
        'auto_close' => 'Atraso antes de fechar tickets automaticamente',
        'auto_close_info' => 'Quando um ticket não receber nenhum resposta durante este tempo, ele será fechado automaticamente. Deixe em branco para desativar.',
        'reopen' => 'Permitir que os usuários reabram um ticket fechado.',
    ],

    'logs' => [
        'tickets' => [
            'reopened' => 'Ticket reaberto #:id',
            'closed' => 'Ticket fechado #:id',
        ],
    ],
];
