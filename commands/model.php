<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Style\SymfonyStyle;

class MakeModel extends Command
{
    protected static $defaultName = 'make:model';

    protected static $defaultDescription = 'Create a model file with the given name';

    public function configure()
    {
        $this->addArgument('name', InputArgument::REQUIRED);
        $this->addOption('all', 'a', InputOption::VALUE_NONE, 'Create migration, model and controller');
    }

    protected function execute($input, $output)
    {
        $name = $input->getArgument('name');

        $content = file_get_contents('vendor/nisadelgado/framework/commands/examples/Model.php');
        $content = str_replace('ModelName', $name, $content);

        if (!file_exists('app/Models')) {
            mkdir('app/Models');
        }

        $fopen = fopen('app/Models/' . $name . '.php', 'w+');
        fwrite($fopen, $content);
        fclose($fopen);

        $style = new SymfonyStyle($input, $output);
        $style->success("Model '$name' created successfully.");

        $all = $input->getOption('all');

        if ($all) {
            $controller = str()->plural($name);

            $content = file_get_contents('vendor/nisadelgado/framework/commands/examples/Controller.php');
            $content = str_replace('ControllerName', $controller, $content);

            if (!file_exists('app/Controllers')) {
                mkdir('app/Controllers');
            }

            $fopen = fopen('app/Controllers/' . $controller . '.php', 'w+');
            fwrite($fopen, $content);
            fclose($fopen);

            $style->success("Controller '$controller' created successfully.");


            $migration = str()->plural($name);

            $content = file_get_contents('vendor/nisadelgado/framework/commands/examples/Migration.php');
            $content = str_replace('MigrationName', strtolower($migration), $content);

            $var = str()->singular($migration);
            $var = strtolower($var);
            $content = str_replace('VarName', $var, $content);

            $model = ucfirst(str()->singular($migration));
            $content = str_replace('ModelName', $model, $content);

            if (!file_exists('database')) {
                mkdir('database');
            }

            $name = time() . '_' . str()->snake($migration);

            $fopen = fopen('database/' . $name . '.php', 'w+');
            fwrite($fopen, $content);
            fclose($fopen);

            $style->success("Migration '$name' created successfully.");
        }

        return Command::SUCCESS;
    }
}
