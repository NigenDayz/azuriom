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

    'failed' => 'As credenciais não batem com nossos registros.',
    'throttle' => 'Muitas tentativas de login. Por favor, tente novamente em :seconds segundos.',

    'register' => 'Registrar',
    'login' => 'Login',
    'logout' => 'Sair',
    'verify' => 'Verifique seu endereço de email',
    'passwords' => [
        'confirm' => 'Confirme sua senha',
        'reset' => 'Resete seu senha',
        'send' => 'Enviar link para redefinição de senha',
    ],
    'fpc' => [
        'title' => 'Forçar alteração de senha',
        'line1' => 'Sua conta foi temporariamente bloqueada por motivos de segurança. Para desbloqueá-la, por favor, altere sua senha.',
        'line2' => 'Se você precisar de mais informações ou tiver problemas para desbloquear sua conta, entre em contato com o administrador do site.',
        'action' => 'Alterar minha senha',
    ],
    'name' => 'Usuário',
    'email' => 'Endereço de Email',
    'password' => 'Senha',
    'confirm_password' => 'Confirmar senha',
    'current_password' => 'Senha atual',

    'conditions' => 'Eu aceito as <a href=":url" target="_blank">condições</a>.',

    '2fa' => [
        'code' => 'Código de Autenticação de Dois Fatores',
        'invalid' => 'Código inválido',
    ],

    'suspended' => 'Essa conta foi suspensa.',

    'maintenance' => 'O site está em manutenção.',

    'remember' => 'Lembrar de mim',
    'forgot_password' => 'Esqueceu sua senha?',

    'verification' => [
        'sent' => 'Um link de verificação foi enviado para o seu endereço de email.',
        'check' => 'Antes de prosseguir, verifique seu email para um link de verificação.',
        'request' => 'Se você não recebeu o email, pode solicitar outro.',
        'resend' => 'Reenviar email',
    ],

    'confirmation' => 'Por favor, confirme sua senha antes de continuar.',

    'mail' => [
        'reset' => [
            'subject' => 'Notificação de senha alterada',
            'line1' => 'Você está recebendo este email porque recebemos uma solicitação de redefinição de senha para sua conta.',
            'action' => 'Redefinir a senha',
            'line2' => 'Este link de redefinição de senha expirará em :count minutos.',
            'line3' => 'Se você não solicitou uma redefinição de senha, nenhuma ação adicional é necessária.',
        ],

        'verify' => [
            'subject' => 'Verificar endereço de email',
            'line1' => 'Por favor, clique no botão abaixo para verificar seu endereço de email.',
            'action' => 'Verificar endereço de email',
            'line2' => 'Se você não criou uma conta, nenhuma ação adicional é necessária.',
        ],
    ],
];
