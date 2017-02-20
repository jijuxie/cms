<?php
/**
 * Created by PhpStorm.
 * User: 12156
 * Date: 2016/12/20
 * Time: 21:11
 */
namespace app\index\controller;

use think\Cache;

class Usecache
{
    public function index()
    {
//设置缓存基础的file方式
        echo '存储的数据变化';
        if (Cache::set('name', 'aaaaaa', 3600)) {
            echo '存储好了';
        } else {
            echo '没存好';
        }
        //设置缓存自增
// name自增（步进值为1）
        if (Cache::inc('name1')) {
            echo 'name1自增了1';
        }

// name自增（步进值为3）
        if (Cache::inc('name2', 3)) {
            echo 'name2自增了3';
        }
        // name自减（步进值为1）
        if (Cache::dec('name1')) {
            echo 'name2自减少了1';
        }
        // name自减（步进值为3）
        if (Cache::dec('name2', 3)) {
            echo 'name2自减了3';
        }

        echo '读取存储前的数据<br/>';
        dump(Cache::get('name'));
        dump(Cache::get('name1'));
        echo '获取后立刻删除数据后name2应该没了';
//        这个pull函数貌似木有了
//        Cache::pull('name2');
        dump(Cache::get('name2'));
        echo '读取删除后的数据';
        Cache::rm('name');
        Cache::rm('name1');
        Cache::rm('name2');
        dump(Cache::get('name'));
        dump(Cache::get('name1'));
        dump(Cache::get('name2'));
        //清空所有缓存
        Cache::clear();
        //不存在则存入缓存后返回应该是我的包加载的有问题？？
//        Cache::remember('name',function(){
//            return time();
//        });
        //当使用复合缓存的时候
        //下面的演示是错误的，因为并没有安装这些缓存机制
        // 切换到file操作
        Cache::store('file')->set('name','value');
        Cache::get('name');
// 切换到redis操作
//        Cache::store('redis')->set('name','value');
//        Cache::get('name');
        Cache::clear();
    }

}