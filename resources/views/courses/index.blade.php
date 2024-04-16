@extends('layouts.app')

@section('title', 'Courses')

@section('contents')
    <div class="container">
        <h1 class="mb-4">Courses</h1>
        <a href="{{ route('courses.create') }}" class="btn btn-primary mb-3">Add Course</a>

        @if ($courses->isEmpty())
            <p>No courses found.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Schedule</th>
                        <th>Teacher</th>
                        <th>Student</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->schedule }}</td>
                            <td>{{ $course->teacher->name }}</td>
                            <td>
                                @if ($course->student)
                                    {{ $course->student->name }}
                                @else
                                    No student enrolled
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('courses.show', $course->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this course?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
