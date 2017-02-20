<?php
//ci此logic，model用来于处理业务逻辑，
namespace app\index\logic;

use think\Model;
use think\Loader;

class User extends Model
{
    public function index()
    {
        $user = Loader::model('user');
        $data = array(
            'name'=>'张鹏2',
            'age'=>'100',
            'city'=>'潍坊'
        );
        $user->data($data)->save();

    }
}