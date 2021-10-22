<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0cf7d20664a411c968adf572415b842f
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0cf7d20664a411c968adf572415b842f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0cf7d20664a411c968adf572415b842f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0cf7d20664a411c968adf572415b842f::$classMap;

        }, null, ClassLoader::class);
    }
}
