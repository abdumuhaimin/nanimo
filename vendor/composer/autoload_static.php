<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitca9fe61dca911983eaed8c15a01542f2
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitca9fe61dca911983eaed8c15a01542f2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitca9fe61dca911983eaed8c15a01542f2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
