@extends('layouts.app')

@section('title', 'Show Teacher')

@section('contents')
    <h1 class="mb-0">Detail Teacher</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="title" class="form-control" placeholder="Name" value="{{ $teacher->name }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Address</label>
            <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $teacher->address }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Mobile</label>
            <input type="text" name="price" class="form-control" placeholder="Mobile" value="{{ $teacher->mobile }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Subject</label>
            <input type="text" name="price" class="form-control" placeholder="Subject" value="{{ $teacher->subject }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $teacher->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $teacher->updated_at }}" readonly>
        </div>
    </div>

@endsection