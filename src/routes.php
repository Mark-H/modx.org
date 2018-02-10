<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/', \MODXorg\Controllers\Home::class . ':get')->setName('home');
$app->get('/explore', function(\Slim\Http\Request $request, \Slim\Http\Response $response, array $args) {
    return (new \MODXorg\Controllers\Simple($this))
        ->returnTemplate('explore.twig', $request, $response, $args);
})->setName('explore');
