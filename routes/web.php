<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//后台搭建
Route::resource("/admin","Admin\AdminController");
//用户模块
Route::resource("/adminusers","Admin\UsersController");
//Ajax删除
Route::get("/adminuserdel","Admin\UsersController@del");
// 模型之会员模块
Route::resource("/adminuser","Admin\UserController");
// 会员收货地址
Route::get("/adminaddress/{id}","Admin\UserController@address");
//调试工具测试
Route::get("/user","Admin\UserController@user");
//调用自定义函数
Route::get("/users","Admin\UserController@users");
//自定义类的访问
Route::get("/userss","Admin\UserController@c");
//laravel 结合云之讯接口
Route::get("/p","Admin\UserController@p");
// laravel 结合支付宝接口
Route::get("/pay","Admin\UserController@pay");
//支付接口回调地址
Route::get("/returnurl","Admin\UserController@returnurl");



