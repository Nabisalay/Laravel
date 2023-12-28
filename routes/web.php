<?php
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [studentController::class, 'index']);

Route::get('/about', [studentController::class, 'about']);

Route::get('/register', [studentController::class, 'register']);

Route::post('/register', [studentController::class, 'create']);

Route::get('/view/student', [studentController::class, 'studentView']);