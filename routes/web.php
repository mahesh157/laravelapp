<?php

use App\Http\Controllers\SingleActionController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DemoController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegController;
use App\Models\Employee;
use Illuminate\Http\Request;

Route::get('/about',[DemoController::class,'about']);
Route::get('/index',[DemoController::class,'index']);

Route::get('/Signin',[RegController::class ,'Signin']);
Route::POST('/Signin',[RegController::class,'view'])->name('employee.create');
Route::get('/register/delete/{id}',[RegController::class,'delete'])->name('employee.delete');
Route::get('/register/restore/{id}',[RegController::class,'restore'])->name('employee.restore');
Route::get('/register/edit/{id}',[RegController::class,'edit'])->name('employee.edit');
Route::post('/register/update/{id}',[RegController::class,'update'])->name('employee.update');
Route::POST('/register',[RegController::class,'register']);
Route::get('/register/view',[RegController::class,'view']);
Route::get('/register/trash',[RegController::class,'trash'])->name('employee.trash');



//Route::get('/index',SingleActionController::class);
//Route::resource('photo',PhotoController::class);
Route::get('get-all-session',function(){
    $session =session()->all();
    p($session);
});

Route::get('set-session', function(Request $request) {
    $request->session()->put('name', 'Mahesh');
    $request->session()->put('id', '123');
    $request->session()->flash('status', 'success');
    return redirect('get-all-session');
});

Route::get('destroy-session',function(){
    session()->forget(['name','id']);
   // session()->forget('id');
    return redirect('get-all-session');

});




