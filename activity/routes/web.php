<?php
use App\Models\Student;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});





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