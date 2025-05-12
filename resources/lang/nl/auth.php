<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => 'Deze gegevens komen niet overeen met onze gegevens.',
    'throttle' => 'Te veel inlogpogingen. Probeer het opnieuw over :seconds seconden.',

    'register' => 'Registreer',
    'login' => 'Aanmelden',
    'logout' => 'Afmelden',
    'verify' => 'Verifieer je e-mailadres',
    'passwords' => [
        'confirm' => 'Bevestig wachtwoord',
        'reset' => 'Reset Wachtwoord',
        'send' => 'Stuur wachtwoord reset link',
    ],
    'fpc' => [
        'title' => 'Forceer wachtwoordwijziging',
        'line1' => 'Uw account is tijdelijk geblokkeerd om veiligheidsredenen. Wijzig uw wachtwoord om het te deblokkeren.',
        'line2' => 'Als u meer informatie nodig heeft of problemen heeft met het ontgrendelen van uw account, neem dan contact op met de sitebeheerder.',
        'action' => 'Wijzig mijn wachtwoord',
    ],
    'name' => 'Gebruikersnaam',
    'email' => 'E-mailadres',
    'password' => 'Wachtwoord',
    'confirm_password' => 'Bevestig Wachtwoord',
    'current_password' => 'Huidig wachtwoord',

    'conditions' => 'Ik accepteer de <a href=":url" target="_blank">voorwaarden</a>.',

    '2fa' => [
        'code' => 'Twee Factor Authenticatiecode',
        'invalid' => 'Ongeldige code',
    ],

    'suspended' => 'Dit account is opgeschort.',

    'maintenance' => 'De website is in onderhoud.',

    'remember' => 'Herinner Mij',
    'forgot_password' => 'Uw wachtwoord vergeten?',

    'verification' => [
        'sent' => 'Een nieuwe verificatie link is naar uw e-mailadres verzonden.',
        'check' => 'Controleer voordat u verder gaat uw e-mail voor een verificatie link.',
        'request' => 'Indien u de e-mail niet heeft ontvangen, kunt u een andere aanvragen.',
        'resend' => 'E-mail opnieuw verzenden',
    ],

    'confirmation' => 'Bevestig uw wachtwoord voordat u verder gaat.',

    'mail' => [
        'reset' => [
            'subject' => 'Reset Wachtwoord Notificatie',
            'line1' => 'U ontvangt deze e-mail omdat we een verzoek om het wachtwoord opnieuw in te stellen voor uw account hebben ontvangen.',
            'action' => 'Wachtwoord opnieuw instellen',
            'line2' => 'Deze link voor het opnieuw instellen van het wachtwoord verloopt over :count minuten.',
            'line3' => 'Indien u geen wachtwoord reset heeft aangevraagd, is er geen verdere actie vereist.',
        ],

        'verify' => [
            'subject' => 'Bevestig E-mail Adres',
            'line1' => 'Klik op onderstaande knop om uw e-mailadres te verifiëren. Deze link is geldig voor :count minuten.',
            'action' => 'Bevestig e-mail adres',
            'line2' => 'Indien u geen account hebt aangemaakt, is er geen verdere actie vereist.',
        ],
    ],
];
