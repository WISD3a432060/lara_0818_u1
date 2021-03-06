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
Route::get('/tracy',function (){
   return Exception('故意的錯誤');
});
Route::get('/checkage/{age}',function (){})->middleware(CheckAge::class);
Route::get('/email',['as'=>'email','uses'=>'Controller@email']);

Route::group(['prefix'=>'login/social', 'middleware'=>['guest']],
    function(){
        Route::get('{provider}/redirect',[
            'as' => 'social.redirect',
            'uses' => 'Auth\SocialController@getSocialRedirect'
        ]);
        Route::get('{provider}/callback',[
            'as' => 'social.handle',
            'uses' => 'Auth\SocialController@getSocialCallback'
        ]);
    });
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
