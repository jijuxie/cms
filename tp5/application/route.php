<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
//路由配置文件
//基础配置
//加载Route类
use think\Route;

//模式一localhost/zzzz不会定义到has方法，但是zzzz/{任意字母数字}则会连接到has方法，原有链接失效
//Route::rule('zzzz/:id','index/uconfig/has');
//模式二localhost/zzzz会定义到has方法，zzzz/{任意字母数字}也会连接到has方法，原有链接失效
//Route::rule('zzzz','index/uconfig/has');
//模式三localhost/zzzz不会定义到has方法，zzzz/{任意字母数字}也不会连接到has方法，原有链接失效，只有post才可以连接到此方法，同样GET也是这样POST变连接不到，还有PUT，DELETEE
//Route::rule('zzzz','index/uconfig/has','POST');
//模式四闭包支持,使得此路由不走控制器方法了，而是返回自己设定的方法
Route::rule('bibao',function(){
   return 'sdadasasdasdasdasd';//此处可以写其他的东西
});
//开启路由缓存//不知为何宝报错
//Route::rule('bibao2',function(){
//    return 'sdadasasdasdasdasd';//此处可以写其他的东西
//},['cache'=>3600]);
return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]' => [
        ':id' => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
    //表达式规则路由
    '/' => 'index',//首页访问路由
    'haha'=>'index/uconfig/has',//静态地址路由
    'heihei/:id' => 'index/uconfig/has',//静态动态地址结合
    'huihui/:has' => 'index/uconfig/:has',//静动结合让get参数转变为方法
//    ':lele/:leilei'=>'index/uconfig/has',//纯动态，此匹配使得超过两个参数的都匹配到全都走此路由
    'aaaa/[:bbbb]'=>'index/uconfig/has',//可选定义，可选项里放变量
    ':lele/:leilei$'=>'index/uconfig/has',//纯动态,添加完全匹配，此匹配使得只有两个参数才会走此路由
    '__MISS__'=>'public/miss',//全局MISS路由，在没有匹配到所有路由时则匹配MISS路由
];
