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
    'error_code' => [
        0 => "OK",
        1=>'error',
    ],
];