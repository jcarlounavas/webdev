<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\AuthChecker;
use App\Models\Student;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('/Authentication/registration');
});

//For Log In Page
Route::get('/login_page', function(){
    return view('/Authentication/login');
});

//For Register Page
Route::get('/register_page', [AuthenticatedSessionController::class, 'indexNewUser']) -> name('Authentication.register');
Route::post('/registered-user', [AuthenticatedSessionController::class, 'newUser']) -> name('AuthenticatedSessionController.newUser');

//Auth



Route::get('/viewList', function(){
    $students = Student::all();

    return view('viewList.showList', compact('students'));
});
Route::get('/create', function(){
    return view('addStudent');
});

Route::post('/create', action: function(){

    Student::create([
        'name' => request(key: 'name'),
        'email' => request(key: 'email'),
        'age' => request(key: 'age')
    ]);
    
 /*   $student = new Student();
    $student->name = request(key: 'name');
    $student->email = request(key: 'email');
    $student->age = request(key: 'age');
    $student->save();
*/
    
    return redirect('/viewList');

});

Route::get('/edit/{id}', function($id){
    $student = Student::find($id);
    return view('editStudent', compact('student'));
});

Route::post('/edit/{id}', function($id){
    $student = Student::find($id);
    $student->update([
        'name' => request('name'),
        'email' => request('email'),
        'age' => request('age')
    ]);
    return redirect('/viewList');
});
Route::get('/delete/{id}', function($id){
    $student = Student::find($id);
    $student->delete();
    return redirect('/viewList');
});