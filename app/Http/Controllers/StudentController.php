<?php

namespace App\Http\Controllers;
use Session;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student=Student::all();
        return view('Student.index',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $userData=new User();
       $userData->name=$request->name;
       $userData->phone=$request->phone;
       $userData->email=$request->email;
       $userData->save();
       Session::flash('success','Student Created Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student,$id)
    {
        $student=Student::find($id);
        return view('Student.Edit.editStudent', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student,$id)
    {
        $student=Student::find($id);
        $student->name=$request->name;
        $student->phone=$request->phone;
        $student->email=$request->email;
        $student->save();
        Session::flash('success','Student Update Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student,$id)
    {
        // dd($id);
        $student=Student::find($id);
        $student->delete();
        Session::flash('success','Student Delete Successfully');
        return redirect()->back();
    }
}
