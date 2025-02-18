<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit50530d732950b8f394fe2c0af643d581
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Migue\\Timetrack\\Models\\' => 23,
            'Migue\\Timetrack\\Helpers\\' => 24,
            'Migue\\Timetrack\\Entities\\' => 25,
            'Migue\\Timetrack\\Database\\' => 25,
            'Migue\\Timetrack\\Controllers\\' => 28,
            'Migue\\Timetrack\\Config\\' => 23,
            'Migue\\Timetrack\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Migue\\Timetrack\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Models',
        ),
        'Migue\\Timetrack\\Helpers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Helpers',
        ),
        'Migue\\Timetrack\\Entities\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Entities',
        ),
        'Migue\\Timetrack\\Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Database',
        ),
        'Migue\\Timetrack\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Controllers',
        ),
        'Migue\\Timetrack\\Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Config',
        ),
        'Migue\\Timetrack\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit50530d732950b8f394fe2c0af643d581::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit50530d732950b8f394fe2c0af643d581::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit50530d732950b8f394fe2c0af643d581::$classMap;

        }, null, ClassLoader::class);
    }
}
