<?php
/**
 * Created by PhpStorm.
 * User: yura
 * Date: 07.10.19
 * Time: 13:37
 */

namespace ProductReview\config;


class Env
{
    private $DB_CONNECTION = 'mysql';

    private $DB_HOST = 'localhost';

    private $DB_PORT = '3306';

    private $DB_DATABASE = 'review';
    private $DB_USERNAME = 'root';
    private $DB_PASSWORD = 'root';

    /**
     * @return string
     */
    public function getDBCONNECTION(): string
    {
        return $this->DB_CONNECTION;
    }

    /**
     * @return string
     */
    public function getDBHOST(): string
    {
        return $this->DB_HOST;
    }

    /**
     * @return string
     */
    public function getDBPORT(): string
    {
        return $this->DB_PORT;
    }

    /**
     * @return string
     */
    public function getDBDATABASE(): string
    {
        return $this->DB_DATABASE;
    }

    /**
     * @return string
     */
    public function getDBUSERNAME(): string
    {
        return $this->DB_USERNAME;
    }

    /**
     * @return string
     */
    public function getDBPASSWORD(): string
    {
        return $this->DB_PASSWORD;
    }


}

