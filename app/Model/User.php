<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //laravel里一个模型类对应一个数据表
    //规定属性 模型关联数据表
    protected $table="users";
    // 该模型是否需要自动维护
    public $timestamps = true;
    //可以被批量赋值的属性
    protected $fillable=['username','password','email','token','phone'];
    // 对获取到的数据做处理  $status状态字段 $value需要处理值
    public function getStatusAttribute($value){
    	$status=[1=>'禁用',2=>'开启'];
    	return $status[$value];
    }
    //会员模型和详情模型关联
    public function info(){
        //hasone 一对一   App\Model\Userinfo会员模型详情类 users_id两表关联字段
        return $this->hasone('App\Model\Userinfo','users_id');
    }
    //获取会员下的所有收货地址
    public function address(){
        //hasMany一对多关系 App\Model\Useraddress会员收货地址模型类 user_id关联两个模型字段
        return $this->hasMany('App\Model\Useraddress','user_id');

    }
}
