<?php

namespace ProductReview\Models;

use PDO;
use ProductReview\config\DbConnect;
use ProductReview\Core\Model;


class ProductModel extends Model
{
    protected $connection = null;
    protected $table = 'products';

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
        try {
            $sql = 'INSERT INTO ' . $this->table . '(name,image,created_at,author,price) VALUES (:name,:image,:created_at,:author,:price)';
            $stm = $this->connection->prepare($sql);
            $stm->execute($data);
        } catch (\Exception $exception) {
            echo $exception->getMessage();
        };

    }

    public function showAll()
    {
        $stm = $this->connection->query('SELECT * FROM ' . $this->table);
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

