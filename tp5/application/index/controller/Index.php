<?php
namespace app\index\controller;

use think\Controller;
use think\Loader;
use think\Request;

class Index extends Controller
{
    public function _initialize()
    {
        //初始化方法
        parent::_initialize();
        // TODO: Change the autogenerated stub
        echo 'init';
    }

//静态初始化方法，只有在第一次实例化的时候执行
    public static function init()
    {

    }

    //前置操作
    protected $beforeActionList = [
        'first',//执行任何方法前会执行此方方法，执行自己之前也会执行这个方法
        'second' => ['except' => 'first'],//除了first方法，其他方法执行前执行此方法
        'three' => ['only' => 'second']//只有执行second方法时执行three方法
    ];

    public function index(){

        return 'index';
//        return $this->fetch();//渲染模板有两种方式    return $view();
    }

    public function index2($name = 0)
    {
        return $name;
    }

    public function first()
    {
        echo 'first';
        return 'first';
    }

    public function second()
    {
        echo 'second';
        return 'second';
    }

    public function three()
    {
        echo 'third';
        return 'third';
    }

    public function tosuccess()
    {
        $this->success('成功啦', 'index/index', '咚咚咚', 10);
    }

    public function toerror()
    {
        $this->error('出错拉！！', 'index/index');
    }

//空操作当没有以上方法时走此方法，可以获取到方法位置的名称，
    public function _empty(Request $request)
    {
        return $request->action();
    }
}

