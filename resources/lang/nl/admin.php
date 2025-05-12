<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Admin Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used on the admin dashboard
    |
    */

    'nav' => [
        'dashboard' => 'Dashboard',
        'settings' => [
            'heading' => 'Instellingen',
            'settings' => 'Instellingen',
            'global' => 'Globaal',
            'security' => 'Beveiliging',
            'performances' => 'Prestaties',
            'home' => 'Home',
            'auth' => 'Authenticatie',
            'mail' => 'Mail',
            'maintenance' => 'Onderhoud',
            'social' => 'Sociale Media links',
            'navbar' => 'Navigatiebalk',
            'servers' => 'Servers',
        ],

        'users' => [
            'heading' => 'Gebruikers',
            'users' => 'Gebruikers',
            'roles' => 'Rollen',
            'bans' => 'Bans',
        ],

        'content' => [
            'heading' => 'Inhoud',
            'pages' => 'Pagina\'s',
            'posts' => 'Berichten',
            'images' => 'Afbeeldingen',
            'redirects' => 'Omleidingen',
        ],

        'extensions' => [
            'heading' => 'Extensies',
            'plugins' => 'Plugins',
            'themes' => 'Thema\'s',
        ],

        'other' => [
            'heading' => 'Overig',
            'update' => 'Vernieuwen',
            'logs' => 'Logs',
        ],

        'profile' => [
            'profile' => 'Profiel',
        ],

        'back' => 'Ga terug naar de website',
        'support' => 'Ondersteuning',
        'documentation' => 'Documentatie',
    ],

    'delete' => [
        'title' => 'Verwijderen?',
        'description' => 'Weet je zeker dat je dit wilt verwijderen? Je kunt niet teruggaan!',
    ],

    'footer' => 'Mogelijk gemaakt door :azuriom &copy; :year. Paneel ontworpen door :startbootstrap.',

    /*
    |
    | Admin pages
    |
    */

    'dashboard' => [
        'title' => 'Dashboard',

        'users' => 'Gebruikers',
        'posts' => 'Berichten',
        'pages' => 'Pagina\'s',
        'images' => 'Afbeeldingen',

        'update' => 'Er is een nieuwe versie van Azuriom beschikbaar: :version',
        'http' => 'Uw website gebruikt geen https, u moet deze inschakelen en forceren voor uw veiligheid en voor de gebruikers.',
        'cloudflare' => 'Als u Cloudflare gebruikt, moet u de Cloudflare Support plugin installeren.',
        'recent_users' => 'Recente gebruikers',
        'active_users' => 'Actieve gebruikers',
        'emails' => 'E-mails zijn uitgeschakeld. Als een gebruiker zijn wachtwoord vergeet, kan hij het niet opnieuw instellen. U kunt e-mails inschakelen in de <a href=":url">e-mail instellingen</a>.',
    ],

    'settings' => [
        'index' => [
            'title' => 'Algemene instellingen',

            'name' => 'Sitenaam',
            'url' => 'Site URL',
            'description' => 'Websitebeschrijving',
            'meta' => 'Meta keywords',
            'meta_info' => 'De trefwoorden moeten gescheiden worden door een komma.',
            'favicon' => 'Favicon',
            'background' => 'Achtergrond',
            'logo' => 'Logo',
            'timezone' => 'Tijdzone',
            'locale' => 'Taal',
            'money' => 'Naam van de valuta van de site',
            'copyright' => 'Auteursrecht',
            'user_money_transfer' => 'Schakel geld overboekingen tussen gebruikers in',
            'site_key' => 'Site sleutel voor azuriom.com',
            'site_key_info' => 'De azuriom.com site key is vereist voor het installeren van premiums extensies die gekocht zijn op de webshop. U kunt uw site sleutel verkrijgen in uw <a href="https://market.azuriom.com/profile" target="_blank" rel="noopener norefferer">Azuriom profiel</a>.',
            'webhook' => 'Discord Webhook URL',
            'webhook_info' => 'Een Discord webhook zal worden verzonden naar deze URL wanneer er een nieuwe post is gemaakt als de publicatie datum niet op een latere datum staat. Laat dit veld leeg als je deze functie wilt uitlaten.',
        ],

        'security' => [
            'title' => 'Veiligheidsinstellingen',

            'captcha' => [
                'title' => 'Captcha',
                'site_key' => 'Site sleutel',
                'secret_key' => 'Geheime sleutel',
                'recaptcha' => 'U kunt reCAPTCHA keys krijgen op de <a href="https://www.google.com/recaptcha/" target="_blank" rel="noopener noreferrer">Google reCAPTCHA website</a>. U moet reCAPTCHA <strong>v2 onzichtbare</strong> keys gebruiken.',
                'hcaptcha' => 'Je kunt hCaptcha sleutels krijgen op de <a href="https://www.hcaptcha.com/" target="_blank" rel="noopener noreferrer"> hCaptcha website</a>.',
                'turnstile' => 'U kunt Turnstil keys krijgen op de <a href="https://dash.cloudflare.com/?to=/:account/turnstile" target="_blank" rel="noopener noreferrer">Cloudflare dashboard</a>. "Managed" widget moet hiervoor geselecteerd zijn.',
            ],

            'hash' => 'Hash algoritme',
            'hash_error' => 'Dit hash-algoritme wordt niet ondersteund door de huidige PHP versie.',
            'force_2fa' => 'Vereist 2FA voor toegang tot het beheerpaneel',
        ],

        'performances' => [
            'title' => 'Prestatie instellingen',

            'cache' => [
                'title' => 'Cache legen',
                'clear' => 'Cache legen',
                'description' => 'Wis de website cache.',
                'error' => 'Fout bij leegmaken van de cache.',
            ],

            'boost' => [
                'title' => 'AzBoost',
                'description' => 'AzBoost verbetert uw website prestaties door nog een exclusieve cache laag toe te voegen.',
                'info' => 'Als je na het inschakelen van een extensie problemen hebt, moet je de cache herladen.',

                'enable' => 'AzBoost inschakelen',
                'disable' => 'AzBoost uitschakelen',
                'reload' => 'Herlaad AzBoost',

                'status' => 'AzBoost is momenteel :status.',
                'enabled' => 'ingeschakeld',
                'disabled' => 'uitgeschakeld',

                'error' => 'Fout tijdens het inschakelen van AzBoost.',
            ],
        ],

        'seo' => [
            'title' => 'Home settings',

            'html' => 'Je kan de HTML in de <code>&lt;head&gt;</code> of <code>&lt;body&gt;</code> van alle pagina\'s (zoals die voor de cookie banner of website analytics) door een bestand genaamd <code>head.blade.php</code> of <code>body.blade.php</code> in de <code>resources/views/custom/</code> map te maken.',
            'home_message' => 'Thuis bericht',

            'welcome_alert' => [
                'enable' => 'Welkom pop-up inschakelen?',
                'message' => 'Welkom popup bericht',
                'info' => 'Deze pop-up zal worden weergegeven bij het eerste bezoek aan de site van een gebruiker.',
            ],
        ],

        'auth' => [
            'title' => 'Authenticatie',

            'conditions' => 'Voorwaarden die geaccepteerd moeten worden bij registratie',
            'conditions_info' => 'Links in Markdown formaat, bijvoorbeeld: <code>Ik accepteer de [conditions](/conditions-link) en [privacy policy](/privacy-policy)</code>.',
            'registration' => 'Schakel gebruikersregistratie in',
            'registration_info' => '<strong>The “Register” button is removed when this option is disabled.</strong> Some plugins may still allow to create new user accounts.',
            'api' => 'Authenticatie API inschakelen',
            'api_info' => 'Met deze API kun je een aangepaste authenticatie toevoegen aan je spelserver. Voor Minecraft servers met behulp van een launcher, kunt u <a href="https://github.com/Azuriom/AzAuth" target="_blank" rel="noopener noreferrer">AzAuth</a> gebruiken voor een eenvoudige en snelle integratie.',
            'user_change_name' => 'Gebruikers toestaan hun gebruikersnaam te wijzigen vanuit hun profiel',
            'user_avatar' => 'Allow users to upload their own avatar in their profile',
            'user_delete' => 'Sta gebruikers toe hun account te verwijderen uit hun profiel',
        ],

        'mail' => [
            'title' => 'E-mailinstellingen',
            'from' => 'E-mailadres gebruikt voor het verzenden van e-mails.',
            'mailer' => 'E-mail type',
            'mailer_info' => 'Azuriom ondersteunt SMTP en Sendmail voor het verzenden van e-mails. U kunt meer informatie vinden over de e-mailconfiguratie in onze <a href="https://azuriom.com/docs" target="_blank" rel="noopener noreferrer">documentatie</a>.',
            'disabled' => 'Wanneer e-mailadressen zijn uitgeschakeld, kunnen gebruikers hun wachtwoord niet opnieuw instellen als ze het vergeten.',
            'sendmail' => 'Het gebruik van Sendmail wordt niet aanbevolen en u moet indien mogelijk een SMTP-server gebruiken.',
            'smtp' => [
                'host' => 'SMTP hostadres',
                'port' => 'SMTP host poort',
                'scheme' => 'Scheme',
                'username' => 'SMTP Server Gebruikersnaam',
                'password' => 'SMTP Server Wachtwoord',
            ],
            'verification' => 'E-mail adres verificatie inschakelen',
            'send' => 'Stuur een test email',
            'sent' => 'De testmail is succesvol verzonden.',
            'missing' => 'No email address has been specified on the account :user.',
        ],

        'maintenance' => [
            'title' => 'Onderhoudsinstellingen',

            'enable' => 'Onderhoud inschakelen',
            'message' => 'Onderhoudsbericht',
            'global' => 'Onderhoud op de website inschakelen',
            'paths' => 'Paden om te blokkeren tijdens onderhoud',
            'info' => 'U kunt <code>/*</code> gebruiken om alle pagina\'s te blokkeren die beginnen met hetzelfde pad. Bijvoorbeeld <code>/news/*</code> zal toegang tot al het nieuws blokkeren.',
        ],

        'updated' => 'De instellingen zijn bijgewerkt.',
    ],

    'navbar_elements' => [
        'title' => 'Navigatiebalk',
        'edit' => 'Bewerk navigatiebalk element :element',
        'create' => 'Navigatiebalk-element aanmaken',

        'restrict' => 'Alleen deze rollen kunnen dit zien',
        'dropdown' => 'Zodra deze dropdown is opgeslagen, kunnen items eraan toegevoegd worden via drag-and-drop op de hoofdpagina van de navigatiebalk.',

        'fields' => [
            'home' => 'Home-Pagina',
            'link' => 'Externe Link',
            'page' => 'Pagina',
            'post' => 'Post',
            'posts' => 'Post-Lijst',
            'plugin' => 'Plugin',
            'dropdown' => 'vervolgkeuzemenu',
            'new_tab' => 'Open in een nieuwe tabblad',
        ],

        'updated' => 'Navigatie-bar vernieuwd.',
        'not_empty' => 'U kunt een dropdown met elementen niet verwijderen.',
    ],

    'social_links' => [
        'title' => 'Sociale links',
        'edit' => 'Wijzig sociale link :link',
        'create' => 'Sociale link toevoegen',
    ],

    'servers' => [
        'title' => 'Servers',
        'edit' => 'Server bewerken :"server',
        'create' => 'Server toevoegen',

        'default' => 'Standaard server',
        'default_info' => 'Het aantal spelers verbonden vanaf de standaard server zal op de site worden weergegeven als het huidige thema dit ondersteunt.',

        'home_display' => 'Deze server weergeven op de startpagina',
        'url' => 'Join knop URL',
        'url_info' => 'Laat dit leeg om het serveradres weer te geven. Dit kan een link zijn om het spel te downloaden of een URL naar de server zoals <code>steam://connect/&lt;ip&gt;</code>.',

        'ping_info' => 'De ping link heeft geen plugin nodig, maar je kunt geen commando\'s met deze plugin uitvoeren.',
        'query_info' => 'Met query link is het niet mogelijk om commando\'s uit te voeren op de server.',

        'query_port_info' => 'Kan leeg zijn als het hetzelfde is als het spelpoort.',

        'verify' => 'Test instant-opdrachten',

        'rcon_password' => 'Rcon Wachtwoord',
        'rcon_port' => 'Rcon Poort',
        'query_port' => 'Bron Query Poort',
        'unturned_info' => 'Je moet het SRCDS RCON type gebruiken in OpenMod. RCON is niet compatibel!',

        'azlink' => [
            'port' => 'AzLink poort',

            'link' => 'Om uw server te koppelen aan uw website met AzLink:',
            'link1' => '<a href="https://azuriom.com/azlink">Download de AzLink plugin</a> en installeer het op uw server.',
            'link2' => 'Herstart de server.',
            'link3' => 'Voer dit commando uit op de server: ',
            'auth' => 'To automatically register users on the website, you can enable the integration of your authentication system (AuthMe, etc.) in the AzLink configuration.',

            'info' => 'Als u problemen heeft met AzLink bij het gebruik van Cloudflare of een firewall, probeer dan de stappen in de <a href="https://azuriom.com/docs/faq" target="_blank" rel="noopener norefferer">FAQ</a> te volgen.',
            'command' => 'Je kunt je server koppelen aan je website met het commando: ',
            'port_command' => 'Als u een andere AzLink-poort gebruikt dan de standaard, moet u deze configureren met het commando: ',
            'ping' => 'Directe commando\'s inschakelen (een open poort op de server vereist)',
            'ping_info' => 'Als instant commando\'s niet zijn ingeschakeld, worden commando\'s uitgevoerd met een vertraging van 30 seconden tot 1 minuut.',
            'custom_port' => 'Gebruik een custom AzLink poort',

            'error' => 'De verbinding met de server is mislukt, het adres en/of de poort is onjuist of de poort is gesloten.',
            'badresponse' => 'De verbinding met de server is mislukt (code :code), de token is ongeldig of de server is verkeerd geconfigureerd. Je kunt de link opdracht opnieuw uitvoeren om dit op te lossen.',
        ],

        'players' => ':count speler×:count spelers',
        'offline' => 'Offline',

        'connected' => 'De verbinding met de server is succesvol gemaakt!',
        'error' => 'De verbinding met de server is mislukt: :error',

        'type' => [
            'mc-ping' => 'Minecraft Ping',
            'mc-rcon' => 'Minecraft RCON',
            'mc-azlink' => 'AzLink',
            'source-query' => 'Bron query',
            'source-rcon' => 'Bron RCON',
            'steam-azlink' => 'AzLink',
            'bedrock-ping' => 'Bedrock ping',
            'bedrock-rcon' => 'Bedrock RCON',
            'fivem-status' => 'FiveM status',
            'fivem-rcon' => 'FiveM RCON',
            'rust-rcon' => 'Rust RCON',
            'flyff-server' => 'Flyff Server', // TODO make this dynamic
        ],
    ],

    'users' => [
        'title' => 'Gebruikers',
        'edit' => 'Gebruiker :user bewerken',
        'create' => 'Gebruiker aanmaken',

        'registered' => 'Geregistreerd op',
        'last_login' => 'Laatste aanmelding op',
        'ip' => 'IP-adres',

        'admin' => 'Administrator',
        'banned' => 'Verbannen',
        'deleted' => 'Verwijderd',

        'ban' => 'Verban',
        'unban' => 'Verbanning opheffen',
        'delete' => 'Verwijderen',

        'alert-deleted' => 'Deze gebruiker is verwijderd, het kan niet worden bewerkt.',
        'alert-banned' => [
            'title' => 'Deze gebruiker is momenteel verbannen:',
            'banned-by' => 'Geblokkeerd door: :auteur',
            'reason' => 'Reden: :reason',
            'date' => 'Datum: :date',
        ],

        'edit_profile' => 'Profiel bewerken',

        'info' => 'Gebruikersinformatie',

        'ban-title' => 'Ban :user',
        'ban-description' => 'Weet je zeker dat je deze gebruiker wilt verbannen?',

        'email' => [
            'verify' => 'Verifieer e-mail',
            'verified' => 'E-mailadres geverifieerd',
            'date' => 'Ja, op :date',
            'verify_success' => 'Het e-mailadres is geverifieerd.',
        ],

        '2fa' => [
            'title' => 'Tweestapsverificatie',
            'secured' => 'Tweetrapsauthenticatie ingeschakeld',
            'disable' => 'Schakel 2FA uit',
            'disabled' => 'Tweestapsverificatie is uitgeschakeld.',
        ],

        'password' => [
            'title' => 'Laatste wachtwoord wijziging',
            'force' => 'Forceer wijziging',
            'forced' => 'Wachtwoord moet worden gewijzigd',
        ],

        'status' => [
            'banned' => 'Deze gebruiker is nu verbannen.',
            'unbanned' => 'Deze gebruiker is niet meer verbannen.',
        ],

        'discord' => 'Gekoppelde Discord-account',

        'notify' => 'Verstuur een notificatie',
        'notify_info' => 'Stuur een notificatie naar deze gebruiker',
        'notify_all' => 'Stuur een notificatie naar alle gebruikers',
    ],

    'roles' => [
        'title' => 'Rollen',
        'edit' => 'Rol :role bewerken (#:id)',
        'create' => 'Rol aanmaken',

        'info' => '(ID: :id, Kracht: :power)',

        'default' => 'Standaard',
        'admin' => 'Administrator',
        'admin_info' => 'Wanneer de groep admin is, heeft het alle rechten.',

        'updated' => 'De rollen zijn bijgewerkt.',
        'unauthorized' => 'Deze rol is hoger dan uw eigen rol.',
        'add_admin' => 'U kunt de administratorrechten van uw rol niet verwijderen.',
        'remove_admin' => 'U kunt de administratorrechten van uw rol niet verwijderen.',
        'no_admin' => 'There must be at least one other admin user to remove your admin role.',
        'delete_default' => 'Deze rol kan niet verwijderd worden.',
        'delete_own' => 'U kunt uw rol niet verwijderen.',

        'discord' => [
            'title' => 'Link Discord rollen',
            'enable' => 'Discord rollen link inschakelen',
            'enable_info' => 'Eenmaal ingeschakeld, bewerk de rol op Discord, en in het <b>Links</b> tabblad van de rol, voeg een vereiste toe. Gebruikers kunnen hun rol krijgen door op Discord te gaan, in het servermenu en vervolgens in <b>Gekoppelde Rollen</b>.',
            'info' => 'U moet een applicatie maken op het <a href="https://discord.com/developers/applications" target="_blank">Discord ontwikkelaar dashboard</a> en de <b>Gekoppelde rol verificatie URL</b> instellen op <code>:url</code>',
            'oauth' => 'Vervolgens moet je in het tabblad <b>OAuth2</b> in <b>General</b>toevoegen <code>:url</code> in de <b>Redirects</b>.',
            'token_info' => 'De Bot token kan worden verkregen door een bot aan te maken voor je applicatie, in het <b>Bot</b> tabblad aan de linkerkant van het Discord ontwikkelaar dashboard.',

            'token' => 'Discord Bot Token',
            'client_id' => 'Discord Client-ID',
            'client_secret' => 'Discord Client-Secret',
        ],
    ],

    'permissions' => [
        'create-comments' => 'Reageer op een bericht',
        'delete-other-comments' => 'Verwijder een reactie van een andere gebruiker',
        'maintenance-access' => 'Toegang tot de website tijdens onderhoud',
        'admin-access' => 'Toegang tot het admin dashboard',
        'admin-logs' => 'Bekijk en beheer site logs',
        'admin-images' => 'Bekijk en beheer afbeeldingen',
        'admin-navbar' => 'Bekijk en beheer navbar',
        'admin-pages' => 'Bekijk en beheer pagina\'s',
        'admin-redirects' => 'Bekijk en beheer omleidingen',
        'admin-posts' => 'Bekijk en beheer berichten',
        'admin-settings' => 'Bekijk en beheer instellingen',
        'admin-users' => 'Bekijk en beheer gebruikers',
        'admin-themes' => 'Bekijk en beheer thema\'s',
        'admin-plugins' => 'Bekijk en beheer plugins',
    ],

    'bans' => [
        'title' => 'Bans',

        'by' => 'Verbannen door',
        'reason' => 'Reden',
        'removed' => 'Verwijderde de :date door :user',
    ],

    'posts' => [
        'title' => 'Berichten',
        'edit' => 'Post bewerken :post',
        'create' => 'Bericht aanmaken',

        'published_info' => 'Dit bericht is pas zichtbaar op deze datum.',
        'pin' => 'Dit bericht vastmaken',
        'pinned' => 'Vastgezet',
        'feed' => 'Een RSS/Atom feed voor de berichten is beschikbaar op <code>:rss</code> en <code>:atom</code>.',
    ],

    'pages' => [
        'title' => 'Pagina\'s',
        'edit' => 'Pagina #:page bewerken',
        'create' => 'Pagina aanmaken',

        'enable' => 'Pagina inschakelen',
        'restrict' => 'Limiteer rollen die toegang hebben tot deze pagina',
    ],

    'redirects' => [
        'title' => 'Omleidingen',
        'edit' => 'Omleiding :redirect bewerken',
        'create' => 'Omleiding maken',

        'enable' => 'Omleiding inschakelen',
        'source' => 'Bron',
        'destination' => 'Bestemming',
        'code' => 'Statuscode',

        '301' => '301 - Permanente doorverwijzing',
        '302' => '302 - Tijdelijke doorverwijzing',
    ],

    'images' => [
        'title' => 'Afbeeldingen',
        'edit' => 'Afbeelding :image bewerken',
        'create' => 'Afbeelding uploaden',
        'help' => 'Als afbeeldingen niet worden geladen, probeer dan de stappen in de <a href="https://azuriom.com/docs/faq" target="_blank" rel="noopener norefferer">FAQ</a> te volgen.',
    ],

    'extensions' => [
        'buy' => 'Koop voor :price',
        'market' => 'Information about all extensions is available on the <a href=":url" target="_blank" rel="noopener noreferrer">Azuriom Market</a>.',
    ],

    'plugins' => [
        'title' => 'Plug-ins',

        'list' => 'Geïnstalleerde plugins',
        'available' => 'Beschikbare plugins',

        'requirements' => [
            'api' => 'Deze plugin versie is niet compatibel met Azuriom v:version.',
            'azuriom' => 'Deze plugin is niet compatibel met uw Azuriom versie.',
            'game' => 'Deze plugin is niet compatibel met het spel :game.',
            'plugin' => 'De plugin ":plugin" ontbreekt of de versie ervan is niet compatibel met deze plugin.',
        ],

        'reloaded' => 'De plugins zijn herladen.',
        'enabled' => 'De plugin is ingeschakeld.',
        'disabled' => 'De plugin is uitgeschakeld.',
        'updated' => 'De plugin is succesvol bijgewerkt.',
        'installed' => 'De plugin is geïnstalleerd.',
        'deleted' => 'De plugin is verwijderd.',
        'delete_enabled' => 'De plugin moet worden uitgeschakeld voordat deze kan worden verwijderd.',
    ],

    'themes' => [
        'title' => 'Thema’s',

        'current' => 'Huidig thema',
        'author' => 'Auteur: :auteur',
        'version' => 'Versie: :version',
        'list' => 'Geïnstalleerde thema\'s',
        'available' => 'Beschikbare thema\'s',
        'no-enabled' => 'U hebt geen thema\'s ingeschakeld.',
        'legacy' => 'Deze thema versie is niet compatibel met Azuriom v:version.',

        'config' => 'Bewerk configuratie',
        'disable' => 'Thema uitschakelen',

        'reloaded' => 'De thema\'s zijn opnieuw geladen.',
        'no_config' => 'Dit thema heeft geen configuratie.',
        'config_updated' => 'De thema configuratie is bijgewerkt.',
        'invalid' => 'Dit thema is ongeldig (de thema map naam moet het thema id zijn).',
        'updated' => 'Het thema is bijgewerkt.',
        'installed' => 'Het thema is geïnstalleerd.',
        'deleted' => 'Het thema is verwijderd.',
        'delete_current' => 'U kunt het huidige thema niet verwijderen.',
    ],

    'update' => [
        'title' => 'Vernieuwen',

        'has_update' => 'Update beschikbaar',
        'no_update' => 'Geen updates beschikbaar',
        'check' => 'Controleren op updates',

        'update' => 'De versie <code>:last version</code> van Azuriom is beschikbaar en u bent op versie <code>:version</code>.',
        'changelog' => 'Changelog kan gevonden worden op <a href=":url" target="_blank" rel="noopener noreferrer">GitHub</a>.',
        'download' => 'De laatste versie van Azuriom is klaar om te downloaden.',
        'install' => 'De laatste versie van Azuriom is gedownload en klaar om geïnstalleerd te worden.',

        'backup' => 'Voordat u Azuriom bijwerkt, moet u een back-up maken van uw site!',

        'latest_version' => 'U gebruikt de laatste versie van Azuriom: <code>:version</code>.',
        'latest' => 'U gebruikt de laatste versie van Azuriom.',

        'downloaded' => 'De laatste versie is gedownload, u kunt deze nu installeren.',
        'installed' => 'De update is succesvol geïnstalleerd.',

        'php' => 'U moet PHP :version of hoger gebruiken om te updaten naar deze versie van Azuriom.',
    ],

    'logs' => [
        'title' => 'Logboeken',

        'clear' => 'Oude logs wissen (15d+)',
        'cleared' => 'De oude logs zijn verwijderd.',
        'changes' => 'Wijzigingen',
        'old' => 'Oude waarde',
        'new' => 'Nieuwe Waarde',

        'pages' => [
            'created' => 'Pagina #:id gemaakt',
            'updated' => 'Pagina #:id bijgewerkt',
            'deleted' => 'Pagina #:id verwijderd',
        ],

        'posts' => [
            'created' => 'Post #:id aangemaakt',
            'updated' => 'Bericht #:id bijgewerkt',
            'deleted' => 'Bericht #:id verwijderd',
        ],

        'images' => [
            'created' => 'Afbeelding #:id gemaakt',
            'updated' => 'Bijgewerkte afbeelding #:id',
            'deleted' => 'Afbeelding #:id verwijderd',
        ],

        'redirects' => [
            'created' => 'Aangemaakte omleiding #:id',
            'updated' => 'Bijgewerkte omleiding #:id',
            'deleted' => 'Verwijderde omleiding #:id',
        ],

        'roles' => [
            'created' => 'Rol #:id aangemaakt',
            'updated' => 'Rol #:id bijgewerkt',
            'deleted' => 'Rol #:id verwijderd',
        ],

        'servers' => [
            'created' => 'Server #:id aangemaakt',
            'updated' => 'Server #:id bijgewerkt',
            'deleted' => 'Server #:id verwijderd',
        ],

        'users' => [
            'updated' => 'Gebruiker #:id bijgewerkt',
            'deleted' => 'Gebruiker #:id verwijderd',
            'transfer' => 'Geld :money sturen naar gebruiker #:id',

            'login' => 'Succesvolle login vanaf :ip (2FA: :2fa)',
            '2fa' => [
                'enabled' => 'Tweestapsverificatie ingeschakeld',
                'disabled' => 'Tweestapsverificatie uitgeschakeld',
            ],
        ],

        'settings' => [
            'updated' => 'Instellingen bijgewerkt',
        ],

        'updates' => [
            'installed' => 'Azuriom update geïnstalleerd',
        ],

        'plugins' => [
            'enabled' => 'Plug-in ingeschakeld',
            'disabled' => 'Plug-in uitgeschakeld',
        ],

        'themes' => [
            'changed' => 'Thema gewijzigd',
            'configured' => 'Thema configuratie bijgewerkt',
        ],
    ],

    'errors' => [
        'back' => 'Terug naar Dashboard',
        '404' => 'Pagina niet gevonden',
        'info' => 'Het lijkt erop dat je een storing in de matrix hebt gevonden...',
        '2fa' => 'U moet tweestapsverificatie inschakelen om toegang te krijgen tot deze pagina.',
    ],
];
