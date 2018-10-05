<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/', function (Request $request, Response $response) {
    // Render index view
    return $this->renderer->render($response, 'index.phtml');
});
$app->get('/en', function (Request $request, Response $response) {
  return $this->renderer->render($response, 'index-en.phtml');
});
