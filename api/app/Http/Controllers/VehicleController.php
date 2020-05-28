<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\User;
use App\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    protected $rules = [
        'maker' => 'required|min:2|max:255',
        'model' => 'required|min:2|max:255',
        'vin' => 'min:2|max:90|alpha_num',
        'plate' => 'min:6|max:12|alpha_num',
        'year' => 'digits:4',
        'engine' => 'min:2',
        'fuel' => 'min:2|regex:/^[\pL\s\-]+$/u',
        'transmission' => 'min:2|regex:/^[\pL\s\-]+$/u',
        'color' => 'min:2|regex:/^[\pL\s\-]+$/u'
    ];

    public function index()
    {
        $user = Auth::user()->id;
        $vehicles = Vehicle::where('user_id', '=' , $user)->paginate();
        return response()->json($vehicles, 200);
    }

    public function store(Request $request)
    {
        $request->validate($this->rules);
        $data = $request->all();
        if ($data['user_id'] == '') {
            $data['user_id'] = Auth::user()->id;
        }
        try{
            $vehicle = Vehicle::create($data);
            return response()->json($vehicle, 200);
        } catch (\Illuminate\Database\QueryException $e){
            if ($e->errorInfo[0]==23514) {
                return response()->json([ 'message' => 'Debe ingresar una patente o chasis' ], 500);
            } else if ($e->errorInfo[0]==23505) {
                return response()->json([ 'message' => 'La patente ya existe' ], 500);
            } else {
                return response()->json($e->errorInfo, 500);
            }
        }
    }

    public function show($id)
    {
        $user = Auth::user()->id;
        $vehicle = Vehicle::where('user_id', '=', $user)->find($id);
        return response()->json($vehicle, 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate($this->rules);
        $vehicle = Vehicle::find($id);
        $vehicle->update($request->all());
        return response()->json($vehicle, 200);
    }

    public function destroy($id)
    {
        $vehicle = Vehicle::find($id);
        if ($vehicle != null){
            $vehicle->delete();
            return response()->noContent();
        }
        return response()->json(['message' => 'El vehículo no existe'], 500);
    }    
}
