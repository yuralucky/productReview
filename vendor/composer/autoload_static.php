<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc0676501151093714f39585bde0413f6
{
    public static $files = array (
        '5d25ca0acb6055e6baf46e631711fd5a' => __DIR__ . '/../..' . '/src/config/env.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'ProductReview\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ProductReview\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'ProductReview\\Product\\Connection' => __DIR__ . '/../..' . '/src/Product/Connection.php',
        'ProductReview\\Product\\MySqlStorage' => __DIR__ . '/../..' . '/src/Product/MySqlStorage.php',
        'ProductReview\\Product\\Product' => __DIR__ . '/../..' . '/src/Product/Product.php',
        'ProductReview\\Product\\StorageInterface' => __DIR__ . '/../..' . '/src/Product/StorageInterface.php',
        'ProductReview\\Review\\Review' => __DIR__ . '/../..' . '/src/Review/Review.php',
        'ProductReview\\Sanitize' => __DIR__ . '/../..' . '/src/Sanitize.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc0676501151093714f39585bde0413f6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc0676501151093714f39585bde0413f6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc0676501151093714f39585bde0413f6::$classMap;

        }, null, ClassLoader::class);
    }
}