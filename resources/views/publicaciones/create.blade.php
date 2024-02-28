@extends('layouts.plantilla')

@section('title', 'Creá Tu Publicación')

@section('content')
    <h1>Crea tu publicación aquí</h1>
    <form action="{{route('publicaciones.store')}}" method="POST">
        
        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>

        <br>
        <label>
            Descripción:
            <br>
            <textarea name="descripcion" rows="5"></textarea>
        </label>

        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria">
        </label>
        <br><br>
        <button type="submit">Enviar Formulario</button>

    </form>
@endsection
