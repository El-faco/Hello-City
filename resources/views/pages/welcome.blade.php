@extends('app')

@section('title')
 Hello City
 @endsection

@section('content')
   
        <h1>Hello from TOGO!!!!!</h1>
        <p>It currenttly {{ date('h:i A') }}.</p>
   
@endsection

@section('footer')

&middot; <a href="/about-us">About Us</a>

@endsection

