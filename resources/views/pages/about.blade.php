@extends('app')

@section('title')

About Us| {{config('app.name')}}
@endsection



 @section('content')  
 
 <img src="{{asset('/images/beau.jpg')}}"  alt="Concepteur du site" class="my-12 rounded shaddow-md h-40">

        <h2 class= "text-gray-700">Built with <span class="text-pink-500">&hearts;</span> by LES TEACHERS DU NET.</h2>

           <p class="mt-3">
              <a href= "{{route('home')}}" class="text-indigo-500 hover:text-indigo-600 underline">Revenir a la page d'accueil</a>
            </p>

@endsection

       

