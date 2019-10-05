<?php
/**
 * Created by PhpStorm.
 * User: yura
 * Date: 03.10.19
 * Time: 10:50
 */

namespace ProductReview\Product;


interface StorageInterface
{
    public function showAll();

    public function create();

    public function show($id);
}