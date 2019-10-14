<?php

namespace ProductReview\Controllers;

use ProductReview\Models\ProductModel;

class ProductController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new ProductModel();
    }

    /**
     * show main page with data from database
     */
    public function index()
    {
        $products = $this->model->showAll();
        $this->render('table', $products);
    }

    /**
     * show create form new product
     */
    public function create()
    {
        $this->render('form');
    }

    /**
     * store new product in database
     */
    public function store()
    {
        $this->model->insert();
        $products = $this->model->showAll();
        $this->render('table', $products);

    }

    /**
     * Show sort table asc
     *
     * @param $name
     */
    public function sort($name)
    {
        $products = $this->model->showSortBy($name);
        $this->render('table', $products);
    }

    /**
     *  Show sort table desc
     *
     * @param $name
     */
    public function sortDesc($name)
    {
        $products = $this->model->showSortByDesc($name);
        $this->render('table', $products);
    }

    public function test()
    {
        $this->model->createTable();
    }
}


