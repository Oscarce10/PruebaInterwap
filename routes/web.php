<?php
namespace App\Http\Controllers;
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
    return view('inicio');
})->name("/");

Route::post('upload-file',[Controller::class, "store"])->name("upload-file");
Route::get('show-users', [Controller::class, "index"])->name("show-users");
Route::get('user-del/{id}', [Controller::class, "destroy"])->name("user-del");
Route::get('user-edit/{id}', [Controller::class, "edit"])->name("user-edit");
Route::post('user-update', [Controller::class, "update"])->name("user-update");
