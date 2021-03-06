<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit252bf58cdef3a7f517c85973be6a624a
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit252bf58cdef3a7f517c85973be6a624a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit252bf58cdef3a7f517c85973be6a624a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
