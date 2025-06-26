<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class StudentController extends Controller
{
    //

    function create(Request $request){
        $student = new student();
        $student->first_name =  $request->first_name;
        $student->middle_name =  $request->middle_name;
        $student->last_name =  $request->last_name;
        $student->dob =  $request->dob ;
        $student->address =  $request->address;
        $student->city =  $request->city;
        $student->state =  $request->state;
        $student->country =  $request->country;
        $student->zip =  $request->zip;
        $student->email =  $request->email;
        $student->phone =  $request->phone;
        $student->course =  $request->course;
        $student->save();
        if($student){
            return redirect('display');
        }else{
            echo "Student Data not added";
        }   
    }

    function display(){
        $studentData = student::paginate(10);
        return view('display', ['students'=>$studentData]);
    }

    function delete($id){
        echo $isDelete = student::redirect($id);
        if($isDelete){
            return redirect('display'); 
        }
    }

    function update($id){
        $student = student::find($id);
        return view('edit', ['data'=>$student]);
    }

    function updateData(Request $request, $id){
        $student = student::find($id);
        $student->first_name =  $request->first_name;
        $student->middle_name =  $request->middle_name;
        $student->last_name =  $request->last_name;
        $student->dob =  $request->dob ;
        $student->address =  $request->address;
        $student->city =  $request->city;
        $student->state =  $request->state;
        $student->country =  $request->country;
        $student->zip =  $request->zip;
        $student->email =  $request->email;
        $student->phone =  $request->phone;
        $student->course =  $request->course;
        $student->save();
        if($student){
            return redirect('display');
        }else{
            echo "Student Data Not Updated";
        }
    } 

    function search(Request $request){
        $students = student::where('first_name', 'like', "%$request->search%")->
        orWhere('middle_name', 'like', "%$request->search%")->
        orWhere('last_name', 'like', "%$request->search%")->get();
        return view('display', compact('students'));
    }

}
