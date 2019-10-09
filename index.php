<?php

use ProductReview\Core\App;
use ProductReview\ParseUrl;

require_once 'vendor/autoload.php';
//spl_autoload_register(function ($class) {
//    echo  $class ;
//});
//$obj = new App();
//$obj->run();

//$obj=new \ProductReview\Models\ReviewModel();
//print_r($obj->test());

$obj = new ParseUrl();
$obj->run();

//$router = new AltoRouter();
//$router->match('form','get');
//$router->match('test1','GET');
//$router->addRoutes('test');
//$router->map( 'GET', '/test1', 'ProductController#test1');
//$obj = new \ProductReview\Models\ReviewModel();
//$obj->insert();
//require 'form_product.php';

//$obj=new \ProductReview\Controllers\ProductController();
//$obj->form();