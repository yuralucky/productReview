<?php

namespace ProductReview\Models;

use PDO;
use ProductReview\config\DbConnect;
use ProductReview\Core\Model;

class ReviewModel extends Model
{
    protected $connection = null;
    protected $table = 'reviews';

    public function __construct()
    {
        $this->connection = DbConnect::getInstance();
    }

    public function show($id)
    {
        $stm = $this->connection->query('SELECT * FROM ' . $this->table . ' WHERE id=' . $id);
        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    public function createTable()
    {
        $sql = 'IF NOT EXISTS CREATE TABLE  toto(
        id INT(2) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(30) NOT NULL,
        rating INT(2) 
        commentary VARCHAR(30) NOT NULL,
    )';
        if (
            $this->connection->query($sql) === true) {
            echo 'Ok';
        } else {
            echo 'error';
        }
    }

    public
    function insert()
    {
        $data = [
            'product_id' => 2,
            'name' => 'ira',
            'rating' => 10,
            'created_at' => '11.01.2018',
            'commentary' => 'super',

        ];
        try {
            $sql = 'INSERT INTO ' . $this->table . '(product_id,name,rating,commentary, created_at) VALUES (:product_id,:name,:rating,:commentary,:created_at)';
            $stm = $this->connection->prepare($sql);
            $stm->execute($data);
        } catch (\Exception $exception) {
            echo $exception->getMessage();
        };

    }

    public
    function showAll()
    {
        $sql = 'select products.id,products.image,avg(reviews.rating) FROM products JOIN reviews on products.id=reviews.product_id group by products.id,products.image';
        $stm = $this->connection->query($sql);
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public
    function test()
    {
        return 'test';
    }

}