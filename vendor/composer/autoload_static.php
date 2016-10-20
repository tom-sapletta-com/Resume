<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1d750299f4398c3ead955368283f7bec
{
    public static $files = array (
        '04c6c5c2f7095ccf6c481d3e53e1776f' => __DIR__ . '/..' . '/mustangostang/spyc/Spyc.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Resume\\' => 7,
        ),
        'P' => 
        array (
            'Phunc\\' => 6,
        ),
        'C' => 
        array (
            'Config\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Resume\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Phunc\\' => 
        array (
            0 => __DIR__ . '/..' . '/tom-sapletta-com/phunc/src',
        ),
        'Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/tom-sapletta-com/phunc/config',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1d750299f4398c3ead955368283f7bec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1d750299f4398c3ead955368283f7bec::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
