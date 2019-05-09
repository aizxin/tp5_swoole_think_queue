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
    'connector' => 'Sync',
    'connector'  => 'Redis',		    // Redis 驱动
    'expire'     => 60,				// 任务的过期时间，默认为60秒; 若要禁用，则设置为 null
    'default'    => 'default',		// 默认的队列名称
    'host' => \think\facade\Config::get('cloud_config.cloud_redis_ip','192.168.132.141'),
    'password' => \think\facade\Config::get('cloud_config.cloud_redis_password','iQiQMWsF18bLRgMnBAb2hsqn7YeHEKfOyu+HeNcfl6OMrLBjkNXtC22/BDfGQwzKMc55oBKY5pMwp9kA'),
    'port'       => 6379,			// redis 端口
    'select'     => 5,				// 使用哪一个 db，默认为 db0
    'timeout'    => 0,				// redis连接的超时时间
    'persistent' => true,			// 是否是长连接
];
