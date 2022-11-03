@extends('master')
@section('contenido')
    <h1 class="text-center">Listado de alumnos</h1>
    <a href="{{ url('/usuario/registrar') }}" class="btn btn-secondary">Registrar Cuenta</a><br><br>
    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>No. Control</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Fecha de nacimiento</th>
            <th>Domicilio</th>
            <th>Telefono</th>
            <th>Opciones</th>
        </thead>
        <tbody>
            @foreach($alumnos as $a)
                <tr>
                    <td>{{$a->id}}</td>
                    <td>{{$a->n_control}}</td>
                    <td>{{$a->nombre}}</td>
                    <td>{{$a->edad}}</td>
                    <td>{{$a->sexo}}</td>
                    <td>{{$a->fecha_nacimiento}}</td>
                    <td>{{$a->domicilio}}</td>
                    <td>{{$a->telefono}}</td>
                    <td>
                        <a href="" class="btn btn-primary">Editar</a>
                        <a href="" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {{$alumnos->links()}}
    </div>
@stop