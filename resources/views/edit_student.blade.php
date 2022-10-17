@extends('layout')
@section('body')
<h2 style=" font-family:'Times New Roman', Times, serif">Edit Student</h2>

<form action="/student/update/{{ $student->id }}" method="post">
    @csrf
    <label for="Name">
        Fullname:
        <input type="text" name="fullname" value="{{ $student->fullname }}">
    </label><br><br>
    <label for="Email">
        Birthday:
        <input type="text" name="birthday" value="{{ $student->birthday }}">
    </label><br><br>
    <label for="Password">
        Address:
        <input type="text" name="address" value="{{ $student->address }}">
    </label><br><br>
    <button type="submit" class="btn btn-outline-primary">Edit student</button>
</form>

@endsection
