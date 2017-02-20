<?php
/**
 * Created by PhpStorm.
 * User: 12156
 * Date: 2016/12/19
 * Time: 20:07
 */
namespace app\index\controller;

use think\Debug;

class Usedebug
{
    public function index()
    {
        //使用区段性能测试
        Debug::remark('begin');
        echo 'hahhahadebug';
        Debug::remark('end');
// ...也许这里还有其他代码
// 进行统计区间
        echo Debug::getRangeTime('begin', 'end') . 's</br>';
        echo Debug::getRangeMem('begin','end').'kb';
    }
}