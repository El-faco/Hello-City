@extends('app')

@section('title')

About Us| {{config('app.name')}}
@endsection

 @section('content')      
        <p>Built with &hearts; by LES TEACHERS DU NET.</p>

           <p><a href= "{{route('home')}}">Revenir a la page d'accueil</a></p>

@endsection

@section('footer')



@endsection
       

