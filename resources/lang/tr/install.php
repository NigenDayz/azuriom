<?php

return [
    'title' => 'Kurulum',

    'welcome' => 'Azuriom <strong>yeni nesil</strong> oyun yönetim sistemi web sitesidir. <strong>Ücretsiz</strong> ve <strong>açık kaynak kodludur</strong>. Diğer oyun yönetim sistemlerine kıyasla <strong>modern, güvenilir ve hızlıdır</strong> ve böylece <strong>olabilecek en iyi web deneyimini</strong> yaşayabilirsiniz.',

    'back' => 'Geri Dön',

    'requirements' => [
        'php' => 'PHP :version veya daha yükseği',
        'writable' => 'İzin yaz',
        'rewrite' => 'URL yönlendirmesi aktif',
        'extension' => 'Eklenti :extension',
        'function' => 'Fonksiyon :function aktifleştirildi',
        '64bit' => '64-bit PHP',

        'refresh' => 'Gereksinimleri yenileyin',
        'success' => 'Azuriom konfigüre edilmeye hazır!',
        'missing' => 'Sunucunuz Azuriom\'u yüklemek için gerekli gereksinimlere sahip değil.',

        'help' => [
            'writable' => 'İzin yazabilmek için <code>:command</code> komutunu deneyebilirsin.',
            'rewrite' => 'URL yönlendirmesini aktifleştirmek için <a href="https://azuriom.com/docs/installation" target="_blank" rel="noopener noreferrer">dokümantasyon</a> sayfasındaki talimatları izleyebilirsin.',
            'htaccess' => '<code>.htaccess</code> veya <code>public/.htaccess</code> dosyası bulunamadı. Gizli dosyaları etkinleştirdiğinizden ve dosyanın mevcut olduğundan emin olun.',
            'extension' => 'Eksik PHP eklentilerini yüklemek için şu komutu deneyebilirsiniz: <code>{command}</code>. <br>Tamamlandığında, Apache veya Nginx\'i yeniden başlatın.',
            'function' => 'Bu fonksiyon <code>disable_functions</code> değerini php.ini dosyası üzerinde düzenleyerek aktif edilebilir.',
        ],
    ],

    'database' => [
        'title' => 'Veritabanı',

        'type' => 'Tip',
        'host' => 'Makine',
        'port' => 'Port',
        'database' => 'Veritabanı',
        'user' => 'Kullanıcı',
        'password' => 'Şifre',

        'warn' => 'Bu veritabanı türü tavsiye edilmez ve yalnızca başka türlü yapılması mümkün olmadığında kullanılmalıdır.',
    ],

    'game' => [
        'title' => 'Oyun',

        'locale' => 'Yerel',

        'warn' => 'Dikkat edin, kurulum tamamlandıktan sonra Azuriom\'u tamamen yeniden yüklemeden oyunu veya giriş yöntemini değiştirmek mümkün olmayacak!',

        'install' => 'Yükle',

        'user' => [
            'title' => 'Yönetici Hesabı',

            'name' => 'İsim',
            'email' => 'E-posta Adresi',
            'password' => 'Parola',
            'password_confirm' => 'Şifreyi Onayla',
        ],

        'minecraft' => [
            'premium' => 'Microsoft hesabı ile giriş yapın (en güvenlisi ancak Minecraft\'ı satın almış olmanız gerekir)',
        ],

        'steam' => [
            'profile' => 'Steam Profil Bağlantısı',
            'profile_info' => 'Bu Steam kullanıcısı sitede yönetici olacaktır.',

            'key' => 'Steam API Anahtarı',
            'key_info' => 'Steam API Anahtarınızı <a href="https://steamcommunity.com/dev/apikey" target="_blank" rel="noopener noreferrer">bağlantı</a> üzerinden bulabilirsiniz.',
        ],

        'epic' => [
            'id' => 'Hesabınızın Epic ID\'si',
            'id_info' => 'Bu kullanıcı site üzerinde admin olacak. Epic ID\'nizi <a href=\'https://www.epicgames.com/account/personal\' target=\'_blank\' rel=\'noopener noreferrer\'>Epic Games hesabınız</a> üzerinden bulabilirsiniz.',

            'client_id' => 'Epic Games Client ID',
            'client_secret' => 'Epic Games Client Secret',

            'steps' => 'Client ID ve Client Secret’ı almak için şu adımları izleyin:',
            'step_1' => '<a href=\'https://dev.epicgames.com/portal/\' target=\'_blank\' rel=\'noopener noreferrer\'>Epic Games Developer Portal</a>\'a gidin ve yeni bir ürün oluşturun.',
            'step_2' => 'Ürün ayarlarında, \'Clients\' sekmesinde, \'GameClient\' politika türü ile yeni bir client oluşturun ve şu yönlendirme URL\'sini ekleyin: <code>:redirect</code>',
            'step_3' => 'Client ID ve Client Secret bilgilerini client ayarlarında (client\'ın sağ tarafındaki Düzenle seçeneği) bulabilirsiniz.',
        ],
    ],

    'success' => [
        'thanks' => 'Azuriom\'u seçtiğiniz için teşekkürler!',
        'success' => 'Web siteniz başarıyla kuruldu, artık web sitenizi kullanabilir ve harika bir şeyler yapabilirsiniz!',
        'go' => 'Başlarken',
        'support' => 'Azuriom\'u ve sunduğumuz çalışmaları takdir ediyorsanız, lütfen <a href="https://azuriom.com/support-us" target="_blank" rel="noopener noreferrer">bizi desteklemeyi</a> unutmayın.',
    ],
];
