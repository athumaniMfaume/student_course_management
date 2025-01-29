<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.view_student',compact('students'));
    }

    public function create()
    {
        return view('students.add_student');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students',
            'phone' => 'required'
        ]);
        Student::create($request->all());
        return redirect()->route('students.index')->with('success','Student Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit_student',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'sometimes',
            'email' => 'sometimes|email|unique:students,email,' . $student->id,
            'phone' => 'sometimes'
        ]);
        $student->update($request->all());
        return redirect()->route('students.index')->with('success','Student Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $student)
    {
        $student = Student::findOrFail($student);
        $student->delete();
        return redirect()->route('students.index')->with('success','Student Deleted Successfully!');
    }
}
