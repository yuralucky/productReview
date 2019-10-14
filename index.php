<?php

namespace ProductReview;

require_once 'vendor/autoload.php';

$router = new \Buki\Router([
    'paths' => [
        'controllers' => 'src/Controllers'
    ],
    'namespaces' => [
        'controllers' => 'ProductReview\Controllers'
    ]
]);



$router->add('get', '/', 'ProductController@index');
$router->add('get', '/form', 'ProductController@create');
$router->add('post', '/store', 'ProductController@store');
$router->add('get', '/sort/:any', 'ProductController@sort');
$router->add('get', '/sortDesc/:any', 'ProductController@sortDesc');

$router->add('post', '/storeReview', 'ReviewController@store');
$router->add('get', '/show/:id', 'ReviewController@show');
$router->add('get','/test','ProductController@test');
$router->add('get','/test1','ReviewController@test');

$router->run();