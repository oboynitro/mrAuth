<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0d7a189a98ec5561b50fc7c73060ab5d
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Oboynitro\\MrAuth\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Oboynitro\\MrAuth\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0d7a189a98ec5561b50fc7c73060ab5d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0d7a189a98ec5561b50fc7c73060ab5d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}