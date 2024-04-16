@extends('layouts.app')
  
@section('title', 'Create Student')
  
@section('contents')
    <h1 class="mb-0">Add Student</h1>
    <hr />
    <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="col">
                <input type="text" name="grade" class="form-control" placeholder="Grade">
            </div>
            <div class="col">
                <input type="text" name="school" class="form-control" placeholder="School">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="address" class="form-control" placeholder="Address">
            </div>
            <div class="col">
                <input type="text" name="mobile" class="form-control" placeholder="Mobile">
            </div>
            <div class="col">
                <input type="text" name="subject" class="form-control" placeholder="Subject">
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection