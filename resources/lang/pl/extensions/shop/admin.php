<?php

return [
    'nav' => [
        'title' => 'Sklep',
        'settings' => 'Ustawienia',
        'packages' => 'Pakiety',
        'gateways' => 'Bramki',
        'offers' => 'Oferty',
        'coupons' => 'Kupony',
        'giftcards' => 'Karty podarunkowe',
        'discounts' => 'Zniżki',
        'payments' => 'Płatności',
        'subscriptions' => 'Subskrypcje',
        'variables' => 'Zmienne',
        'purchases' => 'Zakupy',
        'statistics' => 'Statystyki',
    ],

    'permissions' => [
        'settings' => 'Zarządzaj ustawieniami sklepu',
        'packages' => 'Zarządzaj pakietami i kategoriami sklepów',
        'gateways' => 'Zarządzaj bramkami płatności sklepu',
        'promotions' => 'Zarządzaj kuponami i rabatami w sklepie',
        'giftcards' => 'Zarządzaj kartami podarunkowymi sklepu',
        'payments' => 'Tworzenie i przeglądanie płatności/zakupów i subskrypcji w sklepie',
    ],

    'categories' => [
        'title' => 'Kategorie',
        'edit' => 'Edytuj kategorię :category',
        'create' => 'Utwórz kategorię',

        'parent' => 'Kategoria nadrzędna',
        'delete_error' => 'Kategoria z pakietami nie może zostać usunięta.',

        'cumulate' => 'Skumulowane zakupy w tej kategorii',
        'cumulate_info' => 'Użytkownicy, którzy już kupili pakiet w tej kategorii, otrzymają zniżkę i zapłacą różnicę tylko przy zakupie droższego pakietu.',
        'cumulate_strict' => 'Uniemożliwienie użytkownikom zakupu tańszych pakietów niż te już zakupione w tej kategorii.',
        'single_purchase' => 'Ograniczenie użytkownika do zakupu pojedynczego pakietu z tej kategorii.',
        'enable' => 'Włącz kategorię',
    ],

    'offers' => [
        'title' => 'Oferty',
        'edit' => 'Edytuj ofertę :offer',
        'create' => 'Utwórz ofertę',

        'enable' => 'Włącz tę ofertę',
    ],

    'coupons' => [
        'title' => 'Kupony',
        'edit' => 'Edytuj kupon :coupon',
        'create' => 'Utwórz kupon',

        'global' => 'Czy kupon powinien być aktywny w całym sklepie?',
        'cumulate' => 'Pozwól na korzystanie z tego kuponu z innymi kuponami',
        'user_limit' => 'Limit użytkowników',
        'global_limit' => 'Limit globalny',
        'active' => 'Aktywny',
        'usage' => 'Poniżej limitu użycia',
        'enable' => 'Włącz kupon',
    ],

    'giftcards' => [
        'title' => 'Karty podarunkowe',
        'edit' => 'Edytuj kartę podarunkową :giftcard',
        'create' => 'Utwórz kartę podarunkową',

        'global_limit' => 'Limit globalny',
        'active' => 'Aktywny',
        'enable' => 'Włącz kartę podarunkową',
        'link' => 'Link do udostępnienia',
        'pending' => 'Płatność jest w toku, saldo może nie być jeszcze zaktualizowane.',
    ],

    'discounts' => [
        'title' => 'Zniżki',
        'edit' => 'Edytuj rabat :discount',
        'create' => 'Utwórz rabat',

        'global' => 'Czy zniżka powinna być aktywny we wszystkich sklepach?',
        'active' => 'Aktywny',
        'enable' => 'Włącz zniżkę',
        'restricted' => 'Ogranicz dostęp do tego forum tylko do pewnych ról',
    ],

    'packages' => [
        'title' => 'Pakiety',
        'edit' => 'Edytuj pakiet :package',
        'create' => 'Utwórz pakiet',

        'every' => 'każdy',
        'after' => 'po',

        'updated' => 'Pakiety zostały zaktualizowane.',

        'variables' => 'Zmienne niestandardowe',
        'files' => 'Pliki do pobrania',
        'role' => 'Rola do ustawiania po wygaśnięciu pakietu',
        'money' => 'Pieniądze do przekazania użytkownikowi po zakupie',
        'has_giftcard' => 'Utwórz kartę podarunkową po dokonaniu zakupu i przekaż ją użytkownikowi.',
        'giftcard_balance' => 'Saldo karty podarunkowej',
        'giftcard_fixed' => 'Stała kwota',
        'giftcard_dynamic' => 'Cena pakietu',
        'command' => 'Polecenie nie może zaczynać się od <code>/</code>. Możesz użyć <code>{player}</code> aby użyć nazwy gracza. W grach Steam możesz również użyć <code>{steam_id}</code> i <code>{steam_id_32}</code>.',
        'has_user_limit' => 'Dodaj indywidualny limit zakupów dla użytkownika dla tego pakietu',
        'has_global_limit' => 'Dodaj globalny limit zakupów dla tego pakietu',
        'limit_period' => 'Okres przedawnienia',
        'limits_no_expired' => 'Wyklucz wygasłe pakiety przy obliczaniu limitów zakupów',
        'no_period' => 'Brak okresu',
        'custom_price' => 'Umożliwienie użytkownikowi wyboru ceny do zapłaty (cena pakietu będzie wówczas ceną minimalną).',
        'enable_quantity' => 'Włącz ilość',

        'billing' => 'Typ rozliczenia',
        'billing_period' => 'Okres rozliczeniowy',
        'one_off' => 'Płatność jednorazowa',
        'subscription' => 'Subskrypcja z automatycznym odnowieniem',
        'subscription_info' => 'Upewnij się, że Twoja bramka płatności obsługuje subskrypcje. Po utworzeniu subskrypcji użytkownik będzie obciążany tą samą ceną do momentu anulowania subskrypcji (wszelkie zniżki aktywne podczas pierwszej płatności zostaną zastosowane do kolejnych płatności).',
        'expiring' => 'Jednorazowa płatność z wygaśnięciem',
        'expiring_info' => 'Produkt zostanie automatycznie usunięty po upływie określonego czasu.',
        'scheduler' => 'Musisz skonfigurować zadania CRON, aby korzystać z subskrypcji, zobacz <a href="https://azuriom.com/docs/faq" target="_blank" rel="noopener norefferer">FAQ</a> , aby uzyskać więcej informacji.',

        'create_category' => 'Utwórz kategorię',
        'create_package' => 'Utwórz pakiet',

        'enable' => 'Włącz ten pakiet',
    ],

    'commands' => [
        'online' => 'Poczekaj, aż gracz będzie online przed wykonaniem polecenia (wymaga AzLink)',
        'offline' => 'Wykonaj polecenie bezpośrednio, niezależnie od tego, czy gracz jest online czy offline',
        'servers' => 'Musisz dodać co najmniej jeden serwer aby utworzyć polecenie.',

        'trigger' => 'Wyzwalacz polecenia',
        'command' => 'Komenda',
        'condition' => 'Warunek wykonania polecenia',

        'triggers' => [
            'purchase' => 'Początkowy zakup',
            'expiration' => 'Po wygaśnięciu',
            'refund' => 'Płatność zwrócona',
            'chargeback' => 'Obciążenie zwrotne',
            'renewal' => 'Odnowienie subskrypcji',
        ],
    ],

    'gateways' => [
        'title' => 'Bramki',
        'edit' => 'Edytuj bramę :gateway',
        'create' => 'Dodaj bramę',

        'current' => 'Bieżące bramy',
        'add' => 'Dodaj nową bramę',
        'info' => 'Jeśli masz problemy z płatnościami podczas korzystania z Cloudflare lub zapory, spróbuj wykonać kroki w <a href="https://azuriom.com/docs/faq" target="_blank" rel="noopener norefferer">FAQ</a>.',

        'country' => 'Kraj',
        'sandbox' => 'Sandbox',
        'api-key' => 'Klucz API',
        'token' => 'Token dostępu',
        'public-key' => 'Klucz publiczny',
        'private-key' => 'Prywatny klucz',
        'secret-key' => 'Tajny klucz',
        'endpoint-secret' => 'Signing Secret',
        'service-id' => 'Identyfikator usługi',
        'client-id' => 'Identyfikator klienta',
        'merchant-id' => 'Identyfikator sprzedawcy',
        'project-id' => 'Identyfikator projektu',
        'webhook_id' => 'Identyfikator webhooka',
        'website_id' => 'ID strony internetowej',
        'env' => 'Środowisko',

        'subscription' => 'Ta bramka płatności obsługuje automatyczne odnawianie subskrypcji.',
        'no_subscription' => 'Ta bramka płatności nie obsługuje automatycznego odnawiania subskrypcji.',

        'paypal_email' => 'Adres e-mail konta PayPal',
        'paypal_info' => 'Upewnij się, że wprowadziłeś <strong>primary</strong> adres e-mail konta PayPal.',
        'paypal_checkout' => 'Na pulpicie nawigacyjnym PayPal, w aplikacji API, utwórz webhook z adresem URL <code>:url</code> and select the events <code>:events</code>.',
        'stripe_info' => 'Na pulpicie nawigacyjnym Stripe musisz ustawić adres URL webhooka na <code>:url</code> and select the events: <code>:events</code>.',
        'paymentwall_info' => 'Na panelu PaymentWall musisz ustawić adres URL pingback na <code>:url</code>.',
        'xsolla' => 'Na panelu Xsolla musisz ustawić adres URL webhooka na <code>:url</code>, włączyć „Transaction external ID” w ustawieniach „Pay station”, przetestować webhooki, a następnie włączyć „Checkout” w „Pay Station” \'ustawienia.',
        'skrill_email' => 'Skrill E-mail',
        'skrill_secret' => 'Secret Word',
        'skrill_info' => 'Identyfikator witryny i Secret Word można znaleźć na pulpicie nawigacyjnym Skrill w sekcji „Ustawienia programisty”.',
        'mercadopago' => 'Poświadczenia Mercado Pago muszą dotyczyć integracji <strong>Checkout Pro</strong>.',

        'enable' => 'Włącz bramkę',
    ],

    'payments' => [
        'title' => 'Płatności',
        'show' => 'Płatność #:payment',

        'info' => 'Informacja o płatności',
        'items' => 'Zakupione przedmioty',

        'card' => 'Płatności w sklepie',

        'status' => [
            'pending' => 'Oczekujące',
            'expired' => 'Wygasły',
            'chargeback' => 'Chargeback',
            'completed' => 'Zakończone',
            'refunded' => 'Zwrócono',
            'error' => 'Błąd',
        ],
    ],

    'purchases' => [
        'title' => 'Zakupy',
    ],

    'subscriptions' => [
        'title' => 'Subskrypcje',
        'show' => 'Subskrypcja #:subscription',

        'info' => 'Informacje o subskrypcji',
        'error' => 'Aby kontynuować, należy anulować powiązane subskrypcje i poczekać na ich wygaśnięcie.',
        'setup' => 'Pakiet subskrypcji można skonfigurować w ustawieniach pakietu, tuż pod polem ceny.',

        'status' => [
            'active' => 'Aktywny',
            'canceled' => 'Anulowano',
            'expired' => 'Wygasł',
        ],
    ],

    'settings' => [
        'title' => 'Ustawienia sklepu',
        'enable_home' => 'Włącz stronę główną sklepu',
        'home_message' => 'Wiadomość powitalna',
        'use_site_money' => 'Włącz zakupy z walutą witryny.',
        'use_site_money_info' => 'Po włączeniu pakietów w sklepie można kupić tylko za pieniądze na stronie internetowej. Aby użytkownicy mogli zasilić swoje konto, możesz skonfigurować oferty w sklepie.',
        'webhook' => 'Adres URL webhooka Discord',
        'webhook_info' => 'Gdy użytkownik dokona płatności, utworzy powiadomienie na tym webhooku. Pozostaw puste, aby wyłączyć.',
        'commands' => 'Globalne komendy',
        'recent_payments' => 'Limit ostatnich płatności do wyświetlenia na pasku bocznym (ustaw 0 aby wyłączyć)',
        'display_amount' => 'Wyświetlaj kwotę wydatków w ostatnich płatnościach i najlepszych klientach',
        'top_customer' => 'Wyświetlaj najlepszego miesięcznego klienta na pasku bocznym',

        'terms_required' => 'Wymagaj od użytkowników akceptowania warunków usługi przed zakupem',
        'terms' => 'Warunki Korzystania z Usługi',
        'terms_info' => 'Na przykład linki w formacie Markdown: <code>I accept the [terms of service](https://example.com/terms) of the shop.</code>',
    ],

    'variables' => [
        'title' => 'Zmienne',
        'edit' => 'Edytuj zmienną :variable',
        'create' => 'Stwórz zmienną',

        'info' => 'Zmienne to niestandardowe pola, które można dodawać do pakietów. Można ich użyć, aby poprosić użytkownika o dodatkowe informacje podczas zakupu pakietu.',

        'name' => 'Wewnętrzna nazwa zmiennej, której nie można zmienić po utworzeniu.',
        'required' => 'Czy ta zmienna powinna być wymagana?',
        'options' => 'Opcje',

        'text' => 'Tekst',
        'number' => 'Numer',
        'email' => 'E-mail',
        'checkbox' => 'Pole wyboru',
        'dropdown' => 'Rozwijana lista',
    ],

    'logs' => [
        'shop-gateways' => [
            'created' => 'Utworzono bramkę #:id',
            'updated' => 'Zaktualizowano bramkę #:id',
            'deleted' => 'Usunięto bramkę #:id',
        ],

        'shop-packages' => [
            'created' => 'Utworzono pakiet #:id',
            'updated' => 'Zaktualizowano pakiet #:id',
            'deleted' => 'Usunięto pakiet #:id',
        ],

        'shop-offers' => [
            'created' => 'Stworzono oferte #:id',
            'updated' => 'Zaktualizowano oferte #:id',
            'deleted' => 'Usunięto ofertę #:id',
        ],

        'shop-giftcards' => [
            'used' => 'Użyta karta podarunkowa #:id (:amount)',
        ],

        'settings' => 'Zaktualizowano ustawienia sklepu',
    ],

    'statistics' => [
        'title' => 'Statystyki',
        'total' => 'Łącznie',
        'recent' => 'Ostatnie płatności',
        'count' => 'Liczba płatności',
        'estimated' => 'Szacowane zarobki',
        'month' => 'Płatności w tym miesiącu',
        'month_estimated' => 'Szacowane zarobki w tym miesiącu',
    ],

];
