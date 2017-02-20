<?php
/**
 * Created by PhpStorm.
 * User: 12156
 * Date: 2016/12/19
 * Time: 20:37
 */
namespace app\index\validate;

use think\Validate;

class User extends Validate
{
    //同一个字符段的验证可以设置多个但是只会报一个错误
//定义此数据可以替代message
//['name','require|max:25','名称必须|名称最多不能超过25个字符'],
//['age','number|between:1,120','年龄必须是数字|年龄必须在1~120之间'],
//['email','email','邮箱格式错误']
    protected $rule = [
        'name' => 'require|checkName',
        'password' => 'request',
        'captcha' => 'request|captcha',
    ];
//    根据验证规则对应验证信息
    protected $message = [
        'name.require' => '名称必须jijuxie',
        'name.max' => '名称最多不能超过25个字符',
        'age.number' => '年龄必须是数字',
        'age.between' => '年龄只能在1-120之间',
        'email' => '邮箱格式错误',
    ];

    protected function checkName($value, $data)
    {
        $user = new \app\admin\model\User();
        $user->password=
    }
//    // 自定义验证规则$value是传过来的值，$rule是对应：值$data是传过来一个数组
//    protected function checkName($value, $rule, $data)
//    {
////打印传过来的数组
////        die(dump($data));
//        return $rule == $value ? true : '名称错误';
//    }
    //场景定义，在某个场景时只验证定义的字段
    //也可以定义不同场景时不同的验证方式
    protected $scene = [
        'edit' => ['name', 'age'],
        'reset' => ['name', 'age' => 'require|number|between:1,120'],
    ];
    //内置规则
    protected $myrule = [
        'name' => 'require',//验证字段唯一
        'numi' => 'number',//验证某个字段是否为数字
        'numf' => 'float',//验证某个字段是否为数组
        'numb' => 'boolean',//验证某个字段是否为布尔值
        'email' => 'email',//验证摸个email是否为email值
        'info' => 'array',//验证某个字段是否为数组
        'accept' => 'accepted',//验证某个字段是否为yes，on或者为1，在确认服务条款时通常很有用
        'date' => 'date',//验证data是否为有效的时间
        'namea' => 'alpha',//验证字段是否为数字
        'namean' => 'alphaNum',//验证字段是否为数字和字母
        'namead' => 'alphaDash',//验证字段是否为数字字母，下划线_以及破折号-，
        'host' => 'activeUrl',//验证某个字段是否为有效的域名或IP
        'url' => 'url',//验证某个字段是否为有效的URL地址
        'ip' => 'ip',//验证字段手否为有效的IP地址
        'create_time' => 'dateFormat:y-m-d',//验证某个字段是否为某个格式日期
        'num' => 'in:1,2,3',//验证是否在某个范围之内
        'numbb' => 'between:1,10',//验证某个字段是否在某个区间之内
        'namel' => 'length:4,25',//验证某个字段长度是否在某个范围之内可判断数组文件字符串
        'namell' => 'length:4',//制定长度
        'namem' => 'max:25',//验证某个字段在某个最大值之下
        'namemm' => 'min:5',//验证某个字段是否在某个最小值之上
        'begin_time' => 'after:2016-3-18',//验证某个字段的值是否在某个日期之后
        'end_time' => 'before:2016-10-01',//验证某个字段的值是否在某个日期之前
        'expire_time' => 'expire:2016-2-1,2016-10-01',//验证当前操作（注意不是某个值）是否在某个有效日期之内
        'nameii' => 'allowIp:114.45.4.55',//验证当前请求的IP是否在某个范围
        'nameiii' => 'denyIp:114.45.4.55',//验证当前请求的IP是否禁止访问
        'repassport' => 'require|confirm:passport',//验证某个字段是否和另外一个字段的值一致
        'namerrr' => 'require|different:account',//验证某个字段是否和另外一个字段的值不一致
        'score' => 'egt:60',
        'numsss' => '>=:100',//验证是否大于等于
        'scoreggg' => 'gt:60',
        'numggg' => '>:100',//验证是否大于
        'scoreeee' => 'elt:100',
        'numreeee' => '<=:100',//验证是否小于等于
        'scoreeq' => 'eq:100',
        'numeq' => '=:100',
        'numeqq' => 'same:100',//验证是否等于某个值
//filter验证，需要对filter比较了解
        'ip！！' => 'filter:validate_ip',
//        正则验证,需要对正则比较了解
        'zip' => '\d{6}',
// 或者
        'zip2' => 'regex:\d{6}',
//如果你的正则表达式中包含有|符号的话，必须使用数组方式定义
        'accepted' => ['regex' => '/^(yes|on|1)$/i'],
        //文件验证
        'file1' => 'file',//验证是否是一个上传文件
        'img' => 'image:100px,200px type',//验证是否为图像文件
        'fileExt' => 'fileExt:',//允许文件上传的后缀
        'fileMime' => 'fileMine:',//验证文件的文件类型
        'fileSize' => 'fileSize:',//验证文件的字节大小
        //行为验证
        'data' => 'behavior:\app\index\behavior\Check',//行为验证，验证来自哪个控制器或者model
        //unique:table,field,except,pk这个称之为其他验证还没弄得太懂
        //验证必须
        'password' => 'requireIf:account,1',//当某个字段的值等于某个值得时候必须
        'password2' => 'requireWith:account'//验证某个有值时必须
    ];
}