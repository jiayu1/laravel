<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
// use Intervention\Admin\Image\ImageManagerStatic as Image;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $where = '';

        $ob = DB::table('goods')
            ->join('type', 'goods.type', '=', 'type.id')
            ->select('goods.*', 'type.name');
            // ->get();
            // dd($ob);
          //保存搜索条件
        // $where = '';
        // //实例化操作表
        // $ob = DB::table('goods');

        
        if($request->has('g_name')){
            //获取搜索的条件
            $name = $request->input('g_name');
            //添加到将要携带到分页中的数组中
            $where['g_name'] = $name;
            //给查询添加where条件
            $ob->where('g_name','like',"%{$name}%");
        }
        //执行分页查询
        $list = $ob->paginate(5);
        // dd($ob);
        return view('Admin.Goods.index',['list'=>$list,'where'=>$where]);
                        

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ob = DB::table('type')->get();
        // dd($ob);
        return view('Admin.Goods.add',['ob'=>$ob]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        ////判断是否有文件上传
        if($request->hasFile('mypic')){
            // 判断上传的文件是否有效
            if($request->file('mypic')->isValid()){
                // 获取上传的文件对象
                $data = $request->file('mypic');
                // dd($data);
                // 获取上传的文件的后缀
                $ext = $data->getClientOriginalExtension();
                // 拼装出你需要使用的文件名
                $picname = time().rand(1000,9999).'.'.$ext;
                // 移动临时文件，生成新文件到指定目录下
                $data->move('./admin/upload',$picname);
                if($data->getError()>0){
                    echo '上传失败';
                }else{
                    echo '上传成功';
                    echo "<img src='./admin/upload/{$picname}' width='200' height='200'>";
                }
            }
        }

        // 1.使用自定义类进行图片缩放
        //   use App\Org\Image;
        // $img = new Image();
        // $img->open('./admin/upload/'.$picname);
        // $img->thumb(100,100)->save('./admin/upload/s_'.$picname);
       

           



         
         $message = [
              'name.required' => '商品名必须填写',
         ];

          $this->validate($request, [
          'g_name' => 'required|max:20',
         ],$message);
        $data = $request->except('_token');
        $data['mypic'] = $picname;//少这行代码
        $id = DB::table('goods')->insertGetId($data);
        if($id>0){
            return redirect('admin/goods')->with('msg','添加成功');
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
        $data = DB::table('goods')->where('id',$id)->first();
        return view('Admin.Goods.edit',['ob'=>$data]);
    }
    /*
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->except('_token','_method');
        // dd($data);
        $row = DB::table('goods')->where('id',$id)->update($data); 
        // dd($row); 
        if($row>0){
        return redirect('admin/goods')->with('msg','修改成功');
      }else{
        return redirect('admin/goods')->with('error','修改失败');
      }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $row = DB::table('goods')->where('id',$id)->delete();


        if($row>0){
            return redirect('admin/goods')->with('msg','删除成功'); 
        }else{
            return redirect('admin/goods')->with('error','删除失败');
        }

    }
}
