<?php
/**
 * Created by PhpStorm.
 * User: qinxy
 * Date: 2017/3/2
 * Time: 19:06
 */
namespace app\admin\model;

use think\Model;

class Limit extends Model
{
    public static function arrayAll()
    {
        $res = [];
        foreach (self::all() as $vo) {
            $res[] = $vo->data;
        }
        return $res;
    }

    //对应父权限名
    public function getFidAttr($value)
    {
        $res = self::get($value)['limit_name'];
        if ($res) {
            return $res;
        } else {
            return '无父权限';
        }
    }

    //对应开放-》是否
    public function getIfOpenAttr($value)
    {
        if ($value == 0) {
            return '是';
        } else {
            return '否';
        }
    }
    //翻译权限类型对应
    public function getTypeNameAttr($value)
    {
        $name = [0 => '主父权限', 1 => '方法权限', 2 => '回调权限'];
        return $name[$value];
    }
}