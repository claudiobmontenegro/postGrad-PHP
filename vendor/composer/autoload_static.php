<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit60db4f3eb15fc33f40ce7fd34c2451b2
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hashids\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hashids\\' => 
        array (
            0 => __DIR__ . '/..' . '/hashids/hashids/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit60db4f3eb15fc33f40ce7fd34c2451b2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit60db4f3eb15fc33f40ce7fd34c2451b2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit60db4f3eb15fc33f40ce7fd34c2451b2::$classMap;

        }, null, ClassLoader::class);
    }
}
