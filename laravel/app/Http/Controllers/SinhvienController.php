<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Room;

class SinhvienController extends Controller
{
    public function getSV(){
        $students= Student::with('room')->get();
//        dd($students);
        return view('student.index', compact('students'));
    }

    public function listSV(){
        $rooms= Room::all();
        return view('student.add', compact('rooms'));
    }

    public function addSV(Request $request){
        $student= new Student();
        $student->name=$request->name;
        $student->address=$request->address;
        $student->phone=$request->phone;
        $student->room_id=$request->room_id;
        $student->save();

        $rooms= Room::all();

        //return view('student.add', compact('rooms'));
        return redirect('/sv');
    }

    public function editSV($id){
        $student= Student::find($id);

        $rooms= Room::all();
//        dd($student);

        return view('student.edit', compact('student', 'rooms'));
    }

    public function updateSV(Request $request, $id){
        $student= Student::find($id);
        $student->name=$request->name;
        $student->address=$request->address;
        $student->phone=$request->phone;
        $student->room_id=$request->room_id;
        $student->save();
        $rooms= Room::all();

        //return view('student.edit', compact('student', 'rooms'));
        return redirect('/sv');
    }

    public function destroy($id){
        Student::find($id)->delete();
        return redirect('/sv');
    }
}
