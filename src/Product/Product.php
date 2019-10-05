<?php

namespace ProductReview\Product;

class Product
{
    /**
     * @var string
     */
    private $name = 'Ben';
    /**
     * @var string
     */
    private $image;
    /**
     * @var
     */
    private $date;
    /**
     * @var string
     */
    private $author;
    /**
     * @var integer
     */
    private $countReview;


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return int
     */
    public function getCountReview()
    {
        return $this->countReview;
    }

    /**
     * @param int $countReview
     */
    public function setCountReview($countReview)
    {
        $this->countReview = $countReview;
    }


}