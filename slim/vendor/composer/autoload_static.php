<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit73bce43be96027d217d5da8c0bceb071
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit73bce43be96027d217d5da8c0bceb071::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
