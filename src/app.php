<?php declare(strict_types = 1);

use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

/**
 * Get Container
 */
$container = include_once __DIR__ . '/container.php';

/**
 * Create Slim Application
 */
AppFactory::setContainer($container);
$app = AppFactory::create();

/**
 * Get and Map Routes
 */
$routes = include_once __DIR__ . '/routes.php';
foreach ($routes as $pattern => [$methods, $callable]) {
    $app->map($methods, $pattern, $callable);
}

/**
 * Middleware
 */

/**
 * Error Middleware
 * @param bool $displayErrorDetails -> Should be set to false in production
 * @param bool $logErrors -> Paramter is passed to the default ErrorHandler
 * @param bool $logErrorDetails -> Display error details in error log; replaceable by callable
 * 
 * Note: Add this middleware last
 */
$errorMiddleware = $app->addErrorMiddleware(true, true, true);

/**
 * Run Application
 */
$app->run();