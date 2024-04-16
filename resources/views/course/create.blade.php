@extends('layouts.app')

@section('title', 'Create Course')

@section('contents')
    <div class="container">
        <h1 class="mb-4">Add Course</h1>
        <hr />

        <form action="{{ route('courses.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Course Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter course name" required>
            </div>
            <div class="mb-3">
                <label for="schedule" class="form-label">Schedule</label>
                <input type="text" name="schedule" class="form-control" id="schedule" placeholder="Enter course schedule" required>
            </div>
            <div class="mb-3">
                <label for="teacher_id" class="form-label">Teacher</label>
                <select name="teacher_id" class="form-select" id="teacher_id" required>
                    <option value="">Select teacher</option>
                    @foreach($teachers as $teacher)
                        <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
