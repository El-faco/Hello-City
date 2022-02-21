@extends('app')

@section('title')
{{config('app.name')}}
 @endsection

@section('content')

      <img src="{{asset('/images/togo.png')}}"  alt="Drapeau togolais" class="rounded shaddow-md h-32">
   
        <h1 class="mt-5 text-5xl font-semibold text-indigo-800">Hello from TOGO!!!!!</h1>
        <p class="text-lg text-gray-600">It currenttly {{ date('h:i A') }}.</p>
   
@endsection



