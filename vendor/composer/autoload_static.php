<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2948bd210a8be025dfcec89b6ee15fb8
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SevenFields\\' => 12,
        ),
        'G' => 
        array (
            'GutenbergCloud\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SevenFields\\' => 
        array (
            0 => __DIR__ . '/..' . '/foadyousefi/seven-fields/src',
        ),
        'GutenbergCloud\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static $classMap = array (
        'GutenbergCloud\\Activator' => __DIR__ . '/../..' . '/core/Activator.php',
        'GutenbergCloud\\Blocks\\Blocks' => __DIR__ . '/../..' . '/core/Blocks/Blocks.php',
        'GutenbergCloud\\Blocks\\Explore' => __DIR__ . '/../..' . '/core/Blocks/Explore.php',
        'GutenbergCloud\\Blocks\\Options' => __DIR__ . '/../..' . '/core/Blocks/Options.php',
        'GutenbergCloud\\GutenbergCloud' => __DIR__ . '/../..' . '/core/GutenbergCloud.php',
        'GutenbergCloud\\Settings\\Settings' => __DIR__ . '/../..' . '/core/Settings/Settings.php',
        'SevenFields\\Bootstrap\\Bootstrap' => __DIR__ . '/..' . '/foadyousefi/seven-fields/src/Bootstrap/Bootstrap.php',
        'SevenFields\\Container\\Container' => __DIR__ . '/..' . '/foadyousefi/seven-fields/src/Container/Container.php',
        'SevenFields\\Fields\\Checkbox' => __DIR__ . '/..' . '/foadyousefi/seven-fields/src/Fields/Checkbox.php',
        'SevenFields\\Fields\\Fields' => __DIR__ . '/..' . '/foadyousefi/seven-fields/src/Fields/Fields.php',
        'SevenFields\\Fields\\Header' => __DIR__ . '/..' . '/foadyousefi/seven-fields/src/Fields/Header.php',
        'SevenFields\\Fields\\Html' => __DIR__ . '/..' . '/foadyousefi/seven-fields/src/Fields/Html.php',
        'SevenFields\\Fields\\Multiselect' => __DIR__ . '/..' . '/foadyousefi/seven-fields/src/Fields/Multiselect.php',
        'SevenFields\\Fields\\Select' => __DIR__ . '/..' . '/foadyousefi/seven-fields/src/Fields/Select.php',
        'SevenFields\\Fields\\Text' => __DIR__ . '/..' . '/foadyousefi/seven-fields/src/Fields/Text.php',
        'SevenFields\\Fields\\Textarea' => __DIR__ . '/..' . '/foadyousefi/seven-fields/src/Fields/Textarea.php',
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
