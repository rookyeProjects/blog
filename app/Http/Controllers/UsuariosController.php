<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$usuarios = Usuario::all();
        $usuarios = Usuario::orderBy('created_at', 'desc')->get();
        return view('usuarios.index')->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('usuarios.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre'   => 'required',
            'email'    => 'required', 
            'telefono' => 'required', 
            
        ]);

        //Crear el usuario
        $usuario = new Usuario;
        $usuario->nombre = $request->input('nombre');
        $usuario->email = $request->input('email');
        $usuario->telefono = $request->input('telefono');

        $usuario->save();

        return redirect('')->with('success', 'Usuario Agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuario::find($id);
        return view('usuarios.detalle')->with('usuario', $usuario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        return view('usuarios.editar')->with('usuario', $usuario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);

        $this->validate($request, [
            'nombre'  => 'required',
            'email' => 'required',
            'telefono' => 'required'

        ]);

        //Actualiar usuario
        $usuario->nombre = $request->input('nombre');
        $usuario->email = $request->input('email');
        $usuario->telefono = $request->input('telefono');

        $usuario->save();

        return redirect('/')->with('success', 'Usuario Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect('/')->with('success', 'Usuario Eliminado');
    }
}
