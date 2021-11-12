<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $students = DB::table('students')->get();
        return view('student.index', compact('students'));
    }
    public function create()
    {
        return view('student.create');
    }
    public function store(Request $request)
    {
        $student = [];
        $student['name'] = $request->name;
        $student['email'] = $request->email;
        $student['class'] = $request->class;
        $student['subject'] = $request->subject;
        $student['course_time'] = $request->courses_time;
        $student['student_bio'] = $request->bio;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ext = $image->extension();
            $file = time().'.'.$ext;
            $image->storeAs('public/student', $file);
            $student['image']=$file;
        }

        DB::table('students')->insert($student);
        return redirect('/');
    }

    public function edit($id)
    {
        $student =  DB::table('students')->where('id', $id)->first();
        return view('student.edit', compact('student'));
    }
    public function update(Request $request,$id)
    {
        $student = [];
        $student['name'] = $request->name;
        $student['email'] = $request->email;
        $student['class'] = $request->class;
        $student['subject'] = $request->subject;
        $student['course_time'] = $request->courses_time;
        $student['student_bio'] = $request->bio;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ext = $image->extension();
            $file = time().'.'.$ext;
            $image->storeAs('public/student', $file);
            $student['image']=$file;
        }

        DB::table('students')->where('id', $id)->update($student);
        return redirect('/');
    }


    public function destroy(Request $request, $id)
    {
        DB::table('students')->where('id', $id)->delete();
        return back();
    }
}
