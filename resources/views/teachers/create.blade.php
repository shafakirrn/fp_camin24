@extends('layouts.app')
  
@section('title', 'Edit Teacher')
  
@section('contents')
    <h1 class="mb-0">Edit Teacher</h1>
    <hr />
    <form action="{{ route('teachers.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $teacher->name }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Address</label>
                <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $teacher->address }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Mobile</label>
                <input type="text" name="mobile" class="form-control" placeholder="Mobile" value="{{ $teacher->mobile }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Subject</label>
                <input type="text" name="subject" class="form-control" placeholder="Subject" value="{{ $teacher->subject }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection