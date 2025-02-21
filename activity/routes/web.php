<?php
use App\Models\Student;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



use App\Http\Controllers\StudentsController;
Route::get('/viewList', [StudentsController::class, 'index']);

Route::get('/viewList', function(){
    $students = Student::all();
    return view('viewList.data', compact('students'));
});
