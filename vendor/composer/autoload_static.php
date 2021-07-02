<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit47995a6a6d971cc9c576d3a5a6114ff9
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Plugin\\Scaffold\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Plugin\\Scaffold\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit47995a6a6d971cc9c576d3a5a6114ff9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit47995a6a6d971cc9c576d3a5a6114ff9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit47995a6a6d971cc9c576d3a5a6114ff9::$classMap;

        }, null, ClassLoader::class);
    }
}