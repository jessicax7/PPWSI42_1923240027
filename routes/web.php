<?php

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

//mengirim data ke view
Route::get("/hello", function(){
    //echo "Hello";
    //return view('hello');
    //return view('hello', ['nama' => 'Jessica']);
    $data = ['nama' => 'Jessica' , 'npm' => '1923240027'];
    return view("hello, $data");
    
});

//menerima data/parameter dan menampilkannya di view
Route::get("/kenalan/{nama}/{npm}", function($nama, $npm){
    $data = ['nama' => $nama , 'npm' => $npm];
    return view("hello", $data);
});

//Route::get('/mahasiswa/insert',[MahasiswaController::class,'insert']);
//Route::get('/mahasiswa/update',[MahasiswaController::class,'update']);
//Route::get('/mahasiswa/delete',[MahasiswaController::class,'delete']);
//Route::get('/mahasiswa/select',[MahasiswaController::class,'select']);

//Route::get('/mahasiswa/insert-qb',[MahasiswaController::class,'insertQb']);
//Route::get('/mahasiswa/update-qb',[MahasiswaController::class,'updateQb']);
//Route::get('/mahasiswa/delete-qb',[MahasiswaController::class,'deleteQb']);
//Route::get('/mahasiswa/select-qb',[MahasiswaController::class,'selectQb']);

Route::get('/mahasiswa/insert-elq',[MahasiswaController::class,'insertElq']);
Route::get('/mahasiswa/update-elq',[MahasiswaController::class,'updateElq']);
Route::get('/mahasiswa/delete-elq',[MahasiswaController::class,'deleteElq']);
Route::get('/mahasiswa/select-elq',[MahasiswaController::class,'selectElq']);