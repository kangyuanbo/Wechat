<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitea7b46f0db1f427efc0a7f5f73214781
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kangyuanbo\\WeChat\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kangyuanbo\\WeChat\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitea7b46f0db1f427efc0a7f5f73214781::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitea7b46f0db1f427efc0a7f5f73214781::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitea7b46f0db1f427efc0a7f5f73214781::$classMap;

        }, null, ClassLoader::class);
    }
}
