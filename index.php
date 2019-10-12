<?php

use ProductReview\ParseUrl;

require_once 'vendor/autoload.php';

//$obj=new \ProductReview\Models\ReviewModel();
//print_r($obj->test());

$obj = new ParseUrl();
$obj->run1();
//$obj = new AltoRouter();
//$obj->setBasePath('/');
//$obj->map('GET', '/getAll', 'ProductController#form');
//$match = $obj->match();
//var_dump($obj);

//$obj=new \ProductReview\Controllers\ProductController();
//$obj->form();

//$obj=new \ProductReview\Controllers\ReviewController();
//print_r($obj->index());
//$obj=new \ProductReview\Models\ProductModel();
//print_r($obj->showSortBy('author'));