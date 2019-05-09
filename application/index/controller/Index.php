<?php
namespace app\index\controller;

use swoole\Swoole;

class Index extends Swoole
{
	/**
	 * [onRequest description]
	 * @Author   kong|<iwhero@yeah.com>
	 * @DateTime 2019-05-09
	 * @param    \Swoole\Http\Request   $request  [description]
	 * @param    \Swoole\Http\Response  $response [description]
	 * @return   [type]                           [description]
	 */
    public function onRequest(\Swoole\Http\Request $request, \Swoole\Http\Response $response) {
       var_dump($request);
    }
}
