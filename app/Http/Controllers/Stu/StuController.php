<?php

namespace App\Http\Controllers\Stu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class StuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $list = DB::select('select * from user');
    	  $list = DB::table('user1')->get();
       // var_dump($list); 
       return view('Stu.index',['list' => $list]);
       // var_dump($list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Stu.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	// var_dump($_POST);
       $data = $request->except('_token');
       $res=DB::table('user1')->insertGetId($data);
     // dd($res);
       if($res > 0){
            return redirect('/stu')->with('info', '添加成功!');
        }else{
            return redirect('/stu/create')->with('info', '添加失败！');  
        }
      
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
        $row = DB::table('user1')->where('id','=',$id)->first();

        return view('Stu.edit',['ob'=>$row]);   
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
        $data = $request->only('name','age','sex','pass','tel');
        dd($data);

        // $row = DB::table('user1')->where('id',$id)->update($data);
        // if($row > 0){
        //     return redirect('/stu')->with('info', '修改成功!');
        // }else{
        //     return redirect("/stu/{$id}/edit")->with('info', '修改失败！');
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = DB::table('user1')->where('id',$id)->delete();
        if($row > 0){
           return redirect('/stu')->with('info', '删除成功!');
        }else{
          return redirect('/stu')->with('info', '删除失败!');
        }
    }
}
