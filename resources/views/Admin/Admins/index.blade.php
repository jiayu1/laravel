@extends('Admin.base.parent')
@section('content')
        <div class="block-area" id="tableHover">
            <h3 class="block-title">管理员信息</h3>
             @if(session('msg'))
        	   <div class="alert alert-success alert-icon">
			   {{ session('msg') }}
			   <i class="icon"></i>
			   </div>
            @endif
            @if(session('error'))
        	    <div class="alert alert-warning alert-icon">
			    {{ session('error') }}
			     <i class="icon"></i>
			    </div>
		    @endif
            
            <div class="table-responsive overflow">
                 <form action='/admin/admins' method='post' name='myform'>
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                 </form>

                 <form action='/admin/admins' method='get'>
                     <div class='medio-body'>
    				   管理员名：<input type='text' class='form-control input-sm m-b-10' name='admin_name'>
    			     </div>
    			     
        		     <input type='submit' class='btn' value='搜索'>  
                 </form>
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>管理员名</th>
                        <th>商品密码</th>
                        <th>权限</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $v)
                    	<tr>
	                        <td>{{ $v->Admin_id }}</td>
                            <td>{{ $v->admin_name }}</td>
	                        <td>{{ $v->Admin_pass }}</td>
	                        <td>{{ ($v->Admin_pw==0)?'管理员':'超级管理员' }}</td>
	                        
                            
	                        <td>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='javascript:doDel({{ $v->Admin_id }})'>删除</a>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='/admin/admins/{{ $v->Admin_id }}/edit'>修改</a>
	                        </td>
	                    </tr>
                    @endforeach
                </tbody>
            </table>
             {{ $list->appends($where)->links() }}
            </div>
        </div>
        <script type="text/javascript">
           function doDel(id){
           	  if(confirm('确定删除吗？')){
                 var form = document.myform;
                 form.action = '/admin/admins/'+Admin_id;
                 form.submit();
           	  }
           }
        </script>
@endsection