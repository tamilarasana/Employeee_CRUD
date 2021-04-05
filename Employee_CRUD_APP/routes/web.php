<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DataController;



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


// Route::get('add-employee',[EmployeeController::class, 'addEmployee']);
Route::get('employee',[EmployeeController::class, 'index']);



Route::get('view',[StudentController::class, 'index']);
Route::get('view/data',[StudentController::class, 'get_dataable']);

// Route::get('views',[EmployeeController::class, 'getAddEditRemoveColumnData']); 

Route::post('/data/user','DataController@getUser')->name('dataprocessing');
Route::get('edit',[App\Http\Controllers\DataController::class, 'destroy'])->name('edit');
