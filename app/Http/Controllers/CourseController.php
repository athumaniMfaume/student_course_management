<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('courses.view_course',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.add_course');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required',
            'description' => 'required'
        ]);
        Course::create($request->all());
        return redirect()->route('courses.index')->with('success', 'Course Added Successfully');
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
        $course = Course::findOrFail($id);
        return view('courses.edit_course',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'course_name' => 'sometimes',
            'description' => 'sometimes'
        ]);
        $course->update($request->all());
        return redirect()->route('courses.index')->with('success', 'Course Updated Successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Course Deleted Successfully');
    }
}
