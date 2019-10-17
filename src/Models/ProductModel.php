<?php

namespace ProductReview\Models;

use PDO;
use ProductReview\config\DbConnect;
use ProductReview\Core\Model;


class ProductModel extends Model
{
    protected $connection = null;
    protected $table = 'products';
    protected $tableRel = 'reviews';
    protected $sql = 'SELECT products.id, products.name,products.image,products.created_at,products.author , COUNT(commentary) as amount FROM products 
        LEFT JOIN  reviews ON 
          products.id=reviews.product_id
           GROUP by products.id,products.image ';

    public function __construct()
    {
        $this->connection = DbConnect::getInstance();
    }


    /**
     * Store new prodduct
     */
    public function insert()
    {
        $data = [
            'name' => $this->filterDataString($_POST['name']),
            'image' => time() . $_FILES['image']['name'],
            'author' => $this->filterDataString($_POST['author']),
            'price' => $this->filterDataInt($_POST['price']),
        ];
        $uploadfile = 'img/' . $data['image'];
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
            echo 'file upload';
        } else {
            echo 'No';
        }

        try {
            $sql = 'INSERT INTO ' . $this->table . '(name,image,author,price)  VALUES (:name,:image,:author,:price)';
            $stm = $this->connection->prepare($sql);
            $stm->execute($data);
        } catch (\Exception $exception) {
            echo $exception->getMessage();
        };

    }

    /**
     * Select all records from databases table
     *
     * @return mixed
     */
    public function showAll()
    {

        $stm = $this->connection->query($this->sql);
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Select all records from databases table sorted
     *
     * @param $sort
     * @return mixed
     */
    public function showSortBy($sort)
    {
        $stm = $this->connection->query($this->sql . ' ORDER BY ' . $this->filterDataString($sort));
//        $stm->execute(['sort' => $sort]);
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Select all records from databases table sorted desc
     *
     * @param $sort
     * @return mixed
     */
    public function showSortByDesc($sort)
    {
        $stm = $this->connection->query($this->sql . ' ORDER BY ' . $this->filterDataString($sort) . ' DESC');
//        $stm->execute(['sort' => $sort]);
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     *Create new table
     */
    public function createTable()
    {
        $sql = "CREATE TABLE products (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(30) NOT NULL,
                price INT(6),
                image VARCHAR(30) NOT NULL,
                author VARCHAR(50),
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                )";
        try {
            $this->connection->query($sql);
        } catch (\Exception $exception) {
            print $exception->getMessage();
        }


    }


}

