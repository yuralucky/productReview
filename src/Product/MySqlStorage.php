<?php

namespace ProductReview\Product;

//require '../../vendor/autoload.php';

//use ProductReview\Connection;

class MySqlStorage
//    implements StorageInterface
{
    protected $connection = null;

    protected $model = 'products';

    public function __construct()
    {
        $this->connection = Connection::getInstance();
    }

    public function show($id)
    {
        $stm = $this->connection->query('SELECT * FROM ' . $this->model . ' WHERE id=' . $id);
        return $stm->fetchAll();
    }

    public function create()
    {
        $data = [
            'firstname' => 'lena',
            'email' => 'lena@mail.com'
        ];
        $sql = 'INSERT INTO ' . $this->model . '(firstname,email) VALUES (:firstname,:email)';
        $stm = $this->connection->prepare($sql);
        $stm->execute($data);
    }

    public function showAll()
    {
        $stm = $this->connection->query('SELECT * FROM ' . $this->model);
        return $stm->fetchAll();
    }
}

$obj = new MySqlStorage();
$obj->create();