<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdf390c69476ba50494bd4bdb2b7d82c4
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdf390c69476ba50494bd4bdb2b7d82c4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdf390c69476ba50494bd4bdb2b7d82c4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdf390c69476ba50494bd4bdb2b7d82c4::$classMap;

        }, null, ClassLoader::class);
    }
}
