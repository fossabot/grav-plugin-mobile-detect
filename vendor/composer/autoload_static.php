<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc407d5bc71e37c0cfa9d89207fab40d6
{
    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Detection' => 
            array (
                0 => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/namespaced',
            ),
        ),
    );

    public static $classMap = array (
        'Mobile_Detect' => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/Mobile_Detect.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitc407d5bc71e37c0cfa9d89207fab40d6::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc407d5bc71e37c0cfa9d89207fab40d6::$classMap;

        }, null, ClassLoader::class);
    }
}
