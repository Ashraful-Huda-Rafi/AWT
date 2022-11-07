@extends('layouts.main')
@push('title')
<title>Edit User</title>
@endpush
@section('content')
    <form action="{{route('editUser')}}"  method="post">
    {{csrf_field()}}
      
    <div class="container">
        <h2 class="text-center"> Upadate User </h2>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="" value="{{$user->name}}" class="form-control" />
            <span class="text-danger">
                @error('name')
                    {{$message}}
                @enderror
            </span>
        </div>

        <input type="hidden" name="id" class="form-control" value="{{$user->id}}">

        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" id="" value="{{$user->email}}" class="form-control" />
            <span class="text-danger">
                @error('email')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="">Date of Birth</label>
            <input type="date" name="dob" id="" value="{{$user->dob}}" class="form-control" />
            <span class="text-danger">
                @error('dob')
                    {{$message}}
                @enderror
            </span>
        </div>


        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" id="" value="{{$user->password}}" class="form-control" />
            <span class="text-danger">
                @error('password')
                    {{$message}}
                @enderror
            </span>
        </div>
        
        <br>
        <button class="btn btn-primary">Update</button>
    </div>
    </form> 
@endsection