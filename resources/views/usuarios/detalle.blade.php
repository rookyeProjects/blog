@extends('layouts.app');

@section('content')
    <div class="car">
        <div class="card-body">
            <a href="/blog/public/" class="btn btn-default float-right">Volver</a>
            <h3>{{$usuario->nombre}}</h3>
            <h4><span class="btn btn-danger">{{$usuario->email}}</span></h4>
            <div>{{$usuario->telefono}}</div>
            <br><br>
            <a href="/blog/public/usuario/{{$usuario->id}}/edit" class="btn btn-warning">Editar</a>
            <br><br>
            {!! Form::open(['action' => ['UsuariosController@destroy', $usuario->id], 'method' => 'POST']) !!}
            {{Form::bsSubmit('Borrar', ['class' => 'btn btn-success float-right'])}}
            {{Form::hidden('_method', 'DELETE')}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection