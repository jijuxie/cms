<?php
/**
 * Created by PhpStorm.
 * User: qinxy
 * Date: 2017/3/6
 * Time: 18:33
 */
namespace app\admin\controllerLib;
use think\Controller;

class pageController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        //读取menu
        $this->assign('menu',Config('menu'));
    }
}