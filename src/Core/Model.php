<?php
/**
 * Created by PhpStorm.
 * User: yura
 * Date: 08.10.19
 * Time: 10:53
 */

namespace ProductReview\Core;


class Model
{
    /**
     * Filter data integer
     *
     * @param $data
     * @return mixed|string
     */
    protected function filterDataInt($data)
    {
        $data = trim($data);
        $data = filter_var($data, FILTER_SANITIZE_NUMBER_INT);
        return $data;
    }

    /**
     * Filter data string
     *
     * @param $data
     * @return mixed|string
     */
    protected function filterDataString($data)
    {
        $data = trim($data);
        $data = filter_var($data, FILTER_SANITIZE_SPECIAL_CHARS);
        return $data;
    }

}