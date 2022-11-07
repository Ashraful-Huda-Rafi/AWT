@extends('layouts.main')
@push('title')
<title>Login Page</title>
@endpush
@section('content')
    <form action="{{route('login')}}"  method="post">
    {{csrf_field()}}
    
      
    <div class="container">
        <h1 class="text-center"> Login</h1>
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
            <label for="">Password</label>
            <input type="password" name="password" id="" class="form-control" />
            <span class="text-danger">
                @error('password')
                    {{$message}}
                @enderror
            </span>
        </div>
        
        <br>
        <button class="btn btn-primary">Submit</button>
    </div>
    </form> 
@endsection