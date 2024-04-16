@extends('layouts.app')

@section('title', 'Course Details')

@section('contents')
    <div class="container">
        <h1 class="mb-4">Course Details</h1>
        <hr />

        <div class="mb-3">
            <strong>Course Name:</strong> {{ $course->name }}
        </div>
        <div class="mb-3">
            <strong>Schedule:</strong> {{ $course->schedule }}
        </div>
        <div class="mb-3">
            <strong>Teacher:</strong> {{ $course->teacher->name }}
        </div>
        <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
