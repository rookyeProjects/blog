@extends('layouts.app');

@section('content')
   <h1>Crear usuario</h1>
   {!! Form::open(['action' => 'UsuariosController@store', 'method' => 'POST']) !!}
        
    {!! Form::close() !!}
@endsection