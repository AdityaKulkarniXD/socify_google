<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0ff1450befa46ba98aa2f84207301252
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0ff1450befa46ba98aa2f84207301252::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0ff1450befa46ba98aa2f84207301252::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0ff1450befa46ba98aa2f84207301252::$classMap;

        }, null, ClassLoader::class);
    }
}
