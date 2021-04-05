<?php

use App\Http\Controllers\Controller;
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

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/poste',function(){
   
    $p = \App\Model\poste::all();
   // return view('welcome')->with('postes',$p);
    //return view('welcome')->withpostes($p);
    return view('poste',['postes'=>$p]);
});*/
Route:: get('/poste','posteController@index') ;

/*Route::get('/, function () {
    return ('welcome');
});*/
