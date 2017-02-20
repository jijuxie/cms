<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/13
 * Time: 14:25
 */
namespace app\index\controller;

use think\Controller;
use think\Request;

class Error extends Controller
//空控制器使得在找不到定义的控制器的时候走这个
{
    public function index(Request $request)
    {
        $request=Request::instance();
        //获取当前的控制器位置的名称
        $this->error('控制器'.$request->controller().'不存在');
        $this->error('页面不存在');

    }

}