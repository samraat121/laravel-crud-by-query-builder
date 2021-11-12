@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            Student List
        </div>
        <div class="col">
            <a class="btn btn-primary float-right" href="{{ url('/create') }}">Add New Student</a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>NAME</th>
                <th>Image</th>
                <th>EMAIL</th>
                <th>CLASS</th>
                <th>SUBJECT</th>
                <th>COURSES TIME</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>
                        <img style="width: 70px;border-radius:302%" src="{{asset('storage/student').'/'.$student->image}}" alt="Image">
                    </td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->class}}</td>
                    <td>{{$student->subject}}</td>
                    <td>{{ $student->course_time }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{url('/edit').'/'.$student->id}}" type="submit">Edit</a>
                        <a class="btn btn-danger" href="{{url('/delete').'/'.$student->id}}" type="submit">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>







@endsection

