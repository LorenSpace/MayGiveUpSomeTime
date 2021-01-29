# 一个丑陋的留言板

由于是个demo，而且花费了太多时间在其他方面上，前端的css等美化没有实现

而且留言板并没有添加时间的显示



原本是想着有个用户验证啥的，但是没做（x

所以主界面的用户名和密码就是个装饰，只是下面的链接有所不同而已



下面介绍各个部分的部署



### 路由

就是增删改查，增的部分加上了一个post来存储数据

```php
Route::get('add',[MsgsController::class, 'add']);

//接受POST数据并存入库
Route::post('add',[MsgsController::class, 'addpost']);

```



添加上了管理员模式（特别水）



### 控制器&模型&数据库

创建了msg的模型

在迁移中添加了一下参数

```php
//使用increments来方便更改和删除的查找
$table->increments('id');
$table->string('username');
$table->string('title',30);
$table->text('content');
$table->timestamps();
```



对于数据库这方面由于经常报错（坑了我3小时）

我就自己创了一个bbs的数据库，用户名mob，密码123456

```bash
php artisan migrate
```

终于将这个指令成功实现



控制器中的编辑删除根据id实现

```php
public function del($id)

public function edit(Request $request,$id)
```



### 视图

写了个login当主界面（还非常丑，甚至没有作用）

将普通用户和管理员展示的页面分开（其实就是多了删除功能罢了）

然后管理员进入会有特别提示（多了几行字）



由于不能使用onclick跳转，原本的按钮被我改成了超链接。。

css和js方面并没有做过多修改

###题外话
为了解决GitHub连接不稳定的问题，在尝试了各种办法的时候，最终还是在host添加了IP（x
