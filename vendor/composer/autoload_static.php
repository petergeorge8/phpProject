<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4359f3691be3fa99e4ba07096638994f
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4359f3691be3fa99e4ba07096638994f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4359f3691be3fa99e4ba07096638994f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4359f3691be3fa99e4ba07096638994f::$classMap;

        }, null, ClassLoader::class);
    }
}
