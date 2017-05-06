<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Gregwar\Captcha\CaptchaBuilder;

use DB;

class LoginController extends Controller
{
    //
    public function index()
    {
    	return view('Admin.login');
    }

    public function dologin(Request $request)
    {
      // dd($request->all());
        //获取session中的验证码内容
        $mycode = session('mycode');

        // 判断用户输入的验证码和session中的内容是否一致
        if($mycode != $request->input('mycode')){
            return back()->with('msg','登录失败：验证码不正确');
        }
        $name = $request->input('admin_name');

           
          $ob = DB::table('store_admin')->where('admin_name',$name)->first();
          // dd($ob);
          $pass = $request->input('Admin_pass');
          // dd($pass);
          $list = DB::table('store_admin')->where('Admin_pass',$pass)->first();
          // dd($list);
          if($ob && $list){
               // echo '111';
              // if($request->input('Admin_pass')== $ob->Admin_pass){
                    session(['adminuser'=>$ob]);
                    // dd(session(['adminuser'=>$ob]));
                   return redirect('/admin/demo4');
              }else{
                 return back()->with('msg','登录失败：用户名或密码不正确');   
              }
          // }else{
          //     return back()->with('msg','登录失败：用户名或密码不正确');
          // }
       
     

    }

    public function captch($tmp)
    {
        //生成验证码图片的builder对象，
        $builder = new CaptchaBuilder;
        // 设置验证码的宽高字体
        $builder->build(200,44,null);
        //获取验证码中的内容
        $data = $builder->getPhrase();
        //把验证码的内容闪存到session里面
        session()->flash('mycode',$data);

        //告诉浏览器，这是一张图片
        // header('content-type:image/jpeg');
        //生成图片
        // $builder->output();die;

        return response($builder->output())->header('Content-type','image/jpeg');

    }
}
