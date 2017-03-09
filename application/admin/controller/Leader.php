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
use app\admin\model\User;
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
        $request = Request::instance();
        $pageType = $request->param('limitType');

        if ($pageType == 1 || $pageType == 2 || $pageType === 0) {
            $limitList = Limit::create()->where('type_name', $pageType)->paginate(1);
        } else {
            $limitList = Limit::create()->paginate(1);
        }
        $theFatherLimit=Limit::all(['type_name'=>0]);
        $this->assign('fatherLimit',$theFatherLimit);
        $this->assign('limitList', $limitList);
        $this->assign('limiPage', $limitList->render());
        return $this->fetch();
    }

    public function ajaxDelLimit()
    {
        $request = Request::instance();
        if ($request->isAjax()) {
            $res = Limit::destroy(intval($request->param('id')));
            if ($res) {
                $data = [
                    'code' => 0,
                    'message' => '删除成功'
                ];
            } else {
                $data = [
                    'code' => 1,
                    'message' => '删除失败'
                ];
            }
            return json($data);
        } else {
            $this->error('错误的连接方式');
        }
    }

    public function ajaxAddLimit()
    {
        $request = Request::instance();
        if ($request->isAjax()) {
            $data = [
                'limit_name' => $request->param('limit_name'),
                'type_name' => $request->param('type_name'),
                'fid' => $request->param('fid'),
                'controller' => $request->param('controller'),
                'action' => $request->param('action'),
                'if_open' => $request->param('if_open')
            ];
            $res = Limit::create($data);
            if ($res->id) {
                $json = [
                    'code' => 0,
                    'message' => '添加成功'
                ];
            } else {
                $json = [
                    'code' => 1,
                    'message' => '数据出错'
                ];
            }
            return json($json);
        } else {
            $this->error('错误的连接方式');
        }
    }

    public function ajaxEditLimit()
    {

    }

    //管理员列表
    public function LeaderList()
    {

        return $this->fetch();
    }
}