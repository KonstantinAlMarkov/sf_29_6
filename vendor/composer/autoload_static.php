<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit15d861f387f4876bf156911e477ad7c9
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit15d861f387f4876bf156911e477ad7c9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit15d861f387f4876bf156911e477ad7c9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit15d861f387f4876bf156911e477ad7c9::$classMap;

        }, null, ClassLoader::class);
    }
}
