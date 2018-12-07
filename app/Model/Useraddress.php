<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Useraddress extends Model
{
    //规定属性 模型关联数据表
    protected $table="address";
    //主键
    protected $primaryKey="id";
    // 该模型是否需要自动维护
    public $timestamps = false;
    //可以被批量赋值的属性
    protected $fillable=['name','phone','user_id','huo'];
}
