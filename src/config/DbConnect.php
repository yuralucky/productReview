<?php
/**
 * Created by PhpStorm.
 * User: yura
 * Date: 07.10.19
 * Time: 13:35
 */

namespace ProductReview\config;


use PDO;

class DbConnect
{
    protected static $instance;

    protected $db;

    public function __construct()
    {
        $this->db = Env::mysql();
    }

    /**
     * @return mixed
     */
    public static function getInstance()
    {
        try {
            self::$instance = new PDO('mysql:host=localhost;dbname=review', 'root', 'root');
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);

        } catch (\Exception $exception) {
            echo $exception->getMessage();
        }
        return self::$instance;
    }

}