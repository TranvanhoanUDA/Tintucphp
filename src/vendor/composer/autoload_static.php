<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1c4f28dae7209bd12a722baa9193b1ac
{
    public static $files = array (
        '32dcc8afd4335739640db7d200c1971d' => __DIR__ . '/..' . '/symfony/polyfill-apcu/bootstrap.php',
        'def43f6c87e4f8dfd0c9e1b1bab14fe8' => __DIR__ . '/..' . '/symfony/polyfill-iconv/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'spark\\' => 6,
        ),
        'V' => 
        array (
            'Valitron\\' => 9,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Iconv\\' => 23,
            'Symfony\\Polyfill\\Apcu\\' => 22,
            'Symfony\\Component\\ExpressionLanguage\\' => 37,
            'Symfony\\Component\\Cache\\' => 24,
            'Stash\\' => 6,
            'Slim\\' => 5,
        ),
        'R' => 
        array (
            'Rct567\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Log\\' => 8,
            'Psr\\Cache\\' => 10,
            'PhpMyAdmin\\MoTranslator\\' => 24,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
            'MirazMac\\YouFetch\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'spark\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Valitron\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/valitron/src/Valitron',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Iconv\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-iconv',
        ),
        'Symfony\\Polyfill\\Apcu\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-apcu',
        ),
        'Symfony\\Component\\ExpressionLanguage\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/expression-language',
        ),
        'Symfony\\Component\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/cache',
        ),
        'Stash\\' => 
        array (
            0 => __DIR__ . '/..' . '/tedivm/stash/src/Stash',
        ),
        'Slim\\' => 
        array (
            0 => __DIR__ . '/../..' . '/framework',
        ),
        'Rct567\\' => 
        array (
            0 => __DIR__ . '/..' . '/rct567/dom-query/src/Rct567',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'PhpMyAdmin\\MoTranslator\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmyadmin/motranslator/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'MirazMac\\YouFetch\\' => 
        array (
            0 => __DIR__ . '/../..' . '/drivers/YouFetch',
        ),
    );

    public static $prefixesPsr0 = array (
        'U' => 
        array (
            'Upload' => 
            array (
                0 => __DIR__ . '/..' . '/codeguy/upload/src',
            ),
        ),
        'S' => 
        array (
            'SimplePie' => 
            array (
                0 => __DIR__ . '/..' . '/simplepie/simplepie/library',
            ),
        ),
        'R' => 
        array (
            'Requests' => 
            array (
                0 => __DIR__ . '/..' . '/rmccue/requests/library',
            ),
        ),
    );

    public static $classMap = array (
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'PclZip' => __DIR__ . '/../..' . '/helpers/pclzip.lib.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1c4f28dae7209bd12a722baa9193b1ac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1c4f28dae7209bd12a722baa9193b1ac::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit1c4f28dae7209bd12a722baa9193b1ac::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit1c4f28dae7209bd12a722baa9193b1ac::$classMap;

        }, null, ClassLoader::class);
    }
}
