@extends('layouts.main')
@push('title')
<title>Registration Page</title>
@endpush
@section('contain')
    <form action="{{route('register')}}"  method="post">
    {{csrf_field()}}
    <!-- {{url('/')}}/registration -->
      
    <div class="container">
        <h1 class="text-center"> Registration </h1>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="" class="form-control" value="{{old('name')}}"/>
            <span class="text-danger">
                @error('name')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" id="" class="form-control" />
            <span class="text-danger">
                @error('email')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="">Date of Birth</label>
            <input type="date" name="dob" id="" class="form-control" />
            <span class="text-danger">
                @error('dob')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" id="" class="form-control" />
            <span class="text-danger">
                @error('password')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="">Confirm Password</label>
            <input type="password" name="confirm_password" id="" class="form-control" />
            <span class="text-danger">
                @error('confirm_password')
                    {{$message}}
                @enderror
            </span>
        </div>
        <br>
        <button class="btn btn-primary">Submit</button>
    </div>
    </form> 
@endsection