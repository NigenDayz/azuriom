<?php

return [
    'title' => 'Loja',
    'welcome' => 'Bem-vindo(a) à loja!',

    'buy' => 'Comprar',

    'free' => 'Grátis',

    'periods' => [
        'hours' => 'horas',
        'days' => 'dias',
        'weeks' => 'semanas',
        'months' => 'meses',
        'years' => 'anos',
    ],

    'fields' => [
        'balance' => 'Saldo',
        'category' => 'Categoria',
        'code' => 'Código',
        'commands' => 'Comandos',
        'currency' => 'Moeda',
        'discount' => 'Desconto',
        'expire_date' => 'Data de Validade',
        'gateways' => 'Métodos de Pagamento',
        'global_limit' => 'Limite de compra global',
        'original_balance' => 'Saldo Original',
        'package' => 'Produto',
        'packages' => 'Produtos',
        'payment_id' => 'ID do Pagamento',
        'payments' => 'Pagamentos',
        'price' => 'Preço',
        'quantity' => 'Quantidade',
        'renewal_date' => 'Data de renovação',
        'required' => 'Obrigatório',
        'required_packages' => 'Pacotes necessários',
        'required_roles' => 'Cargo requerido',
        'role' => 'Cargo a ser definido após a compra',
        'start_date' => 'Data de início',
        'subscription' => 'Assinatura',
        'subscription_id' => 'ID de Assinatura',
        'total' => 'Total',
        'user_id' => 'ID do Usuário',
        'user_limit' => 'Limite de compras por usuário',
    ],

    'actions' => [
        'subscribe' => 'Inscrever-me',
        'manage' => 'Gerenciar assinatura',
        'move' => 'Mover',
    ],

    'goal' => [
        'title' => 'Meta do Mês',
        'progress' => ':count% concluído',
    ],

    'recent' => [
        'title' => 'Pagamentos Recentes',
        'empty' => 'Não há pagamentos recentes',
    ],

    'top' => [
        'title' => 'Top Cliente',
    ],

    'cart' => [
        'title' => 'Carrinho',
        'success' => 'Sua compra foi concluída com sucesso.',
        'guest' => 'Você deve estar logado para fazer uma compra.',
        'empty' => 'Seu carrinho está vazio.',
        'checkout' => 'Finalizar compra',
        'clear' => 'Limpar carrinho',
        'pay' => 'Pagar',
        'back' => 'Voltar a loja',
        'total' => 'Total: :total',
        'payable_total' => 'Total a pagar: :total',
        'credit' => 'Crédito',

        'confirm' => [
            'title' => 'Pagar?',
            'price' => 'Tem certeza que deseja comprar este carrinho por :price.',
        ],

        'errors' => [
            'money' => 'Você não tem dinheiro suficiente para fazer esta compra.',
            'execute' => 'Um erro inesperado ocorreu durante o pagamento, sua compra foi reembolsada.',
        ],
    ],

    'coupons' => [
        'title' => 'Cupons',
        'add' => 'Adicionar um cupom',
        'error' => 'Este cupom não existe, expirou ou não pode mais ser usado.',
        'cumulate' => 'Não é possível usar este cupom com outro cupom.',
    ],

    'payment' => [
        'title' => 'Métodos de Pagamento',
        'manual' => 'Pagamento manual',

        'empty' => 'Nenhum método de pagamento disponível no momento.',

        'info' => 'Compra #:id no site :website',
        'subscription' => ':package - Assinatura (Usuário #:user)',
        'error' => 'Não foi possível completar o pagamento.',
        'giftcards' => 'Giftcards',

        'success' => 'Pagamento concluído, você receberá a sua compra em jogo em menos de um minuto.',
        'pending' => 'Pagamento pendente, você receberá sua compra no jogo quando o pagamento for confirmado.',

        'webhook' => 'Novo pagamento na loja',
        'webhook_info' => 'Total: :total, ID: :id (:gateway)',
        'webhook_chargeback' => 'Estorno de pagamento na loja',
        'webhook_refund' => 'Reembolso do pagamento na loja',
    ],

    'categories' => [
        'empty' => 'Esta categoria está vazia.',
    ],

    'packages' => [
        'limit' => 'Você comprou o número máximo permitido para este produto.',
        'requirements' => 'Você não tem os requisitos para comprar este produto.',
        'cumulate' => 'Você não pode comprar este pacote com outro da mesma categoria na mesma compra.',
        'file' => 'Clique aqui para download do arquivo :file',
    ],

    'offers' => [
        'gateway' => 'Tipo de pagamento',
        'amount' => 'Quantidade',

        'empty' => 'Nenhuma oferta disponível no momento.',
    ],

    'profile' => [
        'payments' => 'Histórico de compras',
        'subscriptions' => 'Suas assinaturas',
        'money' => 'Dinheiro: :balance',
    ],

    'giftcards' => [
        'title' => 'Giftcards',
        'error' => 'Este gift card não existe, expirou ou não pode mais ser usado.',
        'add' => 'Adicionar um gift card',
        'notification' => 'Você recebeu um gift card, o código é :code (:balance).',
        'pending' => 'Um pagamento já foi iniciado para este giftcard. Conclua o pagamento ou aguarde alguns minutos.',
    ],
];
