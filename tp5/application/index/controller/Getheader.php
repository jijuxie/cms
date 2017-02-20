<?php
/**
 * Created by PhpStorm.
 * User: 12156
 * Date: 2016/12/13
 * Time: 20:23
 */
namespace app\index\controller;
use think\Request;

class Getheader{
    public function index(){
        return'getheader index';
    }
    public function getheader(Request $request){
        //获取header头信息
        dump($request->header());
    }
}