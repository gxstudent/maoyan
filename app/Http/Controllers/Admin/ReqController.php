<?php

namespace App\Http\Controllers\Admin;
// use导入其他类
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReqController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Request请求类 $request请求对象
    public function index(Request $request)
    {
        // 获取请求路径
        $path=$request->path();
        // 获取完整的url地址
         $url=$request->url();
         // dd($url);
         // 获取请求方式
         $method=$request->method();
         //检测请求方式
         $res=$request->isMethod("POST");
         // 获取所有参数
         $allparam=$request->all();
         // 获取单个name参数
         $name=$request->input('name');
         // 获取指定参数
         $onlyparam=$request->only(['name','age']);
         // 获取除了某个参数之外的数据 取出参数name age
         $exceptparam=$request->except(['name']);
         // 设置默认值
         $names=$request->input('name','welcome');
         // 检测某个参数是否存在
         $data=$request->has('name');
         //设置cookie
         // return response("sm")->withCookie('o2o30','goods',1);
         //获取cookie
         // $s=$request->cookie('o2o30');
         //设置cookie方法二
         // \Cookie::queue('age',10,1);
         //获取cookie方法二
         // echo \Cookie::get('age');
         //存储一条session
         // session(['name'=>'o2o30']);
         //获取存储的ssion数据
         // echo session('name');
         //删除session
         // $request->session()->pull('name');
         // echo session('name');
         //返回json格式数据
         // return response()->json(['name'=>'linfeng','age'=>12]);
         //下载文件
         // return response()->download("./upload/1543759764.jpg");
         //页面跳转
         return redirect("/req/create");
         // dd($s);
        // 打印数据同时终止脚本代码
        // dd($path);
        // echo "this is path";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载模板
        return view("Admin.Req.add");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //把所有的参数写入闪存里
        // $request->flash();
        //将部分参数写入闪存里
        // $request->flashOnly('email');
        //除去eamil的参数之外的参数写入闪存里
        // $request->flashExcept('email');
        // echo "这是执行登录";
        //检测用户名是否为空
        if($request->input('name')==null){
            //阻止表单提交同时把所有参数信息写入闪存里
            return back()->withInput();

        }else{
            //打印所有参数
            dd($request->all());
        }
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
