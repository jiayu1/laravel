@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改用户</h3>
        
        <p>填空修改用户</p>
        
        <div class="row">
            <form action='/admin/order/{{ $ob->id }}' method='post'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入用户订单的ID" name='uid' value="{{ $ob->uid }}">
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="用户的订单号" name='number' value="{{ $ob->number }}">
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="用户的下单时间" name='date' value="{{ $ob->date }}">
                </div>
                <div class="col-lg-4">
                    <select class="form-control m-b-10" name='statu'>
                        <option value='0' @if($ob->statu ==0)selected @endif>未付款</option>
                        <option value='1' @if($ob->statu ==1)selected @endif>待发货</option>
                        <option value='2' @if($ob->statu ==0)selected @endif>已发货</option>
                        <option value='3' @if($ob->statu ==1)selected @endif>已接收</option>
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