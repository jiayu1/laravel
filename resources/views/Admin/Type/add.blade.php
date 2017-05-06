@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">添加用户</h3>
        
        <p>填空添加类别</p>
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
            <form action="{{ url('/admin/type') }}" method='post'>
                {{ csrf_field() }}
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入类别名" name='name'>
                </div>
                <div class="col-lg-4">
                    <input type="hidden" class="form-control m-b-10"  name='pid' value=0>
                </div>
                <div class="col-lg-4">
                    <input type="hidden" class="form-control m-b-10"  name='path' value=0>
                </div>
                
                <div class="col-lg-12">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
        </div>
        <p></p>
        
    </div>
@endsection