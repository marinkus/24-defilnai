<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit89c5b284a7a681d3b0de20ed86983e53
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zigmo\\' => 6,
        ),
        'P' => 
        array (
            'Petro\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zigmo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/02',
        ),
        'Petro\\' => 
        array (
            0 => __DIR__ . '/../..' . '/01',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/01',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit89c5b284a7a681d3b0de20ed86983e53::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit89c5b284a7a681d3b0de20ed86983e53::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit89c5b284a7a681d3b0de20ed86983e53::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit89c5b284a7a681d3b0de20ed86983e53::$classMap;

        }, null, ClassLoader::class);
    }
}
