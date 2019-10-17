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

    public function showAvg($id)
    {
        $sql = 'SELECT products.id, products.name,products.image, AVG(reviews.rating) as avg_rating        
  FROM  reviews  JOIN products  ON  product_id=products.id  where products.id=' . $id;
        $stm = $this->connection->query($sql);
//        $stm->execute([$id]);
        return $stm->fetch(PDO::FETCH_ASSOC);
    }


    public
    function insert()
    {
        $data = [
            'product_id' => $this->filterDataInt($_POST['product_id']),
            'name' => $this->filterDataString($_POST['name']),
            'rating' => $this->filterDataInt($_POST['rating']),
            'commentary' => $this->filterDataString($_POST['commentary']),
        ];
        try {
            $sql = 'INSERT INTO ' . $this->table . '(product_id,name,rating,commentary) VALUES (:product_id,:name,:rating,:commentary)';
            $stm = $this->connection->prepare($sql);
            $stm->execute($data);
        } catch (\Exception $exception) {
            echo $exception->getMessage();
        };

    }

    public function showAllCommenary($id)
    {
        $sql = 'SELECT reviews.name ,reviews.rating,reviews.commentary ,reviews.created_at FROM reviews JOIN products 
        ON reviews.product_id = ' . $id . ' GROUP BY reviews.name,reviews.rating,reviews.id';
        $stm = $this->connection->query($sql);
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function showAll()
    {
        $sql = 'SELECT products.id,products.name,products.image,avg(reviews.rating) FROM products JOIN reviews on products.id=reviews.product_id group by products.id,products.image';
        $stm = $this->connection->query($sql);
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createTable()
    {
        $sql = "CREATE TABLE reviews (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                product_id INT(6) NOT NULL ,
                name VARCHAR(30) NOT NULL,
                rating INT(6),
                 commentary VARCHAR(50),
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                FOREIGN KEY (product_id) REFERENCES products(id)
                )";
        try {
            $this->connection->query($sql);
        } catch (\Exception $exception) {
            print $exception->getMessage();
        }


    }


}