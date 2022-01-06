@extends('layout/plantilla')

@section('tituloPagina', 'Agregar Personas')

@section('contenido')
    <br><br>
    <div class="card">
        <h5 class="card-header">Formulario para agregar personas</h5>
        <div class="card-body">

            <p class="card-text"></p>
            <form action="{{ route('personas.store')}}" method="POST">
                @csrf
                <label for="">Nombre </label>
                <input type="text" name="nombre" class="form-control" required>
                <label for="">Apellido </label>
                <input type="text" name="apellido" class="form-control" required>
                <label for="">Correo </label>
                <input type="text" name="correo" class="form-control" required>
                <label for="">Fecha de Nacimiento </label>
                <input type="date" name="fecha_nacimiento" class="form-control" required>
                <br>
                <a href="{{ route('personas.index') }}" class="btn btn-secondary"><span class="fas fa-undo-alt"></span>
                    Regresar</a>
                <button class="btn btn-primary"><span class="fa solid fa-user-plus"></span> Agregar</button>
            </form>

        </div>
    </div>

@endsection
