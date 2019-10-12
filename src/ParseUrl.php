<?php

namespace ProductReview;

use ProductReview\Controllers\ProductController;
use ProductReview\Controllers\ReviewController;
use ProductReview\Models\ProductModel;



class ParseUrl
{

    protected $controller = 'ProductController.php';

    protected $method = 'index';

    protected $params = [];


//    public function __construct()
//    {
//        require_once  'Controllers/ProductController.php';
//        $url = $this->getRoute();
//        $controller = ucfirst($url[1] . 'Controller.php');
//        print $controller;
//        print 'Controllers/' . $controller;
//        if (file_exists(__DIR__ . '/Controllers/' . $controller)) {
//            $this->controller = $controller;
//            print 'yes';
//        } else {
//            print 'No';
//        }
//        require_once '/Controllers/' . $this->controller;
//        $b=__DIR__.'/Controllers/' . $this->controller;
//        print($b);
//        $this->controller = new $this->controller;
//        var_dump($this->controller);
//    }

    public function getRoute()
    {
//        $uri = explode('/', filter_var(rtrim($_SERVER['REQUEST_URI']), FILTER_SANITIZE_URL));
        $uri=$_SERVER['REQUEST_URI'];
        return $uri;
    }

    public function run1()
    {
        switch ($this->getRoute()) {
            case '/':
                {
                    $obj = new ProductController();
                    $obj->index();
                    break;
                }
            case '/test':
                {
                    $obj = new ProductController();
                    $obj->test1('name');
                    break;
                }
            case '/show':
                {
                    $obj = new ProductController();
                    $obj->show(1);
                    break;
                }
            case '/form':
                {
                    $obj = new ProductController();
                    $obj->create();
                    break;
                }
            case '/store':
                {
                    $obj = new ProductController();
                    $obj->store($_POST);
                    $obj->index();
                    break;
                }
            case'/reviews':
                {
                    $obj = new ReviewController();
                    $obj->index();
                    break;
                }

            default :
                {
                    $obj = new ProductController();
                    $obj->notFound();
                    break;
                }

        }

    }


    public function run()
    {
        $action = $this->getRoute();
        $parse = parse_url($action);
        $parse = $parse['path'];
        $parse = explode('/', $parse);
        $controller = $parse[1];
        $action = $parse[2];
//        $argc = $parse[3];
        print $controller;
        print '/';
        print '<br>';
        print $action;
        print '<br>';
//        print $argc;
        $controller = ucfirst($controller . 'Controller.php');
        $controller = __DIR__ . '/Controllers/' . $controller;
        print $controller;
        if (file_exists($controller)) {
            print 'Yes';
            require_once($controller);
            $obj = new  ProductController();
            $obj->index();
            call_user_func_array(array($controller, $action), $argc = array());

//            $obj = new ProductController();
//            $obj->index();
        } else {
            print 'No';
        }
        print '<br>';


    }
}