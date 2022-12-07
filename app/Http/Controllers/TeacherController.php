<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Alert;

class TeacherController extends Controller
{

    public function index()
    {

        $teachers = Teacher::paginate(8);

        return view('backend.teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('backend.teachers.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'teacher_id' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'is_active' => 'required'
        ]);

        $teacher = new Teacher();
        $teacher->teacher_id = $request->teacher_id;
        $teacher->first_name = $request->fname;
        $teacher->last_name = $request->lname;
        $teacher->email = $request->email;
        $teacher->phone = $request->contact;
        $teacher->dob = $request->dob;
        $teacher->gender = $request->gender;
        if ($request->is_active == "on") {
            $teacher->is_active = 1;
        } else {
            $teacher->is_active = 0;
        }

        $teacher->save();

        Alert::success("New Teacher Added successfully!", "New teacher record added successfully!");

        return redirect()->back();
    }

    public function show($id)
    {
        $teacher = Teacher::where('id', $id)->first();
        // dd($student);
        return view('backend.teachers.edit', compact('teacher'));
    }

    public function update($id, Request $request)
    {
        // dd($request->all());

        $request->validate([
            'teacher_id' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'is_active' => 'nullable'
        ]);

        $teacher = Teacher::where('id', $id)->first();

        $teacher->teacher_id = $request->teacher_id;
        $teacher->first_name = $request->fname;
        $teacher->last_name = $request->lname;
        $teacher->email = $request->email;
        $teacher->phone = $request->contact;
        $teacher->dob = $request->dob;
        $teacher->gender = $request->gender;
        if ($request->is_active == "on") {
            $teacher->is_active = 1;
        } else {
            $teacher->is_active = 0;
        }

        $teacher->save();

        Alert::success("Teacher record updated!", "Teacher record updated successfully!");

        return redirect()->back();
    }

    public function destroy($id)
    {

        $teacher = Teacher::where('id', $id)->first();

        $teacher->delete();

        Alert::success("Teacher Record Deleted!", "Teacher record deleted successfully!");

        return redirect()->back();
    }
}
