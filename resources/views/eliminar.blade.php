@extends('layout/plantilla')

@section('tituloPagina', 'Eliminar Persona')

@section('contenido')

    <div class="card">
        <h5 class="card-header">Eliminar Persona</h5>
        <div class="card-body">

            <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas a punto de eliminar este registo. ¿Estas seguro?}
            </div>

            <div class="alert alert-danger" role="alert">
                <div class="table table-responsive">
                    <table class="table table-sm-table-hover">
                        <thead>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo Electronico</th>
                            <th>Fecha de Nacimiento</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <form action="#">
                <a href="{{ route('personas.index') }}" class="btn btn-secondary"><span class="fas fa-undo-alt"></span>
                    Regresar</a>
                <button class="btn btn-danger"><span class="fas fa-check"></span> Si, Estoy seguro</button>
            </form>
            </p>
        </div>
    </div>

@endsection
