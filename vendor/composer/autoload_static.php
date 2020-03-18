<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit465f30c9943b447b23a5fedaae8cd32f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PowerSiteBuilder\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PowerSiteBuilder\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit465f30c9943b447b23a5fedaae8cd32f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit465f30c9943b447b23a5fedaae8cd32f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
