<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc54553c651644c6e31c19d13318b91ff
{
    public static $files = array (
        '1cfd2761b63b0a29ed23657ea394cb2d' => __DIR__ . '/..' . '/topthink/think-captcha/src/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'think\\worker\\' => 13,
            'think\\composer\\' => 15,
            'think\\captcha\\' => 14,
            'think\\' => 6,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'W' => 
        array (
            'Workerman\\' => 10,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\worker\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-worker/src',
        ),
        'think\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-installer/src',
        ),
        'think\\captcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-captcha/src',
        ),
        'think\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-image/src',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/workerman',
            1 => __DIR__ . '/..' . '/workerman/workerman-for-win',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Raven_' => 
            array (
                0 => __DIR__ . '/..' . '/sentry/sentry/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Callback' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/Callback.php',
        'CallbackBody' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/Callback.php',
        'CallbackParam' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/Callback.php',
        'CallbackParameterToReference' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/Callback.php',
        'CallbackReturnReference' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/Callback.php',
        'CallbackReturnValue' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/Callback.php',
        'DOMDocumentWrapper' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/DOMDocumentWrapper.php',
        'DOMEvent' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/DOMEvent.php',
        'ICallbackNamed' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/Callback.php',
        'phpQuery' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery.php',
        'phpQueryEvents' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/phpQueryEvents.php',
        'phpQueryObject' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/phpQueryObject.php',
        'phpQueryObjectPlugin_Scripts' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/plugins/Scripts.php',
        'phpQueryObjectPlugin_WebBrowser' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/plugins/WebBrowser.php',
        'phpQueryObjectPlugin_example' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/plugins/example.php',
        'phpQueryPlugin_Scripts' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/plugins/Scripts.php',
        'phpQueryPlugin_WebBrowser' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/plugins/WebBrowser.php',
        'phpQueryPlugin_example' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/plugins/example.php',
        'phpQueryPlugins' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc54553c651644c6e31c19d13318b91ff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc54553c651644c6e31c19d13318b91ff::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc54553c651644c6e31c19d13318b91ff::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc54553c651644c6e31c19d13318b91ff::$classMap;

        }, null, ClassLoader::class);
    }
}
