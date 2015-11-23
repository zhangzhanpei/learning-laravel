<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    // $this->app['My']->sayHello(); //使用自定义服务
    // \Session::put('account', 'admin');
    \My::sayHello(); //为自定义服务创建别名
});

Route::get('/sayHello', 'Test@sayHello');

//这里使用中间件对请求进行判断处理
Route::group(['middleware' => 'isLogin'], function(){
    Route::get('/profile', function(){
        echo '已登陆';
    });
});
