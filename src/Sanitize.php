<?php
/**
 * Created by PhpStorm.
 * User: yura
 * Date: 03.10.19
 * Time: 21:37
 */

namespace ProductReview;


class Sanitize
{
    private $input;

    public function __construct($input)
    {
        $this->input = $this->sanitizeEmail($input);
        $this->input = $this->sanitizeHtml($input);

    }

    /**
     * @param $input
     * @return string
     */
    public function sanitizeHtml($input)
    {
        return htmlentities($input, ENT_QUOTES, 'UTF-8');
    }

    /**
     * @param $input
     * @return mixed
     */
    public function sanitizeEmail($input)
    {
        return filter_var($input, FILTER_VALIDATE_EMAIL);
    }

    /**
     * @return mixed
     */
    public function getInput()
    {
        return $this->input;
    }

}

$obj=new Sanitize('<,sd;sdjapdo>');
print $obj->getInput();