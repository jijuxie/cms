<?php
/**
 * Created by PhpStorm.
 * User: 12156
 * Date: 2017/2/25
 * Time: 22:01
 */
namespace app\admin\controller;

use think\Controller;

class Website extends Controller
{

    public function _initialize(){
        parent::_initialize();
    }
    public function index(){
        echo 'index';
    }
    public function index2(){
        echo 'index2';
    }
}