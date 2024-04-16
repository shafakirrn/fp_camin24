<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Student;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::with('student')->orderBy('created_at', 'DESC')->get();
        return view('courses.index', compact('courses'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Student::all(); // retrieve all students
        $teachers = Teacher::all(); // retrieve all teachers
        return view('courses.create', compact('students', 'teachers')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'schedule' => 'required',
        'teacher_id' => 'required|exists:teachers,id', 
        'student_id' => 'required|exists:students,id', 
    ]);

    Course::create($request->all());

    return redirect()->route('courses.index')->with('success', 'Course created successfully');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Course::findOrFail($id);
        return view('courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $teachers = Teacher::all(); 
        $students = Student::all();
        return view('courses.edit', compact('course', 'teachers', 'students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $request->validate([
        'name' => 'required',
        'schedule' => 'required',
        'teacher_id' => 'required|exists:teachers,id', 
        'student_id' => 'required|exists:students,id',
    ]);

    $course = Course::findOrFail($id);
    $course->update($request->all());

    return redirect()->route('courses.index')->with('success', 'Course updated successfully');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Course deleted successfully');
    }
}
