@extends('layouts.app')
  
@section('title', 'Edit Student')
  
@section('contents')
    <h1 class="mb-0">Edit Student</h1>
    <hr />
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $student->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Grade</label>
                <input type="text" name="grade" class="form-control" placeholder="Grade" value="{{ $student->grade }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">School</label>
                <input type="text" name="school" class="form-control" placeholder="School" value="{{ $student->school }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Address</label>
                <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $student->address }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Mobile</label>
                <input type="text" name="mobile" class="form-control" placeholder="Mobile" value="{{ $student->mobile }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Subject</label>
                <input type="text" name="subject" class="form-control" placeholder="Subject" value="{{ $student->subject }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection