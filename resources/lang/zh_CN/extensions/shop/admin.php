<?php

return [
    'nav' => [
        'title' => '商店',
        'settings' => '设置',
        'packages' => '商品',
        'gateways' => '网关',
        'offers' => '报价',
        'coupons' => '优惠券',
        'giftcards' => '礼品卡',
        'discounts' => '折扣',
        'payments' => '交易',
        'subscriptions' => '订阅',
        'variables' => '变量',
        'purchases' => '购买',
        'statistics' => '统计',
    ],

    'permissions' => [
        'settings' => '管理商店设置',
        'packages' => '管理商店物品和分类',
        'gateways' => '管理商店付款方式',
        'promotions' => '管理商店优惠券和折扣',
        'giftcards' => '管理商店礼品卡',
        'payments' => '创建和查看商店 交易、购买和订阅',
    ],

    'categories' => [
        'title' => '分类管理',
        'edit' => '编辑分类 :category',
        'create' => '创建分类',

        'parent' => '父级分类',
        'delete_error' => '无法删除包含商品的分类',

        'cumulate' => '统计此分类中的订单',
        'cumulate_info' => '已在此类别购买商品的用户将获得折扣，只有在购买更昂贵的商品时才需支付差价.',
        'cumulate_strict' => 'Prevent users from buying a cheaper package than those already purchased in this category',
        'single_purchase' => '限制用户从此分类购买单个商品',
        'enable' => '启用此分类',
    ],

    'offers' => [
        'title' => '报价',
        'edit' => '编辑报价 :offer',
        'create' => '创建报价',

        'enable' => '启用此报价',
    ],

    'coupons' => [
        'title' => '优惠券',
        'edit' => '编辑优惠券 :coupon',
        'create' => '创建优惠券',

        'global' => '该优惠券应该在所有的商品都生效吗？',
        'cumulate' => '允许与其他优惠券共同使用',
        'user_limit' => '用户限制',
        'global_limit' => '总限制',
        'active' => '已启用',
        'usage' => '使用限制',
        'enable' => '启用优惠券',
    ],

    'giftcards' => [
        'title' => '礼品卡',
        'edit' => '编辑礼品卡 :giftcard',
        'create' => '创建礼品卡',

        'global_limit' => '总限制',
        'active' => '启用',
        'enable' => '启用礼品卡',
        'link' => '分享链接',
        'pending' => '付款尚未完成, 余额可能暂时不会更新.',
    ],

    'discounts' => [
        'title' => '折扣',
        'edit' => '编辑折扣 :discount',
        'create' => '创建折扣',

        'global' => '是否在所有店铺激活折扣？',
        'active' => '激活',
        'enable' => '启用折扣',
        'restricted' => '限制此折扣仅限某些角色',
    ],

    'packages' => [
        'title' => '商品',
        'edit' => '编辑商品 :package',
        'create' => '创建商品',

        'every' => '所有',
        'after' => '之后',

        'updated' => '商品已更新.',

        'variables' => '自定义变量',
        'files' => 'Downloadable files',
        'role' => '商品到期后要设置的角色',
        'money' => '购买后给予用户的金额',
        'has_giftcard' => '购买后创建礼品卡并赠送给用户',
        'giftcard_balance' => '礼品卡金额',
        'giftcard_fixed' => '金额',
        'giftcard_dynamic' => '商品价格',
        'command' => '指令不能以 <code>/</code> 开头. 您可以使用 <code>{player}</code> 代替玩家名称. 对于 Steam 游戏, 您还可以使用 <code>{steam_id}</code> 与 <code>{steam_id_32}</code>. 其他可用的占位符: :placeholders',
        'has_user_limit' => '为该商品增加每位用户的个人购买限额',
        'has_global_limit' => '为该套餐添加全局购买限额',
        'limit_period' => '限制期限',
        'limits_no_expired' => '计算购买限额时排除过期商品',
        'no_period' => '无期限',
        'custom_price' => '允许用户自行选择要支付的价格 (商品价格将是最低价格)',
        'enable_quantity' => '启用数量',

        'billing' => '账单类型',
        'billing_period' => '计费周期',
        'one_off' => '一次性付款',
        'subscription' => '自动续订订阅',
        'subscription_info' => '确保您的支付网关支持订阅。创建订阅后，用户将以相同的价格付费，直至取消订阅（首次付款时的任何折扣都将应用于下一次付款）.',
        'expiring' => '到期的一次性付款',
        'expiring_info' => '商品将在指定期限后自动删除.',
        'scheduler' => '您必须设置 CRON 任务才能使用订阅，更多信息请参阅 <a href="https://azuriom.com/docs/faq" target="_blank" rel="noopener norefferer">FAQ</a>.',

        'create_category' => '创建分类',
        'create_package' => '创建商品',

        'enable' => '启用此商品',
    ],

    'commands' => [
        'online' => '在执行指令前需要玩家在线 (需要 AzLink)',
        'offline' => '直接执行命令, 不论玩家是否在线',
        'servers' => '您需要添加至少一个服务器才能创建指令.',

        'trigger' => '指令触发器',
        'command' => '指令',
        'condition' => '执行指令的条件',

        'triggers' => [
            'purchase' => '刚购买',
            'expiration' => '过期后',
            'refund' => '交易已退款',
            'chargeback' => '拒付',
            'renewal' => '订阅续期',
        ],
    ],

    'gateways' => [
        'title' => '网关',
        'edit' => '编辑支付网关 :gateway',
        'create' => '添加支付网关',

        'current' => '当前支付网关',
        'add' => '添加新支付网关',
        'info' => '如果您在使用 Cloudflare 或 防火墙 时有遇到了支付相关的问题，请参见 <a href="https://azuriom.com/docs/faq" target="_blank" rel="noopener norefferer">常见问题</a>',

        'country' => '国家',
        'sandbox' => '沙盒',
        'api-key' => 'API 密钥',
        'token' => 'Access Token',
        'public-key' => '公共密钥',
        'private-key' => '私钥',
        'secret-key' => '私钥',
        'endpoint-secret' => '签名密钥',
        'service-id' => '服务 ID',
        'client-id' => '客户端 ID',
        'merchant-id' => '商户 ID',
        'project-id' => '项目 ID',
        'webhook_id' => 'Webhook ID',
        'website_id' => '站点 ID',
        'env' => '系统环境',

        'subscription' => '该支付网关支持自动续订.',
        'no_subscription' => '该支付网关不支持自动续订.',

        'paypal_email' => 'PayPal 邮箱地址',
        'paypal_info' => '请确保输入 PayPal 账户的 <strong>主</strong>电子邮件地址。',
        'paypal_checkout' => '在 PayPal 仪表板上的 API 应用程序中，创建一个 URL 为 <code>:url</code> 并且选择事件 <code>:events</code>.',
        'stripe_info' => '在 Stripe 仪表板上，您需要将 webhook URL 设置为 <code>:url</code> 并选择事件 <code>:events</code>.',
        'paymentwall_info' => '在 PaymentWall 仪表板上，您需要将 pingbackURL 设置为 <code>:url</code>',
        'xsolla' => '在 Xsolla 仪表盘上，您需要将 webhook URL 设置为 <code>:url</code>， 在“支付站”设置中启用\'交易外部ID\'，测试网络钩子，然后在“支付站”设置中启用\'结帐\'功能。',
        'skrill_email' => 'Skrill 电子邮件地址',
        'skrill_secret' => '密文',
        'skrill_info' => '网站 ID 和密文可在 Skrill 面板的 "开发人员设置 "下找到。',
        'mercadopago' => 'The Mercado Pago credentials must be for the <strong>Checkout Pro</strong> integration.',

        'enable' => '启用网关',
    ],

    'payments' => [
        'title' => '交易',
        'show' => '订单 #:payment',

        'info' => '交易信息',
        'items' => '已购买物品',

        'card' => '商店交易',

        'status' => [
            'pending' => '待支付',
            'expired' => '已过期',
            'chargeback' => '拒付',
            'completed' => '已完成',
            'refunded' => '已退款',
            'error' => '错误',
        ],
    ],

    'purchases' => [
        'title' => '购买',
    ],

    'subscriptions' => [
        'title' => '订阅',
        'show' => '订阅 #:subscription',

        'info' => '订阅信息',
        'error' => '要继续使用, 您必须取消相关订阅并等待其到期.',
        'setup' => 'Subscription package can be set up in a package settings, just under the price field.',

        'status' => [
            'active' => '活跃',
            'canceled' => '已取消',
            'expired' => '已过期',
        ],
    ],

    'settings' => [
        'title' => '店铺设置',
        'enable_home' => '启用商店主页',
        'home_message' => '主页消息',
        'use_site_money' => '启用使用网站货币购买',
        'use_site_money_info' => '如果启用，商店中的商品只能使用网站货币购买。 为了让用户能够购买网站货币，您需要在商店中设置报价。',
        'webhook' => 'Discord Webhook URL',
        'webhook_info' => 'When an user make a payment, it will create a notification on this webhook. Leave empty to disable.',
        'commands' => '全局命令',
        'recent_payments' => '在侧边栏显示的最近交易的数量限制 (设置为 0 表示禁用)',
        'display_amount' => '在近期交易与最佳客户中显示消费金额',
        'top_customer' => '在侧边栏显示每月消费最多的玩家',

        'terms_required' => '要求用户在购买之前接受服务条款',
        'terms' => '服务条款',
        'terms_info' => '使用 Markdown 格式的链接, 例如: <code>我接受商店 [服务条款](https://example.com/terms).</code>',
    ],

    'variables' => [
        'title' => '变量',
        'edit' => '编辑变量 :variable',
        'create' => '创建变量',

        'info' => '变量是可以添加到商品的自定义字段。 在购买商品时，它们可以用来向用户获取更多信息。',

        'name' => '变量的内部名称, 创建后不可更改.',
        'required' => '该变量为必填变量',
        'options' => '选项',

        'text' => '文本',
        'number' => '数字',
        'email' => '电子邮箱地址',
        'checkbox' => '勾选框',
        'dropdown' => '下拉框',
    ],

    'logs' => [
        'shop-gateways' => [
            'created' => '创建网关 #:id',
            'updated' => '更新网关 #:id',
            'deleted' => '已删除网关 #:id',
        ],

        'shop-packages' => [
            'created' => '已创建商品 #:id',
            'updated' => '已更新商品 #:id',
            'deleted' => '已删除商品 #:id',
        ],

        'shop-offers' => [
            'created' => '创建的报价 #:id',
            'updated' => '更新报价 #:id',
            'deleted' => '已删除报价 #:id',
        ],

        'shop-giftcards' => [
            'used' => '使用了礼品卡 #:id (:amount)',
        ],

        'settings' => 'Updated shop settings',
    ],

    'statistics' => [
        'title' => '统计',
        'total' => '总计',
        'recent' => '最近交易',
        'count' => '交易数',
        'estimated' => '估计收入',
        'month' => '本月交易',
        'month_estimated' => '本月预计收入',
    ],

];
