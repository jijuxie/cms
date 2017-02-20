<?php
/**
 * Created by PhpStorm.
 * User: 12156
 * Date: 2017/2/16
 * Time: 20:06
 */
namespace app\admin\controller;

use think\Controller;

class Login extends Controller
{

    public function index()
    {

        return $this->fetch();
    }


}