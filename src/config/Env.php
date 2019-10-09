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

    public static function mysql()
    {
        return $db = [
            'DB_CONNECTION' => 'mysql',
            'DB_HOST' => 'localhost',
            'DB_PORT' => '3306',
            'DB_DATABASE' => 'review',
            'DB_USERNAME' => 'root',
            'DB_PASSWORD' => ''
        ];
    }
}

$obj=Env::mysql();
print_r( $obj['DB_CONNECTION'])
;