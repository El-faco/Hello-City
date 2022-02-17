@extends('app')

@section('title')

About Us| {{config('app.name')}}
@endsection



 @section('content')  
 
 <img src="{{asset('/images/beau.jpg')}}"  alt="Concepteur du site">

        <p>Built with &hearts; by LES TEACHERS DU NET.</p>

           <p><a href= "{{route('home')}}">Revenir a la page d'accueil</a></p>

@endsection

       

