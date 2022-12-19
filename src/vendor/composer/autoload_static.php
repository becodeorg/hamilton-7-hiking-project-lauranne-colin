<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf042e09d0111c36e05fd06b2c98484b5
{
    public static $classMap = array (
        'Auth' => __DIR__ . '/../..' . '/models/Auth.php',
        'AuthController' => __DIR__ . '/../..' . '/controllers/AuthController.php',
        'ComposerAutoloaderInitf042e09d0111c36e05fd06b2c98484b5' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitf042e09d0111c36e05fd06b2c98484b5' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Database' => __DIR__ . '/../..' . '/models/Database.php',
        'Product' => __DIR__ . '/../..' . '/models/Product.php',
        'Hike' => __DIR__ . '/../..' . '/models/Hike.php',
        'ProductController' => __DIR__ . '/../..' . '/controllers/ProductController.php',
        'HikeController' => __DIR__ . '/../..' . '/controllers/HikeController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitf042e09d0111c36e05fd06b2c98484b5::$classMap;

        }, null, ClassLoader::class);
    }
}
