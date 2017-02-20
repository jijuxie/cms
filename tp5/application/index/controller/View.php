<?php
/**
 * Created by PhpStorm.
 * User: 12156
 * Date: 2016/12/18
 * Time: 16:02
 */
namespace app\index\controller;

use think\Controller;

class View extends Controller
{
    public function index()
    {
        //直接继承控制器类，然后直接渲染
        $this->assign('name', 'jijuxie');
        //渲染内容输出
//        return $this->display('{$index}', ['index' => 'aaaa']);
        //渲染模板输出,参数一可以不填，直接按控制器方法定位到模板，
        //[模块@][控制器/][操作]选填数据，可以跨模块调用'admin@member/edit'
        //完整的模板文件./template/public/menu.html
        return $this->fetch();

    }
}