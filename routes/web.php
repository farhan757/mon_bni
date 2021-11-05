<?php

//use Illuminate\Support\Facades\Route;

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



Auth::routes();

Route::middleware(['auth:web'])->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/', function () {
        return redirect()->route('home');
    });

    Route::group(['prefix' => 'master'], function(){
        Route::get('/user', [App\Http\Controllers\Master\UserController::class, 'index'])->name('user');
        Route::get('/group', [App\Http\Controllers\Master\GroupController::class, 'index'])->name('group');
        Route::get('/project', [App\Http\Controllers\Master\ProjectController::class, 'index'])->name('project');
        Route::get('/material', [App\Http\Controllers\Master\MaterialController::class, 'index'])->name('material');
    });

    Route::group(['prefix' => 'production'], function(){
        Route::get('/joblist', [App\Http\Controllers\Production\JobController::class, 'index'])->name('joblist');
        Route::get('/approval', [App\Http\Controllers\Production\ApprovalController::class, 'index'])->name('approval');
        Route::get('/printing', [App\Http\Controllers\Production\PrintingController::class, 'index'])->name('printing');
        Route::get('/qcbalancing', [App\Http\Controllers\Production\QCBalController::class, 'index'])->name('qcbalancing');
        Route::get('/distribusi', [App\Http\Controllers\Production\DistriController::class, 'index'])->name('distribusi');
    });

    Route::group(['prefix' => 'report'], function(){
        Route::get('/summary', [App\Http\Controllers\Report\SummaryController::class, 'index'])->name('summary');
        Route::get('/detail', [App\Http\Controllers\Report\DetailController::class, 'index'])->name('detail');
    });
});

