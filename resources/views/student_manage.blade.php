@extends('layout')
@section('body')
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Full name</th>
        <th scope="col">Birthday</th>
        <th scope="col">Address</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>
    <tbody>
    @foreach($students as $student)
              <tr>
                  <td>{{ $student->id }}</td>
                  <td>{{ $student->fullname }}</td>
                  <td>{{ $student->birthday }}</td>
                  <td>{{ $student->address }}</td>
                  <td><button type="button" class="btn btn-outline-primary"><a href="/student/edit/{{$student->id}}">Edit</a></button></td>
              </tr>
          @endforeach
    </tbody>
  </table>


@endsection
