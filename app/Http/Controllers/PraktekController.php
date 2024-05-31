<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class PraktekController extends Controller
{
    public function index(){
        $student = Student::all();
       // dd($student);
       
  return view('student',compact(['student']));
    }
    public function create(){      
        return view('create_student');
    }
    public function store(Request $request){
        $message =[
            'require' => 'harap di isi',
            'min' => 'karakter harus lebih dari :min',
            'unique' => 'nama sudah terdaftar'
        ];

        $validate = $request->validate([
            'name' => 'required|unique:students',
            'class' => 'required',
            'gender' => 'required'

        ],$message);


        $student = Student::create([
            'name' => $request->name,
            'class' => $request->class,
            'gender' => $request->gender

        ]);
        return redirect('/praktek');
    }
    public function delete($id){
        $delete = Student::findOrfail($id);
        $delete->delete();
        return redirect('/praktek');

    }

    public function edit($id){
        $student = Student::findOrFail($id);
        return view('edit',compact(['student']));
    }

    public function update(Request $request,$id){
        $message =[
            'require' => 'harap di isi',
            'min' => 'karakter harus lebih dari :min',
            'unique' => 'nama sudah terdaftar'
        ];

        $validate = $request->validate([
            'name' => 'required|unique:students',
            'class' => 'required',
            'gender' => 'required'

        ],$message);
        
        $student = Student::findOrFail($id);
        $student->update([
            'name' => $request->name,
            'class' => $request->class,
            'gender' => $request->gender
        ]);
        return redirect('/praktek');

    


    }
}
