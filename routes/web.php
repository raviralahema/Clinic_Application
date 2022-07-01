<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UploadController;

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

Route::get('/example', function ()  
 {      
return "Hello javaTpoint";  
});  

/*** rewuired parameters ***/
    Route::get('/post/{id}', function($id)  
    {  
      return "id number is : ". $id;   
    }  
    );  
	
	Route::get('/post/{id}/{name}', function($id,$name)  
{  
  return "id number is : ". $id ." ".$name;   
}  
);  
/*** rewuired parameters ***/
/*** optional parameters ***/
    Route::get('user/{name?}', function ($name=null) {  
        return $name;  
    });  
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\PatientController::class, 'index'])->name('home');
Route::get('/create', [App\Http\Controllers\PatientController::class, 'create'])->name('home');
Route::post('/store', [App\Http\Controllers\PatientController::class, 'store'])->name('home');

Route::get('/edit/{id}', [App\Http\Controllers\PatientController::class, 'edit'])->name('home');

Route::post('/update/{id}', [App\Http\Controllers\PatientController::class, 'update'])->name('home');

Route::get('/show/{id}', [App\Http\Controllers\PatientController::class, 'show'])->name('home');
Route::get('/destroy/{id}', [App\Http\Controllers\PatientController::class, 'destroy'])->name('delete_category');

Route::get('/search', [App\Http\Controllers\PatientController::class, 'search'])->name('home');

Route::get('/search_date', [App\Http\Controllers\PatientController::class, 'search_date'])->name('home');
