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

Route::view('/welcome','welcome')->name('home');

Route::get('/user',function(){
    return 'Welcome to Laravel';
});

Route::get('/user1',function(){
    return "<h2>Welcome to Laravel</h2>";
});

Route::get('/user/{name}/{id}',function($name,$id){
    return "Hello ".$name." with Id ".$id;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Route::view('/about','about');
Route::get('/about','PagesController@about')->name('about');
Route::get('/services','PagesController@services')->name('services');

//Route::get('/todos','TodosController@index');
// Route::get('/todos/{todo}', 'TodosController@show');
// Route::get('/todos/delete/{todo}', 'TodosController@delete')->name('todos.delete');
// Route::post('/store-todos', 'TodosController@store')->name('todos.store');
// Route::get('/new-todos', 'TodosController@create')->name('todos.create');
// Route::get('/edit/{todo}','TodosController@edit')->name('todos.edit');
// Route::post('/update/{todo}','TodosController@update')->name('todos.update');

// Route::get('/todos/{todo}/complete', 'TodosController@complete');
// Route::get('/todos/{todo}/not-complete', 'TodosController@not_complete');

Route::group(['middleware' => 'auth'], function(){
    
    Route::get('/todos',[
        'uses' => 'TodosController@index',
        'as' => 'todos'
    ]);
    
    Route::get('/todos/{todo}',[
        'uses' => 'TodosController@show',
        'as' => 'todos.show'
    ]);
    Route::get('/todos/delete/{todo}',[
        'uses' => 'TodosController@delete',
        'as' => 'todos.delete'
    ]);
    
    Route::get('/new-todos',[
        'uses' => 'TodosController@create',
        'as' => 'todos.create'
    ]);
    
    Route::post('/store/todos',[
        'uses' => 'TodosController@store',
        'as' => 'todos.store'
    ]);
    
    Route::get('/edit/{todo}',[
        'uses' => 'TodosController@edit',
        'as' => 'todos.edit'
    ]);
    
    Route::post('/update/{todo}', [
        'uses' => 'TodosController@complete',
        'as' => 'todos.update'
    ]);
    
    Route::get('/todos/{todo}/complete', [
        'uses' => 'TodosController@update',
        'as' => 'todos.complete'
    ]);
    
    Route::get('/todos/{todo}/not-complete', [
        'uses' => 'TodosController@not_complete',
        'as' => 'todos.not_complete'
    ]);

    Route::get('/settings', [
        'uses' => 'SettingsController@index',
        'as' => 'settings'
    ])->middleware('admin');

    Route::post('/settings/update',[
        'uses' => 'SettingsController@update',
        'as' => 'settings.update'
    ])->middleware('admin');


   
});


 

