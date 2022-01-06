@extends('layout/plantilla')

@section('tituloPagina', 'Actualizar Datos Personas')

@section('contenido')
    <br><br>
    <div class="card">
        <h5 class="card-header">Formulario para actualizar datos personas</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    @if ($mensaje = Session::get('Exitoso'))
                        <div class="alert alert-success" role="alert">
                            {{ $mensaje }}
                        </div>
                    @endif
                </div>
            </div>
            <p class="card-text"></p>
            <form action="{{ route('personas.update', $personas->id) }}" method="POST">
                @csrf
                @method("PUT")
                <label for="">Nombre </label>
                <input type="text" name="nombre" class="form-control" required value="{{ $personas->nombre }}">
                <label for="">Apellido </label>
                <input type="text" name="apellido" class="form-control" required value="{{ $personas->apellido }}">
                <label for="">Correo </label>
                <input type="text" name="correo" class="form-control" required value="{{ $personas->correo }}">
                <label for="">Fecha de Nacimiento </label>
                <input type="date" name="fecha_nacimiento" class="form-control" required
                    value="{{ $personas->fecha_nacimientos }}">
                <br>
                <a href="{{ route('personas.index') }}" class="btn btn-secondary"><span class="fas fa-undo-alt"></span>
                    Regresar</a>
                <button class="btn btn-warning"><span class="fas fa-user-edit"></span> Actualizar</button>
            </form>

        </div>
    </div>

@endsection
