<?php

namespace App\Http\Controllers;

use App\Models\Publicaciones;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {

        $publicacion = Publicaciones::orderBy('id', 'desc')->paginate();
        

        return view('publicaciones.index', compact('publicacion'));
    }

    public function create()
    {
        return view('publicaciones.create');
    }

    public function store(Request $request)
    {
        $public = new Publicaciones();

        $public->name = $request->name;
        $public->descripcion = $request->descripcion;
        $public->Categoria = $request->categoria;

        $public->save();
        return redirect()->route('cursos.show', $public);
    }

    public function show($id)
    {
        $posts = Publicaciones::find($id);

        return view('publicaciones.show', ['posts' => $posts]);
    }
}
