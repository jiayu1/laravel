<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class GoodsController extends Controller
{
    //
    public function index(Request $request)
    {
    	// $list = DB::table('type')->where('pid',0)->get();
    	  // dd($request->all());

    	// if(id == 1)
    	$list = DB::select('select * from type order by concat(path,",",id)');

    	// dd($list);
    	// $ob = DB::table('type')->where('path',0,1)->get();
    	 // dd($ob);
        return view('Home.goods',['list' => $list]);
    }
}
