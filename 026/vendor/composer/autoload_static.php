<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8f106b8f7cd983ece87d003bc7638843
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit8f106b8f7cd983ece87d003bc7638843::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit8f106b8f7cd983ece87d003bc7638843::$classMap;

        }, null, ClassLoader::class);
    }
}
