<?php
use App\Http\Controllers\LangController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\web\CatController;
use App\Http\Controllers\web\ContactController;
use App\Http\Controllers\web\ExamController;
use App\Http\Controllers\web\HomeController;
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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::middleware('lang','auth')->group(function(){
    Route::get('/',[HomeController::class,'index']);
    Route::get('/categories/show/{id}',[CatController::class,'show']);

    Route::get('/skill/show/{id}',[CatController::class,'show']);

    Route::get('/exams/show/{id}',[ExamController::class,'show']);
    Route::get('/exams/questions/{id}',[ExamController::class,'show_Question']);


    Route::get('/contact',[ContactController::class,'index']);
    Route::post('/contact/massege/send',[ContactController::class,'send']);


});



Route::get('set/lang/{lang}',[LangController::class,'set_lang']);
