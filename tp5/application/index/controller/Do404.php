<?php
/**
 * Created by PhpStorm.
 * User: 12156
 * Date: 2016/12/19
 * Time: 20:23
 */
namespace app\index\controller;
use think\Config;

class Do404{
    public function index(){
       dump(  Config::get('http_exception_template'));
        //仅在部署模式下生效
        throw new \think\exception\HttpException(404, '页面不存在');
    }
}