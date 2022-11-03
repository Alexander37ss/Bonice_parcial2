@extends('master')

@section('contenido')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Registrar Usuario</h1><hr>
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Teclea el nombre">
                </div>

                <div class="form-group">
                    <label for="">Edad:</label>
                    <input type="number" class="form-control" name="edad" placeholder="Teclea la edad">
                </div>

                <div class="form-group">
                    <input type="radio" name="sexo"> Masculino <br>
                    <input type="radio" name="sexo"> Femenino
                </div>

                <div class="form-group">
                    <label for="">Domicilio:</label>
                    <textarea name="domicilio" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Fecha de nacimiento:</label>
                    <input type="date" class="form-control" name="fecha_nacimiento">
                </div>
                <div>
                    <input type="submit" class="btn btn-primary" value="Registrar">
                    <a href="{{url('/consultar')}}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop