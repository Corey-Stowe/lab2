<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13df48b4d07b9b10bed28ded6b20271e
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit13df48b4d07b9b10bed28ded6b20271e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit13df48b4d07b9b10bed28ded6b20271e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit13df48b4d07b9b10bed28ded6b20271e::$classMap;

        }, null, ClassLoader::class);
    }
}
