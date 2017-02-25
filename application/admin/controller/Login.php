<?php
/**
 * Created by PhpStorm.
 * User: 12156
 * Date: 2017/2/16
 * Time: 20:06
 */
namespace app\admin\controller;


use think\Controller;

use think\Loader;
use think\Request;


class Login extends Controller
{

    public function index()
    {
        $login = Loader::model('login', 'logic');
        if ($login->isLoginTrue()) {
            $this->redirect('admin/index/index');
            return true;
        } else {
            return $this->fetch();
        }

    }

    public function ajax_check_login()
    {
        $request = Request::instance();
        if ($request->isAjax()) {
            $login = new \app\admin\logic\Login();
            $loginTestAll = $login->testAll();
            $login->chengLogin();
            return json($loginTestAll);
        } else {
            $this->error('错误的接入方式');
            return false;
        }
    }

    public function outLogin()
    {
        $login = Loader::model('login', 'logic');
        $login->outLogin();
        $this->redirect('/admin/login/index');
    }

}