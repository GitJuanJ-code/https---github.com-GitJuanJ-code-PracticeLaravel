@extends('layouts.plantilla')

@section('title', 'Publicaciónes ' . $posts->name)

@section('content')
    <h1>Bienvenidos a  {{$posts->name}}</h1>
    <a href="{{route('publicaciones.index')}}">Volver a Mis Publicaciónes</a>
    <p><strong>Categoria: </strong>{{$posts->categoria}} </p>
    <p>{{$posts->descripcion}}</p>    
@endsection
