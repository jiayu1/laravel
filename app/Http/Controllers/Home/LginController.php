<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class LginController extends Controller
{
    //
    public function index()
    {
    	return view('Home.login');
    }

    public function dologin(Request $request)
    {
    	$pass = $request->input('pass');
    	  // dd($pass);
    	$tel = $request->input('tel');
    	// dd($tel);
    	$list = DB::table('user1')->where('pass',$pass)->first();
    	// dd($list);
    	$data = DB::table('user1')->where('tel',$tel)->first();

    	if($list && $data){
    		// echo '2222';
    		 session(['homeuser'=>$list]);
            return redirect('/home/index');
    	}else{
    		return back()->with('msg','登录失败,用户名不存在,前去注册');
    	}

    }
 }