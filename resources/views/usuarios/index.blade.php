@extends('layouts.app')

@section('content') 
<h1>Usuarios</h1>
@if(count($usuarios) > 0)
    @foreach($usuarios as $usuario)
    <div class="card">
        <div class="card-body">
            <h3><a href="usuario/{{$usuario->id}}">{{$usuario->nombre}}</a></h3>
        </div>
    </div>

    @endforeach
@endif
@endsection