<?php declare(strict_types = 1);

return [
    '/'    => [['GET'], 'App\Controllers\AppController:index'],
    '/foo' => [['GET'], 'App\Controllers\AppController:foo']
];