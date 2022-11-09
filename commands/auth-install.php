<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Style\SymfonyStyle;

class AuthInstall extends Command
{
    protected static $defaultName = 'auth:install';

    protected static $defaultDescription = 'Instala los controladores y recursos de autenticación';

    protected function execute($input, $output)
    {
        copy('vendor/base-php/core/commands/auth/controllers/AuthController.php', 'app/Controllers/AuthController.php');
        copy('vendor/base-php/core/commands/auth/controllers/DashboardController.php', 'app/Controllers/DashboardController.php');
        copy('vendor/base-php/core/commands/auth/controllers/UserController.php', 'app/Controllers/UserController.php');

        if (!file_exists('app/Mails')) {
            mkdir('app/Mails');
        }

        copy('vendor/base-php/core/commands/auth/mails/PasswordRecoveryEmail.php', 'app/Mails/PasswordRecoveryEmail.php');

        if (!file_exists('app/Middleware')) {
            mkdir('app/Middleware');
        }

        copy('vendor/base-php/core/commands/auth/middleware/Auth.php', 'app/Middleware/Auth.php');
        copy('vendor/base-php/core/commands/auth/middleware/Permission.php', 'app/Middleware/Permission.php');

        if (!file_exists('app/Validations')) {
            mkdir('app/Validations');
        }

        copy('vendor/base-php/core/commands/auth/validations/UserStoreValidation.php', 'app/Validations/UserStoreValidation.php');
        copy('vendor/base-php/core/commands/auth/validations/UserUpdateValidation.php', 'app/Validations/UserUpdateValidation.php');

        copy('vendor/base-php/core/commands/auth/css/auth.css', 'resources/assets/css/auth.css');
        copy('vendor/base-php/core/commands/auth/css/dashboard.css', 'resources/assets/css/dashboard.css');

        copy('vendor/base-php/core/commands/auth/img/user.png', 'resources/assets/img/user.png');

        if (!file_exists('resources/assets/js')) {
            mkdir('resources/assets/js');
        }

        copy('vendor/base-php/core/commands/auth/js/main.js', 'resources/assets/js/main.js');

        copy('vendor/base-php/core/commands/auth/lang/auth.php', 'resources/lang/es/auth.php');
        copy('vendor/base-php/core/commands/auth/lang/dashboard.php', 'resources/lang/es/dashboard.php');
        copy('vendor/base-php/core/commands/auth/lang/pagination.php', 'resources/lang/es/pagination.php');
        copy('vendor/base-php/core/commands/auth/lang/users.php', 'resources/lang/es/users.php');
        copy('vendor/base-php/core/commands/auth/lang/validations.php', 'resources/lang/es/validations.php');

        if (!file_exists('resources/views/auth')) {
            mkdir('resources/views/auth');
        }

        if (!file_exists('resources/views/components')) {
            mkdir('resources/views/components');
        }

        if (!file_exists('resources/views/dashboard')) {
            mkdir('resources/views/dashboard');
        }

        if (!file_exists('resources/views/dashboard')) {
            mkdir('resources/views/dashboard');
        }

        copy('vendor/base-php/core/commands/auth/views/auth/2fa.blade.php', 'resources/views/auth/2fa.blade.php');
        copy('vendor/base-php/core/commands/auth/views/auth/forgot-password.blade.php', 'resources/views/auth/forgot-password.blade.php');
        copy('vendor/base-php/core/commands/auth/views/auth/login.blade.php', 'resources/views/auth/login.blade.php');
        copy('vendor/base-php/core/commands/auth/views/auth/recover.blade.php', 'resources/views/auth/recover.blade.php');
        copy('vendor/base-php/core/commands/auth/views/auth/register.blade.php', 'resources/views/auth/register.blade.php');
        copy('vendor/base-php/core/commands/auth/views/components/alert.blade.php', 'resources/views/components/alert.blade.php');
        copy('vendor/base-php/core/commands/auth/views/components/button.blade.php', 'resources/views/components/button.blade.php');
        copy('vendor/base-php/core/commands/auth/views/components/button-link.blade.php', 'resources/views/components/button-link.blade.php');
        copy('vendor/base-php/core/commands/auth/views/components/file-button.blade.php', 'resources/views/components/file-button.blade.php');
        copy('vendor/base-php/core/commands/auth/views/components/input.blade.php', 'resources/views/components/input.blade.php');
        copy('vendor/base-php/core/commands/auth/views/components/label.blade.php', 'resources/views/components/label.blade.php');
        copy('vendor/base-php/core/commands/auth/views/components/social-button.blade.php', 'resources/views/components/social-button.blade.php');
        copy('vendor/base-php/core/commands/auth/views/components/template-auth.blade.php', 'resources/views/components/template-auth.blade.php');
        copy('vendor/base-php/core/commands/auth/views/components/template-dashboard.blade.php', 'resources/views/components/template-dashboard.blade.php');
        copy('vendor/base-php/core/commands/auth/views/dashboard/index.blade.php', 'resources/views/dashboard/index.blade.php');
        copy('vendor/base-php/core/commands/auth/views/users/create.blade.php', 'resources/views/dashboard/create.blade.php');
        copy('vendor/base-php/core/commands/auth/views/users/edit.blade.php', 'resources/views/dashboard/edit.blade.php');
        copy('vendor/base-php/core/commands/auth/views/users/index.blade.php', 'resources/views/dashboard/index.blade.php');

        $content = file_get_contents('vendor/base-php/core/commands/auth/routes.php');
        $fopen = fopen('app/routes.php', 'a+');
        fwrite($fopen, $content);

        system('npm install alpinejs@3.10.5 flowbite@1.5.3 sweetalert2@11.6.5');

        $style = new SymfonyStyle($input, $output);
        $style->success("Autenticación instalada satisfactoriamente.");

        return Command::SUCCESS;
    }
}
