@extends('layouts.main')
@push('title')
<title>Contact</title>
@endpush
@section('contain')
    <form action="{{route('contact')}}"  method="post">
    {{csrf_field()}}
    
      
    <div class="container">
        <h1 class="text-center"> Contact </h1>
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
             <label for="">Phone No</label>
             <input type="tel" id="" name="phoneno"  pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" class="form-control" />
            <span class="text-danger">
                @error('phoneno')
                    {{$message}}
                @enderror
            </span>
        </div>
        
        <br>
        <button class="btn btn-primary">Submit</button>
    </div>
    </form> 
@endsection