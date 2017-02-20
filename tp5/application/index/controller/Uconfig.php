<?php
namespace app\index\controller;


use think\Config;

class Uconfig
{
    public function getAll()
    {
       dump(Config::get());
    }
    public function has(){
        echo Config::has('myconfig');
    }
    public function get(){
        echo Config::get('myconfig');
    }
    public function getTwo(){
        echo Config::get('name.mymodelconfig');
    }
    public function set(){
        echo 'I set'.Config::set('setconfig','setconfig');
        echo '<br/>';
        echo Config::get('setconfig');
    }
    //如果不执行$this->set()则获取不到配置
    public function getsetconfig(){
        echo Config::get('setconfig');
    }
    public function load(){
        Config::load('config.php','','user');
    }

}

