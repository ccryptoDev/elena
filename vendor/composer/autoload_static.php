<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit787e6f27987adb87672fb8ee5e701ea3
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
        'K' => 
        array (
            'Kodols\\MySQL\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
        'Kodols\\MySQL\\' => 
        array (
            0 => __DIR__ . '/..' . '/kodols/php-mysql-library/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit787e6f27987adb87672fb8ee5e701ea3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit787e6f27987adb87672fb8ee5e701ea3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit787e6f27987adb87672fb8ee5e701ea3::$classMap;

        }, null, ClassLoader::class);
    }
}
