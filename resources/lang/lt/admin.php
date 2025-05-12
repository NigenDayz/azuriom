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
        'dashboard' => 'Skydelis',
        'settings' => [
            'heading' => 'Nustatymai',
            'settings' => 'Nustatymai',
            'global' => 'Bendra',
            'security' => 'Saugumas',
            'performances' => 'Našumas',
            'home' => 'Home',
            'auth' => 'Autentifikacija',
            'mail' => 'Paštas',
            'maintenance' => 'Svetainės tvarkymo darbai',
            'social' => 'Socialiniai adresai',
            'navbar' => 'Navigacija',
            'servers' => 'Serveriai',
        ],

        'users' => [
            'heading' => 'Vartotojai',
            'users' => 'Vartotojai',
            'roles' => 'Roles',
            'bans' => 'Užblokuoti vartotojai',
        ],

        'content' => [
            'heading' => 'Turinys',
            'pages' => 'Puslapiai',
            'posts' => 'Pranešimai',
            'images' => 'Vaizdai',
            'redirects' => 'Nukreipimai',
        ],

        'extensions' => [
            'heading' => 'Plėtiniai',
            'plugins' => 'Papildiniai',
            'themes' => 'Temos',
        ],

        'other' => [
            'heading' => 'Kita',
            'update' => 'Atnaujinimas',
            'logs' => 'Įvykių žurnalas',
        ],

        'profile' => [
            'profile' => 'Profilis',
        ],

        'back' => 'Grįžti atgal į svetainę',
        'support' => 'Pagalba',
        'documentation' => 'Dokumentacija',
    ],

    'delete' => [
        'title' => 'Pašalinti?',
        'description' => 'Ar jūs įsitikinę, kad norite tai pašalinti? Jūs negalėsite grįžti atgal!',
    ],

    'footer' => 'Svetainė dirba ant :azuriom &copy; :year. Panele sukūrė :startbootstrap.',

    /*
    |
    | Admin pages
    |
    */

    'dashboard' => [
        'title' => 'Skydelis',

        'users' => 'Vartotojai',
        'posts' => 'Pranešimai',
        'pages' => 'Puslapiai',
        'images' => 'Vaizdai',

        'update' => 'Nauja Azuriom versija yra galima: :version',
        'http' => 'Jūsų svetainė nenaudoja https, jūs turėtumėte tai įjungti ir priverstinai naudoti jūsų ir jūsų svetainės vartotojų saugumui.',
        'cloudflare' => 'Jeigu jūs naudojate Cloudflare, jūs turėtumete įsidiegti Cloudflare pagalbos pluginą.',
        'recent_users' => 'Naujausi vartotojai',
        'active_users' => 'Aktyvūs vartotojai',
        'emails' => 'El. paštas yra išjungtas. Jei vartotojas pamirš savo slaptažodį, jis negalės jo atstatyti. Galite įjungti el. paštą <a href=":url">pašto nustatymuose</a>.',
    ],

    'settings' => [
        'index' => [
            'title' => 'Bendrieji nustatymai',

            'name' => 'Svetainės pavadinimas',
            'url' => 'Svetainės URL',
            'description' => 'Svetainės aprašymas',
            'meta' => 'Meta raktažodžiai',
            'meta_info' => 'Raktažodžiai turi būti atskirti kableliu.',
            'favicon' => 'Favicon',
            'background' => 'Fonas',
            'logo' => 'Logotipas',
            'timezone' => 'Laiko juosta',
            'locale' => 'Kalba',
            'money' => 'Tinklalapio valiutos pavadinimas',
            'copyright' => 'Autorinės teisės',
            'user_money_transfer' => 'Įjungti pinigų persiuntimą tarp vartotojų',
            'site_key' => 'Svetainės raktas iš azuriom.com',
            'site_key_info' => 'Azuriom.com svetainės raktas yra būtinas norint įdiegti rinkoje įsigytus premium plėtinius. Savo svetainės raktą galite gauti savo <a href="https://market.azuriom.com/profile" target="_blank" rel="noopener norefferer">Azuriom profilyje</a>.',
            'webhook' => 'Pranešimų Discord Webhook URL',
            'webhook_info' => 'Į šį URL bus išsiųstas Discord webhook, kai bus sukurtas naujas pranešimas, jei publikavimo data nėra nustatyta į ateitį. Palikite tuščią, kad išjungtumėte.',
        ],

        'security' => [
            'title' => 'Saugumo nustatymai',

            'captcha' => [
                'title' => 'Captcha',
                'site_key' => 'Viešas Captcha raktas',
                'secret_key' => 'Slaptas raktas',
                'recaptcha' => 'reCAPTCHA raktus galite gauti <a href="https://www.google.com/recaptcha/" target="_blank" rel="noopener noreferrer">Google reCAPTCHA svetainėje</a>. Jums reikia naudoti reCAPTCHA <strong>v2 nematomus</strong> raktus.',
                'hcaptcha' => 'Jūs galite gauti hCaptcha raktus <a href="https://www.hcaptcha.com/" target="_blank" rel="noopener noreferrer"> hCaptcha svetainėje</a>.',
                'turnstile' => 'Turnstil raktus galite gauti <a href="https://dash.cloudflare.com/?to=/:account/turnstile" target="_blank" rel="noopener noreferrer">Cloudflare valdymo pulte</a>. Turite pasirinkti "Managed" valdiklį.',
            ],

            'hash' => 'Hash algoritmas',
            'hash_error' => 'Šis hash algoritmas yra nepalaikomas jūsų dabartinės PHP versijos.',
            'force_2fa' => 'Reikalauti 2FA norint pasiekti administratoriaus skydelį',
        ],

        'performances' => [
            'title' => 'Našumo nustatymai',

            'cache' => [
                'title' => 'Išvalyti talpyklą (cache)',
                'clear' => 'Išvalyti talpyklą',
                'description' => 'Išvalyti svetainės talpyklą.',
                'error' => 'Įvyko klaida valant talpykla.',
            ],

            'boost' => [
                'title' => 'AzBoost',
                'description' => 'AzBoost pagerina jūsų svetainės našuma pridėdamas dar vieną talpyklos sluoksnį.',
                'info' => 'Jeigu jūs susiduriate su problemomis įjungus AzBoost. Jūs turėtumete išvalyti svetainės talpyklą.',

                'enable' => 'Įjungti AzBoost',
                'disable' => 'Išjungti AzBoost',
                'reload' => 'Perkrauti AzBoost',

                'status' => 'AzBoost šiuo metu yra :status.',
                'enabled' => 'įjungta',
                'disabled' => 'išjungta',

                'error' => 'Įvyko klaida įjungiant AzBoost.',
            ],
        ],

        'seo' => [
            'title' => 'Home settings',

            'html' => 'HTML galite įtraukti į visų puslapių <code>&lt;head&gt;</code> arba <code>&lt;body&gt;</code> (pvz., slapukų juostai ar svetainės analitikai) sukurdami failą pavadinimu <code>head.blade.php</code> arba <code>body.blade.php</code> aplanke <code>resources/views/custom/</code>.',
            'home_message' => 'Pagrindinio puslapio žinutė',

            'welcome_alert' => [
                'enable' => 'Įjungti pasveikinimo žinutę?',
                'message' => 'Pasveikinimo žinutė',
                'info' => 'Ši lentelė iššoks kai asmuo pirmą kartą prisijungs į svetainę.',
            ],
        ],

        'auth' => [
            'title' => 'Autentifikacija',

            'conditions' => 'Sąlygos, kurias reikia priimti registruojantis',
            'conditions_info' => 'Nuorodos Markdown formatu, pavyzdžiui: <code>Aš sutinku su [sąlygomis](/conditions-link) ir [privatumo politika](/privacy-policy)</code>.',
            'registration' => 'Įjungti vartotojų registracija',
            'registration_info' => '<strong>Mygtukas „Registruotis" pašalinamas, kai ši parinktis išjungta.</strong> Kai kurie papildiniai/įskiepiai vis tiek gali leisti kurti naujas vartotojų paskyras.',
            'api' => 'Įjungti Auth API',
            'api_info' => 'Ši API leidžia pridėti pasirinktinį autentifikavimą prie jūsų žaidimo serverio. „Minecraft" serveriams, naudojantiems paleidimo programą, galite naudoti <a href="https://github.com/Azuriom/AzAuth" target="_blank" rel="noopener noreferrer">AzAuth</a>, kad būtų lengva ir greita integracija.',
            'user_change_name' => 'Leisti vartotojams keisti vartotojo vardą savo profilyje',
            'user_avatar' => 'Leisti vartotojams įkelti savo avatarą į savo profilį',
            'user_delete' => 'Leisti vartotojams pašalinti savo paskyras savo profilyje',
        ],

        'mail' => [
            'title' => 'El. pašto nustatymai',
            'from' => 'El. pašto adresas naudojamas išsiųsti žinutėms.',
            'mailer' => 'El. pašto tipas',
            'mailer_info' => 'Azuriom palaiko SMTP and Sendmail, jog išsiųsti žinutes. Jūs galite rasti daugiau informacijos el. paštų konfiguracijoje mūsų <a href="https://azuriom.com/docs" target="_blank" rel="noopener noreferrer">dokumentacijoje</a>.',
            'disabled' => 'Kai el. paštai yra išjungti, vartotojai negalės atstatyti savo slaptažodžių, jeigu juos pamirš.',
            'sendmail' => 'Naudoti Sendmail nėra rekomenduojama ir jūs tiesiog turėtumete naudoti SMTP serverį kada galima.',
            'smtp' => [
                'host' => 'SMTP Host Adresas',
                'port' => 'SMTP Host Portas',
                'scheme' => 'Scheme',
                'username' => 'SMTP Serverio pavadinimas',
                'password' => 'SMTP Serverio slaptažodis',
            ],
            'verification' => 'Įjungti vartotojų el. pašto adreso verifikacija',
            'send' => 'Siųsti bandomąjį el. laišką',
            'sent' => 'Bandomoji žinutė buvo sekmingai išsiųsta.',
            'missing' => 'No email address has been specified on the account :user.',
        ],

        'maintenance' => [
            'title' => 'Techninio aptarnavimo nustatymai',

            'enable' => 'Įjungti tvarkymo režimą',
            'message' => 'Tvarkymo režimo žinutė',
            'global' => 'Įjungti techninę priežiūrą visoje svetainėje',
            'paths' => 'Keliai, kuriuos reikia užblokuoti techninės priežiūros metu',
            'info' => 'Galite naudoti <code>/*</code>, kad užblokuotumėte visus puslapius, prasidedančius tuo pačiu keliu. Pavyzdžiui, <code>/news/*</code> užblokuos prieigą prie visų naujienų.',
        ],

        'updated' => 'Nustatymai buvo atnaujinti.',
    ],

    'navbar_elements' => [
        'title' => 'Navigacija',
        'edit' => 'Redaguoti navigacijos juostos elementą :element',
        'create' => 'Sukurti navigacijos juostos elementą',

        'restrict' => 'Apriboti roles, kurios galės matyti šį elementą',
        'dropdown' => 'Kai šis išskleidžiamasis meniu bus išsaugotas, elementus galima pridėti prie jo vilkimo ir numetimo būdu pagrindiniame navigacijos juostos puslapyje.',

        'fields' => [
            'home' => 'Pagrindinis',
            'link' => 'Išorinis adresas',
            'page' => 'Puslapis',
            'post' => 'Pranešimas',
            'posts' => 'Pranešimų sąrašas',
            'plugin' => 'Įskiepis',
            'dropdown' => 'Išskleidžiamasis meniu',
            'new_tab' => 'Atidaryti naujame skirtuke',
        ],

        'updated' => 'Navigacijos juosta atnaujinta.',
        'not_empty' => 'Jūs negalite pašalinti išskleidžiamų meniu su elementais.',
    ],

    'social_links' => [
        'title' => 'Socialiniai adresai',
        'edit' => 'Redaguoti socialinį adresą :link',
        'create' => 'Pridėti socialinį adresą',
    ],

    'servers' => [
        'title' => 'Serveriai',
        'edit' => 'Redaguoti serverį :server',
        'create' => 'Pridėti serverį',

        'default' => 'Numatytasis serveris',
        'default_info' => 'Prisijungusių žaidėjų sąrašas iš numatytojo serverio bus rodomas temoje, jeigu tema tai palaiko.',

        'home_display' => 'Rodyti šį serverį pagrindiniame puslapyje',
        'url' => 'Prisijungimo mygtuko URL',
        'url_info' => 'Palikite tuščią, kad būtų rodomas serverio adresas. Gali būti nuoroda atsisiųsti žaidimą/paleidimo programą arba URL prisijungti prie serverio, pvz., <code>steam://connect/&lt;ip&gt;</code>.',

        'ping_info' => 'Ping nuorodai nereikia įskiepio, bet jūs negalite išsiųsti komandų su juo.',
        'query_info' => 'Su query adresu yra neįmanoma išsiųsti komandų serveriui.',

        'query_port_info' => 'Gali būti tuščias, jeigu jis yra toks pats kaip ir serverio prievadas.',

        'verify' => 'Testuoti momentines komandas',

        'rcon_password' => 'Rcon slaptažodis',
        'rcon_port' => 'Rcon Portas',
        'query_port' => 'Source Query Prievadas',
        'unturned_info' => 'Turite naudoti SRCDS RCON tipą OpenMod. RocketMod RCON nėra suderinamas!',

        'azlink' => [
            'port' => 'AzLink Prievadas',

            'link' => 'Norėdami susieti savo serverį su svetaine naudodami AzLink:',
            'link1' => '<a href="https://azuriom.com/azlink">Atsisiųskite įskiepį AzLink</a> ir įsidiegkite jį į savo serverį.',
            'link2' => 'Perkraukite serverį.',
            'link3' => 'Panaudokite šią komandą: ',
            'auth' => 'Norėdami automatiškai registruoti vartotojus svetainėje, galite įjungti savo autentifikavimo sistemos (AuthMe ir kt.) integraciją AzLink konfigūracijoje.',

            'info' => 'Jei naudojant AzLink kyla problemų su Cloudflare ar ugniasiene, pabandykite atlikti veiksmus, nurodytus <a href="https://azuriom.com/docs/faq" target="_blank" rel="noopener norefferer">DUK</a>.',
            'command' => 'Galite susieti savo serverį su svetaine naudodami komandą: ',
            'port_command' => 'Jeigu jūs naudojate kitokį nei numatytąjį AzLink prievadą, jūs jį turite sukonfiguruoti su komanda: ',
            'ping' => 'Įjungti staigias komandas (Reikalauja atidaryto prievado serveriui)',
            'ping_info' => 'Kai staigios komandos nėra įjungtos, komandos bus išsiųstos po 30 sekundžių iki 1 minutės.',
            'custom_port' => 'Naudoti kitokį AzLink prievadą',

            'error' => 'Prisijungimas prie serverio nepavyko, adresas arba/ir prievadas yra neteisingi, arba prievadas yra uždarytas.',
            'badresponse' => 'Prisijungimas prie serverio nepavyko (klaidos kodas :code), tokenas yra netinkamas arba serveris yra blogai nustatytas. Jūs galite persidaryti susiejimo komandą, kad sutvarkyti tai.',
        ],

        'players' => ':count player|:count žaidėjai',
        'offline' => 'Išjungtas',

        'connected' => 'Jungtis su serveriu buvo padaryta sėkmingai!',
        'error' => 'Prisijungimas prie serverio nepavyko: :error',

        'type' => [
            'mc-ping' => 'Minecraft Ping',
            'mc-rcon' => 'Minecraft RCON',
            'mc-azlink' => 'AzLink',
            'source-query' => 'Source Query',
            'source-rcon' => 'Source RCON',
            'steam-azlink' => 'AzLink',
            'bedrock-ping' => 'Bedrock Ping',
            'bedrock-rcon' => 'Bedrock RCON',
            'fivem-status' => 'FiveM statusas',
            'fivem-rcon' => 'FiveM RCON',
            'rust-rcon' => 'Rust RCON',
            'flyff-server' => 'Flyff Serveris', // TODO make this dynamic
        ],
    ],

    'users' => [
        'title' => 'Vartotojai',
        'edit' => 'Redaguoti vartotoją :user',
        'create' => 'Sukurti vartotoją',

        'registered' => 'Užsiregistravo',
        'last_login' => 'Paskutinis prisijungimas',
        'ip' => 'IP Adresas',

        'admin' => 'Administratorius',
        'banned' => 'Užblokuotas',
        'deleted' => 'Pašalintas',

        'ban' => 'Užblokuoti',
        'unban' => 'Atblokuoti',
        'delete' => 'Pašalinti',

        'alert-deleted' => 'Šis vartotojas yra ištrintas, jis negali būti redaguojamas.',
        'alert-banned' => [
            'title' => 'Šis vartotojas yra užblokuotas:',
            'banned-by' => 'Užblokavo: :author',
            'reason' => 'Priežastis: :reason',
            'date' => 'Data: :date',
        ],

        'edit_profile' => 'Redaguoti profilį',

        'info' => 'Vartotojo informacija',

        'ban-title' => 'Užblokuoti :user',
        'ban-description' => 'Ar jūs įsitikinę, kad norite užblokuoti šį narį?',

        'email' => [
            'verify' => 'Patvirtinti el. pašto adresą',
            'verified' => 'El. pašto adresas patvirtintas',
            'date' => 'Taip, datoje :date',
            'verify_success' => 'El. pašto adresas buvo patvirtintas.',
        ],

        '2fa' => [
            'title' => 'Dviejų faktorių autentifikacija',
            'secured' => '2FA įjungta',
            'disable' => 'Išjungti 2FA',
            'disabled' => 'Dviejų faktorių autentifikacija buvo išjungta.',
        ],

        'password' => [
            'title' => 'Paskutinį kartą slaptažodis keistas',
            'force' => 'Priverstinis pakeitimas',
            'forced' => 'Būtina pakeisti slaptažodį',
        ],

        'status' => [
            'banned' => 'Šis vartotojas yra dabar užblokuotas.',
            'unbanned' => 'Šis vartotojas buvo atblokuotas.',
        ],

        'discord' => 'Susieta Discord paskyra',

        'notify' => 'Siųsti notifikacija',
        'notify_info' => 'Išsiųsti notifikaciją šiam nariui',
        'notify_all' => 'Išsiųsti notifikacijas visiems nariams',
    ],

    'roles' => [
        'title' => 'Grupės',
        'edit' => 'Redaguoti rolę :role (#:id)',
        'create' => 'Sukurti rolę',

        'info' => '(ID: :id, Galia: :power)',

        'default' => 'Numatyta',
        'admin' => 'Administratorius',
        'admin_info' => 'Kai grupė yra administratoriaus, ji turi visus leidimus.',

        'updated' => 'Rolės buvo atnaujintos.',
        'unauthorized' => 'Ši rolė yra aukščiau negu jūsų pačių.',
        'add_admin' => 'Jūs negalite pridėti administratoriaus leidimo prie rolės.',
        'remove_admin' => 'Jūs negalite pašalinti administratoriaus leidimo iš savo rolės.',
        'no_admin' => 'Turi būti bent vienas kitas administratoriaus teises turintis vartotojas, kad galėtumėte pašalinti savo administratoriaus rolę.',
        'delete_default' => 'Ši rolė negali būti ištrinta.',
        'delete_own' => 'Jūs negalite ištrinti savo paties grupės.',

        'discord' => [
            'title' => 'Susieti Discord roles',
            'enable' => 'Įjungti Discord rolių susiejimą',
            'enable_info' => 'Kai įjungta, redaguokite rolę Discord platformoje, ir rolės <b>Nuorodų</b> skirtuke pridėkite reikalavimą. Vartotojai gali gauti savo rolę Discord platformoje, serverio meniu, tada <b>Susietos rolės</b>.',
            'info' => 'Turite sukurti programą <a href="https://discord.com/developers/applications" target="_blank">Discord kūrėjų valdymo pulte</a> ir nustatyti <b>Susieto vaidmens patvirtinimo URL</b> į <code>:url</code>',
            'oauth' => 'Tada, skiltyje <b>OAuth2</b>, skiltyje <b>Bendra</b>, turite pridėti <code>:url</code> prie <b>Peradresavimų</b>.',
            'token_info' => 'Bot žetoną galite gauti sukūrę botą savo programai, skiltyje <b>Bot</b> kairėje Discord kūrėjų valdymo pulto pusėje.',

            'token' => 'Discord Bot Žetonas',
            'client_id' => 'Discord Kliento ID',
            'client_secret' => 'Discord Kliento Paslaptis',
        ],
    ],

    'permissions' => [
        'create-comments' => 'Pakomentuoti pranešimą',
        'delete-other-comments' => 'Ištrinti kitų parašytus komentarus pranešimuose',
        'maintenance-access' => 'Pasiekti svetainę esant tvarkymo režimui',
        'admin-access' => 'Pasiekti administratoriaus web panelę',
        'admin-logs' => 'Peržiūrėti ir tvarkyti logus',
        'admin-images' => 'Peržiūrėti ir tvarkyti nuotraukas',
        'admin-navbar' => 'Peržiūrėti ir tvarkyti navigacijos juostą',
        'admin-pages' => 'Peržiūrėti ir tvarkyti puslapius',
        'admin-redirects' => 'Peržiūrėti ir valdyti nukreipimus',
        'admin-posts' => 'Peržiūrėti ir tvarkyti pranešimus',
        'admin-settings' => 'Peržiūrėti ir tvarkyti svetainės nustatymus',
        'admin-users' => 'Peržiūrėti ir tvarkyti vartotojus',
        'admin-themes' => 'Peržiūrėti ir tvarkyti temas',
        'admin-plugins' => 'Peržiūrėti ir tvarkyti papildinius',
    ],

    'bans' => [
        'title' => 'Bausmės',

        'by' => 'Užblokavo',
        'reason' => 'Priežastis',
        'removed' => 'Panaikinta :date vartotojo :user',
    ],

    'posts' => [
        'title' => 'Pranešimai',
        'edit' => 'Redaguoti pranešimą :post',
        'create' => 'Sukurti pranešimą',

        'published_info' => 'Šis pranešimas nebus matomas iki nustatytos datos.',
        'pin' => 'Prisegti šį pranešimą',
        'pinned' => 'Prisegta',
        'feed' => 'RSS/Atom kanalas įrašams yra pasiekiamas adresu <code>:rss</code> ir <code>:atom</code>.',
    ],

    'pages' => [
        'title' => 'Puslapiai',
        'edit' => 'Redaguoti puslapį #:page',
        'create' => 'Sukurti puslapį',

        'enable' => 'Įjungti šį puslapį',
        'restrict' => 'Apriboti roles, kurios galės pasiekti šį puslapį',
    ],

    'redirects' => [
        'title' => 'Nukreipimai',
        'edit' => 'Redagavimas nukreipimo :redirect',
        'create' => 'Kuriamas nukreipimas',

        'enable' => 'Įjungti nukreipimą',
        'source' => 'Šaltinis',
        'destination' => 'Paskirties vieta',
        'code' => 'Būsenos kodas',

        '301' => '301 - Nuolatinis nukreipimas',
        '302' => '302 - Laikinas nukreipimas',
    ],

    'images' => [
        'title' => 'Nuotraukos',
        'edit' => 'Redaguoti nuotrauką :image',
        'create' => 'Įkelti nuotrauką',
        'help' => 'Jei vaizdai neįkeliami, pabandykite atlikti veiksmus, nurodytus <a href="https://azuriom.com/docs/faq" target="_blank" rel="noopener norefferer">DUK</a>.',
    ],

    'extensions' => [
        'buy' => 'Nupirkti už :price',
        'market' => 'Informacija apie visus plėtinius yra pasiekiama <a href=":url" target="_blank" rel="noopener noreferrer">Azuriom Market</a>.',
    ],

    'plugins' => [
        'title' => 'Papildiniai',

        'list' => 'Įdiegti papildiniai',
        'available' => 'Galimi papildiniai',

        'requirements' => [
            'api' => 'Ši įskiepio versija nesuderinama su Azuriom v:version.',
            'azuriom' => 'Šis papildinys yra netinkamas su jūsų Azuriom versija.',
            'game' => 'Šis papildinys yra netinkamas su žaidimu :game.',
            'plugin' => 'Papildinys ":plugin" yra dingęs arba jo versija yra netinkama su šiuo papildiniu.',
        ],

        'reloaded' => 'Papildiniai buvo perkrauti.',
        'enabled' => 'Papildinys buvo įjungtas.',
        'disabled' => 'Papildinys buvo išjungtas.',
        'updated' => 'Papildinys buvo atnaujintas.',
        'installed' => 'Papildinys buvo įdiegtas.',
        'deleted' => 'Papildinys buvo ištrintas.',
        'delete_enabled' => 'Papildinys privalo būti išjungtas, kad būtų galima jį ištrinti.',
    ],

    'themes' => [
        'title' => 'Temos',

        'current' => 'Dabartinė tema',
        'author' => 'Autorius: :author',
        'version' => 'Versija :version',
        'list' => 'Įdiegtos temos',
        'available' => 'Galimos temos',
        'no-enabled' => 'Jūs neturite jokių įjungtų temų.',
        'legacy' => 'Šios temso versija yra nepalaikoma su Azuriom v:version.',

        'config' => 'Redaguoti nustatymus',
        'disable' => 'Išjungti temą',

        'reloaded' => 'Temos buvo perkrautos.',
        'no_config' => 'Ši tema neturi nustatymų.',
        'config_updated' => 'Temos nustatymai buvo atnaujinti.',
        'invalid' => 'Ši tema yra neteisinga (temos aplanko pavadinimas turi būti temos Id).',
        'updated' => 'Tema buvo atnaujinta.',
        'installed' => 'Tema buvo įrašyta.',
        'deleted' => 'Tema buvo pašalinta.',
        'delete_current' => 'Jūs negalite pašalinti dabartinės temos.',
    ],

    'update' => [
        'title' => 'Atnaujinimas',

        'has_update' => 'Galimas atnaujinimas',
        'no_update' => 'Nėra naujų atnaujinimų',
        'check' => 'Ieškoti atnaujinimų',

        'update' => 'Versija <code>:last-version</code> Azuriom yra prieinama ir jūs esate ant versijos <code>:version</code>.',
        'changelog' => 'Pakeitimų sąrašą galite rasti <a href=":url" target="_blank" rel="noopener noreferrer">GitHub</a>.',
        'download' => 'Naujausia Azuriom versija galima atsisiųsti.',
        'install' => 'Naujausia Azuriom versija buvo parsiųsta ir ją galima įdiegti.',

        'backup' => 'Prieš atnaujindami Azuriom, jūs turėtumete pasidaryti svetainės kopija!',

        'latest_version' => 'Jūs naudojate naujausia Azuriom versija: <code>:version</code>.',
        'latest' => 'Jūs naudojate naujausia Azuriom versija.',

        'downloaded' => 'Naujausia versija buvo parsisiųsta ir ją galima įdiegti.',
        'installed' => 'Atnaujinimas buvo sekmingai įrašytas.',

        'php' => 'Norėdami atnaujinti į šią Azuriom versiją, turite naudoti PHP :version arba naujesnę versiją.',
    ],

    'logs' => [
        'title' => 'Įrašai',

        'clear' => 'Išvalyti senus įrašus (15d+)',
        'cleared' => 'Seni įrašai buvo ištrinti.',
        'changes' => 'Pakeitimai',
        'old' => 'Sena reikšmė',
        'new' => 'Nauja reikšmė',

        'pages' => [
            'created' => 'Sukurtas puslapis #:id',
            'updated' => 'Atnaujintas puslapis #:id',
            'deleted' => 'Pašalintas puslapis #:id',
        ],

        'posts' => [
            'created' => 'Sukurtas pranešimas #:id',
            'updated' => 'Atnaujintas pranešimas #:id',
            'deleted' => 'Pašalintas pranešimas #:id',
        ],

        'images' => [
            'created' => 'Sukurta nuotrauka #:id',
            'updated' => 'Atnaujinta nuotrauka #:id',
            'deleted' => 'Pašalinta nuotrauka #:id',
        ],

        'redirects' => [
            'created' => 'Sukurtas nukreipimas #:id',
            'updated' => 'Atnaujintas nukreipimas #:id',
            'deleted' => 'Pašalintas nukreipimas #:id',
        ],

        'roles' => [
            'created' => 'Sukurta grupė #:id',
            'updated' => 'Atnaujinta grupė #:id',
            'deleted' => 'Pašalinta grupė #:id',
        ],

        'servers' => [
            'created' => 'Sukurtas serveris #:id',
            'updated' => 'Atnaujintas serveris #:id',
            'deleted' => 'Pašalintas serveris #:id',
        ],

        'users' => [
            'updated' => 'Atnaujintas vartotojas #:id',
            'deleted' => 'Pašalintas vartotojas #:id',
            'transfer' => 'Siųsti pinigų :money vartotojui #:id',

            'login' => 'Sėkmingas prisijungimas iš :ip (2FA: :2fa)',
            '2fa' => [
                'enabled' => 'Įjungta dviejų veiksnių autentifikacija',
                'disabled' => 'Išjungta dviejų veiksnių autentifikacija',
            ],
        ],

        'settings' => [
            'updated' => 'Atnaujinti nustatymai',
        ],

        'updates' => [
            'installed' => 'Įdiegtas Azuriom atnaujinimas',
        ],

        'plugins' => [
            'enabled' => 'Įjungtas papildinys',
            'disabled' => 'Išjungtas papildinys',
        ],

        'themes' => [
            'changed' => 'Pakeista tema',
            'configured' => 'Atnaujinta temos konfigūracija',
        ],
    ],

    'errors' => [
        'back' => 'Grįžti į valdymo skydelį',
        '404' => 'Puslapis nerastas',
        'info' => 'Atrodo, kad jūs radote klaidą matricoje...',
        '2fa' => 'Turite įjungti dviejų faktorių autentifikaciją, kad galėtumėte pasiekti šį puslapį.',
    ],
];
