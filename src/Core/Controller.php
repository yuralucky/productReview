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
    protected function sanitizeData(array $arr)
    {
        $cleanArray = array();
        foreach ($arr as $data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlentities($data);
            $cleanArray[] = $data;
        }
        return $cleanArray;
    }

    public function render($content, $templateName = 'template.php', $params = [])
    {
        ob_start();
        $params = $_GET;
        include '../../Views/template.php';
        $content = ob_get_clean();
        $content = $content . '.php';
    }
}