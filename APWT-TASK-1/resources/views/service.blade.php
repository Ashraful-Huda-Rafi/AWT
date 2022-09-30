@extends('layouts.main')
@push('title')
<title>Service</title>
@endpush

@section('contain')
<h2>Service</h2>
@foreach($products as $products)
<li>{{$products}}</li>
@endforeach
@endsection