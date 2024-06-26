@extends('layouts.app')

@section('title', 'Edit Course')

@section('contents')
    <div class="container">
        <h1 class="mb-4">Edit Course</h1>
        <hr />

        <form action="{{ route('courses.update', $course->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Course Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $course->name }}" required>
            </div>
            <div class="mb-3">
                <label for="schedule" class="form-label">Schedule</label>
                <input type="text" name="schedule" class="form-control" id="schedule" value="{{ $course->schedule }}" required>
            </div>
            <div class="mb-3">
                <label for="teacher_id" class="form-label">Teacher</label>
                <select name="teacher_id" class="form-select" id="teacher_id" required>
                    @foreach($teachers as $teacher)
                        <option value="{{ $teacher->id }}" {{ $course->teacher_id == $teacher->id ? 'selected' : '' }}>{{ $teacher->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
    <label for="student_id" class="form-label">Student</label>
    <select name="student_id" class="form-select" id="student_id" required>
        @foreach($students as $student)
            <option value="{{ $student->id }}" {{ $course->student_id == $student->id ? 'selected' : '' }}>{{ $student->name }}</option>
        @endforeach
    </select>
</div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
