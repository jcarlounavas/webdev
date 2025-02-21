<?php
use App\Models\Student;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});





Route::get('/viewList', function(){
    $students = [
        ["name" => "John Doe", "email" => "navs@", "id" => "0"],
        ["name" => "John Does", "email" => "navas@", "id" => "1"],
        ];
    return view('viewList.showList', compact('students'));
});
