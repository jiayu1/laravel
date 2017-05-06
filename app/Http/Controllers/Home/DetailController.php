<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;

class DetailController extends Controller
{
    //
    public function show($id)
    {
    	$ob = DB::table('goods')->where('id',$id)->get();
    	
    	return view('Home.detail',['ob'=>$ob]);
    }

    //加载页面,显示当期用户购物车里的信息
    public function showorder()
    {
    	 $id = session('homeuser')->id;
          // dd($id);
    	$list = DB::table('cart')->where('uid',$id)->get();
         // dd($list);
    	return view('Home.pay', ['list'=>$list]);
    }

    public function address(Request $rquest)
    {

    }

    //显示地址中的 省
    public function sheng()
    {	
        
    	
    	$list = DB::table('district')->where('upid',0)->get();
       

        echo json_encode($list);
    	
    }

    public function shiqu(Request $request)
    {
        // var_dump($request->all());die;
        $id = $request->input('upid');
        $list = DB::table('district')->where('upid',$id)->get();
        echo json_encode($list);
        // echo 1;

    }

    public function insert(Request $request)
    {
         // dd($request->all());
        $list = $request->input('city1');
         // dd($list);
        $data = [];
        $data['Address_uid'] = session('homeuser')->id;
        $data['provice'] =DB::table('district')->where('id',$list['0'])->first()->name; 
          // dd($data['provice']);
        $data['county'] =DB::table('district')->where('id',$list['1'])->first()->name;
           // dd($data['county']); 
        $data['city'] = DB::table('district')->where('id',$list['2'])->first()->name;
        $data['phone'] = $request->input('phone');
        // $data['jiedao'] = DB::table('district')->where('upid',$list['3'])->first()->name;
        $data['detail'] = $request->input('detail');
        $data['ad_name'] = $request->input('ad_name');
          // dd($data['ad_name']);
        // dd($data);
        $id = DB::table('store_address')->insertGetId($data);
         if($id>0){
            return redirect('/home/order/');
         }else{
            return back();
         }
         // dd($a);
         // foreach($list as $v)
         // {
         //    dd($v); 
         // }
    }
    public function index(Request $request)
    {
        // $ob = session('homeuser')->id;

        $data = DB::table('store_address')->where('Address_uid',$request->input('pid'))->get();
        echo json_encode($data);
    }

    public function delete($id)
    {
        // dd($id);
        $row = DB::table('store_address')->where('Address_uid',$id)->delete();
        if($row>0){
            return redirect('/home/order/');
        }
    }


}
