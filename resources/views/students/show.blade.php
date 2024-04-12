@extends('layouts.app')

@section('title', 'Show Student')

@section('contents')
    <h1 class="mb-0">Detail Student</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="title" class="form-control" placeholder="Name" value="{{ $student->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Grade</label>
            <input type="text" name="price" class="form-control" placeholder="Grade" value="{{ $student->grade }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">School</label>
            <input type="text" name="price" class="form-control" placeholder="School" value="{{ $student->school }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Address</label>
            <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $student->address }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Mobile</label>
            <input type="text" name="price" class="form-control" placeholder="Mobile" value="{{ $student->mobile }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Subject</label>
            <input type="text" name="price" class="form-control" placeholder="Subject" value="{{ $student->subject }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $student->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $student->updated_at }}" readonly>
        </div>
    </div>

@endsection