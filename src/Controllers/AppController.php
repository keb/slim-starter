<?php declare(strict_types = 1);

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use App\Services\FooService;

class AppController
{
    private $foo;

    public function __construct(FooService $foo)
    {
        $this->foo = $foo;
    }

    public function index(Request $request, Response $response): Response
    {
        $response->getBody()->write('hello world');
        return $asdf;
    }

    public function foo(Request $request, Response $response): Response
    {
        $response->getBody()->write( $this->foo->foo() );
        return $response;
    }
}