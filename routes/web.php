<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\TestMongo;
use App\Models\TestMySQL;


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


Route::get('/test', function () {
    //Ok
    // $res = DB::connection('mongodb');


    $res = TestMongo::all();
    // $res = DB::connection('mongodb')->collection('test001');
    // ->all();  //查询所有数据
    dd($res);
});


Route::get('/test2', function () {
   


    $res = TestMySQL::count();

    dd($res);
});
