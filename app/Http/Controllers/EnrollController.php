<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enroll;
use App\Models\Student;
use Illuminate\Http\Request;

class EnrollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::with('students')->get();
        return view('enrollments.view_enroll',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::all();
        $students = Student::all();
        return view('enrollments.add_enroll',compact('courses','students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $request->validate([
        'student_ids' => 'required|array',
        'student_ids.*' => 'exists:students,id',
        'course_id' => 'required|exists:courses,id'
    ]);

    $course = Course::findOrFail($request->course_id);
    $course->students()->attach($request->student_ids);

    return redirect()->back()->with('success', 'Students assigned successfully!');
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
        $students = Student::all(); // Get all students
        $selectedStudents = $course->students->pluck('id')->toArray(); // Get currently assigned students
    
        return view('enrollments.edit_enroll', compact('course', 'students', 'selectedStudents'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'student_ids' => 'required|array',
            'student_ids.*' => 'exists:students,id',
        ]);
    
        $course = Course::findOrFail($id);
        $course->students()->sync($request->student_ids); // Sync removes old and adds new
    
        return redirect()->route('enroll.index')->with('success', 'Students updated successfully!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($course_id, $student_id)
    {
    $course = Course::findOrFail($course_id);
    $course->students()->detach($student_id); // Remove student from course

    return redirect()->back()->with('success', 'Student removed successfully!');
    }

}
