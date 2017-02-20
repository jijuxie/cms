<?php
/**
 * Created by PhpStorm.
 * User: 12156
 * Date: 2016/12/20
 * Time: 21:45
 */
namespace app\index\controller;

use think\Session;

class Usesession
{
    public function index()
    {

        Session::set('name', 'thinkphp');
        echo Session::get('name');
        echo '<br/>';
//session的用法
        //设置session   session的键，值，前缀
        Session::set('youname', 'jijuxie', 'zp');
        //获取session
        echo Session::get('youname', 'zp');
        echo '<br/>';
        //判断存在
        echo Session::has('youname', 'zp');
        //指定删除
        Session::delete('youname', 'zp');
        //指定作用域,指定作用域后set和get方法直接就获得了默认的作用域
        Session::prefix('zpp');
        Session::set('haha', '123');
        echo Session::get('haha');
        Session::clear();
        dump($_SESSION);
        //支持存取二维数组
        Session::set('name.item','thinkphp');
    }
}