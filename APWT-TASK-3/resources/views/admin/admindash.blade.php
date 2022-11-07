@extends('layouts.main')
@push('title')
<title>Admin DashBoard</title>
@endpush
@section('content')
<h2>Welcome to Admin</h2>

@if(Session::get('logIn')) 
    
    <a class="btn btn-primary" href="{{route('userlist')}}">Userlist </a>
    <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
        
@endif 
@endsection

