
@extends('layouts.app')
 
@section('content')
    <div class="container"> 
        <h2>Edit Faculty</h2> 
        <form method="POST" action="{{ route('faculties.update', $faculty->faculty_id) }}">
            @csrf 
            @method('PUT')
            <div class="form-group">
                <label for="faculty_name">Faculty Name:</label>
                <input type="text" class="form-control" id="faculty_name" name="faculty_name" value="{{ $faculty->faculty_name }}" required>
            </div>
            <div class="form-group">
                <label for="faculty_email">Email:</label>
                <input type="email" class="form-control" id="faculty_email" name="faculty_email" value="{{ $faculty->faculty_email }}" required>
            </div>
            <div class="form-group">
                <label for="faculty_contactno">PhoneNO:</label>
                <input type="number" class="form-control" id="faculty_contactno" name="faculty_contactno" value="{{ $faculty->faculty_contactno }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
 