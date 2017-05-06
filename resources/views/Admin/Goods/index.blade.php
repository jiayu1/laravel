@extends('Admin.base.parent')
@section('content')
        <div class="block-area" id="tableHover">
            <h3 class="block-title">商品信息列表</h3>
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
                 <form action='/admin/goods' method='post' name='myform'>
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                 </form>

                 <form action='/admin/goods' method='get'>
                     <div class='medio-body'>
    				   商品名：<input type='text' class='form-control input-sm m-b-10' name='name'>
    			     </div>
    			     
        		     <input type='submit' class='btn' value='搜索'>  
                 </form>
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>类别名</th>
                        <th>商品名</th>
                        <th>小标题</th>
                        <th>价格</th>
                        <th>状态</th>
                        <th>大小</th>
                        <th>库存</th>
                        <th>图片</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $v)
                    	<tr>
	                        <td>{{ $v->id }}</td>
                            <td>{{ $v->name }}</td>
	                        <td>{{ $v->g_name }}</td>
	                        <td>{{ $v->title }}</td>

	                        <td>{{ $v->price }}</td>
                            <td>{{ ($v->statu == 0)?'下架':'上架' }}</td>
                            <td>{{ $v->size }}</td>
                            <td>{{ $v->stock }}</td>
                            <td><img src= "/admin/upload/{{ $v->mypic }}" width='50' height='50'></td><!--路径-->
	                        <td>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='javascript:doDel({{ $v->id }})'>删除</a>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='/admin/goods/{{ $v->id }}/edit'>修改</a>
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
                 form.action = '/admin/goods/'+id;
                 form.submit();
           	  }
           }
        </script>
@endsection