<?php
/**
 * Created by PhpStorm.
 * User: 12156
 * Date: 2016/12/13
 * Time: 20:58
 */
namespace app\index\model;

use think\Model;

class User extends Model
{
//设置主键。不设置的话会自动识别，最好不要设置
    protected $pk = 'id';
    //设置对应数据表。的完整名称
    protected $table = 'tp_user';
    // 设置当前模型的数据库连接
    protected $connection = [
        // 数据库类型
        'type' => 'mysql',
        // 服务器地址
        'hostname' => '127.0.0.1',
        // 数据库名
        'database' => 'thinkphp',
        // 数据库用户名
        'username' => 'root',
        // 数据库密码
        'password' => '',
        // 数据库编码默认采用utf8
        'charset' => 'utf8',
        // 数据库表前缀
        'prefix' => 'think_',
        // 数据库调试模式
        'debug' => false,
    ];
    //配合属性转换变量，时间戳在输出时自动转换为下面的形式
    protected $dateFormat = 'Y/m/d';
    //写入和读取时自动进行类型转换
    protected $type = [
        'status' => 'integer',//该字段输出和写入时都自动转换为整形
        'score' => 'float',//该字段在输出和写入的时候自动转会为浮点型
        'birthday' => 'datetime',//写入和读取数据的时候都会自动处理成时间字符串Y-m-d H:i:s的格式
        'info' => 'array',//写入时会强转为array格式并且json格式化，输出时解json
        'info2' => 'object',//写入时自动json话，输出时自动转换为stdclass对象
        'info3' => 'serialize',//某种序列化类型，写入时自动序列化，读取时自动反序列化
        'info4' => 'json',//输入时json格式化，输出时解json处理
        'info5' => 'timestamp',//输入时记录时间戳，输出时默认转Y-m-d H:i:s设置dateFormat后会转化为前者的格式，或者直接赋值timestamp:Y/m/d效果一样
    ];
    //开启自动填写时间戳的功能，，，系统会自动对create_time与update_time字段的时间进行自动填写
    protected $autoWriteTimestamp = 'datetime';
    // 定义时间戳字段名，当需要自动改变的字段名与定义对应
    protected $createTime = 'create_at';
    protected $updateTime = 'update_at';

    //模型初始化方法
    protected function initialize()
    {
        parent::initialize();
        // TODO: Change the autogenerated stub
    }

//继承init方法，统一注册模型事件
    protected static function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        //before_delete、after_delete、before_write、after_write、before_update、after_update、before_insert、after_insert事件行为
        self::event('before_insert', function ($user) {
            if ($user->name != 1) {
                return false;
            }
        }
        //可以注册多个回调方法

        //此处报warnning不需要处理因为此处本不需要return的
        );


    }

    //数据完成，设置字段后便使得数据，开启数据完成后才可以使用修改器
    protected $auto = ['name', 'ip'];//写入，输出双自动
    protected $insert = ['status' => 1];//写入自动
    protected $update = [];
//    获取器？？个人认为应该叫转化器才对，需要注意的是此处一定要将字段名对应好，getNameAttr只对name字段1进行处理，不对其他字段进行处理
//获取器的字段必须对应完全如果没有返回值的话会产生报错
    public function getNameAttr($value, $data)
    {
        //$value是当前字段的数据，$data是此条数据的所有数据集，也就是说你的输出不止可以根据当前字段数据改变也可以根据当前这条数据里的其他数据所改变
        //下面的命名倒是无所谓
        $name = ['邢文斌' => '五', '神人' => '六', 7 => 'qi', 8 => '8'];
        return $name[$value];
    }

    //修改器,可以对要存储的字段按照现在的数据修改后再存入数据表，两个值都不是必须的，不传值得情况下可以返回生成的和传值无关的数据
    public function setNameAttr($value, $data = [])
    {
        //value是这个字段的值，$data是整个数据集，都是未存储前的
        return strtoupper($value);
    }


    // 关联，和聚合查询暂时不用，虽然很重要但是先不测试，感觉很麻烦的样子
}