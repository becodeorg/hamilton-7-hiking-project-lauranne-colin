<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6e8d0a94f8578d7c3e85129fa8510853
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6e8d0a94f8578d7c3e85129fa8510853::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6e8d0a94f8578d7c3e85129fa8510853::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6e8d0a94f8578d7c3e85129fa8510853::$classMap;

        }, null, ClassLoader::class);
    }
}
