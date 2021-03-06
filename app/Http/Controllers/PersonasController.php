<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{

    public function index()
    {
        //PAGINA DE INICIO
        $datos = Personas::paginate();
        return view('welcome', compact('datos'));
    }


    public function create()
    {
        //Formulario donde ageregamos datos

        return view('agregar');
    }


    public function store(Request $request)
    {
        //Sirve para guardar datos en la BD
        $personas = new Personas();
        $personas->nombre = $request->post('nombre');
        $personas->apellido = $request->post('apellido');
        $personas->correo = $request->post('correo');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();

        return redirect()->route('personas.index')->with("Exitoso", "Agregado con éxito!");
    }

    public function show($id)
    {
        //Servirá para obtener un registro de nuestra tabla
        $personas = Personas::find($id);
        return view('eliminar', compact('personas'));

    }


    public function edit($id)
    {
        //Sirve para traer los datos que se van a editar y los coloca en un formulario.

        $personas = Personas::find($id);
        return view('actualizar', compact('personas'));

    }


    public function update(Request $request, $id)
    {
        //Actualiza los datos en la BD
        $personas = Personas::find($id);
        $personas->nombre = $request->post('nombre');
        $personas->apellido = $request->post('apellido');
        $personas->correo = $request->post('correo');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();

        return redirect()->route('personas.index')->with("Exitoso", "Actualizado con éxito!");
    }


    public function destroy($id)
    {
        //Elimina un registro
        $personas = Personas::find($id);
        $personas->delete();
        return redirect()->route('personas.index')->with("Exitoso", "Eliminado con éxito!");

    }
}
