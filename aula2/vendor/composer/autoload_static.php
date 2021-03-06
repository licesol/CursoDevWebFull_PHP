<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit578636da85939aaac9ed87b6d262b4be
{
    public static $files = array (
        '4b41974804c6869649fca82d0768f081' => __DIR__ . '/../..' . '/src/helpers/helper_routes.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
        'D' => 
        array (
            'Database\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit578636da85939aaac9ed87b6d262b4be::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit578636da85939aaac9ed87b6d262b4be::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit578636da85939aaac9ed87b6d262b4be::$classMap;

        }, null, ClassLoader::class);
    }
}
