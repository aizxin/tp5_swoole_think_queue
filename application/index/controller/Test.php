<?php
/**
 * FileName: Test.php
 * ==============================================
 * Copy right 2016-2017
 * ----------------------------------------------
 * This is not a free software, without any authorization is not allowed to use and spread.
 * ==============================================
 * @author: kong | <iwhero@yeah.com>
 * @date  : 2019/5/9 17:02
 */

namespace app\index\controller;


use app\index\task\TestTask;
use app\index\timer\TestTimer;
use think\Queue;
use think\swoole\facade\Task;
use think\swoole\facade\Timer;

class Test
{
    public function job()
    {
        Queue::later(12,\app\index\job\Test::class, ['6778'=>12136712] ,'TestJob');
        Queue::push(\app\index\job\Test::class, ['test'=>12136712] ,'TestJob');

        return 'hello,job' ;
    }

    public function task()
    {
        //投递任务模板
        $task=new TestTask();
        Task::async($task);
        //异步任务投递闭包
        Task::async(function ($serv, $task_id, $data) {
            $i = 0;
            while ($i < 10) {
                $i++;
                echo $i;
                sleep(1);
            }
        });

        return 'hello,task' ;
    }

    public function timer()
    {
        //闭包方式使用定时器
        Timer::tick(1000,function(){
            var_dump(1);
        });
        //使用定时器模板
        $t=new TestTimer();
        Timer::tick(1000,$t);
        return 'hello,timer';
    }
}