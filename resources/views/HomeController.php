<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //前台显示
        return view('home.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //友情链接部分
        $ob = DB::table('flink')->get();
        // 轮播图部分
        $lb = DB::table('album')->get();
        // 分类显示
        $fl = DB::table('type')->where('upid',0)->get();
        foreach ($fl as $k => $v) {
           $v->f = DB::table('type')->where('upid',$v->id)->get();
           foreach($v->f as $key=>$val){
            $val->h = DB::table('type')->where('upid',$val->id)->get();
           }
        }
        // 公告部分显示
        $gg = DB::table('notice')->get();
        // 商品管理部分
        $sp = DB::table('type')
        ->join('detail', 'type.id', '=', 'detail.cid')
        ->select('detail.*', 'type.*')
        ->get();
        // dd($sp);
        // dd($fl);
        // dd($gg);
        // 显示
       return view('home.index',['ob' => $ob,'lb' => $lb,'fl' => $fl,'gg' => $gg, 'sp'=>$sp]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //轮播图部分
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function lb(Request $request)
    {
        //轮播部分
    // dd(111111);
     
    }
}
