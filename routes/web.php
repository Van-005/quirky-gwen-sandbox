<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SchoolRoomTypeController;
use App\Http\Controllers\SchoolRoomController;
use App\Http\Controllers\StudentController;
// подсказка: use App\Http\Controllers\SchoolRoomController
use App\Models\Publication;
use App\Models\SchoolRoom;
use App\Models\SchoolRoomType;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

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

Route::get('/', function () {
 return redirect('schools'); 
})->middleware('auth')->name('main');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('schools', SchoolController::class);
    Route::resource('room-types', SchoolRoomTypeController::class);
    Route::resource('school-rooms', SchoolRoomController::class);
    Route::resource('students', StudentController::class);
//SchoolRoomController - подчеркнут смотрите строку №7
 //я про это и говорил 
    
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
