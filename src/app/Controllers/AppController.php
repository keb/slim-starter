<?php declare(strict_types = 1);

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use League\Plates\Engine;
use App\Config\Config;

class AppController
{
    private $tpl;
    private $config;

    public function __construct(Engine $tpl, Config $config)
    {
        $this->tpl = $tpl;
        $this->config = $config;
    }

    public function index(Request $request, Response $response): Response
    {
        $template = $this->tpl->render('index');
        $response->getBody()->write($template);
        return $response;
    }
}