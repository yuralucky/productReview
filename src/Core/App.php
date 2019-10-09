<?php
/**
 * Created by PhpStorm.
 * User: yura
 * Date: 08.10.19
 * Time: 11:42
 */

namespace ProductReview\Core;
use ProductReview\Controllers\ProductController;

class App
{
    public $route = [
        '/' => ['product', 'index'],
        '/test' => ['product', 'test']
    ];

    public function getRoute()
    {
        $uri = $_SERVER['REQUEST_URI'];
        return array_pop(explode('/', $uri));
    }

    public function run()
    {
        $action = $this->getRoute();
        print $action;
        print '<br>';
        $controller = ucfirst($action . 'Controller.php');
        $controller = __DIR__ . '/Controllers/' . $controller;
        print $controller;
        if (file_exists($controller)) {
            print 'Yes';
            require_once($controller);
            $obj = new ProductController();
            print_r($obj->index());
        } else {
            print 'No';
        }
        print '<br>';

//        print __DIR__ .'/Controllers/'. $controller;
        $action = 'test1';
        return call_user_func_array(array($controller, $action), []);

    }
}