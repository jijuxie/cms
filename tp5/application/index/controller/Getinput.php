<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/13
 * Time: 16:03
 */
namespace app\index\controller;

use think\Request;

class Getinput
{
    public function index()
    {
        return 'getvar<br/> index';
    }

    public function hasinput()
    {
        $request=Request::instance();
        //所有的加参数false会获得全部的没有过滤过得数据
        //所有的数据加参数true 有的会获得file的数据，
        //所有的不带参数的会获取所有的经过过滤的数据
        session('name', 1);
        echo '获取所有的server';
        dump($request->server());
        //获取任何类型的请求变量
        echo $request->param('id');
        //获取get变量
        dump($request->get());
        //获取post的变量
        dump($request->post());
        //获取put数据
        dump($request->put());
        //获取delete数据
        dump($request->delete());
        //获取session数据
        dump($request->session());
        //获取cookie变量
        dump($request->cookie());
        //获取request变量
        dump($request->request());
        //获取到env变量
        dump($request->env());
        //获取到route变量
        dump($request->route());
        //获取到file变量
        dump($request->file());
//在索要获取的变量名后面加
        //   /s是强转字符串
        //   /d是强转整形
        //   /b是强转布尔型
        //   /a是强转我数组类型
        //   /f是强转为浮点类型
        //   /a是转换数组格式。。。。。。。。。。。。。当获取到的是数组时很关键
    }

    public function changeinput(Request $request)
    {
        //设置获取的变量值，尽量不要随便修改变量值，param的值的直接修改是错误的
        $request->get(['id' => 'change']);
        echo $request->get('id');

    }

    public function isis(Request $request)
    {
// 是否为 GET 请求
        if (Request::instance()->isGet()) {
            echo "当前为 GET 请求";
            dump($request->get());
        }
// 是否为 POST 请求
        if (Request::instance()->isPost()) echo "当前为 POST 请求";
// 是否为 PUT 请求
        if (Request::instance()->isPut()) echo "当前为 PUT 请求";
// 是否为 DELETE 请求
        if (Request::instance()->isDelete()) echo "当前为 DELETE 请求";
// 是否为 Ajax 请求
        if (Request::instance()->isAjax()) echo "当前为 Ajax 请求";
// 是否为 Pjax 请求
        if (Request::instance()->isPjax()) echo "当前为 Pjax 请求";
// 是否为手机访问
        if (Request::instance()->isMobile()) echo "当前为手机访问";
// 是否为 HEAD 请求
        if (Request::instance()->isHead()) echo "当前为 HEAD 请求";
// 是否为 Patch 请求
        if (Request::instance()->isPatch()) echo "当前为 PATCH 请求";
// 是否为 OPTIONS 请求
        if (Request::instance()->isOptions()) echo "当前为 OPTIONS 请求";
// 是否为 cli
        if (Request::instance()->isCli()) echo "当前为 cli";
// 是否为 cgi
        if (Request::instance()->isCgi()) echo "当前为 cgi";
    }
}
