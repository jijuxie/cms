<?php
//menu 配置参数
return
    [
        [
            'jijuxie_con' => 'website',
            'jijuxie_name' => '网站设置',
            'jijuxie_icon_class' => 'am-icon-table',
            'children' => [
                [
                    'act' => 'index',
                    'name' => '网站信息',
                    'des' => '网站现在的状态',
                ],
                [
                    'act' => 'index2',
                    'name' => '网站设置二',
                    'des' => '二这里就是这个页面的描述',
                ],
            ]
        ],
        [
            'jijuxie_con' => 'leader',
            'jijuxie_name' => '权限管理',
            'jijuxie_icon_class' => 'am-icon-table',
            'children' => [
                [
                    'act' => 'role',
                    'name' => '角色管理',
                    'des' => '角色的建立和权限的配置',
                ],
                [
                    'act' => 'limit',
                    'name' => '权限管理',
                    'des' => '权限的预览和对应配置',
                ],
                [
                    'act' => 'LeaderList',
                    'name' => '管理员设置',
                    'des' => '给管理员分配对应权限与增减',
                ]
            ]
        ],
        [
            'jijuxie_con' => 'website',
            'jijuxie_name' => '网站设置',
            'jijuxie_icon_class' => 'am-icon-table',
            'children' => [[
                'act' => 'index',
                'name' => '网站设置一',
                'des' => '一这里就是这个页面的描述',
            ],
                [
                    'act' => 'index2',
                    'name' => '网站设置二',
                    'des' => '二这里就是这个页面的描述',
                ],
            ]
        ]
    ];