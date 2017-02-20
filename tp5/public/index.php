<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// [ 应用入口文件 ]
//jijuxie 2016-12-12
// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');
//定义绑定模块。使得此应用可以拥有多入口。
//define('BIND_MODULE','index');
//定义config目录,不定义此目录则直接在application目录内感觉不如默认的好
//define('CONF_PATH',__DIR__.'/../config/');
// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';
