@extends('layouts.app')

@section('content')
<div class="mt-5">
    <h1>Add Student</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="course">Course</label>
            <input type="text" class="form-control" id="course" name="course" required>
        </div>
        <div class="form-group">
            <label for="faculty">Faculty</label>
            <input type="text" class="form-control" id="faculty" name="faculty" required>
        </div>
        <div class="form-group">
            <label for="index">Index</label>
            <input type="text" class="form-control" id="index" name="index" required>
        </div>
        <div class="form-group">
            <label for="registration_number">Registration Number</label>
            <input type="text" class="form-control" id="registration_number" name="registration_number" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
