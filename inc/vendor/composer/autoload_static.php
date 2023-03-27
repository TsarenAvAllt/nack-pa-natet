<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3527fbd942a87f01d1b366fb0c53fde7
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3527fbd942a87f01d1b366fb0c53fde7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3527fbd942a87f01d1b366fb0c53fde7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3527fbd942a87f01d1b366fb0c53fde7::$classMap;

        }, null, ClassLoader::class);
    }
}