<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class RegisterController extends Controller
{
    //
    public function index()
    {
    	return view('Home.register');
    }

    public function register(Request $request)
    {
    	// dd($request->all());
    	$name = $request->input('name');
    	// dd($list);
    	$pass = $request->input('pass');

       $list = DB::table('user1')->where('name',$name)->first();
       if(empty($list)){
       	   $data = $request->except('_token');
       	    $id = DB::table('user1')->insertGetId($data);
       	    if($id>0){
     	    return redirect('/home/login');
     	   }
       }else{
     	  return back()->with('msg','注册失败：用户名已存在');   
       }

    }

}
