<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('viewList.data', compact('students'));
    }

    public function createStudent( Request $request)
    {  
        $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|numeric',
            'age' => 'required|max:5'
        ]);

        $addNew = new Student();
        $addNew->name = $request->name;
        $addNew->email = $request->email;
        $addNew->age = $request->age;
        $addNew->save();

        return back();
    }  

}