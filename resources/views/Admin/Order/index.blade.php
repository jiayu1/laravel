@extends('Admin.base.parent')
@section('content')
        <div class="block-area" id="tableHover">
            <h3 class="block-title">用户订单列表</h3>
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
                 <form action='/admin/order' method='post' name='myform'>
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                 </form>

                 <form action='/admin/order' method='get'>
                     <div class='medio-body'>
    				   姓名：<input type='text' class='form-control input-sm m-b-10' name='number'>
    			     </div>
    			     
        		     <input type='submit' class='btn' value='搜索'>  
                 </form>
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>用户的ID</th>
                        <th>订单号</th>
                        <th>下单时间</th>
                        <th>状态</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $v)
                    	<tr>
	                       <td>{{ $v->id }}</td>
                           <td>{{ $v->uid }}</td>
                           <td>{{ $v->number }}</td>
                           <td>{{ $v->date }}</td>
                           <td>@if($v->statu == 0)
                                 未付款
                                @elseif($v->statu == 1)
                                待发货
                                @elseif($v->statu == 2)
                                已发货
                                @elseif($v->statu == 3)
                                已接收
                                @endif
                                 </td>
                           
                            
	                        <td>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='javascript:doDel({{ $v->id }})'>删除</a>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='/admin/order/{{ $v->id }}/edit'>修改</a>
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
                 form.action = '/admin/order/'+id;
                 form.submit();
           	  }
           }
        </script>
@endsection