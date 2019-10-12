<?php

namespace ProductReview\Controllers;

use ProductReview\Models\ProductModel;
use ProductReview\Views\View;

class ProductController extends Controller
{
    private $model = 'products';
    private $view;
    private $data;

    public function __construct()
    {
        $this->model = new ProductModel();
        $this->view = new View();
    }

    public function index()
    {
        $products = $this->model->showAll();
        $this->view->render('table', $products);
    }

    public function create()
    {
        $this->view->render('form');
    }

    public function store($data)
    {
        var_dump($_FILES);
        $this->model->insert($data);
//        $this->view->render('404');

    }

    public function show()
    {
        $this->view->render('show');
    }

    public function test()
    {
        $this->view->render('table');
    }

    public function form()
    {
        $this->view->render('form');
    }

    public function test1($name)
    {
        echo $name;
    }

    public function notFound()
    {
        $this->view->render('404');
    }
}


