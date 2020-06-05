<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
// 認証機能
Auth::routes();
// ログインしていないとできない
Route::group(['middleware' => 'auth'], function () {

  Route::get('/', 'HomeController@index')->name('home');
  //新規フォルダ追加
  Route::get('/folders/create', 'FolderController@showCreateForm')->name('folders.create');
  Route::post('/folders/create', 'FolderController@create');

  //*閲覧権限のミドルウェア
  Route::group(['middleware' => 'can:view,folder'], function () {
    //ルートモデルバインディングのためfolderに変更
    Route::get('/folders/{folder}/tasks', 'TaskController@index')->name('tasks.index');
    // 新規タスク追加
    Route::get('/folders/{folder}/tasks/create', 'TaskController@showCreateForm')->name('tasks.create');
    Route::post('/folders/{folder}/tasks/create', 'TaskController@create');
    // タスク編集
    Route::get('/folders/{folder}/tasks/{task}', 'TaskController@showEditForm')->name('tasks.edit');
    Route::post('/folders/{folder}/tasks/{task}', 'TaskController@edit')->name('tasks.edit');
  });
});
