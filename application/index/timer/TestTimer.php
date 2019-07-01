<?php
/**
 * FileName: TestTimer.php
 * ==============================================
 * Copy right 2016-2017
 * ----------------------------------------------
 * This is not a free software, without any authorization is not allowed to use and spread.
 * ==============================================
 * @author: kong | <iwhero@yeah.com>
 * @date  : 2019-07-01 10:26
 */

namespace app\index\timer;


use think\facade\Log;
use think\swoole\template\Timer;

class TestTimer extends Timer
{
    public function initialize($args)
    {
        // TODO: Implement initialize() method.
    }

    public function run()
    {
        Log::write('TestTimer'.date('Y-m-d H:i:s'));
    }
}