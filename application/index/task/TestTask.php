<?php
/**
 * FileName: TestTask.php
 * ==============================================
 * Copy right 2016-2017
 * ----------------------------------------------
 * This is not a free software, without any authorization is not allowed to use and spread.
 * ==============================================
 * @author: kong | <iwhero@yeah.com>
 * @date  : 2019-07-01 10:26
 */

namespace app\index\task;


use think\facade\Log;
use think\swoole\template\Task;

class TestTask extends Task
{
    public function initialize($arg)
    {

    }

    public function run($serv, $task_id = '', $fromWorkerId = '')
    {
        Log::write('TestTask'.date('Y-m-d H:i:s'));
    }
}