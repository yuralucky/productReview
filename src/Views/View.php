<?php
/**
 * Created by PhpStorm.
 * User: yura
 * Date: 08.10.19
 * Time: 14:56
 */

namespace ProductReview\Views;


class View
{
    public function render($content, $products=[])
    {

        extract($products);
        $content=$content.'.php';
        include 'template.php';
    }

}