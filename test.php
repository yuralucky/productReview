<?php
$url = 'http://localhost:8000/product/test1';


$parse = parse_url($url);
$parse = $parse['path'];
$parse=explode('/',$parse);
$controller = $parse[1];
$action = $parse[2];
print $controller;
print '<br>';
print $action;