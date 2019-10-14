<?php

namespace ProductReview\Controllers;


use ProductReview\Models\ReviewModel;

class ReviewController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new ReviewModel();
    }


    /**
     * Store database new review
     */
    public function store()
    {
        $this->model->insert();
        $this->show($_POST['product_id']);
    }


    /**
     * Show single product with rating and commentary
     *
     * @param $id
     */
    public function show($id)
    {

        $products = $this->model->showAvg($id);
        $commentary = $this->model->showAllCommenary($id);
        $this->render('review', $products, $commentary);
    }

    public function test()
    {
        $this->model->createTable();
    }
}