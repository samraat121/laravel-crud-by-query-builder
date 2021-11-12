@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            Student Add
        </div>
        <div class="col">
            <a class="btn btn-primary float-right" href="{{url('/')}}">Back</a>
        </div>
    </div>
    <form action="{{url('/store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header">
                Student Create Form
            </div>
            <div class="card-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text"
                    class="form-control" name="name" id="name" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email"
                    class="form-control" name="email" id="email" placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                  <label for="class">Class</label>
                  <select class="form-control" name="class" id="class">
                    <option>One</option>
                    <option>Two</option>
                    <option>Three</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="subject">Subject</label>
                  <select class="form-control" name="subject" id="subject">
                    <option>Science</option>
                    <option>Arts</option>
                    <option>Commerce</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="courses_time">Cources Time</label>
                  <select class="form-control" name="courses_time" id="courses_time">
                    <option>6 Month</option>
                    <option>1 Year</option>
                    <option>2 Year</option>
                    <option>4 Year</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="bio">Student Bio</label>
                  <textarea class="form-control" name="bio" id="bio" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file"
                    class="form-control" name="image" id="image" />
                </div>
            </div>
            <div class="card-footer text-muted">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>


</div>







@endsection

