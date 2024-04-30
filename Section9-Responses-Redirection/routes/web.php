<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Http\Request;
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

//Route::get('/', function () {
//    return view('welcome');
//})->name('home');

//Route::get('/login', function (){
//    return redirect()->route('home');
//});
//
//Route::get('/data', function (Request $request){
//
//    return $request->query('id');
//})->name('data');
//
//Route::get('/dashboard.blade.php', function (){
//    return redirect()->route('data', ['id' => 2]);
//});




//Route::get('/', function () {
////    return view('welcome');
//
//    return redirect()->action([DashboardController::class, 'index'], ['id' => 1]);
//
//});
//
//Route::get('/dashboard.blade.php', [DashboardController::class, 'index']);
//
//Route::get('/external', function (){
//    return redirect()->away('https://github.com/sabski03');
//});





//Route::get('/', function (){
//    return redirect('dashboard.blade.php')->with('users','saba');
//});
//
//Route::get('/dashboard.blade.php', [DashboardController::class, 'show']);




Route::get('/', function (){
    return view('welcome');
});

Route::get('/json', function (){
    return response()->json([
        'name' => 'saba',
        'role' => 'admin',
        'age' => 23,
    ]);
});
