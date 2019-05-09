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


use think\Queue;

class Test
{
    public function index()
    {
        return Queue::push(\app\index\job\Test::class, ['test'=>12136712] ,'TestJob');
    }
}