<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2948bd210a8be025dfcec89b6ee15fb8
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'GutenbergCloud\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'GutenbergCloud\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static $classMap = array (
        'GutenbergCloud\\GutenbergCloud' => __DIR__ . '/../..' . '/core/GutenbergCloud.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2948bd210a8be025dfcec89b6ee15fb8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2948bd210a8be025dfcec89b6ee15fb8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2948bd210a8be025dfcec89b6ee15fb8::$classMap;

        }, null, ClassLoader::class);
    }
}
