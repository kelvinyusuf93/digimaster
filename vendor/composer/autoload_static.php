<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfc4f00bff3e31ba6c3377dcd83cfb22c
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Logicals\\' => 9,
        ),
        'I' => 
        array (
            'Interfaces\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Logicals\\' => 
        array (
            0 => __DIR__ . '/../..' . '/apps/logics',
        ),
        'Interfaces\\' => 
        array (
            0 => __DIR__ . '/../..' . '/apps/interfaces',
        ),
    );

    public static $prefixesPsr0 = array (
        'o' => 
        array (
            'org\\bovigo\\vfs' => 
            array (
                0 => __DIR__ . '/..' . '/mikey179/vfsStream/src/main/php',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfc4f00bff3e31ba6c3377dcd83cfb22c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfc4f00bff3e31ba6c3377dcd83cfb22c::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitfc4f00bff3e31ba6c3377dcd83cfb22c::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
