<?php
/**
 * Created by PhpStorm.
 * User: yura
 * Date: 09.10.19
 * Time: 19:03
 */

namespace ProductReview\Controllers;


use ProductReview\Models\ReviewModel;
use ProductReview\Views\View;

class ReviewController extends Controller
{
    private $model = 'reviews';
    private $view;

    public function __construct()
    {
        $this->model = new ReviewModel();
        $this->view = new View();
    }

    public function index()
    {
        $products = $this->model->showAll();
//        return $products;
         $this->view->render('review',$products);
    }

    public function store($data)
    {
        $this->model->insert($this->sanitizeData($data));

    }

    public function show($id)
    {
        return $this->view->render('show');
    }
}