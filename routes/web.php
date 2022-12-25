<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\TypeQuestionController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::prefix("manangement")->middleware("auth")->group(function (){
    Route::get("/",[MenuController::class, 'management'])->name('management.index');

    Route::prefix("user")->controller(UserController::class)->group(function (){
        Route::get("/", 'index')->name("manangement.user.index");
        Route::post("/{user}", 'store')->name("manangement.user.store");
        Route::put("/{user}", 'update')->name("manangement.user.update");
    });
});


Route::get('/test', function (){
    return Inertia::render('MyPage');
});

Route::prefix('typeQuestion')->middleware('auth')
->controller(TypeQuestionController::class) ->group(function () {
    Route::get('/','index')->name('typequestion.index');
    Route::post('/store','store')->name('typequestion.store');
    Route::put('/{TypeQuestion}','update')->name('typequestion.update');
    Route::delete('/{TypeQuestion}','delete')->name('typequestion.delete');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
