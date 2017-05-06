@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改商品</h3>
        
        <p>填空修改用户</p>
        
        <div class="row">
            <form action='/admin/goods/{{ $ob->id }}' method='post'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入商品名" name='name' value="{{ $ob->name }}">
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入商品小标题" name='title' value="{{ $ob->title }}">
                </div>
                 <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入商品大小" name='size' value="{{ $ob->size }}">
                </div> 
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入商品价格" name='price' value="{{ $ob->price }}">
                </div>
                 <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入商库存" name='stock' value="{{ $ob->stock }}">
                </div>
                
                <div class="col-lg-12">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
            
        </div>
        <p></p>
        
    </div>
@endsection