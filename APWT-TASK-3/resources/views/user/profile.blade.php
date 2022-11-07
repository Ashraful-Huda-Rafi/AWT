@extends('layouts.main')
@push('title')
<title>profile</title>
@endpush

@section('content')
    <h2>Welcome User</h2>
    @if(Session::get('logIn')) 
    
    <a class="btn btn-primary" href="{{route('list')}}">Userlist </a>
    <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
        
    @endif 
@endsection 