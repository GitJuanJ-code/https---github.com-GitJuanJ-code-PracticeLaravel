@extends('layouts.plantilla')

@section('title', 'Publicaciónes')

@section('content')
    <h1>Bienvenido a mis publicaciones</h1>
    <a href="{{route('publicaciones.create')}}">Crear Curso</a>
    <ul>
        @foreach ($publicacion as $posts)
            <li>
                <a href={{route('publicaciones.show', $posts->id)}}>{{$posts->name}}</a>
            </li>
            
        @endforeach
    </ul>

   {{ $publicacion->links() }}

@endsection
    