<?php
/**
 * Created by PhpStorm.
 * User: 12156
 * Date: 2016/12/18
 * Time: 22:39
 */
namespace app\index\controller;

use think\Controller;
use think\Log;

class Uselog extends Controller
{
    public function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        //初始化日志类，制定存储方式和存储位置
        Log::init([
            'type' => 'File',
            'path' => APP_PATH . 'logs/',
            // 授权只有202.12.36.89 才能记录日志
//            'allow_key' =>  ['202.12.36.89'],

        ]);
    }

    public function index()
    {


//        警告级别
//        log 常规日志，用于记录日志
//error 错误，一般会导致程序的终止
//notice 警告，程序可以运行但是还不够完美的错误
//info 信息，程序输出信息
//debug 调试，用于调试信息
//sql SQL语句，用于SQL记录，只在数据库的调试模式开启时有效
//        将测试信息存入内存,第二个参数是警告级别
        Log::record('测试日志信息', 'notice');
//        将内存中的log存入日志中
        Log::save();
//        测试参数实时
        Log::write('测试日志信息，这是警告级别，并且实时写入', 'notice');
        return '';
    }
    public function clear(){
//        清空日志
        Log::clear();
    }
}