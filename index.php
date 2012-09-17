<?php

require 'lib/Slim/Slim.php';
\Slim\Slim::registerAutoLoader();

$app = new \Slim\Slim(array(
	'debug' => true,
    'templates.path' => './templates'
));

$app->get('/', function() use ($app) {
    $app->render('index.php');
});

$app->run();

?>