<?php
/**
 * Created by PhpStorm.
 * User: qinxy
 * Date: 2017/2/28
 * Time: 18:31
 */
namespace app\admin\controller;

use app\admin\controllerLib\pageController;
use app\admin\model\Limit;

use think\Db;
use think\Loader;

//权限系统
class Leader extends pageController
{
    public function _initialize()
    {
        $leader=Loader::model('leader','logic');
        $leader->checkLimit();
        parent::_initialize();
    }

    //角色管理
    public function role()
    {

    }

    //权限管理
    public function limit()
    {

        $this->assign('limitList', Db::name('limit')->paginate(1));

        return $this->fetch();

    }

    //管理员列表
    public function LeaderList()
    {

        return $this->fetch();
    }
}