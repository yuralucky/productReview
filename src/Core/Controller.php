<?php
/**
 * Created by PhpStorm.
 * User: yura
 * Date: 07.10.19
 * Time: 23:07
 */

namespace ProductReview\Controllers;


class Controller
{


    public function render($content, $products=[],$commentary=[])
    {

        extract($products);
        extract($commentary);
        $content=$content.'.php';
        include $_SERVER['DOCUMENT_ROOT'].'/src/Views/template.php';
    }




}