<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

namespace swoole;

use Swoole\Http\Server as HttpServer;
use Swoole\Server as SwooleServer;
use Swoole\Websocket\Server as Websocket;
use swoole\queue\Process as QueueProcess;
/**
 * Swoole Server扩展类
 */
abstract class Swoole
{
    /**
     * Swoole对象
     * @var object
     */
    protected $swoole;

    /**
     * SwooleServer类型
     * @var string
     */
    protected $serverType = 'http';

    /**
     * Socket的类型
     * @var int
     */
    protected $sockType = SWOOLE_SOCK_TCP;

    /**
     * 运行模式
     * @var int
     */
    protected $mode = SWOOLE_PROCESS;

    /**
     * 监听地址
     * @var string
     */
    protected $host = '0.0.0.0';

    /**
     * 监听端口
     * @var int
     */
    protected $port = 9501;

    /**
     * 配置
     * @var array
     */
    protected $option = [];


    /**
     * 支持的响应事件
     * @var array
     */
    protected $event = ['Start', 'Shutdown', 'WorkerStart', 'WorkerStop', 'WorkerExit', 'Connect', 'Receive', 'Packet', 'Close', 'BufferFull', 'BufferEmpty', 'Task', 'Finish', 'PipeMessage', 'WorkerError', 'ManagerStart', 'ManagerStop', 'Open', 'Message', 'HandShake', 'Request'];

    /**
     * 架构函数
     * @access public
     */
    public function __construct()
    {
        // 实例化 Swoole 服务
        switch ($this->serverType) {
            case 'socket':
                $this->swoole = new Websocket($this->host, $this->port, $this->mode, $this->sockType);
                break;
            case 'http':
                $this->swoole = new HttpServer($this->host, $this->port, $this->mode, $this->sockType);
                break;
            default:
                $this->swoole = new SwooleServer($this->host, $this->port, $this->mode, $this->sockType);
        }

        // 设置参数
        if (!empty($this->option)) {
            $this->swoole->set($this->option);
        } else {
            $this->swoole->set([
                'reactor_num' => 1,
                // 工作进程
                'worker_num' => 1,
                // 守护进程化
                'daemonize' => false, //调试
                // 'daemonize' => true,
                // 监听队列的长度
                'backlog' => 128,
                // 异步任务
                'task_worker_num' => 4,
                // 防止 PHP 内存溢出
                'task_max_request' => 0,
                // // SSL 支持
                'dispatch_mode' => 2,

                'debug_mode' => 1,

                'log_file'     => Env::get('runtime_path') . 'swoole_server.log']);
        }

        // 设置回调
        foreach ($this->event as $event) {
            if (method_exists($this, 'on' . $event)) {
                $this->swoole->on($event, [$this, 'on' . $event]);
            }
        }

        // 初始化
        $this->init();
    }

    protected function init()
    {
        if ("process" == config('swoole.queue_type')) {
            $process = new QueueProcess();
            $process->run($this->swoole);
        }
    }

    // 启动服务
    public function start() {
        // Run worker
        $this->swoole->start();
    }

    public function reload() {
        // 对swoole_websocket_server不起作用
        $this->swoole->reload();
    }

    public function close() {
        // 对swoole_websocket_server不起作用
        $this->swoole->close();
    }


    /**
     * 魔术方法 有不存在的操作的时候执行
     * @access public
     * @param string $method 方法名
     * @param array $args 参数
     * @return mixed
     */
    public function __call($method, $args)
    {
        call_user_func_array([$this->swoole, $method], $args);
    }
}
