@extends('layouts.main')
@push('title')
<title>Add User</title>
@endpush
@section('content')
    <div class="container">
        <div class="row">
            <div class="" >
            <h4>Edit </h4>
                <form action="{{route('edit')}}" method="post">

                    @csrf
                <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" value="{{$user->name}}" placeholder="Name">
                <span class="text-danger">
                       @error('name')
                          {{$message}}
                      @enderror
                </span>
            </div>
       
       
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" value="{{$user->email}}"placeholder="Email">
                <span class="text-danger">
                    @error('email')
                         {{$message}}
                    @enderror
                </span>
            </div>

            <input type="hidden" name="id" class="form-control" value="{{$user->id}}">
       
            <div class="form-group">
                <strong>Date of Birth:</strong>
                <input type="dob" name="dob" class="form-control" value="{{$user->dob}}"placeholder="Date of Birth">
                <span class="text-danger">
                  @error('password')
                      {{$message}}
                  @enderror
                </span>
            </div>
            <div class="form-group">
                <strong>Password:</strong>
                <input type="password" name="password" class="form-control" value="{{$user->password}}"placeholder="Password">
                <span class="text-danger">
                  @error('password')
                      {{$message}}
                  @enderror
                </span>
            </div>
       
        <div class="text-center">
                <button type="submit" value="update" class="btn btn-primary">Update</button>

        </div>

       </form>
       @endSection