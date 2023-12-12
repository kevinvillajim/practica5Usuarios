<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Usuario::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->save();
        return redirect('/usuarios');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $usuario = Usuario::find($id);
        if ($usuario) {
            return $usuario;
        } else {
            return "El usuario no existe";
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        if ($usuario) {
            $usuario->nombre = $request->nombre;
            $usuario->apellido = $request->apellido;
            $usuario->email = $request->email;
            $usuario->password = $request->password;
            $usuario->save();
            return $usuario;
        } else {
            return "El usuario no existe";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        if ($usuario) {
            $usuario->delete();
            return redirect('/usuarios');
        } else {
            return "El usuario no existe";
        }
    }
}
