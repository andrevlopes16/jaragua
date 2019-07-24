<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit212970f2415e1ad3375fac535694326c
{
    public static $files = array (
        '19496abe4744fd8af01b2ce10d352ad9' => __DIR__ . '/..' . '/avl/php-classes/src/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CoffeeCode\\DataLayer\\' => 21,
        ),
        'A' => 
        array (
            'Avl\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CoffeeCode\\DataLayer\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/datalayer/src',
        ),
        'Avl\\' => 
        array (
            0 => __DIR__ . '/..' . '/avl/php-classes/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit212970f2415e1ad3375fac535694326c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit212970f2415e1ad3375fac535694326c::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit212970f2415e1ad3375fac535694326c::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit212970f2415e1ad3375fac535694326c::$classMap;

        }, null, ClassLoader::class);
    }
}