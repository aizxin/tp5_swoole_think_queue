<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit40cba6018b8da5af291dc89eeedd4d73
{
    public static $files = array (
        '9b552a3cc426e3287cc811caefa3cf53' => __DIR__ . '/..' . '/topthink/think-helper/src/helper.php',
        'bd9634f2d41831496de0d3dfe4c94881' => __DIR__ . '/..' . '/symfony/polyfill-php56/bootstrap.php',
        'cc56288302d9df745d97c934d6a6e5f0' => __DIR__ . '/..' . '/topthink/think-queue/src/common.php',
        'ea51e7f80936725691663347d5b38bd9' => __DIR__ . '/..' . '/topthink/think-swoole/src/command.php',
    );

    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'think\\swoole\\' => 13,
            'think\\helper\\' => 13,
            'think\\composer\\' => 15,
            'think\\' => 6,
        ),
        'j' => 
        array (
            'jayazhao\\' => 9,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'X' => 
        array (
            'XCron\\' => 6,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Util\\' => 22,
            'Symfony\\Polyfill\\Php56\\' => 23,
            'SuperClosure\\' => 13,
        ),
        'P' => 
        array (
            'PhpParser\\' => 10,
            'PhpAmqpLib\\' => 11,
        ),
        'I' => 
        array (
            'Interop\\Queue\\' => 14,
            'Interop\\Amqp\\' => 13,
        ),
        'E' => 
        array (
            'Enqueue\\Dsn\\' => 12,
            'Enqueue\\AmqpTools\\' => 18,
            'Enqueue\\AmqpLib\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\swoole\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-swoole/src',
        ),
        'think\\helper\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-helper/src',
        ),
        'think\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-installer/src',
        ),
        'think\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-queue/src',
        ),
        'jayazhao\\' => 
        array (
            0 => __DIR__ . '/..' . '/jayazhao/think-queue-rabbitmq/src',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
        'XCron\\' => 
        array (
            0 => __DIR__ . '/..' . '/xavier/xcron-expression/src/Cron',
        ),
        'Symfony\\Polyfill\\Util\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-util',
        ),
        'Symfony\\Polyfill\\Php56\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php56',
        ),
        'SuperClosure\\' => 
        array (
            0 => __DIR__ . '/..' . '/jeremeamia/SuperClosure/src',
        ),
        'PhpParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/php-parser/lib/PhpParser',
        ),
        'PhpAmqpLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib',
        ),
        'Interop\\Queue\\' => 
        array (
            0 => __DIR__ . '/..' . '/queue-interop/queue-interop/src',
        ),
        'Interop\\Amqp\\' => 
        array (
            0 => __DIR__ . '/..' . '/queue-interop/amqp-interop/src',
        ),
        'Enqueue\\Dsn\\' => 
        array (
            0 => __DIR__ . '/..' . '/enqueue/dsn',
        ),
        'Enqueue\\AmqpTools\\' => 
        array (
            0 => __DIR__ . '/..' . '/enqueue/amqp-tools',
        ),
        'Enqueue\\AmqpLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/enqueue/amqp-lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit40cba6018b8da5af291dc89eeedd4d73::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit40cba6018b8da5af291dc89eeedd4d73::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
