<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit475d70afa71d5b761ce5b79e6b7d16e5
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Laminas\\Ldap\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Laminas\\Ldap\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-ldap/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit475d70afa71d5b761ce5b79e6b7d16e5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit475d70afa71d5b761ce5b79e6b7d16e5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}