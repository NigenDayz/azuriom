<?php

return [
    'nav' => [
        'title' => 'Mağaza',
        'settings' => 'Ayarlar',
        'packages' => 'Paketler',
        'gateways' => 'Geçitler',
        'offers' => 'Teklifler',
        'coupons' => 'Kuponlar',
        'giftcards' => 'Hediye Kartları',
        'discounts' => 'İndirimler',
        'payments' => 'Ödemeler',
        'subscriptions' => 'Abonelikler',
        'variables' => 'Değişkenler',
        'purchases' => 'Satın Alımlar',
        'statistics' => 'İstatistikler',
    ],

    'permissions' => [
        'settings' => 'Mağaza ayarlarını yönet',
        'packages' => 'Mağaza paketlerini ve kategorilerini yönet',
        'gateways' => 'Mağaza ödeme ağ geçitlerini yönet',
        'promotions' => 'Mağaza kuponlarını ve indirimlerini yönet',
        'giftcards' => 'Mağaza hediye kartlarını yönet',
        'payments' => 'Mağaza ödemelerini/satın alımları ve abonelikleri oluştur ve görüntüle',
    ],

    'categories' => [
        'title' => 'Kategoriler',
        'edit' => 'Kategoriyi düzenle :category',
        'create' => 'Kategori oluştur',

        'parent' => 'Ana kategori',
        'delete_error' => 'Paketleri olan bir kategori silinemez.',

        'cumulate' => 'Bu kategorideki satın alımları toplayın',
        'cumulate_info' => 'Bu kategoride daha önce bir paket satın almış olan kullanıcılar indirim alacak ve farkı yalnızca daha pahalı bir paket satın alırken ödeyeceklerdir.',
        'cumulate_strict' => 'Kullanıcıların bu kategoride zaten satın alınmış paketlerden daha ucuz bir paket satın almasını engelleyin',
        'single_purchase' => 'Kullanıcının bu kategoriden yalnızca bir paket satın almasını sınırla',
        'enable' => 'Kategoriyi etkinleştirin',
    ],

    'offers' => [
        'title' => 'Teklifler',
        'edit' => 'Teklifi düzenleyin :offer',
        'create' => 'Teklif oluştur',

        'enable' => 'Teklifi etkinleştirin',
    ],

    'coupons' => [
        'title' => 'Kuponlar',
        'edit' => 'Kuponu düzenleyin :coupon',
        'create' => 'Kupon oluştur',

        'global' => 'Kupon tüm mağazalarda aktif olmalı mı?',
        'cumulate' => 'Bu kuponu diğer kuponlarla birlikte kullanmasına izin ver',
        'user_limit' => 'Kullanıcı Limiti',
        'global_limit' => 'Genel Limit',
        'active' => 'Aktif',
        'usage' => 'Kullanım sınırının altında',
        'enable' => 'Kuponu etkinleştirin',
    ],

    'giftcards' => [
        'title' => 'Hediye Kartları',
        'edit' => 'Hediye kartını düzenle :giftcard',
        'create' => 'Hediye kartı oluşturun',

        'global_limit' => 'Genel Limit',
        'active' => 'Aktif',
        'enable' => 'Hediye kartını etkinleştirin',
        'link' => 'Paylaşılabilir bağlantı',
        'pending' => 'Bir ödeme beklemede, bakiye henüz güncellenmemiş olabilir.',
    ],

    'discounts' => [
        'title' => 'İndirimler',
        'edit' => 'İndirimi düzenleyin :discount',
        'create' => 'İndirim oluştur',

        'global' => 'İndirim tüm mağazalarda etkin olmalı mı?',
        'active' => 'Aktif',
        'enable' => 'İndirimi etkinleştirin',
        'restricted' => 'Bu indirimi yalnızca belirli rollerle kısıtlayın',
    ],

    'packages' => [
        'title' => 'Paketler',
        'edit' => 'Paketi düzenle :package',
        'create' => 'Paket oluştur',

        'every' => 'her',
        'after' => 'sonra',

        'updated' => 'Paketler güncellendi.',

        'variables' => 'Özel değişkenler',
        'files' => 'İndirilebilir dosyalar',
        'role' => 'Paket süresi dolduğunda atanacak rol',
        'money' => 'Satın alma işleminden sonra kullanıcıya verilecek para',
        'has_giftcard' => 'Satın alma işleminden sonra bir hediye kartı oluşturun ve kullanıcıya verin',
        'giftcard_balance' => 'Hediye kartı bakiyesi',
        'giftcard_fixed' => 'Sabit tutar',
        'giftcard_dynamic' => 'Paketin fiyatı',
        'command' => 'Komutlar <code>/</code> ile başlamamalı. Oyuncu ismi için <code>{player}</code>, Steam oyunları için ayrıca <code>{steam_id}</code> ve <code>{steam_id_32}</code> kullanılabilir. Kullanılabilir diğer yer tutucular şunlardır: :placeholders.',
        'has_user_limit' => 'Bu paket için kullanıcı başına bireysel satın alma limiti ekleyin',
        'has_global_limit' => 'Bu paket için genel bir satın alma limiti ekleyin',
        'limit_period' => 'Limit süresi',
        'limits_no_expired' => 'Satın alma limitlerini hesaplarken süresi dolan paketleri hariç tut',
        'no_period' => 'Dönem yok',
        'custom_price' => 'Kullanıcının ödeyeceği fiyatı seçmesine izin verin (paket fiyatı daha sonra minimum olacaktır)',
        'enable_quantity' => 'Miktarı etkinleştirin',

        'billing' => 'Fatura türü',
        'billing_period' => 'Fatura dönemi',
        'one_off' => 'Tek seferlik ödeme',
        'subscription' => 'Otomatik yenilemeli abonelik',
        'subscription_info' => 'Ödeme ağ geçidinizin abonelikleri desteklediğinden emin olun. Bir abonelik oluşturulduğunda, kullanıcı abonelik iptal edilene kadar aynı fiyatla ücretlendirilir (ilk ödeme sırasında etkin olan herhangi bir indirim sonraki ödemelere de uygulanacaktır).',
        'expiring' => 'Süresi dolan tek seferlik ödeme',
        'expiring_info' => 'Ürün, belirtilen süre sonunda otomatik olarak kaldırılacaktır.',
        'scheduler' => 'Abonelikleri kullanmak için CRON görevlerini ayarlamalısınız. Daha fazla bilgi için <a href="https://azuriom.com/docs/faq" target="_blank" rel="noopener noreferrer">SSS</a>\'ye bakın.',

        'create_category' => 'Kategori oluştur',
        'create_package' => 'Paket oluştur',

        'enable' => 'Bu paketi etkinleştir',
    ],

    'commands' => [
        'online' => 'Komutu çalıştırmadan önce oyuncunun çevrimiçi olmasını bekleyin (AzLink gerektirir)',
        'offline' => 'Oyuncu çevrimiçi olsun ya da olmasın, komutu doğrudan çalıştırın',
        'servers' => 'Bir komut oluşturmak için en az bir sunucu eklemeniz gerekir.',

        'trigger' => 'Komut tetikleyici',
        'command' => 'Komut',
        'condition' => 'Komutu çalıştırmak için koşul',

        'triggers' => [
            'purchase' => 'İlk Satın Alma',
            'expiration' => 'Son Kullanma Tarihinden Sonra',
            'refund' => 'Ödeme İade Edildi',
            'chargeback' => 'Geri ödeme',
            'renewal' => 'Abonelik Yenilemesi',
        ],
    ],

    'gateways' => [
        'title' => 'Geçitler',
        'edit' => 'Ödeme yöntemini düzenle :gateway',
        'create' => 'Ödeme yöntemi ekle',

        'current' => 'Şuanki ödeme yöntemi',
        'add' => 'Yeni bir ödeme yöntemi ekle',
        'info' => 'Cloudflare veya bir güvenlik duvarı kullanırken ödemelerle ilgili sorun yaşıyorsanız, <a href="https://azuriom.com/docs/faq" target="_blank" rel="noopener norefferer">SSS</a>\'deki adımları izlemeyi deneyin.',

        'country' => 'Ülke',
        'sandbox' => 'Test Modu',
        'api-key' => 'API anahtarı',
        'token' => 'Erişim Token\'ı',
        'public-key' => 'Genel Anahtar',
        'private-key' => 'Özel Anahtar',
        'secret-key' => 'Gizli Anahtar',
        'endpoint-secret' => 'Gizi imzalama',
        'service-id' => 'Servis Kimliği',
        'client-id' => 'İstemci Kimliği',
        'merchant-id' => 'Tüccar Kimliği',
        'project-id' => 'Proje Kimliği',
        'webhook_id' => 'Webhook ID',
        'website_id' => 'Web sitesi ID\'si',
        'env' => 'Çevre',

        'subscription' => 'Bu ödeme ağ geçidi, otomatik abonelik yenilemeyi destekler.',
        'no_subscription' => 'Bu ödeme ağ geçidi, otomatik abonelik yenilemeyi desteklemez.',

        'paypal_email' => 'PayPal E-posta Adresi',
        'paypal_info' => 'Lütfen PayPal hesabının <strong>ana</strong> e-posta adresini girdiğinizden emin olun.',
        'paypal_checkout' => 'PayPal panelinde, API uygulamanızda bir webhook oluşturun ve URL olarak <code>:url</code> girin. Etkinlik olarak şu olayları seçin: <code>:events</code>.',
        'stripe_info' => 'Stripe panelinde, webhook URL\'sini <code>:url</code> olarak ayarlamanız ve şu olayları seçmeniz gerekir: <code>:events</code>.',
        'paymentwall_info' => 'PaymentWall kontrol panelinde pingback URL\'sini <code>:url</code> olarak ayarlamanız gerekir.',
        'xsolla' => 'Xsolla kontrol panelinde webhook URL\'sini <code>:url</code> olarak ayarlamanız, \'Ödeme istasyonu\' ayarlarında \'İşlem harici kimliği\'ni etkinleştirmeniz, web kancalarını test etmeniz ve ardından \'Ödeme İstasyonu\' ayarlarında \'Ödeme\'yi etkinleştirmeniz gerekir.',
        'skrill_email' => 'Skrill E-posta Adresi',
        'skrill_secret' => 'Gizli Kelime',
        'skrill_info' => 'Web sitesi ID\'si ve Gizli Kelime, Skrill panelindeki \'Geliştirici Ayarları\' altında bulunabilir.',
        'mercadopago' => 'Mercado Pago kimlik bilgileri, <strong>Checkout Pro</strong> entegrasyonu için olmalıdır.',

        'enable' => 'Ödeme yöntemini etkinleştir',
    ],

    'payments' => [
        'title' => 'Ödemeler',
        'show' => 'Ödeme #:payment',

        'info' => 'Ödeme bilgileri',
        'items' => 'Satın alınan ürünler',

        'card' => 'Mağaza ödemeleri',

        'status' => [
            'pending' => 'Bekliyor',
            'expired' => 'Süresi doldu',
            'chargeback' => 'Geri ödeme',
            'completed' => 'Tamamlandı',
            'refunded' => 'İade edildi',
            'error' => 'Hata',
        ],
    ],

    'purchases' => [
        'title' => 'Satın Alımlar',
    ],

    'subscriptions' => [
        'title' => 'Abonelikler',
        'show' => 'Abonelik #:subscription',

        'info' => 'Abonelik bilgileri',
        'error' => 'Devam etmek için, ilişkili abonelikleri iptal etmeli ve sürelerinin dolmasını beklemelisiniz.',
        'setup' => 'Abonelik paketi, fiyat alanının hemen altındaki bir paket ayarında ayarlanabilir.',

        'status' => [
            'active' => 'Aktif',
            'canceled' => 'İptal Edildi',
            'expired' => 'Süresi Doldu',
        ],
    ],

    'settings' => [
        'title' => 'Mağaza ayarları',
        'enable_home' => 'Mağaza\'nın ana sayfasını aktifleştir',
        'home_message' => 'Ana Sayfa Mesajı',
        'use_site_money' => 'Bakiye ile satın alımı aktifleştir.',
        'use_site_money_info' => 'Etkinleştirildiğinde, mağazadaki paketler yalnızca web sitesi parasıyla satın alınabilir. Kullanıcıların hesaplarını kredilendirmeleri için mağazada teklifler oluşturabilirsiniz.',
        'webhook' => 'Discord Webhook URL\'si',
        'webhook_info' => 'Bir kullanıcı ödeme yaptığında, bu web kancasında bir bildirim oluşturacaktır. Devre dışı bırakmak için boş bırakın.',
        'commands' => 'Global komutlar',
        'recent_payments' => 'Kenar çubuğunda görüntülenecek son ödemeler sınırı (devre dışı bırakmak için 0 olarak ayarlayın)',
        'display_amount' => 'Son ödemelerdeki harcama tutarını ve en iyi müşteriyi görüntüleyin',
        'top_customer' => 'En yüksek aylık müşteriyi kenar çubuğunda gösterme',

        'terms_required' => 'Kullanıcıların satın almadan önce hizmet şartlarını kabul etmelerini zorunlu kılmak',
        'terms' => 'Hizmet Şartları',
        'terms_info' => 'Markdown formatında bağlantılar, örneğin: <code>Mağazanın [hizmet şartlarını](https://example.com/terms) kabul ediyorum.</code>',
    ],

    'variables' => [
        'title' => 'Değişkenler',
        'edit' => ':variable değişkenini düzenle',
        'create' => 'Değişken oluştur',

        'info' => 'Değişkenler, paketlere eklenebilen özel alanlardır. Bir kullanıcı bir paket satın alırken ek bilgi istemek için kullanılabilirler.',

        'name' => 'Değişkenin dahili adı, oluşturulduktan sonra değiştirilemez.',
        'required' => 'Bu değişken gerekli olmalı mı?',
        'options' => 'Seçenekler',

        'text' => 'Metin',
        'number' => 'Sayı',
        'email' => 'E-Posta',
        'checkbox' => 'Onay kutusu',
        'dropdown' => 'Açılır menü',
    ],

    'logs' => [
        'shop-gateways' => [
            'created' => 'Oluşturulan ödeme yöntemi #:id',
            'updated' => 'Güncellenen ödeme yöntemi #:id',
            'deleted' => 'Silinen ödeme yöntemi #:id',
        ],

        'shop-packages' => [
            'created' => 'Paket oluşturuldu #:id',
            'updated' => 'Paket güncellendi #:id',
            'deleted' => 'Paket silindi #:id',
        ],

        'shop-offers' => [
            'created' => 'Teklif oluşturuldu #:id',
            'updated' => 'Teklif güncellendi #:id',
            'deleted' => 'Teklif silindi #:id',
        ],

        'shop-giftcards' => [
            'used' => 'Kullanılan hediye kartı #:id (:amount)',
        ],

        'settings' => 'Mağaza ayarları güncellendi',
    ],

    'statistics' => [
        'title' => 'İstatistikler',
        'total' => 'Toplam',
        'recent' => 'Son ödemeler',
        'count' => 'Ödeme sayısı',
        'estimated' => 'Toplam kazanç',
        'month' => 'Bu ay içindeki ödemeler',
        'month_estimated' => 'Bu ayki tahmini kazançlar',
    ],

];
