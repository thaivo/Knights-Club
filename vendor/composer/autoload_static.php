<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2edfdde5310ca7377c53e1821b940e62
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Webappdev\\Knightsclub\\' => 22,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Webappdev\\Knightsclub\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2edfdde5310ca7377c53e1821b940e62::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2edfdde5310ca7377c53e1821b940e62::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2edfdde5310ca7377c53e1821b940e62::$classMap;

        }, null, ClassLoader::class);
    }
}
