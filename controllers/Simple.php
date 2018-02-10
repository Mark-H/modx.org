<?php

namespace MODXorg\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;

class Simple extends Base
{
    /**
     * @param string $template Template file to render
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function returnTemplate($template, Request $request, Response $response, array $args = array())
    {
        $this->initialize($request, $response, $args);
        return $this->render($template);
    }
}