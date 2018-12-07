@extends("Admin.Public.publics")
@section('admin')
<html>
<body>
    <head>
    <script src="/static/jquery-1.7.2.min.js"></script>
<div class="mws-panel grid_8">
     <div class="mws-panel-header">
         <span><i class="icon-table"></i> 用户列表</span>
    </div>
        <div class="mws-panel-body no-padding">
         <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
            <form action="adminusers" method="get">
            <div class="dataTables_filter" id="DataTables_Table_1_filter">
                <label>
                    用户名: <input type="text" aria-controls="DataTables_Table_1" name="keywords" value="{{$request['keywords'] or ''}}">
                    邮箱:<input type="text" aria-controls="DataTables_Table_1" name="keywordss" value="{{$request['keywordss'] or ''}}">
                </label>
            <input type="submit" name="" class="btn btn-success" value="搜索">
            </div>
            </form>
            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                <thead>
                    <tr role="row">
                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 78px;">ID</th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 110px;">用户名</th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 99px;">邮箱</th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 65px;">电话</th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 43px;">操作</th>
                    </tr>
                            </thead>          
         <tbody role="alert" aria-live="polite" aria-relevant="all">
            @foreach($user as $row)
                <tr class="odd">
                        <td class="  sorting_1">{{$row->id}}</td>
                        <td class=" ">{{$row->username}}</td>
                        <td class=" ">{{$row->email}}</td>
                        <td class=" ">{{$row->phone}}</td>
                        <td class=" ">
             <form action="/adminusers/{{$row->id}}" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button type="submit" class="btn btn-danger"><i class="icon-trash"></i></button>
                <a href="javascript:void(0)" class="btn btn-info del">
                    <i class="icon-remove-sign"></i>
                </a>
                <a href="/adminusers/{{$row->id}}/edit" class="btn btn-success">
                    <i class="icon-wrench"></i>
                </a>
             </form>
         </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    <div class="dataTables_paginate paging_full_numbers" id="pages">
        {{$user->appends($request)->render()}}
                            </div>
                        </div>
                    </div>
                </div>
                </head>
      </body>

      <script>
           // alert(1);
          // 获取按钮绑定单击事件
          $(".del").click(function(){
            // 获取删除数据的id
            id=$(this).parents("tr").find("td:first").html();
            s=$(this).parents("tr");
            ss=confirm('你确定删除吗?');
            if(ss){
            //Ajax
            $.get('/adminuserdel',{id:id},function(data){
                // alert(data);
                if(data==1){
                    // alert('删除成功');
                    //把删除数据所在的tr从form移除掉
                    s.remove();
                }
            // alert(1);
            });
            }
          });
      </script>
      </html>
@endsection
@section('title','用户列表')