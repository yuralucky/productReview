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

    public function __construct()
    {
        $this->connection = DbConnect::getInstance();
    }

    public function show($id)
    {
        $stm = $this->connection->query('SELECT * FROM ' . $this->table . ' WHERE id=' . $id);
        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    public function insert($data)
    {
        $data = [
            'name' => $data['name'],
            'image' => time() . $_FILES['image']['name'],
            'author' => $data['author'],
            'price' => $data['price'],
            'created_at' => $data['created_at']
        ];
        $image = $_FILES["image"]["tmp_name"];

        $dir = '/home/yura/PhpstormProjects/ProductReview/src/image/';
        $d= move_uploaded_file($image, $dir);
        var_dump($_FILES['image']['error']);

        var_dump($d);
        try {
            $sql = 'INSERT INTO ' . $this->table . '(name,image,created_at,author,price)  VALUES (:name,:image,:created_at,:author,:price)';
            $stm = $this->connection->prepare($sql);
            $stm->execute($data);
        } catch (\Exception $exception) {
            echo $exception->getMessage();
        };

    }

    public function showAll()
    {
        $sql = 'SELECT products.name,products.image,products.created_at,products.author , COUNT(commentary) as amount FROM products 
        JOIN  reviews  WHERE products.id=reviews.product_id GROUP by products.id,products.image ORDER BY products.created_at DESC  limit 5';
        $stm = $this->connection->query($sql);
//        $stm->execute($sql);
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function showSortBy($sort)
    {
        $stm = $this->connection->query('SELECT * FROM ' . $this->table . ' ORDER BY ' . $sort);
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function showSortByDesc($sort)
    {
        $stm = $this->connection->query('SELECT * FROM ' . $this->table . ' ORDER BY ' . $sort . ' DESC');
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }


    public function test()
    {
        return 'test';
    }

}

