@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">添加用户订单</h3>
        
        <p>填空添加用户</p>
           @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
          
        <div class="row">
            <form action='/admin/order' method='post'>
                {{ csrf_field() }}
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入用户ID" name='uid'>
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="下单号" name='number'>
                </div>
                 <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="下单时间" name='date'>
                </div>
                <div class="col-lg-4">
                    <select class="form-control m-b-10" name='statu'>
                        <option>--请选择--</option>
                        <option value='0'>未付款</option>
                         
                        <option value='1'>待发货</option>
                        <option value='2'>已发货</option>
                        <option value='3'>已接收</option>

                        
                    </select>
                </div>
                
                <div class="col-lg-12">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
        </div>
        <p></p>
        
    </div>
@endsection