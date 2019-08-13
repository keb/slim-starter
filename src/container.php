<?php declare(strict_types = 1);

use function DI\create;

require __DIR__ . '/../vendor/autoload.php';

/**
 * Configurations
 */
$config = include_once __DIR__ . '/../config.php';

/**
 * PHP Definitions
 */
$builder = new DI\ContainerBuilder();
$builder->addDefinitions([
    // Config Object
    App\Config\Config::class => create()
        ->constructor($config)
    ,

    // Templating Engine
    League\Plates\Engine::class => create()
        ->constructor($config['app']['templates_path'])
]);

$container = $builder->build();
return $container;