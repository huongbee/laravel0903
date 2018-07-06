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

// Route::get('index', function () {
//     return view('welcome');
// });
// Route::get('detail-{id}-{alias}',function($ms, $alias){
//     ///return 1;
//     echo $ms;
//     echo $alias;
// })->where([
//     'id' => '[0-9]+',
//     'alias' => '[a-z]+'
// ]);

// Route::get('news/{id}',function($id){
//     echo $id;
// })->name('news');

// Route::get('list-product/{page?}',function($page=1){
//     //echo 23232;
//     echo $page;
// })->where('page','[0-9]+')
// ->name('list-product');

// Route::get('call-route',function(){
//     //return redirect()->route('list-product');

//     return redirect()->route('news',['id'=>121]);

//     //return redirect('/news/121');
// });

// Route::group(['prefix'=>'admin'],function(){

//     // admin/index
//     Route::get('index',function (){
//         return 1;
//     });

//     Route::get('detail',function (){
//         return 1;
//     });

// });

Route::get('index/{id}',"HomeController@getHomePage");

Route::get('welcome',"HomeController@getWelcomePage");

//Route::any('register',"HomeController@getRegister");
//Route::match(['get','post'],'register',"HomeController@getRegister");

Route::get('register',"HomeController@getRegister")->name('register');
Route::post('register',"HomeController@postRegister")->name('postregister');

Route::get('upload',"HomeController@getFormUpload")->name('uploadfile');
Route::post('upload',"HomeController@postFormUpload")->name('uploadfile');


Route::get('about','HomeController@getAbout');
Route::get('detail','HomeController@getDetail');

Route::get('schema',function(){
    // Schema::create('products',function($table){
    //     //id / name / price /description
    //     $table->increments('id');
    //     $table->string('name', 50);
    //     $table->text('description');
    //     $table->float('price');
    //     $table->timestamps();
    // });

    //type : id, name, image, timestamps
    // Schema::create('type',function($table){
    //     $table->increments('id');
    //     $table->string('name', 50);
    //     $table->string('image');
    //     $table->timestamps();
    // });

    // Schema::table('products',function($table){
    //     $table->integer('id_type')->unsigned()->after('id');
    // });
    // Schema::table('products',function($table){
    //     $table->foreign('id_type')->references('id')->on('type');
    //});


    //description -> detail
    Schema::table('products',function($table){
        $table->renameColumn('description','detail');
    });

    echo "success";
});


Route::get('query-builder',"QueryBuilder@index");
Route::get('eloquent',"Eloquent@index");

Route::get("relation","Eloquent@index02");
