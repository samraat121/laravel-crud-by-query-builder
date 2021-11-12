@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            Student Edit
        </div>
        <div class="col">
            <a class="btn btn-primary float-right" href="{{url('/')}}">Back</a>
        </div>
    </div>
    <form action="{{url('/update').'/'.$student->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header">
                Student Edit Form
            </div>
            <div class="card-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text"
                    class="form-control" name="name" id="name" value="{{$student->name}}" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email"
                    class="form-control" name="email" id="email" value="{{$student->email}}"  placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                  <label for="class">Class</label>
                  {{$student->class}}
                  <select class="form-control" name="class" id="class">
                    <option {{ $student->class == 'One' ? 'selected' : '' }}>One</option>
                    <option {{ $student->class == 'Two' ? 'selected' : '' }}>Two</option>
                    <option {{ $student->class == 'Three' ? 'selected' : '' }}>Three</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="subject">Subject</label>
                  <select class="form-control" name="subject" id="subject">
                    <option {{ $student->subject == 'Science' ? 'selected' : '' }}>Science</option>
                    <option {{ $student->subject == 'Arts' ? 'selected' : '' }}>Arts</option>
                    <option {{ $student->subject == 'Commerce' ? 'selected' : '' }}>Commerce</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="courses_time">Cources Time</label>
                  <select class="form-control" name="courses_time" id="courses_time">
                    <option {{ $student->course_time == '6 Month' ? 'selected' : '' }}>6 Month</option>
                    <option {{ $student->course_time == '1 Year' ? 'selected' : '' }}>1 Year</option>
                    <option {{ $student->course_time == '2 Year' ? 'selected' : '' }}>2 Year</option>
                    <option {{ $student->course_time == '4 Year' ? 'selected' : '' }}>4 Year</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="bio">Student Bio</label>
                  <textarea class="form-control" name="bio" id="bio" rows="3">{{ $student->student_bio }}</textarea>
                </div>
                <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file"
                    class="form-control" name="image" id="image" />
                    <img style="width: 150px" src="{{asset('storage/student').'/'.$student->image}}" alt="Image">
                </div>
            </div>
            <div class="card-footer text-muted">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>


</div>







@endsection

