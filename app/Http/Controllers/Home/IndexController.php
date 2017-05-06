<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class IndexController extends Controller
{
    //
    public function index()
    {
       // $list = DB::table('type')->where('pid',0)->get();
        // dd($list);
    	return view('Home.index');
    }

    public function show($id)
    {
        // dd($id);

          // 获取参数
         // $ob = DB::table('type')->where('pid',0)->get();
        // 分类显示
         $list = DB::table('type')->where('pid',0)->get();
         $list1 = DB::table('type')->where('pid',$id)->get();
          foreach ($list1 as $k => $v) {
            $v->f = DB::table('type')->where('pid',$v->id)->get();
             
          }

          // dd($list1);
          // 显示商品
          $ob = DB::table('goods')->get();
         

    	return view('Home.goods',['list'=>$list,'list1'=>$list1,'ob'=>$ob]);
    }
}
