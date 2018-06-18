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

Route::get('index', function () {
    return view('welcome');
});
Route::get('detail-{id}-{alias}',function($ms, $alias){
    ///return 1;
    echo $ms;
    echo $alias;
})->where([
    'id' => '[0-9]+',
    'alias' => '[a-z]+'
]);

Route::get('news/{id}',function($id){
    echo $id;
})->name('news');

Route::get('list-product/{page?}',function($page=1){
    //echo 23232;
    echo $page;
})->where('page','[0-9]+')
->name('list-product');

Route::get('call-route',function(){
    //return redirect()->route('list-product');

    return redirect()->route('news',['id'=>121]);

    //return redirect('/news/121');
});

Route::group(['prefix'=>'admin'],function(){

    // admin/index
    Route::get('index',function (){
        return 1;
    });

    Route::get('detail',function (){
        return 1;
    });
});