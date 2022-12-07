<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Alert;

class StudentController extends Controller
{

    public function index()
    {

        $students = Student::paginate(8);

        return view('backend.students.index', compact('students'));

    }

    public function create()
    {
        return view('backend.students.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'student_id' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'dob' => 'required',
            'gender' => 'required'
        ]);

        $student = Student::create([
            'student_id' => $request->student_id,
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'email' => $request->email,
            'dob' => $request->dob,
            'gender' => $request->gender,
        ]);

        Alert::success("New Student Added successfully!", "New student record added successfully!");

        return redirect()->back();

    }

    public function show($id)
    {
        $student = Student::where('id', $id)->first();
        // dd($student);
        return view('backend.students.edit', compact('student'));

    }

    public function update($id, Request $request)
    {
        // dd($request->all());
        $request->validate([
            'student_id' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'dob' => 'required',
            'gender' => 'required'
        ]);

        $student = Student::where('id', $id)->first();

        $student->student_id = $request->student_id;
        $student->first_name = $request->fname;
        $student->last_name = $request->lname;
        $student->email = $request->email;
        $student->dob = $request->dob;
        $student->gender = $request->gender;

        $student->save();

        Alert::success("Student record updated!", "Student record updated successfully!");

        return redirect()->back();

    }

    public function destroy($id)
    {

        $student = Student::where('id', $id)->first();

        $student->delete();

        Alert::success("Student Record Deleted!", "Student record deleted successfully!");

        return redirect()->back();

    }

}
