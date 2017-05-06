<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class HomesController extends Controller
{
    //
    public function index()
    {
       $list = DB::select('select * from type order by concat(path,",",id)');
       
        return view('Home.index',['list' => $list]); 
    }
    public function create($mp)
    {
    	 
    	  // 获取参数
    	 $ob = DB::table('type')->where('pid',$mp)->get();
        // 分类显示
    	 $list = DB::table('type')->where('pid',0)->get();
    	  foreach ($list as $k => $v) {
    	  	$v->f = DB::table('type')->where('pid',$v->id)->get();
    	  	 foreach ($v->f as $key => $val){
    	  	 	$val -> h = DB::table('type')->where('pid',$val->id)->get();
    	  	 }
    	  }

         // dd($list);        

        return view('Home.goods',['list'=> $list]); 
       
    }
}
