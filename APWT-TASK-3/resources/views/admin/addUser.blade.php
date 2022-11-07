@extends('layouts.main')
@push('title')
<title>Add User</title>
@endpush
@section('content')
    <form action="{{route('addUser')}}"  method="post">
    {{csrf_field()}}
      
    <div class="container">
        <h1 class="text-center"> Add a user </h1>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="" class="form-control" />
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
        
        <br>
        <button class="btn btn-primary">Add</button>
    </div>
    </form> 
@endsection