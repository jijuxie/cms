<?php
/**
 * Created by PhpStorm.
 * User: 12156
 * Date: 2016/12/14
 * Time: 21:29
 */
namespace app\index\controller;

use think\Loader;

//使用model一般是在logic里面然后此处调用logic的方法，
class Usemodel
{
    public function index()
    {
        return 'index->model->index';

    }

    //新增数据
    public function add()
    {
        $user = Loader::model('user');
        //添加数据
        $data = array(
            'name' => '邢文斌100',
            'age' => '100',
            'sex' => 'man',
            'city' => '寒亭',
            'sadsa' => 'sds'
        );
        //当数据里存在非数据表字段时使用allowField方法过滤数据
        $res = $user->data($data)->allowField(true)->save();
        //当多次新增数据时应使用isUpdate(false)方法方式两次的添加出错
        $user->isUpdate(false)->data($data)->save();
        //之后的$user是第二次的数据
        if ($res) {
            echo $user->id;
            echo '<br/>';
            echo $user->name;
            echo '<br/>';
            echo $user->age;
            echo '<br/>';
            echo $user->sex;
            echo '<br/>';
            echo $user->city;
            echo '<br/>';
        }
    }

    //新增数条数据
    public function addAll()
    {
        $user = Loader::model('user');
        $list = [
            [
                'name' => '邢文斌122',
                'age' => '100',
                'sex' => 'man',
                'city' => '寒亭',

            ],
            [
                'name' => '邢文斌123',
                'age' => '100',
                'sex' => 'man',
                'city' => '寒亭',

            ]
        ];
        dump(
        //此时allowField（true）,没用
            $user->allowField(true)->saveAll($list)
        );
    }

    //更新数据
    public function update()
    {
        $user = Loader::model('user');
        $data = [
            'name' => '神人', 'age' => 20, 'sex' => 'man', 'city' => '潍坊'
        ];
        //如果更新字段需要过滤字段请使用allowField
        $user->save($data, ['id' => 10]);
    }

    //批量更新数据
    public function updateAll()
    {
        $user = Loader::model('user');
        $list = [
            [
                'id' => 12, 'name' => '神人', 'age' => 20, 'sex' => 'man', 'city' => '潍坊'
            ],
            [
                'id' => 13, 'name' => '神人', 'age' => 20, 'sex' => 'man', 'city' => '潍坊'
            ]
        ];
        //如果更新字段需要过滤字段请使用allowField
        $user->saveAll($list);
    }

    //删除数据
    public function delete()
    {
        $user = Loader::model('user');
        //删除是可以批量的也可以单个，取决于查询出了多少数据
        $user->where(['name' => '张鹏2'])->delete();
    }

    //查询操作
    public function find()
    {
        $user = Loader::model('user');

        $res = $user->where('id', 10)->find();
        dump($res->id);
    }

    //查询多条数据操作
    public function findAll()
    {
        $user = Loader::model('user');
        $res = $user->select();
        dump($res);
    }

    //聚合方法查询一般用于数字
    public function findCount()
    {
        $user = Loader::model('user');
//       返回总条数
        echo $user->count();
        echo '<br/>';
        //返回此字段的最大值
        echo $user->max('id');
        //返回此字段的最小值
        echo '<br/>';
        echo $user->min('id');
        //返回此字段的平均值
        echo '<br/>';
        echo $user->avg('id');
        //返回总和
        echo '<br/>';
        echo $user->sum('id');
    }
    //当使用model的获取器时测试结果，
    public function status(){
        $user=Loader::model('user');
        //对的单个处理过的值进行输出
        echo $user->find()->name;
        //对所有值进行处理输出
        dump($user->find(6)->toArray());
        //得到原始数据单个字段
        echo $user->find()->getData('name');
        //得到此条数据所有的原始数据
        dump($user->find()->getData());
    }
    //当使用model的修改器时的测试结果
    public function rename(){
        $user=Loader::model('user');
        $data=['name'=>'aaaBBBB'];
        $user->data($data)->save();
        echo $user->name;
    }
    //时间戳自动写入测试
    public function retime(){
        $user=Loader::model('user');
        $data=['name'=>'aaaBBBBw'];
        $user->save($data,['id'=>24]);
    }
    //测试model事件
    public function event(){
        $user=Loader::model('user');
        $data=['name'=>'邢文斌'];
        $user->save($data);
        //此处虽然返回了数据，但是他却触发了事件选项然后通过事件返回数据库的初始状态
        echo $user->name;
    }
}
