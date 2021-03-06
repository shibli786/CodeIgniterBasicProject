<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5500c9d1ad7a85fec04fec3fd7a713cb
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Cache\\' => 22,
            'Doctrine\\Common\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Doctrine\\Common\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache',
        ),
        'Doctrine\\Common\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/common/lib/Doctrine/Common',
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
        'D' => 
        array (
            'Doctrine\\DBAL\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/dbal/lib',
            ),
            'Doctrine\\Common\\Lexer\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/lexer/lib',
            ),
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
            'Doctrine\\Common\\Collections\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/collections/lib',
            ),
            'Doctrine\\Common\\Annotations\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/annotations/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5500c9d1ad7a85fec04fec3fd7a713cb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5500c9d1ad7a85fec04fec3fd7a713cb::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit5500c9d1ad7a85fec04fec3fd7a713cb::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
