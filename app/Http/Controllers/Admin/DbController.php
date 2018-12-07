<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class DbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //数据库的基本操作 操作表test1
        //获取数据表数据
        $data=DB::select("select * from user");
        // dd($data);
        //加载模板 分配数据
        // return view("Admin.Db.index",['data'=>$data]);
        // 删除数据
        // DB::delete("delete from user where id=54");
        //一般语句只能删除表和创建表
        // DB::statement("drop table stu");
        // 构造器(连贯方法)使用更加灵活 满足需求多
        //获取所有数据
        // $alldata=DB::table('user')->get();
        // $onlydata=DB::table('user')->where("id",'=',56)->first();
        // 获取单条结果中某个字段
        // $username=DB::table("user")->where("id",'=',56)->value('name');
        //获取某一列数据
        // $data1=DB::table("user")->pluck('name');
        //插入单条数据
        // DB::table("user")->insert(['city'=>'sss','age'=>'12']);
        // //多条数据
        // DB::table("user")->insert([
        // ['city'=>'sw','age'=>'12']
        // ],
        // ['city'=>'add','age'=>'12']);
        // 插入数据同时获取id
        // $id=DB::table("user")->insertGetId(['city'=>'sss','age'=>'12']);
        //删除数据
        // DB::table("user")->where("id",'=',77)->delete();
        //获取指定字段信息
        // $data=DB::table("user")->select("name","sex","age as p")->get();
        //模糊搜索
        // $res=DB::table("user")->where('name','like',"%s%")->get();
        //排序
        // $res=DB::table("user")->orderBy('id','desc')->get();
        // 获取搜索分页关键词
        // $k=$request->input('keywords');
        // echo $k;
        // 分页 paginate分页方法
        // $res=DB::table("user")->where("name","like","%".$k."%")->paginate(3);
        // return view("Admin.Db.index",['data'=>$res,'request'=>$request->all()]);
        // dd($res);
        // 获取数据的总条数
        // $tot=DB::table("user")->count();
        // dd($tot);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
