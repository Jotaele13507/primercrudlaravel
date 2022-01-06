@extends('layout/plantilla')

@section('tituloPagina', 'Crud con laravel 8')

@section('contenido')

    <div class="card">
        <h5 class="card-header">CRUD con Laravel 8 y MySQL</h5>
        <div class="card-body">

            <p>
                <a href="{{ route('personas.create') }}" class="btn btn-primary"><span class="fa solid fa-user-plus"></span>
                    Agregar Nueva Persona</a>
            </p>
            <hr>
            <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo Electronico</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                        @foreach ($datos as $item)
                            <tr>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->apellido }}</td>
                                <td>{{ $item->correo }}</td>
                                <td>{{ $item->fecha_nacimiento }}</td>
                                <td>
                                    <form action="#">
                                        <button class="btn btn-warning btn-sm">
                                            <span class="fas fa-user-edit"></span>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="#">
                                        <button class="btn btn-danger btn-sm">
                                            <span class="fas fa-user-times"></span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </p>
        </div>
    </div>

@endsection
