<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: yunwuxin <448901948@qq.com>
// +----------------------------------------------------------------------

return [
//    'connector' => 'Sync',
//    'connector'  => 'Redis',		    // Redis 驱动
//    'expire'     => 60,				// 任务的过期时间，默认为60秒; 若要禁用，则设置为 null
//    'default'    => 'default',		// 默认的队列名称
//    'host' => \think\facade\Config::get('cloud_config.cloud_redis_ip','192.168.132.141'),
//    'password' => \think\facade\Config::get('cloud_config.cloud_redis_password','iQiQMWsF18bLRgMnBAb2hsqn7YeHEKfOyu+HeNcfl6OMrLBjkNXtC22/BDfGQwzKMc55oBKY5pMwp9kA'),
//    'port'       => 6379,			// redis 端口
//    'select'     => 5,				// 使用哪一个 db，默认为 db0
//    'timeout'    => 0,				// redis连接的超时时间
//    'persistent' => true,			// 是否是长连接


    'connector' => \jayazhao\queue\connector\RabbitMQ::class,

    'dsn' => env('RABBITMQ_DSN', null),

    'host' => env('RABBITMQ_HOST', '127.0.0.1'),
    'port' => env('RABBITMQ_PORT', 5672),

    'vhost' => env('RABBITMQ_VHOST', '/'),
    'login' => env('RABBITMQ_LOGIN', 'guest'),
    'password' => env('RABBITMQ_PASSWORD', 'guest'),

    'queue' => env('RABBITMQ_QUEUE', 'default'),

    'options' => [

        'exchange' => [

            'name' => env('RABBITMQ_EXCHANGE_NAME'),

            /*
            * Determine if exchange should be created if it does not exist.
            */
            'declare' => env('RABBITMQ_EXCHANGE_DECLARE', true),

            /*
            * Read more about possible values at https://www.rabbitmq.com/tutorials/amqp-concepts.html
            */
            'type' => env('RABBITMQ_EXCHANGE_TYPE', \Interop\Amqp\AmqpTopic::TYPE_DIRECT),
            'passive' => env('RABBITMQ_EXCHANGE_PASSIVE', false),
            'durable' => env('RABBITMQ_EXCHANGE_DURABLE', true),
            'auto_delete' => env('RABBITMQ_EXCHANGE_AUTODELETE', false),
            'arguments' => env('RABBITMQ_EXCHANGE_ARGUMENTS'),
        ],

        'queue' => [

            /*
            * Determine if queue should be created if it does not exist.
            */
            'declare' => env('RABBITMQ_QUEUE_DECLARE', true),

            /*
            * Determine if queue should be binded to the exchange created.
            */
            'bind' => env('RABBITMQ_QUEUE_DECLARE_BIND', true),

            /*
            * Read more about possible values at https://www.rabbitmq.com/tutorials/amqp-concepts.html
            */
            'passive' => env('RABBITMQ_QUEUE_PASSIVE', false),
            'durable' => env('RABBITMQ_QUEUE_DURABLE', true),
            'exclusive' => env('RABBITMQ_QUEUE_EXCLUSIVE', false),
            'auto_delete' => env('RABBITMQ_QUEUE_AUTODELETE', false),
            'arguments' => env('RABBITMQ_QUEUE_ARGUMENTS'),
        ],
    ],

    /*
     * Determine the number of seconds to sleep if there's an error communicating with rabbitmq
     * If set to false, it'll throw an exception rather than doing the sleep for X seconds.
     */
    'sleep_on_error' => env('RABBITMQ_ERROR_SLEEP', 5),

    /*
     * Optional SSL params if an SSL connection is used
     */
    'ssl_params' => [
        'ssl_on' => env('RABBITMQ_SSL', false),
        'cafile' => env('RABBITMQ_SSL_CAFILE', null),
        'local_cert' => env('RABBITMQ_SSL_LOCALCERT', null),
        'local_key' => env('RABBITMQ_SSL_LOCALKEY', null),
        'verify_peer' => env('RABBITMQ_SSL_VERIFY_PEER', true),
        'passphrase' => env('RABBITMQ_SSL_PASSPHRASE', null),
    ],
];
