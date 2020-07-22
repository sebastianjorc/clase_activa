<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asignature;

class AsignatureController extends Controller
{
    public function index()
    {
        //TODO obtener los asignaturas segun el usuario
        $asignatures = Asignature::paginate();
        return response()->json($asignatures, 200);
    }


    public function getlist(){
        $asignatures = Asignature::all();
        return response()->json($asignatures, 200);
    }

    public function show($id)
    {
        $asignature = Asignature::find($id);
        return response()->json($asignature, 200);
    }

}
