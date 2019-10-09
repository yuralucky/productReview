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
        return $this->view->render('table', $products);
    }

    public function create($request)
    {
        return $this->view->render('form');
    }

    public function store($data)
    {
        $this->model->insert($this->sanitizeData($data)
        );
    }

    public function show($id)
    {
        return $this->view->render('show');
//        return $this->model->show($id);

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
}


