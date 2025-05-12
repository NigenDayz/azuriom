<?php

return [
    'title' => 'Mağaza',
    'welcome' => 'Mağazaya Hoş Geldiniz!',

    'buy' => 'Satın Al',

    'free' => 'Ücretsiz',

    'periods' => [
        'hours' => 'saat',
        'days' => 'günler',
        'weeks' => 'hafta',
        'months' => 'ay',
        'years' => 'yıl',
    ],

    'fields' => [
        'balance' => 'Bakiye',
        'category' => 'Kategori',
        'code' => 'Kod',
        'commands' => 'Komutlar',
        'currency' => 'Para Birimi',
        'discount' => 'İndirim',
        'expire_date' => 'Son kullanma tarihi',
        'gateways' => 'Geçitler',
        'global_limit' => 'Global satın alma limiti',
        'original_balance' => 'Orijinal Bakiye',
        'package' => 'Paket',
        'packages' => 'Paketler',
        'payment_id' => 'Ödeme Kimliği',
        'payments' => 'Ödemeler',
        'price' => 'Ücret',
        'quantity' => 'Miktar',
        'renewal_date' => 'Yenileme tarihi',
        'required' => 'Gerekli',
        'required_packages' => 'Gerekli paketler',
        'required_roles' => 'Gerekli rol',
        'role' => 'Satın aldıktan sonra ayarlanacak rol',
        'start_date' => 'Başlangıç tarihi',
        'subscription' => 'Abonelik',
        'subscription_id' => 'Abonelik ID’si',
        'total' => 'Toplam',
        'user_id' => 'Kullanıcı Kimliği',
        'user_limit' => 'Kullanıcı satın alma limiti',
    ],

    'actions' => [
        'subscribe' => 'Abone Ol',
        'manage' => 'Aboneliği yönet',
        'move' => 'Taşı',
    ],

    'goal' => [
        'title' => 'Aylık hedef',
        'progress' => ':count% tamamlandı',
    ],

    'recent' => [
        'title' => 'Son Ödemeler',
        'empty' => 'Son ödemeler yok',
    ],

    'top' => [
        'title' => 'En iyi müşteri',
    ],

    'cart' => [
        'title' => 'Sepet',
        'success' => 'Satın alma işleminiz başarıyla tamamlanmıştır.',
        'guest' => 'Satın almak için giriş yapmalısınız.',
        'empty' => 'Sepetiniz boş.',
        'checkout' => 'Ödeme  yap',
        'clear' => 'Sepeti boşalt',
        'pay' => 'Öde',
        'back' => 'Mağazaya geri dön',
        'total' => 'Toplam :total',
        'payable_total' => 'Ödenecek toplam tutar: :total',
        'credit' => 'Kredi',

        'confirm' => [
            'title' => 'Ödeme?',
            'price' => 'Bu ürünü :price fiyatına almak istediğine emin misin?',
        ],

        'errors' => [
            'money' => 'Satın almayı gereçekleştirmek için yeterli bakiyeye sahip değilsiniz.',
            'execute' => 'Ödeme sırasında beklenmedik bir hata oluştu, satın alma işleminiz iade edildi.',
        ],
    ],

    'coupons' => [
        'title' => 'Kuponlar',
        'add' => 'Bir kupon ekle',
        'error' => 'Bu kupon mevcut değil, süresi dolmuş veya artık kullanılamaz.',
        'cumulate' => 'Bu kuponu başka bir kuponla birlikte kullanamazsınız.',
    ],

    'payment' => [
        'title' => 'Ödeme',
        'manual' => 'Manuel Ödeme',

        'empty' => 'Şu anda mevcut ödeme yöntemi bulunamadı.',

        'info' => '#:id\'yi :website üzerinden satın al',
        'subscription' => ':package - Abonelik (Kullanıcı #:user)',
        'error' => 'Ödeme gerçekleştirilmedi.',
        'giftcards' => 'Hediye Kartları',

        'success' => 'Ödeme tamamlandığında, satın alma işleminizi bir dakikadan kısa bir süre içinde oyun içinde alacaksınız.',
        'pending' => 'Ödeme bekleniyor, ödeme onaylandıktan sonra satın aldığınız ürün oyunda teslim edilecek.',

        'webhook' => 'Mağazada yeni ödeme',
        'webhook_info' => 'Toplam: :total, kimlik: :id (:gateway)',
        'webhook_chargeback' => 'Mağazada ödeme geri çekimi',
        'webhook_refund' => 'Mağazada ödeme iadesi',
    ],

    'categories' => [
        'empty' => 'Bu kategori boş.',
    ],

    'packages' => [
        'limit' => 'Bu paketler için mümkün olan maksimum tutarı satın aldınız.',
        'requirements' => 'Bu paketi satın almak için gerekli koşullara sahip değilsiniz.',
        'cumulate' => 'Bu paketi aynı kategoriden başka bir paketle birlikte satın alamazsınız.',
        'file' => ':file dosyasını indirmek için buraya tıklayın',
    ],

    'offers' => [
        'gateway' => 'Ödeme türü',
        'amount' => 'Miktar',

        'empty' => 'Şu anda mevcut teklif yok.',
    ],

    'profile' => [
        'payments' => 'Ödemeleriniz',
        'subscriptions' => 'Abonelikleriniz',
        'money' => 'Bakiye: :balance',
    ],

    'giftcards' => [
        'title' => 'Hediye kartları',
        'error' => 'Bu hediye kartı mevcut değildir, süresi dolmuştur veya artık kullanılamaz.',
        'add' => 'Hediye kartı ekle',
        'notification' => 'Bir hediye kartı aldın, kart kodu: :code (:balance:).',
        'pending' => 'Bu hediye kartı için bir ödeme başlatıldı. Ödemeyi tamamlayın veya birkaç dakika bekleyin.',
    ],
];
