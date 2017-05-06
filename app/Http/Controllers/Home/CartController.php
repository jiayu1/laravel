<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use Session;

class CartController extends Controller
{
    //
    public function add(Request $request)
    {
    	  
    	$list = $request->except('_token');
    	
    	$list['uid'] = session('homeuser')->id ;
    	
    	 // dd($list);
    	 $id = DB::table('cart')->insertGetId($list);

    	 if($id)
    	 {
    	 	return redirect('/home/cart/index/'.$list['uid']);
    	 }else{
    	 	return back();
    	 }
  
    }

    public function show($uid)
    {
    	// dd($uid);
    	$data = DB::table('cart')->where('uid',$uid)->get();
    	return view('Home.cart',['data'=>$data]);
    }

    public function delete($id)
    {
    	
    	$row = DB::table('cart')->where('id',$id)->delete();
    	$list['uid'] = session('homeuser')->id;

    	if($row>0){
    		return redirect('/home/cart/index/'.$list['uid']);
    	}
    }
}
 // void(0)