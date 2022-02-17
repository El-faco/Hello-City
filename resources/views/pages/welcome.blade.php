@extends('app')

@section('title')
{{config('app.name')}}
 @endsection

@section('content')
   
        <h1>Hello from TOGO!!!!!</h1>
        <p>It currenttly {{ date('h:i A') }}.</p>
   
@endsection

@section('footer')

&middot; <a href="{{route('about')}}">About Us</a>

@endsection

