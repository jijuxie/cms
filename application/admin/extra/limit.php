<?php
/**
 * Created by PhpStorm.
 * User: qinxy
 * Date: 2017/3/1
 * Time: 20:58
 */
//limit权限配置
return [
    'father' => [
        [
            'controller' => 'Index',
            'name' => '主页面系统',
            'id' => 1,
            'open' => 1
        ],
        [
            'controller' => 'Leader',
            'name' => '权限系统',
            'id' => 2,
            'open' => 0
        ],
        [
            'controller' => 'Website',
            'name' => '网站设置系统',
            'id' => 3,
            'open' => 0
        ],
    ],
    'child' => [
        [
            'action' => 'role',
            'name' => '角色管理',
            'id' => 1,
            'open' => 0,
            'father'=>2
        ],
        [
            'action' => 'limit',
            'name' => '权限管理',
            'id' => 2,
            'open' => 0,
            'father'=>2
        ],
        [
            'action' => 'leaderList',
            'name' => '管理员管理',
            'id' => 3,
            'open' => 0,
            'father'=>2
        ],
    ]


];