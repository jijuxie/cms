<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/12
 * Time: 14:08
 */
//模块配置文件
return [
    'myconfig' => 'myconfig',
//    404页面配置
    'http_exception_template' => [
        // 定义404错误的重定向页面地址
        404 => APP_PATH . '404.html',
        // 还可以定义其它的HTTP status
        401 => APP_PATH . '401.html',
    ],
    //不使用程序多少时间后退登
    'use_limit_time' => '3600'
];