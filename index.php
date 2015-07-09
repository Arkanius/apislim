<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 09/07/2015
 * Time: 17:51
 */

require '../slim/Slim/Slim.php';
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
$app->response()->header('Content-Type', 'application/json;charset=utf-8');
$app->get('/', function () {
    echo "SlimProdutos";
});

$app->run();
