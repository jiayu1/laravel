<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function request(Request $request)
    {
       // http://lamp176.com/demo1?name=zhang3&age=18&sex=2&num[]=10&num[]=20
        //获取所有的数据
        // $list = $request->all();
        //获取指定字段的值
        // $list = $request->input('num.0'); 
        // 获取只包含指定字段的结果
           // $list = $request->only('name','age');
    	// 获取除了指定字段的结
    	   // $list = $request->except('num');
        // dd($list);  
        echo '你好！'.($request->has('name')?$request->input('name'):'游客');	
    }

    public function response()
    {
    	// return 'hello 英语老师';	//响应字符串
    	//===================自定义响应

    	// $content = file_get_contents('./img/File_090.jpg');
    	// $status = 200;
    	// $value = 'image/jpeg';

    	// return response($content,$status)->header('Content-type',$value);
    	//重定向（参数是路由）
    	// return redirect('/stu');

      // 请求转发
       return (new \App\Http\Controllers\Stu\StuController())->index();
    }
}
