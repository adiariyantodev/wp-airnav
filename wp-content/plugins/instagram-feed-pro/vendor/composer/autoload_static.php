<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4272381f67a7214a46fb09ced78112e9
{
    public static $files = array (
        'sb_ig_b1eb330aa001ae4915f07005b4e993c2' => __DIR__ . '/..' . '/smashballoon/framework/Utilities/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'InstagramFeed\\Vendor\\Smashballoon\\Framework\\' => 44,
            'InstagramFeed\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'InstagramFeed\\Vendor\\Smashballoon\\Framework\\' => 
        array (
            0 => __DIR__ . '/..' . '/smashballoon/framework',
        ),
        'InstagramFeed\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4272381f67a7214a46fb09ced78112e9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4272381f67a7214a46fb09ced78112e9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4272381f67a7214a46fb09ced78112e9::$classMap;

        }, null, ClassLoader::class);
    }
}
