<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7df872855af2b5415eb92bd44876d5d4
{
    public static $files = array (
        '1c72a962e0dffedb5764e664625336e8' => __DIR__ . '/../..' . '/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7df872855af2b5415eb92bd44876d5d4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7df872855af2b5415eb92bd44876d5d4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7df872855af2b5415eb92bd44876d5d4::$classMap;

        }, null, ClassLoader::class);
    }
}