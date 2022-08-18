<?php

use Symfony\Component\Console\Command\Command;

use Psy\Shell as Psysh;

class Shell extends Command
{
    protected static $defaultName = 'shell';

    protected static $defaultDescription = 'Interactuar con tu aplicación';

    protected function execute($input, $output)
    {
        $shell = new Psysh();
        $shell->setIncludes(['vendor/base-php/core/database.php']);
        $shell->run();
        
        return Command::SUCCESS;
    }
}
