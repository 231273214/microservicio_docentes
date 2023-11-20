<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docentes;
use Illuminate\Http\Response;

class EstudianteController extends Controller
{
    public function index()
    {
        $docentes = Docentes::all();
        return new Response($docentes);
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $docente = new Docentes();
        $docente->nombre = $input['nombre'];
        $docente->email = $input['email'];
        $docente->telefono = $input['telefono'];
        $docente->save();

        return new Response($docente);
    }

    public function show($id)
    {
        $docente = Docentes::find($id);

        if (empty($docente)) {
            return new Response('Señor usuario no existe el registro', 404);
        }

        return new Response($docente);
    }

    public function update(Request $request, $id)
    {
        $docente = Docentes::find($id);

        if (empty($docente)) {
            return new Response('Señor usuario no existe el registro', 404);
        }

        $input = $request->all();
        $docente->nombre = $input['nombre'];
        $docente->email = $input['email'];
        $docente->telefono = $input['telefono'];
        $docente->save();

        return new Response($docente);
    }

    public function destroy($id)
    {
        $docente = Docentes::find($id);

        if (empty($docente)) {
            return new Response('Señor usuario no existe el registro', 404);
        }

        $docente->delete();
        return new Response('Registro eliminado', 200);
    }
}
