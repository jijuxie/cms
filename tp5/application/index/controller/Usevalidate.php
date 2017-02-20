<?php
/**
 * Created by PhpStorm.
 * User: 12156
 * Date: 2016/12/19
 * Time: 20:47
 */
namespace app\index\controller;

use think\Loader;

class Usevalidate
{
    public function index()
    {
        //此处为验证处，应该放到logic或者servic里面去的
        $vali = Loader::validate('user');
        $data = [
            'name' => 'thinkphp',
            'email' => 'thinkphpq.com'
        ];
        //batch是批量验证的方法，不加则dump字符串，加了则dump数组
        if (!$vali->batch()->check($data)) {
            //此处只返回一个字符串
            dump($vali->getError());

        }
        //根据场景来检验
        $result = $vali->scene('edit')->check($data);

    }
}