<?php
/**
 * Created by PhpStorm.
 * User: 12156
 * Date: 2017/2/19
 * Time: 8:59
 */
namespace app\admin\service;

use think\Config;
use think\Model;

class Error extends Model
{
/*
 * 返回醋无代码对应错误message
 */
    public function getMessage($error = 0)
    {
        $error_code=Config::get('error_code');
        return $error_code[$error];
    }
}