<?php
/**
 * Created by PhpStorm.
 * User: 12156
 * Date: 2016/12/20
 * Time: 22:12
 */
namespace app\index\controller;
use think\Cookie;

class Usecookie{
public function index(){
    //设置
    Cookie::set('name','jijuxie',3600);

}
}