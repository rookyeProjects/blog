@extends('layouts.app')

@section('content')
   <h1>Crear usuario</h1>
    {!! Form::open(['action' => 'UsuariosController@store', 'method' => 'POST']) !!}
    {{Form::bsText('nombre')}}
    {{Form::bsText('email')}}
    {{Form::bsText('telefono')}}
    {{Form::bsSubmit('Enviar', ['class' => 'btn btn-success float-right'])}}
    {!! Form::close() !!}
@endsection