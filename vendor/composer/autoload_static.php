<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3827fa31eacfec39ee1a9a7b31a75599
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jayanthe365\\Helloword\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jayanthe365\\Helloword\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3827fa31eacfec39ee1a9a7b31a75599::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3827fa31eacfec39ee1a9a7b31a75599::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3827fa31eacfec39ee1a9a7b31a75599::$classMap;

        }, null, ClassLoader::class);
    }
}
