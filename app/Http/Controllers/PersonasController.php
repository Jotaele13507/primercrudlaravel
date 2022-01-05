<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{

    public function index()
    {
        //PAGINA DE INICIO
        $datos = Personas::all();
        return view('welcome', compact('datos'));
    }


    public function create()
    {
        //Formulario donde ageregamos datos

        return "Aquí puedes agregar";
    }


    public function store(Request $request)
    {
        //Sirve para guardar datos en la BD
    }

    public function show(Personas $personas)
    {
        //Servirá para obtener un registro de nuestra tabla
    }


    public function edit(Personas $personas)
    {
        //Sirve para traer los datos que se van a editar y los coloca en un formulario.

        return "Aquí se edita";
    }


    public function update(Request $request, Personas $personas)
    {
        //Actualiza los datos en la BD
    }


    public function destroy(Personas $personas)
    {
        //Elimina un registro
    }
}
