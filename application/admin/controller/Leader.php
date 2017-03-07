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
use think\Request;

//权限系统
class Leader extends pageController
{
    public function _initialize()
    {
        $leader = Loader::model('leader', 'logic');
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
        $this->assign('menu',Config('menu'));
        $request = Request::instance();
        $pageType = intval($request->param('limitType'));
        if ($pageType == 1 || $pageType == 2 || $pageType == 3) {
            $limitList = Limit::create()->where('type_name', $pageType)->paginate(1);
        } else {
            $limitList = Limit::create()->paginate(1);
        }
        $this->assign('limitList', $limitList);
        $this->assign('limiPage', $limitList->render());
        return $this->fetch();
    }
    public function ajaxDel()
    {
        $request = Request::instance();
//        return json(['code'=>0,'message'=>12]);

        if($request->isAjax()){
            $res=Limit::destroy(intval($request->param('id')));
            if($res){
                $data=[
                    'code'=>0,
                    'message'=>'删除成功'
                ];
            }else{
                $data=[
                    'code'=>1,
                    'message'=>'删除失败'
                ];
            }

            return json($data);
        }else{
            $this->error('错误的连接方式');
        }
    }
    //管理员列表
    public function LeaderList()
    {

        return $this->fetch();
    }
}