<?php

namespace ProductReview\Product;

use PDO;

class Connection
{
    protected static $instance;

    /**
     * @return mixed
     */
    public static function getInstance()
    {
        try {
            self::$instance = new \PDO('mysql:host=localhost;dbname=review', 'root', 'root');
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);

        } catch (\Exception $exception) {
            echo $exception->getMessage();
        }
        return self::$instance;
    }
}

