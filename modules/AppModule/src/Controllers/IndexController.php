<?php

namespace AppModule\Controllers;

use GPDCore\Routing\AbstractAppController;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class IndexController extends AbstractAppController
{


    public function dispatch(ServerRequestInterface $request): ResponseInterface
    {
        return $this->createJsonResponse([
            "message" => "Hello World!"
        ]);
    }
}
