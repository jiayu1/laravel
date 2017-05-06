<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/stu','Stu\StuController');

// 请求
Route::get('/demo1','DemoController@request');
//响应
Route::get('/demo2','DemoController@response');

// //后台首页
// Route::resource('/demo3','Admin\AdminController');
// // 用户管理
// Route::resource('/demo4','User\UserController');

// 文件上传
Route::get('/upload','upload\UploadController@index');
Route::post('/doupload','upload\UploadController@doupload');
// 后台路由群组
Route::group(['prefix' => 'admin','middleware' => 'login'],function(){

	//后台首页
   Route::resource('/admins','Admin\AdminController');
   // 用户管理
    Route::resource('/demo4','User\UserController');
    // 分类管理
    Route::resource('/type','Admin\TypeController');

    Route::get('/typeSon/{id}','Admin\TypeController@createSon');

    Route::post('/typeSon','Admin\TypeController@storeSon');

    // 商品管理
    Route::resource('/goods','Admin\GoodsController');
    // 订单管理
    Route::resource('/order','Admin\OrderController');

   
});
// 登录
Route::get('admin/login','Admin\LoginController@index');
Route::post('admin/dologin','Admin\LoginController@dologin');

// 验证码
Route::get('Admin/captch/{tmp}','Admin\LoginController@captch');




// 前台路由群组
Route::group(['prefix' => 'home','middleware' => 'home'],function(){
     
    // 购买商品
    Route::get('/order','Home\DetailController@showorder');
    Route::get('/firmorder','Home\DetailController@show');
    Route::post('/firmorder','Home\DetailController@insert');
    Route::get('/province','Home\DetailController@sheng');
    // Route::get('/city','Home\DetailController@shengshi');
    Route::get('/county','Home\DetailController@shiqu');
    Route::post('/address','Home\DetailController@insert');
    Route::get('/qingqiu','Home\DetailController@index');
    Route::any('/dolick/{id}','Home\DetailController@delete');

    // 加入购物
    Route::any('/cart','Home\CartController@add');
    //加载购物车页面
    Route::get('/cart/index/{uid}','Home\CartController@show');

    Route::any('/delete/{id}','Home\CartController@delete');
    

});
// 展示主页
 Route::get('home/index','Home\IndexController@index');
    // Route::get('/goods','Home\IndexController@show');
    Route::get('home/fl/{id}','Home\IndexController@show');
   // 商品详情
    Route::get('home/detail/{id}','Home\DetailController@show');
// 前台注册
Route::get('home/register','Home\RegisterController@index');
Route::post('home/submit','Home\RegisterController@register');

Route::get('home/login','Home\LginController@index');
Route::post('home/dologin','Home\LginController@dologin');
// Route::post('home/submit','Home\RegisterController@submit');
