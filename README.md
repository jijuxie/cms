jijuxie CMS 基于ThinkPHP 5.0
===============

[![Total Downloads](https://poser.pugx.org/topthink/think/downloads)](https://packagist.org/packages/topthink/think)
[![Latest Stable Version](https://poser.pugx.org/topthink/think/v/stable)](https://packagist.org/packages/topthink/think)
[![Latest Unstable Version](https://poser.pugx.org/topthink/think/v/unstable)](https://packagist.org/packages/topthink/think)
[![License](https://poser.pugx.org/topthink/think/license)](https://packagist.org/packages/topthink/think)

ThinkPHP5在保持快速开发和大道至简的核心理念不变的同时，PHP版本要求提升到5.4，对已有的CBD模式做了更深的强化，优化核心，减少依赖，基于全新的架构思想和命名空间实现，是ThinkPHP突破原有框架思路的颠覆之作，其主要特性包括：

 + 基于命名空间和众多PHP新特性
 + 核心功能组件化
 + 强化路由功能
 + 更灵活的控制器
 + 重构的模型和数据库类
 + 配置文件可分离
 + 重写的自动验证和完成
 + 简化扩展机制
 + API支持完善
 + 改进的Log类
 + 命令行访问支持
 + REST支持
 + 引导文件支持
 + 方便的自动生成定义
 + 真正惰性加载
 + 分布式环境支持
 + 更多的社交类库

> ThinkPHP5的运行环境要求PHP5.4以上。

详细开发文档参考 [ThinkPHP5完全开发手册](http://www.kancloud.cn/manual/thinkphp5)

## cms目录结构

初始的目录结构如下：

~~~
www  WEB部署目录（或者子目录）
├─application           应用目录
│  ├─common             公共模块目录（可以更改）
│  ├─admin              后台目录
│  │  ├─config.php      模块配置文件
│  │  ├─common.php      模块函数文件
│  │  ├─controller      控制器目录
│  │  ├─model           模型目录
│  │  ├─view            视图目录
│  │  └─ ...            更多类库目录
│  ├─module_name        模块目录
│  │  ├─config.php      模块配置文件
│  │  ├─common.php      模块函数文件
│  │  ├─controller      控制器目录
│  │  ├─model           模型目录
│  │  ├─view            视图目录
│  │  └─ ...            更多类库目录
│  │
│  ├─command.php        命令行工具配置文件
│  ├─common.php         公共函数文件
│  ├─config.php         公共配置文件
│  ├─route.php          路由配置文件
│  ├─tags.php           应用行为扩展定义文件
│  └─database.php       数据库配置文件
│
├─public                WEB目录（对外访问目录）
│  ├─index.php          入口文件
│  ├─router.php         快速测试文件
│  └─.htaccess          用于apache的重写
│
├─thinkphp              框架系统目录
│  ├─lang               语言文件目录
│  ├─library            框架类库目录
│  │  ├─think           Think类库包目录
│  │  └─traits          系统Trait目录
│  │
│  ├─tpl                系统模板目录
│  ├─base.php           基础定义文件
│  ├─console.php        控制台入口文件
│  ├─convention.php     框架惯例配置文件
│  ├─helper.php         助手函数文件
│  ├─phpunit.xml        phpunit配置文件
│  └─start.php          框架入口文件
│
├─extend                扩展类库目录
├─runtime               应用的运行时目录（可写，可定制）
├─vendor                第三方类库目录（Composer依赖库）
├─build.php             自动生成定义文件（参考）
├─composer.json         composer 定义文件
├─LICENSE.txt           授权说明文件
├─README.md             README 文件
├─think                 命令行入口文件
~~~

> router.php用于php自带webserver支持，可用于快速测试
> 切换到public目录后，启动命令：php -S localhost:8888  router.php
> 上面的目录结构和名称是可以改变的，这取决于你的入口文件和配置参数。

## 命名规范

`ThinkPHP5`遵循PSR-2命名规范和PSR-4自动加载规范，并且注意如下规范：

### 目录和文件

*   目录不强制规范，驼峰和小写+下划线模式均支持；
*   类库、函数文件统一以`.php`为后缀；
*   类的文件名均以命名空间定义，并且命名空间的路径和类库文件所在路径一致；
*   类名和类文件名保持一致，统一采用驼峰法命名（首字母大写）；

### 函数和类、属性命名
*   类的命名采用驼峰法，并且首字母大写，例如 `User`、`UserType`，默认不需要添加后缀，例如`UserController`应该直接命名为`User`；
*   函数的命名使用小写字母和下划线（小写字母开头）的方式，例如 `get_client_ip`；
*   方法的命名使用驼峰法，并且首字母小写，例如 `getUserName`；
*   属性的命名使用驼峰法，并且首字母小写，例如 `tableName`、`instance`；
*   以双下划线“__”打头的函数或方法作为魔法方法，例如 `__call` 和 `__autoload`；

### 常量和配置
*   常量以大写字母和下划线命名，例如 `APP_PATH`和 `THINK_PATH`；
*   配置参数以小写字母和下划线命名，例如 `url_route_on` 和`url_convert`；

### 数据表和字段
*   数据表和字段采用小写加下划线方式命名，并注意字段名不要以下划线开头，例如 `think_user` 表和 `user_name`字段，不建议使用驼峰和中文作为数据表字段命名。


#正文（cms）
为贯彻落实tp5的学习，故做一个tp5的小型cms系统
####主体框架搭建完成       -年-月-日
####登录功能实现           -年-月-日 
####登录功能实现某些逻辑功能-年-月-日
登录使用ajax回调更亲民。

验证name password 与验证码，多重防护。

layer弹窗提示醒目提醒。

amazeUI友好界面。

登录后在进入登录页面自动跳转到主页面。

登录时间锁，超出一定时间自动退登更安全。

除了登录页面外所有页面都验证登录信息，更安全。

####主界面搭建完成17年2月25日
使用amazeUI，并且主体使用了其内部的一个后台模板。

拆分amazeUI，去除所有非关键元素，保留，头部，左侧边栏，右侧样式转换按钮，

将原有的单页面形式改成了iframe内部页面调用页面组成形式。

添加js修正原有的去除原先在iframe部分的内容存在时，左侧栏能够正常根据屏幕大小回缩，但是去除原有部分后不能回缩的bug。

添加js使得按钮可以改变iframe的src。

iframe基础样式搭建完成2月27日
#### 按钮17年2月7日
写好menu配置文件的数组结构就可以自生成菜单

点击某个菜单iframe便跳转至对应的页面

点击跳转到具体页面之后生成对应的title和描述
## 版权信息

本程序仅提供参照和学习之用。



