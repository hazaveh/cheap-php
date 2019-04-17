<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc9c47c1cc6e82788a6be5278c417c90
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cheap\\' => 6,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cheap\\' => 
        array (
            0 => __DIR__ . '/../..' . '/cheap',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdc9c47c1cc6e82788a6be5278c417c90::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdc9c47c1cc6e82788a6be5278c417c90::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
