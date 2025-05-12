<?php

return [
    'nav' => [
        'title' => 'Loja',
        'settings' => 'Configurações',
        'packages' => 'Produtos',
        'gateways' => 'Métodos de Pagamento',
        'offers' => 'Ofertas',
        'coupons' => 'Cupons',
        'giftcards' => 'Gift Cards',
        'discounts' => 'Descontos',
        'payments' => 'Pagamentos',
        'subscriptions' => 'Assinaturas',
        'variables' => 'Variáveis',
        'purchases' => 'Compras',
        'statistics' => 'Estatísticas',
    ],

    'permissions' => [
        'settings' => 'Gerenciar configurações da loja',
        'packages' => 'Gerenciar pacotes e categorias da loja',
        'gateways' => 'Gerenciar métodos de pagamento da loja',
        'promotions' => 'Gerenciar cupons e descontos da loja',
        'giftcards' => 'Gerenciar gift cards da loja',
        'payments' => 'Criar e ver pagamentos/compras da loja e assinaturas',
    ],

    'categories' => [
        'title' => 'Categorias',
        'edit' => 'Editar categoria :category',
        'create' => 'Criar categoria',

        'parent' => 'Categoria parental',
        'delete_error' => 'Uma categoria com produtos não pode ser excluída.',

        'cumulate' => 'Acumular compras nesta categoria',
        'cumulate_info' => 'Os usuários que já compraram um produto nesta categoria receberão um desconto e só pagarão a diferença na compra de um produto mais caro.',
        'cumulate_strict' => 'Impedir que usuários comprem um pacote mais barato do que aqueles que já compraram nesta categoria',
        'single_purchase' => 'Limitar o usuário a comprar um único pacote desta categoria',
        'enable' => 'Habilitar categoria',
    ],

    'offers' => [
        'title' => 'Ofertas',
        'edit' => 'Editar a oferta :offer',
        'create' => 'Criar oferta',

        'enable' => 'Habilitar oferta',
    ],

    'coupons' => [
        'title' => 'Cupons',
        'edit' => 'Editar cupom :coupon',
        'create' => 'Criar cupom',

        'global' => 'Os cupons devem estar ativos para toda a loja?',
        'cumulate' => 'Permitir usar este cupom com outros cupons',
        'user_limit' => 'Limite de usuários',
        'global_limit' => 'Limite global',
        'active' => 'Ativo',
        'usage' => 'Abaixo do limite de uso',
        'enable' => 'Habilitar cupom',
    ],

    'giftcards' => [
        'title' => 'Gift Cards',
        'edit' => 'Editar gift card :giftcard',
        'create' => 'Criar um gift card',

        'global_limit' => 'Limite global',
        'active' => 'Ativo',
        'enable' => 'Habilitar gift card',
        'link' => 'Link compartilhável',
        'pending' => 'O pagamento está pendente, o saldo pode não ser atualizado ainda.',
    ],

    'discounts' => [
        'title' => 'Descontos',
        'edit' => 'Editar desconto :discount',
        'create' => 'Criar desconto',

        'global' => 'Os descontos devem estar ativos para toda a loja?',
        'active' => 'Ativo',
        'enable' => 'Ativar o desconto',
        'restricted' => 'Restrinja este desconto apenas a determinados cargos',
    ],

    'packages' => [
        'title' => 'Produtos',
        'edit' => 'Editar produto :package',
        'create' => 'Criar produto',

        'every' => 'cada',
        'after' => 'após',

        'updated' => 'Os produtos foram atualizados.',

        'variables' => 'Variáveis customizáveis',
        'files' => 'Arquivos para download',
        'role' => 'Cargo para definir quando o pacote expirar',
        'money' => 'Dinheiro a ser creditado ao usuário após a compra',
        'has_giftcard' => 'Crie um giftcard após a compra e entregue ao usuário',
        'giftcard_balance' => 'Saldo do giftcard',
        'giftcard_fixed' => 'Valor fixo',
        'giftcard_dynamic' => 'Preço do pacote',
        'command' => 'O comando não pode começar com <code>/</code>. Você pode usar <code>{player}</code> para o nome do jogador. Para jogos do Steam, você também pode usar <code>{steam_id}</code> e <code>{steam_id_32}</code>. Os outros espaços reservados disponíveis são: :placeholders.',
        'has_user_limit' => 'Adicione um limite de compra individual por usuário para este pacote',
        'has_global_limit' => 'Adicione um limite de compra global para este pacote',
        'limit_period' => 'Período limite',
        'limits_no_expired' => 'Excluir pacotes expirados ao calcular limites de compra',
        'no_period' => 'Sem período',
        'custom_price' => 'Permitir que o usuário escolha o preço a pagar (o preço do pacote será o mínimo)',
        'enable_quantity' => 'Habilitar quantidade',

        'billing' => 'Tipo de cobrança',
        'billing_period' => 'Período de cobrança',
        'one_off' => 'Pagamento único',
        'subscription' => 'Assinatura com renovação automática',
        'subscription_info' => 'Certifique-se de que o seu método de pagamento suporta assinaturas. Quando uma assinatura é criada, o usuário será cobrado o mesmo preço até que a assinatura seja cancelada (qualquer desconto ativo durante o primeiro pagamento será aplicado aos próximos pagamentos).',
        'expiring' => 'Pagamento único com vencimento',
        'expiring_info' => 'O produto será automaticamente removido após o período especificado.',
        'scheduler' => 'Você deve configurar tarefas CRON para usar assinaturas, consulte o <a href="https://azuriom.com/docs/faq" target="_blank" rel="noopener norefferer">FAQ</a> para obter mais informações.',

        'create_category' => 'Criar categoria',
        'create_package' => 'Criar produto',

        'enable' => 'Habilitar produto',
    ],

    'commands' => [
        'online' => 'Espere o jogador estar online antes de executar o comando (requer AzLink)',
        'offline' => 'Execute o comando diretamente, esteja o jogador online ou não',
        'servers' => 'Você precisa adicionar pelo menos um servidor para criar um comando.',

        'trigger' => 'Gatilho de comando',
        'command' => 'Comando',
        'condition' => 'Condição para executar o comando',

        'triggers' => [
            'purchase' => 'Compra Inicial',
            'expiration' => 'Após a expiração',
            'refund' => 'Pagamento Reembolsado',
            'chargeback' => 'Estorno',
            'renewal' => 'Renovação da Assinatura',
        ],
    ],

    'gateways' => [
        'title' => 'Métodos de Pagamento',
        'edit' => 'Editar método de pagamento :gateway',
        'create' => 'Adicionar método de pagamento',

        'current' => 'Métodos de pagamentos atuais',
        'add' => 'Adicionar um novo método de pagamento',
        'info' => 'Se você estiver tendo problemas com os pagamentos ao usar o Cloudflare ou um firewall, tente seguir as etapas do <a href="https://azuriom.com/docs/faq" target="_blank" rel="noopener norefferer">FAQ</a>.',

        'country' => 'País',
        'sandbox' => 'Sandbox',
        'api-key' => 'API key',
        'token' => 'Access Token',
        'public-key' => 'Public key',
        'private-key' => 'Chave privada',
        'secret-key' => 'Secret key',
        'endpoint-secret' => 'Segredo de Assinatura',
        'service-id' => 'Service ID',
        'client-id' => 'Client ID',
        'merchant-id' => 'Merchant ID',
        'project-id' => 'Project ID',
        'webhook_id' => 'Webhook ID',
        'website_id' => 'Website ID',
        'env' => 'Ambiente',

        'subscription' => 'Este método de pagamento suporta renovação de assinatura automática.',
        'no_subscription' => 'Este método de pagamento não oferece suporte à renovação automática de assinatura.',

        'paypal_email' => 'Endereço de Email PayPal',
        'paypal_info' => 'Por favor, certifique-se de inserir o endereço de email <strong>principal</strong> da conta PayPal.',
        'paypal_checkout' => 'No painel de controle do PayPal, na sua aplicação de API, crie um webhook com URL <code>:url</code> e selecione os eventos <code>:events</code>.',
        'stripe_info' => 'No painel do Stripe você precisa definir a URL do webhook para <code>:url</code> e selecionar os eventos <code>:events</code>.',
        'paymentwall_info' => 'No painel PaymentWall você precisa definir a URL pingback para <code>:url</code>.',
        'xsolla' => 'No painel do Xsolla você precisa definir o URL do webhook para <code>:url</code>, habilitar \'ID externo da transação\' nas configurações \'Estação de pagamento\', testar os webhooks e então habilitar \'Checkout\' nas configurações da \'Estação de pagamento\'.',
        'skrill_email' => 'Endereço de Email Skrill',
        'skrill_secret' => 'Secret Word',
        'skrill_info' => 'O website ID e a Secret Word podem ser encontrados no painel Skrill em "Developer Settings".',
        'mercadopago' => 'As credenciais do Mercado Pago precisam ser para a integração <strong>Checkout Pro</strong>.',

        'enable' => 'Habilitar Método de Pagamento',
    ],

    'payments' => [
        'title' => 'Pagamentos',
        'show' => 'Pagamento #:payment',

        'info' => 'Informações do pagamento',
        'items' => 'Itens comprados',

        'card' => 'Pagamentos da loja',

        'status' => [
            'pending' => 'Pendente',
            'expired' => 'Expirado',
            'chargeback' => 'Estorno',
            'completed' => 'Concluído',
            'refunded' => 'Reembolsado',
            'error' => 'Erro',
        ],
    ],

    'purchases' => [
        'title' => 'Compras',
    ],

    'subscriptions' => [
        'title' => 'Assinaturas',
        'show' => 'Assinatura #:subscription',

        'info' => 'Informações da Assinatura',
        'error' => 'Para continuar, você deve cancelar assinaturas associadas e aguardar a expiração delas.',
        'setup' => 'O pacote de assinatura pode ser configurado nas configurações do pacote, logo abaixo do campo de preço.',

        'status' => [
            'active' => 'Ativo',
            'canceled' => 'Cancelado',
            'expired' => 'Expirado',
        ],
    ],

    'settings' => [
        'title' => 'Configurações da loja',
        'enable_home' => 'Habilitar a página inicial da loja',
        'home_message' => 'Mensagem de boas vindas',
        'use_site_money' => 'Permite compras com a moeda do site.',
        'use_site_money_info' => 'Quando ativado, os produtos da loja só podem ser adquiridos com dinheiro do site. Para que os usuários adicionem créditos em sua conta, você pode configurar ofertas na loja.',
        'webhook' => 'Webhook URL do Discord',
        'webhook_info' => 'When an user make a payment, it will create a notification on this webhook. Leave empty to disable.',
        'commands' => 'Comandos globais',
        'recent_payments' => 'Limite de pagamentos recentes a serem exibidos na barra lateral (defina 0 para desativar)',
        'display_amount' => 'Exibir o valor gasto nos pagamentos recentes e no top cliente',
        'top_customer' => 'Exibir os melhores clientes mensais na barra lateral',

        'terms_required' => 'Exigir que os usuários aceitem os termos de serviço antes da compra',
        'terms' => 'Termos de serviço',
        'terms_info' => 'Links em formato Markdown, por exemplo: <code>eu aceito os [termos de serviço](https://exemplo.com/terms) da loja.</code>',
    ],

    'variables' => [
        'title' => 'Variáveis',
        'edit' => 'Editar variável :variable',
        'create' => 'Criar variável',

        'info' => 'As variáveis são campos personalizados que podem ser adicionados aos pacotes. Eles podem ser usados para solicitar informações adicionais do usuário ao comprar um pacote.',

        'name' => 'O nome interno da variável, não pode ser alterado após a criação.',
        'required' => 'Esta variável deve ser necessária?',
        'options' => 'Opções',

        'text' => 'Texto',
        'number' => 'Número',
        'email' => 'E-mail',
        'checkbox' => 'Caixa de seleção',
        'dropdown' => 'Menu suspenso',
    ],

    'logs' => [
        'shop-gateways' => [
            'created' => 'Método de pagamento #:id criado ',
            'updated' => 'Método de pagamento #:id atualizado',
            'deleted' => 'Método de pagamento #:id deletado',
        ],

        'shop-packages' => [
            'created' => 'Produto #:id criado',
            'updated' => 'Produto #:id atualizado',
            'deleted' => 'Produto #:id deletado',
        ],

        'shop-offers' => [
            'created' => 'Oferta #:id criada',
            'updated' => 'Oferta #:id atualizada',
            'deleted' => 'Oferta #:id deletada',
        ],

        'shop-giftcards' => [
            'used' => 'Gift card usado #:id (:amount)',
        ],

        'settings' => 'Configurações de loja atualizada',
    ],

    'statistics' => [
        'title' => 'Estatísticas',
        'total' => 'Total',
        'recent' => 'Pagamentos recentes',
        'count' => 'Contagem de pagamentos',
        'estimated' => 'Ganhos estimados',
        'month' => 'Pagamentos durante este mês',
        'month_estimated' => 'Ganhos estimados deste mês',
    ],

];
