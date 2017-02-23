<?php
/**
 * Created by PhpStorm.
 * User: 12156
 * Date: 2017/2/16
 * Time: 20:06
 */
namespace app\admin\controller;

use app\admin\model\User;
use think\Controller;
use think\Cookie;
use think\Request;
use think\Session;

class Login extends Controller
{

    public function index()
    {

        return $this->fetch();
    }

    public function ajax_check_login()
    {
        $request = Request::instance();
        if ($request->isAjax()) {
            $login = new \app\admin\logic\Login();
            $loginTestAll=$login->testAll();
           if($loginTestAll['code']==0){
               $user = new User();
               $user->where('user_name',$request->param('name'))->where('user_password',md5($request->param('password')))->find();
               Session::prefix('admin');
               Session::set('userid', 1);
               Cookie::prefix('admin');
               Cookie::set('userid', 1,3600);
           }
            return json( $loginTestAll);
        } else {
            $this->error('错误的接入方式');
            return false;
        }
    }

}