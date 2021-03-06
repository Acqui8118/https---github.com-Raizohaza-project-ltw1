<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6a4381ea9c4bb534e568c83d157f2300
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6a4381ea9c4bb534e568c83d157f2300::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6a4381ea9c4bb534e568c83d157f2300::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6a4381ea9c4bb534e568c83d157f2300::$classMap;

        }, null, ClassLoader::class);
    }
}
