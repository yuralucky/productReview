<?php
/**
 * Created by PhpStorm.
 * User: yura
 * Date: 03.10.19
 * Time: 19:36
 */

namespace ProductReview\Review;


class Review
{
    private $id;
    private $firstname;
    private $mark = 10;
    private $commentary;
    private $date;
    private $email;


    public function __construct($firstname, $email)
    {
        $this->email = $email;
        $this->firstname = $firstname;
    }

    /**
     * @return int
     */
    public function getMark()
    {
        return $this->mark;
    }

}

$obj = new Review();
print $obj->getMark();