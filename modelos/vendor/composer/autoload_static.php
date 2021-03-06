<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3276622ca162b5a2b0db5e7451ec0a30
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3276622ca162b5a2b0db5e7451ec0a30::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3276622ca162b5a2b0db5e7451ec0a30::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3276622ca162b5a2b0db5e7451ec0a30::$classMap;

        }, null, ClassLoader::class);
    }
}
