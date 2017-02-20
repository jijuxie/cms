<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/13
 * Time: 15:11
 */
namespace app\index\controller;

use think\Request;

class Getrequest
{
    public function index(Request $request)
    {
        //获取请求参数
        echo '请求方法：' . $request->method() . '<br/>';
        echo '资源类型：' . $request->type() . '<br/>';
        echo '访问地址：' . $request->ip() . '<br/>';
        echo '请求方法是否AJAX请求：' . var_export($request->isAjax(), true) . '<br/>';
        echo '请求参数：';
        dump($request->param());
        echo '请求参数：仅包含name：';
        dump($request->only('name'));
        echo '请求参数：除了name';
        dump($request->except('name'));

    }

    //获取当前url信息
    public function domain(Request $request)
    {
        echo '当前域名' . $request->domain() . '<br/>';
        echo '当前入口文件名' . $request->baseFile() . '<br/>';
        echo '当前url（不含域名）' . $request->url() . '<br/>';
        echo '获取包含域名的完整域名' . $request->url(true) . '<br/>';
        echo '获取当前URL地址，不包含QUERY_STRING' . $request->baseUrl() . '<br/>';
        echo '获取当前URL访问的root地址' . $request->root() . '<br/>';
        echo '获取当前访问的root地址包含域名' . $request->root(true) . '<br/>';
        echo '获取到url地址中的path_info信息' . $request->pathinfo() . '<br/>';
        echo '获取当前url地址中的path_info不带后缀' . $request->path() . '<br/>';
        echo '获取后缀信息' . $request->ext() . '<br/>';
    }

    //获取当前操作信息
    public function getaction(Request $request)
    {
        echo '当前模块名称是：' . $request->module() . '<br/>';
        echo '当前控制器名称是：' . $request->controller() . '<br/>';
        echo '当前方法名是：' . $request->action() . '<br/>';
    }

    //获取路由和调度信息
    public function getrule(Request $request)
    {
        echo '路由信息';
        dump(
            $request->route()
        );
        echo '调度信息';
        dump(
            $request->dispatch()
        );
    }

}