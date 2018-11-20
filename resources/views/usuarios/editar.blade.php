@extends('layouts.app')

@section('content')
    <a class="btn btn-default" href="/blog/public/usuario/{{$usuario->id}}">Volver</a>
   <h1>Editar usuario</h1>
    {!! Form::open(['action' => ['UsuariosController@update', $usuario->id], 'method' => 'POST']) !!}
    {{Form::bsText('nombre', $usuario->nombre)}}
    {{Form::bsText('email', $usuario->email)}}
    {{Form::bsText('telefono', $usuario->telefono)}}
    {{Form::hidden('_method', 'PUT')}}
    {{Form::bsSubmit('Actualizar', ['class' => 'btn btn-success float-right'])}}
    {!! Form::close() !!}
@endsection