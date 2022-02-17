@extends('app')

@section('title')
{{config('app.name')}}
 @endsection

@section('content')

      <img src="/images/togo.png"  alt="Drapeau togolais">
   
        <h1>Hello from TOGO!!!!!</h1>
        <p>It currenttly {{ date('h:i A') }}.</p>
   
@endsection



