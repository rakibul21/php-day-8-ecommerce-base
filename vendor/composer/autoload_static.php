<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit00c3345ecebee373b0c9d7b68dd75a9f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit00c3345ecebee373b0c9d7b68dd75a9f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit00c3345ecebee373b0c9d7b68dd75a9f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit00c3345ecebee373b0c9d7b68dd75a9f::$classMap;

        }, null, ClassLoader::class);
    }
}